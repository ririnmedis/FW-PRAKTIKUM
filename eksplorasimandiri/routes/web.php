<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home', ['title' =>'Home Page']);
});

Route::get('/blog', function () {
    return view('blog', ['title'=>'blog']);
});

Route::get('/contact', function () {
    return view('contact');
});
