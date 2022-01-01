<?php

use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\HomeController;
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
Route::redirect('/anasayfa', '/home')->name('anasayfa');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/fag', [HomeController::class, 'fag'])->name('fag');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/course/{id}', [HomeController::class, 'course'])->name('course');
Route::get('/categorycourses/{id}', [HomeController::class, 'categorycourses'])->name('categorycourses');
Route::get('/buytocourse/{id}', [HomeController::class, 'buytocourse'])->name('buytocourse');
Route::post('/getcourse', [HomeController::class, 'getcourse'])->name('getcourse');
Route::get('/courselist/{search}', [HomeController::class, 'courselist'])->name('courselist');

Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');

//Admin
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');

    Route::get('/category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('/category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('/category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('/category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('/category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('/category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('/category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

    Route::prefix('course')->group(function() {
        Route::get('/', [\App\Http\Controllers\Admin\CourseController::class, 'index'])->name('admin_courses');
        Route::get('create', [\App\Http\Controllers\Admin\CourseController::class, 'create'])->name('admin_course_add');
        Route::post('store', [\App\Http\Controllers\Admin\CourseController::class, 'store'])->name('admin_course_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\CourseController::class, 'edit'])->name('admin_course_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\CourseController::class, 'update'])->name('admin_course_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\CourseController::class, 'destroy'])->name('admin_course_delete');
        Route::get('show', [\App\Http\Controllers\Admin\CourseController::class, 'show'])->name('admin_course_show');
    });

    Route::prefix('messages')->group(function() {
        Route::get('/', [MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');
    });

    #Course image gallery
    Route::prefix('image')->group(function() {
        Route::get('create/{course_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{course_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{course_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
    });

    #Setting
    Route::get('/setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('/setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
});


Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
