<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/events', [PublicController::class, 'events'])->name('events');
Route::get('/event/{id}', [PublicController::class, 'eventDetails'])->name('event.details');
Route::get('/workshops', [PublicController::class, 'workshops'])->name('workshops');
Route::get('/workshop/{id}', [PublicController::class, 'workshopDetails'])->name('workshop.details');
