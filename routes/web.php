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


Route::resource('courts', App\Http\Controllers\CourtController::class);


Route::resource('bookings', App\Http\Controllers\BookingController::class);

Route::get('/loggedInMember', 'App\Http\Controllers\memberController@getLoggedInMemberDetails');



Route::resource('users', App\Http\Controllers\usersController::class);



Route::resource('roles', App\Http\Controllers\rolesController::class);

Route::get('/users/assignroles/{id}', 'App\Http\Controllers\usersController@assignRoles')->name('users.assignroles');

Route::patch('/users/updateroles/{id}', 'App\Http\Controllers\usersController@updateRoles')->name('roles.rolesupdate');


Route::resource('permissions', App\Http\Controllers\permissionsController::class);

Route::get('/roles/assignpermissions/{id}', 'App\Http\Controllers\rolesController@assignPermissions')->name('roles.assignpermissions');

Route::patch('/roles/updatepermissions/{id}', 'App\Http\Controllers\rolesController@updatePermissions')->name('roles.permissionsupdate');

