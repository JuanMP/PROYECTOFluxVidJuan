<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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


        /*return [
            //ACT 13
            'title' => 'required|min:2|max:20|unique:movies',
            'year' => 'required|integer|digits:4|between:1950,2025',
            'plot' => 'required|max:80',
            'rating' => 'required|numeric|between:1,5'
        ];*/

        switch ($this->method()) {
            case 'POST':        //reglas para la creación
                $rules['title'] = 'required|min:2|max:20|unique:movies';
                break;
            case 'PUT':         //reglas para la modificación
                $rules['title'] = ['required', Rule::unique('movies')->ignore($this->movie->id)];
        }

        $rules['year'] = 'required|integer|digits:4|between:1950,2025';
        $rules['plot'] = 'required|max:80';
        $rules['rating'] = 'required|numeric|between:1,5';

        return $rules;
    }


    public function messages()
    {
        return [
            'title.required' => 'Por favor, introduce un título a la película',
            'title.min' => 'El título debe tener mínimo 2 carácteres',
            'title.max' => 'El título debe tener como máximo 20 carácteres',
            'year.required' => 'El año en la película es obligatorio',
            'year.integer' => 'El año debe ser numérico',
            'year.digits' => 'El año debe tener 4 carácteres',
            'year.between' => 'El año debe estar entre 1950 y 2025',
            'plot.required' => 'El argumento es obligatorio',
            'plot.max' => 'El argumento debe tener como máximo 80 carácteres',
            'rating.required' => 'Por favor, puntúa la película',
            'rating.numeric' => 'Por favor, debes introducir un número',
            'rating.between' => 'Por favor, puntúa entre 1 y 5 estrellas'
        ];
    }
}
