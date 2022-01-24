<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Wiedia Junaedi",
        "email" => "junaediwiedia@gmail.com",
        "image" => "our.jpg"
    ]);
});

Route::get('/blog', [ArticleController::class, 'index']);


Route::get('/post/{posting:slug}', [ArticleController::class, 'show']);