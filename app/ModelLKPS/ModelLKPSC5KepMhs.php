<?php

namespace App\ModelLKPS;

use Illuminate\Database\Eloquent\Model;

class ModelLKPSC5KepMhs extends Model
{
    protected $table = 'lkps_kepuasanmhs';
    protected $fillable = [
        'id','id_pendidikan', 
        'Aspk1_sb', 'Aspk1_b', 'Aspk1_c', 'Aspk1_k', 'Aspk1_rencana',
        'Aspk2_sb', 'Aspk2_b', 'Aspk2_c', 'Aspk2_k', 'Aspk2_rencana',
        'Aspk3_sb', 'Aspk3_b', 'Aspk3_c', 'Aspk3_k', 'Aspk3_rencana',
        'Aspk4_sb', 'Aspk4_b', 'Aspk4_c', 'Aspk4_k', 'Aspk4_rencana',
        'Aspk5_sb', 'Aspk5_b', 'Aspk5_c', 'Aspk5_k', 'Aspk5_rencana'];
	public $primarykey='id';
}
