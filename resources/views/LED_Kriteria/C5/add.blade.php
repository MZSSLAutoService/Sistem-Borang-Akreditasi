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
                            <h2>KEUANGAN, SARANA, DAN PRASARANA</h2>
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
                            <form action="{{ url('c5Post') }}" id="wizard_with_validation" method="POST">
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
                                        pencapaian standar yang ditetapkan perguruan tinggi terkait:</p>
                                        <ol type="a">
                                            <li>Pengelolaan keuangan: perencanaan, sumber-sumber keuangan, pengalokasian, realisasi, dan pertanggungjawaban</li>
                                            <li>Pengelolaan sarana dan prasarana yang berisi: perencanaan, pengadaan, pemanfaatan, pemeliharaan, dan penghapusan.</li>
                                        </ol>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="desc" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <h3>Kebijakan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dokumen formal dan standar tentang:</p>
                                        <ol type="a">
                                            <li>Pengelolaan keuangan yang mencakup: perencanaan, realisasi, dan pertanggung jawaban yang sesuai dengan kebijakan perguruan tinggi.</li>
                                            <li>pengelolaan sarana dan prasarana yang mencakup: perencanaan, pengadaan, pemanfaatan, pemeliharaan, dan penghapusan yang sesuai dengan kebijakan perguruan tinggi.</li>
                                        </ol>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="kebijakan" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Strategi Pencapaian Standar</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Bagian ini mencakup strategi UPPS dalam pemenuhan:</p>
                                        <ol type="a">
                                            <li>Standar yang ditetapkan perguruan tinggi terkait pengelolaan keuangan: perencanaan, sumber-sumber keuangan, pengalokasian, realisasi, dan pertanggungjawaban</li>
                                            <li>Standar yang ditetapkan perguruan tinggi terkait pengelolaan sarana dan prasarana yang berisi: perencanaan, pengadaan, pemanfaatan, pemeliharaan, dan penghapusan.</li>
                                        </ol>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="strategi" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Indikator Kinerja Utama</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Tampilkan data Keuangan, Sarana dan Prasarana dengan teknik
                                        representasi yang relevan (misalnya: kurva tren, rasio, dan proporsi)
                                        dan komprehensif serta simpulkan kecenderungan yang terjadi. Data
                                        dan analisis yang disampaikan meliputi:</p>
                                        <ol type="a">
                                            <li>Keuangan</li>
                                                <ol>
                                                    <li>Biaya operasional pendidikan (Tabel 4 LKPS).</li>
                                                    <li>Rata-rata dana penelitian DTPS/tahun dalam 3 tahun terakhir (Tabel 4 LKPS).</li>
                                                    <li>Rata-rata dana PkM DTPS/tahun dalam 3 tahun terakhir (Tabel 4 LKPS).</li>
                                                    <li>Realisasi investasi (SDM, sarana dan prasarana) dalam 3 tahun terakhir (Tabel 4 LKPS). </li>
                                                </ol>
                                                <br>
                                                <div>
                                                    <textarea rows="10" cols="800" name="iku1" class="ckeditor" id="ckedtor"></textarea>
                                                </div>
                                            <li>Sarana</li>
                                                <ol>
                                                    <li>Kecukupan dan Aksesibilitas Sarana</li>
                                                        <p class="justify">Kecukupan sarana terlihat dari ketersediaan, kemutakhiran,
                                                        kesiapgunaan, mencakup: fasilitas dan peralatan untuk
                                                        pembelajaran, penelitian, dan PkM. Perguruan tinggi harus
                                                        menyediakan sarana bagi mahasiswa yang berkebutuhan khusus.
                                                        Gambarkan tabel jumlah sarana yang dimanfaatkan oleh PS yang diakreditasi.</p>
                                                    <li>Kecukupan dan Aksesibilitas Sistem Teknologi Informasi dan Komunikasi (TIK)</li>
                                                        <p class="justify">Ketersediaan Sistem TIK untuk:</p>
                                                        <ol type="a">
                                                            <li>Pengumpulan data yang cepat, akurat, dapat dipertanggungjawabkan, dan terjaga kerahasiaannya.</li>
                                                            <li>Pengelolaan dan penyebaran ilmu pengetahuan, misalnya: SIMPT (akademik, SDM, keuangan, aset, Decission Support System (Sistem Pendukung Pengambilan Keputusan), dll.), Sistem Informasi Perpustakaan, dan e-Learning.</li>
                                                        </ol>
                                                </ol>
                                            <br>
                                                <div>
                                                    <textarea rows="10" cols="800" name="iku2" class="ckeditor" id="ckedtor"></textarea>
                                                </div>
                                            <li>Kecukupan dan Aksesibilitas Prasarana</li>
                                                <p class="justify">Kecukupan prasarana terlihat dari ketersediaan, kemutakhiran,
                                                kesiapgunaan, mencakup: fasilitas dan peralatan untuk
                                                pembelajaran, penelitian, dan PkM. Perguruan tinggi harus
                                                menyediakan prasarana bagi mahasiswa yang berkebutuhan
                                                khusus.</p>
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
                                        <p class="justify">Indikator kinerja tambahan adalah indikator keuangan, sarana dan
                                        prasarana lain berdasarkan standar yang ditetapkan oleh perguruan
                                        tinggi untuk melampaui SN-DIKTI. Data indikator kinerja tambahan
                                        yang sahih harus diukur, dimonitor, dikaji dan dianalisis untuk perbaikan
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
                                        pencapaian standar yang telah ditetapkan. Capaian kinerja harus
                                        diukur dengan metoda yang tepat, dan hasilnya dianalisis serta
                                        dievaluasi. Analisis terhadap capaian kinerja harus mencakup
                                        identifikasi akar masalah, faktor pendukung keberhasilan dan faktor
                                        penghambat ketercapaian standar, dan deskripsi singkat tindak lanjut
                                        yang akan dilakukan UPPS.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="eval" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Penjaminan Mutu Keuangan, Sarana, dan Prasarana</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dan bukti sahih tentang implementasi sistem
                                        penjaminan mutu di UPPS yang sesuai dengan standar yag ditetapkan 
                                        perguruan tinggi terkait Keuangan, Sarana dan Prasarana mengikuti
                                        siklus penetapan, pelaksanaan, evaluasi, pengendalian, dan perbaikan
                                        berkelanjutan (PPEPP).</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="pm_keupras" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Kepuasan Pengguna</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <ol type="a">
                                            <li>Deskripsi sistem untuk mengukur kepuasan pengguna terhadap pengelolaan keuangan, sarana dan prasarana, termasuk kejelasan instrumen yang digunakan, pelaksanaan, perekaman dan analisis datanya.</li>
                                            <li>Ketersediaan bukti yang sahih tentang hasil pengukuran kepuasan pengguna yang dilaksanakan secara konsisten, dan ditindaklanjuti secara berkala dan tersistem.</li>
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
                                        rencana perbaikan dan pengembangan keuangan, sarana dan
                                        prasarana oleh UPPS, khususnya yang terkait program studi yang
                                        diakreditasi.</p>
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