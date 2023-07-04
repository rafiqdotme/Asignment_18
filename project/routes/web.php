<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::delete('/posts/{id}/delete', [PostController::class, 'delete'])->name('posts.delete');


Route::get('/categories/{id}/posts', [CategoryController::class, 'getPosts'])->name('categories.posts');


Route::get('/catLatestPost/{id}', function (Request $request){
    $category = Category::find(1); // Replace 1 with the desired category ID
    $latestPost = $category->latestPost;

    if ($latestPost) {
        echo $latestPost->title;
        // Access other properties of the latest post as needed
    } else {
        echo "No posts found for this category.";
    }
});