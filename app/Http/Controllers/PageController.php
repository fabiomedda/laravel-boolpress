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

    public function articles_api()
    {
        return view('boolpress.articles_api');
    }

    public function categories_api()
    {
        return view('boolpress.categories_api');
    }

    public function tags_api()
    {
        return view('boolpress.tags_api');
    }

}
