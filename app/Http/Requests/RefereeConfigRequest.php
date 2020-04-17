<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RefereeConfigRequest extends FormRequest
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
            'appraiser_cpf' => 'required|unique:referee_configs',
            'appraiser_name' => 'required',
            'appraiser_email' => 'required|email:rfc,dns|unique:referee_configs',
        ];
    }
    public function messages(){
        return [
            'appraiser_cpf.required' => 'O campo CPF é obrigatório.',
            'appraiser_cpf.unique' => 'Esse CPF já possui cadastro.',
            'appraiser_name.required' => 'O campo Nome é obrigatório.',
            'appraiser_email.required' => 'O campo E-mail é obrigatório.',
            'appraiser_email.unique' => 'Este e-mail já possui cadastro.',
        ];
    }
}
