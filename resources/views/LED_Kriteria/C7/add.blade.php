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
                            <h2>PENELITIAN</h2>
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
                            <form action="{{ url('c7Post') }}" id="wizard_with_validation" method="POST">
                                {{ csrf_field() }}
                                <h3>Latar Belakang</h3>    
                                    @if(\Session::has('alert-success'))
                                        <div class="alert alert-success">
                                            <div>{{Session::get('alert-success')}}</div>
                                        </div>
                                    @endif   
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Bagian ini mencakup latar belakang, tujuan, dan rasional strategi
                                        pencapaian standar penelitian yang mencakup: perencanaan,
                                        pelaksanaan, dan pelaporan penelitian yang didasarkan atas analisis
                                        internal dan eksternal, serta posisi dan keunggulan pada bidang
                                        keilmuan program studi.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="desc" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <h3>Kebijakan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dokumen formal kebijakan dan standar penelitian
                                        mahasiswa dan penelitian dosen yang melibatkan mahasiswa yang
                                        sesuai dengan peta jalan penelitian perguruan tinggi.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="kebijakan" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Strategi Pencapaian Standar</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Bagian ini mencakup strategi UPPS dalam pencapaian standar yang
                                        sudah ditetapkan oleh perguruan tinggi terkait penelitian di UPPS.
                                        Pada bagian ini juga harus diuraikan bagaimana UPPS mengalokasikan
                                        sumber daya untuk mencapai standar yang telah ditetapkan serta
                                        mekanisme kontrol pencapaiannya.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="strategi" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Indikator Kinerja Utama</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Tampilkan data penelitian dengan representasi yang komprehensif serta
                                        simpulkan kecenderungan yang terjadi, seperti kurva tren, rasio, proporsi yang meliputi:</p>
                                        <ol type="a">
                                            <li>Keterlibatan mahasiswa pada kegiatan penelitian DTPS dalam 3 tahun terakhir (Tabel 6.a. LKPS).</li>
                                            <li>Kegiatan penelitian DTPS yang digunakan sebagai rujukan tema tesis atau disertasi mahasiswa dalam 3 tahun terakhir (Tabel 6.b. LKPS). Kaitkan dengan agenda penelitian dosen yang merupakan penjabaran dari peta jalan penelitian UPPS. Data dan analisis disampaikan oleh program studi pada program magister/magister terapan/doktor/doktor terapan.</li>
                                            <li>Pemanfaatan hasil penelitian DTPS dalam pembelajaran yang telah dilakukan dalam 3 tahun terakhir (Tabel 5.b. LKPS). Kaitkan dengan agenda penelitian dosen yang merupakan penjabaran dari peta jalan penelitian UPPS dan mendukung capaian pembelajaran.</li>
                                        </ol>    
                                        <p class="justify">Relevansi penelitian DTPS di UPPS mencakup unsur-unsur sebagai berikut:</p>                                            
                                        <ol type="a">
                                            <li>Memiliki peta jalan yang memayungi tema penelitian dosen dan mahasiswa serta pengembangan keilmuan program studi.</li>
                                            <li>Dosen dan mahasiswa melaksanakan penelitian sesuai dengan peta jalan penelitian.</li>
                                            <li>Melakukan evaluasi kesesuaian penelitian dosen dan mahasiswa dengan peta jalan</li>
                                            <li>Menggunakan hasil evaluasi untuk perbaikan relevansi penelitian dan pengembangan keilmuan program studi.</li>
                                        </ol>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="iku" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Indikator Kinerja Tambahan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Indikator kinerja tambahan adalah indikator proses penelitian lain yang
                                        ditetapkan oleh masing-masing perguruan tinggi melampaui SN-DIKTI.
                                        Data indikator kinerja tambahan yang sahih harus diukur, dimonitor, dikaji dan dianalisis untuk perbaikan berkelanjutan.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="ikt" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Evaluasi Capaian Kinerja</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dan analisi keberhasilan dan/atau ketidakberhasilan
                                        pencapaian standar yang telah ditetapkan. Capaian kinerja harus diukur
                                        dengan metoda yang tepat, dan hasilnya dianalisis serta dievaluasi.
                                        Analisis terhadap capaian kinerja harus mencakup identifikasi akar
                                        masalah, faktor pendukung keberhasilan dan faktor penghambat
                                        ketercapaian standar, dan deskripsi singkat tindak lanjut yang akan dilakukan UPPS</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="eval" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Penjaminan Mutu Penelitian</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dan bukti sahih tentang implementasi sistem penjaminan
                                        mutu di UPPS yang sesuai dengan standar yang ditetapkan perguruan
                                        tinggi terkait penelitian mengikuti siklus penetapan, pelaksanaan,
                                        evaluasi, pengendalian, dan perbaikan berkelanjutan (PPEPP).</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="pmpl" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Kepuasan Pengguna</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <ol type="a">
                                            <li>Deskripsi sistem untuk mengukur kepuasan peneliti dan mitra dalam proses pelaksanaan penelitian, termasuk kejelasan instrumen yang digunakan, pelaksanaan, perekaman, dan analisis datanya.</li>
                                            <li>Ketersediaan bukti yang sahih tentang hasil pengukuran kepuasan peneliti dan mitra yang dilaksanakan secara konsisten, dan ditindaklanjuti secara berkala dan tersistem.</li>
                                        </ol>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="kpg" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Simpulan Hasil Evaluasi dan Tindak lanjut</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi ringkasan dari: pemosisian, masalah dan akar masalah, serta
                                        rencana perbaikan dan pengembangan penelitian oleh UPPS, khususnya yang terkait program studi yang diakreditasi.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="simpulan" class="ckeditor" id="ckedtor"></textarea>
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