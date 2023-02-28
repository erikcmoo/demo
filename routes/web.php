<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

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

/* Vistas Empleado*/

Route::get('/empleado', function () {
    return view('empleado.index');
});

Route::get('/empleado/create', function () {
    return view('empleado.create');
});




Route::get('/empleado/create',[EmpleadoController::class,'create']);
Route::get('/empleado',[EmpleadoController::class,'index']);



/* Vistas Trabajador*/
Route::get('/trabajador', function () {
    return view('Trabajador.create');
});



Route::get('/trabajador/edit', function () {
    return view('Trabajador.edit');
});






/*

Route::get('/empleado', function () {
    return view('Empleado.index');
});

Route::get('/empleado/create',[EmpleadoController::class,'create']);
*/

