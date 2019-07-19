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
                            $cek=DB::table('lkps_penelitian')->where('id_prodi',$_GET['id'])->first();
                        ?>
                            <form id="wizard_with_validation" method="POST">
                                {{ csrf_field() }}
                                <h3>Penelitian DTPS yang Melibatkan Mahasiswa </h3>    
                                <fieldset>
                                <input type="hidden" name="id" value="{{ $cek->id}}"> <br/>
                                    <div class="row justify-content-end">
                                        <p class="justify"><u>Tabel 6.a berikut ini diisi oleh pengusul dari Program Studi pada program Sarjana/Sarjana Terapan/Magister/Magister Terapan/ Doktor/ Doktor Terapan.</u>
                                        </p>
                                        <p>
                                        Tuliskan data penelitian DTPS yang dalam pelaksanaannya melibatkan mahasiswa Program Studi pada TS-2 sampai dengan TS dengan mengikuti format Tabel 6.a berikut ini.  
                                        </p>
                                        <!-- Bordered Table -->
                                        <div class="body table-responsive">
                                            <p>Tabel 6.a Penelitian DTPS yang melibatkan mahasiswa </p>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th rowspan ="2" class="text-center">Nama Dosen</th>
                                                        <th rowspan ="2" class="text-center">Tema Penelitian sesuai Roadmap</th>
                                                        <th rowspan ="2" class="text-center">Nama Mahasiswa</th>
                                                        <th rowspan ="2" class="text-center">Judul Kegiatan</th>
                                                        <th rowspan ="2" class="text-center">Tahun</th>
                                                        <tr>
                                                        </tr>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($lkpsC61 as $cek1)
                                                    <tr>
                                                        <td><input value="<?php echo $cek1->nama_dosen?>" class="form-control form-control-sm" /></td>
                                                        <td><input value="<?php echo $cek1->tema?>" class="form-control form-control-sm" /></td>
                                                        <td><input value="<?php echo $cek1->nama_mhs?>" class="form-control form-control-sm" /></td>
                                                        <td><input value="<?php echo $cek1->judul?>" class="form-control form-control-sm" /></td>
                                                        <td><input value="<?php echo $cek1->tahun?>" class="form-control form-control-sm" /></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- #END# Bordered Table -->
                                    <p>Keterangan :
                                        <ol>
                                            <li> Judul kegiatan yang melibatkan mahasiswa dalam penelitian dosen dapat berupa Tugas Akhir, Perancangan, Pengembangan Produk/Jasa, atau kegiatan lain yang relevan.</li>
                                        </ol> 
                                    </p>
                                </fieldset>

                                <h3>Penelitian DTPS yang menjadi rujukan tema tesis/disertasi</h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Tuliskan data penelitian DTPS yang menjadi rujukan tema tesis/disertasi mahasiswa Program Studi pada TS-2 sampai dengan TS dengan mengikuti format Tabel 6.b berikut ini. 
                                        </p>
                                        <!-- Bordered Table -->
                                        <div class="body table-responsive">
                                            <p>Tabel 6.b. Penelitian DTPS yang menjadi rujukan tema tesis/disertasi</p>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th rowspan ="2" class="text-center">Nama Dosen</th>
                                                        <th rowspan ="2" class="text-center">Tema Penelitian sesuai Roadmap</th>
                                                        <th rowspan ="2" class="text-center">Nama Mahasiswa</th>
                                                        <th rowspan ="2" class="text-center">Judul Tesis / Disertasi</th>
                                                        <th rowspan ="2" class="text-center">Tahun</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($lkpsC62 as $cek1)
                                                    <tr>
                                                        <td><input value="<?php echo $cek1->nama_dosen?>" class="form-control form-control-sm" /></td>
                                                        <td><input value="<?php echo $cek1->tema?>" class="form-control form-control-sm" /></td>
                                                        <td><input value="<?php echo $cek1->nama_mhs?>" class="form-control form-control-sm" /></td>
                                                        <td><input value="<?php echo $cek1->judul?>" class="form-control form-control-sm" /></td>
                                                        <td><input value="<?php echo $cek1->tahun?>" class="form-control form-control-sm" /></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- #END# Bordered Table -->
                                    <p>Keterangan :
                                        <ol>
                                            <li>Tesis/Disertasi mahasiswa yang merupakan bagian dari agenda penelitian dosen. </li>
                                        </ol> 
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
                                                        <form action="{{ route('c6lkps.destroy', $cek->id) }}" method="POST">
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