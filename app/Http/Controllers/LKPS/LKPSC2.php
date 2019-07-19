<?php

namespace App\Http\Controllers\LKPS;
use App\Http\Controllers\Controller;

use App\ModelLKPS\ModelLKPSC2Mhs;
use App\ModelLKPS\ModelLKPSC2MhsA;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LKPSC2 extends Controller
{
    public function index() 
    { 
        $data['lkps_c2A'] = DB::table('lkps_mahasiswa_Asing')
                                ->join('lkps_mahasiswa', 'lkps_mahasiswa_Asing.id_mahasiswa', '=', 'lkps_mahasiswa.id')
                                ->select( 'lkps_mahasiswa_Asing.*')
                                ->where('id_mahasiswa',$_GET['upps'])
                                ->get();
        $data['lkps_c2'] = DB::table('lkps_mahasiswa')
                        ->get();
        $data['id_c2'] = $_GET['upps'];
        return view('LKPS_C2.index',$data);
        // return view('standar');
    }

    public function tambah() 
    { 
        return view('LKPS_C2.add');
    }

    public function LKPSC2Post(Request $request)
    {
        // dd($request);
        $C2=DB::table('lkps_mahasiswa')
                    ->rightJoin('users','lkps_mahasiswa.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();
                    // dd($C2->id_prodi);

        $data1 = new ModelLKPSC2Mhs();  
        $data1->id_prodi = $request->id_prodi = $C2->id_prodi;
        $data1->ta4 = $request->ta4 = "TS-4";
        $data1->dt4 = $request->dt4;
        $data1->cmp4 = $request->cmp4;
        $data1->cmls4 = $request->cmls4;
        $data1->mbr4 = $request->mbr4;
        $data1->mbt4 = $request->mbt4;
        $data1->mar4 = $request->mar4;
        $data1->mat4 = $request->mat4;

        $data1->ta3 = $request->ta3 = "TS-3";
        $data1->dt3 = $request->dt3;
        $data1->cmp3 = $request->cmp3;
        $data1->cmls3 = $request->cmls3;
        $data1->mbr3 = $request->mbr3;
        $data1->mbt3 = $request->mbt3;
        $data1->mar3 = $request->mar3;
        $data1->mat3 = $request->mat3;

        $data1->ta2 = $request->ta2 = "TS-2";
        $data1->dt2 = $request->dt2;
        $data1->cmp2 = $request->cmp2;
        $data1->cmls2 = $request->cmls2;
        $data1->mbr2 = $request->mbr2;
        $data1->mbt2 = $request->mbt2;
        $data1->mar2 = $request->mar2;
        $data1->mat2 = $request->mat2;

        $data1->ta1 = $request->ta1 = "TS-1";
        $data1->dt1 = $request->dt1;
        $data1->cmp1 = $request->cmp1;
        $data1->cmls1 = $request->cmls1;
        $data1->mbr1 = $request->mbr1;
        $data1->mbt1 = $request->mbt1;
        $data1->mar1 = $request->mar1;
        $data1->mat1 = $request->mat1;

        $data1->ta0 = $request->ta0 = "TS";
        $data1->dt0 = $request->dt0;
        $data1->cmp0 = $request->cmp0;
        $data1->cmls0 = $request->cmls0;
        $data1->mbr0 = $request->mbr0;
        $data1->mbt0 = $request->mbt0;
        $data1->nrts = $request->nrst;
        $data1->ntts = $request->ntts;
       
        //ARRAY
        if( $data1->save()){
            $data['prodi_input']=$request->prodi_input;
            $data['ts2a_input']=$request->ts2a_input;
            $data['ts1a_input']=$request->ts1a_input;
            $data['tsa_input']=$request->tsa_input;
            $data['ts2f_input']=$request->ts2f_input;
            $data['ts1f_input']=$request->ts1f_input;
            $data['tsf_input']=$request->tsf_input;
            $data['ts2p_input']=$request->ts2p_input;
            $data['ts1p_input']=$request->ts1p_input;
            $data['tsp_input']=$request->tsp_input;
            // dd($data);
    
            //   dd($data['jenis_pro_input'][1]);
    
            $cek=count($data['prodi_input']);        
            $arr=[];
            $id_get=$data1->id;
            for($i=1;$i<=$cek;$i++){
                $list['id_mahasiswa']=$id_get;
                $list['prodi']=$data['prodi_input'][$i];
                $list['ts2a']=$data['ts2a_input'][$i];
                $list['ts1a']=$data['ts1a_input'][$i];
                $list['tsa']=$data['tsa_input'][$i];
                $list['ts2f']=$data['ts2f_input'][$i];
                $list['ts1f']=$data['ts1f_input'][$i];
                $list['tsf']=$data['tsf_input'][$i];
                $list['ts2p']=$data['ts2p_input'][$i];
                $list['ts1p']=$data['ts1p_input'][$i];
                $list['tsp']=$data['tsp_input'][$i];
                array_push($arr,$list);
            }
            ModelLKPSC2MhsA::insert($arr);
            // dd($arr);
        }
        //END ARRAY

        $C2=DB::table('lkps_mahasiswa')
                    ->leftJoin('users','lkps_mahasiswa.id_prodi','=','users.id_prodi')
                    ->select('lkps_mahasiswa.*')
                    ->where('users.id',Session::get('id'))
                    ->first();
        return redirect(url("c2lkps?id=".$C2->id_prodi."&upps=".$C2->id)); 
        // return redirect(url("cover?id=".$cover->id_prodi)); 
        // return redirect()->back()->with('alert-success','Data Penutup sudah tersimpan');
    }

    public function show($id)
    {   
        $dt_arr = ModelLKPSC2MhsA::where('id_cover',$id)->get();
        return view('LKPS_C2.index',compact('dt_arr'));
    }

    public function edit($id)
    {
        $lkps_c2 = ModelLKPSC2Mhs::find($id);
        $lkps_c2_A = ModelLKPSC2MhsA::all();
        $query = ModelLKPSC2MhsA::select('id')->where('id_cover', $id)->get();
        return view('LKPS_C2', compact('lkps_mahasiswa','lkps_mahasiswa_Asing')); 
    }

    public function update(Request $request)
    {
        $data['id']=$request->id;        
        $data['dt4']=$request->dt4;
        $data['cmp4']=$request->cmp4;
        $data['cmls4']=$request->cmls4;
        $data['mbr4']=$request->mbr4;
        $data['mbt4']=$request->mbt4;
        $data['mar4']=$request->mar4;
        $data['mat4']=$request->mat4;

        $data['dt3']=$request->dt3;
        $data['cmp3']=$request->cmp3;
        $data['cmls3']=$request->cmls3;
        $data['mbr3']=$request->mbr3;
        $data['mbt3']=$request->mbt3;
        $data['mar3']=$request->mar3;
        $data['mat3']=$request->mat3;
        
        $data['dt2']=$request->dt2;
        $data['cmp2']=$request->cmp2;
        $data['cmls2']=$request->cmls2;
        $data['mbr2']=$request->mbr2;
        $data['mbt2']=$request->mbt2;
        $data['mar2']=$request->mar2;
        $data['mat2']=$request->mat2;
        
        $data['dt1']=$request->dt1;
        $data['cmp1']=$request->cmp1;
        $data['cmls1']=$request->cmls1;
        $data['mbr1']=$request->mbr1;
        $data['mbt1']=$request->mbt1;
        $data['mar1']=$request->mar1;
        $data['mat1']=$request->mat1;

        $data['dt0']=$request->dt0;
        $data['cmp0']=$request->cmp0;
        $data['cmls0']=$request->cmls0;
        $data['mbr0']=$request->mbr0;
        $data['mbt0']=$request->mbt0;
        $data['nrts']=$request->nrst;
        $data['ntts']=$request->ntts;

        $cek=DB::table('lkps_mahasiswa')->where('id',$request->id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        }  
    }

    public function destroy($id) 
    {  

    $data = ModelLKPSC2Mhs::where('id',$id)->delete();
    
    if($data){
        // $data1 =DB::table('led_cover')->where('id_prodi',Session::get('id_prodi'))->first();
        DB::table('lkps_mahasiswa_Asing')
                    ->where('id_mahasiswa', $id)->delete();
    }

        //Redirect to Add
        return redirect(url('tambahc2lkps'))->with('success', 'Data Cover telah dihapus');
    }
}
