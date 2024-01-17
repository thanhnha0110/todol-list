<?php

use Illuminate\Support\Facades\Route;
use Nhanguyen\Hello\HelloController;


Route::get('hello', [HelloController::class, 'index'])->name('hello');