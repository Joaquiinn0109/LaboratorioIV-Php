<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraPropinaController;
use App\Http\Controllers\ConversorMonedaController;
use App\Http\Controllers\TareasController;

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
    return view('welcome');
});

//Ejercicio 1
Route::get(
    '/calculadorapropina', 
    [CalculadoraPropinaController::class, 'Calculadorapropina']
);
Route::post('/calcular', [CalculadoraPropinaController::class ,'Calcular'])->name('calcular');


//Ejercicio 2
Route::get('/conversor' , 
    [ConversorMonedaController::class, 'Conversor']
);
Route::post('/convertir', [ConversorMonedaController::class, 'Convertir'])->name('convertir');

//Ejercicio 3
Route::get(
    '/tareas', 
    [TareasController::class, 'inicio'])->name('inicio');
Route::get(
    '/tareas/agregar', 
    [TareasController::class, 'agregar'])->name('agregar');
Route::post(
    '/tareas', 
    [TareasController::class, 'guardar'])->name('guardar');
Route::delete(
    '/tareas/{id}', 
    [TareasController::class, 'eliminar']
)->name('eliminar');

//Ejercicio 4
Route::get(
    '/sales', 
    [VentasController::class, 'index'])->name('sales.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
