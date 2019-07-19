<?php

namespace App\ModelLED;

use Illuminate\Database\Eloquent\Model;

class ModelLEDC7 extends Model
{
    protected $table = 'led_c7';
	protected $fillable = ['id','id_prodi', 'description', 'kebijakan', 'stp_standar', 'iku', 'ikt', 'eval', 'pmpl', 'kpg', 'simpulan']; 
	public $primarykey='id';
}
