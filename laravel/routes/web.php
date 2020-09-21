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
  $data = config('pasta.data',[]);
  // prendo i dati dal file pasta.php presente nella cartella config
  // passo anche un array vuoto in caso non dovessi trovare i dati
  return view('molisana', compact('data'));
}) -> name('molisana');

Route::get('/home', function() {
  return view('home');
}) -> name('home');

Route::get('/prodotti', function() {
  return view('prodotti');
}) -> name('prodotti');

Route::get('/news', function() {
  return view('news');
}) -> name('news');
