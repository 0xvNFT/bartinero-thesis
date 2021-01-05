<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Post;

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
    
    $posts = Post::take(8)->get();

        return view('home', [
            'posts' => $posts
        ]);
})->name('home');

// Route::get('/categories', function () {
//     return view('pages.categories');
// });

Route::get('/show', function () {
    return view('posts.show');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
->name('dashboard');
// ->middleware('auth');
Route::delete('/dashboard', [DashboardController::class, 'destroy']);

Route::get('/single', [SingleController::class, 'index'])
->name('single');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{post}', [CategoryController::class, 'show'])->name('posts.show');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/upload', [RegisterController::class, 'uploadAvatar']);


Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts', [PostController::class, 'destroy']);



Route::put('/categories/{id}/likes', [PostLikeController::class, 'store'])->name('categories.likes');

// Route::post('/posts', [UploadController::class, 'uploadFile'])->name('posts');



// Route::get('/post', function () {
//     return view('pages.post');
// });