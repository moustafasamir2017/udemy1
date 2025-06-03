<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleActionController;
use App\Models\Blog;
use App\Models\MyBlog;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/single-action', SingleactionController::class );

Route::get('/', [HomeController::class,'index'] );

Route::get('/contact', function () {
    $title="Title From Route";
    $books=['IT Book','Clean Code',"Dirty Code"];
//    return view('contact.index');
    return view('contact.index',['title'=>$title,'books'=>$books]);
})->name('contact');

//Route::get('/about', function () {
////    return 'this is about page';
//    return view('about');
//})->name('about');

Route::get('/about', [HomeController::class,'showAboutPage'] );

Route::get('/user/{id}', function ($id) {
    return 'Hi, user '.$id;
});

Route::get('/user/{id}/{slug}', function ($id,$slug) {
    return 'Hi, user '.$id.' - '.$slug;
})->name('user');

//Route::group(['prefix'=>'blog', 'as' => 'blog.'],function (){
//
//    Route::get('/create', function () {
//        return 'Blog Create Page';
//    })->name('create');
//
//    Route::get('/edit', function () {
//        return 'Blog Edit Page';
//    })->name('edit');
//
//    Route::get('/show', function () {
//        return 'Blog Show Page';
//    })->name('show');
//
//});

// Route Methods
/**
 *  1. Get // get data
 *  2. Post // submit/store data
 *  3. Put // update data
 *  4. Patch // update data (specific data in raw)
 *  5. Delete // delete data
 */

Route::get('get-route', function () {
   return;
});

Route::post('post-route', function () {
    return;
});

Route::put('put-route', function () {
    return;
});

Route::patch('patch-route', function () {
    return;
});

Route::delete('delete-route', function () {
    return;
});

Route::fallback(function () {
    return "OOOOOPS WE COULDN'T FIND PAGE";
});


//Blog
//Create
//Update
//Delete
//(CRUD)

//Route::resource('/blog', BlogController::class);

//Route::get('/blog', function (){
//    $blog = MyBlog::all();
//    dd($blog);
//});

Route::get('/blog', function (){
    $blog = Blog::all();
    dd($blog);
});
