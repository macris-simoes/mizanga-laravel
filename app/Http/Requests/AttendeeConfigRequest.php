<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttendeeConfigRequest extends FormRequest
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
            'register_start_date' => 'required|date',
            'register_end_date' => 'required|date',
            'attach_receipt' => 'required|boolean',
            'register_fee' => 'required|numeric',
        ];
    }
    public function messages(){
        return [
            'register_modality.required' => 'O campo Modalidade é obrigatório',
            'register_start_date.required' => 'O campo data de início das inscrições é obrigatório',
            'register_end_date.required' => 'O campo data de término das inscrições é obrigatório',
            'attach_receipt.required' => 'O campo anexar comprovante é obrigatório',
            'register_fee.required' => 'O campo taxa de inscrição é obrigatório',
        ];
    }
}
