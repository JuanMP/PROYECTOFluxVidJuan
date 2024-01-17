<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            //ACT 13
            'title' => 'required|min:2|max:20|unique:movies',
            'year' => 'required|min:4|max:4',
            'plot' => 'required|max:80',
            'rating' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Por favor, introduce un título a la película',
            'title.min' => 'El título debe tener mínimo 2 carácteres',
            'title.max' => 'El título debe tener como máximo 20 carácteres',
            'year.required' => 'El año en la película es obligatorio',
            'year.min' => 'El año no puede tener menos de 4 carácteres',
            'year.max' => 'El año tiene que tener 4 carácteres',
            'plot.required' => 'El argumento es obligatorio',
            'plot.max' => 'El argumento debe tener como máximo 80 carácteres',
            'rating.required' => 'Por favor, puntúa la película'
        ];
    }
}
