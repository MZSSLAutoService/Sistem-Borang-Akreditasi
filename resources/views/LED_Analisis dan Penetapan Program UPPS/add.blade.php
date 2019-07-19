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
                            <div class="body">
                                <form  action="{{ url('analisisPost') }}" id="wizard_with_validation" method="POST">
                                {{ csrf_field() }}
                                    <h3>Analisis capaian kinerja</h3>    
                                    @if(\Session::has('alert-success'))
                                        <div class="alert alert-success">
                                            <div>{{Session::get('alert-success')}}</div>
                                        </div>
                                    @endif
                                    <fieldset>
                                        <div class="row justify-content-end">
                                            <p class="justify">Cakupan aspek antar kriteria yang dievaluasi: kelengkapan, keluasan,
                                            kedalaman, ketepatan, dan ketajaman analisis untuk mengidentifikasi akar
                                            masalah yang didukung oleh data/informasi yang andal dan memadai serta
                                            konsisten dengan hasil analisis yang disampaikan pada setiap kriteria di atas.</p>
                                            <br>
                                            <div>
                                                <textarea rows="10" cols="800" name="analisisck" class="ckeditor" id="ckedtor"></textarea>
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
                                                <textarea rows="10" cols="800" name="analisisswot" class="ckeditor" id="ckedtor"></textarea>
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
                                                <textarea rows="10" cols="800" name="strategi" class="ckeditor" id="ckedtor"></textarea>
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
                                                <textarea rows="10" cols="800" name="programker" class="ckeditor" id="ckedtor"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary waves-effect" name="simpan" value="Simpan">SAVE</button>
                                            <button type="reset" class="btn btn-danger waves-effect" name="batal" value="Batal">CANCEL</button>
                                        <div>
                                    </fieldset>
                                </form>
                            <div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
            </div>
    </section>
@endsection