<?php

use App\Http\Controllers\AnticipoController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProyectoController;
use Illuminate\Routing\RouteGroup;

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

Route::get('proyectos', [ProyectoController::class, 'index']); //Se coloca el array para que no busque el metodo invoke
Route::get('proyectos/create', [ProyectoController::class, 'create']);
Route::get('proyectos/{proyecto}', [ProyectoController::class, 'show']);

Route::controller(ClienteController::class)->group(function(){ //Hace lo mismo que el codigo de arriba pero con grupo de rutas
    Route::get('clientes', 'index');
    Route::get('clientes/create', 'create');
    Route::get('clientes/{client}', 'show');
});

Route::controller(ProveedorController::class)->group(function(){ //Hace lo mismo que el codigo de arriba pero con grupo de rutas
    Route::get('proveedores', 'index');
    Route::get('proveedores/create', 'create');
    Route::get('proveedores/{supplier}', 'show');
});

Route::controller(PagoController::class)->group(function(){ //Hace lo mismo que el codigo de arriba pero con grupo de rutas
    Route::get('pagos', 'index');
    Route::get('pagos/create', 'create');
    Route::get('pagos/{supplier}', 'show');
});

Route::controller(AnticipoController::class)->group(function(){ //Hace lo mismo que el codigo de arriba pero con grupo de rutas
    Route::get('anticipos', 'index');
    Route::get('anticipos/create', 'create');
    Route::get('anticipos/{supplier}', 'show');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
