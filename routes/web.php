<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\login;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::get('/create', function () {
    return view('create');
})->name('create');

//Posts requests....
Route::post('/user/create',[UserController::class,"criarConta"])->name('user.create');
Route::post('/user/login',[UserController::class,"login"])->name('user.login');

Route::middleware([login::class])->group(function(){
    Route::get('/home',[UserController::class,"home"])->name('home');
    Route::get('/product',[UserController::class,"product"])->name('product');
    Route::get('/users',[UserController::class,"users"])->name('users');
    Route::get('/product/register',[UserController::class,"cadProduct"])->name('cad.product');
    Route::get('/product/delete/{id}',[ProductController::class,"delete"])->name('del.product');
    Route::get('/product/edit/{id}',[UserController::class,"editProduct"])->name('edit.product');
    Route::get('/sair',[UserController::class,"sair"])->name('sair');
    Route::post('/proctuct/cadastrar',[ProductController::class,"register"])->name('reg.product');
    Route::post('/product/cadastrar',[ProductController::class,"update"])->name('update.product');
});