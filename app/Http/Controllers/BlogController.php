<?php

namespace App\Http\Controllers;
use App\Http\Controllers\id; 
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

 use App\Models\News;




class BlogController extends Controller
{
  
public function blog(){
    
    return view('blog');
}



}
