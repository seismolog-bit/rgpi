<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\WilayahController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('berita', 'berita.index')->name('berita');
Route::view('agenda', 'agenda.index')->name('agenda');
Route::view('bisnis', 'bisnis.index')->name('bisnis');

// registrasi
Route::get('/findKabko', [RegisteredUserController::class, 'findKabko']);
Route::get('/findKecamatan', [RegisteredUserController::class, 'findKecamatan']);
Route::get('/findKelurahan', [RegisteredUserController::class, 'findKelurahan']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/permissions', PermissionController::class);
    Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');

    Route::resource('provinsis', ProvinsiController::class);

    Route::resource('wilayahs', WilayahController::class);

    Route::resource('anggotas', AnggotaController::class);

});

Route::middleware(['auth', 'role:dpw'])->name('dpw.')->prefix('dpw')->group(function () {
    // Route::get('/', [IndexController::class, 'index'])->name('index');
    // Route::resource('/roles', RoleController::class);
    // Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    // Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    // Route::resource('/permissions', PermissionController::class);
    // Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
    // Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
    // Route::get('/users', [UserController::class, 'index'])->name('users.index');
    // Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    // Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    // Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    // Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    // Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    // Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');

    // Route::resource('provinsis', ProvinsiController::class);

    // Route::resource('wilayahs', WilayahController::class);

    Route::resource('anggotas', AnggotaController::class);

});

Route::get('/profile', [UserController::class, 'profile']);

require __DIR__ . '/auth.php';
