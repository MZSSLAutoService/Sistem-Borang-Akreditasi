<?php

namespace App\Http\Controllers\LED;
use App\Http\Controllers\Controller;

use App\ModelLED\ModelLEDC4;
use App\ModelLED\ModelKomentar;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LEDC4 extends Controller
{
    public function index() 
    { 
        $data['led_c4'] = DB::table('led_c4')
            ->get();
        $data['id_c4'] = $_GET['upps'];
        return view('LED_Kriteria.C4.index',$data);
        // return view('standar');
    }
    
    public function tambah() 
    { 
        return view('LED_Kriteria.C4.add');
    }

    public function LEDC4Post(Request $request)
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
            'pm_sdm' => 'required',
            'kpg' => 'required',
            'simpulan' => 'required',

        ]);
        $C4=DB::table('led_c4')
                    ->rightJoin('users','led_c4.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();
        $data = new ModelLEDC4();  
        $data->id_prodi = $request->id_prodi = $C4->id_prodi;
        $data->description = $request->desc;
        $data->kebijakan = $request->kebijakan;
        $data->stp_standar = $request->strategi;
        $data->iku1 = $request->iku1;
        $data->iku2 = $request->iku2;
        $data->iku3 = $request->iku3;
        $data->iku4 = $request->iku4;
        $data->ikt = $request->ikt;
        $data->eval = $request->eval;
        $data->pm_sdm = $request->pm_sdm;
        $data->kpg = $request->kpg;
        $data->simpulan = $request->simpulan;
        // dd($data);
        $data->save();

        //Redirect to Show
        $C4=DB::table('led_c4')
                    ->join('users','led_c4.id_prodi','=','users.id_prodi')
                    ->select('led_c4.*')
                    ->where('users.id',Session::get('id'))
                    ->first();
        return redirect(url("c4?id=".$C4->id_prodi)); 
        // return redirect()->back()->with('alert-success','Data Penutup sudah tersimpan');
    }

    public function store(Request $request)
    {
        $data1 = new ModelKomentar();
        
        $data1->id_c4 = $request->id_c4;
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
        $test = ModelLEDC4::findOrFail($id);
        return view('LED_Kriteria.C4.show', compact('test'));
    }

    public function edit($id)
    {
        $led_c4 = ModelLEDC4::find($id);
        return view('c4', compact('led_c4')); 
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
        $data['iku4']=$request->iku4;
        $data['ikt']=$request->ikt;
        $data['eval']=$request->eval;
        $data['pm_sdm']=$request->pm_sdm;
        $data['kpg']=$request->kpg;
        $data['simpulan']=$request->simpulan;
        $cek=DB::table('led_c4')->where('id',$request->id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        } 
    }

    public function destroy($id) 
    { 
        $data = ModelLEDC4::where('id', $id);
        // dd($data); 
        $data->delete();
        
        
        //Redirect to Add
        // return redirect()->back()->with('success', 'Data Standar telah dihapus');
        return redirect(url('tambahc4'))->with('success', 'Data Standar telah dihapus');
    }
}
