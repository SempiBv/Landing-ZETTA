<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

// Páginas (GET) — cada una con su vista
Route::get('/', [LandingController::class,'inicio'])->name('inicio');
Route::get('/servicios', [LandingController::class,'servicios'])->name('servicios');
Route::get('/nosotros', [LandingController::class,'nosotros'])->name('nosotros');
Route::get('/faq', [LandingController::class,'faq'])->name('faq');
Route::get('/contacto', [LandingController::class,'contacto'])->name('contacto');
Route::get('/solicitar-servicio', [LandingController::class,'cotizacion'])->name('solicitar-servicio');

// Envíos de formulario (POST) — cada una con su acción
Route::post('/contacto', [LandingController::class,'enviarContacto'])->name('contacto.enviar');
Route::post('/solicitar-servicio', [LandingController::class,'solicitarServicio'])->name('servicio.enviar');