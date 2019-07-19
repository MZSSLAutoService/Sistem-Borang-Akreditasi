<?php

namespace App\ModelLKPS;

use Illuminate\Database\Eloquent\Model;

class ModelLKPSCover extends Model
{
    protected $table = 'lkps_cover';
    protected $fillable = [
    'id','id_prodi', 'prodi', 'pt', 'kota', 'th', 'upps', 'jenis_ps', 'alamat', 'telp', 
    'email_web', 'sk_pt', 'tgl_sk_pt', 'pp_sk_pt', 'sk_ps', 'tgl_sk_ps', 'pp_sk_ps', 'th_awal', 'peringkat_banpt', 'sk_banpt', 
    'nama_pys1', 'nidn_pys1', 'jabatan_pys1', 'tgl1', 'file_ttd1', 'nama_pys2', 'nidn_pys2', 'jabatan_pys2', 'tgl2', 
    'file_ttd2', 'nama_pys3', 'nidn_pys3', 'jabatan_pys3', 'tgl3', 'file_ttd3', 'nama_pys4', 'nidn_pys4', 'jabatan_pys4', 
    'tgl4', 'file_ttd4', 'kata_pengantar', 'ringkasan']; 
	public $primarykey='id';
}
