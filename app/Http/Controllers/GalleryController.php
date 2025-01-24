<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    
   public function index()
   {
    //    $gallery = Gallery::all();
       //return view('gallery', compact('gallery'));

       return view('layouts.admin.gallery');
   }

    public function create()
    {
        return view('layouts.admin.gallery-create');
    }

    public function upload(Request $request)
{
    if($request->hasFile('file')){

        $uploadPath = public_path('uploads/gallery');

        $file = $request->file('file');

        $extention = $file->getClientOriginalExtension();
        $filename = time().'-'.rand(0,99).'.'.$extention;
        $file->move($uploadPath, $filename);

        $finalImageName = $uploadPath.$filename;

        Gallery::create([
            'image' => $finalImageName
        ]);

        return response()->json(['success' => 'Image Uploaded Successfully']);
    }
    else
    {
        return response()->json(['error' => 'File upload failed.']);
    }
}

}
