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
                        <?php
                            $cek=DB::table('lkps_pendidikan')->where('id_prodi',$_GET['id'])->first();
                            $jmlAspk_sb=DB::table('lkps_kepuasanmhs')
                                            ->value(DB::raw("Aspk1_sb + Aspk2_sb + Aspk3_sb + Aspk4_sb + Aspk5_sb"));
                            $jmlAspk_b=DB::table('lkps_kepuasanmhs')
                                            ->value(DB::raw("Aspk1_b + Aspk2_b + Aspk3_b + Aspk4_b + Aspk5_b"));
                            $jmlAspk_c=DB::table('lkps_kepuasanmhs')
                                            ->value(DB::raw("Aspk1_c + Aspk2_c + Aspk3_c + Aspk4_c + Aspk5_c"));
                            $jmlAspk_k=DB::table('lkps_kepuasanmhs')
                                            ->value(DB::raw("Aspk1_k + Aspk2_k + Aspk3_k + Aspk4_k + Aspk5_k"));
                        ?>
                            <form action="{{ url('updatec5lkps') }}" id="wizard_with_validation" method="POST">
                                {{ csrf_field() }}
                                <h3>Kurikulum</h3>    
                                <fieldset>
                                    <input type="hidden" name="id" value="{{ $cek->id}}"> <br/>
                                    <div class="row justify-content-end">
                                        <p class="justify">Tuliskan struktur program dan kelengkapan data mata kuliah sesuai dengan dokumen kurikulum program studi yang berlaku pada saat TS dengan mengikuti format Tabel 5.a berikut ini. 
                                        </p>
                                        <!-- Bordered Table -->
                                        <div class="body table-responsive">
                                            <p>Tabel 5.a Kurikulum, capaian dan kelengkapan data </p>
                                            <table class="table table-bordered" width="460%">
                                                <thead>
                                                    <tr>
                                                        <th rowspan ="2" class="text-center">Semester Akademik</th>
                                                        <th rowspan ="2" class="text-center">Kode Mata Kuliah </th>
                                                        <th rowspan ="2" class="text-center">Nama Mata Kuliah</th>
                                                        <th colspan ="3" class="text-center">Bobot Kredit (SKS)</th>
                                                        <th rowspan ="2" class="text-center">Konversi Kredit ke Jam</th>
                                                        <th colspan ="4" class="text-center">Capaian Pembelajaran</th>
                                                        <th rowspan ="2" class="text-center">Dokumen Rencana Pembelajaran</th>
                                                        <th rowspan ="2" class="text-center">Unit Penyelenggara</th>
                                                        <tr>
                                                            <th class="text-center">Kuliah / Responsi / Tutorial</th>
                                                            <th class="text-center">Seminar</th>
                                                            <th class="text-center">Praktikum / Praktik / Praktik Lapangan</th>
                                                            <th class="text-center">Sikap</th>
                                                            <th class="text-center">Pengetahuan</th>
                                                            <th class="text-center">Keterangan Umum</th>
                                                            <th class="text-center">Keterampilan Khusus</th>
                                                        </tr>
                                                    </tr>
                                                </thead>
                                                <tbody id="C51_LKPS" >
                                                @foreach($lkpsC51 as $cek1)
                                                    <tr>
                                                        <td width="30%"><input name="SM[0]"    value="<?php echo $cek1->smstr?>" class="form-control form-control-sm" /></td>
                                                        <td width="30%"><input name="KMK[1]"   value="<?php echo $cek1->kode_matkul?>" class="form-control form-control-sm" /></td>
                                                        <td width="50%"><input name="NMK[2]"   value="<?php echo $cek1->nama_matkul?>" class="form-control form-control-sm" /></td>
                                                        <td width="50%"><input name="KRT[3]"   value="<?php echo $cek1->sks_matkul?>" class="form-control form-control-sm" /></td>
                                                        <td width="50%"><input name="SEM[4]"   value="<?php echo $cek1->sks_seminar?>" class="form-control form-control-sm" /></td>
                                                        <td width="50%"><input name="PPPL[5]"  value="<?php echo $cek1->sks_lap?>" class="form-control form-control-sm" /></td>
                                                        <td width="50%"><input name="KKJ[6]"   value="<?php echo $cek1->kredit_jam?>" class="form-control form-control-sm" /></td>
                                                        <td width="10%"><input name="SIK[7]"   value="<?php echo $cek1->sikap?>" class="form-control form-control-sm" /></td>
                                                        <td width="10%"><input name="PEN[8]"   value="<?php echo $cek1->pengetahuan?>" class="form-control form-control-sm" /></td>
                                                        <td width="10%"><input name="KET[9]"   value="<?php echo $cek1->ktmp_umum?>" class="form-control form-control-sm" /></td>
                                                        <td width="10%"><input name="KETK[10]" value="<?php echo $cek1->ktmp_khusus?>" class="form-control form-control-sm" /></td>
                                                        <td width="50%"><input name="DRP[11]"  value="<?php echo $cek1->dok?>" class="form-control form-control-sm" /></td>
                                                        <td width="50%"><input name="UP[12]"   value="<?php echo $cek1->unit?>" class="form-control form-control-sm" /></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
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
                                                        <tr>
                                                        </tr>
                                                    </tr>
                                                </thead>
                                                <tbody id="C52_LKPS">
                                                @foreach($lkpsC52 as $cek1)
                                                    <tr>
                                                    <td><input name="JP[]" value="<?php echo $cek1->judul_penelitian?>"class="form-control form-control-sm" /></td>
                                                    <td><input name="ND[]" value="<?php echo $cek1->nama_dosen?>"class="form-control form-control-sm" /></td>
                                                    <td><input name="MK[]" value="<?php echo $cek1->mata_kuliah?>"class="form-control form-control-sm" /></td>
                                                    <td><input name="BI[]" value="<?php echo $cek1->integrasi?>"class="form-control form-control-sm" /></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
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
                                                <?php  
                                                    $cek1=DB::table('lkps_kepuasanmhs')->where('id_pendidikan',$_GET['upps'])->first();
                                                    $no=1;
                                                ?>
                                                    <tr>
                                                        <td width="10%" class="text-center"><?php echo $no;?></td>
                                                        <td>Keandalan (reliability): kemampuan dosen, tenaga kependidikan, dan pengelola dalam memberikan pelayanan.</td>
                                                        <td><input type="number" name="Aspk1_sb"      id="Aspk1_sb" value="<?php echo $cek1->Aspk1_sb?>" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk1_b"       id="Aspk1_b"  value="<?php echo $cek1->Aspk1_b?>" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk1_c"       id="Aspk1_c"  value="<?php echo $cek1->Aspk1_c?>" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk1_k"       id="Aspk1_k"  value="<?php echo $cek1->Aspk1_k?>" class="form-control form-control-sm" /></td>
                                                        <td><input name="Aspk1_rencana" value="<?php echo $cek1->Aspk1_rencana?>" class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <?php $no++?>
                                                    <tr>
                                                        <td width="10%" class="text-center"><?php echo $no;?></td>
                                                        <td>Daya tanggap (responsiveness): kemauan dari dosen, tenaga kependidikan, dan pengelola dalam membantu mahasiswa dan memberikan jasa dengan cepat.</td>
                                                        <td><input type="number" name="Aspk2_sb"      id="Aspk2_sb" value="<?php echo $cek1->Aspk2_sb?>" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk2_b"       id="Aspk2_b"  value="<?php echo $cek1->Aspk2_b?>" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk2_c"       id="Aspk2_c"  value="<?php echo $cek1->Aspk2_c?>" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk2_k"       id="Aspk2_k"  value="<?php echo $cek1->Aspk2_k?>" class="form-control form-control-sm" /></td>
                                                        <td><input name="Aspk2_rencana" value="<?php echo $cek1->Aspk2_rencana?>" class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <?php $no++?>
                                                    <tr>
                                                        <td width="10%" class="text-center"><?php echo $no;?></td>
                                                        <td>Kepastian (assurance): kemampuan dosen, tenaga kependidikan, dan pengelola untuk memberi keyakinan kepada mahasiswa bahwa pelayanan yang diberikan telah sesuai dengan ketentuan.</td>
                                                        <td><input type="number" name="Aspk3_sb"      id="Aspk3_sb" value="<?php echo $cek1->Aspk3_sb?>" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk3_b"       id="Aspk3_b"  value="<?php echo $cek1->Aspk3_b?>" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk3_c"       id="Aspk3_c"  value="<?php echo $cek1->Aspk3_c?>" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk3_k"       id="Aspk3_k"  value="<?php echo $cek1->Aspk3_k?>" class="form-control form-control-sm" /></td>
                                                        <td><input name="Aspk3_rencana" value="<?php echo $cek1->Aspk3_rencana?>" class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <?php $no++?>
                                                    <tr>
                                                        <td width="10%" class="text-center"><?php echo $no;?></td>
                                                        <td>Empati (empathy): kesediaan/kepedulian dosen, tenaga kependidikan, dan pengelola untuk memberi perhatian kepada mahasiswa.</td>
                                                        <td><input type="number" name="Aspk4_sb"      id="Aspk4_sb" value="<?php echo $cek1->Aspk4_sb?>" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk4_b"       id="Aspk4_b"  value="<?php echo $cek1->Aspk4_b?>" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk4_c"       id="Aspk4_c"  value="<?php echo $cek1->Aspk4_c?>" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk4_k"       id="Aspk4_k"  value="<?php echo $cek1->Aspk4_k?>" class="form-control form-control-sm" /></td>
                                                        <td><input name="Aspk4_rencana" value="<?php echo $cek1->Aspk4_rencana?>" class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <?php $no++?>
                                                    <tr>
                                                        <td width="10%" class="text-center"><?php echo $no;?></td>
                                                        <td>Tangible: penilaian mahasiswa terhadap kecukupan, aksesibitas, kualitas sarana dan prasarana.</td>
                                                        <td><input type="number" name="Aspk5_sb"      id="Aspk5_sb" value="<?php echo $cek1->Aspk5_sb?>" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk5_b"       id="Aspk5_b"  value="<?php echo $cek1->Aspk5_b?>" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk5_c"       id="Aspk5_c"  value="<?php echo $cek1->Aspk5_c?>" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="Aspk5_k"       id="Aspk5_k"  value="<?php echo $cek1->Aspk5_k?>" class="form-control form-control-sm" /></td>
                                                        <td><input name="Aspk5_rencana" value="<?php echo $cek1->Aspk5_rencana?>" class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <?php $no++?>
                                                    <tr>
                                                        <td colspan="2" class="text-center"><b>JUMLAH</b></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jmlAspk_sb"><?php    echo number_format($jmlAspk_sb, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jmlAspk_b"><?php    echo number_format($jmlAspk_b, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jmlAspk_c"><?php    echo number_format($jmlAspk_c, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jmlAspk_k"><?php    echo number_format($jmlAspk_k, 2)?></button></td>                                                      
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- #END# Bordered Table -->

                                    <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary waves-effect" name="simpan" value="Simpan">UPDATE</button>
                                </form>
                                <!-- #END UPDATE -->

                                            <!-- <a href ="#" class ="btn btn-sm btn-primary" data-target="#modalHapus" data-toggle="modal"> <span class ="glyphicon glyphicon-plus"></span></a> -->
                                            <a href="#" class="btn btn-danger" data-target="#modalDelete" data-toggle="modal">DELETE</a>
                                            <!-- Modal Popup --> 
                                            <div id="modalDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title" style="text-align:center;">Apakah anda yakin menghapus data ini?</h4>
                                                        </div>
                                                        
                                                        <div class="modal-body">
                                                        <form action="{{ route('c5lkps.destroy', $cek->id) }}" method="POST">
                                                            {{ csrf_field() }}
                                                            @method('DELETE')
                                                                <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                                                                    <!-- <input type="hidden" name="id" value="{{ $cek->id}}"> <br/> -->
                                                                    <button type="submit" class="btn btn-danger waves-effect" name="simpan" value="Delete">DELETE</button>
                                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="reset" class="btn btn-secondary waves-effect" name="batal" value="Batal">CANCEL</button>
                                        <div>
                                        <!-- #END DELETE -->
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