<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\authController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\SubCategoryController;
use App\Http\Controllers\Frontend\ProjectViewController;





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

Route::get('/reg_form',[authController::class ,'regForm'])->name('regForm');
Route::post('/reg_form_submit',[authController::class ,'regFormSubmit'])->name('regFormSubmit');

Route::get('/Login_form',[authController::class ,'login'])->name('login');
Route::post('/Login_form_submit',[authController::class ,'loginSubmit'])->name('loginSubmit');

Route::group(['middleware'=>'CheckAdmin'],function(){

Route::get('/logout',[authController::class ,'logout'])->name('logout');





Route::get('/', function () {
    return view('backend.content');
})->name('admin');
Route::get('/dashboard-admin',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/content-admin',[DashboardController::class,'content'])->name('content');








//order
Route::get('/orderList',[orderController::class,'orderList'])->name('orderList');
Route::get('/orderCreate',[orderController::class,'orderCreate'])->name('orderCreate');
Route::post('/orderSubmit_create',[orderController::class,'orderSubmit_create'])->name('orderSubmit_create');
Route::get('/delete_order/{id}',[orderController::class,'delete_order'])->name('delete_order');
Route::get('/edit_order/{id}',[orderController::class,'edit_order'])->name('edit_order');
Route::put('/Update_order/{id}',[orderController::class,'Update_order'])->name('Update_order');


//Customer
Route::get('/CustomerList',[CustomerController::class,'CustomerList'])->name('CustomerList');
Route::get('/CustomerCreate',[CustomerController::class,'CustomerCreate'])->name('CustomerCreate');
Route::post('/Customer_submit_Create',[CustomerController::class,'Customer_submit_Create'])->name('Customer_submit_Create');

Route::get('/Customer_delete/{id}',[CustomerController::class,'Customer_delete'])->name('Customer_delete');


Route::get('/Customer_edit/{id}',[CustomerController::class,'Customer_edit'])->name('Customer_edit');
Route::put('/Customer_submit_edit/{id}',[CustomerController::class,'Customer_submit_edit'])->name('Customer_submit_edit');



                              //Product

Route::get('/Product_list',[ProductController::class,'Product_list'])->name('Product_list');
Route::get('/Product_create',[ProductController::class,'Product_create'])->name('Product_create');
Route::post('/Product_submit_create',[ProductController::class,'Product_submit_create'])->name('Product_submit_create');

Route::get('/Product_delete/{id}',[ProductController::class,'Product_delete'])->name('Product_delete');

 Route::get('/Product_edit/{id}',[ProductController::class,'Product_edit'])->name('Product_edit');
Route::get('/Product_submit_edit/{id}',[ProductController::class,'Product_submit_edit'])->name('Product_submit_edit');

});





                  //Category
Route::get('/Category_Creat',[CategoryController::class,'Cate_Creat'])->name('Cate_Creat');
Route::post('/Category_Submit',[CategoryController::class,'Cate_Submit'])->name('Cate_Submit');

Route::get('/Category_list',[CategoryController::class,'Cate_list'])->name('Cate_list');









//Sub Category

Route::get('/SubCategory_Creat',[SubCategoryController::class,'SubCategory_Creat'])->name('SubCategory_Creat');
Route::post('/SubCategory_Submit',[SubCategoryController::class,'SubCategory_Submit'])->name('SubCategory_Submit');
Route::get('/SubCategory_list',[SubCategoryController::class,'SubCategory_list'])->name('SubCategory_list');
Route::get('/SubCategory_edit/{id}',[SubCategoryController::class,'SubCategory_edit'])->name('SubCategory_edit');
Route::get('/SubCategory_edit_submit/{id}',[SubCategoryController::class,'SubCategory_edit_submit'])->name('SubCategory_edit_submit');
Route::get('/SubCategory_delete/{id}',[SubCategoryController::class,'SubCategory_delete'])->name('SubCategory_delete');


//Brand Route



Route::get('/Brand_create',[BrandController::class,'Brand_create'])->name('Brand_create');
Route::post('/Brand_submit',[BrandController::class,'Brand_submit'])->name('Brand_submit');
Route::get('/Brand_list',[BrandController::class,'Brand_list'])->name('Brand_list');
Route::get('/Brand_edit/{id}',[BrandController::class,'Brand_edit'])->name('Brand_edit');
Route::put('/Brand_edit_Submit/{id}',[BrandController::class,'Brand_edit_Submit'])->name('Brand_edit_Submit');
Route::get('/Brand_delete/{id}',[BrandController::class,'Brand_delete'])->name('Brand_delete');














    //    FRONTEND WORK START HERE

    Route::get('/frontpage',[ProjectViewController::class,'frontpage'])->name('frontpage');