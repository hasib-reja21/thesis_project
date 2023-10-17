<?php
// call the required controllers at the route file
use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
 use App\Http\controllers\AboutController; 
 use App\Http\controllers\MenuController; 
 use App\Http\controllers\CategoryController;



// create the controllers 

Route::get("/",[HomeController::class,'home']);
Route::get("/category/list",[CategoryController::class,'List']);
Route::get("/category/add-category",[CategoryController::class,'Add']);
Route::get("/category/view-category",[CategoryController::class,'View']);
Route::get("/category/form",[CategoryController::class,'createForm']);
Route::post("/category/store",[CategoryController::class,'store'])->name('category.store');



