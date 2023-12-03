<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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
    $posts = [];
    $posts = Post::all();
    return view('welcome', ['posts' => $posts]);
});

Route::get('/sign_in', function () {
    return view('login');
});

Route::get('/sign_up', function () {
    return view('register');
});

//user register,login and logout routes
Route::post('/submit', [UserController::class, 'submit']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

//post routes
Route::post('/create_post', [PostController::class, 'createPost']);
Route::get('/account', [PostController::class, 'account']);
Route::get('/update_post/{post}', [PostController::class, 'update']);
Route::put('/updatedPost/{post}', [PostController::class, 'updatePost']);
Route::delete('/delete_post/{post}', [PostController::class, 'deletePost']);
