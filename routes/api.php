<?php

use Illuminate\Http\Request;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::get('alumno','AlumnoController@index');
Route::get('alumno/{id}','AlumnoController@show');
Route::post('alumno','AlumnoController@store');
Route::put('alumno/{id}','AlumnoController@update');
Route::delete('alumno/{id}','AlumnoController@delete');
