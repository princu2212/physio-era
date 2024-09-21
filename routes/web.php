<?php

use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\AppointmentController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\CounterController;
use App\Http\Controllers\backend\HeaderController;
use App\Http\Controllers\backend\ReviewController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/dashboard', function () {
    return view('backend.index');
});


// For Backend
Route::controller(HeaderController::class)->prefix('header')->group(function () {
    Route::get('edit', 'edit')->name('header.edit');
    Route::put('update/{id}', 'update')->name('header.update');
});
Route::controller(AboutController::class)->prefix('about')->group(function () {
    Route::get('create', 'create')->name('about.create');
    Route::post('store', 'store')->name('about.store');
    Route::get('show', 'show')->name('about.show');
    Route::get('edit/{id}', 'edit')->name('about.edit');
    Route::put('update/{id}', 'update')->name('about.update');
    Route::delete('delete/{id}', 'destroy')->name('about.delete');
});
Route::controller(CounterController::class)->prefix('counter')->group(function () {
    Route::get('create', 'create')->name('counter.create');
    Route::post('store', 'store')->name('counter.store');
    Route::get('show', 'show')->name('counter.show');
    Route::get('edit/{id}', 'edit')->name('counter.edit');
    Route::put('update/{id}', 'update')->name('counter.update');
    Route::delete('delete/{id}', 'destroy')->name('counter.delete');
});
Route::controller(ServiceController::class)->prefix('service')->group(function () {
    Route::get('create', 'create')->name('service.create');
    Route::post('store', 'store')->name('service.store');
    Route::get('show', 'show')->name('service.show');
    Route::get('edit/{id}', 'edit')->name('service.edit');
    Route::put('update/{id}', 'update')->name('service.update');
    Route::delete('delete/{id}', 'destroy')->name('service.delete');
});
Route::controller(AppointmentController::class)->prefix('appointment')->group(function () {
    Route::post('store', 'store')->name('appointment.store');
    Route::get('show', 'show')->name('appointment.show');
    Route::get('edit/{id}', 'edit')->name('appointment.edit');
    Route::delete('delete/{id}', 'destroy')->name('appointment.delete');
});
Route::controller(ContactController::class)->prefix('contact')->group(function () {
    Route::get('show', 'show')->name('contact.show');
    Route::put('update/{id}', 'update')->name('contact.update');
    Route::delete('delete/{id}', 'destroy')->name('contact.delete');
});
Route::controller(ReviewController::class)->prefix('review')->group(function () {
    Route::post('store', 'store')->name('review.store');
    Route::get('show', 'show')->name('review.show');
    Route::get('edit/{id}', 'edit')->name('review.edit');
    Route::put('update/{id}', 'update')->name('review.update');
    Route::delete('delete/{id}', 'destroy')->name('review.delete');
});
