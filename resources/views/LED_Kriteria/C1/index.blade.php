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
                            <h2>VISI, MISI, TUJUAN, DAN STRATEGI</h2>
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
                                $cek=DB::table('led_c1')->where('id_prodi',$_GET['id'])->first();
                                // dd($cek);
                            ?>
                            <!-- UPDATE -->
                            <form id="wizard_with_validation" method="POST">
                            {{ csrf_field() }}
                                <h3>Latar Belakang</h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Bagian ini menjelaskan latar belakang, tujuan, rasional, dan mekanisme
                                        penetapan visi, misi, tujuan, dan strategi (VMTS) UPPS yang memayungi
                                        visi keilmuan program studi yang diakreditasi, serta rencana
                                        strategisnya.</p>
                                        <br>
                                        <div>
                                            <input type="hidden" name="id" value="{{ $cek->id}}"> <br/>
                                            <textarea rows="10" cols="800" name="desc" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->description?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <h3>Kebijakan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dokumen formal kebijakan yang mencakup: penyusunan,
                                        penetapan, evaluasi, sosialisasi, dan implementasi VMTS ke dalam
                                        program pengembangan UPPS dan program studi.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="kebijakan" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->kebijakan?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Strategi Pencapaian VMTS</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Bagian ini menjelaskan secara komprehensif strategi pencapaian VMTS
                                        di UPPS. Pada bagian ini juga harus diuraikan sumber daya yang
                                        dialokasikan untuk mencapai visi yang telah ditetapkan serta mekanisme
                                        kontrol pencapaiannya.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="strategi" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->stp_vmts?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Indikator Kinerja Utama</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">UPPS memiliki rencana pengembangan yang memuat indikator kinerja
                                        utama (IKU) dan targetnya untuk mengukur ketercapaian tujuan strategis
                                        yang telah ditetapkan.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="iku" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->iku?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Indikator Kinerja Tambahan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Indikator kinerja tambahan adalah indikator lain terkait VMTS yang
                                        secara spesifik ditetapkan oleh UPPS yang dapat berupa indikator
                                        kinerja turunan dari butir-butir IKU yang ada. Data indikator kinerja
                                        tambahan yang sahih harus diukur, dimonitor, dikaji, dan dianalisis untuk
                                        perbaikan berkelanjutan.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="ikt" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->ikt?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Evaluasi Capaian VMTS</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dan analisis keberhasilan dan/atau ketidakberhasilan
                                        pencapaian VMTS yang telah ditetapkan. Capaian kinerja harus diukur
                                        dengan metoda yang tepat, dan hasilnya dianalisis serta dievaluasi.
                                        Analisis dan evaluasi terhadap capaian kinerja harus mencakup
                                        identifikasi akar masalah, faktor pendukung keberhasilan dan faktor
                                        penghambat ketercapaian VMTS di UPPS, termasuk analisis dan
                                        evaluasi yang spesifik terkait program studi yang diakreditasi.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="eval_vmts" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->eval_vmts?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                        <?php
                            $cek1=DB::table('komentar')->where('id_c1',$_GET['upps'])->first();
                        ?>
                        @if($cek1 != null)
                            <h3>Kesimpulan Hasil Evaluasi Ketercapaian VMTS dan Tindaklanjut</h3>
                                <fieldset>
                                <div class="row justify-content-end">
                                    <p class="justify">Berisi ringkasan dari: pemosisian, masalah dan akar masalah, serta
                                        rencana perbaikan dan pengembangan UPPS dan program studi.</p>
                                    <br>
                                    <div>
                                        <textarea rows="10" cols="800" name="desc" class="ckeditor" id="ckedtor" required>
                                            <?php echo $cek->simpulan_vmts?>
                                        </textarea>
                                    </div>
                                </div>
                                    <?php
                                        $cek1=DB::table('komentar')->where('id_c1',$_GET['upps'])->first();
                                    ?>
                                    <div class="modal-footer">
                                        <input name="komentar" value="<?php echo $cek1->ket?>" placeholder="Komentar" type="text" class="form-control form-control-sm col-sm-6" id="pt">
                        @else
                            <form  action="{{ url('komentarpendahuluan') }}" id="wizard_with_validation" method="POST">
                                <h3>Kesimpulan Hasil Evaluasi Ketercapaian VMTS dan Tindaklanjut</h3>
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi ringkasan dari: pemosisian, masalah dan akar masalah, serta
                                        rencana perbaikan dan pengembangan UPPS dan program studi.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="mkp" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->simpulan_vmts?>
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="id_c1" value="{{$id_c1}}"/>
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
                                $cek=DB::table('led_c1')->where('id_prodi',$_GET['id'])->first();
                                // dd($cek);
                            ?>
                            <!-- UPDATE -->
                            <form action="{{ url('updatec1') }}" id="wizard_with_validation" method="POST">
                            {{ csrf_field() }}
                                <h3>Latar Belakang</h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Bagian ini menjelaskan latar belakang, tujuan, rasional, dan mekanisme
                                        penetapan visi, misi, tujuan, dan strategi (VMTS) UPPS yang memayungi
                                        visi keilmuan program studi yang diakreditasi, serta rencana
                                        strategisnya.</p>
                                        <br>
                                        <div>
                                            <input type="hidden" name="id" value="{{ $cek->id}}"> <br/>
                                            <textarea rows="10" cols="800" name="desc" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->description?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <h3>Kebijakan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dokumen formal kebijakan yang mencakup: penyusunan,
                                        penetapan, evaluasi, sosialisasi, dan implementasi VMTS ke dalam
                                        program pengembangan UPPS dan program studi.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="kebijakan" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->kebijakan?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Strategi Pencapaian VMTS</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Bagian ini menjelaskan secara komprehensif strategi pencapaian VMTS
                                        di UPPS. Pada bagian ini juga harus diuraikan sumber daya yang
                                        dialokasikan untuk mencapai visi yang telah ditetapkan serta mekanisme
                                        kontrol pencapaiannya.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="strategi" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->stp_vmts?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Indikator Kinerja Utama</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">UPPS memiliki rencana pengembangan yang memuat indikator kinerja
                                        utama (IKU) dan targetnya untuk mengukur ketercapaian tujuan strategis
                                        yang telah ditetapkan.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="iku" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->iku?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Indikator Kinerja Tambahan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Indikator kinerja tambahan adalah indikator lain terkait VMTS yang
                                        secara spesifik ditetapkan oleh UPPS yang dapat berupa indikator
                                        kinerja turunan dari butir-butir IKU yang ada. Data indikator kinerja
                                        tambahan yang sahih harus diukur, dimonitor, dikaji, dan dianalisis untuk
                                        perbaikan berkelanjutan.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="ikt" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->ikt?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Evaluasi Capaian VMTS</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dan analisis keberhasilan dan/atau ketidakberhasilan
                                        pencapaian VMTS yang telah ditetapkan. Capaian kinerja harus diukur
                                        dengan metoda yang tepat, dan hasilnya dianalisis serta dievaluasi.
                                        Analisis dan evaluasi terhadap capaian kinerja harus mencakup
                                        identifikasi akar masalah, faktor pendukung keberhasilan dan faktor
                                        penghambat ketercapaian VMTS di UPPS, termasuk analisis dan
                                        evaluasi yang spesifik terkait program studi yang diakreditasi.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="eval_vmts" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->eval_vmts?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Kesimpulan Hasil Evaluasi Ketercapaian VMTS dan Tindaklanjut</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi ringkasan dari: pemosisian, masalah dan akar masalah, serta
                                        rencana perbaikan dan pengembangan UPPS dan program studi.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="simpulan_vmts" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->simpulan_vmts?>
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
                                                        <form action="{{ route('c1.destroy', $cek->id) }}" method="POST">
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