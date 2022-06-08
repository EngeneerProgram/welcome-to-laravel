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
    return 'Hello classe 60';
    //return view('welcome');
});


Route::get('/abaut-me', function(){
    $name = 'Rosaio Garufi';
    $job = 'teacher';
    $articles = ['learn php', 'learn js', 'learn laravel', 'learn html', 'learn css'];
    return view('abaut-me', compact('name', 'job', 'articles'));
});