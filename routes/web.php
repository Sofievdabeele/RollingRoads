<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/contact', function () {
//     return view('contact', ['name' => 'Alex']);
// })->name('contact');

// Route::view('/home', 'home', ['name' => 'Taylor']);

// Route::get('/user/profile', function () {
//     return 'hi';
// })->name('profile');

Route::get('/', [HomeController::class, 'show'])->name('home');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');


Route::post('/form',[FormController::class, 'show'])->name(('form'));
