<?php

namespace App\Http\Controllers\LKPS;
use App\Http\Controllers\Controller;

use App\ModelLKPS\ModelLKPSC4;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LKPSC4 extends Controller
{
    public function index() 
    { 
        $data['lkps_c4'] = DB::table('lkps_keuangan')
                        ->get();
        $data['id_c4'] = $_GET['upps'];
        return view('LKPS_C4.index',$data);
    }

    public function tambah() 
    { 
        return view('LKPS_C4.add');
    }

    public function LKPSC4Post(Request $request)
    {
        $C4=DB::table('lkps_keuangan')
                    ->rightJoin('users','lkps_keuangan.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();
        
        $data1 = new ModelLKPSC4();  
        $data1->id_prodi = $request->id_prodi = $C4->id_prodi;
        $data1->TS2uppsbop = $request->TS2uppsbop;
        $data1->TS1uppsbop = $request->TS1uppsbop;
        $data1->TSuppsbop = $request->TSuppsbop;
        $data1->TS2psbop = $request->TS2psbop;
        $data1->TS1psbop = $request->TS1psbop;
        $data1->TSpsbop = $request->TSpsbop;

        $data1->TS2uppsbd = $request->TS2uppsbd;
        $data1->TS1uppsbd = $request->TS1uppsbd;
        $data1->TSuppsbd = $request->TSuppsbd;
        $data1->TS2psbd = $request->TS2psbd;
        $data1->TS1psbd = $request->TS1psbd;
        $data1->TSpsbd = $request->TSpsbd;

        $data1->TS2uppsbtk = $request->TS2uppsbtk;
        $data1->TS1uppsbtk = $request->TS1uppsbtk;
        $data1->TSuppsbtk = $request->TSuppsbtk;
        $data1->TS2psbtk = $request->TS2psbtk;
        $data1->TS1psbtk = $request->TS1psbtk;
        $data1->TSpsbtk = $request->TSpsbtk;

        $data1->TS2uppsbopm = $request->TS2uppsbopm;
        $data1->TS1uppsbopm = $request->TS1uppsbopm;
        $data1->TSuppsbopm = $request->TSuppsbopm;
        $data1->TS2psbopm = $request->TS2psbopm;
        $data1->TS1psbopm = $request->TS1psbopm;
        $data1->TSpsbopm = $request->TSpsbopm;

        $data1->TS2uppsbotl = $request->TS2uppsbotl;
        $data1->TS1uppsbotl = $request->TS1uppsbotl;
        $data1->TSuppsbotl = $request->TSuppsbotl;
        $data1->TS2psbotl = $request->TS2psbotl;
        $data1->TS1psbotl = $request->TS1psbotl;
        $data1->TSpsbotl = $request->TSpsbotl;

        $data1->TS2uppsbok = $request->TS2uppsbok;
        $data1->TS1uppsbok = $request->TS1uppsbok;
        $data1->TSuppsbok = $request->TSuppsbok;
        $data1->TS2psbok = $request->TS2psbok;
        $data1->TS1psbok = $request->TS1psbok;
        $data1->TSpsbok = $request->TSpsbok;

        $data1->TS2uppsbp = $request->TS2uppsbp;
        $data1->TS1uppsbp = $request->TS1uppsbp;
        $data1->TSuppsbp = $request->TSuppsbp;
        $data1->TS2psbp = $request->TS2psbp;
        $data1->TS1psbp = $request->TS1psbp;
        $data1->TSpsbp = $request->TSpsbp;
        
        $data1->TS2uppsbpkm = $request->TS2uppsbpkm;
        $data1->TS1uppsbpkm = $request->TS1uppsbpkm;
        $data1->TSuppsbpkm = $request->TSuppsbpkm;
        $data1->TS2psbpkm = $request->TS2psbpkm;
        $data1->TS1psbpkm = $request->TS1psbpkm;
        $data1->TSpsbpkm = $request->TSpsbpkm;

        $data1->TS2uppsbsdm = $request->TS2uppsbsdm;
        $data1->TS1uppsbsdm = $request->TS1uppsbsdm;
        $data1->TSuppsbsdm = $request->TSuppsbsdm;
        $data1->TS2psbsdm = $request->TS2psbsdm;
        $data1->TS1psbsdm = $request->TS1psbsdm;
        $data1->TSpsbsdm = $request->TSpsbsdm;

        $data1->TS2uppsbsrn = $request->TS2uppsbsrn;
        $data1->TS1uppsbsrn = $request->TS1uppsbsrn;
        $data1->TSuppsbsrn = $request->TSuppsbsrn;
        $data1->TS2psbsrn = $request->TS2psbsrn;
        $data1->TS1psbsrn = $request->TS1psbsrn;
        $data1->TSpsbsrn = $request->TSpsbsrn;

        $data1->TS2uppsbpsrn = $request->TS2uppsbpsrn;
        $data1->TS1uppsbpsrn = $request->TS1uppsbpsrn;
        $data1->TSuppsbpsrn = $request->TSuppsbpsrn;
        $data1->TS2psbpsrn = $request->TS2psbpsrn;
        $data1->TS1psbpsrn = $request->TS1psbpsrn;
        $data1->TSpsbpsrn = $request->TSpsbpsrn;
        
        $data1->save();

        $C4=DB::table('lkps_keuangan')
                    ->rightJoin('users','lkps_keuangan.id_prodi','=','users.id_prodi')
                    ->select('lkps_keuangan.*')
                    ->where('users.id',Session::get('id'))
                    ->first();
        return redirect(url("c4lkps?id=".$C4->id_prodi."&upps=".$C4->id)); 
    }

    public function show($id)
    {   
        $test = ModelLKPSC4::findOrFail($id);
        return view('LKPS_C4.index', compact('test'));
    }

    public function edit($id)
    {
        $lkps_c4 = ModelLKPSC4::find($id);
        return view('LKPS_C4', compact('lkps_c4')); 
    }

    public function update(Request $request)
    {
        // dd($request->TS2uppsbop);
        $data['id']=$request->id;        
        $data['TS2uppsbop']=$request->TS2uppsbop;
        $data['TS1uppsbop']=$request->TS1uppsbop;
        $data['TSuppsbop']=$request->TSuppsbop;
        $data['TS2psbop']=$request->TS2psbop;
        $data['TS1psbop']=$request->TS1psbop;
        $data['TSpsbop']=$request->TSpsbop;

        $data['TS2uppsbd']=$request->TS2uppsbd;
        $data['TS1uppsbd']=$request->TS1uppsbd;
        $data['TSuppsbd']=$request->TSuppsbd;
        $data['TS2psbd']=$request->TS2psbd;
        $data['TS1psbd']=$request->TS1psbd;
        $data['TSpsbd']=$request->TSpsbd;

        $data['TS2uppsbtk']=$request->TS2uppsbtk;
        $data['TS1uppsbtk']=$request->TS1uppsbtk;
        $data['TSuppsbtk']=$request->TSuppsbtk;
        $data['TS2psbtk']=$request->TS2psbtk;
        $data['TS1psbtk']=$request->TS1psbtk;
        $data['TSpsbtk']=$request->TSpsbtk;

        $data['TS2uppsbopm']=$request->TS2uppsbopm;
        $data['TS1uppsbopm']=$request->TS1uppsbopm;
        $data['TSuppsbopm']=$request->TSuppsbopm;
        $data['TS2psbopm']=$request->TS2psbopm;
        $data['TS1psbopm']=$request->TS1psbopm;
        $data['TSpsbopm']=$request->TSpsbopm;

        $data['TS2uppsbotl']=$request->TS2uppsbotl;
        $data['TS1uppsbotl']=$request->TS1uppsbotl;
        $data['TSuppsbotl']=$request->TSuppsbotl;
        $data['TS2psbotl']=$request->TS2psbotl;
        $data['TS1psbotl']=$request->TS1psbotl;
        $data['TSpsbotl']=$request->TSpsbotl;

        $data['TS2uppsbok']=$request->TS2uppsbok;
        $data['TS1uppsbok']=$request->TS1uppsbok;
        $data['TSuppsbok']=$request->TSuppsbok;
        $data['TS2psbok']=$request->TS2psbok;
        $data['TS1psbok']=$request->TS1psbok;
        $data['TSpsbok']=$request->TSpsbok;

        $data['TS2uppsbp']=$request->TS2uppsbp;
        $data['TS1uppsbp']=$request->TS1uppsbp;
        $data['TSuppsbp']=$request->TSuppsbp;
        $data['TS2psbp']=$request->TS2psbp;
        $data['TS1psbp']=$request->TS1psbp;
        $data['TSpsbp']=$request->TSpsbp;

        $data['TS2uppsbpkm']=$request->TS2uppsbpkm;
        $data['TS1uppsbpkm']=$request->TS1uppsbpkm;
        $data['TSuppsbpkm']=$request->TSuppsbpkm;
        $data['TS2psbpkm']=$request->TS2psbpkm;
        $data['TS1psbpkm']=$request->TS1psbpkm;
        $data['TSpsbpkm']=$request->TSpsbpkm;

        $data['TS2uppsbsdm']=$request->TS2uppsbsdm;
        $data['TS1uppsbsdm']=$request->TS1uppsbsdm;
        $data['TSuppsbsdm']=$request->TSuppsbsdm;
        $data['TS2psbsdm']=$request->TS2psbsdm;
        $data['TS1psbsdm']=$request->TS1psbsdm;
        $data['TSpsbsdm']=$request->TSpsbsdm;

        $data['TS2uppsbsrn']=$request->TS2uppsbsrn;
        $data['TS1uppsbsrn']=$request->TS1uppsbsrn;
        $data['TSuppsbsrn']=$request->TSuppsbsrn;
        $data['TS2psbsrn']=$request->TS2psbsrn;
        $data['TS1psbsrn']=$request->TS1psbsrn;
        $data['TSpsbsrn']=$request->TSpsbsrn;

        $data['TS2uppsbpsrn']=$request->TS2uppsbpsrn;
        $data['TS1uppsbpsrn']=$request->TS1uppsbpsrn;
        $data['TSuppsbpsrn']=$request->TSuppsbpsrn;
        $data['TS2psbpsrn']=$request->TS2psbpsrn;
        $data['TS1psbpsrn']=$request->TS1psbpsrn;
        $data['TSpsbpsrn']=$request->TSpsbpsrn;


        $cek=DB::table('lkps_keuangan')->where('id',$request->id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        }  
    }

    public function destroy($id) 
    {  
        ModelLKPSC4::where('id',$id)->delete();

        //Redirect to Add
        return redirect(url('tambahc4lkps'))->with('success', 'Data Cover telah dihapus');
    }
}
