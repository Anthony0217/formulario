<?php

use Illuminate\Support\Facades\Route;

Route::get('/tps', function () {
    return view('plantilla');
});

Route::get('/menu' , 'Control@menu');
Route::get('/gustav' , 'Control@gustav');
Route::get('/gustabo' , 'Control@gustabo');
Route::get('/henri' , 'Control@henri');
Route::get('/picasso' , 'Control@picasso');


