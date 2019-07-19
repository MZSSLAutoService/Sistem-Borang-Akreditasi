<?php

namespace App\Http\Controllers\LED;
use App\Http\Controllers\Controller;

use App\ModelLED\ModelLEDC2;
use App\ModelLED\ModelKomentar;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LEDC2 extends Controller
{
    public function index() 
    { 
        $data['led_c2'] = DB::table('led_c2')
            ->get();
        $data['id_c2'] = $_GET['upps'];
        return view('LED_Kriteria.C2.index',$data);
        // return view('standar');
    }
    
    public function tambah() 
    { 
        return view('LED_Kriteria.C2.add');
    }

    public function LEDC2Post(Request $request)
    {
        $this->validate($request, [
            'desc' => 'required',
            'kebijakan' => 'required',
            'strategi' => 'required',
            'iku1' => 'required',
            'iku2' => 'required',
            'iku3' => 'required',
            'iku4' => 'required',
            'ikt' => 'required',
            'eval' => 'required',
            'pmtp' => 'required',
            'kpg' => 'required',
            'simpulan' => 'required',

        ]);
        $C2=DB::table('led_c2')
                    ->rightJoin('users','led_c2.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();
        $data = new ModelLEDC2();  
        $data->id_prodi = $request->id_prodi = $C2->id_prodi;
        $data->description = $request->desc;
        $data->kebijakan = $request->kebijakan;
        $data->stp_vmts = $request->strategi;
        $data->iku1 = $request->iku1;
        $data->iku2 = $request->iku2;
        $data->iku3 = $request->iku3;
        $data->iku4 = $request->iku4;
        $data->ikt = $request->ikt;
        $data->eval = $request->eval;
        $data->pmtp = $request->pmtp;
        $data->kpg = $request->kpg;
        $data->simpulan = $request->simpulan;
        // dd($data);
        $data->save();

        //Redirect to Show
        $C2=DB::table('led_c2')
                    ->join('users','led_c2.id_prodi','=','users.id_prodi')
                    ->select('led_c2.*')
                    ->where('users.id',Session::get('id'))
                    ->first();
        return redirect(url("c2?id=".$C2->id_prodi)); 
        // return redirect()->back()->with('alert-success','Data Penutup sudah tersimpan');
    }

    public function store(Request $request)
    {
        $data1 = new ModelKomentar();
        
        $data1->id_c2 = $request->id_c2;
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
        $test = ModelLEDC2::findOrFail($id);
        return view('LED_Kriteria.C2.show', compact('test'));
    }

    public function edit($id)
    {
        $led_c2 = ModelLEDC2::find($id);
        return view('c2', compact('led_c2')); 
    }

    public function update(Request $request)
    {
        // dd($request);
        $data['id']=$request->id;        
        $data['description']=$request->desc;
        $data['kebijakan']=$request->kebijakan;
        $data['stp_vmts']=$request->strategi;
        $data['iku1']=$request->iku1;
        $data['iku2']=$request->iku2;
        $data['iku3']=$request->iku3;
        $data['iku4']=$request->iku4;
        $data['ikt']=$request->ikt;
        $data['eval']=$request->eval;
        $data['pmtp']=$request->pmtp;
        $data['kpg']=$request->kpg;
        $data['simpulan']=$request->simpulan;
        $cek=DB::table('led_c2')->where('id',$request->id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        } 
    }

    public function destroy($id) 
    { 
        $data = ModelLEDC2::where('id', $id);
        // dd($data); 
        $data->delete();
        
        
        //Redirect to Add
        // return redirect()->back()->with('success', 'Data Standar telah dihapus');
        return redirect(url('tambahc2'))->with('success', 'Data Standar telah dihapus');
    }
}
