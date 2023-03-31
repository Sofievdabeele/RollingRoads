<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'show'])->name('home');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');


Route::get('/form',[FormController::class, 'show'])->name('form');
Route::post('/form-save',[FormController::class, 'store'])->name('form.store');


Route::get('/articles', [ArticleController::class, 'show'])->name('articles');

Route::get('/member',[MemberController::class, 'show'])->name('member');

Route::get('/articles/{article}', [ArticleController::class, 'showDetail'])->name('article');


