<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function galleryRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'contents' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
        
        if ($validator->fails()) return redirect('/admin/galleryReg')->withErrors($validator)->withInput();

        $imagePath = null;
        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('public/files/gallery/', str_replace(' ', '-', $name));
        }

        Gallery::create([
            'title' => $request->input('title'),            
            'details' => $request->input('contents'),
            'path' => $imagePath,
        ]);
   
        return redirect('admin/galleryDash')->with('success', 'gallery has been uploaded Successfully');
    
    }

    public function galleryDelete($id)
    {
        $gallery = Gallery::findOrFail($id);
        Storage::delete($gallery->path);
        $gallery->delete();
        return redirect('/admin/galleryDash')->with('gallery delete','gallery deleted successfully');
    }

    public function galleryUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'contents' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($validate->fails()) return redirect()->back()->withErrors($validate)->withInput();

        $data = Gallery::findOrFail($id);
    
        if ($request->hasFile('image')) {
            // Delete the old avatar file if it exists
            if ($data->path) {
                Storage::delete($data->path);
            }
    
            $name = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('public/files/gallery/', str_replace(' ', '-', $name));
            $data->path = $imagePath;
        }

        $data->title = $request->input('title');
        $data->details = $request->input('contents');
       
        $data->save();
        
        return redirect('/admin/galleryDash')->with('gallery update','gallery updated successfully');
    }
}
