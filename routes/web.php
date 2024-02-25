<?php

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
    return view('welcome');
})->name('welcome');


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/Contact', function () {
    return view('Contact');
})->name('Contact');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');
