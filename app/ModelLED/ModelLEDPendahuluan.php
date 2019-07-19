<?php

namespace App\ModelLED;

use Illuminate\Database\Eloquent\Model;

class ModelLEDPendahuluan extends Model
{
    protected $table = 'led_pendahuluan';
	protected $fillable = ['id','id_prodi', 'description', 'dasar_penyusunan', 'tim_penyusun', 'mekanisme']; 
	public $primarykey='id';
}
