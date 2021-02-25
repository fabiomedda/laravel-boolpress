<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categorytwo;

class CategorytwoController extends Controller
{
    //
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Categorytwo::all()
        ], 200);
    }
}
