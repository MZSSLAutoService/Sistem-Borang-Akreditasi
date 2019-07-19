<?php

namespace App\ModelLED;

use Illuminate\Database\Eloquent\Model;

class ModelLEDPenutup extends Model
{
    protected $table = 'led_penutup';
	protected $fillable = ['id','id_prodi', 'description']; 
	public $primarykey='id';
}
