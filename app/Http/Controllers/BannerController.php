<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function bannerRegister(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'contents' => 'required',
            'link' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif', // Example validation rule for a single image
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

        Banner::create([
            'status' => $request['flexRadioDefault'],
            'name' => $name,
            'title' => $title,            
            'content' => $content,
            'link' => $link,
            'sequence' => $sequence,
            'image' => $imagePath,
        ]);
        return redirect('/admin/bannerAdd')->with('success', 'Banner has been added.');
        
    }
}
