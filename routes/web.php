<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CylinderController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\MaintanceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('landing');
});

Auth::routes();
Route::middleware('auth')->group(function () {
  Route::resource('cylinders', CylinderController::Class);
  Route::resource('schedules', ScheduleController::Class);
  Route::resource('maintances', MaintanceController::Class);
  Route::get('/home', [HomeController::Class, 'index'])->name('/');
});

