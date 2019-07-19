<?php

namespace App\ModelLED;

use Illuminate\Database\Eloquent\Model;

class ModelLEDC9 extends Model
{
    protected $table = 'led_c9';
	protected $fillable = ['id','id_prodi', 'iku1', 'iku2', 'ikt', 'eval', 'pmplct', 'kpg', 'simpulan']; 
	public $primarykey='id';
}
