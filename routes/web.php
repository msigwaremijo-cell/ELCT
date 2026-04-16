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

// e-Service pages
Route::get('/mobile', function () {
    return view('mobile');
})->name('mobile');

Route::get('/atm', function () {
    return view('atm');
})->name('atm');

Route::get('/online', function () {
    return view('online');
})->name('online');

Route::get('/ussd', function () {
    return view('ussd');
})->name('ussd');

Route::get('/portal', function () {
    return view('portal');
})->name('portal');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/forms', function () {
    return view('forms');
})->name('forms');

Route::get('/calculator', function () {
    return view('calculator');
})->name('calculator');

// Contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
