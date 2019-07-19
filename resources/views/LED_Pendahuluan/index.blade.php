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
                            <h2>PENDAHULUAN</h2>
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
                                    $cek=DB::table('led_pendahuluan')->where('id_prodi',$_GET['id'])->first();
                                    // dd($cek);
                                ?>
                                <!-- UPDATE -->
                                <form id="wizard_with_validation" method="POST">
                                {{ csrf_field() }}
                                    <h3>Pendahuluan</h3>    
                                    <fieldset>
                                        <div class="row justify-content-end">
                                            <p class="justify">Evaluasi diri mencakup keseluruhan evaluasi diri UPPS yang bertanggung jawab
                                            menyelenggarakan program studi yang diakreditasi (mengacu kepada PP nomor 4
                                            tahun 2014, Struktur Organisasi dan Tata Kerja masing-masing Perguruan Tinggi).</p>
                                            <p class="justify">Bagian ini berisi deskripsi yang memuat dasar penyusunan, tim penyusun, dan
                                            mekanisme kerja penyusunan LED</p>
                                            <div>
                                                <input type="hidden" name="id" value="{{ $cek->id}}"> <br/>
                                                <textarea rows="10" cols="800" name="desc" class="ckeditor" id="ckedtor">
                                                    <?php echo $cek->description?>
                                                </textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                    
                                    <h3>Dasar Penyusunan</h3>
                                    <fieldset>
                                        <div class="row justify-content-end">
                                            <p class="justify">Bagian ini berisi kebijakan tentang penyusunan evaluasi diri di UPPS, termasuk
                                            tujuan dilakukannya penyusunan LED. Pada bagian ini, UPPS harus mampu
                                            menunjukkan keterkaitan LED dengan rencana pengembangan UPPS.</p>
                                            <div>
                                                <textarea rows="10" cols="800" name="dp" class="ckeditor" id="ckedtor">
                                                    <?php echo $cek->dasar_penyusunan?>
                                                </textarea>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <h3>Tim penyusun dan tanggung jawabnya</h3>
                                    <fieldset>
                                        <div class="row justify-content-end">
                                            <p class="justify">Pada bagian ini UPPS harus dapat menunjukkan bukti formal tim penyusun
                                            LED beserta deskripsi tugasnya, termasuk keterlibatan berbagai unit, para
                                            pemangku kepentingan internal (mahasiswa, pimpinan, dosen, dan tenaga
                                            kependidikan) dan eksternal (lulusan, pengguna, dan mitra) dalam penyusunan
                                            LED. </p>
                                            <div>
                                                <textarea rows="10" cols="800" name="tim" class="ckeditor" id="ckedtor">
                                                    <?php echo $cek->tim_penyusun?>
                                                </textarea>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <?php
                                        $cek1=DB::table('komentar')->where('id_pendahuluan',$_GET['upps'])->first();
                                    ?>
                                    @if($cek1 != null)
                                        <h3>Mekanisme kerja penyusunan LED</h3>
                                            <fieldset>
                                            <div class="row justify-content-end">
                                                <p class="justify">Bagian ini harus memuat mekanisme pengumpulan data dan informasi,
                                                verifikasi dan validasi data, pengecekan konsistensi data, analisis data,
                                                identifikasi akar masalah dan penetapan strategi pengembangan yang
                                                mengacu pada rencana pengembangan UPPS dan program studi yang
                                                diakreditasi, yang disertai dengan jadwal kerja tim yang jelas.</p>
                                                <div>
                                                    <textarea rows="10" cols="800" name="mkp" class="ckeditor" id="ckedtor">
                                                        <?php echo $cek->mekanisme?>
                                                    </textarea>
                                                </div>
                                            </div>
                                                <?php
                                                    $cek1=DB::table('komentar')->where('id_pendahuluan',$_GET['upps'])->first();
                                                ?>
                                                <div class="modal-footer">
                                                    <input name="komentar" value="<?php echo $cek1->ket?>" placeholder="Komentar" type="text" class="form-control form-control-sm col-sm-6" id="pt">
                                    @else
                                        <form  action="{{ url('komentarpendahuluan') }}" id="wizard_with_validation" method="POST">
                                            <h3>Mekanisme kerja penyusunan LED</h3>
                                            <fieldset>
                                                <div class="row justify-content-end">
                                                    <p class="justify">Bagian ini harus memuat mekanisme pengumpulan data dan informasi,
                                                    verifikasi dan validasi data, pengecekan konsistensi data, analisis data,
                                                    identifikasi akar masalah dan penetapan strategi pengembangan yang
                                                    mengacu pada rencana pengembangan UPPS dan program studi yang
                                                    diakreditasi, yang disertai dengan jadwal kerja tim yang jelas.</p>
                                                    <div>
                                                        <textarea rows="10" cols="800" name="mkp" class="ckeditor" id="ckedtor">
                                                            <?php echo $cek->mekanisme?>
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" name="id_pendahuluan" value="{{$id_pendahuluan}}"/>
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
                                    $cek=DB::table('led_pendahuluan')->where('id_prodi',$_GET['id'])->first();
                                    // dd($cek);
                                ?>
                                <!-- UPDATE -->
                                <form action="{{ url('updatependahuluan') }}" id="wizard_with_validation" method="POST">
                                {{ csrf_field() }}
                                    <h3>Pendahuluan</h3>    
                                    <fieldset>
                                        <div class="row justify-content-end">
                                            <p class="justify">Evaluasi diri mencakup keseluruhan evaluasi diri UPPS yang bertanggung jawab
                                            menyelenggarakan program studi yang diakreditasi (mengacu kepada PP nomor 4
                                            tahun 2014, Struktur Organisasi dan Tata Kerja masing-masing Perguruan Tinggi).</p>
                                            <p class="justify">Bagian ini berisi deskripsi yang memuat dasar penyusunan, tim penyusun, dan
                                            mekanisme kerja penyusunan LED</p>
                                            <div>
                                                <input type="hidden" name="id" value="{{ $cek->id}}"> <br/>
                                                <textarea rows="10" cols="800" name="desc" class="ckeditor" id="ckedtor">
                                                    <?php echo $cek->description?>
                                                </textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                    
                                    <h3>Dasar Penyusunan</h3>
                                    <fieldset>
                                        <div class="row justify-content-end">
                                            <p class="justify">Bagian ini berisi kebijakan tentang penyusunan evaluasi diri di UPPS, termasuk
                                            tujuan dilakukannya penyusunan LED. Pada bagian ini, UPPS harus mampu
                                            menunjukkan keterkaitan LED dengan rencana pengembangan UPPS.</p>
                                            <div>
                                                <textarea rows="10" cols="800" name="dp" class="ckeditor" id="ckedtor">
                                                    <?php echo $cek->dasar_penyusunan?>
                                                </textarea>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <h3>Tim penyusun dan tanggung jawabnya</h3>
                                    <fieldset>
                                        <div class="row justify-content-end">
                                            <p class="justify">Pada bagian ini UPPS harus dapat menunjukkan bukti formal tim penyusun
                                            LED beserta deskripsi tugasnya, termasuk keterlibatan berbagai unit, para
                                            pemangku kepentingan internal (mahasiswa, pimpinan, dosen, dan tenaga
                                            kependidikan) dan eksternal (lulusan, pengguna, dan mitra) dalam penyusunan
                                            LED. </p>
                                            <div>
                                                <textarea rows="10" cols="800" name="tim" class="ckeditor" id="ckedtor">
                                                    <?php echo $cek->tim_penyusun?>
                                                </textarea>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <h3>Mekanisme kerja penyusunan LED</h3>
                                    <fieldset>
                                        <div class="row justify-content-end">
                                            <p class="justify">Bagian ini harus memuat mekanisme pengumpulan data dan informasi,
                                            verifikasi dan validasi data, pengecekan konsistensi data, analisis data,
                                            identifikasi akar masalah dan penetapan strategi pengembangan yang
                                            mengacu pada rencana pengembangan UPPS dan program studi yang
                                            diakreditasi, yang disertai dengan jadwal kerja tim yang jelas.</p>
                                            <div>
                                                <textarea rows="10" cols="800" name="mkp" class="ckeditor" id="ckedtor">
                                                    <?php echo $cek->mekanisme?>
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
                                                            <form action="{{ route('pendahuluan.destroy', $cek->id) }}" method="POST">
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
                                            <div>
                                        <!-- #END DELETE -->
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