<?php

namespace App\Http\Controllers;

use App\ModelMasterProdi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class MasterProdi extends Controller
{
    public function index() 
    { 
        $data['master_prodi'] = DB::table('master_prodi')
            ->get();
        $data['master_jurusan'] = DB::table('master_jurusan')
            ->get();
            // dd($data);
        return view('Master.Prodi.index',$data);
    } 

    public function prodiPost(Request $request)
    {
        $m=date('m');
        $cek=DB::table('master_prodi')->whereMonth('created_at',$m)->orderby('id','DESC')->first();
        if($cek==null){
            $last='001';
            $hasil =  sprintf("%03s", $last);
        }else{
            $last=substr($cek->id,-3);
            $hasil =  sprintf("%03s", $last + 1);
        }
       
        $data = new ModelMasterProdi();      
        $data->id = $request->id = $hasil;
        $data->id_jurusan = $request->jurusan;
        $data->nama = $request->nama;
        // dd($data);
        $data->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $master_prodi = ModelMasterProdi::find($id);
        return view('Master.Prodi.index', compact('master_prodi')); 
    }

    public function update(Request $request, $id)
    {
        $data['nama']=$request->nama;
        $cek=DB::table('master_prodi')->where('id',$id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Standar telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Standar telah diubah');
        } 
    }

    public function destroy($id) 
    { 
        $data = ModelMasterProdi::where('id', $id);
        $data->delete();
        return redirect()->back()->with('success', 'Data Standar telah dihapus');
    }
}
