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
                            <h2>Penelitian</h2>
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
                            <form action="{{ url('LKPSc6Post') }}"id="wizard_with_validation" method="POST">
                            {{ csrf_field() }}

                                <h3>Penelitian DTPS yang Melibatkan Mahasiswa </h3>    
                                <fieldset>
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
                                                        <th rowspan ="2" width="" class="text-center">Nama Dosen</th>
                                                        <th rowspan ="2" width="" class="text-center">Tema Penelitian sesuai Roadmap</th>
                                                        <th rowspan ="2" width="" class="text-center">Nama Mahasiswa</th>
                                                        <th rowspan ="2" width="" class="text-center">Judul Kegiatan</th>
                                                        <th rowspan ="2" width="" class="text-center">Tahun</th>
                                                        <th rowspan ="2" width="" class="text-center">Aksi</th>
                                                        <tr>
                                                        </tr>
                                                    </tr>
                                                </thead>
                                                <tbody id="C61_LKPS">
                                                    <td><input disabled name="dosen[0]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="tema[1]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="mhs[2]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="judul[3]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="th[4]" class="form-control form-control-sm" /></td>
                                                    <td></td>
                                                </tbody>
                                                <tfoot>
                                                    <tr >
                                                        <td colspan="6">                                                                    
                                                            <button class="btn btn-small btn-success" onclick="additemc61lkps(); return false"><i class="glyphicon glyphicon-plus"></i></button>
                                                        </td>
                                                    </tr>
                                                </tfoot>
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
                                                        <th rowspan ="2" width="" class="text-center">Nama Dosen</th>
                                                        <th rowspan ="2" width="" class="text-center">Tema Penelitian sesuai Roadmap</th>
                                                        <th rowspan ="2" width="" class="text-center">Nama Mahasiswa</th>
                                                        <th rowspan ="2" width="" class="text-center">Judul Tesis / Disertasi</th>
                                                        <th rowspan ="2" width="" class="text-center">Tahun</th>
                                                        <th rowspan ="2" width="" class="text-center">Aksi</th>
                                                        <tr>
                                                        </tr>
                                                    </tr>
                                                </thead>
                                                <tbody id="C62_LKPS">
                                                    <td><input disabled name="dosen[0]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="tema[1]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="mhs[2]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="judul[3]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="th[4]" class="form-control form-control-sm" /></td>
                                                    <td></td>
                                                </tbody>
                                                <tfoot>
                                                    <tr >
                                                        <td colspan="6">                                                                    
                                                            <button class="btn btn-small btn-success" onclick="additemc62lkps(); return false"><i class="glyphicon glyphicon-plus"></i></button>
                                                        </td>
                                                    </tr>
                                                </tfoot>
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