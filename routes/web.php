<?php
// call the required controllers at the route file
use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
 use App\Http\controllers\AboutController; 
 use App\Http\controllers\MenuController; 
 use App\Http\controllers\CategoryController;



// create the controllers 

Route::get("/",[HomeController::class,'home']);
Route::get("/category/list",[CategoryController::class,'list']);




