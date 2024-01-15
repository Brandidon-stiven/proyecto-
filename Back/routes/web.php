<?php

use App\Http\Controllers\ComprasController;
use App\Http\Controllers\InsumosController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\Modulos;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\VistabotonesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.inicio');
});

Route::resource('/insumos',InsumosController::class);
Route::resource('/compras',ComprasController::class);
Route::resource('/productos',ProductosController::class);
Route::resource('/ventas',VentasController::class);
Route::resource('/vistabotones',VistabotonesController::class);
Route::resource('/Mantenimiento', MantenimientoController::class);
Route::get('/compras/{id}/edit', 'comprasController@edit');


// Ruta para manejar la actualización
Route::put('/compras/{id}', 'comprasController@update');


Route::get('/insumos', 'App\Http\Controllers\InsumosController@index')->name('insumos');
Route::get('/productos', 'App\Http\Controllers\ProductosController@index')->name('productos');
Route::get('/compras', 'App\Http\Controllers\ComprasController@index')->name('compras');
Route::get('/ventas', 'App\Http\Controllers\VentasController@index')->name('ventas');
Route::get('/Mantenimiento', 'App\Http\Controllers\MantenimientoController@index')->name('Mantenimiento');

Route::get('/modulos', 'App\Http\Controllers\ModulosController@index')->name('modulos.index');
Route::get('/modulos', [Modulos::class, 'index'])->name('modulos');


Route::get('/vistabotones', 'App\Http\Controllers\VistabotonesController@index')->name('vistabotones.index');
Route::get('/vistabotones', [VistabotonesController::class, 'index'])->name('vistabotones');

Route::get('/registro', [RegistroController::class, 'showRegistrationForm'])->name('registro');
Route::post('/registro', [RegistroController::class, 'registro']);



Route::get('/login', function () {
    return view('layout.login');
})->name('login');

