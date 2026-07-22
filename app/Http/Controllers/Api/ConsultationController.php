<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreConsultationRequest;
use App\Services\ConsultationService;
use Illuminate\Http\JsonResponse;
use App\Mail\ConsultationSubmitted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ConsultationController extends Controller
{
    public function __construct(
        protected ConsultationService $consultationService
    ) {
    }

    /**
     * Store a new consultation request.
     */
    public function store(StoreConsultationRequest $request): JsonResponse
{
    Log::info('Controller reached.');

    $consultation = $this->consultationService->create(
        $request->validated()
    );

    Log::info('Consultation created.', [
        'id' => $consultation->id,
        'email' => $consultation->email,
    ]);

    $consultation->load('consultationInterests');

    Log::info('About to send email.');

    Mail::to($consultation->email)
        ->send(new ConsultationSubmitted($consultation));

    Log::info('Mail::send finished.');

    return response()->json([
        'success' => true,
        'message' => 'Consultation submitted successfully.',
        'data' => $consultation,
    ], 201);
}
}