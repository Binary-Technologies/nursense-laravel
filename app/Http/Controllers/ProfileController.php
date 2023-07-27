<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function DpUpdate(Request $request,  $userId)
    {
        // Validate the form data, including the uploaded file
        $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the allowed file types and size as needed
        ]);

        // Get the user
        $user = User::find($userId);
        if ($user->thumbnail) {
            Storage::delete($user->thumbnail);
        }

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');

            $originalFileName = $file->getClientOriginalName();

            $path = $file->storeAs('public/profile/pictures/'.$user->id, $originalFileName);

            $user->thumbnail = $path;
            $user->save();

            return back()->with('success', 'Profile picture changed successfully!');
        }

        return back()->with('error', 'Failed to change profile picture.');
    }
}
