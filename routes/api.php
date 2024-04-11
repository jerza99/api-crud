<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\studentController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/students', [studentController::class, 'index']);

Route::get('/students/{id}', function(){
    return 'Obteniendo un estudiante';
});

Route::post('/students', [studentController::class, 'store']);

Route::put('/students/{id}', function(){
    return 'Actualizando estudiante';
});

Route::delete('/students/{id}', function(){
    return 'Eliminando estudiante';
});
