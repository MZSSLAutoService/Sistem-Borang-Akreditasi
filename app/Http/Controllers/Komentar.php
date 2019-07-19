<?php

namespace App\Http\Controllers;

use App\ModelLEDCover;
use App\ModelLEDCover_prodi_upps;
use App\ModelKomentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Komentar extends Controller
{
    public function komentarcoverpost(Request $request)
    {   
        
        $data1 = new ModelKomentar();
        $data1->id_cover = $request->id_cover;
        $data1->ket = $request->komentar;
        $data1->save();
        if($data1){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        } 
    }

    public function komentarpendahuluanpost(Request $request)
    {   
        $data2 = new ModelKomentar();
        
        $data2->id_pendahuluan = $request->id_pendahuluan;
        $data2->ket = $request->komentar;
        $data2->save();
        if($data2){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        } 
    }
}
