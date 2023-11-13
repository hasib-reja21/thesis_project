<?php
// call the required controllers at the route file
use Illuminate\Support\Facades\Route;
 use App\Http\controllers\CategoryController;
 use App\Http\controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

// create the controllers 
Route::get("/frontend",[HomeController::class,'home']);

Route::get('/admin/login',[UserController::class,'loginForm'])->name('admin.login');
Route::post('/login-form-post',[UserController::class,'loginPost'])->name('admin.login.post');

Route::group(['middleware'=>'auth'],function(){
Route::get('/admin/logout',[UserController::class, 'logout'])->name('admin.logout');
Route::get("/",[DashboardController::class,'dashboard'])->name('dashboard');

// category controllers
Route::get("/category/view-category",[CategoryController::class,'View'])->name('category.list');
Route::get("/category/form",[CategoryController::class,'createForm'])->name('category.create');
Route::post("/category/store",[CategoryController::class,'store'])->name('category.store');
// contact controllers
Route::get("/communication/form",[ContactController::class,'createForm'])->name('contact.form');
Route::post("/communication/store",[ContactController::class,'Store'])->name('communication.store');
// Product controllers
Route::get("/product/form",[ProductController::class,'Form'])->name('product.create');
Route::get("/product/list",[ProductController::class,'List'])->name('product.list');
Route::post("/product/store",[ProductController::class,'store'])->name('product.store');


});


