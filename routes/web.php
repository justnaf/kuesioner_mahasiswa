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
    return view('home');
})->name('home');
Route::get('/survey',function(){
    return view('survey');
})->name('survey');


Route::get('/pertanyaan-list', function(){
    return view('/pertanyaan/index');
})->name('input-kuesioner');
Route::get('/pertanyaan-input', function(){
    return view('/pertanyaan/create');
})->name('input-kuesioner');
Route::get('/jawaban-input', function(){
    return view('/pertanyaan/create-jawaban');
})->name('input-kuesioner');


Route::get('/kuesioner-detail', function(){
    return view('/kuesioner/detail-hasil');
})->name('hasil-kuesioner');
Route::get('/kuesioner-hasil', function(){
    return view('/kuesioner/show-hasil');
})->name('hasil-kuesioner');

Route::get('/data-prodi', function(){
    return view('/prodi/index');
})->name('data-prodi');