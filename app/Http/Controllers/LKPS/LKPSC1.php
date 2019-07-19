<?php

namespace App\Http\Controllers\LKPS;
use App\Http\Controllers\Controller;

use App\ModelLKPS\ModelLKPSC1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LKPSC1 extends Controller
{
    public function index() 
    { 
        $data['lkps_c1'] = DB::table('lkps_kerjasama')
                        ->get();
        $data['id_c1'] = $_GET['upps'];
        return view('LKPS_C1.index',$data);
    }

    public function tambah() 
    { 
        return view('LKPS_C1.add');
    }

    public function LKPSC1Post(Request $request)
    {
        $C1=DB::table('lkps_kerjasama')
                    ->rightJoin('users','lkps_kerjasama.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();

            foreach($request->lembaga_mitra_input as $key => $v){
                $data = array('id_prodi'=>$request->id_prodi = $C1->id_prodi,
                                'lm'=>$request->lembaga_mitra_input [$key],
                                't_inter'=>$request->inter_input [$key],
                                't_nasional'=>$request->nasional_input [$key],
                                't_lokal'=>$request->lokal_input [$key],
                                'judul'=>$request->judul_input [$key],
                                'manfaat'=>$request->manfaat_input [$key],
                                'waktu'=>$request->waktu_input [$key],
                                'bukti'=>$request->bukti_input [$key]);
                ModelLKPSC1::insert($data);
            }
        
            $C1=DB::table('lkps_kerjasama')
                        ->leftJoin( 'users','lkps_kerjasama.id_prodi','=','users.id_prodi')
                        ->select('lkps_kerjasama.*')
                        ->where('users.id',Session::get('id'))
                        ->first();
        return redirect(url("c1lkps?id=".$C1->id_prodi."&upps=".$C1->id)); 
    }
}
