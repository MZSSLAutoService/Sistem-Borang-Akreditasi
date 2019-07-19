<?php

namespace App\ModelLED;

use Illuminate\Database\Eloquent\Model;

class ModelLEDProfilUPPS extends Model
{
    protected $table = 'led_upps';
	protected $fillable = ['id','id_prodi', 'description', 'sejarah_upps', 'visi_misi', 'org', 'mhs_alumni', 'dosen_tk', 'keu_sarpras', 'spm', 'kinerja']; 
	public $primarykey='id';
}
