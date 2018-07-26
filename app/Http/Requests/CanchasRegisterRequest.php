<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CanchasRegisterRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'max:80|required',
            'address' => 'max:100|required',
            'sport' => 'required|max:15',
            'hourly_price' => 'required|numeric'
        ];
    }
    public function messages()
    {
    return [
        'name.max' => 'El nombre de la cancha es demasiado largo',
        'name.required' => 'Ingresa un nombre para tu cancha',
        'address.required' => 'Ingresa una direccion',
        'address.max' => 'Tu direccion es demasiado larga',
        'sport.required' => 'Ingresa el deporte',
        'hourly_price.required' => 'Ingresa un precio por hora',
        'hourly_price.numeric' => 'Ingresa SOLO NUMEROS'
    ];


}
}
