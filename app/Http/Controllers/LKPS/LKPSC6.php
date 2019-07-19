<?php

namespace App\Http\Controllers\LKPS;
use App\Http\Controllers\Controller;

use App\ModelLKPS\ModelLKPSC6;
use App\ModelLKPS\ModelLKPSC6dptsmhs;
use App\ModelLKPS\ModelLKPSC6dptstema;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LKPSC6 extends Controller
{
    public function index() 
    { 
        $data['lkps_c6'] = DB::table('lkps_penelitian')
                        ->get();
        $data['lkpsC61'] = DB::table('lkps_penelitiandptsmhs')
                        ->join('lkps_penelitian', 'lkps_penelitiandptsmhs.id_penelitian', '=', 'lkps_penelitian.id')
                        ->select( 'lkps_penelitiandptsmhs.*')
                        ->where('id_penelitian',$_GET['upps'])
                        ->get();
        $data['lkpsC62'] = DB::table('lkps_penelitiandptstema')
                        ->join('lkps_penelitian', 'lkps_penelitiandptstema.id_penelitian', '=', 'lkps_penelitian.id')
                        ->select( 'lkps_penelitiandptstema.*')
                        ->where('id_penelitian',$_GET['upps'])
                        ->get();
        $data['id_c6'] = $_GET['upps'];
        return view('LKPS_C6.index',$data);
    }

    public function tambah() 
    { 
        return view('LKPS_C6.add');
    }

    public function LKPSC6Post(Request $request)
    {
        $C6=DB::table('lkps_penelitian')
                    ->rightJoin('users','lkps_penelitian.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();

                    // dd($C6->id_prodi);
        
        // dd($request->all());
        $data1 = new ModelLKPSC6();  
        $data1->id_prodi = $request->id_prodi = $C6->id_prodi;

        //ARRAY
        if($data1->save()){
            $id_get=$data1->id;
            foreach($request->dosen_input1 as $key => $v){
                $data = array('id_penelitian'=>$id_get,
                                'nama_dosen'=>$request->dosen_input1 [$key],
                                'tema'=>$request->tema_input1 [$key],
                                'nama_mhs'=>$request->mhs_input1 [$key],
                                'judul'=>$request->judul_input1 [$key],
                                'tahun'=>$request->th_input1 [$key]);
                $cek = ModelLKPSC6dptsmhs::insert($data);
            }
        }

        if($cek){
            $id_get=$data1->id;
            foreach($request->dosen_input as $key => $v){
                $data1 = array('id_penelitian'=>$id_get,
                                'nama_dosen'=>$request->dosen_input [$key],
                                'tema'=>$request->tema_input [$key],
                                'nama_mhs'=>$request->mhs_input [$key],
                                'judul'=>$request->judul_input [$key],
                                'tahun'=>$request->th_input [$key]);
                ModelLKPSC6dptstema::insert($data1);
            }
        }


            $C6=DB::table('lkps_penelitian')
                    ->leftJoin('users','lkps_penelitian.id_prodi','=','users.id_prodi')
                    ->select('lkps_penelitian.*')
                    ->where('users.id',Session::get('id'))
                    ->first();
        return redirect(url("c6lkps?id=".$C6->id_prodi."&upps=".$C6->id)); 
    }

    public function destroy($id) 
    {  

    $data = ModelLKPSC6::where('id',$id)->delete();
    
    if($data){
        ModelLKPSC6dptsmhs::where('id_penelitian', $id)->delete();
        ModelLKPSC6dptstema::where('id_penelitian', $id)->delete();
    }
        //Redirect to Add
        return redirect(url('tambahc6lkps'))->with('success', 'Data Cover telah dihapus');
    }
}
