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




// Route::group([
//     'middleware' => 'api',
//     'prefix' => 'auth'
// ], function () {
//     Route::post('/Api-insertarUsuario', [userController::class,'insert'])->name('post.usuario.api');
// });
// Route::middleware('api')->group(function () {
    Route::post('/Api-insertarUsuario', [userController::class,'insert'])->name('post.usuario.api');

    Route::get('/Api-informacion', [userController::class,'view'])->name('get.usuario.api');
// });







// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// // Apis
// Route::get('/Api-actualizarUsuario', [userController::class,'update'])->name('put.usuario.api');
// Route::get('/Api-eliminarUsuario/{id}', [userController::class,'delete'])->name('delete.usuario.api');
// Route::get('/Api-busquedaId', [userController::class,'searchId'])->name('getId.usuario.api');



// {
//     "nombre": "cldfsafeyu",
//     "apellido": 32,
//     "correo": 2,
//     "edad": 2,
//     "sexo": 23
// }
