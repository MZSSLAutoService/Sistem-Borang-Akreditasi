<?php

namespace App\Http\Controllers\LED;
use App\Http\Controllers\Controller;

use App\ModelLED\ModelLEDC9;
use App\ModelLED\ModelKomentar;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LEDC9 extends Controller
{
    public function index() 
    { 
        $data['led_c9'] = DB::table('led_c9')
            ->get();
        $data['id_c9'] = $_GET['upps'];
        return view('LED_Kriteria.C9.index',$data);
        // return view('standar');
    }
    
    public function tambah() 
    { 
        return view('LED_Kriteria.C9.add');
    }

    public function LEDC9Post(Request $request)
    {
        $this->validate($request, [
            'iku1' => 'required',
            'iku2' => 'required',
            'ikt' => 'required',
            'eval' => 'required',
            'pmplct' => 'required',
            'kpg' => 'required',
            'simpulan' => 'required',

        ]);
        $C9=DB::table('led_c9')
                    ->rightJoin('users','led_c9.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();
        $data = new ModelLEDC9();  
        $data->id_prodi = $request->id_prodi = $C9->id_prodi;
        $data->iku1 = $request->iku1;
        $data->iku2 = $request->iku2;
        $data->ikt = $request->ikt;
        $data->eval = $request->eval;
        $data->pmplct = $request->pmplct;
        $data->kpg = $request->kpg;
        $data->simpulan = $request->simpulan;
        // dd($data);
        $data->save();

        //Redirect to Show
        $C9=DB::table('led_c9')
                    ->join('users','led_c9.id_prodi','=','users.id_prodi')
                    ->select('led_c9.*')
                    ->where('users.id',Session::get('id'))
                    ->first();
        return redirect(url("c9?id=".$C9->id_prodi)); 
        // return redirect()->back()->with('alert-success','Data Penutup sudah tersimpan');
    }

    public function store(Request $request)
    {
        $data1 = new ModelKomentar();
        
        $data1->id_c9 = $request->id_c9;
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
        $test = ModelLEDC9::findOrFail($id);
        return view('LED_Kriteria.C9.show', compact('test'));
    }

    public function edit($id)
    {
        $led_c9 = ModelLEDC9::find($id);
        return view('c9', compact('led_c9')); 
    }

    public function update(Request $request)
    {
        // dd($request);
        $data['id']=$request->id;        
        $data['iku1']=$request->iku1;
        $data['iku2']=$request->iku2;
        $data['ikt']=$request->ikt;
        $data['eval']=$request->eval;
        $data['pmplct']=$request->pmplct;
        $data['kpg']=$request->kpg;
        $data['simpulan']=$request->simpulan;
        $cek=DB::table('led_c9')->where('id',$request->id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        } 
    }

    public function destroy($id) 
    { 
        $data = ModelLEDC9::where('id', $id);
        // dd($data); 
        $data->delete();
        
        
        //Redirect to Add
        // return redirect()->back()->with('success', 'Data Standar telah dihapus');
        return redirect(url('tambahc9'))->with('success', 'Data Standar telah dihapus');
    }
}
