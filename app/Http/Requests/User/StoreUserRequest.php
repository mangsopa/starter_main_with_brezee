<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'register' => ['required', 'string'],
            'username' => ['required', 'string'],
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email:rfc', 'unique:users'],
            'password' => ['required', 'string'],
            'role' => ['nullable', 'string'],
            'email_verified_at' => ['nullable', 'boolean'],
        ];
    }
}
