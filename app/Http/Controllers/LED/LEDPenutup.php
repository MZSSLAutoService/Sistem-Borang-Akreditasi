<?php

namespace App\Http\Controllers\LED;
use App\Http\Controllers\Controller;

use App\ModelLED\ModelLEDPenutup;
use App\ModelLED\ModelKomentar;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LEDPenutup extends Controller
{
    public function index() 
    { 
        $data['led_penutup'] = DB::table('led_penutup')
            ->get();
        $data['id_penutup'] = $_GET['upps'];
        return view('LED_Penutup.index',$data);
        // return view('standar');
    }

    public function tambah() 
    { 
        return view('LED_Penutup.add');
    }

    public function LEDPenutupPost(Request $request)
    {
        $this->validate($request, [
            'desc' => 'required',
        ]);
        $penutup=DB::table('led_penutup')
                    ->rightJoin('users','led_penutup.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();
        $data = new ModelLEDPenutup();  
        $data->id_prodi = $request->id_prodi = $penutup->id_prodi;
        $data->description = $request->desc;
        // dd($data);
        $data->save();

        //Redirect to Show
        $penutup=DB::table('led_penutup')
                    ->join('users','led_penutup.id_prodi','=','users.id_prodi')
                    ->select('led_penutup.*')
                    ->where('users.id',Session::get('id'))
                    ->first();
        return redirect(url("penutup?id=".$penutup->id_prodi)); 
        // return redirect()->back()->with('alert-success','Data Penutup sudah tersimpan');
    }

    public function store(Request $request)
    {
        $data1 = new ModelKomentar();
        
        $data1->id_penutup = $request->id_penutup;
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
        $test = ModelLEDPenutup::findOrFail($id);
        return view('LED_Penutup.show', compact('test'));
    }

    public function edit($id)
    {
        $led_penutup = ModelLEDPenutup::find($id);
        return view('penutup', compact('led_penutup')); 
    }

    public function update(Request $request)
    {
        $data['id']=$request->id;        
        $data['description']=$request->description;
        $cek=DB::table('led_penutup')->where('id',$request->id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        } 
    }

    public function destroy($id) 
    { 
        $data = ModelLEDPenutup::where('id', $id);
        // dd($data); 
        $data->delete();
        
        
        //Redirect to Add
        // return redirect()->back()->with('success', 'Data Standar telah dihapus');
        return redirect(url('tambahpenutup'))->with('success', 'Data Standar telah dihapus');
    }
}
