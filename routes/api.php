<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TasksController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', [TasksController::class, 'index']);
Route::post('/create', [TasksController::class, 'store']);
Route::get('/show/{id}', [TasksController::class, 'show']);
Route::post('/update/{id}', [TasksController::class, 'update']);
Route::delete('/delete/{id}', [TasksController::class, 'destroy']);