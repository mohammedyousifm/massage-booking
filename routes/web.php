<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MailController;

Route::get('/', [PagesController::class, 'index'])->name('index');

Route::Post('/booking', [BookingController::class, 'store'])->name('booking');

Route::get('/404', [PagesController::class, 'error'])->name('error');

Route::get('/successbooking', [PagesController::class, 'successBooking'])->name('successBooking');

Route::Post('/email', [MailController::class, 'store'])->name('email');

Route::get('/successemail', [PagesController::class, 'successEmail'])->name('successEmail');
