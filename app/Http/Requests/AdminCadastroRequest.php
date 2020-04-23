<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCadastroRequest extends FormRequest
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
            'cpf' => 'required',
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
        ];
    }
    public function messages()
    {
        return [
            'cpf.required' => 'O campo CPF é obrigatório',
            'name.required' => 'O campo Nome é obrigatório',
            'email.required' => 'O campo E-mail é obrigatório.',
        ];
    }
}
