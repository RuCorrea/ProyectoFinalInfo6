<?php

use App\Http\Controllers\AnticipoController;
use App\Http\Controllers\ClientController;
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

/* Route::middleware(['admin'])->group(function(){

    Route::resource('proyectos', ProyectoController::class);

    Route::resource('clientes', ClienteController::class);

    Route::resource('proveedores', ProveedorController::class);

    Route::resource('pagos', ProveedorController::class);

    Route::resource('Anticipos', AnticipoController::class);

}); */

Route::resource('proyectos', ProyectoController::class);

Route::resource('clientes', ClienteController::class);

Route::resource('proveedores', ProveedorController::class);

Route::resource('pagos', ProveedorController::class);

Route::resource('anticipos', AnticipoController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
