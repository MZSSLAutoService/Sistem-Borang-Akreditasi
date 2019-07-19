<?php

namespace App\Http\Controllers\LED;
use App\Http\Controllers\Controller;

use App\ModelLED\ModelLEDC5;
use App\ModelLED\ModelKomentar;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LEDC5 extends Controller
{
    public function index() 
    { 
        $data['led_c5'] = DB::table('led_c5')
            ->get();
        $data['id_c5'] = $_GET['upps'];
        return view('LED_Kriteria.C5.index',$data);
        // return view('standar');
    }
    
    public function tambah() 
    { 
        return view('LED_Kriteria.C5.add');
    }

    public function LEDC5Post(Request $request)
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
            'pm_keupras' => 'required',
            'kpg' => 'required',
            'simpulan' => 'required',

        ]);
        $C5=DB::table('led_c5')
                    ->rightJoin('users','led_c5.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();
        $data = new ModelLEDC5();  
        $data->id_prodi = $request->id_prodi = $C5->id_prodi;
        $data->description = $request->desc;
        $data->kebijakan = $request->kebijakan;
        $data->stp_standar = $request->strategi;
        $data->iku1 = $request->iku1;
        $data->iku2 = $request->iku2;
        $data->iku3 = $request->iku3;
        $data->ikt = $request->ikt;
        $data->eval = $request->eval;
        $data->pm_keupras = $request->pm_keupras;
        $data->kpg = $request->kpg;
        $data->simpulan = $request->simpulan;
        // dd($data);
        $data->save();

        //Redirect to Show
        $C5=DB::table('led_c5')
                    ->join('users','led_c5.id_prodi','=','users.id_prodi')
                    ->select('led_c5.*')
                    ->where('users.id',Session::get('id'))
                    ->first();
        return redirect(url("c5?id=".$C5->id_prodi)); 
        // return redirect()->back()->with('alert-success','Data Penutup sudah tersimpan');
    }

    public function store(Request $request)
    {
        $data1 = new ModelKomentar();
        
        $data1->id_c5 = $request->id_c5;
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
        $test = ModelLEDC5::findOrFail($id);
        return view('LED_Kriteria.C5.show', compact('test'));
    }

    public function edit($id)
    {
        $led_c5 = ModelLEDC5::find($id);
        return view('c5', compact('led_c5')); 
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
        $data['pm_keupras']=$request->pm_keupras;
        $data['kpg']=$request->kpg;
        $data['simpulan']=$request->simpulan;
        $cek=DB::table('led_c5')->where('id',$request->id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        } 
    }

    public function destroy($id) 
    { 
        $data = ModelLEDC5::where('id', $id);
        // dd($data); 
        $data->delete();
        
        
        //Redirect to Add
        // return redirect()->back()->with('success', 'Data Standar telah dihapus');
        return redirect(url('tambahc5'))->with('success', 'Data Standar telah dihapus');
    }
}
