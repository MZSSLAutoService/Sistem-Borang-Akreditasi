<?php

namespace App\Http\Controllers\LED;
use App\Http\Controllers\Controller;

use App\ModelLED\ModelLEDC1;
use App\ModelLED\ModelKomentar;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LEDC1 extends Controller
{
    public function index() 
    { 
        $data['led_c1'] = DB::table('led_c1')
            ->get();
        $data['id_c1'] = $_GET['upps'];
        return view('LED_Kriteria.C1.index',$data);
        // return view('standar');
    }
    
    public function tambah() 
    { 
        return view('LED_Kriteria.C1.add');
    }

    public function LEDC1Post(Request $request)
    {
        $this->validate($request, [
            'desc' => 'required',
            'kebijakan' => 'required',
            'strategi' => 'required',
            'iku' => 'required',
            'ikt' => 'required',
            'eval_vmts' => 'required',
            'simpulan_vmts' => 'required',

        ]);
        $C1=DB::table('led_c1')
                    ->rightJoin('users','led_c1.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();
        $data = new ModelLEDC1();  
        $data->id_prodi = $request->id_prodi = $C1->id_prodi;
        $data->description = $request->desc;
        $data->kebijakan = $request->kebijakan;
        $data->stp_vmts = $request->strategi;
        $data->iku = $request->iku;
        $data->ikt = $request->ikt;
        $data->eval_vmts = $request->eval_vmts;
        $data->simpulan_vmts = $request->simpulan_vmts;
        // dd($data);
        $data->save();

        //Redirect to Show
        $C1=DB::table('led_c1')
                    ->join('users','led_c1.id_prodi','=','users.id_prodi')
                    ->select('led_c1.*')
                    ->where('users.id',Session::get('id'))
                    ->first();
        return redirect(url("c1?id=".$C1->id_prodi)); 
        // return redirect()->back()->with('alert-success','Data Penutup sudah tersimpan');
    }

    public function store(Request $request)
    {
        $data1 = new ModelKomentar();
        
        $data1->id_c1 = $request->id_c1;
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
        $test = ModelLEDC1::findOrFail($id);
        return view('LED_Kriteria.C1.show', compact('test'));
    }

    public function edit($id)
    {
        $led_c1 = ModelLEDC1::find($id);
        return view('c1', compact('led_c1')); 
    }

    public function update(Request $request)
    {
        // dd($request);
        $data['id']=$request->id;        
        $data['description']=$request->desc;
        $data['kebijakan']=$request->kebijakan;
        $data['stp_vmts']=$request->strategi;
        $data['iku']=$request->iku;
        $data['ikt']=$request->ikt;
        $data['eval_vmts']=$request->eval_vmts;
        $data['simpulan_vmts']=$request->simpulan_vmts;
        $cek=DB::table('led_c1')->where('id',$request->id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        } 
    }

    public function destroy($id) 
    { 
        $data = ModelLEDC1::where('id', $id);
        // dd($data); 
        $data->delete();
        
        
        //Redirect to Add
        // return redirect()->back()->with('success', 'Data Standar telah dihapus');
        return redirect(url('tambahc1'))->with('success', 'Data Standar telah dihapus');
    }
}
