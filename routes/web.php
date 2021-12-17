<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/member', [App\Http\Controllers\HomeController::class, 'member'])->name('member');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
Route::get('/kontak-kami', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

// Route::get('/users/{user}/edit', [UserController::class,'edit'])->middleware('can:update,user');
Route::get('/users/{user}/edit' , [UserController::class,'edit'])->middleware('can:update,user');
Route::patch('/users/{user}', [UserController::class,'update'])->middleware('can:update,user');
Route::delete('/users/{user}', [UserController::class,'destroy'])->middleware('can:delete,user');


