<?php

namespace App\ModelLKPS;

use Illuminate\Database\Eloquent\Model;

class ModelLKPSC2MhsA extends Model
{
    protected $table = 'lkps_mahasiswa_Asing';
    protected $fillable = [
    'id','id_mahasiswa', 'prodi', 'ts2a', 'ts1a', 'tsa', 
    'ts2f', 'ts1f', 'tsf',
    'ts2p', 'ts1p', 'tsp'];
	public $primarykey='id';
}
