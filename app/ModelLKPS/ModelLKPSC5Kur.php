<?php

namespace App\ModelLKPS;

use Illuminate\Database\Eloquent\Model;

class ModelLKPSC5Kur extends Model
{
    protected $table = 'lkps_kurikulum';
    protected $fillable = [
        'id','id_pendidikan', 
        'smstr', 'kode_matkul', 'nama_matkul', 'sks_matkul', 'sks_seminar', 'sks_lap', 'kredit_jam', 'sikap',
        'pengetahuan', 'ktmp_umum', 'ktmp_khusus', 'dok', 'unit'];
	public $primarykey='id';
}
