<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;


class ContactController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index(){

        $data = DB::table('contact_details')->get();

     //   $data = Contact::all();
//dd($data);
//return view('welcome',compact($data));
return redirect()->route('welcome', compact('data'));
    }
    
}
