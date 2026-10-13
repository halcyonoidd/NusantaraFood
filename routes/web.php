
<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/menu', 'menu.index')->name('menu.index');
