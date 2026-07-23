<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ConsultationController;

Route::post('/consultations', [ConsultationController::class, 'store']);