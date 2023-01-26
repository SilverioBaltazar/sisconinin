<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reportemensualfiltroRequest extends FormRequest
{
    public function messages()
    {
        return [
            'periodo_id.required' => 'El periodo es obligatorio.',
            'mes_id.requered'     => 'El mes es obligatorio.',        
            'taccion_id.requered' => 'Tipo de proyecto es obligatorio.',        
            'depen_id.required'   => 'Unidad ejecutora es obligatoria.',            
            'clase.required'      => 'Clase de reporte es obligatorio.',
            'tipo.required'       => 'Tipo es obligatorio.'
        ];
    }
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
            'periodo_id' => 'required',
            'mes_id'     => 'required',            
            'taccion_id' => 'required',            
            'depen_id'   => 'required',
            'clase'      => 'required',
            'tipo'       => 'required'
        ];
    }
}
