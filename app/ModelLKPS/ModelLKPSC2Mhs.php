<?php

namespace App\ModelLKPS;

use Illuminate\Database\Eloquent\Model;

class ModelLKPSC2Mhs extends Model
{
    protected $table = 'lkps_mahasiswa';
    protected $fillable = [
    'id','id_prodi', 'ta4', 'dt4', 'cmp4', 'cmls4', 'mbr4', 'mbt4', 'mar4', 'mat4', 
    'ta3', 'dt3', 'cmp3', 'cmls3', 'mbr3', 'mbt3', 'mar3', 'mat3', 
    'ta2', 'dt2', 'cmp2', 'cmls2', 'mbr2', 'mbt2', 'mar2', 'mat2',
    'ta1', 'dt1', 'cmp1', 'cmls1', 'mbr1', 'mbt1', 'mar1', 'mat1',
    'ta0', 'dt0', 'cmp0', 'cmls0', 'mbr0', 'mbt0', 'mar0', 'mat0',
    'nrts', 'ntts']; 
	public $primarykey='id';
}
