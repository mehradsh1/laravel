<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $person = [
        "name"=> "Mehrad",
        "email"=> "mehrno55@gmail.com",
    ];
    dump($person);
    return view('welcome');
});
Route::view('/about','about');

Route::get('/product/{id}' , function (string $id){
    return "works! $id";
})->whereNumber('id');
