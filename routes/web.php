<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/delete-alumni', function () {
    return view('alumni/delete-riwayatkerja_alumni');
});
Route::get('/kuesioner1', function () {
    return view('alumni/kuesioner1');
});
Route::get('/riwayatkerja1', function () {
    return view('alumni/show-riwayatkerja_alumni');
});
Route::get('/user-logout', function () {
    return view('admin/user-logout');
});
Route::get('/', function () {
    return view('admin/dashboard');
});
Route::get('/dashboard', function () {
    return view('admin/dashboard');
});
Route::get('/show-riwayatkerja', function () {
    return view('admin/show-riwayatkerja');
});
Route::get('/kuisioner', function () {
    return view('admin/kuisioner');
});
Route::get('/edit-riwayatkerja', function () {
    return view('admin/edit-riwayatkerja');
});
Route::get('/delete-riwayatkerja', function () {
    return view('admin/delete-riwayatkerja');
});
Route::get('/show-user', function () {
    return view('admin/show-user');
});
Route::get('/user-edit', function () {
    return view('admin/user-edit');
});
Route::get('/user-logout', function () {
    return view('admin/user-logout');
});
Route::get('/user-logout', function () {
    return view('alumni/user-logout');
});
