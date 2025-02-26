<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\UserDocController;
use App\Http\Controllers\MessageController;


Route::get('/', function () {
    return redirect('/login');
});

Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function() {
    Route::get('/mark-as-read', [HomeController::class,'markAsRead'])->name('mark-as-read');
    Route::get('/mark-as-read-app', [HomeController::class,'markAsReadApplication'])->name('mark-as-read-apps');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::put('/profile/update/{id}', [HomeController::class, 'profileUpdate'])->name('profile.update');
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('pages', PageController::class);
    Route::resource('sections', SectionController::class);
    Route::resource('applications', DocumentController::class);
    Route::get('application/{id}', [DocumentController::class, 'applicationView'])->name('application.view');
    Route::resource('documents', UserDocController::class);
    Route::post('upload-file', [UserDocController::class, 'uploadFile'])->name('documents.upload-file');
    Route::resource('messages', MessageController::class);
    Route::get('track-your-application', [DocumentController::class, 'trackYourApplication'])->name('track.your.application');
    Route::post('status', [UserDocController::class, 'changeStatus'])->name('documents.change-status');
    Route::get('message', [MessageController::class, 'userMessage'])->name('message.index');
});