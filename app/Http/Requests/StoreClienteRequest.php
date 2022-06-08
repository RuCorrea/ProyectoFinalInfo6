<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'razon_social' => 'required | max:500',
            'tipo_de_persona' => 'required',
            'rfc' => 'min:12 | max:13',
            'domicilio' => 'min:1 | max:500',
            'email' => 'min:1 | max:500',
            'telefono' => 'min:10 | max:13'
        ];
    }
}