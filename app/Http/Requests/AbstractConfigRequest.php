<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbstractConfigRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'work_modality' => 'required',
            'work_start_date' => 'required|date',
            'work_end_date'=> 'required|date',
            'coauthor_quantity' => 'required',
            'abstract_title_min_char' => 'required',
            'abstract_title_max_char' => 'required',
            'abstract_min_char' => 'required',
            'abstract_max_char' => 'required',
            'author_instructions' => 'required',
        ];
    }
    public function messages(){
        return [
            'work_modality.required'=> 'O campo Modalidade do trabalho é obrigatório',
            'work_start_date.required' => 'O campo início das inscrições é obrigatório',
            'work_end_date.required' => 'O campo fim das inscrições é obrigatório',
            'coauthor_quantity.required'=> 'O campo Coautores é obrigatório',
            'abstract_title_min_char.required'=> 'O campo mínimo de caracteres é obrigatório',
            'abstract_title_max_char.required'=> 'O campo máximo de caracteres é obrigatório',
            'abstract_min_char.required'=> 'O campo mínimo de caracteres é obrigatório',
            'abstract_max_char.required'=> 'O campo máximo de caracteres é obrigatório',
            'author_instructions.required'=> 'O campo instrução aos autores é obrigatório',
        ];
    }
}
