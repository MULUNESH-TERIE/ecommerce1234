<?php

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

Route::get('/', function () {
    return view('welcome');
});
 Route::get('/product/register',[productcontroller::class, 'register'])->name('product/registerar');
 Route::post('/product/register',[productcontroller::class, 'store']);
// Route::get('/productcontroller',[productcontroller::class, 'register'])->name('productcontroller');


