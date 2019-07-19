<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelMasterProdi extends Model
{
    protected $table = 'master_prodi';
	protected $fillable = ['id','id_jurusan', 'nama']; 
	public $primarykey='id';
}
