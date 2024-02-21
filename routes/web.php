<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('page.home');
});

Route::get('/users', function () {
    $users = User::all();

    return view('page.users', compact('users'));
});