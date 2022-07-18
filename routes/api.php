<?php

use App\Http\Controllers\Api\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// -----
// Estos es a lo que me refiero
//En la parte superiror:
// use App\Http\Controllers\Api\AuthController;

// rutas con este prefijo: /api/auth/....

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// // Apis
Route::get('/informacion', [userController::class,'view'])->name('get.usuario.api');
Route::post('/registrar', [userController::class,'insert'])->name('post.usuario.api');
Route::put('/actualizar', [userController::class,'update'])->name('put.usuario.api');
Route::delete('/eliminar/{id}', [userController::class,'delete'])->name('delete.usuario.api');
Route::get('/busqueda/{id}', [userController::class,'search'])->name('getId.usuario.api');


