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
Route::get('/crs', function () {
    return view('crs.create_apps');
});

Route::get('/cr', function () {
    return view('layouts.app_cr');
});

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('index');
});
