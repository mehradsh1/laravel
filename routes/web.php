<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $productUrl = route('product.view', ['lang'=> 'en', 'id'=>1]);
    dd($productUrl);
    return view('welcome');
});
Route::view('/about_us','about')->name('about');
Route::get('/user/{username}', function (string $username){
    return "username= $username";
})->where('username', '[a-z]+');

Route::get('/search/{search}', function (string $search){
    return "$search";
})->where('search', '.+');

Route::get('/{lang}/product/{id}' , function (string $lang,string $id){
//..
})->where(['lang'=> '[a-z]{2}','id'=> '[\d]{4,}'])->name('product.view');

Route::prefix('admin')-> group(function(){
    Route::get('/users',function (){
        return '/admin/users';
    });
});

Route::name('admin.')-> group(function(){
    Route::get('/users',function (){
        return '/users';// esme routemoon hast "admin.users"
    })->name('users');
});
