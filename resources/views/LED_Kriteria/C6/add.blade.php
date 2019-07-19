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
                            <h2>PENDIDIKAN</h2>
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
                            <form action="{{ url('c6Post') }}" id="wizard_with_validation" method="POST">
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
                                        pencapaian standar pendidikan yang mencakup kurikulum,
                                        pembelajaran, integrasi kegiatan penelitian dan PkM dalam
                                        pembelajaran, dan suasana akademik yang didasarkan atas analisis
                                        internal dan eksternal, serta posisi dan daya saing program studi.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="desc" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <h3>Kebijakan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dokumen formal kebijakan, standar, dan panduan
                                        akademik yang memuat tujuan dan sasaran pendidikan, strategi,
                                        metode, dan instrumen untuk mengukur efektivitasnya.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="kebijakan" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Strategi Pencapaian Standar</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Bagian ini mencakup strategi UPPS dan program studi dalam
                                        pencapaian standar yang sudah ditetapkan oleh perguruan tinggi terkait
                                        pendidikan yang mencakup isi pembelajaran (kurikulum), proses
                                        pembelajaran (pembelajaran, suasana akademik, integrasi penelitian
                                        dan PkM ke dalam pembelajaran), monitoring dan evaluasi
                                        pembelajaran, serta penilaian pembelajaran. Pada bagian ini juga harus
                                        diuraikan bagaimana UPPS mengalokasikan sumber daya untuk
                                        mencapai standar yang telah ditetapkan dan mekanisme kontrol
                                        pencapaiannya.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="strategi" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Indikator Kinerja Utama</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <ol type="a">
                                            <li>Kurikulum Program Studi yang diakrediasi</li>
                                                <ol>
                                                    <li>Keterlibatan pemangku kepentingan dalam proses evaluasi. Evaluasi dan pemutakhiran kurikulum melibatkan pemangku kepentingan internal dan eksternal, serta direview oleh pakar bidang ilmu program studinya.</li>
                                                    <li>Dokumen kurikulum.</li>
                                                        <ol type="a">
                                                            <li>Kesesuaian capaian pembelajaran dengan profil lulusan dan jenjang KKNI/SKKNI yang sesuai.</li>
                                                            <li>Ketepatan struktur kurikulum dalam pembentukan capaian pembelajaran.</li>
                                                            <li>Ketersediaan dokumen pemetaan capaian pembelajaran, bahan kajian dan matakuliah (atau dokumen sejenis lainnya).</li>
                                                        </ol>
                                                    <li>Rata-rata dana PkM DTPS/tahun dalam 3 tahun terakhir (Tabel 4 LKPS).</li>
                                                    <li>Realisasi investasi (SDM, sarana dan prasarana) dalam 3 tahun terakhir (Tabel 4 LKPS). </li>
                                                </ol>
                                                <br>
                                                <div>
                                                    <textarea rows="10" cols="800" name="iku1" class="ckeditor" id="ckedtor"></textarea>
                                                </div>
                                            <li>Pembelajaran</li>
                                                <ol>
                                                    <li>Karakteristik proses pembelajaran terdiri atas sifat interaktif,
                                                        holistik, integratif, saintifik, kontekstual, tematik, efektif,
                                                        kolaboratif, dan berpusat pada mahasiswa. Gambarkan bentuk
                                                        karakteristik pembelajaran yang diterapkan di program studi yang
                                                        diakreditasi sesuai dengan rumusan capaian pembelajaran.</li>
                                                    <li>Ketersediaan dokumen rencana pembelajaran semester (RPS)
                                                        dengan kedalaman dan keluasan sesuai dengan capaian
                                                        pembelajaran lulusan.</li>
                                                        <p class="justify">Tampilkan data pendidikan dengan teknik representasi yang
                                                            relevan (misalnya: kurva tren, rasio, dan proporsi) dan
                                                            komprehensif serta simpulkan kecenderungan yang terjadi. Data
                                                            dan analisis yang disampaikan meliputi:</p>
                                                            <ol type="a">
                                                                <li>Struktur program dan beban belajar mahasiswa untuk mencapai capaian pembelajaran dari (Tabel 5.a LKPS).</li>
                                                                <li>Bentuk pembelajaran yang dilaksanakan dalam bentuk praktikum, praktik, atau praktik lapangan dari (Tabel 5.a LKPS).</li>
                                                                <li>Konversi bobot kredit mata kuliah ke jam praktikum/ praktik/praktik lapangan dari (Tabel 5.a LKPS). Data dan analisis disampaikan oleh program studi pada program vokasi.</li>
                                                            </ol>
                                                    <li>Monitoring dan evaluasi pelaksanaan proses pembelajaran
                                                        mencakup karakteristik, perencanaan, pelaksanaan, proses
                                                        pembelajaran dan beban belajar mahasiswa untuk memperoleh capaian pembelajaran lulusan.</li>
                                                    <li>Mutu pelaksanaan penilaian pembelajaran (proses dan hasil
                                                        belajar mahasiswa) untuk mengukur ketercapaian capaian pembelajaran lulusan berdasarkan prinsip penilaian yang
                                                        mencakup: edukatif, otentik, objektif, akuntabel, dan transparan, yang dilakukan secara terintegrasi.</li>
                                                    <li>Model integrasi kegiatan penelitian dan PkM untuk meningkatkan mutu proses pembelajaran (Tabel 5.b. LKPS).</li>
                                                </ol>
                                                <br>
                                                <div>
                                                    <textarea rows="10" cols="800" name="iku2" class="ckeditor" id="ckedtor"></textarea>
                                                </div>
                                            <li>Suasana akademik</li>
                                                <p class="justify">Keterlaksanaan dan keberkalaan program dan kegiatan akademik di
                                                luar kegiatan pembelajaran terstruktur untuk meningkatkan suasana
                                                akademik (kebebasan akademik, kebebasan mimbar akademik, dan otonomi keilmuan). Contoh: seminar ilmiah dan bedah buku.
                                                Jelaskan model-model interaksi antara dosen dan mahasiswa di luar kegiatan kurikuler.</p>
                                                <br>
                                                <div>
                                                    <textarea rows="10" cols="800" name="iku3" class="ckeditor" id="ckedtor"></textarea>
                                                </div>
                                        </ol>
                                    </div>
                                </fieldset>

                                <h3>Indikator Kinerja Tambahan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Indikator kinerja tambahan adalah indikator proses pendidikan lain
                                        berdasarkan standar yang ditetapkan oleh perguruan tinggi untuk
                                        melampaui SN-DIKTI. Data indikator kinerja tambahan yang sahih
                                        harus diukur, dimonitor, dikaji dan dianalisis untuk perbaikan
                                        berkelanjutan.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="ikt" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Evaluasi Capaian Kinerja</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dan analisis keberhasilan dan/atau ketidakberhasilan
                                        pencapaian standar yang telah ditetapkan. Capaian kinerja harus diukur
                                        dengan metoda yang tepat, dan hasilnya dianalisis serta dievaluasi.
                                        Analisis terhadap capaian kinerja harus mencakup identifikasi akar
                                        masalah, faktor pendukung keberhasilan dan faktor penghambat
                                        ketercapaian standar, dan deskripsi singkat tindak lanjut yang akan
                                        dilakukan UPPS.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="eval" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Penjaminan Mutu Pendidikan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dan bukti sahih tentang implementasi sistem
                                        penjaminan mutu di UPPS yang sesuai dengan standar yang
                                        ditetapkan perguruan tinggi terkait pendidikan mengikuti siklus
                                        penetapan, pelaksanaan, evaluasi, pengendalian, dan perbaikan
                                        berkelanjutan (PPEPP).</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="pmp" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Kepuasan Pengguna</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <ol type="a">
                                            <li>Deskripsi sistem untuk mengukur kepuasan mahasiswa terhadap proses pendidikan, termasuk kejelasan instrumen yang digunakan, pelaksanaan, perekaman, analisis data, dan tindak lanjutnya (Tabel 5.c. LKPS).</li>
                                            <li>Ketersediaan bukti yang sahih tentang hasil pengukuran kepuasan mahasiswa yang dilaksanakan secara konsisten, dan ditindaklanjuti secara berkala dan tersistem.</li>
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
                                        rencana perbaikan dan pengembangan oleh UPPS terkait program studi yang diakreditasi.</p>
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