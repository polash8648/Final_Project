<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\JobCreate;

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
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/index', [AuthManager::class,'index'])->name('index');

Route::get('/login', [AuthManager::class,'login'])->name('login');
Route::post('/login', [AuthManager::class,'loginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class,'registration'])->name('registration');

Route::post('/registration', [AuthManager::class,'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthManager::class,'logout'])->name('logout');
Route::get('/edit/{id}', [AuthManager::class, 'edit'])->name('edit');
Route::post('/update/{id}', [AuthManager::class, 'update'])->name('update');
Route::delete('/delete/{id}', [AuthManager::class, 'delete'])->name('delete');


Route::post('/job', [JobCreate::class,'jobPost'])->name('job.post');
Route::get('/job', [JobCreate::class,'job'])->name('job');
Route::get('/joblist', [JobCreate::class,'joblist'])->name('joblist');
Route::get('/jobindex', [JobCreate::class,'jobindex'])->name('jobindex');




