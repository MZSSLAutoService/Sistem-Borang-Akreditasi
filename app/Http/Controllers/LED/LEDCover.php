<?php

namespace App\Http\Controllers\LED;
use App\Http\Controllers\Controller;

use App\ModelLED\ModelLEDCover;
use App\ModelLED\ModelLEDCover_prodi_upps;
use App\ModelLED\ModelKomentar;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use File;


class LEDCover extends Controller
{
    public function index() 
    { 
        $data['tb_prodi'] = DB::table('master_prodi')
            ->get();
        $data['led'] = DB::table('led_cover_prodi_upps')
            ->join('led_cover', 'led_cover_prodi_upps.id_cover', '=', 'led_cover.id')
            ->select( 'led_cover_prodi_upps.*')
            ->where('id_cover',$_GET['upps'])
            ->get();
        $data['id_cover'] = $_GET['upps'];
        return view('LED_Cover.index',$data);
        // return view('standar');
    }

    public function tambah() 
    { 
        $data['tb_prodi'] = DB::table('master_prodi')
            ->get();
        return view('LED_Cover.add', $data);
    }

    public function LEDCoverPost(Request $request)
    {
        
        // $data1 = new ModelLEDCover(); 
        
        // $file_ttd1  = $request->file('ttd1');
        // $fileName   = $file_ttd1->getClientOriginalName();
        // $request->file('ttd1')->move("data_file/", $fileName);

        // $data1->file_ttd1 = $fileName;
        
        // dd($data1);
        // // $file_ttd1 = $request->file('ttd1');
        // // $name = 'sibora-' . \Carbon\Carbon::now()->format('Y-m-dH:i:s') . '.' . $file_ttd1->getClientOriginalExtension();
        // // $request = $file_ttd1->storeAs('data_file', $name);

        // // $data1->file_ttd1 = $name;
        
		// // // menyimpan data file yang diupload ke variabel $file
		// // $file1 = $request->file('ttd1');
        // // dd($file1);
        // // $nama_file = time()."_".$file1->getClientOriginalName();
    
        // // isi dengan nama folder tempat kemana file diupload
        // $tujuan_upload = 'data_file';
        // $file1->move($tujuan_upload,$nama_file);
		// ModelLEDCover::create([
        //     'file_ttd1' => $nama_file,
		// ]);
        // dd($nama_file);

        $cover=DB::table('led_cover')
                    ->rightJoin('users','led_cover.id_prodi','=','users.id_prodi')
                    ->where('users.id',Session::get('id'))
                    ->first();
        $data1 = new ModelLEDCover();  
        $data1->id_prodi = $request->id_prodi = $cover->id_prodi;
        $data1->prodi = $request->prodi;
        $data1->pt = $request->pt;
        $data1->kota = $request->kota;
        $data1->th = $request->th;

        $data1->upps = $request->upps;
        $data1->jenis_ps = $request->jenis_ps;
        $data1->alamat = $request->alamat;
        $data1->telp = $request->no_telp;
        $data1->email_web = $request->e_web;
        $data1->sk_pt = $request->no_sk_pt;
        $data1->tgl_sk_pt = $request->tgl_sk_pt;
        $data1->pp_sk_pt = $request->pp_sk_pt;
        $data1->sk_ps = $request->no_sk_ps;
        $data1->tgl_sk_ps = $request->tgl_sk_ps;
        $data1->pp_sk_ps = $request->pp_sk_ps;
        $data1->th_awal = $request->th_maba1;
        $data1->peringkat_banpt = $request->peringkat;
        $data1->sk_banpt = $request->no_sk_banpt;
        
        $data1->nama_pys1 = $request->nama1;
        $data1->nidn_pys1 = $request->nidn1;
        $data1->jabatan_pys1 = $request->jabatan1;
        $data1->tgl1 = $request->tgl1;
        //TTD1
        $file_ttd1  = $request->file('ttd1');
        $fileName1   = $file_ttd1->getClientOriginalName();
        $request->file('ttd1')->move("data_file/", $fileName1);
        $data1->file_ttd1 = "data_file/".$fileName1;

        $data1->nama_pys2 = $request->nama2;
        $data1->nidn_pys2 = $request->nidn2;
        $data1->jabatan_pys2 = $request->jabatan2;
        $data1->tgl2 = $request->tgl2;
        //TTD2
        $file_ttd2  = $request->file('ttd2');
        $fileName2   = $file_ttd2->getClientOriginalName();
        $request->file('ttd2')->move("data_file/", $fileName2);
        $data1->file_ttd2 = "data_file/".$fileName2;

        $data1->nama_pys3 = $request->nama3;
        $data1->nidn_pys3 = $request->nidn3;
        $data1->jabatan_pys3 = $request->jabatan3;
        $data1->tgl3 = $request->tgl3;
        //TTD3
        $file_ttd3  = $request->file('ttd3');
        $fileName3   = $file_ttd3->getClientOriginalName();
        $request->file('ttd3')->move("data_file/", $fileName3);
        $data1->file_ttd3 = "data_file/".$fileName3;

        $data1->nama_pys4 = $request->nama4;
        $data1->nidn_pys4 = $request->nidn4;
        $data1->jabatan_pys4 = $request->jabatan4;
        $data1->tgl4 = $request->tgl4;
        //TTD4
        $file_ttd4  = $request->file('ttd4');
        $fileName4  = $file_ttd4->getClientOriginalName();
        $request->file('ttd4')->move("data_file/", $fileName4);
        $data1->file_ttd4 = "data_file/".$fileName4;
        
        $data1->kata_pengantar = $request->kt_pengantar;
        $data1->ringkasan = $request->ringkasan_eks;
        // $id_get=DB::table('tbl_cover')->insertGetId($data1);
        // dd($data1);
       
        //ARRAY
        if( $data1->save()){
            $data['jenis_pro_input']=$request->jenis_pro_input;
            $data['nama_pro_input']=$request->nama_pro_input;
            $data['status_input']=$request->status_input;
            $data['sk_input']=$request->sk_input;
            $data['tgl_kadaluarsa_input']=$request->tgl_kadaluarsa_input;
            $data['jum_mhs_input']=$request->jum_mhs_input;
    
            //   dd($data['jenis_pro_input'][1]);
    
            $cek=count($data['jenis_pro_input']);        
            $arr=[];
            $id_get=$data1->id;
            for($i=1;$i<=$cek;$i++){
                $list['id_cover']=$id_get;
                $list['jp_upps']=$data['jenis_pro_input'][$i];
                $list['prodi_upps']=$data['nama_pro_input'][$i];
                $list['status']=$data['status_input'][$i];
                $list['no_tgl_sk']=$data['sk_input'][$i];
                $list['tgl_kdw']=$data['tgl_kadaluarsa_input'][$i];
                $list['jml_mhs']=$data['jum_mhs_input'][$i];
                array_push($arr,$list);
            }
            ModelLEDCover_prodi_upps::insert($arr);
            // dd($arr);
        }
        //END ARRAY

        //Redirect to Show
        $cover=DB::table('led_cover')
                    ->join('users','led_cover.id_prodi','=','users.id_prodi')
                    ->select('led_cover.*')
                    ->where('users.id',Session::get('id'))
                    ->first();
        return redirect(url("cover?id=".$cover->id_prodi."&upps=".$cover->id)); 
        // return redirect(url("cover?id=".$cover->id_prodi)); 
        // return redirect()->back()->with('alert-success','Data Penutup sudah tersimpan');
    }
    
    public function store(Request $request)
    {
        $data1 = new ModelKomentar();
        
        $data1->id_cover = $request->id_cover;
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
        $dt_arr = ModelLEDCover_prodi_upps::where('id_cover',$id)->get();
        return view('cover.index',compact('dt_arr'));
    }

    public function edit($id)
    {
        $led_cover = ModelLEDCover::find($id);
        $led_cover_upps = ModelLEDCover_prodi_upps::all();
        $query = ModelLEDCover_prodi_upps::select('id')->where('id_cover', $id)->get();
        return view('cover', compact('led_cover','led_cover_upps')); 
    }

    public function update(Request $request)
    {
        $data['id']=$request->id;        
        $data['prodi']=$request->prodi;
        $data['pt']=$request->pt;
        $data['kota']=$request->kota;
        $data['th']=$request->th;
        $data['upps']=$request->upps;
        $data['jenis_ps']=$request->jenis_ps;
        $data['alamat']=$request->alamat;
        $data['telp']=$request->no_telp;
        $data['email_web']=$request->e_web;
        $data['sk_pt']=$request->no_sk_pt;
        $data['tgl_sk_pt']=$request->tgl_sk_pt;
        $data['pp_sk_pt']=$request->pp_sk_pt;
        $data['sk_ps']=$request->no_sk_ps;
        $data['tgl_sk_ps']=$request->tgl_sk_ps;
        $data['pp_sk_ps']=$request->pp_sk_ps;
        $data['th_awal']=$request->th_maba1;
        $data['peringkat_banpt']=$request->peringkat;
        $data['sk_banpt']=$request->no_sk_banpt;

        $data['nama_pys1'] = $request->nama1;
        $data['nidn_pys1'] = $request->nidn1;
        $data['jabatan_pys1'] = $request->jabatan1;
        $data['tgl1'] = $request->tgl1;
        // $data['file_ttd1'] = $request->ttd1;

        if ($request->hasFile('ttd1')) {
            $dir = 'data_file/';
            if ($data['file_ttd1'] != '' && File::exists($dir . $data['file_ttd1']))
                File::delete($dir . $data['file_ttd1']);
            
            $file_ttd1  = $request->file('ttd1');
            $fileName1  = $file_ttd1->getClientOriginalName();
            $request->file('ttd1')->move("data_file/", $fileName1);
            $data['file_ttd1'] = $fileName1;
        }

        $data['nama_pys2'] = $request->nama2;
        $data['nidn_pys2'] = $request->nidn2;
        $data['jabatan_pys2'] = $request->jabatan2;
        $data['tgl2'] = $request->tgl2;
        // $data['file_ttd2'] = $request->ttd2;

        if ($request->hasFile('ttd2')) {
            $dir = 'data_file/';
            if ($data['file_ttd2'] != '' && File::exists($dir . $data['file_ttd2']))
                File::delete($dir . $data['file_ttd2']);
            
            $file_ttd2  = $request->file('ttd2');
            $fileName2  = $file_ttd2->getClientOriginalName();
            $request->file('ttd2')->move("data_file/", $fileName2);
            $data['file_ttd2'] = $fileName2;
        }

        $data['nama_pys3'] = $request->nama3;
        $data['nidn_pys3'] = $request->nidn3;
        $data['jabatan_pys3'] = $request->jabatan3;
        $data['tgl3'] = $request->tgl3;
        // $data['file_ttd3'] = $request->ttd3;

        if ($request->hasFile('ttd3')) {
            $dir = 'data_file/';
            if ($data['file_ttd3'] != '' && File::exists($dir . $data['file_ttd3']))
                File::delete($dir . $data['file_ttd3']);
            
            $file_ttd3  = $request->file('ttd3');
            $fileName3  = $file_ttd3->getClientOriginalName();
            $request->file('ttd3')->move("data_file/", $fileName3);
            $data['file_ttd3'] = $fileName3;
        }

        $data['nama_pys4'] = $request->nama4;
        $data['nidn_pys4'] = $request->nidn4;
        $data['jabatan_pys4'] = $request->jabatan4;
        $data['tgl4'] = $request->tgl4;
        // $data['file_ttd4'] = $request->ttd4;

        if ($request->hasFile('ttd4')) {
            $dir = 'data_file/';
            if ($data['file_ttd4'] != '' && File::exists($dir . $data['file_ttd4']))
                File::delete($dir . $data['file_ttd4']);
            
            $file_ttd4  = $request->file('ttd4');
            $fileName4  = $file_ttd4->getClientOriginalName();
            $request->file('ttd4')->move("data_file/", $fileName4);
            $data['file_ttd4'] = $fileName4;
        }

        $data['kata_pengantar'] = $request->kt_pengantar;
        $data['ringkasan'] = $request->ringkasan_eks;

        $cek=DB::table('led_cover')->where('id',$request->id)->update($data);
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Penutup telah diubah');
        }else{
            return redirect()->back()->with('edit-gagal', 'Data Penutup gagal diubah');
        }  
    }

    public function destroy($id) 
    {  

    $data = ModelLEDCover::where('id',$id)->first();

    File::delete($data->file_ttd1);
    File::delete($data->file_ttd2);
    File::delete($data->file_ttd3);
    File::delete($data->file_ttd4);
    
    ModelLEDCover::where('id',$id)->delete();
    
    if($data){
        // $data1 =DB::table('led_cover')->where('id_prodi',Session::get('id_prodi'))->first();


        DB::table('led_cover_prodi_upps')
                    ->where('id_cover', $id)->delete();
    }

        //Redirect to Add
        return redirect(url('tambahcover'))->with('success', 'Data Cover telah dihapus');
    }
}
