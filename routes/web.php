<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class,'inicio'])->name('inicio');

Route::get('/servicios', [LandingController::class,'servicios'])->name('servicios');

Route::get('/nosotros', [LandingController::class,'nosotros'])->name('nosotros');

Route::get('/faq', [LandingController::class,'faq'])->name('faq');

Route::get('/contacto', [LandingController::class,'contacto'])->name('contacto');

// Route::get('/cotizacion', [LandingController::class,'cotizacion'])->name('cotizacion');

Route::get('/solicitar-servicio', [LandingController::class, 'cotizacion'])
    ->name('solicitar-servicio');

Route::get('/contacto', [LandingController::class, 'contacto'])
    ->name('contacto');