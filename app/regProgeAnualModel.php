<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regProgeAnualModel extends Model
{
    protected $table      = "SIEVAD_EPA";
    protected $primaryKey = '[PERIODO_ID, FOLIO]';
    public $timestamps    = false;
    public $incrementing  = false;
    protected $fillable   = [
        'FOLIO',
        'PERIODO_ID',
        'DEPEN_ID1',
        'DEPEN_ID2',
        'DEPEN_ID3',
        'EPPROG_ID',
        'EPPROY_ID',
        'FECHA_ENTREGA',
        'FECHA_ENTREGA2',
        'FECHA_ENTREGA3',
        'PERIODO_ID1',
        'MES_ID1',
        'DIA_ID1',
        'MES_ID2',
        'PROGRAMA_ID',
        'PROGRAMA_DESC',
        'TACCION_ID',
        'RESPONSABLE',
        'ELABORO',
        'AUTORIZO',
        'RESP_CARGO',
        'ELAB_CARGO',
        'AUTO_CARGO',
        'OBS_1',
        'OBS_2',
        'STATUS_1',
        'STATUS_2',
        'FECREG',
        'FECREG2',
        'IP',
        'LOGIN',
        'FECHA_M',
        'FECHA_M2',
        'IP_M',
        'LOGIN_M'
    ];

    //***************************************//
    // *** Como se usa el query scope  ******//
    //***************************************//
    public function scopeNamepr($query, $namepr)
    { 
        if($namepr)
            return $query->orwhere('EPPROG_DESC', 'LIKE', "%$namepr%");
    }
    public function scopeNamepy($query, $namepy)
    { 
        $namepy = strtoupper($namepy);        
        if($namepy)
            return $query->orwhere('EPPROY_DESC', 'LIKE', "%$namepy%");
    }
    public function scopeNamedep($query, $namedep)
    { 
        $namedep = strtoupper($namedep);      
        if($namedep)
            return $query->orwhere('DEPEN_DESC', 'LIKE', "%$namedep%");
    }

    public function scopeFolio($query, $folio)
    {
        if($folio)
            return $query->orwhere('FOLIO', '=', $folio);
    }
 
    public function scopeName($query, $name)
    {
        if($name)
            return $query->where('PROGRAMA_DESC', 'LIKE', "%$name%");
    }

    public function scopeActi($query, $acti)
    {
        if($acti)
            return $query->where('ACTIVIDAD_DESC', 'LIKE', "%$acti%");
    }

    public function scopeIdd($query, $idd)
    {
        if($idd)
            return $query->orwhere('EPPROG_ID', '=', $idd);
    }  
    public function scopeNameiap($query, $nameiap)
    {
        if($nameiap) 
            return $query->where('OSC_DESC', 'LIKE', "%$nameiap%");
    }
       
}
