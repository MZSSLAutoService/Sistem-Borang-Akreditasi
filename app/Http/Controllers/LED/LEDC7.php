<?php

namespace App\Http\Controllers\LED;
use App\Http\Controllers\Controller;

use App\ModelLED\ModelLEDC7;
use App\ModelLED\ModelKomentar;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LEDC7 extends Controller
{
    public function index() 
    { 
        $data['led_c7'] = DB::table('led_c7')
            ->get();
        $data['id_c7'] = $_GET['upps'];
        return view('LED_Kriteria.C7.index',$data);
        // return view('standar');
    }
    
    public function tambah() 
    { 
        return view('LED_Kriteria.C7.add');
    }

    public function LEDC7Post(Request $request)
    {
        $this->validate($request, [
            'desc' => 'required',
            'kebijakan' => 'required',
            'strategi' => 'required',
            'iku' => 'required',
            'ikt' => 'required',
            'eval' => 'required',
            'pmpl' => 'required',
            'kpg' => 'required',
            'simpulan' => 'required',

        ]);
        $C7=DB::table('led_c7')
                    ->rightJoin('users','led_c7.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();
        $data = new ModelLEDC7();  
        $data->id_prodi = $request->id_prodi = $C7->id_prodi;
        $data->description = $request->desc;
        $data->kebijakan = $request->kebijakan;
        $data->stp_standar = $request->strategi;
        $data->iku = $request->iku;
        $data->ikt = $request->ikt;
        $data->eval = $request->eval;
        $data->pmpl = $request->pmpl;
        $data->kpg = $request->kpg;
        $data->simpulan = $request->simpulan;
        // dd($data);
        $data->save();

        //Redirect to Show
        $C7=DB::table('led_c7')
                    ->join('users','led_c7.id_prodi','=','users.id_prodi')
                    ->select('led_c7.*')
                    ->where('users.id',Session::get('id'))
                    ->first();
        return redirect(url("c7?id=".$C7->id_prodi)); 
        // return redirect()->back()->with('alert-success','Data Penutup sudah tersimpan');
    }

    public function store(Request $request)
    {
        $data1 = new ModelKomentar();
        
        $data1->id_c7 = $request->id_c7;
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
        $test = ModelLEDC7::findOrFail($id);
        return view('LED_Kriteria.C7.show', compact('test'));
    }

    public function edit($id)
    {
        $led_c7 = ModelLEDC7::find($id);
        return view('c7', compact('led_c7')); 
    }

    public function update(Request $request)
    {
        // dd($request);
        $data['id']=$request->id;        
        $data['description']=$request->desc;
        $data['kebijakan']=$request->kebijakan;
        $data['stp_standar']=$request->strategi;
        $data['iku']=$request->iku;
        $data['ikt']=$request->ikt;
        $data['eval']=$request->eval;
        $data['pmpl']=$request->pmpl;
        $data['kpg']=$request->kpg;
        $data['simpulan']=$request->simpulan;
        $cek=DB::table('led_c7')->where('id',$request->id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        } 
    }

    public function destroy($id) 
    { 
        $data = ModelLEDC7::where('id', $id);
        // dd($data); 
        $data->delete();
        
        
        //Redirect to Add
        // return redirect()->back()->with('success', 'Data Standar telah dihapus');
        return redirect(url('tambahc7'))->with('success', 'Data Standar telah dihapus');
    }
}
