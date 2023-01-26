<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regColorestrim3Model extends Model
{
    protected $table      = "SIEVAD_CAT_COLORES_TRIM03";
    protected $primaryKey = 'COLOR_ID';
    public $timestamps    = false;
    public $incrementing  = false;
    protected $fillable   = [
        'COLOR_ID',
		'COLOR_DESC',
		'COLOR_RANGO',
		'COLOR_COLOR'
    ];
}
