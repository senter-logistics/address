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

//Route::middleware(['prefix' => 'auth:check_client'])->group(function () {

Route::group(["middleware" => "apikey.validate"], function () {

Route::post('/getPostalCodeData/{id}', 'UtilsController@getPostalCodeData')->name('getPostalCodeData');
Route::post('/getPostalCodeDataFromCanada/{id}', 'UtilsController@getPostalCodeDataFromCanada')->name('getPostalCodeDataFromCanada')->middleware(\App\Http\Middleware\TrimStrings::class);
Route::post('/getPostalCodeDataFromColombia/{id}', 'UtilsController@getPostalCodeDataFromColombia')->name('getPostalCodeDataFromColombia')->middleware(\App\Http\Middleware\TrimStrings::class);


Route::post('/gePostalCodeSV/{id}', 'UtilsController@gePostalCodeSV')->name('gePostalCodeSV');


});