<?php
// call the required controllers at the route file
use Illuminate\Support\Facades\Route;
 use App\Http\controllers\CategoryController;
 use App\Http\controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

// create the controllers 
Route::get("/",[HomeController::class,'home']);
Route::get("/",[DashboardController::class,'dashboard']);
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

