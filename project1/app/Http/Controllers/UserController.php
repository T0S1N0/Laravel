<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{

//enlazar la ruta /usuarios al método index del controlador UserController en "routes"//controlador que solo tenga una acción, puedes hacerlo llamando al método __invoke
	//Route::get('/saludo/{name}/{nickname}', 'UserController');

    

    

//public function __invoke($name, $nickname = null);
	public function __invoke(){
    	$users = [
    	'Joel',
    	'Ellie',
    	'Tess'];

    	//return "Detalles del usuario: {$nickname}";

    	//Formas de pasar una array por php

    	//return view('usersView', ['users' => $users]);

    	/*return view('usersView')->with([
    	'users' => $users]);*/

	    return view('usersView')
	    ->with('users', $users)
	    ->with('title', 'Listado de usuarios');
	}


}
