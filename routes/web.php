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

    $data = [
        'title' => 'Hello Students i\'m Laravel your new friend',
        'students' => [
            'Carlo Carlotti',
            'Damian Perez',
            'Filippo Filippini',
            'Michele Cocò',
            'Francesco d\'Assisi',
            'Cristiano Guardalà',
        ]
    ];
    return view('home', $data);
});

Route::get('/content', function () {

    $data = [
        'title' => 'Lorem',
        'paragraphs' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse doloremque sunt facilis neque asperiores, sed id nisi earum non voluptatem debitis iure fugit, qui impedit nam, inventore quos dolorum aut.',
        'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse doloremque sunt facilis neque asperiores, sed id nisi earum non voluptatem debitis iure fugit, qui impedit nam, inventore quos dolorum aut.',
        'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse doloremque sunt facilis neque asperiores, sed id nisi earum non voluptatem debitis iure fugit, qui impedit nam, inventore quos dolorum aut.',
    ];
    return view('website.content', $data);
})->name('content');
