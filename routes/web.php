<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $person = [
        "name"=> "Mehrad",
        "email"=> "mehrno55@gmail.com",
    ];
    dd($person);
    return view('welcome');
});
Route::view('/about','about');
