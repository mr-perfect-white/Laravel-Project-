<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Auth\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Contact;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ErrorController;
use App\Models\address;
use Illuminate\Support\Carbon;
use App\Models\post;
use App\Models\Update;

use App\config\mail;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
     return view('welcome');

});
    // $data = [

    //     'title'=> 'Welcome the new Mail Mailgun Setup',
    //     'Content'=> 'This is mail Mailgun Setup Format',
    // ];

    // Mail::sent('emails.mails', $data, function($message){

    //     $message->to('dhilipkumarcit@hgmail.com', 'Dhilip')->subject('Welcome Dhilip How are you');
    // });
   


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', [Contact::class, 'index']);


Route::get('/blog', [BlogController::class, 'blog']);


Route::get('/error', [ErrorController::class, 'error']);

use Illuminate\Support\Facades\DB;


// Route::get('/update', function(){

//     $posts = \App\Models\Post::all();

//     foreach ($posts as $post) {
//         $postid = $post->id ?? 'N/A';
//         $postNames = $post->name ?? 'N/A';
//         $postmail = $post->email ?? 'N/A';
//         $postdescr = $post->descr ?? 'N/A';
//     }
    
//    return "id = ". $postid. "<br>" ."Name = " .$postNames ." <br>" ."Email = ".$postmail . "<br>" . "Description = " . $postdescr. "";
//     // DB::insert('insert into posts(title, content) values(?,?)', ['php', 'lorem Comtent ']);
// });



Route::get('/insert', function(){


    //  $User = $users::all();


    $addresss = new Address([
        'name' => 'Welcome to the Insert data in Databases',
        'email' => 'example@example.com', // Ensure you set a unique email
        'user_id' => 1, // Replace with a valid user_id
        'password' => bcrypt('password'), // Encrypt the password
    ]);


  $addresss->save();

  return 'Address inserted successfully!';
    
});


Route::get('/read', function(){


    $addresses = Address::all();

    foreach ($addresses as $address) {
        echo 'Name: ' . $address->name . '<br>';
        echo 'Email: ' . $address->email . '<br>';
        echo 'User ID: ' . $address->user_id . '<br>';
        echo 'Email Verified At: ' . $address->email_verified_at . '<br>';
        echo 'Password: ' . $address->password . '<br>';
        echo '<hr>';

        //return ucfirst($address->email); 
        return strtoupper($address->email);  // ucfirst mean the first lettter allways to upper case
    }
   
});


Route::post('/store', [StoreController::class, 'store']);

Route::get('dates', function(){

    $date = new DateTime('+2 Day');

    echo $date->format('d-m-y'); 
    ?><br><?php 
    echo Carbon::now();

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/user/role' , ['middleware' => 'role',  function(){

return('');

}]);


