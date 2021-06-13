<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RiderController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();
Route::get('/', function () {
    return view('home');
});

Route::get('customerDashboard', [CustomerController::class, 'dashboard']); 
Route::get('customerLogin', [CustomerController::class, 'index'])->name('loginCustomer');
Route::post('custom-login', [CustomerController::class, 'customLogin'])->name('loginCustomer.custom'); 
Route::get('customerRegistration', [CustomerController::class, 'registration'])->name('registerCustomer');
Route::post('custom-registration', [CustomerController::class, 'customRegistration'])->name('registerCustomer.custom'); 
Route::get('signout', [CustomerController::class, 'signOut'])->name('signoutCustomer');

Route::get('riderDashboard', [RiderController::class, 'dashboard']); 
Route::get('riderLogin', [RiderController::class, 'index'])->name('loginRider');
Route::post('custom-rider-login', [RiderController::class, 'customLogin'])->name('loginRider.custom'); 
Route::get('riderRegistration', [RiderController::class, 'registration'])->name('registerRider');
Route::post('custom-rider-registration', [RiderController::class, 'customRegistration'])->name('registerRider.custom'); 
Route::get('riderSignout', [RiderController::class, 'signOut'])->name('signoutRider');

Route::get('staffDashboard', [StaffController::class, 'dashboard']); 
Route::get('staffLogin', [StaffController::class, 'index'])->name('loginStaff');
Route::post('custom-staff-login', [StaffController::class, 'customLogin'])->name('loginStaff.custom'); 
Route::get('staffRegistration', [StaffController::class, 'registration'])->name('registerStaff');
Route::post('custom-staff-registration', [StaffController::class, 'customRegistration'])->name('registerStaff.custom'); 
Route::get('staffSignout', [StaffController::class, 'signOut'])->name('signoutStaff');

//Route::resource('riderMain', OrderController::class);

//Route::resource('riderMain', 'App\Http\Controllers\orderController');

Route::resource('menus', MenuController::class);
Route::resource('orders', OrderController::class);

Route::get('riderDisplay', [DisplayController::class,'show']);

//Route::get('staffMain', [StaffController::class, 'staffIndex']);