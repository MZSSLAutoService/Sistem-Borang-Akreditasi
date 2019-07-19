<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class User extends Controller
{
    Public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus Login Dulu');
        }
        else{
            return view('user');
        }
    }

    Public function manageuser(){
        return view('user');
    }

    public function loginPost(Request $request){
        $request->validate([
            'username' => 'required|min:4',
            'password' => 'required'
        ]);

        $name = $request->input('username');
        $password =$request->input('password');

        if($name ==''){
    		return redirect()->back()->with(['message'=>'Harap isi email dengan benar','message_type'=>'warning']);
    	}elseif($password==''){
    		return redirect()->back()->with(['message'=>'Harap isi password','message_type'=>'warning']);
    	}
    	elseif($name !=''){
            $cek = DB::table('users')->where(['name'=>$name])->first();
            Session::put('id',$cek->id);
            Session::put('id_prodi',$cek->id_prodi);
            if(!(empty($cek))){
    			if(!Hash::check($password, $cek->password)){
    				return redirect()->back()->with(['message'=>'password salah','message_type'=>'warning']);
    			}else{
                    if($cek->id_role=='1'){
                        Session::put('id_role',$cek->id_role);
                        Session::put('name',$cek->name);
                        Session::put('email',$cek->email);
                        Session::put('login',TRUE);
                        return view('admin.index');
                    }elseif($cek->id_role=='2'){
                        Session::put('id_role',$cek->id_role);
                        Session::put('id_prodi',$cek->id_prodi);
                        Session::put('id_jurusan',$cek->id_jurusan);
                        Session::put('name',$cek->name);
                        Session::put('email',$cek->email);
                        Session::put('login',TRUE);
                        return view('kaprodi.index');
                    }elseif($cek->id_role=='3'){
                        Session::put('id_role',$cek->id_role);
                        Session::put('role_dosen',$cek->role_dosen);
                        Session::put('name',$cek->name);
                        Session::put('email',$cek->email);
                        Session::put('login',TRUE);
                        return view('staff.index');
                    }elseif($cek->id_role=='4'){
                        Session::put('id_role',$cek->id_role);
                        Session::put('name',$cek->name);
                        Session::put('email',$cek->email);
                        Session::put('login',TRUE);
                        return view('penilai.index');
                    }else{
                        Session::put('id_role',$cek->id_role);
                        Session::put('name',$cek->name);
                        Session::put('email',$cek->email);
                        Session::put('login',TRUE);
                        return view('pimpinan.index');
                    }
    			}
    		}else{
    			return redirect()->back()->with(['message'=>'Email belum terdaftar','message_type'=>'warning']);
    		}
        }else{
            return redirect()->back()->with(['message'=>'Harap login dengan data yang benar','message_type'=>'warning']);
        }
        
        // $data = DB::table('users')->where(['email'=>$email, 'password'=>$password])->first();
        // $data = ModelUser::where('email',$email)->first();
        // if($data){ //apakah email tersebut ada atau tidak
        //     if(Hash::check($password,$data->password)){
        //         Session::put('name',$data->name);
        //         Session::put('email',$data->email);
        //         Session::put('login',TRUE);
        //         return view('admin.index');
        //     }
        //     else{
        //         return redirect('login')->with('alert','Password atau Email, Salah !');
        //     }
        // }
        // else{
        //     return redirect('login')->with('alert','Password atau Email, Salah!');
        // }
        
        // if($data){
        //     if(Hash::check($password,$data->password)){
        //         if(Session::hash($roles,$data->role_id)==1){
        //             Session::put('name',$data->name);
        //             return view('admin.index');
        //         }
        //         else{
        //             return view('user.index');
        //         }
        //     }
        //     else{
        //         return redirect('login')->with('alert','Password atau Email, Salah !');
        //     }
        // }
        // else{
        //     return redirect('login')->with('alert','Password atau Email, Salah!');
        // }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu Sudah Logout');
    }

    public function register(Request $request){
        $data['role'] = DB::table('role')
                ->get();
        $data['tb_jurusan'] = DB::table('master_jurusan')
                ->get();
        $data['tb_prodi'] = DB::table('master_prodi')
                ->get();
        return view('register',$data);
    }

    public function getStates($id) {
        $states = DB::table("master_prodi")->where("id_jurusan",$id)->pluck("nama","id");

        return json_encode($states);

    }


    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confrimation' => 'required|same:password',
            'id_role' => 'required',
        ]);
        $data = new ModelUser();
        $data->name= $request->name;
        $data->email = $request->email;
        $data->id_role = $request->id_role;
        $data->id_jurusan = $request->jur;
        $data->id_prodi = $request->prodi;
        $data->password = bcrypt($request->password);
        // dd($data);
        $data->save();
        return redirect('login')->with('alert-success','Kamu Berhasil Register');
    }


}
