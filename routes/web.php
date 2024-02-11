<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomAuthController;
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
// Route::get('index', function () {
//     return view('index');
// })->name('index');
// Route::get('products', function () {
//     return view('products');
// })->name('products');
Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('contact', function () {
    return view('contact');
})->name('contact');
Route::get('aboutproduct', function () {
    return view('aboutproduct');
})->name('aboutproduct');
Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::resource('admins', AdminController::class);
Route::resource('admins', UserController::class);
Route::resource('courses',CourseController::class);
Route::resource('products',ProductController::class);
Route::resource('comments',CommentController::class);
Route::get('products',[CourseController::class,'indexProducts'])->name('products');
Route::get('index',[CourseController::class,'indexindex'])->name('index');


Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
