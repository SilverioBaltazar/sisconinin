<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dirdhsRequest extends FormRequest
{
    public function messages()
    {
        return [
            //'periodo_id.required' => 'Periodo fiscal es obligatorio.',
            'municipio_id.required' => 'Municipio es obligatorio.',         
            'cargo_des.min'         => 'Cargo es de mínimo 1 caracter.',
            'cargo_des.max'         => 'Cargo es de máximo 100 caracteres.',
            'cargo_des.required'    => 'Cargo es obligatorio.',
            'dhs_telefono.required' => 'Celular es obligatorio.',
            'dhs_respon.min'        => 'Responsable es de mínimo 1 caracter.',
            'dhs_respon.max'        => 'Responsable es de máximo 80 caracteres.',
            'dhs_respon.required'   => 'Responsable es obligatorio.',
            'dhs_email.required'    => 'Correo electrónico es obligatorio.',
            'dhs_dom.min'           => 'Domicilio es de mínimo 1 caracter.',
            'dhs_dom.max'           => 'Domicilio es de máximo 100 caracteres.',
            'dhs_dom.required'      => 'Domicilio es obligatorio.'
            //'dhs_foto1.required'  => 'La fotografia es obligatoria'
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
            //'periodo_id' => 'required',
            'municipio_id' => 'required',        
            'cargo_desc'   => 'required|min:1|max:100',
            'dhs_telefono' => 'required',
            'dhs_respon'   => 'required|min:1|max:80',
            'dhs_email'    => 'email|min:5|max:80|required',
            'dhs_dom'      => 'required|min:1|max:100'
            //'rubro_desc' => 'min:1|max:80|required|regex:/(^([a-zA-zñÑ%()=.\s\d]+)?$)/iñÑ'
        ];
    }
}
