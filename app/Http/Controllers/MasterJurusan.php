<?php

namespace App\Http\Controllers;

use App\ModelMasterJurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class MasterJurusan extends Controller
{
    public function index() 
    { 
        $data['master_jurusan'] = DB::table('master_jurusan')
            ->get();
        return view('Master.Jurusan.index',$data);
    } 

    public function jurusanPost(Request $request)
    {
        $m=date('m');
        $cek=DB::table('master_jurusan')->whereMonth('created_at',$m)->orderby('id','DESC')->first();
        if($cek==null){
            $last='001';
            $hasil =  sprintf("%03s", $last);
        }else{
            $last=substr($cek->id,-3);
            $hasil =  sprintf("%03s", $last + 1);
        }
       
        $data = new ModelMasterJurusan();      
        $data->id = $request->id = $hasil;
        $data->nama = $request->nama;
        $data->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $master_jurusan = ModelMasterJurusan::find($id);
        return view('Master.Jurusan.index', compact('master_jurusan')); 
    }

    public function update(Request $request, $id)
    {
        $data['nama']=$request->nama;
        $cek=DB::table('master_jurusan')->where('id',$id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Standar telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Standar telah diubah');
        } 
    }

    public function destroy($id) 
    { 
        $data = ModelMasterJurusan::where('id', $id);
        $data->delete();
        return redirect()->back()->with('success', 'Data Standar telah dihapus');
    }
}
