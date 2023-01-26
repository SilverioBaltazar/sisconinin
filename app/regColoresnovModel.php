<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regColoresnovModel extends Model
{
    protected $table      = "SIEVAD_CAT_COLORES_11";
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
