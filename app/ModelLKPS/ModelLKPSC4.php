<?php

namespace App\ModelLKPS;

use Illuminate\Database\Eloquent\Model;

class ModelLKPSC4 extends Model
{
    protected $table = 'lkps_keuangan';
    protected $fillable = [
        'id','id_prodi', 
        'TS2uppsbop',   'TS1uppsbop',   'TSuppsbop',   'TS2psbop',      'TSpsbop',      'TSpsbop',
        'TS2uppsbd',    'TS1uppsbd',    'TSuppsbd',     'TS2psbd',      'TS1psbd',      'TSpsbd',
        'TS2uppsbtk',   'TS1uppsbtk',   'TSuppsbtk',    'TS2psbtk',     'TS1psbtk',     'TSpsbtk',
        'TS2uppsbopm',  'TS1uppsbopm',  'TSuppsbopm',   'TS2psbopm',    'TS1psbopm',    'TSpsbopm', 
        'TS2uppsbotl',  'TS1uppsbotl',  'TSuppsbotl',   'TS2psbotl',    'TS1psbotl',    'TSpsbotl',
        'TS2uppsbok',   'TS1uppsbok',   'TSuppsbok',    'TS2psbok',     'TS1psbok',     'TSpsbok',
        'TS2uppsbp',    'TS1uppsbp',    'TSuppsbp',     'TS2psbp',      'TS1psbp',      'TSpsbp', 
        'TS2uppsbpkm',  'TS1uppsbpkm',  'TSuppsbpkm',   'TS2psbpkm',    'TS1psbpkm',    'TSpsbpkm',
        'TS2uppsbsdm',  'TS1uppsbsdm',  'TSuppsbsdm',   'TS2psbsdm',    'TS1psbsdm',    'TSpsbsdm',
        'TS2uppsbsrn',  'TS1uppsbsrn',  'TSuppsbsrn',   'TS2psbsrn',    'TS1psbsrn',    'TSpsbsrn', 
        'TS2uppsbpsrn', 'TS1uppsbpsrn', 'TSuppsbpsrn',  'TS2psbpsrn',   'TS1psbpsrn',   'TSpsbpsrn'];
	public $primarykey='id';
}




