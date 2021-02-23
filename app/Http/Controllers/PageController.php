<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


class PageController extends Controller
{

    public function index() {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    /**
     * Show Posts
     * 
     * @return view
     */

    public function blog(Post $post)
    {
        $posts = $post->all();
        return view('blog', compact('posts'));
    }

}
