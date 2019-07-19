<?php

namespace App\ModelLED;

use Illuminate\Database\Eloquent\Model;

class ModelLEDCover_prodi_upps extends Model
{
    protected $table = 'led_cover_prodi_upps';
    protected $fillable = ['id','id_cover', 'jp_upps', 'prodi_upps', 'status', 'no_tgl_sk', 'tgl_kdw', 'jml_mhs']; 
	public $primarykey='id';
}
