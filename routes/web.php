<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('layout.layout');
// })->name('layout');


Route::get('/land', function () {
    return view('layout.about');
})->name('about');

Route::get('/', function () {
    return view('layout.index');
})->name('index');

Route::get('/HTML', function () {
    return view('layout.html');
})->name('html');

Route::get('/abc', function () {
    return view('layout.css');
})->name('css');

Route::get('/JavaScript', function () {
    return view('layout.js');
})->name('js');

Route::get('/PHP', function () {
    return view('layout.php');
})->name('php');