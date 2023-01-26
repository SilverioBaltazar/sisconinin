<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regColoresModel extends Model
{
    protected $table      = "SIEVAD_CAT_COLORES";
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
