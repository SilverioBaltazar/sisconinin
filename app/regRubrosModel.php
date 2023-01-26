<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regRubrosModel extends Model
{
    protected $table      = "SIEVAD_CAT_RUBROS";
    protected $primaryKey = 'RUBRO_ID';
    public $timestamps    = false;
    public $incrementing  = false;
    protected $fillable   = [
        'RUBRO_ID',
        'RUBRO_DESC',
        'RUBRO_STATUS',
        'RUBRO_FECREG'
    ];

    //***************************************//
    // *** Como se usa el query scope  ******//
    //***************************************//
    public function scopeName($query, $name)
    {
        if($name)
            return $query->where('RUBRO_DESC', 'LIKE', "%$name%");
    }    
    
}
