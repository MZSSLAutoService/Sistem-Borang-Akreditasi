<?php

namespace App\Http\Controllers\LED;
use App\Http\Controllers\Controller;

use App\ModelLED\ModelLEDAnalisis;
use App\ModelLED\ModelKomentar;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LEDAnalisis extends Controller
{
    public function index() 
    { 
        $data['led_analisis_upps'] = DB::table('led_analisis_upps')
            ->get();
        $data['id_analisis'] = $_GET['upps'];
        return view('LED_Analisis dan Penetapan Program UPPS.index',$data);
        // return view('standar');
    }
    
    public function tambah() 
    { 
        return view('LED_Analisis dan Penetapan Program UPPS.add');
    }

    public function LEDAnalisisPost(Request $request)
    {
        $this->validate($request, [
            'analisisck' => 'required',
            'analisisswot' => 'required',
            'strategi' => 'required',
            'programker' => 'required',

        ]);
        $analisis=DB::table('led_analisis_upps')
                    ->rightJoin('users','led_analisis_upps.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();
        $data = new ModelLEDAnalisis();  
        $data->id_prodi = $request->id_prodi = $analisis->id_prodi;
        $data->analisis_capaian = $request->analisisck;
        $data->analisis_swot = $request->analisisswot;
        $data->strategi = $request->strategi;
        $data->program_lanjutan = $request->programker;
        // dd($data);
        $data->save();

        //Redirect to Show
        $analisis=DB::table('led_analisis_upps')
                    ->join('users','led_analisis_upps.id_prodi','=','users.id_prodi')
                    ->select('led_analisis_upps.*')
                    ->where('users.id',Session::get('id'))
                    ->first();
        return redirect(url("analisis?id=".$analisis->id_prodi)); 
        // return redirect()->back()->with('alert-success','Data Penutup sudah tersimpan');
    }

    
    public function store(Request $request)
    {
        $data1 = new ModelKomentar();
        
        $data1->id_analisis = $request->id_analisis;
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
        $test = ModelLEDAnalisis::findOrFail($id);
        return view('LED_Analisis dan Penetapan Program UPPS.show', compact('test'));
    }

    public function edit($id)
    {
        $led_analisis_upps = ModelLEDAnalisis::find($id);
        return view('analisis', compact('led_analisis_upps')); 
    }

    public function update(Request $request)
    {
        // dd($request);
        $data['id']=$request->id;        
        $data['analisis_capaian']=$request->analisisck;
        $data['analisis_swot']=$request->analisisswot;
        $data['strategi']=$request->strategi;
        $data['program_lanjutan']=$request->programker;
        $cek=DB::table('led_analisis_upps')->where('id',$request->id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        } 
    }

    public function destroy($id) 
    { 
        $data = ModelLEDAnalisis::where('id', $id);
        // dd($data); 
        $data->delete();
        
        
        //Redirect to Add
        // return redirect()->back()->with('success', 'Data Standar telah dihapus');
        return redirect(url('tambahanalisis'))->with('success', 'Data Standar telah dihapus');
    }
}
