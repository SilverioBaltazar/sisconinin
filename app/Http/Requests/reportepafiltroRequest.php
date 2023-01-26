<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reportepafiltroRequest extends FormRequest
{
    public function messages()
    {
        return [
            //'periodo_id.required' => 'El periodo fiscal es obligatorio.', 
            //'mes_id.required'     => 'El mes es obligatorio.',
            'folio.required'        => 'Folio de proyecto es obligatorio.',
            'clase.required'        => 'Clase de reporte es obligatorio.',
            'tipo.required'         => 'Tipo es obligatorio.'
            //'vis_tipo2.required'  => 'Seleccionar el formato del reporte de salida, Excel o PDF.'
            //'vis_conto.required'  => 'El contacto de la IAP es obligatorio.',
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
            //'periodo_id'=> 'required', 
            //'mes_id'    => 'required',
            'folio'       => 'required',
            'clase'       => 'required',
            'tipo'        => 'required'
            //'tipo2'     => 'required'
        ];
    }
}
