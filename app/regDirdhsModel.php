<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regDirdhsModel extends Model
{
    protected $table      = "SIEVAD_DIRECTORIO_DHS";
    protected $primaryKey = '´DHS_ID';
    public $timestamps    = false;
    public $incrementing  = false;
    protected $fillable   = [
        'PERIODO_ID',
        'DHS_ID',
        'NIVELGOB_ID',
        'NIVELGOB_DESC',
        'RUBRO_ID',
        'RUBRO_DESC',
        'SUBSEC_ID',
        'SUBSEC_DESC',
        'COORD_ID',
        'COORD_DESC',
        'REGION_ID',
        'REGION_ROMANO',
        'REGION_DESC',
        'MUNICIPIO_ID',
        'MUNICIPIO_DESC',
        'CARGO_ID',
        'CARGO_DESC',
        'DHS_RESPON',
        'DHS_TELOFIC',
        'DHS_TELEFONO',
        'DHS_EMAIL',
        'DHS_DOM',
        'DHS_FOTO1',
        'DHS_FOTO2',
        'DHS_OBS1',
        'DHS_OBS2',
        'DHS_STATUS1',
        'DHS_STATUS2',
        'FECREG',
        'FECREG2',
        'FECREG3',
        'IP',
        'LOGIN',
        'FECHA_M',
        'FECHA_M2',
        'FECHA_M3',
        'IP_M',
        'LOGIN_M'
    ];

    //***************************************//
    // *** Como se usa el query scope  ******//
    //***************************************//
    public function scopeName($query, $name)
    {
        $name = strtoupper(Trim($name));                  
        if($name)
            return $query->where('DHS_RESPON', 'LIKE', "%$name%");
    }    
    
}
