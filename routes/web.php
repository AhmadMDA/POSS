<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

//Basic Routing
//Route::get('/hello', function () {
    //return 'Hello World';
   //});
Route::get('/world', function () {
    return 'World';
   });
   
// Route Parameters
Route::get('/user1/{name}', function ($name) {
    return 'Nama Saya  '.$name;
    });
Route::get('/posts/{post}/comments/{comment}', function 
    ($postId, $commentId) {
     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });
Route::get('/articles/{id}', function ($id) {
        return 'Halaman Artikel  '.$id;
 });

// Optional Parameters
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });
    
// Route Name

   
//Route Group dan Route Prefixes


// Route Prefixes

// Redirect Routes
//Route::redirect('/here', '/there');

// View Routes
//Route::view('/welcome', 'welcome');
//Route::view('/welcome', 'welcome', ['name' => 'Taylor']);



//
// Controller
// Membuat Controller
// php artisan make:controller WelcomeController
Route::get('/hello', [WelcomeController::class,'hello']);

// php artisan make:controller  PageController 
Route::get('/index', [PageController::class,'index']);

// php artisan make:controller  AboutController 
Route::get('/about', [AboutController::class,'about']);
// php artisan make:controller  ArticleController 
Route::get('/articles/{id}', [ArticleController::class,'articles']);
//



// Resource Controller
use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);
Route::resource('photos', PhotoController::class)->except([
   'create', 'store', 'update', 'destroy'
   ]);



// View
//Membuat View
// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Maulana']);
// });
// View dalam direktori
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Maulana']);
// });



//Menampilkan View dari Controller
Route::get('/greeting', [WelcomeController::class, 'greeting']);

//Meneruskan data ke view


//Mahasiswa
route::get('/mahasiswa', function (){
$arrMahasiswa = ['Maulana Akbar','Ahmad Ridla', 'Yusril', 'Gibran','Rizky'];
    return view('list_Mahasiswa.mahasiswa', ['mahasiswa' => $arrMahasiswa]);
});
//Dosen
route::get('/dosen', function (){
$arrDosen = ['Bani Satrio Handoko','Milyun', 'Budi', 'Yusra','Rizky'];
    return view('list_Dosen.dosen', ['dosen' => $arrDosen]);
});

