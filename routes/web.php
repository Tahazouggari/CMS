<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
use App\Http\Controllers\PageController;

Route::middleware(['auth'])->group(function () {
    Route::get('/cms', [PageController::class, 'index'])->name('pages.index');
    Route::get('/cms/create', [PageController::class, 'create'])->name('pages.create');
    Route::post('/cms/store', [PageController::class, 'store'])->name('pages.store');
    Route::get('/cms/edit/{page}', [PageController::class, 'edit'])->name('pages.edit');
    Route::put('/cms/update/{page}', [PageController::class, 'update'])->name('pages.update');
    Route::delete('/cms/delete/{page}', [PageController::class, 'destroy'])->name('pages.destroy');
});

Route::get('/page/{slug}', [PageController::class, 'show'])->name('pages.show');
