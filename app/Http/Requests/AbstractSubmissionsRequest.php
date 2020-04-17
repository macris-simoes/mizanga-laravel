<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbstractSubmissionsRequest extends FormRequest
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
            'category' => 'required',
            'axis_id' => 'required',
            'abstract_title' => 'required',
            'abstract_body' => 'required',
            'first_keyword' => 'required',
            'second_keyword' => 'required',
            'third_keyword' => 'required',
            'author' => 'required',
            'author_affiliation' => 'required',
            'first_coauthor' => 'nullable',
            'first_coauthor_afiliation' => 'nullable',
            'second_coauthor' => 'nullable',
            'second_coauthor_afiliation' => 'nullable',
            'third_coauthor' => 'nullable',
            'third_coauthor_afiliation' => 'nullable',
            'fourth_coauthor' => 'nullable',
            'fourth_coauthor_afiliation' => 'nullable',
            'fifth__coauthor' => 'nullable',
            'fifth__coauthor_afiliation' => 'nullable',
            'sixth_coauthor' => 'nullable',
            'sixth_coauthor_afiliation' => 'nullable',
            'seventh_coauthor' => 'nullable',
            'seventh_coauthor_afiliation' => 'nullable',
            'eighth_coauthor' => 'nullable',
            'eighth_coauthor_afiliation' => 'nullable',
            'nineth_coauthor' => 'nullable',
            'nineth_coauthor_afiliation' => 'nullable',
            'tenth_coauthor' => 'nullable',
            'tenth_coauthor_afiliation' => 'nullable',
            'financial_support' => 'nullable',
        ];
    }
    public function messages()
    {
        return [
            'category.required'=> 'O campo Modalidade do trabalho é obrigatório',
            'axis_id.required'=> 'O campo Eixo temático é obrigatório',
            'abstract_title.required' => 'O campo Título do trabalho é obrigatório',
            'abstract_body.required' => 'O campo Resumo do trabalho é obrigatório',
            'first_keyword.required' => 'O campo Palavra-chave 1 é obrigatório',
            'second_keyword.required' => 'O campo Palavra-chave 2 é obrigatório',
            'third_keyword.required' => 'O campo Palavra-chave 3 é obrigatório',
            'author.required' => 'O campo Autor é obrigatório',
            'author_affiliation.required' => 'O campo Filiação Institucional é obrigatório',
        ];
    }
}
