<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'home'])->name('home');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// user 
Route::get('/user/profile', [UserController::class, 'user_profile'])->name('user.profile');
Route::post('/user/info/update', [UserController::class, 'user_info_update'])->name('user.info.update');
Route::post('/user/password/update', [UserController::class, 'user_pass_change'])->name('user.pass.change');
Route::post('/user/profile/image/update', [UserController::class, 'profile_photo_update'])->name('profile.photo.update');
Route::get('/user/list', [UserController::class, 'user_list'])->name('user.list');
Route::Post('/new/user/add', [UserController::class, 'newuser_add'])->name('newuser.add');
Route::get('/user/delete/{id}', [UserController::class, 'user_delete'])->name('user.delete');



// categorys
Route::get('/category', [CategoryController::class, 'category'])->name('category');
Route::post('/category/store', [CategoryController::class, 'category_store'])->name('category.store');
Route::get('/category/softdelte/{id}', [CategoryController::class, 'category_softdelte'])->name('category.softdelte');
Route::get('/trashlist', [CategoryController::class, 'trash_list'])->name('trash.list');

require __DIR__.'/auth.php';
