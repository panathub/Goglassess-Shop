<?php

use Illuminate\Support\Facades\Route;
use Admin\ProductController; 
use Admin\BandController; 
use Admin\orderController;
use Admin\orderdetailController;
use Admin\LensController;
use Admin\EmployeeController;
use Admin\UsersController;
use Admin\PaymentController;

use Manager\ProductController_M; 
use Manager\BandController_M; 
use Manager\orderController_M;
use Manager\orderdetailController_M;
use Manager\LensController_M;
use Manager\EmployeeController_M;
use Manager\UsersController_M;
use Manager\PaymentController_M;

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


Route::get('/', function () {
    return view('/home');
});
//Route for normal user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
});
//Route for admin
Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['admin']], function(){
        Route::get('/dashboard', 'admin\AdminController@index');
    });
});

//Route for Manager
Route::group(['prefix' => 'manager'], function(){
    Route::group(['middleware' => ['manager']], function(){
        Route::get('/dashboard', 'manager\ManagerController@index');
    });
});

//Manager
Route::resource('manager/product', ProductController_M::class);
Route::resource('manager/band', BandController_M::class);
Route::resource('manager/order', orderController_M::class);
Route::resource('manager/bill', PaymentController_M::class);
Route::resource('manager/orderdetail', orderdetailController_M::class);
Route::resource('manager/lens', LensController_M::class);
Route::resource('manager/employee', EmployeeController_M::class);
Route::resource('manager/users', UsersController_M::class);

//Admin
Route::resource('admin/product', ProductController::class);
Route::resource('admin/band', BandController::class);
Route::resource('admin/order', orderController::class);
Route::resource('admin/bill', PaymentController::class);
Route::resource('admin/orderdetail', orderdetailController::class);
Route::resource('admin/lens', LensController::class);
Route::resource('admin/employee', EmployeeController::class);
Route::resource('admin/users', UsersController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




