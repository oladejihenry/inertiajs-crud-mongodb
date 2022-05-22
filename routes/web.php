<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Home',[
        'name' => 'John Doe',
        'age' => 30,
    ]);
});

//Post Controller
Route::get('posts', [PostController::class, 'index'])->name('index');
Route::get('/post/create', [PostController::class, 'create'])->name('create');
Route::post('/posts', [PostController::class, 'store']);
// Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('edit');
