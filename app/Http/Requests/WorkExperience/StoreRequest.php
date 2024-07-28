<?php

namespace App\Http\Requests\WorkExperience;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'integer'],
            'company' => ['required', 'string', 'max:50'],
            'from' => ['required', 'date'],
            'to' => ['nullable', 'date', 'after:from'],
            'position' => ['required', 'string', 'max:50'],
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'user_id' => 1
        ]);
    }
}
