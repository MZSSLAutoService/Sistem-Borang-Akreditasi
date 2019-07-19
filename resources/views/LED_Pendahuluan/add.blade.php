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
                        <div class="body">
                            <form  action="{{ url('LEDPendahuluanPost') }}" id="wizard_with_validation" method="POST">
                                {{ csrf_field() }}
                                <h3>Pendahuluan</h3>    
                                @if(\Session::has('alert-success'))
                                    <div class="alert alert-success">
                                        <div>{{Session::get('alert-success')}}</div>
                                    </div>
                                @endif
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Evaluasi diri mencakup keseluruhan evaluasi diri UPPS yang bertanggung jawab
                                        menyelenggarakan program studi yang diakreditasi (mengacu kepada PP nomor 4
                                        tahun 2014, Struktur Organisasi dan Tata Kerja masing-masing Perguruan Tinggi).</p>
                                        <p class="justify">Bagian ini berisi deskripsi yang memuat dasar penyusunan, tim penyusun, dan
                                        mekanisme kerja penyusunan LED</p>
                                        <div>
                                            <textarea rows="10" cols="800" name="desc" class="ckeditor" id="ckedtor"></textarea>
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
                                            <textarea rows="10" cols="800" name="dp" class="ckeditor" id="ckedtor"></textarea>
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
                                            <textarea rows="10" cols="800" name="tim" class="ckeditor" id="ckedtor"></textarea>
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
                                            <textarea rows="10" cols="800" name="mkp" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary waves-effect" name="simpan" value="Simpan">SAVE</button>
                                        <button type="reset" class="btn btn-danger waves-effect" name="batal" value="Batal">CANCEL</button>
                                    <div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
            </div>
    </section>
@endsection