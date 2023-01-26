<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regRelscmModel extends Model
{
    protected $table      = "SIEVAD_REL_SUBSEC_COORD_MUN";
    protected $primaryKey = 'SUBSEC_ID';
    public $timestamps    = false;
    public $incrementing  = false;
    protected $fillable   = [
        'SUBSEC_ID',
        'SUBSEC_DESC',
        'COORD_ID',
        'COORD_DESC',
        'REGION_ID',
        'REGION_ROMANO',
        'REGION_DESC',        
        'MUNICIPIO_ID',
        'MUNICIPIO_DESC',
        'DTTOLOC_ID',
        'DTTOLOC_DESC',        
        'DTTOFED_ID',
        'DTTOFED_DESC',                
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
    public function scopeName($query, $name)
    {
        if($name)
            return $query->where('RUBRO_DESC', 'LIKE', "%$name%");
    }    

    public static function obtRelac($id){
        return regRelscmModel::select('SUBSEC_ID','SUBSEC_DESC','COORD_ID','COORD_DESC','REGION_ID','REGION_ROMANO','REGION_DESC')
                               ->where('MUNICIPIO_ID','=',$id )
                               ->get();
    }   

}
