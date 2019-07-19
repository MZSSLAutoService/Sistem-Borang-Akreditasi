<?php

namespace App\ModelLKPS;

use Illuminate\Database\Eloquent\Model;

class ModelLKPSC6dptstema extends Model
{
    protected $table = 'lkps_penelitiandptstema';
    protected $fillable = [
        'id','id_penelitian','nama_dosen','tema','nama_mhs','judul','tahun'];
	public $primarykey='id';
}
