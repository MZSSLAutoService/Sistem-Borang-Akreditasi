<?php

namespace App\ModelLED;

use Illuminate\Database\Eloquent\Model;

class ModelLED extends Model
{
    protected $table = 'led';
	protected $fillable = ['id','id_prodi', 'id_user']; 
	public $primarykey='id';
}
