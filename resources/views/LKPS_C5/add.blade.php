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
                            <h2>Pendidikan</h2>
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
                            <form action="{{ url('LKPSc5Post') }}" id="wizard_with_validation" method="POST">
                                {{ csrf_field() }}
                                <h3>Kurikulum</h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Tuliskan struktur program dan kelengkapan data mata kuliah sesuai dengan dokumen kurikulum program studi yang berlaku pada saat TS dengan mengikuti format Tabel 5.a berikut ini. 
                                        </p>
                                        <!-- Bordered Table -->
                                        <div class="body table-responsive">
                                            <p>Tabel 5.a Kurikulum, capaian dan kelengkapan data </p>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th rowspan ="2" width="250px" class="text-center">Semester Akademik</th>
                                                        <th rowspan ="2" width="250px" class="text-center">Kode Mata Kuliah </th>
                                                        <th rowspan ="2" width="250px" class="text-center">Nama Mata Kuliah</th>
                                                        <th colspan ="3" width="250px" class="text-center">Bobot Kredit (SKS)</th>
                                                        <th rowspan ="2" width="250px" class="text-center">Konversi Kredit ke Jam</th>
                                                        <th colspan ="4" width="250px" class="text-center">Capaian Pembelajaran</th>
                                                        <th rowspan ="2" width="250px" class="text-center">Dokumen Rencana Pembelajaran</th>
                                                        <th rowspan ="2" width="250px" class="text-center">Unit Penyelenggara</th>
                                                        <th rowspan ="2" width="250px" class="text-center">Aksi</th>
                                                        <tr>
                                                            <th width="250px" class="text-center">Kuliah / Responsi / Tutorial</th>
                                                            <th width="250px" class="text-center">Seminar</th>
                                                            <th width="250px" class="text-center">Praktikum / Praktik / Praktik Lapangan</th>
                                                            <th width="250px" class="text-center">Sikap</th>
                                                            <th width="250px" class="text-center">Pengetahuan</th>
                                                            <th width="250px" class="text-center">Keterangan Umum</th>
                                                            <th width="250px" class="text-center">Keterampilan Khusus</th>
                                                        </tr>
                                                    </tr>
                                                </thead>
                                                <tbody id="C51_LKPS" >
                                                    <td width=""><input disabled name="SM[0]"    class="form-control form-control-sm" /></td>
                                                    <td width=""><input disabled name="KMK[1]"   class="form-control form-control-sm" /></td>
                                                    <td width=""><input disabled name="NMK[2]"   class="form-control form-control-sm" /></td>
                                                    <td width=""><input disabled name="KRT[3]"   class="form-control form-control-sm" /></td>
                                                    <td width=""><input disabled name="SEM[4]"   class="form-control form-control-sm" /></td>
                                                    <td width=""><input disabled name="PPPL[5]"  class="form-control form-control-sm" /></td>
                                                    <td width=""><input disabled name="KKJ[6]"   class="form-control form-control-sm" /></td>
                                                    <td width=""><input disabled name="SIK[7]"   class="form-control form-control-sm" /></td>
                                                    <td width=""><input disabled name="PEN[8]"   class="form-control form-control-sm" /></td>
                                                    <td width=""><input disabled name="KET[9]"   class="form-control form-control-sm" /></td>
                                                    <td width=""><input disabled name="KETK[10]" class="form-control form-control-sm" /></td>
                                                    <td width=""><input disabled name="DRP[11]"  class="form-control form-control-sm" /></td>
                                                    <td width=""><input disabled name="UP[12]"   class="form-control form-control-sm" /></td>
                                                    <td></td>
                                                </tbody>
                                                <tfoot>
                                                    <tr >
                                                        <td colspan="14">                                                                    
                                                            <button class="btn btn-small btn-success" onclick="additemc51lkps(); return false"><i class="glyphicon glyphicon-plus"></i></button>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- #END# Bordered Table -->
                                    <p>Keterangan :
                                        <ol>
                                            <li> Diisi dengan konversi kredit ke jam pelaksanaan Praktikum/Praktik/Praktik Lapangan. <u>Data ini diisi oleh pengusul dari program studi pada program Diploma Tiga/Sarjana/Sarjana Terapan.</u></li>
                                            <li>Beri tanda (V) pada kolom unsur pembentuk Capaian Pembelajaran Lulusan (CPL) sesuai dengan rencana pembelajaran, jika tidak beri tanda (-).</li>
                                            <li>Diisi dengan nama dokumen rencana pembelajaran yang digunakan.</li>
                                        </ol> 
                                    </p>
                                </fieldset>

                                <h3>Integrasi Kegiatan Penelitian/PKM dalam Pembelajaran </h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Tuliskan judul penelitian/PkM DTPS yang terintegrasi ke dalam pembelajaran/ pengembangan matakuliah dalam 3 tahun terakhir dengan mengikuti format Tabel 5.b berikut ini.</p>
                                        <!-- Bordered Table -->
                                        <div class="body table-responsive">
                                            <p>Tabel 5.b. Integrasi Kegiatan Penelitian/PkM dalam Pembelajaran</p>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th rowspan ="2" width="" class="text-center">Judul Penelitian / PKM</th>
                                                        <th rowspan ="2" width="" class="text-center">Nama Dosen</th>
                                                        <th rowspan ="2" width="" class="text-center">Mata Kuliah</th>
                                                        <th rowspan ="2" width="" class="text-center">Bentuk Integrasi</th>
                                                        <th rowspan ="2" width="" class="text-center">Aksi</th>
                                                        <tr>
                                                        </tr>
                                                    </tr>
                                                </thead>
                                                <tbody id="C52_LKPS">
                                                    <td><input disabled name="JP[0]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="ND[1]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="MK[2]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="BI[3]" class="form-control form-control-sm" /></td>
                                                    <td></td>
                                                </tbody>
                                                <tfoot>
                                                    <tr >
                                                        <td colspan="5">                                                                    
                                                            <button class="btn btn-small btn-success" onclick="additemc52lkps(); return false"><i class="glyphicon glyphicon-plus"></i></button>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- #END# Bordered Table -->
                                    <p>Keterangan :
                                        <ol>
                                            <li> Judul penelitian dan PkM tercatat di unit/lembaga yang mengelola kegiatan penelitian/PkM di tingkat Perguruan Tinggi/UPPS.</li>
                                            <li>Bentuk integrasi dapat berupa tambahan materi perkuliahan, studi kasus, Bab/ Subbab dalam buku ajar, atau bentuk lain yang relevan. </li>
                                        </ol> 
                                    </p>
                                </fieldset>

                                <h3>Kepuasan Mahasiswa </h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Tuliskan hasil pengukuran kepuasan mahasiswa terhadap proses pendidikan dengan mengikuti format Tabel 5.c berikut ini. Data diambil dari hasil studi penelusuran yang dilakukan pada saat TS. </p>
                                        <!-- Bordered Table -->
                                        <div class="body table-responsive">
                                            <p>Tabel 5.c  Kepuasan Mahasiswa </p>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th rowspan ="2" width="" class="text-center">No</th>
                                                        <th rowspan ="2" width="" class="text-center">Aspek yang diukur</th>
                                                        <th colspan ="4" width="" class="text-center">Tingkat Kepuasan Mahasiswa (%)</th>
                                                        <th rowspan ="2" width="" class="text-center">Rencana Tidak Lanjut oleh UPPS / PS</th>
                                                        <tr>
                                                            <th width="" class="text-center">Sangat Baik</th>
                                                            <th width="" class="text-center">Baik</th>
                                                            <th width="" class="text-center">Cukup</th>
                                                            <th width="" class="text-center">Kurang</th>
                                                        </tr>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php  $no=1;?>
                                                    <tr>
                                                        <td width="10%" class="text-center"><?php echo $no;?></td>
                                                        <td>Keandalan (reliability): kemampuan dosen, tenaga kependidikan, dan pengelola dalam memberikan pelayanan.</td>
                                                        <td><input type="number" name="Aspk1_sb"      id="Aspk1_sb"       class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk1_b"       id="Aspk1_b"        class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk1_c"       id="Aspk1_c"        class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk1_k"       id="Aspk1_k"        class="form-control form-control-sm" /></td>
                                                        <td><input name="Aspk1_rencana" class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <?php $no++?>
                                                    <tr>
                                                        <td width="10%" class="text-center"><?php echo $no;?></td>
                                                        <td>Daya tanggap (responsiveness): kemauan dari dosen, tenaga kependidikan, dan pengelola dalam membantu mahasiswa dan memberikan jasa dengan cepat.</td>
                                                        <td><input type="number" name="Aspk2_sb"      id="Aspk2_sb"       class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk2_b"       id="Aspk2_b"        class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk2_c"       id="Aspk2_c"        class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk2_k"       id="Aspk2_k"        class="form-control form-control-sm" /></td>
                                                        <td><input name="Aspk2_rencana" class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <?php $no++?>
                                                    <tr>
                                                        <td width="10%" class="text-center"><?php echo $no;?></td>
                                                        <td>Kepastian (assurance): kemampuan dosen, tenaga kependidikan, dan pengelola untuk memberi keyakinan kepada mahasiswa bahwa pelayanan yang diberikan telah sesuai dengan ketentuan.</td>
                                                        <td><input type="number" name="Aspk3_sb"      id="Aspk3_sb"       class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk3_b"       id="Aspk3_b"        class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk3_c"       id="Aspk3_c"        class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk3_k"       id="Aspk3_k"        class="form-control form-control-sm" /></td>
                                                        <td><input name="Aspk3_rencana" class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <?php $no++?>
                                                    <tr>
                                                        <td width="10%" class="text-center"><?php echo $no;?></td>
                                                        <td>Empati (empathy): kesediaan/kepedulian dosen, tenaga kependidikan, dan pengelola untuk memberi perhatian kepada mahasiswa.</td>
                                                        <td><input type="number" name="Aspk4_sb"      id="Aspk4_sb"       class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk4_b"       id="Aspk4_b"        class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk4_c"       id="Aspk4_c"        class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk4_k"       id="Aspk4_k"        class="form-control form-control-sm" /></td>
                                                        <td><input name="Aspk4_rencana" class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <?php $no++?>
                                                    <tr>
                                                        <td width="10%" class="text-center"><?php echo $no;?></td>
                                                        <td>Tangible: penilaian mahasiswa terhadap kecukupan, aksesibitas, kualitas sarana dan prasarana.</td>
                                                        <td><input type="number" name="Aspk5_sb"      id="Aspk5_sb"       class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk5_b"       id="Aspk5_b"        class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk5_c"       id="Aspk5_c"        class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk5_k"       id="Aspk5_k"        class="form-control form-control-sm" /></td>
                                                        <td><input name="Aspk5_rencana" class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <?php $no++?>
                                                    <tr>
                                                        <td colspan="2" class="text-center"><b>JUMLAH</b></td>
                                                        <td><input disabled name="jmlAspk_sb" id="jmlAspk_sb"  class="form-control form-control-sm" /></td>
                                                        <td><input disabled name="jmlAspk_b"  id="jmlAspk_b"  class="form-control form-control-sm" /></td>
                                                        <td><input disabled name="jmlAspk_c"  id="jmlAspk_c"  class="form-control form-control-sm" /></td>
                                                        <td><input disabled name="jmlAspk_k"  id="jmlAspk_k"  class="form-control form-control-sm" /></td>                                                       
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- #END# Bordered Table -->
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