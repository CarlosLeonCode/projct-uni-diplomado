<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CylinderController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\MaintanceController;

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::resource('cylinders', CylinderController::Class);
Route::resource('schedules', ScheduleController::Class);
Route::resource('maintances', MaintanceController::Class);
