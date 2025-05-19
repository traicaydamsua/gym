<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GymClassController;
use App\Http\Controllers\Admin\GymLocationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('trang-tong-quan', [DashboardController::class, 'index'])->name('admin.index');
    Route::get('danh-muc', [CategoryController::class, 'index'])->name('admin.get.category.index');
    Route::get('lop-hoc', [GymClassController::class, 'index'])->name('admin.get.class.index');
    Route::get('bai-viet', [ArticleController::class, 'index'])->name('admin.get.article.index');
    Route::get('dia-diem', [GymLocationController::class, 'index'])->name('admin.get.location.index');
    Route::get('khach-hang', [CustomerController::class, 'index'])->name('admin.get.customer.index');
});