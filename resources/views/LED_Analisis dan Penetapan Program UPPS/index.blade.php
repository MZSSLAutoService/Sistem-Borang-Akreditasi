@extends('layout.basemenu')
@section('content')
  <!-- Main content -->
  <section class="content">
        <div class="container-fluid">
            <div class="block-header">
               <!-- Advanced Form Example With Validation -->
               <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>ANALISIS DAN PENETAPAN PROGRAM UPPS TERKAIT PROGRAM STUDI YANG DIAKREDITASI</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    @if(Session::get('id_role')=="4")
                        <div class="body">
                            <?php
                                // dd($_GET['id']);
                                $cek=DB::table('led_analisis_upps')->where('id_prodi',$_GET['id'])->first();
                                // dd($cek);
                            ?>
                            <!-- UPDATE -->
                            <form id="wizard_with_validation" method="POST">
                            {{ csrf_field() }}
                                <h3>Analisis capaian kinerja</h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Cakupan aspek antar kriteria yang dievaluasi: kelengkapan, keluasan,
                                        kedalaman, ketepatan, dan ketajaman analisis untuk mengidentifikasi akar
                                        masalah yang didukung oleh data/informasi yang andal dan memadai serta
                                        konsisten dengan hasil analisis yang disampaikan pada setiap kriteria di atas.</p>
                                        <br>
                                        <div>
                                            <input type="hidden" name="id" value="{{ $cek->id}}"> <br/>
                                            <textarea rows="10" cols="800" name="analisisck" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->analisis_capaian?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Analisis SWOT atau analisis lain yang relevan</h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Ketepatan mengidentifikasi kekuatan atau faktor pendorong, kelemahan atau
                                        faktor penghambat, peluang dan ancaman yang dihadapi dalam
                                        keterkaitannya dengan hasil analisis capaian kinerja. Hasil identifikasi
                                        tersebut dianalisis untuk menentukan posisi UPPS dan program studi yang
                                        diakreditasi serta menjadi dasar untuk mengembangkan alternatif solusi dan program pengembangan.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="analisisswot" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->analisis_swot?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Strategi pengembangan</h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Kemampuan UPPS dalam menetapkan strategi dan program
                                        pengembangan berdasarkan prioritas sesuai dengan kapasitas, kebutuhan,
                                        dan VMT UPPS secara keseluruhan, terutama pengembangan program studi yang diusulkan akreditasinya.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="strategi" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->strategi?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                        <?php
                            $cek1=DB::table('komentar')->where('id_analisis',$_GET['upps'])->first();
                        ?>
                        @if($cek1 != null)
                            <h3>Program Keberlanjutan</h3>    
                                <fieldset>
                                <div class="row justify-content-end">
                                    <p class="justify">Mekanisme penjaminan keberlangsungan program pengembangan dan
                                        good practices yang dihasilkan, serta jaminan ketersediaan sumberdaya
                                        untuk mendukung pelaksanaan program termasuk rencana penjaminan mutu yang berkelanjutan.</p>
                                    <br>
                                    <div>
                                        <textarea rows="10" cols="800" name="desc" class="ckeditor" id="ckedtor" required>
                                            <?php echo $cek->program_lanjutan?>
                                        </textarea>
                                    </div>
                                </div>
                                    <?php
                                        $cek1=DB::table('komentar')->where('id_analisis',$_GET['upps'])->first();
                                    ?>
                                    <div class="modal-footer">
                                        <input name="komentar" value="<?php echo $cek1->ket?>" placeholder="Komentar" type="text" class="form-control form-control-sm col-sm-6" id="pt">
                        @else
                            <form  action="{{ url('komentarpendahuluan') }}" id="wizard_with_validation" method="POST">
                            <h3>Program Keberlanjutan</h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Mekanisme penjaminan keberlangsungan program pengembangan dan
                                            good practices yang dihasilkan, serta jaminan ketersediaan sumberdaya
                                            untuk mendukung pelaksanaan program termasuk rencana penjaminan mutu yang berkelanjutan.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="mkp" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->program_lanjutan?>
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="id_analisis" value="{{$id_analisis}}"/>
                                        <input name="komentar" placeholder="Komentar" type="text" class="form-control form-control-sm col-sm-6" id="pt">
                                        <button type="submit" class="btn btn-primary waves-effect" name="simpan" value="Simpan">SAVE</button>
                            </form>
                        @endif
                            <!-- #END UPDATE -->
                                        <button type="reset" class="btn btn-secondary waves-effect" name="batal" value="Batal">CANCEL</button>
                                    <div>
                                    <!-- #END DELETE -->
                                </fieldset>
                        </div>
                    @else
                        <div class="body">
                            <?php
                                // dd($_GET['id']);
                                $cek=DB::table('led_analisis_upps')->where('id_prodi',$_GET['id'])->first();
                                // dd($cek);
                            ?>
                            <!-- UPDATE -->
                            <form action="{{ url('updateanalisis') }}" id="wizard_with_validation" method="POST">
                            {{ csrf_field() }}
                                <h3>Analisis capaian kinerja</h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Cakupan aspek antar kriteria yang dievaluasi: kelengkapan, keluasan,
                                        kedalaman, ketepatan, dan ketajaman analisis untuk mengidentifikasi akar
                                        masalah yang didukung oleh data/informasi yang andal dan memadai serta
                                        konsisten dengan hasil analisis yang disampaikan pada setiap kriteria di atas.</p>
                                        <br>
                                        <div>
                                            <input type="hidden" name="id" value="{{ $cek->id}}"> <br/>
                                            <textarea rows="10" cols="800" name="analisisck" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->analisis_capaian?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Analisis SWOT atau analisis lain yang relevan</h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Ketepatan mengidentifikasi kekuatan atau faktor pendorong, kelemahan atau
                                        faktor penghambat, peluang dan ancaman yang dihadapi dalam
                                        keterkaitannya dengan hasil analisis capaian kinerja. Hasil identifikasi
                                        tersebut dianalisis untuk menentukan posisi UPPS dan program studi yang
                                        diakreditasi serta menjadi dasar untuk mengembangkan alternatif solusi dan program pengembangan.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="analisisswot" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->analisis_swot?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Strategi pengembangan</h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Kemampuan UPPS dalam menetapkan strategi dan program
                                        pengembangan berdasarkan prioritas sesuai dengan kapasitas, kebutuhan,
                                        dan VMT UPPS secara keseluruhan, terutama pengembangan program studi yang diusulkan akreditasinya.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="strategi" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->strategi?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Program Keberlanjutan</h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Mekanisme penjaminan keberlangsungan program pengembangan dan
                                        good practices yang dihasilkan, serta jaminan ketersediaan sumberdaya
                                        untuk mendukung pelaksanaan program termasuk rencana penjaminan mutu yang berkelanjutan.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="programker" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->program_lanjutan?>
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary waves-effect" name="update" value="Update">UPDATE</button>
                            </form>
                            <!-- #END UPDATE -->

                                        <!-- <a href ="#" class ="btn btn-sm btn-primary" data-target="#modalHapus" data-toggle="modal"> <span class ="glyphicon glyphicon-plus"></span></a> -->
                                        <a href="#" class="btn btn-danger" data-target="#modalDelete" data-toggle="modal">DELETE</a>
                                        <!-- Modal Popup --> 
                                        <div id="modalDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" style="text-align:center;">Apakah anda yakin menghapus data ini?</h4>
                                                    </div>
                                                    
                                                    <div class="modal-body">
                                                    <form action="{{ route('analisis.destroy', $cek->id) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        @method('DELETE')
                                                            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                                                                <!-- <input type="hidden" name="id" value="{{ $cek->id}}"> <br/> -->
                                                                <button type="submit" class="btn btn-danger waves-effect" name="simpan" value="Delete">DELETE</button>
                                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">CLOSE</button>
                                                            </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="reset" class="btn btn-secondary waves-effect" name="batal" value="Batal">CANCEL</button>
                                    </div>
                                </fieldset>
                        </div>
                    @endif

                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
            </div>
    </section>
@endsection