<?php

namespace App\Http\Controllers\LKPS;
use App\Http\Controllers\Controller;

use App\ModelLKPS\ModelLKPS;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;

class LKPS extends Controller
{
    public function LKPSPost(Request $request) 
    { 
        $data = new ModelLKPS();
        $data->id_user = $request->id;
        $data->id_prodi = $request->id_prodi;  
        $data->save();

        $cover=DB::table('lkps_cover')
                    ->join('users','lkps_cover.id_prodi','=','users.id_prodi')
                    ->select('lkps_cover.*')
                    ->where('users.id',Session::get('id'))
                    ->first();

        if($cover!=null){
            return redirect(url("coverlkps?id=".$cover->id_prodi."&upps=".$cover->id));
        }else {
            return redirect(url('tambahcoverlkps'));
        }
    }
}
