<?php

namespace App\Http\Controllers\LED;
use App\Http\Controllers\Controller;

use App\ModelLED\ModelLEDProfilUPPS;
use App\ModelLED\ModelKomentar;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LEDProfilUPPS extends Controller
{
    public function index() 
    { 
        $data['led_upps'] = DB::table('led_upps')
            ->get();
        $data['id_upps'] = $_GET['upps'];
        return view('LED_UUPS.index',$data);
        // return view('standar');
    }

    public function tambah() 
    { 
        return view('LED_UUPS.add');
    }

    public function LEDProfilUPPSPost(Request $request)
    {
        $this->validate($request, [
            'desc' => 'required',
            'sejarah' => 'required',
            'vm' => 'required',
            'org' => 'required',
            'mhsal' => 'required',
            'dostk' => 'required',
            'keusar' => 'required',
            'spm' => 'required',
            'kinerja' => 'required',

        ]);
        $profil=DB::table('led_upps')
                    ->rightJoin('users','led_upps.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();
        $data = new ModelLEDProfilUPPS();  
        $data->id_prodi = $request->id_prodi = $profil->id_prodi;
        $data->description = $request->desc;
        $data->sejarah_upps = $request->sejarah;
        $data->visi_misi = $request->vm;
        $data->org = $request->org;
        $data->mhs_alumni = $request->mhsal;
        $data->dosen_tk = $request->dostk;
        $data->keu_sarpras = $request->keusar;
        $data->spm = $request->spm;
        $data->kinerja = $request->kinerja;

        // dd($data);
        $data->save();

        //Redirect to Show
        $profil=DB::table('led_upps')
                    ->join('users','led_upps.id_prodi','=','users.id_prodi')
                    ->select('led_upps.*')
                    ->where('users.id',Session::get('id'))
                    ->first();
        return redirect(url("profilupps?id=".$profil->id_prodi)); 
        // return redirect()->back()->with('alert-success','Data Penutup sudah tersimpan');
    }

    public function store(Request $request)
    {
        $data1 = new ModelKomentar();
        
        $data1->id_upps = $request->id_upps;
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
        $test = ModelLEDProfilUPPS::findOrFail($id);
        return view('LED_UUPS.show', compact('test'));
    }

    public function edit($id)
    {
        $led_upps = ModelLEDProfilUPPS::find($id);
        return view('profilupps', compact('led_upps')); 
    }

    public function update(Request $request)
    {
        $data['id']=$request->id;        
        $data['description']=$request->desc;
        $data['sejarah_upps']=$request->sejarah;
        $data['visi_misi']=$request->vm;
        $data['org']=$request->org;
        $data['mhs_alumni']=$request->mhsal;
        $data['dosen_tk']=$request->dostk;
        $data['keu_sarpras']=$request->keusar;
        $data['spm']=$request->spm;
        $data['kinerja']=$request->kinerja;

        $cek=DB::table('led_upps')->where('id',$request->id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        } 
    }

    public function destroy($id) 
    { 
        $data = ModelLEDProfilUPPS::where('id', $id);
        // dd($data); 
        $data->delete();
        
        
        //Redirect to Add
        // return redirect()->back()->with('success', 'Data Standar telah dihapus');
        return redirect(url('tambahprofilupps'))->with('success', 'Data Standar telah dihapus');
    }
}
