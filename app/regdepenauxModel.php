<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regdepenauxModel extends Model
{
    protected $table = "SIEVAD_CAT_DEPENDENCIAS_AUX";
    protected  $primaryKey = 'DEPEN_ID';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
      'DEPEN_ID',
      'DEPEN_DESC',
      'ESTRUCTURA_GEM',
      'CLASIFICACION',
      'DEPEN_PADRE',
      'DEPEN_HIJO',
      'DEPEN_STATUS',
      'ESTRUCGOB_ID',
      'CLASIFICGOB_ID',
      'DEPEN_FECREG',
      'DEPEN_FECACT'
    ];

    //***************************************//
    // *** Como se usa el query scope  ******//
    //***************************************//  
    public function scopeNamedepaux($query, $namedepaux)
    { 
        $namedepaux = strtoupper($namedepaux);      
        if($namedepaux)
            return $query->orwhere('DEPEN_DESC', 'LIKE', "%$namedepaux%");
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


    public static function Unidades($id){
        return dependenciasModel::select('DEPEN_ID','DEPEN_DESC')
                                  ->where('DEPEN_ID','like','%211C04%')
        						  ->where('ESTRUCGOB_ID','like','%'.$id.'%')
                                  ->orderBy('DEPEN_ID','asc')
                                  ->get();
    }
}
