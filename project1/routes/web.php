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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', 'UserController');


//Route::get('/saludo/{name}/{nickname}', 'UserController');

//Ruta estatica
/*Route::get('/helloworld', function () {
    return 'Hola mundo';
});*/


//Ruta dinamica con parametros declarados en la funcion.
/*Route::get('/usuarios/detalles/{id}', function ($id) {
	$id = 16;
    return "Detalles del usuario: {$id}";
});*/

//Ruta con varios parametros en la url.
/*Route::get('posts/{post_id}/comments/{comment_id}', function ($postId, $commentId) {
	$postId = 89;
	$commentId = "Subarashii";
    return "Este el comentario {$commentId} del post {$postId}";
});*/

//El parametro "?" en la url representa un parametro opcional.
/*Route::get('saludo/{name}/{nickname?}', function ($name, $nickname = null) {
	$name = "Kaito";
	$nickname = "KitKat the thief";
    if ($nickname) {
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    } else {
        return "Bienvenido {$name}, no tienes apodo";
    }
});*/