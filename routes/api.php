<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Post;
use App\Categorytwo;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('articles', function(){
    return response()->json([
        'success' => true,
        'data' => Post::all()
    ], 200);
});

Route::get('categories', function () {
    return response()->json([
        'success' => true,
        'data' => Categorytwo::all()
    ], 200);
});