<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\productoController;
use App\Http\Controllers\api\re_salidaController;
use App\Http\Controllers\api\vendedorController;
use App\Http\Controllers\api\facturaController;
use App\Http\Controllers\api\devolucionController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Rutas Tabla Productos

Route::apiResource("producto",productoController::class);


// Rutas Tabla Registro_Salidas

Route::apiResource("salida",re_salidaController::class);

// Rutas Tabla Usuario

Route::apiResource("usuario",vendedorController::class);

// rutas factura_salida
Route::apiResource("factura_salida",facturaController::class);

// rutas devolucion

Route::apiResource("devolucion",devolucion::class);