<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regDirdiplocModel extends Model
{
    protected $table      = "SIEVAD_DIRECTORIO_DIPLOC";
    protected $primaryKey = ['PERIODO_ID', 'DIPLOC_ID'];
    public $timestamps    = false;
    public $incrementing  = false;
    protected $fillable   = [
        'PERIODO_ID',
        'DIPLOC_ID',
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
        'DTTOLOC_ID',
        'DTTOLOC_ROMANO',
        'DTTOLOC_DESC',
        'DTTOLOC_NOMPIOS',
        'CARGO_ID',
        'CARGO_DESC',
        'DTTOLOC_RESPON',
        'DTTOLOC_TELOFIC',
        'DTTOLOC_TELEFONO',
        'DTTOLOC_EMAIL',
        'DTTOLOC_DOM',
        'DTTOLOC_PARTIDO',
        'DTTOLOC_FOTO1',
        'DTTOLOC_FOTO2',
        'DTTOLOC_FOTO3',
        'DTTOLOC_OBS1',
        'DTTOLOC_OBS2',
        'DTTOLOC_STATUS1',
        'DTTOLOC_STATUS2',
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
            return $query->where('DTTOLOC_RESPON', 'LIKE', "%$name%");
    }    
    
}
