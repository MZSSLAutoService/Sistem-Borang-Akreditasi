<?php

namespace App\ModelLED;

use Illuminate\Database\Eloquent\Model;

class ModelLEDAnalisis extends Model
{
    protected $table = 'led_analisis_upps';
	protected $fillable = ['id','id_prodi', 'analisis_capaian', 'analisis_swot', 'strategi', 'program_lanjutan']; 
	public $primarykey='id';
}
