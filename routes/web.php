<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


route::get('/dashboard', [ProductController::class, 'dashboard']) -> name('dashboard');
//read
route::get('/', [ProductController::class, 'index']) -> name('products');

//create
route::get('/product/create', [ProductController::class, 'create']) -> name('products.create');
route::post('/product/store', [ProductController::class, 'store']) -> name('products.store');

//update
route::get('/product/edit/{id}', [ProductController::class, 'edit']) -> name('products.edit');
route::put('/product/update/{id}', [ProductController::class, 'update']) -> name('products.update');

//delete
route::delete('/product/delete/{id}', [ProductController::class, 'destroy']) -> name('products.destroy');

//getmore6
route::get('/array6', [ProductController::class, 'array6']) -> name('products.array6');

//even number in array
route::get('/evenNumber', [ProductController::class, 'evenNumber']) -> name('products.evenNumber');

//deret fibbonci
route::get('/deret', [ProductController::class, 'deret']) -> name('products.deret');
