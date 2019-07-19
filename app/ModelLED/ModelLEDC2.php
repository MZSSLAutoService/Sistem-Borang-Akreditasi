<?php

namespace App\ModelLED;

use Illuminate\Database\Eloquent\Model;

class ModelLEDC2 extends Model
{
    protected $table = 'led_c2';
	protected $fillable = ['id','id_prodi', 'description', 'kebijakan', 'stp_vmts', 'iku1', 'iku2', 'iku3', 'iku4', 'ikt', 'eval', 'pmtp', 'kpg', 'simpulan']; 
	public $primarykey='id';
}
