<?php

namespace App\Http\Controllers\LED;
use App\Http\Controllers\Controller;

use App\ModelLED\ModelLEDPendahuluan;
use App\ModelLED\ModelKomentar;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LEDPendahuluan extends Controller
{
    public function index() 
    { 
        // dd($_GET['upps']);
        $data['led_pendahuluan'] = DB::table('led_pendahuluan')
            ->get();
        $data['id_pendahuluan'] = $_GET['upps'];
        return view('LED_Pendahuluan.index',$data);
        // return view('standar');
    }

    public function tambah() 
    { 
        return view('LED_Pendahuluan.add');
    }

    public function LEDPendahuluanPost(Request $request)
    {
        $this->validate($request, [
            'desc' => 'required',
            'dp' => 'required',
            'tim' => 'required',
            'mkp' => 'required',

        ]);
        $pendahuluan=DB::table('led_pendahuluan')
                    ->rightJoin('users','led_pendahuluan.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();
        $data = new ModelLEDPendahuluan();  
        $data->id_prodi = $request->id_prodi = $pendahuluan->id_prodi;
        $data->description = $request->desc;
        $data->dasar_penyusunan = $request->dp;
        $data->tim_penyusun = $request->tim;
        $data->mekanisme = $request->mkp;

        // dd($data);
        $data->save();

        //Redirect to Show
        $pendahuluan=DB::table('led_pendahuluan')
                    ->join('users','led_pendahuluan.id_prodi','=','users.id_prodi')
                    ->select('led_pendahuluan.*')
                    ->where('users.id',Session::get('id'))
                    ->first();
        return redirect(url("pendahuluan?id=".$pendahuluan->id_prodi."&upps=".$pendahuluan->id)); 
        // return redirect()->back()->with('alert-success','Data Penutup sudah tersimpan');
    }

    public function store(Request $request)
    {
        $data1 = new ModelKomentar();
        
        $data1->id_pendahuluan = $request->id_pendahuluan;
        $data1->ket = $request->komentar;
        $data1->save();
        if($data1){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        } 
    }

    public function show($id)
    {
        $test = ModelLEDPendahuluan::findOrFail($id);
        return view('LED_Pendahuluan.show', compact('test'));
    }

    public function edit($id)
    {
        $led_pendahuluan = ModelLEDPendahuluan::find($id);
        return view('pendahuluan', compact('led_pendahuluan')); 
    }

    public function update(Request $request)
    {
        $data['id']=$request->id;        
        $data['description']=$request->desc;
        $data['dasar_penyusunan']=$request->dp;
        $data['tim_penyusun']=$request->tim;
        $data['mekanisme']=$request->mkp;

        $cek=DB::table('led_pendahuluan')->where('id',$request->id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        } 
    }

    public function destroy($id) 
    { 
        $data = ModelLEDPendahuluan::where('id', $id);
        // dd($data); 
        $data->delete();
        
        
        //Redirect to Add
        // return redirect()->back()->with('success', 'Data Standar telah dihapus');
        return redirect(url('tambahpendahuluan'))->with('success', 'Data Standar telah dihapus');
    }
}
