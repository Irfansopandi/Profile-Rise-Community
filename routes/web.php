<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\GalleryController;
Route::get('/', function () {
    return view('welcome');
})->name('home.welcome');

Route::middleware(['auth'])->group(function() {
    Route::prefix('admin')->group(function() {
        Route::get('/divisi', [MemberController::class, 'index'])->name('member.index');
        Route::post('/divisi/add', [MemberController::class, 'addMember'])->name('member.add');
        Route::delete('/divisi/delete/{id}', [MemberController::class, 'deleteMember'])->name('member.delete');
        
        Route::get('/join/view', [AuthController::class, 'view_join']);
    });
});

Route::middleware(['guest'])->group(function () {
    Route::get('/admin/login', [AuthController::class, 'log_index'])->name('auth.login');
    Route::post('/admin/login', [AuthController::class, 'log_admin'])->name('auth.adlogin');
    Route::post('/admin/logout', [AuthController::class, 'logout_admin']);
    
    Route::get('/join', [AuthController::class, 'join_index'])->name('auth.join');
    Route::post('/join', [AuthController::class, 'join_add'])->name('auth.add');
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('galleries', GalleryController::class);
});

