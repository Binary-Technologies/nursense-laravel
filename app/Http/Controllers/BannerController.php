<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function bannerRegister(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'title' => 'required',
            'contents' => 'required',
            'link' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        $name = $request->input('name');
        $title = $request->input('title');
        $content = $request->input('contents');
        $link = $request->input('link');
        $sequence = $request->input('sequence');
    
        // Store the image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('public/banner');
        }

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        } else {
            Banner::create([
                'status' => $request['flexRadioDefault'],
                'name' => $name,
                'title' => $title,            
                'content' => $content,
                'link' => $link,
                'sequence' => $sequence,
                'image' => $imagePath,
            ]);
        return redirect('/admin/bannerDash')->with('success', 'Banner has been added.');
        }   
    }

    public function bannerDelete($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();
        return redirect('/admin/bannerDash')->with('banner delete','Banner deleted successfully');
    }

    public function bannerUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'title' => 'required',
            'contents' => 'required',
            'link' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
    
        $data = Banner::findOrFail($id);
        $data->status = $request->input('flexRadioDefault');
        $data->name = $request->input('name');
        $data->title = $request->input('title');
        $data->content = $request->input('contents');
        $data->link = $request->input('link');
        $data->sequence = $request->input('sequence');

        if ($request->hasFile('image')) {
            // Delete the old avatar file if it exists
            if ($data->image) {
                Storage::delete($data->image);
            }
    
            $imagePath = $request->file('image')->store('public/banner');
            $data->image = $imagePath;
        }
    
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        } else {
            $data->save();
            
            return redirect('/admin/bannerDash')->with('success','Banner updated successfully');
   
        }
    }
}
