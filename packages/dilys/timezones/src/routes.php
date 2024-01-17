<?php

use Illuminate\Support\Facades\Route;
use Dilys\Timezones\TimezonesController;


Route::get('timezones/{time}', [TimezonesController::class, 'index'])->name('timezones.index');