<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'name'=>['required','string','max:30'],
            'description'=>['required','string'],
            'location'=>['required','string'],
            'map'=>['string'],
            'date' =>['date'],
            'hour'=>['required','numeric'],
            'type'=>['required'],
            'tags'=>['required'],
            'visible'=>['required','boolean:strict'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'Es obligatorio asignarle un nombre al evento',
            'name.max' => 'Maximo de caracteres permitidos(max. 30)',
            'description.required' => 'La descripcion es obligatoria',
            'location.required' =>'La localizacion es obligatoria',
            'date.date' => 'La fecha no tiene un formato válido',
            'hour.required' => 'La hora es obligatoria',
            'hour.numeric'  => 'La hora debe ser un valor numérico',
            'type.required' => 'El tipo de evento es obligatorio',
            'tags.required' => 'Debe asignar al menos una etiqueta al evento',
            'visible.required' => 'El campo visibilidad es obligatorio',
            'visible.boolean'  => 'El campo visibilidad debe ser verdadero o falso',
        ];
    }
}
