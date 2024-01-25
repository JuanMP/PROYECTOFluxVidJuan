<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//preguntar
use Illuminate\Validation\Rules;

class LoginRequest extends FormRequest
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
            //ACT 15
            'username' => 'required|string',
            'password' => 'required|string',
        ];
    }

    public function messages()
    {
        return[
            'username.required' => 'El nombre de usuario es obligatorio',
            'password.required' => 'Debe introducir la contraseña correcta',
        ];
    }
}
