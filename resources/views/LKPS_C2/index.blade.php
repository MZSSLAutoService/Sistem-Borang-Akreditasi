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
                            <h2>Mahasiswa</h2>
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
                                $cek=DB::table('lkps_mahasiswa')->where('id_prodi',$_GET['id'])->first();
                            ?>
                            <form action="{{ url('updatec2lkps') }}" id="wizard_with_validation" method="POST">
                                {{ csrf_field() }}
                                <h3>Kualitas Input Mahasiswa</h3>    
                                <fieldset>
                                <input type="hidden" name="id" value="{{ $cek->id}}"> <br/>
                                    <div class="row justify-content-end">
                                        <p class="justify">Tuliskan data daya tampung, jumlah calon mahasiswa (pendaftar dan peserta yang lulus
                                        seleksi), jumlah mahasiswa baru (reguler dan transfer) dan jumlah mahasiswa aktif
                                        (reguler dan transfer) dalam 5 tahun terakhir di Program Studi yang diakreditasi dengan
                                        mengikuti format Tabel 2.a berikut ini.</p>
                                        <!-- Bordered Table -->
                                        <div class="body table-responsive">
                                            <p>Tabel 2.a Seleksi Mahasiswa</p>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th rowspan ="2" width="" class="text-center">Tahun Akademik</th>
                                                        <th rowspan ="2" width="" class="text-center">Daya Tampung</th>
                                                        <th colspan ="2" width="" class="text-center">Jumlah Calon Mahasiswa</th>
                                                        <th colspan ="2" width="" class="text-center">Jumlah Mahasiswa Baru</th>
                                                        <th colspan ="2" width="" class="text-center">Jumlah Mahasiswa Aktif</th>
                                                        <tr>
                                                            <th width="" class="text-center">Pendaftar</th>
                                                            <th width="" class="text-center">Lulus Seleksi</th>
                                                            <th width="" class="text-center">Reguler</th>
                                                            <th width="" class="text-center">Transfer</th>
                                                            <th width="" class="text-center">Reguler</th>
                                                            <th width="" class="text-center">Transfer</th>
                                                        </tr>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input name="ta4"   value="TS-4" disabled class="form-control form-control-sm" /></td>
                                                        <td><input name="dt4"   value="<?php echo $cek->dt4?>" class="form-control form-control-sm" /></td>
                                                        <td><input name="cmp4"  value="<?php echo $cek->cmp4?>" id="cmp4"   class="form-control form-control-sm" /></td>
                                                        <td><input name="cmls4" value="<?php echo $cek->cmls4?>" id="cmls4"  class="form-control form-control-sm" /></td>
                                                        <td><input name="mbr4"  value="<?php echo $cek->mbr4?>" id="mbr4"   class="form-control form-control-sm" /></td>
                                                        <td><input name="mbt4"  value="<?php echo $cek->mbt4?>" id="mbt4"   class="form-control form-control-sm" /></td>
                                                        <td><input name="mar4"  value="<?php echo $cek->mar4?>" id="mar4"   class="form-control form-control-sm" /></td>
                                                        <td><input name="mat4"  value="<?php echo $cek->mat4?>" id="mat4"   class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="ta3"   value="TS-3" disabled class="form-control form-control-sm" /></td>
                                                        <td><input name="dt3"   value="<?php echo $cek->dt3?>" class="form-control form-control-sm" /></td>
                                                        <td><input name="cmp3"  value="<?php echo $cek->cmp3?>" id="cmp3"   class="form-control form-control-sm" /></td>
                                                        <td><input name="cmls3" value="<?php echo $cek->cmls3?>" id="cmls3"  class="form-control form-control-sm" /></td>
                                                        <td><input name="mbr3"  value="<?php echo $cek->mbr3?>" id="mbr3"   class="form-control form-control-sm" /></td>
                                                        <td><input name="mbt3"  value="<?php echo $cek->mbt3?>" id="mbt3"   class="form-control form-control-sm" /></td>
                                                        <td><input name="mar3"  value="<?php echo $cek->mar3?>" id="mar3"   class="form-control form-control-sm" /></td>
                                                        <td><input name="mat3"  value="<?php echo $cek->mat3?>" id="mat3"   class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="ta2"   value="TS-2" disabled class="form-control form-control-sm" /></td>
                                                        <td><input name="dt2"   value="<?php echo $cek->dt2?>" class="form-control form-control-sm" /></td>
                                                        <td><input name="cmp2"  value="<?php echo $cek->cmp2?>" id="cmp2"  class="form-control form-control-sm" /></td>
                                                        <td><input name="cmls2" value="<?php echo $cek->cmls2?>" id="cmls2" class="form-control form-control-sm" /></td>
                                                        <td><input name="mbr2"  value="<?php echo $cek->mbr2?>" id="mbr2"  class="form-control form-control-sm" /></td>
                                                        <td><input name="mbt2"  value="<?php echo $cek->mbt2?>" id="mbt2"  class="form-control form-control-sm" /></td>
                                                        <td><input name="mar2"  value="<?php echo $cek->mar2?>" id="mar2"  class="form-control form-control-sm" /></td>
                                                        <td><input name="mat2"  value="<?php echo $cek->mat2?>" id="mat2"  class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="ta1"   value="TS-1" disabled class="form-control form-control-sm" /></td>
                                                        <td><input name="dt1"   value="<?php echo $cek->dt1?>" class="form-control form-control-sm" /></td>
                                                        <td><input name="cmp1"  value="<?php echo $cek->cmp1?>" id="cmp1"    class="form-control form-control-sm" /></td>
                                                        <td><input name="cmls1" value="<?php echo $cek->cmls1?>" id="cmls1"   class="form-control form-control-sm" /></td>
                                                        <td><input name="mbr1"  value="<?php echo $cek->mbr1?>" id="mbr1"    class="form-control form-control-sm" /></td>
                                                        <td><input name="mbt1"  value="<?php echo $cek->mbt1?>" id="mbt1"    class="form-control form-control-sm" /></td>
                                                        <td><input name="mar1"  value="<?php echo $cek->mar1?>" id="mar1"    class="form-control form-control-sm" /></td>
                                                        <td><input name="mat1"  value="<?php echo $cek->mat1?>" id="mat1"    class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="ta0"   value="TS" disabled class="form-control form-control-sm" /></td>
                                                        <td><input name="dt0"   value="<?php echo $cek->dt0?>" class="form-control form-control-sm" /></td>
                                                        <td><input name="cmp0"  value="<?php echo $cek->cmp0?>" id="cmp0"   class="form-control form-control-sm" /></td>
                                                        <td><input name="cmls0" value="<?php echo $cek->cmls0?>" id="cmls0"  class="form-control form-control-sm" /></td>
                                                        <td><input name="mbr0"  value="<?php echo $cek->mbr0?>" id="mbr0"   class="form-control form-control-sm" /></td>
                                                        <td><input name="mbt0"  value="<?php echo $cek->mbt0?>" id="mbt0"   class="form-control form-control-sm" /></td>
                                                        <td><input name="nrst"  value="<?php echo $cek->nrts?>" id="nrst"   class="form-control form-control-sm" /></td>
                                                        <td><input name="ntts"  value="<?php echo $cek->ntts?>" id="ntts"   class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <?php
                                                        $na=DB::table('lkps_mahasiswa')
                                                                    ->value(DB::raw("SUM(cmp4 + cmp3 + cmp2 + cmp1 + cmp0)"));
                                                        $nb=DB::table('lkps_mahasiswa')
                                                                    ->value(DB::raw("SUM(cmls4 + cmls3 + cmls2 + cmls1 + cmls0)"));
                                                        $nc=DB::table('lkps_mahasiswa')
                                                                    ->value(DB::raw("SUM(mbr4 + mbr3 + mbr2 + mbr1 + mbr0)"));
                                                        $nd=DB::table('lkps_mahasiswa')
                                                                    ->value(DB::raw("SUM(mbt4 + mbt3 + mbt2 + mbt1 + mbt0)"));
                                                        $nm=DB::table('lkps_mahasiswa')
                                                                    ->value(DB::raw("SUM(nrts + ntts)"));
                                                    ?>
                                                    <tr>
                                                        <th colspan ="2" width="" class="text-center">Jumlah</th>
                                                        <td><input name="na" value="<?php echo $na?>" id="na" class="form-control form-control-sm" /></td>
                                                        <td><input name="nb" value="<?php echo $nb?>" id="nb" class="form-control form-control-sm" /></td>
                                                        <td><input name="nc" value="<?php echo $nc?>" id="nc" class="form-control form-control-sm" /></td>
                                                        <td><input name="nd" value="<?php echo $nd?>" id="nd" class="form-control form-control-sm" /></td>
                                                        <td colspan ="2"><input name="nm" value="<?php echo $nm?>" id="nm" class="form-control form-control-sm" /></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- #END# Bordered Table -->
                                    <p>Keterangan :
                                        <ol>
                                            <li>TS = Tahun akademik penuh terakhir saat pengajuan usulan akreditasi.</li>
                                        </ol> 
                                    </p>
                                </fieldset>

                                <h3>Mahasiswa Asing</h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Tabel 2.b berikut ini diisi oleh pengusul dari Program Studi pada program
                                        Sarjana/Sarjana Terapan/Magister/Magister Terapan/Doktor/Doktor Terapan.

                                        Tuliskan jumlah mahasiswa asing yang terdaftar di seluruh program studi pada UPPS
                                        dalam 3 tahun terakhir dengan mengikuti format Tabel 2.b berikut ini.</p>
                                        <!-- Bordered Table -->
                                        <div class="body table-responsive">
                                            <p>Tabel 2.b Mahasiswa Asing (Foreign Student)</p>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th rowspan ="2" width="" class="text-center">No</th>
                                                        <th rowspan ="2" width="" class="text-center">Program Studi</th>
                                                        <th colspan ="3" width="" class="text-center">Jumlah Mahasiswa Aktif</th>
                                                        <th colspan ="3" width="" class="text-center">Jumlah Mahasiswa Asing Penuh Waktu (Full-Time)</th>
                                                        <th colspan ="3" width="" class="text-center">Jumlah Mahasiswa Asing Paruh Waktu (Part-Time)</th>
                                                        <th rowspan ="2" width="" class="text-center">Aksi</th>
                                                        <tr>
                                                            <th width="" class="text-center">TS-2</th>
                                                            <th width="" class="text-center">TS-1</th>
                                                            <th width="" class="text-center">TS</th>
                                                            <th width="" class="text-center">TS-2</th>
                                                            <th width="" class="text-center">TS-1</th>
                                                            <th width="" class="text-center">TS</th>
                                                            <th width="" class="text-center">TS-2</th>
                                                            <th width="" class="text-center">TS-1</th>
                                                            <th width="" class="text-center">TS</th>
                                                        </tr>
                                                    </tr>
                                                </thead>
                                                <tbody id="C2_LKPS">
                                                <?php $i=1; ?>
                                                @foreach($lkps_c2A as $cek1)
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><input disabled value="<?php echo $cek1->prodi?>" name="prodi[]" class="form-control form-control-sm" /></td>
                                                        <td><input disabled value="<?php echo $cek1->ts2a?>" name="ts2a[]" class="form-control form-control-sm" /></td>
                                                        <td><input disabled value="<?php echo $cek1->ts1a?>" name="ts1a[]" class="form-control form-control-sm" /></td>
                                                        <td><input disabled value="<?php echo $cek1->tsa?>" name="tsa[]" class="form-control form-control-sm" /></td>
                                                        <td><input disabled value="<?php echo $cek1->ts2f?>" name="ts2f[]" class="form-control form-control-sm" /></td>
                                                        <td><input disabled value="<?php echo $cek1->ts1f?>" name="ts1f[]" class="form-control form-control-sm" /></td>
                                                        <td><input disabled value="<?php echo $cek1->tsf?>" name="tsf[]" class="form-control form-control-sm" /></td>
                                                        <td><input disabled value="<?php echo $cek1->ts2p?>" name="ts2p[]" class="form-control form-control-sm" /></td>
                                                        <td><input disabled value="<?php echo $cek1->ts1p?>" name="ts1p[]" class="form-control form-control-sm" /></td>
                                                        <td><input disabled value="<?php echo $cek1->tsp?>" name="tsp[]" class="form-control form-control-sm" /></td>
                                                    </tr>
                                                <?php $i++;?>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- #END# Bordered Table -->
                                    <p>Keterangan :
                                        <p>Mahasiswa asing dapat terdaftar untuk mengikuti program pendidikan secara penuh
                                        waktu (full-time) atau paruh waktu (part-time). Mahasiswa asing paruh waktu adalah
                                        mahasiswa yang terdaftar di Program Studi untuk mengikuti kegiatan pertukaran studi
                                        (student exchange), credit earning, atau kegiatan sejenis yang relevan.</p>
                                    </p>
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
                                                        <form action="{{ route('c2lkps.destroy', $cek->id) }}" method="POST">
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