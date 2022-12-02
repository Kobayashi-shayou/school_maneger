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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Admin
Route::get('/admin/top', [App\Http\Controllers\Admin\AdminController::class, 'top'])->name('admin.top');
Route::get('/admin/form', [App\Http\Controllers\Admin\FormController::class, 'form'])->name('admin.form.index');
Route::post('/admin/form/store', [App\Http\Controllers\Admin\FormController::class, 'store'])->name('admin.form.store');
