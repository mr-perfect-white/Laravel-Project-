<?php

namespace App\Http\Controllers;
use App\Http\Controllers\id; 
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    
    public function index()
    {
        // Fetch news records from the database
        $news = News::all();  // Or you can use paginate() for pagination

        // Pass the news data to the view
        return view('blog', compact('news'));  // Passing 'news' variable to the view
    }

   
    public function show($id)
    {
        // Retrieve the news item by ID
        $newsItem = News::findOrFail($id);
    
        // Return the view with the news item
        return view('blog.show', compact('newsItem'));
    }

    public function blogpost(){

        return view('blog-post');
    }
    public function show1($id)
    {
        // Retrieve the news item by ID
        $newsItem = News::findOrFail($id);
    
        // Return the view with the news item
        return view('blog-post', compact('newsItem'));
    }
    // public function show($id)
    // {
    //     $news = News::findOrFail($id);
    //     return view('blog-post', ['news' => $news]);
    // }
    
    


    

}
