<?php

namespace App\ModelLED;

use Illuminate\Database\Eloquent\Model;

class ModelLEDC6 extends Model
{
    protected $table = 'led_c6';
	protected $fillable = ['id','id_prodi', 'description', 'kebijakan', 'stp_standar', 'iku1', 'iku2', 'iku3', 'ikt', 'eval', 'pmp', 'kpg', 'simpulan']; 
	public $primarykey='id';
}
