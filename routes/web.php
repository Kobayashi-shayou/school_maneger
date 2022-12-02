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
//User
Route::get('/user/home', [App\Http\Controllers\StudyController::class, 'home'])->name('user.home');
Route::get('/user/course/{id}', [App\Http\Controllers\StudyController::class, 'course'])->name('user.course');
Route::get('/user/{id}/apply', [App\Http\Controllers\StudyController::class, 'apply'])->name('user.apply');
Route::post('/user/confirm', [App\Http\Controllers\StudyController::class, 'confirm'])->name('user.confirm');
//Admin
Route::get('/admin/top', [App\Http\Controllers\Admin\AdminController::class, 'top'])->name('admin.top');
Route::get('/admin/form', [App\Http\Controllers\Admin\FormController::class, 'form'])->name('admin.form.index');
Route::post('/admin/form/store', [App\Http\Controllers\Admin\FormController::class, 'store'])->name('admin.form.store');

//PAYJP
/*
Route::get('/user/payment', [App\Http\Controllers\PaymentController::class, 'index'])->name('user.payment');
Route::post('/user/payment', [App\Http\Controllers\PaymentController::class, 'index'])->name('user.payment');
Route::post('/user/payment', [App\Http\Controllers\PaymentController::class, 'payment']);
*/
Route::post('/user/index', [App\Http\Controllers\PaymentController::class, 'index'])->name('user.index');
Route::post('/user/payment/aaa', [App\Http\Controllers\PaymentController::class, 'payment'])->name('user.payment.aaa');
