<?php

namespace App\ModelLED;

use Illuminate\Database\Eloquent\Model;

class ModelLEDC5 extends Model
{
    protected $table = 'led_c5';
	protected $fillable = ['id','id_prodi', 'description', 'kebijakan', 'stp_standar', 'iku1', 'iku2', 'iku3', 'ikt', 'eval', 'pm_keupras', 'kpg', 'simpulan']; 
	public $primarykey='id';
}
