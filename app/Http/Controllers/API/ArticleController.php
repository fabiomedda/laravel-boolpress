<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class ArticleController extends Controller
{
    //
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Post::all()
        ], 200);
    }
}