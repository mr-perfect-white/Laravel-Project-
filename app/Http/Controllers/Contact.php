<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public function index(Request $request){

        // session(['Aditya'=> 'Cannada']);

        // $request->session()->forget('Aditya');
        // $request->session()->flush();

        // $request->session()->flash('Message','Post has been posted');

    //    return  $request->session()->get('Message');
         return view('contact');
    }


    // public function store(Request $request)

    // return $request();

    // }

}
