<?php

namespace App\Http\Controllers\image;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Picture;

class ImageController extends Controller
{
    public function form(){
        return view('imageUpload.create');
    }

    public function store(Request $request){
      $request->validate([
        'image' => 'required',
      ]);

      $fileName = null;
      if($request->hasfile('image')){
        $fileName ='jashim'.'.'.date('Ymdhmsis').'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/upload/image/',$fileName);
      }
      Picture::create([
        'image'=> $fileName,
      ]);
      return to_route('image.form')->with('success','Image Uploaded Successfully');
     
    }
}
