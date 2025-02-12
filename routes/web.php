<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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