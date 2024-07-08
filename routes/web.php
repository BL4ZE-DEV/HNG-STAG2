<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/auth/register', function () {
    return view('register');
});

Route::get('/api/auth/login', function () {
    return view('login');
});

Route::get('/api/user/{id}',function () {
    return view('showuser');
});
