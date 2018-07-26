<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'nombre' => 'max:45|nullable',
            'apellido' => 'max:45|nullable',
            'username' => 'required|min:4|max:45|unique:users',
            'email' => 'required|email|max:80|unique:users',
            'cemail' => 'required|same:email',
            'password' => 'required',
            'cpassword' => 'required|same:password',
            'avatar' => 'nullable'
        ];
    }
    public function messages()
    {
    return [
        'nombre.max' => 'Tu nombre es demasiado largo.',
        'apellido.max' => 'Tu apellido es demasiado largo.',
        'username.required' => 'Ingresa un nombre de usuario',
        'username.min' => 'Tu nombre de usuario es demasiado corto',
        'username.max' => 'Tu nombre de usuario es demasiado largo',
        'username.unique' => 'Este nombre de usuario ya ha sido ocupado',
        'email.required' => 'Ingresa un email',
        'email.email' => 'Ingresa un email valido',
        'email.max' => 'Tu email es demasiado largo',
        'email.unique' => 'Ya hay una cuenta registrada bajo este email',
        'cemail.required' => 'Ingresa nuevamente tu email',
        'cemail.same' => 'Los emails no coinciden',
        'password.required' => 'Ingresa una contraseña',
        'cpassword.required' =>'Repite tu contraseña',
        'cpassword.same' => 'Las contraseñas no coinciden'
    ];


}
}
