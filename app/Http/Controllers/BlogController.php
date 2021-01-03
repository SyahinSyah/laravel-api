<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Inertia\Inertia;

class BlogController extends Controller
{

    public function __construct()
    {
        Inertia::setRootView('blog'); //nak cari view blog.blade instead of app.blade
    }

    public function index()
    {
        $posts = Post::activePost()
        ->with('user:id,name')
        ->with('categories:slug,name')->get(); //post dgn user data
       //dd($posts);
        return Inertia::render('Blog/Index',['posts' => $posts]);
    }

    public function show($slug)
    {
       $post = Post::with('user:id,name')
                ->with('categories:slug,name')
                ->where('slug',$slug)
                ->firstOrFail();

        return $post;
    }


}
