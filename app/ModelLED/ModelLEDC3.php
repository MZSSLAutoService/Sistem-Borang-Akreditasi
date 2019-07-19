<?php

namespace App\ModelLED;

use Illuminate\Database\Eloquent\Model;

class ModelLEDC3 extends Model
{
    protected $table = 'led_c3';
	protected $fillable = ['id','id_prodi', 'description', 'kebijakan', 'stp_standar', 'iku1', 'iku2', 'iku3', 'ikt', 'eval', 'pmm', 'kpg', 'simpulan']; 
	public $primarykey='id';
}
