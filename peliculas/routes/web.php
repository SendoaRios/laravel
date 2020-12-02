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

Route::get('/', HomeController::class);

// Route::get('master', function () {
//     return view('layouts/master');
// });
// Route::get('/', function () {
//     return view('home');
// });
// Route::get('login', function () {
//     return view('auth/login');
// });
// Route::get('index', function () {
//     return view('catalog/index');
// });
// Route::get('show', function () {
//     return view('catalog/show');
// });
// Route::get('create', function () {
//     return view('catalog/create');
// });
// Route::get('edit', function () {
//     return view('catalog/edit');
// });