<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Livewire\App\Livewire\UsersTable;
use Illuminate\Support\Facades\Livewire\App\Livewire\RolesTable;
use App\Livewire\PermissionsTable;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/users', App\Livewire\UsersTable::class)->name('admin.users');
    Route::get('/admin/roles', App\Livewire\RolesTable::class)->name('admin.roles');
    Route::get('/admin/permissions', App\Livewire\PermissionTable::class)->name('admin.permissions');
});

Route::middleware(['auth', 'role:guru'])->group(function () {
    Route::get('/guru/users', App\Livewire\UsersTable::class)->name('guru.users');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
