<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'mobile' => ['required', 'string', 'min:10', 'max:18'],
            'country' => ['required', 'string', 'min:3', 'max:20'],
            'bd' => ['nullable', 'date', 'before_or_equal:today', 'date_format:Y-m-d'],
            'gender' => ['nullable', 'string', Rule::in(['male', 'female'])],
        ];

    }
}
