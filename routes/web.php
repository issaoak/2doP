<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('formUsuarios');
});
Route::post('/')
