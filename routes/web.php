<?php


use App\Http\Controllers\CarController;
use App\Http\Controllers\ProductControler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
});
Route::view('/about','about')->name('about')->name('about');

//Route::controller(CarController::class)->group(function (){
 //   Route::get('/car',  'index');
   // Route::get('/my-car',  'mycars');
//});

Route::apiResources([
    'car' => CarController::class,
    'product' => ProductControler::class,

]);
