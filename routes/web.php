<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registrationcontroller;
use App\Models\Customer;
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

// Route::get('/{name?}' , function($name = null){
//     $data = compact('name');
// return view('demo')->with($data);
// }); 
// Route::get('/about' ,function(){
//     return view('about');
// });
 Route::get('/' ,function(){
     return view('index'); });
// Route::get('/', [Democontroller::class,'index']);
Route::get('/register',[Registrationcontroller::class,'index'])->name('customer.create');
Route::get('/customer/delete/{id}',[Registrationcontroller::class,'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}',[Registrationcontroller::class,'edit'])->name('customer.edit');
Route::get('/customer/update/{id}',[Registrationcontroller::class,'update'])->name('customer.update');
// Route::post('/register',[Registrationcontroller::class,'register']); 
Route::get('/register/view',[Registrationcontroller::class,'view']);

Route::post('/register',[Registrationcontroller::class,'store']); 

