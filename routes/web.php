<?php

use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;

Route::get('/foods/create', [FoodController::class, 'create'])->name('foods.create');
Route::post('/foods/store', [FoodController::class, 'store'])->name('foods.store');
