<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

*/
Route::get('/getPostalCodeData/{id}', 'UtilsController@getPostalCodeData')->name('getPostalCodeData');
Route::get('/getPostalCodeDataFromCanada/{id}', 'UtilsController@getPostalCodeDataFromCanada')->name('getPostalCodeDataFromCanada')->middleware(\App\Http\Middleware\TrimStrings::class);
Route::get('/getPostalCodeDataFromColombia/{id}', 'UtilsController@getPostalCodeDataFromColombia')->name('getPostalCodeDataFromColombia')->middleware(\App\Http\Middleware\TrimStrings::class);
;
Route::get('/getCities/{id}', 'UtilsController@getCities')->name('getCities');

Route::get('/getCity/{id}', 'UtilsController@getCity')->name('getCity');
Route::get('/getEstate/{id}', 'UtilsController@getEstate')->name('getEstate');
Route::get('/getColonia/{id}', 'UtilsController@getColonia')->name('getColonia');
