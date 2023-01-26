<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regEPproyectoModel extends Model
{
    protected $table      = "SIEVAD_CAT_EP_PROYECTO";
    protected $primaryKey = 'CONDICION_ID';
    public $timestamps    = false;
    public $incrementing  = false;
    protected $fillable   = [
        'EPPROY_ID',
        'EPPROY_DESC',
        'EPPROY_STATUS',
        'EPPROY_FECREG'
    ];

    //***************************************//
    // *** Como se usa el query scope  ******//
    //***************************************//  
    public function scopeNamepy($query, $namepy)
    { 
        $namepy = strtoupper($namepy);        
        if($namepy)
            return $query->orwhere('EPPROY_DESC', 'LIKE', "%$namepy%");
    }

    public function scopeActi($query, $acti)
    {
        if($acti)
            return $query->where('ACTIVIDAD_DESC', 'LIKE', "%$acti%");
    }

    public function scopeBio($query, $bio)
    {
        if($bio)
            return $query->where('OBJETIVO_DESC', 'LIKE', "%$bio%");
    }


}