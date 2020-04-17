<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbstractEvaluationsRequest extends FormRequest
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
           'rate_work' => 'required',
           'include_evaluation'=> 'required',
        ];
    }
    public function messages()
    {
        return [
            'rate_work.required' => 'O campo Avaliar Trabalho é obrigatório',
            'include_evaluation.required' => 'O campo Incluir Parecer é obrigatório',
        ];
    }
}
