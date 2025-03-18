<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

// Middleware for authentication
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// CMS Routes (Require authentication)
Route::middleware(['auth'])->group(function () {
    Route::get('/cms', [PageController::class, 'index'])->name('pages.index');

    // ✅ NEW: Page Selection Route
    Route::get('/cms/choose-type', [PageController::class, 'chooseType'])->name('pages.chooseType');

    // ✅ NEW: Template Selection Route
    Route::get('/cms/select-template', [PageController::class, 'selectTemplate'])->name('pages.selectTemplate');

    Route::get('/cms/template/{template}', [PageController::class, 'showTemplate'])->name('pages.template');


    // Page Creation Routes
    Route::get('/cms/create', [PageController::class, 'create'])->name('pages.create');
    Route::post('/cms/store', [PageController::class, 'store'])->name('pages.store');

    // Page Editing Routes
    Route::get('/cms/edit/{page}', [PageController::class, 'edit'])->name('pages.edit');
    Route::put('/cms/update/{page}', [PageController::class, 'update'])->name('pages.update');
    Route::delete('/cms/delete/{page}', [PageController::class, 'destroy'])->name('pages.destroy');
});

// View pages
Route::get('/page/{slug}', [PageController::class, 'show'])->name('pages.show');

// Guide Page
Route::get('/guide', function () {
    return view('guide.howToUse');
})->name('guide.howToUse');
