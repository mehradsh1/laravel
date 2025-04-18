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
Route::get('/user/{username}', function (string $username){
    return "username= $username";
})->where('username', '[a-z]+');
Route::get('/search/{search}', function (string $search){
    return "$search";
})->where('search', '.+');

Route::get('{lang}/product/{id}' , function (string $lang,string $id){

})->where(['lang' => '[a-z]{2}','id'=> '[\d]{4,}']);
