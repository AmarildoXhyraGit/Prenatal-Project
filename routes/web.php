<?php
Use App\Http\Controllers\AuthenticationController;
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


           //Fill Database
           use App\Http\Controllers\FillDataBaseController;
      Route::match(["get", "post"], "filldatabase", [\App\Http\Controllers\FillDataBaseController::class, "index"])->name('xml-upload-filldatabase');

          //MainPage
Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index']);

          //Display data from Database   
Route::get('/cat/{c_name}', [\App\Http\Controllers\DisplayItemsbaseCategoryController::class, 'index']);      
Route::get('/cat/{c_name}/parentc/{i_parent_id}', [\App\Http\Controllers\ItemsDetailsController::class, 'index']);

          //Authentication
Route::get('register', [\App\Http\Controllers\AuthenticationController::class,'create'])->middleware('guest');
Route::post('register', [\App\Http\Controllers\AuthenticationController::class,'store'])->middleware('guest');
Route::get('registercreatel', [\App\Http\Controllers\AuthenticationController::class,'createl'])->middleware('guest');
Route::post('registerlogout', [\App\Http\Controllers\AuthenticationController::class,'logout'])->middleware('auth');
Route::post('registerstorel', [\App\Http\Controllers\AuthenticationController::class,'storel']);

           //Filter
Route::get('/cat/{c_name}/orderby={price}', [\App\Http\Controllers\FilterController::class, 'filter']);
Route::get('/cat/{c_name}/gender-{prenatal}', [\App\Http\Controllers\FilterController::class, 'filter']);
Route::get('/cat/{c_name}/marche-{prenatal}', [\App\Http\Controllers\FilterController::class, 'filter']);
Route::get('/cat/{c_name}/colore-{prenatal}', [\App\Http\Controllers\FilterController::class, 'filter']);
Route::get('/cat/{c_name}/price-{prenatal}', [\App\Http\Controllers\FilterController::class, 'filter']);

          //Search
Route::get('/search',[\App\Http\Controllers\WelcomeController::class, 'index'])->name('search');

          //ShoppingCart
Route::get('cart', [\App\Http\Controllers\ShoppingCartController::class, 'cartList'])->name('cart.list');
Route::post('addtocart', [\App\Http\Controllers\ShoppingCartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [\App\Http\Controllers\ShoppingCartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [\App\Http\Controllers\ShoppingCartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [\App\Http\Controllers\ShoppingCartController::class, 'clearAllCart'])->name('cart.clear');
Route::post('back', [\App\Http\Controllers\ShoppingCartController::class, 'back'])->name('cart.back');





