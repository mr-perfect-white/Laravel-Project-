<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlankController extends Controller
{
   
   public function blank(){

    return view('layouts.admin.page-blank');
   }
}
