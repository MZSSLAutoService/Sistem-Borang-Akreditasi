<?php

namespace App\ModelLKPS;

use Illuminate\Database\Eloquent\Model;

class ModelLKPSC1 extends Model
{
    protected $table = 'lkps_kerjasama';
    protected $fillable = [
    'id','id_prodi', 'lm', 't_inter', 't_nasional', 't_lokal', 'judul', 'manfaat', 'waktu', 'bukti']; 
	public $primarykey='id';
}
