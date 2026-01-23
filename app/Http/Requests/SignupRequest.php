<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

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
            'name' => ['required','string'],
            'email' => ['required','string','unique:users'],
            'password' => ['required','confirmed',Password::defaults()],
            'birthday' => ['required','date'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'email.required' => 'El email es obligatorio',
            'email.unique' => 'Ya existe una cuenta con este email, Inicia Sesion',
            'password.required' => 'La contraseña es obligatoria',
            'password.confirmed' => 'La contraseña no coincide',
            'birthday.required' => 'La fecha es obligatoria',
            'birthday.date' => 'Debe segir el formato'
        ];
    }
}
