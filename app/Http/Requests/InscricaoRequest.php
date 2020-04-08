<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InscricaoRequest extends FormRequest
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
            'register_modality' => 'required',
            'file' => 'nullable',
            'cpf' => 'required|unique:registrations',
            'rg' => 'required|unique:registrations',
            'emissor' => 'required',
            'name' => 'required',
            'birth_date' => 'required|date',
            'social_name' => 'required',
            'institution' => 'nullable',
            'education_level' => 'required',
            'grad_school' => 'required',
            'profession' => 'required',
            'filiation' => 'nullable',
            'job_title' => 'nullable',
            'expertise' => 'nullable',
            'location' => 'required',
            'city' => 'required',
            'uf' => 'required',
            'country' => 'nullable',
            'home_phone' => 'nullable',
            'work_phone' => 'nullable',
            'mobile_phone' => 'nullable',
            'email' => 'required|email:rfc,dns|unique:registrations',
            'confirmEmail' => 'required|email:rfc,dns|same:email',
            'accessibility' => 'required|boolean',
            'accessibility_info' => 'nullable',
            'gender' => 'nullable',
            'color' => 'required',
            'use_social_name' => 'required|boolean'
        ];
    }

    public function messages(){
        return [
            'register_modality.required' => 'O campo modalidade é obrigatório',
            'cpf.required' => 'O campo CPF é obrigatório',
            'cpf.unique' => 'Esse CPF já possui cadastro.',
            'rg.required' => 'O campo RG é obrigatório.',
            'rg.unique' => 'Esse RG já possui cadastro',
            'emissor.required' => 'O campo Órgão Emissor é obrigatório.',
            'name.required' => 'O campo Nome é obrigatório',
            'birth_date.required' => 'O campo Data de Nascimento é obrigatório.',
            'social_name.required' => 'O campo Nome Social é obrigatório.',
            'education_level.required' => 'O campo Titulação Mais Alta é obrigatório.',
            'grad_school.required' => 'O campo Instituto de titulação é obrigatório.',
            'profession.required' => 'O campo Situação Profissional é obrigatório',
            'location.required' => 'O campo País de Residência é obrigatório.',
            'city.required' => 'O campo Município é obrigatório.',
            'uf.required' => 'O campo UF é obrigatório.',
            'email.required' => 'O campo Email é obrigatório.',
            'email.email' => 'O campo precisa ser preenchido com um e-mail.',
            'email.unique' => 'Este e-mail já possui cadastro.',
            'confirmEmail.required' => 'O campo Confirmar Email é obrigatório.',
            'confirmEmail.email' => 'O campo precisa ser preenchido com um e-mail',
            'confirmEmail.same' => 'Este campo precisa ser igual ao campo de Email',
            'accessibility.required' => 'O campo de Recursos de Acessibilidade é obrigatório.',
            'color.required' => 'O campo Raça é obrigatório.',
            'use_social_name.required' => 'O campo de Nome Social no Certificado é obrigatório.'
        ];
    }
}