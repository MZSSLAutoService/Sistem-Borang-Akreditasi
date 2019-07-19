<?php

namespace App\Http\Controllers\LED;
use App\Http\Controllers\Controller;

use App\ModelLED\ModelLEDC6;
use App\ModelLED\ModelKomentar;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LEDC6 extends Controller
{
    public function index() 
    { 
        $data['led_c6'] = DB::table('led_c6')
            ->get();
        $data['id_c6'] = $_GET['upps'];
        return view('LED_Kriteria.C6.index',$data);
        // return view('standar');
    }
    
    public function tambah() 
    { 
        return view('LED_Kriteria.C6.add');
    }

    public function LEDC6Post(Request $request)
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
            'pmp' => 'required',
            'kpg' => 'required',
            'simpulan' => 'required',

        ]);
        $C6=DB::table('led_c6')
                    ->rightJoin('users','led_c6.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();
        $data = new ModelLEDC6();  
        $data->id_prodi = $request->id_prodi = $C6->id_prodi;
        $data->description = $request->desc;
        $data->kebijakan = $request->kebijakan;
        $data->stp_standar = $request->strategi;
        $data->iku1 = $request->iku1;
        $data->iku2 = $request->iku2;
        $data->iku3 = $request->iku3;
        $data->ikt = $request->ikt;
        $data->eval = $request->eval;
        $data->pmp = $request->pmp;
        $data->kpg = $request->kpg;
        $data->simpulan = $request->simpulan;
        // dd($data);
        $data->save();

        //Redirect to Show
        $C6=DB::table('led_c6')
                    ->join('users','led_c6.id_prodi','=','users.id_prodi')
                    ->select('led_c6.*')
                    ->where('users.id',Session::get('id'))
                    ->first();
        return redirect(url("c6?id=".$C6->id_prodi)); 
        // return redirect()->back()->with('alert-success','Data Penutup sudah tersimpan');
    }

    public function store(Request $request)
    {
        $data1 = new ModelKomentar();
        
        $data1->id_c6 = $request->id_c6;
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
        $test = ModelLEDC6::findOrFail($id);
        return view('LED_Kriteria.C6.show', compact('test'));
    }

    public function edit($id)
    {
        $led_c6 = ModelLEDC6::find($id);
        return view('c6', compact('led_c6')); 
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
        $data['pmp']=$request->pmp;
        $data['kpg']=$request->kpg;
        $data['simpulan']=$request->simpulan;
        $cek=DB::table('led_c6')->where('id',$request->id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        } 
    }

    public function destroy($id) 
    { 
        $data = ModelLEDC6::where('id', $id);
        // dd($data); 
        $data->delete();
        
        
        //Redirect to Add
        // return redirect()->back()->with('success', 'Data Standar telah dihapus');
        return redirect(url('tambahc6'))->with('success', 'Data Standar telah dihapus');
    }
}
