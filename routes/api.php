<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Api\ConsultationController;

Route::post('/consultations', [ConsultationController::class, 'store']);

Route::get('/test-mail', function () {

    Mail::raw('LYNPHICS Resend test email', function ($message) {
        $message->to('franklynngaujah19@gmail.com')
                ->subject('Resend Test');
    });

    return response()->json([
        'message' => 'Test email sent'
    ]);
});