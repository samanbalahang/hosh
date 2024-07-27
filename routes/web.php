<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\commentsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TrackOrdersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PassfoundController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\BoxShopController;
use App\Http\Controllers\FavoritsController;
use App\Http\Controllers\adressController;
use App\Http\Controllers\MyCommetsController;
use App\Http\Controllers\MyOrdersController;
use App\Http\Controllers\MyAnsersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::group(['prefix' => '/admin'], function(){
    Route::resource("/admin", AdminController::class);
    Route::resource("/product", ProductController::class);
    Route::resource("/users", usersController::class);
    Route::resource("/orders", ordersController::class);
    Route::resource("/comments", commentsController::class);
    Route::resource("/pages", pagesController::class);
    Route::resource("/sliders", slidersController::class);
});


    Route::resource("/mahboob", HomeController::class);
    Route::resource("/shop", shopController::class);
    Route::resource("/item", itemController::class);
    Route::resource("/TrackOrders", TrackOrdersController::class);
    Route::resource("/login", loginController::class);
    Route::resource("/register", registerController::class);
    Route::resource("/passfound", passfoundController::class);



Route::group(['prefix' => '/users'], function(){
    Route::resource("/dashbord", dashbordController::class);
    Route::resource("/BoxShop", BoxShopController::class);
    Route::resource("/favorits", favoritsController::class);
    Route::resource("/adress", adressController::class);
    Route::resource("/MyCommets", MyCommetsController::class);
    Route::resource("/MyOrders", MyOrdersController::class);
});




