<?php

namespace App\ModelLED;

use Illuminate\Database\Eloquent\Model;

class ModelLEDC8 extends Model
{
    protected $table = 'led_c8';
	protected $fillable = ['id','id_prodi', 'description', 'kebijakan', 'stp_standar', 'iku', 'ikt', 'eval', 'pmpm', 'kpg', 'simpulan']; 
	public $primarykey='id';
}
