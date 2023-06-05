<?php

namespace App\Http\Controllers;

use App\Models\Resource;
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
        
        $filePaths = [];

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                if ($file->isValid()) {
                    $path = $file->store('public/files');
                    $filePaths[] = $path;
                }
            }
        }

        if ($validator->fails())return redirect('/admin/resourceReg')->withErrors($validator)->withInput();
        
        $resource = new Resource();
        $resource->status = $request->input('flexRadioDefault');
        $resource->title = $request->input('title');
        $resource->details = $request->input('contents');
        $resource->path = json_encode($filePaths);

        $resource->save();
        
        return redirect('admin/resourceDash')->with('success', 'Resources has been uploaded Successfully');
    
    }
    public function resourceDelete($id)
    {
        $resource = Resource::findOrFail($id);
        $resource->delete();
        return redirect('/admin/resourceDash')->with('resource delete','Resource deleted successfully');
    }

    public function resourceUpdate(Request $request, $id )
    {
        
        $data = Resource::findOrFail($id);
        $data->status = $request->input('flexRadioDefault');
        $data->title = $request->input('title');
        $data->details = $request->input('contents');

        if ($request->hasFile('files')) {
            $filePaths = [];

            foreach ($request->file('files') as $file) {
                if ($file->isValid()) {
                    $path = $file->store('public/files');
                    $filePaths[] = $path;
                }
            }

            if ($data->path && is_array(json_decode($data->path))) {
                foreach (json_decode($data->path) as $filePath) {
                    Storage::delete($filePath);
                }
            }
            $data->path = json_encode($filePaths);
        }

            $data->save();

            return redirect('/admin/resourceDash')->with('resource update','Resource updated successfully');
   
        
    }
}
