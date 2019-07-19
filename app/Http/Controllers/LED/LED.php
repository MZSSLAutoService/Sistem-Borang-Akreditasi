<?php

namespace App\Http\Controllers\LED;
use App\Http\Controllers\Controller;

use App\ModelLED\ModelLEDCover;
use App\ModelLED\ModelLEDPenutup;
use App\ModelLED\ModelLED;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;

class LED extends Controller
{
    public function index() 
    { 
        return view('Convert.led');
    }

    public function LEDPost(Request $request) 
    { 
        $data = new ModelLED();
        $data->id_user = $request->id;
        $data->id_prodi = $request->id_prodi;  
        $data->save();

        $cover=DB::table('led_cover')
                        ->join('users','led_cover.id_prodi','=','users.id_prodi')
                        ->select('led_cover.*')
                        ->where('users.id',Session::get('id'))
                        ->first();
                        
        if($cover!=null){
            return redirect(url("cover?id=".$cover->id_prodi."&upps=".$cover->id));
        }else {
            return redirect(url('tambahcover'));
        }
    }

    public function print() 
    { 
        $data['tb_prodi'] = DB::table('master_prodi')
            ->get();
        $data['led_cover_upps'] = DB::table('led_cover_prodi_upps')
            ->join('led_cover', 'led_cover_prodi_upps.id_cover', '=', 'led_cover.id')
            ->select( 'led_cover_prodi_upps.*')
            ->where('id_cover',$_GET['upps'])
            ->get();
        $data['led_penutup'] = DB::table('led_penutup')
            ->get();
        $data['led_analisis_upps'] = DB::table('led_analisis_upps')
            ->get();
        $data['led_c1'] = DB::table('led_c1')
            ->get();
        $data['led_c2'] = DB::table('led_c2')
            ->get();
        $data['led_c3'] = DB::table('led_c3')
            ->get();
        $data['led_c4'] = DB::table('led_c4')
            ->get();
        $data['led_c5'] = DB::table('led_c5')
            ->get();
        $data['led_c6'] = DB::table('led_c6')
            ->get();
        $data['led_c7'] = DB::table('led_c7')
            ->get();
        $data['led_c8'] = DB::table('led_c8')
            ->get();
        $data['led_c9'] = DB::table('led_c9')
            ->get();
        $data['led_kondisieks'] = DB::table('led_kondisieks')
            ->get();
        $data['led_upps'] = DB::table('led_upps')
            ->get();
        $data['led_pendahuluan'] = DB::table('led_pendahuluan')
            ->get();
        return view('Convert.print',$data);
    }

    public function cetak_pdf() 
    { 
        // $penutup = ModelLEDPenutup::all();
        // $led_cover = ModelLEDCover::all();
        $data['tb_prodi'] = DB::table('master_prodi')
                                ->get();
        $data['led_cover_upps'] = DB::table('led_cover_prodi_upps')
                                ->join('led_cover', 'led_cover_prodi_upps.id_cover', '=', 'led_cover.id')
                                ->select( 'led_cover_prodi_upps.*')
                                ->where('id_cover',$_GET['upps'])
                                ->get();
        // $pdf    = PDF::setOptions(['images' => TRUE, 'isHtml5ParserEnabled' => TRUE, 'isRemoteEnabled' => TRUE,  'defaultFont', 'Times-Roman'])
        $pdf    = PDF::setOptions(['isRemoteEnabled', true])
                            ->loadview('Convert/led-pdf',$data)->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan Evaluasi Diri'.date("Y-m-d").'.pdf');

        // $options = new Options();
        // $options->set('isRemoteEnabled',true);      
        // $dompdf = new PDF( $options );
        
        // // instantiate and use the dompdf class
        // $dompdf = new Dompdf();
        // $dompdf->loadHtml('<p><span style="font-size:72px"><img alt="" src="/tugasakhir-testing%20-%20Copy/public/vendor/unisharp/laravel-ckeditor/kcfinder/upload/images/Prodi/IK/kisspng-beauty-and-the-beast-belle-cogsworth-mrs-potts-luke-evans-5aca8b5f61b380.8310518515232233914002.jpg" style="float:left; height:640px; width:778px" /></span></p>');

        // // (Optional) Setup the paper size and orientation
        // $dompdf->setPaper('A4', 'landscape');

        // // Render the HTML as PDF
        // $dompdf->render();

        // // Output the generated PDF to Browser
        // $dompdf->stream('Laporan Evaluasi Diri'.date("Y-m-d").'.pdf');


        // $dompdf = new Dompdf();
        // $dompdf->loadHtml($aData['html']);
        // $dompdf->set_option('isRemoteEnabled', TRUE);
        // $dompdf->setPaper('A4', 'landscape');
        // $dompdf->render();
        // $dompdf->stream();

        // $pdf = \App::make('dompdf.wrapper');
        // $pdf->loadView('Convert/led-pdf',['led_penutup'=>$penutup]);
        // $pdf->stream();
    }
}
