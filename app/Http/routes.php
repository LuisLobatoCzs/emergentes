<?php

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('admins/login','AdministratorsController@showLoginForm');

Route::post('admins/login','AdministratorsController@login');

Route::get('/home', 'HomeController@index')->middleware('auth');

Route::group(['middleware'=>'admin'],function(){
		Route::get('/admin/series','Admin\seriesController@index');
		Route::get('/admin/series/{id}','Admin\seriesController@edit');
	}
	);

	
//Ruta del contacto
 Route::get('/administrador', function(){
return view('administrador');
});
	
 Route::get('/inicio', function(){
return view('inicio');
});
	
	
	
	
	
	
	
	
//--------------------------------------------------
//Ruta del perfil
Route::get('/perfil', function(){
return view('Perfil/perfil');
})->middleware('auth');
//--------------------------------------------------
//Ruta del contacto
 Route::get('/contacto', function(){
return view('Contacto/contacto');
});
//Ruta para acerca de nosotros
Route::get('/acerca-de', function(){
return view('Acerca/acerca');
});
//Route::get