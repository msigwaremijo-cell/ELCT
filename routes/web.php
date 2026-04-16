<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('home');
})->name('home');

// About page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Products page
Route::get('/products', function () {
    return view('products');
})->name('products');

// e-Services page
Route::get('/eservices', function () {
    return view('eservices');
})->name('eservices');

// Contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
