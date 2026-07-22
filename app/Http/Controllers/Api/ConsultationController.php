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
        $consultation = $this->consultationService->create(
            $request->validated()
        );

        // Load the relationship used by the Blade template
        $consultation->load('consultationInterests');

        Log::info('Starting consultation confirmation email.', [
            'consultation_id' => $consultation->id,
            'recipient' => $consultation->email,
        ]);

        try {
            // Send confirmation email to the client
            Mail::to($consultation->email)
                ->send(new ConsultationSubmitted($consultation));

            Log::info('Consultation confirmation email sent successfully.', [
                'consultation_id' => $consultation->id,
            ]);
        } catch (\Throwable $e) {
            Log::error('Failed to send consultation confirmation email.', [
                'consultation_id' => $consultation->id,
                'recipient' => $consultation->email,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }

        return response()->json([
            'success' => true,
            'message' => 'Consultation request submitted successfully.',
            'data' => $consultation,
        ], 201);
    }
}