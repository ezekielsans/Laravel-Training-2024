<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class RegistrationRequest extends FormRequest
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
            // 'user_id' => 'required',
            'name' => [
                'required',
                'alpha',
                'string',
                'max:50',

                // 'nullable',
                // 'sometimes',
                // 'required_if:email,null',
                // 'in:admin,customer,guest',
                // 'exists:users,name'
                // Rule::in(['admin', 'customer', 'guest'])
                // 'decimal'
                // 'current_password'
            ],
            'email' => [
                'required',
                'string',
                'email',
                'unique:users,email',
                'max:50'
            ],
            'password' => [
                'required',
                'string',
                'max:12',
                'confirmed',
                Password::min(8)
                    ->numbers()
                    ->mixedCase()
                    ->symbols()
                    ->letters()
                    ->uncompromised()
            ],
            'password_confirmation' => 'required'
        ];
    }

    // protected function prepareForValidation()
    // {
    //     $this->merge([
    //         'user_id' => 1
    //     ]);
    // }

    // public function messages()
    // {
    //     return [
    //         'password.confirmed' => 'This is a custom error message for password confirmation.'
    //     ];
    // }
}
