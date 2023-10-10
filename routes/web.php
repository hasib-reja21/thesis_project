<?php
// call the required controllers at the route file
use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
 use App\Http\controllers\AboutController; 
 use App\Http\controllers\MenuController; 
 use App\Http\controllers\ContactController;



// create the controllers 

Route::get("/",[HomeController::class,'home']);
Route::get("/about",[AboutController::class,'about']);
Route::get("/menu",[MenuController::class,'menu']);
Route::get("/contact",[ContactController::class,'contact']);

