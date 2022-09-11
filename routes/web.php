<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\VideoController;
use App\Models\Section;
use Illuminate\Support\Facades\Route;





Route::get('/', [SectionController::class, 'index'])->name('index');

Route::get('/dashboard', fn () => view("admin.section.create", ["sections" => Section::all()]))->name('dashboard');


Route::get('/dashboard/sections/create', [SectionController::class, 'create'])->name('create');
Route::post('/dashboard/sections/store', [SectionController::class, 'store'])->name('store');

Route::get('/dashboard/sections/{section}', [SectionController::class, 'show'])->name('show');
Route::delete('dashboard/sections/{section}/delete', [SectionController::class, 'destroy'])->name('delete-section');


Route::post('/images/store', [ImageController::class, 'store'])->name('store-image');
Route::delete('/images/{image}/delete', [ImageController::class, 'destroy'])->name('delete-image');


Route::post('/videos/store', [VideoController::class, 'store'])->name('store-video');
Route::delete('/videos/{video}/delete', [VideoController::class, 'destroy'])->name('delete-video');
