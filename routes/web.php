<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Db;
use Illuminate\Support\Facades\log;





Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blogs', [
        'blogs'=>$category->blogs
    ]);
});
Route::get('/', function () {
    return view('blogs', [

        'blogs'=>Blog::with('category')->get()  //lazyloading
    ]);
});

Route::get('/blogs/{blog:slug}', function (Blog $blog) {
    return view('blog', [
        'blog'=>$blog
    ]);
})->where('blog', '[A-z\d\-_]+');


