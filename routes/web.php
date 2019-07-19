<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    Route::get('/', function () {
        return view('index');
    });

    Route::get('login', function () {
        return view('login');
    });

    Route::get('dashboard', function () {
        if (Session::get('id_role')=="1"){
            return view('admin.index');
        }elseif (Session::get('id_role')=="2"){
            return view('kaprodi.index');
        }elseif (Session::get('id_role')=="3"){
            return view('staff.index');
        }elseif (Session::get('id_role')=="4"){
            return view('penilai.index');
        }else{
            return view('pimpinan.index');
        }

    });

    //Login & Register
    Route::get('logout', 'User@logout');
    Route::get('register', 'User@register');
    Route::post('loginPost', 'User@loginPost');
    Route::post('registerPost', 'User@registerPost');
    Route::get('user', 'User@manageuser');

    Route::get('lkps', 'LKPS\LKPS@index');
    Route::get('states/get/{id}', 'User@getStates');

    //Master Jurusan
    Route::post('jurusanPost', 'MasterJurusan@jurusanPost');
    Route::resource('jurusan', 'MasterJurusan');

    //Master Prodi
    Route::post('prodiPost', 'MasterProdi@prodiPost');
    Route::resource('prodi', 'MasterProdi');

    //Membuat Tabel Transkasi LED
    Route::post('LEDPost', 'LED\LED@LEDPost');

    //Master LED_Penutup
    Route::post('LEDPenutupPost', 'LED\LEDPenutup@LEDPenutupPost');
    // Route::post('penutupPost', 'LED\LEDPenutup@penutupPost');
    Route::post('updatepenutup','LED\LEDPenutup@update');
    Route::post('deletepenutup','LED\LEDPenutup@destroy');
    Route::resource('penutup', 'LED\LEDPenutup');
    Route::get('tambahpenutup', 'LED\LEDPenutup@tambah');

    //Master LED_Analisis_UPPS
    Route::post('analisisPost', 'LED\LEDAnalisis@LEDAnalisisPost');
    Route::post('updateanalisis','LED\LEDAnalisis@update');
    Route::post('deleteanalisis','LED\LEDAnalisis@destroy');
    Route::resource('analisis', 'LED\LEDAnalisis');
    Route::get('tambahanalisis', 'LED\LEDAnalisis@tambah');

    //Master LED_C1
    Route::post('c1Post', 'LED\LEDC1@LEDC1Post');
    Route::post('updatec1','LED\LEDC1@update');
    Route::post('deletec1','LED\LEDC1@destroy');
    Route::resource('c1', 'LED\LEDC1');
    Route::get('tambahc1', 'LED\LEDC1@tambah');

    //Master LED_C2
    Route::post('c2Post', 'LED\LEDC2@LEDC2Post');
    Route::post('updatec2','LED\LEDC2@update');
    Route::post('deletec2','LED\LEDC2@destroy');
    Route::resource('c2', 'LED\LEDC2');
    Route::get('tambahc2', 'LED\LEDC2@tambah');

    //Master LED_C3
    Route::post('c3Post', 'LED\LEDC3@LEDC3Post');
    Route::post('updatec3','LED\LEDC3@update');
    Route::post('deletec3','LED\LEDC3@destroy');
    Route::resource('c3', 'LED\LEDC3');
    Route::get('tambahc3', 'LED\LEDC3@tambah');

    //Master LED_C4
    Route::post('c4Post', 'LED\LEDC4@LEDC4Post');
    Route::post('updatec4','LED\LEDC4@update');
    Route::post('deletec4','LED\LEDC4@destroy');
    Route::resource('c4', 'LED\LEDC4');
    Route::get('tambahc4', 'LED\LEDC4@tambah');

    //Master LED_C5
    Route::post('c5Post', 'LED\LEDC5@LEDC5Post');
    Route::post('updatec5','LED\LEDC5@update');
    Route::post('deletec5','LED\LEDC5@destroy');
    Route::resource('c5', 'LED\LEDC5');
    Route::get('tambahc5', 'LED\LEDC5@tambah');

    //Master LED_C6
    Route::post('c6Post', 'LED\LEDC6@LEDC6Post');
    Route::post('updatec6','LED\LEDC6@update');
    Route::post('deletec6','LED\LEDC6@destroy');
    Route::resource('c6', 'LED\LEDC6');
    Route::get('tambahc6', 'LED\LEDC6@tambah');

    //Master LED_C7
    Route::post('c7Post', 'LED\LEDC7@LEDC7Post');
    Route::post('updatec7','LED\LEDC7@update');
    Route::post('deletec7','LED\LEDC7@destroy');
    Route::resource('c7', 'LED\LEDC7');
    Route::get('tambahc7', 'LED\LEDC7@tambah');

    //Master LED_C8
    Route::post('c8Post', 'LED\LEDC8@LEDC8Post');
    Route::post('updatec8','LED\LEDC8@update');
    Route::post('deletec8','LED\LEDC8@destroy');
    Route::resource('c8', 'LED\LEDC8');
    Route::get('tambahc8', 'LED\LEDC8@tambah');

    //Master LED_C9
    Route::post('c9Post', 'LED\LEDC9@LEDC9Post');
    Route::post('updatec9','LED\LEDC9@update');
    Route::post('deletec9','LED\LEDC9@destroy');
    Route::resource('c9', 'LED\LEDC9');
    Route::get('tambahc9', 'LED\LEDC9@tambah');

    //Master LED_Kondisi Eksternal
    Route::post('LEDKondisiEksPost', 'LED\LEDKondisiEksternal@LEDKondisiEksPost');
    Route::post('updatekondisieks','LED\LEDKondisiEksternal@update');
    Route::post('deletekondisieks','LED\LEDKondisiEksternal@destroy');
    Route::resource('kondisieks', 'LED\LEDKondisiEksternal');
    Route::get('tambahkondisieks', 'LED\LEDKondisiEksternal@tambah');

    //Master LED_Profil UPPS
    Route::post('LEDProfilUPPSPost', 'LED\LEDProfilUPPS@LEDProfilUPPSPost');
    Route::post('updateprofilupps','LED\LEDProfilUPPS@update');
    Route::post('deleteprofilupps','LED\LEDProfilUPPS@destroy');
    Route::resource('profilupps', 'LED\LEDProfilUPPS');
    Route::get('tambahprofilupps', 'LED\LEDProfilUPPS@tambah');

    //Master LED_Pendahuluan
    Route::post('LEDPendahuluanPost', 'LED\LEDPendahuluan@LEDPendahuluanPost');
    Route::post('updatependahuluan','LED\LEDPendahuluan@update');
    Route::post('deletependahuluan','LED\LEDPendahuluan@destroy');
    Route::resource('pendahuluan', 'LED\LEDPendahuluan');
    Route::get('tambahpendahuluan', 'LED\LEDPendahuluan@tambah');

    //Master LED_Cover
    Route::post('LEDCoverPost', 'LED\LEDCover@LEDCoverPost');
    Route::post('updatecover','LED\LEDCover@update');
    Route::post('deletecover','LED\LEDCover@destroy');
    Route::resource('cover', 'LED\LEDCover');
    Route::get('tambahcover', 'LED\LEDCover@tambah');
    Route::get('upload_file', 'LED\LEDCover@proses_upload');

    //Komentar
    // Route::post('komentarcover', 'Komentar@komentarcoverpost');
    // Route::post('komentarpendahuluan', 'Komentar@komentarpendahuluanpost');

    //LED File
    Route::get('ledfile', function () {
        return view('LED_File.index');
    });
    Route::get('dropzoneFile','LED\LEDFile@dropzoneFile') ;
    Route::post('dropzoneUploadFile',array('as'=>'dropzone.uploadfile','uses'=>'LED\LEDFile@dropzoneUploadFile')) ;

    //LED Convert PDF
    Route::get('download', 'LED\LED@index');
    Route::get('cetak_pdf', 'LED\LED@cetak_pdf');
    Route::get('print', function () {
        return view('Convert.print');
    });
    Route::get('print', 'LED\LED@print');

    //Compare
    Route::post('comparepost','Compare@index');

    //Membuat Tabel Transkasi LKPS
    Route::post('LKPSPost', 'LKPS\LKPS@LKPSPost');


    //Master LKPS_Cover
    Route::post('LKPSCoverPost', 'LKPS\LKPSCover@LKPSCoverPost');
    Route::post('updatecoverlkps','LKPS\LKPSCover@update');
    Route::post('deletecoverlkps','LKPS\LKPSCover@destroy');
    Route::resource('coverlkps', 'LKPS\LKPSCover');
    Route::get('tambahcoverlkps', 'LKPS\LKPSCover@tambah');
    Route::get('upload_file_lkps', 'LKPS\LKPSCover@proses_upload');

    //Master 1
    Route::post('LKPSc1Post', 'LKPS\LKPSC1@LKPSC1Post');
    Route::post('updatec1lkps','LKPS\LKPSC1@update');
    Route::post('deletec1lkps','LKPS\LKPSC1@destroy');
    Route::resource('c1lkps', 'LKPS\LKPSC1');
    Route::get('tambahc1lkps', 'LKPS\LKPSC1@tambah');

    //Master LKPS_C2
    Route::post('LKPSc2Post', 'LKPS\LKPSC2@LKPSC2Post');
    Route::post('updatec2lkps','LKPS\LKPSC2@update');
    Route::post('deletec2lkps','LKPS\LKPSC2@destroy');
    Route::resource('c2lkps', 'LKPS\LKPSC2');
    Route::get('tambahc2lkps', 'LKPS\LKPSC2@tambah');

    //Master LKPS_C4
    Route::post('LKPSc4Post', 'LKPS\LKPSC4@LKPSC4Post');
    Route::post('updatec4lkps','LKPS\LKPSC4@update');
    Route::post('deletec4lkps','LKPS\LKPSC4@destroy');
    Route::resource('c4lkps', 'LKPS\LKPSC4');
    Route::get('tambahc4lkps', 'LKPS\LKPSC4@tambah');

    //Master LKPS_C5
    Route::post('LKPSc5Post', 'LKPS\LKPSC5@LKPSC5Post');
    Route::post('updatec5lkps','LKPS\LKPSC5@update');
    Route::post('deletec5lkps','LKPS\LKPSC5@destroy');
    Route::resource('c5lkps', 'LKPS\LKPSC5');
    Route::get('tambahc5lkps', 'LKPS\LKPSC5@tambah');

    //Master LKPS_C6
    Route::post('LKPSc6Post', 'LKPS\LKPSC6@LKPSC6Post');
    Route::post('updatec6lkps','LKPS\LKPSC6@update');
    Route::post('deletec6lkps','LKPS\LKPSC6@destroy');
    Route::resource('c6lkps', 'LKPS\LKPSC6');
    Route::get('tambahc6lkps', 'LKPS\LKPSC6@tambah');

    // }
    // return view('login');
    //End Fix

//Coba-Coba

        Route::get('Cover_LED', function () {
            return view('LED_Cover.index');
        });

        Route::get('Cover_LKPS', function () {
            return view('LKPS_Cover.index');
        });

        Route::get('C1_LKPS', function () {
            return view('LKPS_C1.index');
        });

        Route::get('C2_LKPS', function () {
            return view('LKPS_C2.index');
        });

        Route::get('C4_LKPS', function () {
            return view('LKPS_C4.index');
        });
        
        Route::get('C5_LKPS', function () {
            return view('LKPS_C5.index');
        });

        Route::get('C6_LKPS', function () {
            return view('LKPS_C6.index');
        });
