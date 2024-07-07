<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrganisationController;
use App\Http\Controllers\UserController;

Route::redirect('/', '/health');
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('/api/users/{id}', [UserController::class, 'show']);

    Route::post('/api/organisations', [OrganisationController::class, 'store']);
    Route::get('/api/organisations', [OrganisationController::class, 'index']);
    Route::get('/api/organisations/{orgId}', [OrganisationController::class, 'show']);
    Route::post('/api/organisations/{orgId}/users', [OrganisationController::class, 'addUser']);
});
