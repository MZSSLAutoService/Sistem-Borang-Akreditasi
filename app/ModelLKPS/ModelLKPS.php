<?php

namespace App\ModelLKPS;

use Illuminate\Database\Eloquent\Model;

class ModelLKPS extends Model
{
    protected $table = 'lkps';
	protected $fillable = ['id','id_prodi', 'id_user']; 
	public $primarykey='id';
}
