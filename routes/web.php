<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/events', [PublicController::class, 'events'])->name('events');
Route::get('/event/{id}', [PublicController::class, 'eventDetails'])->name('event.details');
Route::get('/workshops', [PublicController::class, 'workshops'])->name('workshops');
Route::get('/workshop/{id}', [PublicController::class, 'workshopDetails'])->name('workshop.details');
Route::get('/blog/{id}', [PublicController::class, 'blogDetails'])->name('blog-details');

// Contact form submission route
Route::post('/contact', [PublicController::class, 'contactSubmit'])->name('contact.submit');

// Nibondon form submission route
Route::post('/nibondon', [PublicController::class, 'nibondonSubmit'])->name('nibondon.submit');

// Newsletter subscription route
Route::post('/newsletter/subscribe', [PublicController::class, 'newsletterSubscribe'])->name('newsletter.subscribe');

