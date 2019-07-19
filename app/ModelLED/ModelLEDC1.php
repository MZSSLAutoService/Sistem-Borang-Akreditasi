<?php

namespace App\ModelLED;

use Illuminate\Database\Eloquent\Model;

class ModelLEDC1 extends Model
{
    protected $table = 'led_c1';
	protected $fillable = ['id','id_prodi', 'description', 'kebijakan', 'stp_vmts', 'iku', 'ikt', 'eval_vmts', 'simpulan_vmts']; 
	public $primarykey='id';
}
