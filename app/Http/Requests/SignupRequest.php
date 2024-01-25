<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class SignupRequest extends FormRequest
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
            'username' => 'required|string|min:4|max:18|unique:users',
            'name' => 'required|string|min:2|max:20',
            'email' => 'required|string|unique:users',
            'birthdate' => 'required|date',
            'password' => 'required|confirmed|Rules\Password::default()',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'El nombre de usuario es obligatorio',
            'username.min' => 'El nombre de usuario debe tener como mínimo 4 carácteres',
            'username.max' => 'El nombre de usuario debe tener como máximo 18 carácteres',
            'username.unique' => 'El nombre de usuario ya existe',
            'name.required' => 'El nombre completo es obligatorio',
            'name.min' => 'El nombre completo debe tener como mínimo 2 caracteres',
            'name.max' => 'El nombre completo debe tener como máximo 20 caracteres',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.unique' => 'El correo electrónico ya está registrado',
            'birthdate.required' => 'La fecha de nacimiento es obligatoria',
            'birthdate.date' => 'La fecha de nacimiento debe ser una fecha válida',
            'password.required' => 'La contraseña es obligatoria',
            'password.confirmed' => 'La confirmación de la contraseña no coincide',
            'password.min' => 'La contraseña debe tener como mínimo 8 caracteres',
            'password.Rules\Password::default()' => 'La contraseña debe cumplir con los requisitos de seguridad',
        ];
    }
}
