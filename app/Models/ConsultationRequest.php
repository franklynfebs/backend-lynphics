<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ConsultationRequest extends Model
{
    /**
     * Mass assignable attributes.
     */
    protected $fillable = [
        'full_name',
        'business_name',
        'email',
        'phone',
        'industry',
        'company_size',
        'website',
        'business_challenge',
        'investment_range',
        'timeline',
        'preferred_contact_method',
        'referral_source',
        'status',
    ];

    /**
     * A consultation request has many selected interests.
     */
    public function consultationInterests(): HasMany
    {
        return $this->hasMany(ConsultationInterest::class);
    }
}