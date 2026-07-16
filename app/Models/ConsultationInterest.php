<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ConsultationInterest extends Model
{
    /**
     * Mass assignable attributes.
     */
    protected $fillable = [
        'consultation_request_id',
        'category',
        'interest',
    ];

    /**
     * Each selected interest belongs to one consultation request.
     */
    public function consultationRequest(): BelongsTo
    {
        return $this->belongsTo(ConsultationRequest::class);
    }
}