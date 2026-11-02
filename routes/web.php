<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/divisi', [MemberController::class, 'index'])->name('member.index');
Route::post('/divisi/add', [MemberController::class, 'addMember'])->name('member.add');
Route::delete('/divisi/delete/{id}', [MemberController::class, 'deleteMember'])->name('member.delete');
