<?php

namespace App\Http\Controllers\LED;
use App\Http\Controllers\Controller;

use App\ModelLED\ModelLEDC3;
use App\ModelLED\ModelKomentar;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LEDC3 extends Controller
{
    public function index() 
    { 
        $data['led_c3'] = DB::table('led_c3')
            ->get();
        $data['id_c3'] = $_GET['upps'];
        return view('LED_Kriteria.C3.index',$data);
        // return view('standar');
    }
    
    public function tambah() 
    { 
        return view('LED_Kriteria.C3.add');
    }

    public function LEDC3Post(Request $request)
    {
        $this->validate($request, [
            'desc' => 'required',
            'kebijakan' => 'required',
            'strategi' => 'required',
            'iku1' => 'required',
            'iku2' => 'required',
            'iku3' => 'required',
            'ikt' => 'required',
            'eval' => 'required',
            'pmm' => 'required',
            'kpg' => 'required',
            'simpulan' => 'required',

        ]);
        $C3=DB::table('led_c3')
                    ->rightJoin('users','led_c3.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();
        $data = new ModelLEDC3();  
        $data->id_prodi = $request->id_prodi = $C3->id_prodi;
        $data->description = $request->desc;
        $data->kebijakan = $request->kebijakan;
        $data->stp_standar = $request->strategi;
        $data->iku1 = $request->iku1;
        $data->iku2 = $request->iku2;
        $data->iku3 = $request->iku3;
        $data->ikt = $request->ikt;
        $data->eval = $request->eval;
        $data->pmm = $request->pmm;
        $data->kpg = $request->kpg;
        $data->simpulan = $request->simpulan;
        // dd($data);
        $data->save();

        //Redirect to Show
        $C3=DB::table('led_c3')
                    ->join('users','led_c3.id_prodi','=','users.id_prodi')
                    ->select('led_c3.*')
                    ->where('users.id',Session::get('id'))
                    ->first();
        return redirect(url("c3?id=".$C3->id_prodi)); 
        // return redirect()->back()->with('alert-success','Data Penutup sudah tersimpan');
    }

    public function store(Request $request)
    {
        $data1 = new ModelKomentar();
        
        $data1->id_c3 = $request->id_c3;
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
        $test = ModelLEDC3::findOrFail($id);
        return view('LED_Kriteria.C3.show', compact('test'));
    }

    public function edit($id)
    {
        $led_c3 = ModelLEDC3::find($id);
        return view('c3', compact('led_c3')); 
    }

    public function update(Request $request)
    {
        // dd($request);
        $data['id']=$request->id;        
        $data['description']=$request->desc;
        $data['kebijakan']=$request->kebijakan;
        $data['stp_standar']=$request->strategi;
        $data['iku1']=$request->iku1;
        $data['iku2']=$request->iku2;
        $data['iku3']=$request->iku3;
        $data['ikt']=$request->ikt;
        $data['eval']=$request->eval;
        $data['pmm']=$request->pmm;
        $data['kpg']=$request->kpg;
        $data['simpulan']=$request->simpulan;
        $cek=DB::table('led_c3')->where('id',$request->id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        } 
    }

    public function destroy($id) 
    { 
        $data = ModelLEDC3::where('id', $id);
        // dd($data); 
        $data->delete();
        
        
        //Redirect to Add
        // return redirect()->back()->with('success', 'Data Standar telah dihapus');
        return redirect(url('tambahc3'))->with('success', 'Data Standar telah dihapus');
    }
}
