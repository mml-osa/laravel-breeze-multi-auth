<?php

namespace App\Http\Requests\Institution;

use App\Models\Institution;
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
            'username' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(Institution::class)->ignore($this->user()->id)],
        ];
    }
}