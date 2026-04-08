<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('members', App\Http\Controllers\memberController::class);
Route::resource('courts', App\Http\Controllers\courtController::class);
Route::resource('bookings', App\Http\Controllers\bookingController::class);

Route::get('/loggedInMember', [App\Http\Controllers\memberController::class, 'getLoggedInMemberDetails']);

Route::delete('/bookings/{booking}', [App\Http\Controllers\bookingController::class, 'destroy'])
    ->name('bookings.destroy')
    ->middleware('permission:Delete Booking');

Route::delete('/members/{member}', [App\Http\Controllers\memberController::class, 'destroy'])
    ->name('members.destroy')
    ->middleware('permission:Delete Member');

Route::group(['middleware' => ['permission:Create New Member']], function () {
    Route::get('/members/create', [App\Http\Controllers\memberController::class, 'create'])
        ->name('members.create');

    Route::post('/members/store', [App\Http\Controllers\memberController::class, 'store'])
        ->name('members.store');
});

Route::group(['middleware' => ['auth', 'role:System Admin']], function () {
    Route::resource('users', App\Http\Controllers\usersController::class);
    Route::resource('roles', App\Http\Controllers\rolesController::class);
    Route::resource('permissions', App\Http\Controllers\permissionsController::class);

    Route::get('/users/assignroles/{id}', [App\Http\Controllers\usersController::class, 'assignRoles'])
        ->name('users.assignroles');

    Route::patch('/users/updateroles/{id}', [App\Http\Controllers\usersController::class, 'updateRoles'])
        ->name('roles.rolesupdate');

    Route::get('/roles/assignpermissions/{id}', [App\Http\Controllers\rolesController::class, 'assignPermissions'])
        ->name('roles.assignpermissions');

    Route::patch('/roles/updatepermissions/{id}', [App\Http\Controllers\rolesController::class, 'updatePermissions'])
        ->name('roles.permissionsupdate');
});