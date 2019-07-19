<?php

namespace App\ModelLED;

use Illuminate\Database\Eloquent\Model;

class ModelLEDKondisiEksternal extends Model
{
    protected $table = 'led_kondisieks';
	protected $fillable = ['id','id_prodi', 'description']; 
	public $primarykey='id';
}
