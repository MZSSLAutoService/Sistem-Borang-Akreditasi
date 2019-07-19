<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelMasterJurusan extends Model
{
    protected $table = 'master_jurusan';
	protected $fillable = ['id', 'nama']; 
	public $primarykey='id';
}
