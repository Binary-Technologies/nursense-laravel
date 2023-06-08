<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResourceController extends Controller
{
    public function resourceAdd(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'contents' => 'required',
            'files' => 'required',
            'files.*' => 'mimes:jpeg,png,pdf|max:2048',
        ]);
        
        if ($validator->fails()) return redirect('/admin/resourceReg')->withErrors($validator)->withInput();

        $resource = new Resource();
        $filePaths = [];
        $resource->status = $request->input('exposureStatus');
        $resource->title = $request->input('title');
        $resource->details = $request->input('contents');
        $resource->path = json_encode($filePaths);

        $resource->save();

        $id = $resource->id;
        foreach ($request->file('files') as $file) {
            if ($file->isValid()) {
                $name = $file->getClientOriginalName();
                $path = $file->storeAs('public/files/resources/'.$id,$name);
                $filePaths[] = $path;
            }
        }
        $resource->path =$filePaths;
        $resource->save();
   
        return redirect('admin/resourceDash')->with('success', 'Resources has been uploaded Successfully');
    
    }
    public function resourceDelete(Request $request,$id)
    {
        $resource = Resource::findOrFail($id);
        /*
            foreach (json_decode($resource->path) as $filePath) {
                Storage::delete($resource->$filePath);

            } */
        Storage::deleteDirectory('public/files/resources/'.$id);
        $resource->delete();

        return redirect('/admin/resourceDash')->with('resource delete','Resource deleted successfully');
    }

    public function resourceUpdate(Request $request, $id )
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'contents' => 'required',
            'files' => 'required',
            'files.*' => 'mimes:jpeg,png,pdf|max:2048',
        ]);
        
        if ($validator->fails()) return redirect('/admin/resourceReg')->withErrors($validator)->withInput();
        
        $data = Resource::findOrFail($id);
        $data->status = $request->input('exposureStatus');
        $data->title = $request->input('title');
        $data->details = $request->input('contents');

        if ($request->hasFile('files')) {
            $filePaths = [];
            if ($data->path && is_array(json_decode($data->path))) {
                foreach (json_decode($data->path) as $filePath) {
                    Storage::delete($filePath);
                }
            }

            foreach ($request->file('files') as $file) {
                if ($file->isValid()) {
                    $name = $file->getClientOriginalName();
                    $path = $file->storeAs('public/files/resources/'.$id,$name);
                    $filePaths[] = $path;
                }
            }
            
            $data->path = json_encode($filePaths);
        }
            
        $data->save();
        return redirect('/admin/resourceDash')->with('resource update','Resource updated successfully');
    }
}
