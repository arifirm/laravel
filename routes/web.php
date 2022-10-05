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

Route::get('/', function () {
    return view('home', [
        'name' => 'Ari',
        'role' => 'admin',
        'motor' => ['CBR250RR','CB150R','R15', 'R6', 'Zx25']
     ]);
});

Route::get('/about', function() {
    return view('about');
});