<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', ['as'=>'dashboard','middleware'=>'auth','uses'=>'DashboardController@index']);

Route::get('/', ['as'=>'login','uses'=>'LoginController@index']);
Route::post('/',['as'=>'login_session','uses'=>'LoginController@login']);
 Route::post('/logout',['as'=>'logout','uses'=>'LoginController@logout']);

/*Rutas de alumnos*/
Route::group(['prefix' => 'alumnos'], function (){
	Route::get('/',['as'=> 'alumno_view','uses'=>'AlumnoController@load']);
		
	Route::get('agregar',['as'=> 'alumno_add','uses'=>'AlumnoController@add']);
	Route::post('save', ['as'=>'alumno_guardar','uses'=>'AlumnoController@save']);

	Route::get('edit/{id}',['as'=>'alumno_edit','uses'=>'AlumnoController@detail']);
	Route::post('update',['as'=>'alumno_detail','uses' =>'AlumnoController@editar']);

	Route::get('eliminar/{id}',['as'=>'alumno_eliminar', 'uses'=>'AlumnoController@delete']);
});

Route::group(['prefix' => 'doctor'], function (){
	Route::get('/',['as'=> 'doctor_view','uses'=>'DoctorController@index']);
	Route::get('agregar',['as'=> 'doctor_add','uses'=>'DoctorController@add']);

	Route::get('eliminar/{id}',['as'=>'doctor_eliminar', 'uses'=>'DoctorController@delete']);

});


Route::group(['prefix' => 'examen'], function (){
	Route::get('/',['as'=> 'examen_view','uses'=>'ExamenController@index']);
	
	Route::get('agregar',['as'=> 'examen_add','uses'=>'ExamenController@agregar']);
	Route::post('save', ['as'=>'examen_guardar','uses'=>'ExamenController@save']);

	Route::get('edit/{id}',['as'=>'examen_edit','uses'=>'ExamenController@detail']);
	Route::post('update',['as'=>'examen_detail','uses' =>'ExamenController@editar']);


	Route::get('eliminar/{id}',['as'=>'examen_eliminar', 'uses'=>'ExamenController@delete']);

	Route::get('ver/{id}',['as'=>'examen_ver','uses'=>'PreguntasController@index']);
	
});
	
Route::group(['prefix' => 'pregunta'], function (){
	Route::get('/',['as'=> 'preguntas_view','uses'=>'PreguntasController@index']);

	Route::get('agregar/{id}',['as'=> 'preguntas_add','uses'=>'PreguntasController@add']);
	Route::post('save', ['as'=>'preguntas_guardar','uses'=>'PreguntasController@save']);

	Route::get('ver/{id}',['as'=>'preguntas_ver','uses'=>'OpcionesController@index']);
	
	Route::get('edit/{id}',['as'=>'preguntas_edit','uses'=>'PreguntasController@detail']);
	Route::post('update',['as'=>'preguntas_editar','uses' =>'PreguntasController@editar']);

	Route::get('eliminar/{id}',['as'=>'preguntas_eliminar', 'uses'=>'PreguntasController@delete']);

});

Route::group(['prefix' => 'opcion'], function (){
	Route::get('listar/{id}',['as'=> 'opciones_view','uses'=>'OpcionesController@index']);

	Route::get('agregar/{id}',['as'=> 'opciones_add','uses'=>'OpcionesController@add']);
	Route::post('save', ['as'=>'opciones_guardar','uses'=>'OpcionesController@save']);

});

Route::group(['prefix' => 'doctor'], function (){
	Route::get('/',['as'=>'doctor_view','uses'=>'DoctorController@load']);
	
	Route::get('agregar',['as'=> 'doctor_add','uses'=>'DoctorController@enviar']);
	Route::post('save', ['as'=>'doctor_guardar','uses'=>'DoctorController@save']);

	Route::get('edit/{id}',['as'=>'doctor_edit','uses'=>'DoctorController@detail']);
	Route::post('update',['as'=>'doctor_detail','uses' =>'DoctorController@editar']);

	Route::get('eliminar/{id}',['as'=>'doctor_eliminar', 'uses'=>'DoctorController@delete']);

});

Route::group(['prefix' => 'horario'], function (){
	Route::get('/',['as'=>'horario_view','uses'=>'HorarioController@load']);

	Route::get('agregar',['as'=> 'horario_add','uses'=>'HorarioController@create']);
	Route::post('save', ['as'=>'horario_guardar','uses'=>'HorarioController@save']);

	Route::get('edit/{id}',['as'=>'horario_editar','uses'=>'HorarioController@detail']);
	Route::post('update',['as'=>'horario_detail','uses' =>'HorarioController@editar']);


});

Route::group(['prefix' => 'cita'], function (){
	Route::get('/',['as'=>'cita_view','uses'=>'CitaController@load']);

	Route::get('agregar',['as'=> 'cita_add','uses'=>'CitaController@create']);
	Route::post('save', ['as'=>'cita_guardar','uses'=>'CitaController@save']);

	Route::get('edit/{id}',['as'=>'cita_editar','uses'=>'CitaController@detail']);
	Route::post('update',['as'=>'cita_detail','uses' =>'CitaController@editar']);


});

Route::group(['prefix' => 'prueba'], function (){
	Route::get('/',['as'=>'prueba_view','uses'=>'TestController@index']);
	Route::get('eliminar/{id}',['as'=>'prueba_eliminar', 'uses'=>'TestController@delete']);
});