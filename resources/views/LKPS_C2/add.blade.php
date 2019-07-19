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
                            <form action="{{ url('LKPSc2Post') }}" id="wizard_with_validation" method="POST">
                            {{ csrf_field() }}
                                <h3>Kualitas Input Mahasiswa</h3>    
                                <fieldset>
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
                                                        <td><input type="number" name="dt4"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="cmp4"  id="cmp4"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="cmls4" id="cmls4"  class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="mbr4"  id="mbr4"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="mbt4"  id="mbt4"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="mar4"  id="mar4"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="mat4"  id="mat4"   class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="ta3"   value="TS-3" disabled class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="dt3"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="cmp3"  id="cmp3"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="cmls3" id="cmls3"  class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="mbr3"  id="mbr3"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="mbt3"  id="mbt3"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="mar3"  id="mar3"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="mat3"  id="mat3"   class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="ta2"   value="TS-2" disabled class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="dt2"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="cmp2"  id="cmp2"  class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="cmls2" id="cmls2" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="mbr2"  id="mbr2"  class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="mbt2"  id="mbt2"  class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="mar2"  id="mar2"  class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="mat2"  id="mat2"  class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="ta1"   value="TS-1" disabled class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="dt1"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="cmp1"  id="cmp1"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="cmls1" id="cmls1"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="mbr1"  id="mbr1"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="mbt1"  id="mbt1"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="mar1"  id="mar1"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="mat1"  id="mat1"    class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="ta0"   value="TS" disabled class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="dt0"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="cmp0"  id="cmp0"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="cmls0" id="cmls0"  class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="mbr0"  id="mbr0"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="mbt0"  id="mbt0"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="nrst"  id="nrst"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="ntts"  id="ntts"   class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan ="2" width="" class="text-center">Jumlah</th>
                                                        <td><input disabled name="na" id="na" class="form-control form-control-sm" /></td>
                                                        <td><input disabled name="nb" id="nb" class="form-control form-control-sm" /></td>
                                                        <td><input disabled name="nc" id="nc" class="form-control form-control-sm" /></td>
                                                        <td><input disabled name="nd" id="nd" class="form-control form-control-sm" /></td>
                                                        <td colspan ="2"><input disabled name="nm" id="nm" class="form-control form-control-sm" /></td>
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
                                                    <td><input disabled name="prodi[0]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="ts2a[1]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="ts1a[2]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="tsa[3]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="ts2f[4]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="ts1f[5]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="tsf[6]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="ts2p[7]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="ts1p[8]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="tsp[9]" class="form-control form-control-sm" /></td>
                                                    <td></td>
                                                </tbody>
                                                <tfoot>
                                                    <tr >
                                                        <td colspan="11">                                                                    
                                                            <button class="btn btn-small btn-success" onclick="additemc2lkps(); return false"><i class="glyphicon glyphicon-plus"></i></button>
                                                        </td>
                                                    </tr>
                                                </tfoot>
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