<?php

namespace App\ModelLKPS;

use Illuminate\Database\Eloquent\Model;

class ModelLKPSC6dptsmhs extends Model
{
    protected $table = 'lkps_penelitiandptsmhs';
    protected $fillable = [
        'id','id_penelitian','nama_dosen','tema','nama_mhs','judul','tahun'];
	public $primarykey='id';
}
