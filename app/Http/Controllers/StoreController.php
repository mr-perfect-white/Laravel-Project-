<?php

namespace App\Http\Controllers;

use App\Models\Store_table;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function store(request $request){
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required | string| max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'path' => 'required',
            // Add more validation rules as needed
        ]);

        store_table::create([
            'name' => $request->name,
            'email_verified_at' => now(), // Add this if it makes sense for your application
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'path' => $request->path,
        ]);

        return redirect()->back()->with('success', 'Data has been saved!');
    }
        public function showBlog()
        {
            $store_tables = Store_table::all(); // Fetch all rows from the store_table

            return view('blog', compact('store_tables'));
        }
}
