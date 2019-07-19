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
                            <h2>PROFIL UNIT PENGELOLA PROGRAM STUDI (UPPS)</h2>
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
                            <form  action="{{ url('LEDProfilUPPSPost') }}" id="wizard_with_validation" method="POST">
                                {{ csrf_field() }}
                                <h3>UUPS</h3>    
                                @if(\Session::has('alert-success'))
                                    <div class="alert alert-success">
                                        <div>{{Session::get('alert-success')}}</div>
                                    </div>
                                @endif
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Bagian ini berisi deskripsi sejarah UPPS, visi, misi, tujuan, strategi dan tata nilai,
                                        struktur organisasi, mahasiswa dan lulusan, sumber daya manusia (dosen dan
                                        tenaga kependidikan), keuangan, sarana dan prasarana, sistem penjaminan
                                        mutu internal, serta kinerja UPPS yang disajikan secara ringkas dan
                                        mengemukakan hal-hal yang paling penting. Aspek yang harus termuat
                                        dijelaskan sebagai berikut:</p>
                                        <textarea rows="10" cols="800" name="desc" class="ckeditor" id="ckedtor"></textarea>
                                    </div>
                                </fieldset>
                                
                                <h3>Sejarah Unit Pengelola Program Studi dan Program Studi</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">UPPS harus mampu menjelaskan riwayat pendirian dan perkembangan
                                        UPPS dan program studi yang diakreditasi secara ringkas dan jelas.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="sejarah" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Visi, misi, tujuan, strategi, dan tata nilai</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Bagian ini berisi deskripsi singkat visi, misi, tujuan, strategi dan tata nilai
                                        yang diterapkan di UPPS dan program studi yang diakreditasi (visi
                                        keilmuan/scientific vision).</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="vm" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Organisasi dan Tata Kerja</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Bagian ini berisi informasi dokumen formal organisasi dan tata kerja yang
                                        saat ini berlaku, termasuk uraian secara ringkas tentang struktur organisasi
                                        dan tata kerja UPPS dan program studi, tugas pokok, dan fungsinya
                                        (tupoksi).</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="org" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Mahasiswa dan Lulusan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Bagian ini berisi deskripsi ringkas data jumlah mahasiswa dan lulusan,
                                        termasuk kualitas masukan, prestasi monumental yang dicapai mahasiswa
                                        dan lulusan, serta kinerja lulusan dari program studi yang diselenggarakan
                                        UPPS dengan penekanan lebih spesifik pada program studi yang
                                        diakreditasi.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="mhsal" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Dosen dan Tenaga Kependidikan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Bagian ini berisi informasi ringkas jumlah dan kualifikasi SDM (dosen dan
                                        tenaga kependidikan), kecukupan dan kinerja, serta prestasi monumental
                                        yang dicapai.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="dostk" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Keuangan, Sarana, dan Prasarana</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi ringkas kecukupan, kelayakan, kualitas, dan aksesibilitas
                                        sumberdaya keuangan, sarana dan prasarana.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="keusar" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Sistem Penjaminan Mutu</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi implementasi Sistem Penjaminan Mutu yang sesuai dengan
                                        kebijakan, organisasi, instrumen yang dikembangkan di tingkat perguruan
                                        tinggi, serta monitoring dan evaluasi, pelaporan, dan tindak lanjutnya.
                                        Deskripsi dapat dijelaskan dengan siklus PPEPP yang dilakukan oleh UPPS
                                        atas penyelenggaraaan program studi, termasuk pengakuan mutu dari
                                        lembaga audit eksternal, lembaga akreditasi, dan lembaga sertifikasi.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="spm" class="ckeditor" id="ckedtor"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Kinerja Unit Pengelola Program Studi dan Program Studi</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi capaian dan luaran yang paling diunggulkan dari UPPS dan
                                        program studi.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="kinerja" class="ckeditor" id="ckedtor"></textarea>
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