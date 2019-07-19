<?php

namespace App\ModelLKPS;

use Illuminate\Database\Eloquent\Model;

class ModelLKPSC5 extends Model
{
    protected $table = 'lkps_pendidikan';
    protected $fillable = [
        'id','id_prodi'];
	public $primarykey='id';
}
