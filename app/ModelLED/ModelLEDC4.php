<?php

namespace App\ModelLED;

use Illuminate\Database\Eloquent\Model;

class ModelLEDC4 extends Model
{
    protected $table = 'led_c4';
	protected $fillable = ['id','id_prodi', 'description', 'kebijakan', 'stp_standar', 'iku1', 'iku2', 'iku3', 'iku4', 'ikt', 'eval', 'pm_sdm', 'kpg', 'simpulan']; 
	public $primarykey='id';
}
