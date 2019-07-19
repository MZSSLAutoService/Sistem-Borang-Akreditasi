<?php

namespace App\Http\Controllers\LKPS;
use App\Http\Controllers\Controller;

use App\ModelLKPS\ModelLKPSC5;
use App\ModelLKPS\ModelLKPSC5KegPen;
use App\ModelLKPS\ModelLKPSC5KepMhs;
use App\ModelLKPS\ModelLKPSC5Kur;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LKPSC5 extends Controller
{
    public function index() 
    { 
        $data['lkps_c5'] = DB::table('lkps_pendidikan')
                        ->get();
        $data['lkpsC51'] = DB::table('lkps_kurikulum')
                        ->join('lkps_pendidikan', 'lkps_kurikulum.id_pendidikan', '=', 'lkps_pendidikan.id')
                        ->select( 'lkps_kurikulum.*')
                        ->where('id_pendidikan',$_GET['upps'])
                        ->get();
        $data['lkpsC52'] = DB::table('lkps_kegiatanpenelitian')
                        ->join('lkps_pendidikan', 'lkps_kegiatanpenelitian.id_pendidikan', '=', 'lkps_pendidikan.id')
                        ->select( 'lkps_kegiatanpenelitian.*')
                        ->where('id_pendidikan',$_GET['upps'])
                        ->get();
        $data['lkpsC53'] = DB::table('lkps_kepuasanmhs')
                        ->join('lkps_pendidikan', 'lkps_kepuasanmhs.id_pendidikan', '=', 'lkps_pendidikan.id')
                        ->select( 'lkps_kepuasanmhs.*')
                        ->where('id_pendidikan',$_GET['upps'])
                        ->get();
        $data['id_c5'] = $_GET['upps'];
        return view('LKPS_C5.index',$data);
    }

    public function tambah() 
    { 
        return view('LKPS_C5.add');
    }

    public function LKPSC5Post(Request $request)
    {
        $C5=DB::table('lkps_pendidikan')
                    ->rightJoin('users','lkps_pendidikan.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();
        
        $data1 = new ModelLKPSC5();  
        $data1->id_prodi = $request->id_prodi = $C5->id_prodi;
        
        if($data1->save()){
        $data2 = new ModelLKPSC5KepMhs();
        $id_get=$data1->id;
        $data2->id_pendidikan = $id_get;
        $data2->Aspk1_sb = $request->Aspk1_sb;
        $data2->Aspk1_b = $request->Aspk1_b;
        $data2->Aspk1_c = $request->Aspk1_c;
        $data2->Aspk1_k = $request->Aspk1_k;
        $data2->Aspk1_rencana = $request->Aspk1_rencana;

        $data2->Aspk2_sb = $request->Aspk2_sb;
        $data2->Aspk2_b = $request->Aspk2_b;
        $data2->Aspk2_c = $request->Aspk2_c;
        $data2->Aspk2_k = $request->Aspk2_k;
        $data2->Aspk2_rencana = $request->Aspk2_rencana;

        $data2->Aspk3_sb = $request->Aspk3_sb;
        $data2->Aspk3_b = $request->Aspk3_b;
        $data2->Aspk3_c = $request->Aspk3_c;
        $data2->Aspk3_k = $request->Aspk3_k;
        $data2->Aspk3_rencana = $request->Aspk3_rencana;

        $data2->Aspk4_sb = $request->Aspk4_sb;
        $data2->Aspk4_b = $request->Aspk4_b;
        $data2->Aspk4_c = $request->Aspk4_c;
        $data2->Aspk4_k = $request->Aspk4_k;
        $data2->Aspk4_rencana = $request->Aspk4_rencana;

        $data2->Aspk5_sb = $request->Aspk5_sb;
        $data2->Aspk5_b = $request->Aspk5_b;
        $data2->Aspk5_c = $request->Aspk5_c;
        $data2->Aspk5_k = $request->Aspk5_k;
        $data2->Aspk5_rencana = $request->Aspk5_rencana;
        
        }

        if($data2->save()){
            $id_get=$data1->id;
            foreach($request->SM_input as $key => $v){
                $data = array('id_pendidikan'=>$id_get,
                                'smstr'=>$request->SM_input [$key],
                                'kode_matkul'=>$request->KMK_input [$key],
                                'nama_matkul'=>$request->NMK_input [$key],
                                'sks_matkul'=>$request->KRT_input [$key],
                                'sks_seminar'=>$request->SEM_input [$key],
                                'sks_lap'=>$request->PPPL_input [$key],
                                'kredit_jam'=>$request->KKJ_input [$key],
                                'sikap'=>$request->SIK_input [$key],
                                'pengetahuan'=>$request->PEN_input [$key],
                                'ktmp_umum'=>$request->KET_input [$key],
                                'ktmp_khusus'=>$request->KETK_input [$key],
                                'dok'=>$request->UP_input [$key],
                                'unit'=>$request->SEM_input [$key]);
                $cek = ModelLKPSC5Kur::insert($data);
            }
        }

        if($cek){
            $id_get=$data1->id;
            foreach($request->JP_input as $key => $v){
                $data1 = array('id_pendidikan'=>$id_get,
                                'judul_penelitian'=>$request->JP_input [$key],
                                'nama_dosen'=>$request->ND_input [$key],
                                'mata_kuliah'=>$request->MK_input [$key],
                                'integrasi'=>$request->BI_input [$key]);
                ModelLKPSC5KegPen::insert($data1);
            }
        }
        
        $C5=DB::table('lkps_pendidikan')
                ->leftJoin('users','lkps_pendidikan.id_prodi','=','users.id_prodi')
                ->select('lkps_pendidikan.*')
                ->where('users.id',Session::get('id'))
                ->first();
        return redirect(url("c5lkps?id=".$C5->id_prodi."&upps=".$C5->id)); 
    }

    public function update(Request $request)
    {
        $data['id']=$request->id;        
        $data['Aspk1_sb']=$request->Aspk1_sb;
        $data['Aspk1_b']=$request->Aspk1_b;
        $data['Aspk1_c']=$request->Aspk1_c;
        $data['Aspk1_k']=$request->Aspk1_k;
        $data['Aspk1_rencana']=$request->Aspk1_rencana;
        
        $data['Aspk2_sb']=$request->Aspk2_sb;
        $data['Aspk2_b']=$request->Aspk2_b;
        $data['Aspk2_c']=$request->Aspk2_c;
        $data['Aspk2_k']=$request->Aspk2_k;
        $data['Aspk2_rencana']=$request->Aspk2_rencana;

        $data['Aspk3_sb']=$request->Aspk3_sb;
        $data['Aspk3_b']=$request->Aspk3_b;
        $data['Aspk3_c']=$request->Aspk3_c;
        $data['Aspk3_k']=$request->Aspk3_k;
        $data['Aspk3_rencana']=$request->Aspk3_rencana;

        $data['Aspk4_sb']=$request->Aspk4_sb;
        $data['Aspk4_b']=$request->Aspk4_b;
        $data['Aspk4_c']=$request->Aspk4_c;
        $data['Aspk4_k']=$request->Aspk4_k;
        $data['Aspk4_rencana']=$request->Aspk4_rencana;

        $data['Aspk5_sb']=$request->Aspk5_sb;
        $data['Aspk5_b']=$request->Aspk5_b;
        $data['Aspk5_c']=$request->Aspk5_c;
        $data['Aspk5_k']=$request->Aspk5_k;
        $data['Aspk5_rencana']=$request->Aspk5_rencana;
        
        $cek=ModelLKPSC5KepMhs::where('id',$request->id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        }  
    }

    public function destroy($id) 
    {  

    $data = ModelLKPSC5::where('id',$id)->delete();
    
    if($data){
        ModelLKPSC5Kur::where('id_pendidikan', $id)->delete();
        ModelLKPSC5KegPen::where('id_pendidikan', $id)->delete();
        ModelLKPSC5KepMhs::where('id_pendidikan', $id)->delete();
    }
        //Redirect to Add
        return redirect(url('tambahc5lkps'))->with('success', 'Data Cover telah dihapus');
    }
}
