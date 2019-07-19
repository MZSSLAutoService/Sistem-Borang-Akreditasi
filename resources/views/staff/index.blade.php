@extends('layout.basemenu')
@section('content')
  <!-- Main content -->
  <div class="main-content">
  <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD STAFF</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">LAPORAN KINERJA PROGRAM STUDI</div>
                            <?php
                                // LKPS
                                    $coverlkps=DB::table('lkps_cover')
                                            ->join('users','lkps_cover.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                    $LKPSC1=DB::table('lkps_kerjasama')
                                            ->leftJoin('users','lkps_kerjasama.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                    $LKPSC2=DB::table('lkps_mahasiswa')
                                            ->leftJoin('users','lkps_mahasiswa.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                    $LKPSC4=DB::table('lkps_keuangan')
                                            ->leftJoin('users','lkps_keuangan.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                    $LKPSC5=DB::table('lkps_pendidikan')
                                            ->leftJoin('users','lkps_pendidikan.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                    $LKPSC6=DB::table('lkps_penelitian')
                                            ->leftJoin('users','lkps_penelitian.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                // #END LKPS
                                
                                // LED
                                    $coverled=DB::table('led_cover')
                                            ->join('led','led_cover.id_prodi','=','led.id_prodi')
                                            ->where('led.id_user',Session::get('id'))
                                            ->first();
                                    $pendahuluan=DB::table('led_pendahuluan')
                                            ->join('users','led_pendahuluan.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                    $koneks=DB::table('led_kondisieks')
                                            ->join('users','led_kondisieks.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                    $profil=DB::table('led_upps')
                                            ->join('users','led_upps.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                    $LEDC1=DB::table('led_c1')
                                            ->join('users','led_c1.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                    $LEDC2=DB::table('led_c2')
                                            ->join('users','led_c2.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                    $LEDC3=DB::table('led_c3')
                                            ->join('users','led_c3.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                    $LEDC4=DB::table('led_c4')
                                            ->join('users','led_c4.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                    $LEDC5=DB::table('led_c5')
                                            ->join('users','led_c5.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                    $LEDC6=DB::table('led_c6')
                                            ->join('users','led_c6.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                    $LEDC7=DB::table('led_c7')
                                            ->join('users','led_c7.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                    $LEDC8=DB::table('led_c8')
                                            ->join('users','led_c8.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                    $LEDC9=DB::table('led_c9')
                                            ->join('users','led_c9.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                    $analisis=DB::table('led_analisis_upps')
                                            ->join('users','led_analisis_upps.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                    $penutup=DB::table('led_penutup')
                                            ->join('users','led_penutup.id_prodi','=','users.id_prodi')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                // #END LED

                                // ALL
                                    $lkps=DB::table('users')
                                        ->join('lkps_penelitian','users.id_prodi','=','lkps_penelitian.id_prodi')
                                        ->join('lkps_pendidikan','users.id_prodi','=','lkps_pendidikan.id_prodi')
                                        ->join('lkps_keuangan','users.id_prodi','=','lkps_keuangan.id_prodi')
                                        ->join('lkps_mahasiswa','users.id_prodi','=','lkps_mahasiswa.id_prodi')
                                        ->join('lkps_kerjasama','users.id_prodi','=','lkps_kerjasama.id_prodi')
                                        ->join('lkps_cover','users.id_prodi','=','lkps_cover.id_prodi')
                                        ->where('users.id',Session::get('id'))
                                        ->first();

                                    $led=DB::table('users')
                                        ->leftjoin('led_penutup','users.id_prodi','=','led_penutup.id_prodi')
                                        ->leftjoin('led_analisis_upps','users.id_prodi','=','led_analisis_upps.id_prodi')
                                        ->leftjoin('led_c9','users.id_prodi','=','led_c9.id_prodi')
                                        ->leftjoin('led_c8','users.id_prodi','=','led_c8.id_prodi')
                                        ->leftjoin('led_c7','users.id_prodi','=','led_c7.id_prodi')
                                        ->leftjoin('led_c6','users.id_prodi','=','led_c6.id_prodi')
                                        ->leftjoin('led_c5','users.id_prodi','=','led_c5.id_prodi')
                                        ->leftjoin('led_c4','users.id_prodi','=','led_c4.id_prodi')
                                        ->leftjoin('led_c3','users.id_prodi','=','led_c3.id_prodi')
                                        ->leftjoin('led_c2','users.id_prodi','=','led_c2.id_prodi')
                                        ->leftjoin('led_c1','users.id_prodi','=','led_c1.id_prodi')
                                        ->leftjoin('led_upps','users.id_prodi','=','led_upps.id_prodi')
                                        ->leftjoin('led_kondisieks','users.id_prodi','=','led_kondisieks.id_prodi')
                                        ->leftjoin('led_pendahuluan','users.id_prodi','=','led_pendahuluan.id_prodi')
                                        ->leftjoin('led_cover','users.id_prodi','=','led_cover.id_prodi')
                                        ->where('users.id',Session::get('id'))
                                        ->first();
                                // #END ALL
                            ?>
                            @if($lkps !=null)
                                <div>Complete</div>
                            @else
                                <div>Not Complete</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">LAPORAN EVALUASI DIRI</div>
                            @if($led ==null)
                                <div>Complete</div>
                            @else
                                <div>Not Complete</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                </div>
            </div>
            <!-- #END# Widgets -->            
            <div class="row clearfix">
                <!-- Task Info 1 -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>TASK INFOS LAPORAN EVALUASI DIRI</h2>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover dashboard-task-infos">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Task</th>
                                                <th>Status</th>
                                                <th>Task</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $no=1
                                        ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td>Laporan Evaluasi Diri - Cover</td>
                                                    @if($coverled !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                                <td>Laporan Evaluasi Diri - Pendahuluan</td>
                                                    @if($pendahuluan !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                            </tr>
                                        <?php
                                            $no ++
                                        ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td>Laporan Evaluasi Diri - Kondisi Eksternal</td>
                                                    @if($koneks !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                                <td>Laporan Evaluasi Diri - Profil Unit Pengelola Program Studi</td>
                                                    @if($profil !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                            </tr>
                                        <?php
                                            $no ++
                                        ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td>Laporan Evaluasi Diri - Kriteria 1</td>
                                                    @if($LEDC1 !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                                <td>Laporan Evaluasi Diri - Kriteria 2</td>
                                                    @if($LEDC2 !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                            </tr>
                                        <?php
                                            $no ++
                                        ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td>Laporan Evaluasi Diri - Kriteria 3</td>
                                                    @if($LEDC3 !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                                <td>Laporan Evaluasi Diri - Kriteria 4</td>
                                                    @if($LEDC4 !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                            </tr>
                                        <?php
                                            $no ++
                                        ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td>Laporan Evaluasi Diri - Kriteria 5</td>
                                                    @if($LEDC5 !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                                <td>Laporan Evaluasi Diri - Kriteria 6</td>
                                                    @if($LEDC6 !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                            </tr>
                                        <?php
                                            $no ++
                                        ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td>Laporan Evaluasi Diri - Kriteria 7</td>
                                                    @if($LEDC7 !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                                <td>Laporan Evaluasi Diri - Kriteria 8</td>
                                                    @if($LEDC8 !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                            </tr>
                                        <?php
                                            $no ++
                                        ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td>Laporan Evaluasi Diri - Kriteria 9</td>
                                                    @if($LEDC9 !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                                <td>Laporan Evaluasi Diri - Analisis dan Penetapan Program UPPS</td>
                                                    @if($analisis !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                            </tr>
                                        <?php
                                            $no ++
                                        ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td>Laporan Evaluasi Diri - Penutup</td>
                                                    @if($penutup !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- #END# Task Info 1 -->

                <!-- Task Info 2 -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>TASK INFOS LAPORAN KINERJA PROGRAM STUDI</h2>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover dashboard-task-infos">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Task</th>
                                                <th>Status</th>
                                                <th>Task</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $no=1
                                        ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td>Laporan Kinerja Program Studi - Cover</td>
                                                    @if($coverlkps !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                                <td>Laporan Kinerja Program Studi - Tata Pamong, Tata Kelola, dan Kerjasama</td>
                                                    @if($LKPSC1 !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                            </tr>
                                        <?php
                                            $no ++
                                        ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td>Laporan Kinerja Program Studi - Mahasiswa</td>
                                                    @if($LKPSC2 !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                                <td>Laporan Kinerja Program Studi - Sumber Daya Manusia</td>
                                            </tr>
                                        <?php
                                            $no ++
                                        ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td>Laporan Kinerja Program Studi - Keuangan, Sarana, dan Prasarana</td>
                                                    @if($LKPSC4 !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                                <td>Laporan Kinerja Program Studi - Pendidikan</td>
                                                    @if($LKPSC5 !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                            </tr>
                                        <?php
                                            $no ++
                                        ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td>Laporan Kinerja Program Studi - Penelitian</td>
                                                    @if($LKPSC6 !=null)
                                                        <td><span class="label bg-green">Complete</span></td>
                                                    @else
                                                        <td><span class="label bg-red">Not Complete</span></td>
                                                    @endif
                                                <td>Laporan Kinerja Program Studi - Pengabdian Kepada Masyarakat</td>
                                            </tr>
                                        <?php
                                            $no ++
                                        ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td>Laporan Kinerja Program Studi - Luaran dan Capaian Tridharma</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- #END# Task Info -->
            </div>
        </div>
    </section>
      </div>
@endsection