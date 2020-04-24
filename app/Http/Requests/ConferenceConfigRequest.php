<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConferenceConfigRequest extends FormRequest
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
            'name_conference' => 'required',
            'promoting_entity' => 'required',
            'primary_email' => 'required|email:rfc,dns',
            'event_start_date' => 'required|date',
            'event_end_date' => 'required|date',
            'how_to_subscribe' => 'required',
            'referee_instructions' => 'required',
        ];
    }
    public function messages(){
        return [

            'name_conference.required' => 'O campo nome do Congresso é obrigatório.',
            'promoting_entity.required' => 'O campo nome Entidade Promotora é obrigatório.',
            'primary_email.required' => 'O campo E-mail é obrigatório.',
            'primary_email.email' => 'Este campo preenchido com um email.',
            'event_start_date.required' => 'O campo data do início do evento é obrigatório.',
            'event_end_date.required' => 'O campo data do término do evento é obrigatório.',
            'how_to_subscribe.required' => 'O campo Instruções sobre como se inscrever é obrigatório.',
            'referee_instructions.required' => 'O campo Instruções aos pareceristas é obrigatório.',
        ];
    }
}
