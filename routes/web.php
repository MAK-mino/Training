<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('Pages.Home');})->name('Home');
Route::get('/Contact', function () { return view('Pages.Contact');})->name('Contact');
Route::get('/Sign2', function () { return view('Pages.Sign2');})->name('Sign2');
Route::get('/Login', function () { return view('Pages.Login');})->name('Login');
Route::get('/Service', function () { return view('Pages.Service');})->name('Service');
Route::get('/Sign1', function () { return view('Pages.Sign1');})->name('Sign1');
Route::get('/Hero', function () { return view('Component.Hero');})->name('Hero');
Route::get('/About', function () { return view('Pages.About');})->name('About');
Route::get('/2', function () { return view('Pages.2');})->name('2');
Route::get('/3', function () { return view('Pages.3');})->name('3');