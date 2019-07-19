<?php

namespace App\ModelLKPS;

use Illuminate\Database\Eloquent\Model;

class ModelLKPSC5KegPen extends Model
{
    protected $table = 'lkps_kegiatanpenelitian';
    protected $fillable = [
        'id','id_pendidikan', 'judul_penelitian', 'nama_dosen', 'mata_kuliah', 'integrasi'];
	public $primarykey='id';
}
