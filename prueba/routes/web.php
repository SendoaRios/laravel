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

/*Para ejercicio 1,2*/

// Route::get('/', function () {
//     return view('pepe');
// });

// Route::get('login', function () {
//     return view('login');
// });

Route::get('logout', function () {
    return view('logout');
});

// Route::get('catalog', function () {
//     return view('catalog');
// });

// Route::get('catalog/show/{id}', function ($id) {
//     return view('catalog')->with('id', $id);
// });

// Route::get('catalog/create', function () {
//     return view('catalogcrear');
// });

// Route::get('catalog/edit/{id}', function ($id) {
//     return view('catalogedit')->with('id', $id);
// });

/* PARA EJERCICIOS 3, 4*/

Route::get('/', function () {
    return view('');
});
Route::get('login', function () {
    return view('auth/login');
});
Route::get('catalog', function () {
    return view('catalog/index');
});
Route::get('catalog/show/{id}', function ($id) {
    return view('partials/array_peliculas')->with('id', $id);
});
Route::get('catalog/create', function () {
    return view('catalog/create');
});
Route::get('catalog/edit/{id}', function ($id) {
    return view('catalog/edit')->with('id', $id);
});


