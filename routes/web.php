<?php
// call the required controllers at the route file
use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
 use App\Http\controllers\CategoryController;
 use App\Http\controllers\ContactController;



// create the controllers 

Route::get("/",[HomeController::class,'home']);
Route::get("/category/list",[CategoryController::class,'List']);
Route::get("/category/add-category",[CategoryController::class,'Add']);
Route::get("/category/view-category",[CategoryController::class,'View']);
Route::get("/category/form",[CategoryController::class,'createForm']);
Route::post("/category/store",[CategoryController::class,'store'])->name('category.store');

Route::get("/communication/form",[ContactController::class,'Form'])->name('contact.form');
Route::post("/communication/store",[ContactController::class,'Store'])->name('communication.store');
