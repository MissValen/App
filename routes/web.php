<?php

use Illuminate\Support\Facades\Route;
//invocar el controlador desde su ruta//
use App\Http\Controllers\miprimerControlador;
use App\Http\Controllers\heladosController;
use App\Http\Controllers\controladorPrecios;
use App\Http\Controllers\cursoController;

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

/*
 Lo primero es nombrar la ruta entre comillas simples con el nombre que desee darle.
 Luego va la coma seguido de la funcion y el return
 */

Route::get('/miprimeraruta', function(){
    return 'Hola Mundo, estoy aprendiendo Laravel :)';
}

);

/*
Los parametros son muy importantes en las rutas de las paginas web, y los indicamos entre llaves {}.
Los parametros van dentro de las misma ruta
*/

Route::get('/minombre/{nombre}', function($nombre){
    return 'Hola soy ' . $nombre;
});

Route::get('/suma/{Num1}/{Num2}', function($Num1, $Num2){
    return 'La suma de estos numeros son ' . $Num1+$Num2;
});

Route::get('micontroller/{a}/{b}', [miprimerControlador::class,'suma']);

Route::get('micontroller2/{a}', [miprimerControlador::class,'carrera']);

/*
 La clase va igual que el metodo entre corchetes o parentesis cuadrados.
 La clase va acompaña de ::class, y el metodo tiene que llamarse igual a como esta en la clase y entre comillas
*/

Route::get('heladeria/{opcion}',[heladosController::class,'helado']);

Route::get('descuentos/{precio}',[controladorPrecios::class,'precios']);

Route::get('IVA/{art}/{opc}',[controladorPrecios::class,'getIVA']);

Route::resource('cursos', cursoController::class);
