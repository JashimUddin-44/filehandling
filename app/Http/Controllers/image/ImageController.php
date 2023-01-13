<?php

namespace App\Http\Controllers\image;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Picture;
use Illuminate\Support\Facades\File;

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
        $fileName ="jashim".'.'.date('Ymdhmsis').'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/upload/image/',$fileName);
      }
      Picture::create([
        'image'=> $fileName,
      ]);
      return to_route('image.form')->with('success','Image Uploaded Successfully');
     
    }

    public function view(){
      $images = Picture::all();
      return view('imageUpload.image_view',compact('images'));
    }


    public function delete_pic($id){
      $imagedelete=Picture::find($id);
      $fileName = $imagedelete->image; 
      $removeFile=public_path(). '/upload/image/'.$fileName;
      File::delete($removeFile);         
      $imagedelete->delete();

        return back();
    }







    public function edit($id){
      $imageEdit = Picture::find($id);
      return view('imageUpload.imageEdit',compact('imageEdit'));
    }
}
