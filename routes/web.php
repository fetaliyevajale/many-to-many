<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);


Route::post('/assign-role/{user}', [UserController::class, 'assignRole']);
Route::delete('/revoke-role/{user}/{role}', [UserController::class, 'revokeRole']);

Route::get('/role-permissions/{role}', [RoleController::class, 'rolePermissions']);
Route::post('/assign-permission/{role}', [RoleController::class, 'assignPermission']);
Route::delete('/revoke-permission/{role}/{permission}', [RoleController::class, 'revokePermission']);

