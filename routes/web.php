<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TotaluserController;
use App\Http\Controllers\AdminNewController;
use App\Http\Controllers\JaniController;
use App\Http\Controllers\CartController;


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




Route::group(['namespace' => 'App\Http\Controllers'], function(){
    //Admin routes
    Route::get('/additeam','AdminController@index')->middleware('auth'); // this is a add iteam page

    Route::get('/admin','AdminNewController@show')->middleware('auth');  // new Admin Dashboard Route 

    

    //Menu
    Route::post('/menu/create','MenuController@store');

    Route::get('/customer','CustomerController@show');
    //Route::get('delete/{id}','CustomerController@delete');

    //CART
    Route::get('/cart/new/{item_id}','CartController@store');
    Route::get('/cartTast','CartController@view');

    Route::get('/cash_order','CartController@cash_order');
    Route::get('/savi','CartController@savi');
    
    //ORDER
    Route::post('/order/new','OrderController@store');
    Route::get('/orders','OrderController@orders');

    //CHECKOUT
    //Route::get('/checkout')
    
// TEST***********************************************************
   // Route::post('/test','TestController@save');
  // // Route::get('/test2',function(){
 //       return view('test');
//});

 //   Route::get('/contact2',function(){
  //      return view('testing.testing');
  //  });
 //   Route::post('/contact','ContactController@save');



    
    //Food
    Route::post('/food/create','FoodController@store');
	Route::get('/get_foods/{menu_id}','FoodController@get_foods');
	Route::get('/food/{id}','FoodController@view_food');
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * Verification Routes
         */
        Route::get('/email/verify', 'VerificationController@show')->name('verification.notice');
        Route::get('/email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify')->middleware(['signed']);
        Route::post('/email/resend', 'VerificationController@resend')->name('verification.resend');

        /**
         * Menu Route
         * */
        Route::get('/menu','MenuController@index')->name('menu.show');
    });

    Route::group(['middleware' => ['auth','verified']], function() {
        /**
         * Dashboard Routes
         */
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

         Route::post('/contact','ContactController@save');  // contact Routes
         Route::get('/messege','ShowController@show'); // delete contact record
         Route::get('delete/{id}','ShowController@delete');
         // Customer detailse admin panal



    });
});
// Google URL
Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});


//for cashier dashboad
Route::get('/cashier',function(){
    return view('cashier.index');
});
//for admin_P dashboard
                        // Route::get('/admin',function(){
                        //     return view('Admin_P.Admin_P');
                        // });
//for product page
Route::get('/product',function(){
    return view('product.product');
});
