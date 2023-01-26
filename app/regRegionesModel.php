<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regRegionesModel extends Model
{
    protected $table      = "CAT_REGIONES_SEDESEM";
    protected $primaryKey = 'REGION_ID';
    public $timestamps    = false;
    public $incrementing  = false;
    protected $fillable   = [
        'REGION_ID',
        'REGION_ROMANO',
        'REGION_DESC',
        'SEPUBLICA'
    ];
}
