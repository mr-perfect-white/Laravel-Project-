<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\post;


use Illuminate\Http\Request;
use App\Models\news;  // Import the News model
use App\Models\post; 
class BlankController extends Controller
{
    public function blank()
    {
        return view('layouts.admin.page-blank');
    }


    public function view(){

         $posts = news::all();

        return view ('layouts.admin.view-post', ['posts'=>$posts]);
    }

    public function store()
    {
        // Validate input data
        $inputs = request()->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'file|nullable'
        ]);

        // Handle image upload if it exists
        if (request()->hasFile('image')) {
            $path = request()->file('image')->store('images', 'public');
            $inputs['image'] = $path;  // Store the file path
        }

        // Store the news for the authenticated user
        auth()->user()->news()->create($inputs);  // Use 'news' method (defined in User model)

        // Redirect back with a success message
        return redirect()->back()->with('success', 'News created successfully!');
    }



    public function destory(Post $post){

        $post->delete();

        return back();
    }
}

