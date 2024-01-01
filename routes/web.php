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
use App\Http\Controllers\TimerController;

// frontend  controllers 

Route::get("/www.auction.bid.com",[HomeController::class,'home'])->name('frontend.home');
Route::get('/search-product',[HomeController::class,'search'])->name('product.search');


Route::get('/registration',[CustomerController::class,'registration'])->name('customer.registration');
Route::post('/registration',[CustomerController::class, 'store'])->name('customer.store');

Route::get("/login",[CustomerController::class,'login'])->name('customer.login');
Route::post("/login",[CustomerController::class,'doLogin'])->name('customer.do.login');

Route::get('productUnderCategory/{cat_id}',[FrontendProductController::class,'productUnderCategory'])->name('product.under.category.view');
Route::get('/product_viewAll',[FrontendProductController::class, 'View'])->name('product.all.view');
Route::get('/product_status_update/{id}',[FrontendProductController::class, 'StatusUpdate'])->name('product.update.status');
Route::get('/contact-us/form',[ContactController::class,'Message'])->name('user.contact.form');
Route::post('/contact/store',[ContactController::class,'StoreMessage'])->name('user.contact.store');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/logout',[CustomerController::class, 'logout'])->name('customer.logout');
    Route::get('/single-product/{id}',[FrontendProductController::class,'singleProductView'])->name('single.product');
    Route::post('/bid-store/{id}',[FrontendProductController::class,'store'])->name('bid.store');
    
    Route::get('/profile',[CustomerController::class,'profile' ])->name('profile.view');
    Route::get('/profileedit/{id}',[CustomerController::class,'edit' ])->name('profile.edit');
    Route::post('/profileupdate/{id}',[CustomerController::class,'update' ])->name('profile.update');
});

// admin controllers
 Route::get('/admin/login',[UserController::class,'loginForm'])->name('admin.login');
 Route::post('/login-form-post',[UserController::class,'loginPost'])->name('admin.login.post');

 Route::group(['middleware'=>'auth'],function(){
    Route::group(['middleware' => 'CheckAdmin'], function () {
    
     //user controller
    
    Route::get('/admin/logout',[UserController::class, 'logout'])->name('admin.logout');
    Route::get('/user/list',[UserController::class, 'list'])->name('user.list');
    Route::post('/user/store',[UserController::class, 'store'])->name('user.store');
    Route::get('/user/delete/{id}',[UserController::class, 'delete'])->name('user.delete');

    Route::get('/admin/profile/view',[DashboardController::class, 'profileView'])->name('admin.profile');
    Route::get("/",[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get("/bidder-list",[DashboardController::class,'BidderInfo'])->name('bidder.list');


    // category controllers
    Route::get("/category/view-category",[CategoryController::class,'View'])->name('category.list');
    Route::get('/category/delete/{id}',[CategoryController::class, 'delete'])->name('category.delete');
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
    Route::get('product/view/{id}',[ProductController::class, 'view'])->name('product.view');
    Route::post("/product/store",[ProductController::class,'store'])->name('product.store'); 
 });

 });



