<?php

namespace App\Services;

use App\Models\ConsultationInterest;
use App\Models\ConsultationRequest;
use Illuminate\Support\Facades\DB;

class ConsultationService
{
    /**
     * Store a consultation request and its selected interests.
     */
    public function create(array $data): ConsultationRequest
    {
        return DB::transaction(function () use ($data) {

            // Create the consultation request
            $consultation = ConsultationRequest::create([
                'full_name' => $data['full_name'],
                'business_name' => $data['business_name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'industry' => $data['industry'] ?? null,
                'company_size' => $data['company_size'] ?? null,
                'website' => $data['website'] ?? null,
                'business_challenge' => $data['business_challenge'] ?? null,
                'investment_range' => $data['investment_range'] ?? null,
                'timeline' => $data['timeline'] ?? null,
                'preferred_contact_method' => $data['preferred_contact_method'] ?? null,
                'referral_source' => $data['referral_source'] ?? null,
                'status' => 'New',
            ]);

            // Store selected interests
            foreach ($data['interests'] as $interest) {

                ConsultationInterest::create([
                    'consultation_request_id' => $consultation->id,
                    'category' => $interest['category'],
                    'interest' => $interest['interest'],
                ]);
            }

            return $consultation->load('consultationInterests');
        });
    }
}