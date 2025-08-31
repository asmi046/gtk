<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Consultation\SenderConsultController;

Route::post('/send_adv_form', [SenderConsultController::class, "send_adv_form"])->name('send_adv_form');
Route::post('/send_consult', [SenderConsultController::class, "send_consultation"])->name('send_consultation');
Route::get('/thencs_consult', [SenderConsultController::class, "show_thencs"])->name('thencs_consult');
