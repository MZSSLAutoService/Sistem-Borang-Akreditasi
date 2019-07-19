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
                            <h2>TATA PAMONG, TATA KELOLA, DAN KERJASAMA</h2>
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
                            <form action="{{ url('c2Post') }}" id="wizard_with_validation" method="POST">
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
                                        pencapaian tata kelola dan tata pamong yang mencakup: sistem tata
                                        pamong, kepemimpinan, sistem penjaminan mutu, dan kerjasama. Tata
                                        pamong merujuk pada struktur organisasi, mekanisme dan proses
                                        bagaimana UPPS dan program studi dikendalikan dan diarahkan untuk
                                        mencapai visinya. Tata pamong juga harus mengimplementasikan
                                        manajemen risiko untuk menjamin keberlangsungan UPPS dan program
                                        studi. Pada bagian ini harus dideskripsikan perwujudan tata pamong
                                        yang baik (good governance), pengelolaan, sistem penjaminan mutu,
                                        dan kerjasama di UPPS dan program studi.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="desc" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <h3>Kebijakan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Bagian ini berisi deskripsi dokumen formal kebijakan dan standar
                                        pengembangan tata kelola dan tata pamong, legalitas organisasi dan tata
                                        kerja yang ditetapkan oleh perguruan tinggi, pengelolaan, penjaminan
                                        mutu, dan kerjasama yang diacu oleh UPPS.</p>
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
                                        sudah ditetapkan oleh perguruan tinggi terkait tata pamong, tata kelola,
                                        dan kerjasama. Pada bagian ini juga harus diuraikan sumber daya yang
                                        dialokasikan untuk mencapai standar yang telah ditetapkan serta
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
                                        <ol type="a">
                                            <li>Sistem Tata Pamong</li>
                                                <p class="justify">UPPS memiliki rencana pengembangan yang memuat indikator kinerja
                                                utama (IKU) dan targetnya untuk mengukur ketercapaian tujuan strategis
                                                yang telah ditetapkan.</p>
                                                <ol>
                                                    <li>Ketersediaan dokumen formal tata pamong dan tata kelola serta bukti yang sahih dari implementasinya.</li>
                                                    <li>Ketersediaan dokumen formal struktur organisasi dan tata kerja UPPS beserta tugas pokok dan fungsinya.</li>
                                                    <li>Ketersediaan bukti yang sahih terkait praktek baik perwujudan good governance, mencakup 5 pilar yaitu: kredibilitas, transparansi, akuntabilitas, tanggung jawab, dan berkeadilan.</li>
                                                    <li>Ketersediaan dokumen formal dan bukti keberfungsian sistem pengelolaan fungsional dan operasional di tingkat UPPS yang meliputi perencanaan (planning), pengorganisasian (organizing), penempatan personil (staffing), pengarahan (leading), dan pengawasan (controlling). </li>
                                                </ol>
                                                <br>
                                                <div>
                                                    <textarea rows="10" cols="800" name="iku1" class="ckeditor" id="ckedtor"></textarea>
                                                </div>
                                            <li>Kepemimpinan</li>
                                                <p class="justify">Ketersediaan bukti yang sahih tentang efektivitas kepemimpinan di
                                                UPPS dan program studi, yang mencakup 3 aspek berikut:</p>
                                                <ol>
                                                    <li>Kepemimpinan operasional, ditunjukkan melalui kemampuan menggerakkan seluruh sumber daya internal secara optimal dalam melaksanakan tridharma menuju pencapaian visi.</li>
                                                    <li>Kepemimpinan organisasional, ditunjukkan melalui kemampuan dalam menggerakkan organisasi dan mengharmonisasikan suasana kerja yang kondusif untuk menjamin tercapainya VMTS.</li>
                                                    <li>Kepemimpinan publik, ditunjukkan melalui kemampuan dalam menjalin kerjasama yang menjadikan program studi menjadi rujukan bagi masyarakat di bidang keilmuannya.</li>
                                                </ol>
                                                <br>
                                                <div>
                                                    <textarea rows="10" cols="800" name="iku2" class="ckeditor" id="ckedtor"></textarea>
                                                </div>
                                            <li>Sistem Penjaminan Mutu</li>
                                                <p class="justify">Implementasi sistem penjaminan mutu, minimal mencakup:</p>
                                                <ol>
                                                    <li>Keberadaan unsur pelaksana penjaminan mutu internal yang berlaku pada UPPS yang didukung dokumen formal pembentukan.</li>
                                                    <li>Keterlaksanaan penjaminan mutu program studi yang sesuai dengan kebijakan, manual, standar, dan dokumen penjaminan mutu lainnya.</li>
                                                    <li>Ketersediaan bukti sahih efektifitas pelaksanaan penjaminan mutu sesuai dengan siklus penetapan, pelaksanaan, evaluasi, pengendalian, dan perbaikan berkelanjutan (PPEPP).</li>
                                                </ol>
                                                <br>
                                                <div>
                                                    <textarea rows="10" cols="800" name="iku3" class="ckeditor" id="ckedtor"></textarea>
                                                </div>
                                            <li>Kerjasama</li>
                                                <p class="justify">Mutu, manfaat, kepuasan dan keberlanjutan kerjasama yang relevan
                                                dengan program studi yang diakreditasi. UPPS memiliki bukti yang
                                                sahih terkait kerjasama yang ada serta memenuhi aspek-aspek
                                                sebagai berikut:</p>
                                                <ol>
                                                    <li>Memberikan peningkatan kinerja tridharma dan fasilitas pendukung program studi yang diakreditasi.</li>
                                                    <li>Memberikan manfaat dan kepuasan kepada mitra.</li>
                                                    <li>Menjamin keberlanjutan kerjasama dan hasilnya.</li>
                                                </ol>
                                                <br>
                                                <div>
                                                    <textarea rows="10" cols="800" name="iku4" class="ckeditor" id="ckedtor"></textarea>
                                                </div>
                                        </ol>
                                    </div>
                                </fieldset>

                                <h3>Indikator Kinerja Tambahan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Indikator kinerja tambahan adalah indikator tata kelola dan tata pamong
                                        yang lain yang ditetapkan oleh perguruan tinggi dan/atau UPPS. Data
                                        indikator kinerja tambahan yang sahih harus diukur, dimonitor, dikaji, dan
                                        dianalisis untuk perbaikan berkelanjutan.</p>
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

                                <h3>Penjaminan Mutu Tata Pamong, Tata Kelola, dan Kerjasama</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dan bukti sahih tentang implementasi sistem penjaminan
                                        mutu di UPPS yang sesuai dengan standar yang ditetapkan perguruan
                                        tinggi terkait tata pamong, tata kelola, dan kerjasama mengikuti siklus
                                        penetapan, pelaksanaan, evaluasi, pengendalian, dan perbaikan
                                        berkelanjutan (PPEPP).</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="pmtp" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Kepuasan Pengguna</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Pengukuran kepuasan layanan manajemen terhadap para pemangku
                                        kepentingan: mahasiswa, dosen, tenaga kependidikan, lulusan,
                                        pengguna dan mitra yang memenuhi aspek-aspek berikut:</p>
                                        <ol>
                                            <li>Menggunakan instrumen kepuasan yang sahih, andal, mudah digunakan</li>
                                            <li>Dilaksanakan secara berkala, serta datanya terekam secara komprehensif</li>
                                            <li>Dianalisis dengan metode yang tepat serta bermanfaat untuk pengambilan keputusan</li>
                                            <li>Review terhadap pelaksanaan pengukuran kepuasan para pemangku kepentingan</li>
                                            <li>Hasilnya dipublikasikan dan mudah diakses oleh para pemangku kepentingan</li>
                                            <li>Hasil pengukuran kepuasan ditindaklanjuti untuk perbaikan dan peningkatan mutu luaran secara berkala dan tersistem</li>
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
                                        rencana perbaikan dan pengembangan tata kelola, tata pamong dan
                                        kerjasama UPPS dan program studi yang diakreditasi.</p>
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