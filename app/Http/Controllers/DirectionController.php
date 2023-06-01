<?php

namespace App\Http\Controllers;

use App\Models\Direction;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    public function directionUpdate(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'address' => 'required',
            'transportation' => 'required',
            'mobile' => 'required',
        ]);
    
        $data = Direction::findOrFail($id);
        $data->address = $request->input('address');
        $data->transportation = $request->input('transportation');
        $data->mobile = $request->input('mobile');

    
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        } else {
            $data->save();
            
            return redirect('/admin/directionDetails')->with('direction update','Direction updated successfully');
   
        }
    }
}
