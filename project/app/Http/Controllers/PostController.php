<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function postsByCategory(){
        $posts = Post::with('category')->get();
    }

//    example
//    foreach ($posts as $post) {
//    echo $post->title;
//    echo $post->category->name;
//    }



//    Task 7
    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }





    public function index()
    {
        $categories = Category::with('latestPost')->get();

        return view('latest_posts', compact('categories'));
    }

}
