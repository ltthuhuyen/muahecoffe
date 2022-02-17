<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Guest\HomepageController;
use App\Http\Controllers\Guest\CartController;
use App\Http\Controllers\Guest\PaymentController;
use App\Http\Controllers\Guest\OrderController;
use App\Http\Controllers\Employee\TypeProductController;
use App\Http\Controllers\Employee\ProductController;
use App\Http\Controllers\Employee\OrderController as EmployeeOrderController;
use App\Http\Controllers\Employee\DeskController;
use App\Http\Controllers\Employee\DashboardController;
use App\Http\Controllers\Admin\EmployeeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */



Route::get('/',[HomeController::class, 'home']);   

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Chưa Đăng nhập
Route::get('/',[HomeController::class, 'home']);    
Route::get('/logout',[HomeController::class, 'logout']);   
Route::get('/timkiem', [HomeController::class, 'timkiem']); 
Route::get('/menu/{type}', [HomeController::class, 'menuOfType'])->name('guest.menu.type');


//KHACH HANG
Route::middleware(['auth'])->prefix('guest')->name('guest.')->group(function(){

Route::get('/',[HomeController::class, 'home']);    

Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
Route::get('/add-to-cart', [CartController::class, 'add'])->name('add-to-cart');
Route::get('/delete-from-cart', [CartController::class, 'delete'])->name('delete-from-cart');
Route::get('/cart-increase', [CartController::class, 'increase'])->name('cart.increase');
Route::get('/cart-decrease', [CartController::class, 'decrease'])->name('cart.decrease');

Route::get('/payment', [PaymentController::class, 'show'])->name('payment.show');
Route::post('/payment', [PaymentController::class, 'store'])->name('payment.store');

Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');

});

//NHAN VIEN
Route::middleware(['auth'])->prefix('employee')->name('employee.')->group(function(){
    
    //Danh sach, Them, Sua , Xoa Loại SP
    Route:: get('/', [DashboardController::class ,'index']);
    Route:: get('/typeProducts', [TypeProductController::class ,'index']);
    Route:: get('/typeProducts/create', [TypeProductController::class ,'create']);
    Route:: post('/typeProducts', [TypeProductController::class ,'store']);
    Route:: get('/typeProducts/edit{id}', [TypeProductController::class ,'edit']);
    Route:: patch('/typeProducts/update{id}', [TypeProductController::class ,'update']);
    Route:: delete('/typeProducts/delete{id}', [TypeProductController::class ,'destroy']);

    Route:: get('/products', [ProductController::class ,'index']);
    Route:: get('/products/create', [ProductController::class ,'create']);
    Route:: post('/products', [ProductController::class ,'store']);
    Route:: get('/products/show{id}', [ProductController::class ,'show']);
    Route:: get('/products/edit{id}', [ProductController::class ,'edit']);
    Route:: patch('/products/update{id}', [ProductController::class ,'update']);
    Route:: delete('/products/delete{id}', [ProductController::class ,'destroy']);

    Route::get('/orders/{order}/confirm', [EmployeeOrderController::class, 'confirm'])->name('orders.confirm');
    Route::resource('orders',EmployeeOrderController::class)->only(['index', 'show']);

    Route:: get('/desks', [DeskController::class ,'index']);

    Route::resource('typeProducts', TypeProductController::class);
    Route::resource('products', ProductController::class);
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function(){
    
    //Danh sach, Them, Sua , Xoa NhanVien
    Route:: get('/', [DashboardController::class ,'index']);
    Route::resource('/employee', EmployeeController::class);
    Route:: get('/employee', [EmployeeController::class ,'index']);
    Route:: get('/employee/create', [EmployeeController::class ,'create']);
});

