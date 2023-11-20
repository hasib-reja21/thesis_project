<?php
// call the required controllers at the route file
use Illuminate\Support\Facades\Route;
 use App\Http\controllers\CategoryController;
 use App\Http\controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

// frontend  controllers 

Route::get("/www.auction.bid.com",[HomeController::class,'home'])->name('frontend.home');

Route::get('/registration',[CustomerController::class,'registration'])->name('customer.registration');
Route::post('/registration',[CustomerController::class, 'store'])->name('customer.store');

Route::get("/login",[CustomerController::class,'login'])->name('customer.login');
Route::post("/login",[CustomerController::class,'doLogin'])->name('customer.do.login');


Route::get('/single-product/{id}',[FrontendProductController::class,'singleProductView'])->name('single.product');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/logout',[CustomerController::class, 'logout'])->name('customer.logout');
    Route::get('/profile',[CustomerController::class,'profile' ])->name('profile.view');
});





// admin controllers

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

    Route::get('product/delete/{id}',[ProductController::class, 'delete'])->name('product.delete');
    Route::get('product/edit/{id}',[ProductController::class, 'edit'])->name('product.edit');
    Route::put('product/update/{id}',[ProductController::class, 'update'])->name('product.update');

    Route::post("/product/store",[ProductController::class,'store'])->name('product.store');


});


