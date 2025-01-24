<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    
    public function index(){

        return view('layouts.admin.media');
    }


    public function store(Request $request)
    {
         return view('layouts.admin.upload-media');
    }

}
