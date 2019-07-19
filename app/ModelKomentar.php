<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKomentar extends Model
{
    protected $table = 'komentar';
	protected $fillable = ['id','id_cover', 'id_pendahuluan', 'id_kondisieks','id_upps', 'id_c1', 'id_c2', 'id_c3', 'id_c4',
							'id_c5', 'id_c6', 'id_c7', 'id_c8', 'id_c9', 'id_analisis', 'id_penutup', 'ket']; 
	public $primarykey='id';
}
