<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function() {
    return response()->json(['message' => 'API has runned anyway!!!']);
});

Route::post('register', [\App\Http\Controllers\AuthController::class, 'registration']);
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('users', \App\Http\Controllers\UserController::class);
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [RoleController::class, 'show']);
Route::get('/roles', function() {return Role::all();});
