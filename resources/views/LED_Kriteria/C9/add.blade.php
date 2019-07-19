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
                            <h2>LUARAN DAN CAPAIAN TRIDHARMA</h2>
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
                            <form action="{{ url('c9Post') }}" id="wizard_with_validation" method="POST">
                                {{ csrf_field() }}
                                <h3>Indikator Kinerja Utama</h3> 
                                    @if(\Session::has('alert-success'))
                                        <div class="alert alert-success">
                                            <div>{{Session::get('alert-success')}}</div>
                                        </div>
                                    @endif   
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <ol type="a">
                                            <li>Luaran Dharma Pendidikan</li>
                                                <p class="justify">Keberadaan dan implementasi sistem yang menghasilkan data luaran
                                                dan capaian pendidikan yang sahih dan paling tidak mencakup IPK,
                                                prestasi akademik/non-akademik, masa studi, daya saing lulusan
                                                (masa tunggu dan kesesuaian bidang) dan kinerja lulusan (kepuasan
                                                pengguna, tempat kerja, dan penghargaan yang diterima), yang
                                                dikumpulkan, dimonitor, dikaji dan dianalisis untuk perbaikan
                                                berkelanjutan. Tampilkan data luaran dharma pendidikan dengan
                                                teknik representasi yang relevan (misalnya: kurva tren, rasio, dan
                                                proporsi) dan komprehensif serta simpulkan kecenderungan yang
                                                terjadi. Data dan analisis yang disampaikan meliputi:</p>
                                                <ol>
                                                    <li>Capaian pembelajaran/kompetensi lulusan yang berdasarkan rata-rata IPK lulusan (Tabel 8.a. LKPS).</li>
                                                    <li>Prestasi akademik mahasiswa yang dianalisis berupa jumlah, jenis dan lingkup prestasi di tingkat lokal, wilayah, nasional, atau internasional (Tabel 8.b.1) LKPS).</li>
                                                    <li>Prestasi non-akademik mahasiswa yang dianalisis berupa jumlah, jenis dan lingkup prestasi di tingkat lokal, wilayah, nasional, atau internasional (Tabel 8.b.2) LKPS)</li>
                                                    <li>Efektifitas dan produktifitas program pendidikan berupa lama masa studi mahasiswa dan persentase kelulusan tepat waktu (Tabel 8.c. LKPS).</li>
                                                    <li>Daya saing lulusan berupa waktu tunggu lulusan untuk bekerja (mendapatkan pekerjaan atau berwirausaha) yang relevan dengan bidang studi (Tabel 8.d.1) LKPS) dan kesesuaian bidang kerja lulusan dengan bidang studi (Tabel 8.d.2) LKPS). Data diambil dari hasil studi penelusuran lulusan (tracer study). </li>
                                                    <li>Kinerja lulusan yang diukur berdasarkan tingkat/ukuran tempat kerja/berwirausaha (Tabel 8.e.1) LKPS), dan tingkat kepuasan pengguna lulusan (Tabel 8.e.2) LKPS). Data diambil dari hasil studi penelusuran lulusan (tracer study).</li>
                                                </ol>
                                            <br>
                                            <div>
                                                <textarea rows="10" cols="800" name="iku1" class="ckeditor" id="ckedtor"></textarea>
                                            </div>
                                            
                                            <br>
                                            <li>Luaran Dharma Penelitian dan Pengabdian kepada Masyarakat</li>
                                                <p class="justify">Tampilkan data luaran penelitian dan pengabdian kepada masyarakat
                                                oleh mahasiswa dalam proses pendidikan dengan teknik representasi
                                                yang relevan (misalnya: kurva tren, rasio, dan proporsi) dan
                                                komprehensif serta simpulkan kecenderungan yang terjadi. Data dan
                                                analisis yang disampaikan meliputi:</p>
                                                <ol>
                                                    <li>Publikasi ilmiah mahasiswa, yang dihasilkan secara mandiri atau bersama DTPS (untuk program studi pada program Sarjana/Magister/Doktor), atau pagelaran/pameran/presentasi/ publikasi Ilmiah mahasiswa, yang dihasilkan secara mandiri atau bersama DTPS (untuk program studi pada program Sarjana Terapan/Magister Terapan/Doktor Terapan) (Tabel 8.f.1) LKPS)</li>
                                                    <li>Karya ilmiah mahasiswa, yang dihasilkan secara mandiri atau bersama DTPS, yang disitasi dalam 3 tahun terakhir (Tabel 8.f.2) LKPS). Data dan analisis disampaikan terkait program studi pada program akademik/profesi.</li>
                                                    <li>Produk/jasa yang dihasilkan mahasiswa, yang dihasilkan secara mandiri atau bersama DTPS, yang diadopsi oleh industri/masyarakat (Tabel 8.f.2 LKPS). Data dan analisis disampaikan oleh program studi pada program vokasi</li>
                                                    <li>Luaran penelitian/PkM lain yang dihasilkan mahasiswa, baik secara mandiri atau bersama DTPS, misalnya: HKI, Teknologi Tepat Guna, Produk, Karya Seni, Rekayasa Sosial, Buku berISBN, Book Chapter (Tabel 8.f.3) LKPS).</li>
                                                </ol>
                                            <br>
                                            <div>
                                                <textarea rows="10" cols="800" name="iku2" class="ckeditor" id="ckedtor"></textarea>
                                            </div>
                                        </ol>   
                                    </div>
                                </fieldset>

                                <h3>Indikator Kinerja Tambahan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Indikator kinerja tambahan adalah indikator luaran lain berdasarkan
                                        standar yang ditetapkan oleh masing-masing perguruan tinggi untuk
                                        melampaui SN-DIKTI. Data indikator kinerja tambahan yang sahih harus
                                        diukur, dimonitor, dikaji, dan dianalisis untuk perbaikan berkelanjutan.</p>
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

                                <h3>Penjaminan Mutu Luaran</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dan bukti sahih tentang implementasi sistem penjaminan
                                        mutu di UPPS yang sesuai dengan standar yang ditetapkan perguruan
                                        tinggi terkait luaran dan capaian tridharma  mengikuti siklus penetapan,
                                        pelaksanaan, evaluasi, pengendalian, dan perbaikan berkelanjutan (PPEPP).</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="pmplct" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Kepuasan Pengguna</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p>Bagian ini berisi:</p>
                                        <ol type="a">
                                            <li>Deskripsi sistem untuk mengukur kepuasan pengguna lulusan dan mitra, termasuk kejelasan instrumen yang digunakan, pelaksanaan, perekaman, dan analisis datanya.</li>
                                            <li>Ketersediaan bukti yang sahih tentang hasil pengukuran kepuasan pengguna lulusan dan mitra yang dilaksanakan secara konsisten, dan ditindaklanjuti secara berkala dan tersistem.</li>
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
                                        rencana perbaikan dan pengembangan standar luaran dan capaian di UPPS, khsusnya yang terkait dengan program studi yang diakreditasi.</p>
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