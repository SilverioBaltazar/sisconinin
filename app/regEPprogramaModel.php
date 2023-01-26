<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regEPprogramaModel extends Model
{
    protected $table      = "SIEVAD_CAT_EP_PROGRAMA";
    protected $primaryKey = ['EPPROG_ID','PILAR_ID'];
    public $timestamps    = false;
    public $incrementing  = false;
    protected $fillable   = [
        'EPPROG_ID',
        'EPPROG_DESC',
        'PILAR_ID',
        'PILAR_DESC',
        'EPPROG_STATUS',
        'EPPROG_FECREG'
    ];

    //***************************************// 
    // *** Como se usa el query scope  ******//
    //***************************************//
    public function scopeNamepr($query, $namepr)
    { 
        $namepr = strtoupper($namepr);
        if($namepr)
            return $query->orwhere('EPPROG_DESC', 'LIKE', "%$namepr%");
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