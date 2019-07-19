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
                            <h2>MAHASISWA</h2>
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
                            <form action="{{ url('c3Post') }}" id="wizard_with_validation" method="POST">
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
                                        pencapaian standar yang ditetapkan perguruan tinggi terkait
                                        kemahasiswaan yang mencakup sistem seleksi dan layanan mahasiswa,
                                        serta standar khusus program studi.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="desc" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <h3>Kebijakan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dokumen formal kebijakan dan standar yang mencakup
                                        sistem penerimaan mahasiswa baru dan layanan mahasiswa (bimbingan
                                        dan konseling, pengembangan nalar, minat dan bakat, pengembangan soft skills, layanan beasiswa, 
                                        layanan kesehatan, bimbingan karir, dankewirausahaan).</p>
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
                                        sudah ditetapkan oleh perguruan tinggi terkait kemahasiswaan yang
                                        berisi: sistem seleksi (nilai seleksi, nilai rapor, nilai ujian nasional, dan
                                        persyaratan khusus lainnya) serta layanan mahasiswa. Pada bagian ini
                                        juga harus diuraikan sumber daya yang dialokasikan untuk mencapai
                                        standar yang telah ditetapkan serta mekanisme kontrol pencapaiannya. </p>
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
                                            <li>Kualitas Input Mahasiswa</li>
                                                <ol type="1">
                                                    <li>Metode rekrutmen calon mahasiswa untuk mengidentifikasi potensi kemampuan mencapai capaian pembelajaran.</li>
                                                    <li>Hasil analisis data:.</li>
                                                        <ul>
                                                            <li>Rasio jumlah pendaftar terhadap jumlah mahasiswa baru
                                                            untuk Program Sarjana/Sarjana Terapan/Diploma (Tabel 2.a
                                                            LKPS).</li>
                                                            <li>Pertumbuhan jumlah mahasiswa baru untuk program studi
                                                            dengan jumlah kebutuhan lulusan rendah (Tabel 2.a LKPS).</li>
                                                        </ul>
                                                </ol>
                                                <br>
                                                <div>
                                                    <textarea rows="10" cols="800" name="iku1" class="ckeditor" id="ckedtor"></textarea>
                                                </div>
                                            <li>Daya Tarik Program Studi</li>
                                                <ol>
                                                    <li>Peningkatan minat calon mahasiswa dalam kurun waktu 3 tahun terakhir (Tabel 2.a LKPS).</li>
                                                    <li>Keberadaan mahasiswa asing terhadap jumlah mahasiswa (Tabel 2.b LKPS).</li>
                                                </ol>
                                                <br>
                                                <div>
                                                    <textarea rows="10" cols="800" name="iku2" class="ckeditor" id="ckedtor"></textarea>
                                                </div>
                                            <li>Layanan Kemahasiswaan</li>
                                                <p class="justify">Layanan kemahasiswaan yang disediakan oleh perguruan tinggi/UPPS untuk seluruh mahasiswa dalam bidang: </p>
                                                <ol>
                                                    <li>Penalaran, minat dan bakat</li>
                                                    <li>Bimbingan karir dan kewirausahaan</li>
                                                    <li>Kesejahteraan (bimbingan dan konseling, layanan beasiswa, dan layanan kesehatan).</li>
                                                </ol>
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
                                        <p class="justify">Indikator kinerja tambahan adalah 
                                        indikator kemahasiswaan 
                                        berdasarkan kebijakan dan standar yang ditetapkan masing-masing
                                        perguruan tinggi. Data indikator kinerja tambahan yang sahih harus
                                        diukur, dimonitor, dikaji dan dianalisis untuk perbaikan berkelanjutan.</p>
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

                                <h3>Penjaminan Mutu Mahasiswa</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dan bukti sahih tentang implementasi sistem penjaminan
                                        mutu di UPPS yang sesuai dengan standar yang ditetapkan perguruan
                                        tinggi terkait kemahasiswaan mengikuti siklus penetapan, pelaksanaan,
                                        evaluasi, pengendalian, dan perbaikan berkelanjutan (PPEPP).</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="pmm" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Kepuasan Pengguna</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <ol>
                                            <li>Deskripsi sistem untuk mengukur kepuasan mahasiswa terhadap layanan kemahasiswaan termasuk kejelasan instrumen yang digunakan, pelaksanaan, perekaman, dan analisis datanya.</li>
                                            <li>Ketersediaan bukti yang sahih tentang hasil pengukuran kepuasan mahasiswa yang dilaksanakan secara konsisten, ditindaklanjuti secara berkala, dan tersistem.</li>
                                            <br>
                                            <div>
                                                <textarea rows="10" cols="800" name="kpg" class="ckeditor" id="ckedtor"></textarea>
                                            </div>
                                        </ol>
                                    </div>
                                </fieldset>

                                <h3>Simpulan Hasil Evaluasi dan Tindak lanjut</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi ringkasan dari: pemosisian, masalah dan akar masalah, serta
                                        rencana perbaikan dan pengembangan mahasiswa dan kemahasiswaan
                                        oleh UPPS terkait program studi yang diakreditasi.</p>
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