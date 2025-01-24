<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\post;


use Illuminate\Http\Request;
use App\Models\news;  // Import the News model

use App\Models\Post;
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


    public function edit($id)
    {
        // Your edit logic here
        return view('layouts.admin.view-post', compact('id'));
    }

    public function store()
    {
        $inputs = request()->validate([
            'user_id' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'body_content' => 'required|string',
            'image' => 'file|required'
        ]);
    
        // Handle the file upload
        if (request()->hasFile('image')) {
            $path = request()->file('image')->store('images', 'public');
            $inputs['image'] = $path; // Save the file path
        }
    
        // Save the data in the database
    \App\Models\News::create($inputs);

    // Redirect with a success message
    return redirect()->back()->with('success', 'Post created successfully!');
        // (dd($inputs));
        // Store the news for the authenticated user
        // auth()->user()->news()->create($inputs);  // Use 'news' method (defined in User model)

        // Redirect back with a success message
        // return redirect()->back()->with('success', 'News created successfully!');
    }


    // public function destroy($id)
    // {
    //     $news = News::findOrFail($id);  // Fetch from news table
    //     $news->delete();  // Delete the record
        
    //     return redirect()->route('view-post.index')  // Redirect after deletion
    //                      ->with('success', 'News deleted successfully.');
    // }
}

