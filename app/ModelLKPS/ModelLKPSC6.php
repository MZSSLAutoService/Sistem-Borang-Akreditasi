<?php

namespace App\ModelLKPS;

use Illuminate\Database\Eloquent\Model;

class ModelLKPSC6 extends Model
{
    protected $table = 'lkps_penelitian';
    protected $fillable = [
        'id','id_prodi'];
	public $primarykey='id';
}




