<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreConsultationRequest;
use App\Services\ConsultationService;
use Illuminate\Http\JsonResponse;

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

        return response()->json([
            'success' => true,
            'message' => 'Consultation request submitted successfully.',
            'data' => $consultation,
        ], 201);
    }
}
