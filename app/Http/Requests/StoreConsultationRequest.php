<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreConsultationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
{
    return [
        'full_name' => ['required', 'string', 'max:150'],
        'business_name' => ['required', 'string', 'max:150'],
        'email' => ['required', 'email', 'max:255'],
        'phone' => ['required', 'string', 'max:50'],

        'industry' => ['nullable', 'string', 'max:100'],
        'company_size' => ['nullable', 'string', 'max:50'],
        'website' => ['nullable', 'url', 'max:255'],

        'business_challenge' => ['nullable', 'string'],

        'investment_range' => ['nullable', 'string', 'max:100'],
        'timeline' => ['nullable', 'string', 'max:50'],

        'preferred_contact_method' => ['nullable', 'string', 'max:50'],
        'referral_source' => ['nullable', 'string', 'max:100'],

        'interests' => ['required', 'array', 'min:1'],

        'interests.*.category' => [
            'required',
            'string',
            'max:100'
        ],

        'interests.*.interest' => [
            'required',
            'string',
            'max:255'
        ],
    ];
}


public function messages(): array
{
    return [
        'full_name.required' => 'Full name is required.',
        'business_name.required' => 'Business name is required.',
        'email.required' => 'Email address is required.',
        'email.email' => 'Enter a valid email address.',
        'phone.required' => 'Phone number is required.',

        'interests.required' => 'Select at least one area of improvement.',
        'interests.min' => 'Select at least one area of improvement.',
    ];
}
}
