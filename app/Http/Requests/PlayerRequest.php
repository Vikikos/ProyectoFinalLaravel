<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','max:30'],
            'photo' =>'required',
            'visible' => 'boolean:strict'
        ];
    }
    public function messages() 
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'name.max' => 'Maximo de caracteres 30',
            'photo.required' => 'Es obligatorio añadir foto',
        ];
    }
}
