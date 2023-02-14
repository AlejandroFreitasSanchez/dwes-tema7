<?php

use App\Http\Controllers\CortoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/', IndexController::class)->name('index');

//listado cortos
Route::resource('corto', CortoController::class)->only(['index']);


/*Route::get('holamundo', function () {
    return 'hola mundo';
})->name('holamundo');*/


/*
Route::get('saludo/{nombre}/{apellido}', function (String $nombre, String $apellido) {
    return 'Hola, ' . $nombre . ' ' . $apellido;
})->where('nombre', '[A-Za-z]+')
  ->where('apellido', '[A-Za-z]+')
  ->name('saludo_con_apellidos');
  */

/*
Route::get('saludo/{nombre?}/{codigo?}', function (String $nombre = 'invitado', int $codigo = 0) {
    return view('saludo', compact('nombre', 'codigo'));
})->where('nombre', '[A-Za-z]+')
    ->where('codigo', '[0-9]+')
    ->name('saludo_con_codigo');
*/

/*Route::view(
    'saludo/{nombre}/{id}',
    'saludo',
    ['nombre', 'id']
)->where('nombre', '[A-Za-z]+')->where('id', '[0-9]+');*/



