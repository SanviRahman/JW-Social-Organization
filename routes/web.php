<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\AmaderKarjokromController as AdminKarjokromController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

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

Route::prefix('admin')->middleware('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('events', AdminEventController::class)->except(['show']);
    Route::resource('karjokroms', AdminKarjokromController::class)->parameters([
        'karjokroms' => 'karjokrom'
    ])->except(['show']);
    Route::resource('blogs', \App\Http\Controllers\Admin\BlogController::class);
    Route::resource('newsletters', \App\Http\Controllers\Admin\NewsLetterController::class)->only(['index', 'destroy']);
    Route::resource('nibondon', \App\Http\Controllers\Admin\NibondonController::class)->only(['index', 'show', 'destroy']);
    Route::resource('communications', \App\Http\Controllers\Admin\CommunicationController::class)->only(['index', 'show', 'destroy']);
});
