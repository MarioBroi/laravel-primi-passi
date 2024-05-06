<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $data = [
        'name' => 'Ignazio',
        'surname' => 'Cocco'
    ];

    return view('home', $data);
})->name('home');

Route::get('/contact', function () {

    $contact = [
        'name' => 'Attilio',
        'surname' => 'Pinna',
        'phone' => '+39 3389966212',
        'email' => 'attiliopinna@live.it'
    ];

    return view('contact', $contact);
})->name('contact');

Route::get('/images', function () {
    return view('images');
})->name('images');
