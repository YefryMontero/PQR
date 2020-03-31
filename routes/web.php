<?php




Route::get('/', function () {
    return view('welcome');
});
Route::get('registrousuario', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('registrousuario', 'Admin\UsuarioController@guardar')->name('registrar_usuario');
Route::get('admin/admin', 'InicioController@index')->name('inicio');
Route::get('seguridad/login', 'Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login', 'Seguridad\LoginController@login')->name('login_post');
Route::get('seguridad/logout', 'Seguridad\LoginController@logout')->name('logout');
Route::post('ajax-sesion', 'AjaxController@setSession')->name('ajax')->middleware('auth');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'superadmin']], function () {
    Route::get('', 'AdminController@index');
    /*RUTAS DE USUARIO*/
    Route::get('usuario', 'UsuarioController@index')->name('usuario');
    Route::get('usuario/crear', 'UsuarioController@crear')->name('crear_usuario');
    Route::post('usuario', 'UsuarioController@guardar')->name('guardar_usuario');
    Route::get('usuario/{id}/editar', 'UsuarioController@editar')->name('editar_usuario');
    Route::put('usuario/{id}', 'UsuarioController@actualizar')->name('actualizar_usuario');
    Route::delete('usuario/{id}', 'UsuarioController@eliminar')->name('eliminar_usuario');
    /*RUTAS DE PERMISO*/
    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');
    Route::post('permiso', 'PermisoController@guardar')->name('guardar_permiso');
    Route::get('permiso/{id}/editar', 'PermisoController@editar')->name('editar_permiso');
    Route::put('permiso/{id}', 'PermisoController@actualizar')->name('actualizar_permiso');
    Route::delete('permiso/{id}', 'PermisoController@eliminar')->name('eliminar_permiso');
    /*RUTAS DEL MENU*/
    Route::get('menu', 'MenuController@index')->name('menu');
    Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
    Route::post('menu', 'MenuController@guardar')->name('guardar_menu');
    Route::get('menu/{id}/editar', 'MenuController@editar')->name('editar_menu');
    Route::put('menu/{id}', 'MenuController@actualizar')->name('actualizar_menu');
    Route::get('menu/{id}/eliminar', 'MenuController@eliminar')->name('eliminar_menu');
    Route::post('menu/guardar-orden', 'MenuController@guardarOrden')->name('guardar_orden');
    /*RUTAS ROL*/
    Route::get('rol', 'RolController@index')->name('rol');
    Route::get('rol/crear', 'RolController@crear')->name('crear_rol');
    Route::post('rol', 'RolController@guardar')->name('guardar_rol');
    Route::get('rol/{id}/editar', 'RolController@editar')->name('editar_rol');
    Route::put('rol/{id}', 'RolController@actualizar')->name('actualizar_rol');
    Route::delete('rol/{id}', 'RolController@eliminar')->name('eliminar_rol');
    /*RUTAS MENU_ROL*/
    Route::get('menu-rol', 'MenuRolController@index')->name('menu_rol');
    Route::post('menu-rol', 'MenuRolController@guardar')->name('guardar_menu_rol');
    /*RUTAS PERMISO_ROL*/
    Route::get('permiso-rol', 'PermisoRolController@index')->name('permiso_rol');
    Route::post('permiso-rol', 'PermisoRolController@guardar')->name('guardar_permiso_rol');
      /*RUTAS PQRS*/
     Route::get('pqrs', 'PqrsController@index')->name('pqrs');
     Route::get('pqrs/crear', 'PqrsController@crear')->name('crear_pqrs');
     Route::post('pqrs', 'PqrsController@guardar')->name('guardar_pqrs');
});
  /*RUTAS INCONFORMIDADES*/
Route::get('pqrs/inconformidad', 'InconformidadController@index')->name('inconformidad');
Route::get('pqrs/inconformidad/crear', 'InconformidadController@crear')->name('crear_inconformidad');
Route::post('pqrs/inconformidad' , 'InconformidadController@guardar')->name('guardar_inconformidad');
Route::post('pqrs/inconformidad', 'InconformidadController@guardar')->name('guardar_inconformidad');
Route::get('pqrs/{id}/editar', 'InconformidadController@edit')->name('actualizar_inconformidad'); 
  /*RUTAS INCONFORMIDADES_RESPUESTAS*/
Route::get('pqrs/respuesta/{id}', 'RespuestaController@show')->name('responder_pqrs');
Route::post('pqrs/respuesta/{id}', 'RespuestaController@store')->name('guardar_respuesta');  