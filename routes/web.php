<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
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
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
//Danh mục
Route::group([
    'prefix' => 'categories',
    'as' => 'categories.',
], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::get('/edit', [CategoryController::class, 'edit'])->name('edit');
});
//Nhà tuyển dụng
Route::group([
    'prefix' => 'recruitments',
    'as' => 'recruitments.',
], function () {
    Route::get('/', [RecruitmentController::class, 'index'])->name('index');
    Route::get('/view', [RecruitmentController::class, 'view'])->name('view');
    Route::get('/edit', [RecruitmentController::class, 'edit'])->name('edit');
});
//Tin tuyển dụng
Route::group([
    'prefix' => 'blogs',
    'as' => 'blogs.',
], function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/view', [BlogController::class, 'view'])->name('view');
    Route::get('/edit', [BlogController::class, 'edit'])->name('edit');
});
//Slide quảng cáo
Route::group([
    'prefix' => 'ads',
    'as' => 'ads.',
], function () {
    Route::get('/', [SlideController::class, 'index'])->name('index');
    Route::get('/view', [SlideController::class, 'view'])->name('view');
    Route::get('/edit', [SlideController::class, 'edit'])->name('edit');
});
//Quản lý nhân viên
Route::group([
    'prefix' => 'users',
    'as' => 'users.',
], function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::get('/edit', [UserController::class, 'edit'])->name('edit');
});
