<?php

namespace App\Http\Controllers\LED;
use App\Http\Controllers\Controller;

use App\ModelLED\ModelLEDKondisiEksternal;
use App\ModelLED\ModelKomentar;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LEDKondisiEksternal extends Controller
{
    public function index() 
    { 
        $data['led_kondisieks'] = DB::table('led_kondisieks')
            ->get();
        $data['id_kondisieks'] = $_GET['upps'];
        return view('LED_Kondisi Eksternal.index',$data);
        // return view('standar');
    }

    public function tambah() 
    { 
        return view('LED_Kondisi Eksternal.add');
    }

    public function LEDKondisiEksPost(Request $request)
    {
        $this->validate($request, [
            'desc' => 'required',
        ]);
        $koneks=DB::table('led_kondisieks')
                    ->rightJoin('users','led_kondisieks.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();
        $data = new ModelLEDKondisiEksternal();  
        $data->id_prodi = $request->id_prodi = $koneks->id_prodi;
        $data->description = $request->desc;
        // dd($data);
        $data->save();

        //Redirect to Show
        $koneks=DB::table('led_kondisieks')
                    ->join('users','led_kondisieks.id_prodi','=','users.id_prodi')
                    ->select('led_kondisieks.*')
                    ->where('users.id',Session::get('id'))
                    ->first();
        return redirect(url("kondisieks?id=".$koneks->id_prodi)); 
        // return redirect()->back()->with('alert-success','Data Penutup sudah tersimpan');
    }

    public function store(Request $request)
    {
        $data1 = new ModelKomentar();
        
        $data1->id_kondisieks = $request->id_kondisieks;
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
        $test = ModelLEDKondisiEksternal::findOrFail($id);
        return view('LED_Kondisi Eksternal.show', compact('test'));
    }

    public function edit($id)
    {
        $led_kondisieks = ModelLEDKondisiEksternal::find($id);
        return view('kondisieks', compact('led_kondisieks')); 
    }

    public function update(Request $request)
    {
        $data['id']=$request->id;        
        $data['description']=$request->desc;
        $cek=DB::table('led_kondisieks')->where('id',$request->id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        } 
    }

    public function destroy($id) 
    { 
        $data = ModelLEDKondisiEksternal::where('id', $id);
        // dd($data); 
        $data->delete();
        
        
        //Redirect to Add
        // return redirect()->back()->with('success', 'Data Standar telah dihapus');
        return redirect(url('tambahkondisieks'))->with('success', 'Data Standar telah dihapus');
    }
}
