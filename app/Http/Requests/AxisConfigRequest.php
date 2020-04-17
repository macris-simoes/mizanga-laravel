<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AxisConfigRequest extends FormRequest
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
            'axis' => 'required',
        ];
    }
    public function messages(){
        return [
            'axis.required' => "O campo Inserir eixos temáticos é obrigatório"
        ];
    }
}
