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
                            <form action="{{ url('LKPSc1Post') }}"id="wizard_with_validation" method="POST">
                            {{ csrf_field() }}

                            <h3>Kerjasama</h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Tuliskan kerjasama tridharma di Unit Pengelola Program Studi (UPPS) dalam 3 tahun terakhir dengan mengikuti format Tabel 1 berikut ini.</p>
                                        <!-- Bordered Table -->
                                        <div class="body table-responsive">
                                            <p>Tabel 1. Kerjasama Tridharma</p>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th rowspan ="2" width="" class="text-center">Lembaga Mitra</th>
                                                        <th colspan="3" width="" class="text-center">Tingkat</th>
                                                        <th rowspan ="2" width="" class="text-center">Judul Kegiatan Kerjasama</th>
                                                        <th rowspan ="2" width="" class="text-center">Manfaat bagi PS yang Diakreditasi</th>
                                                        <th rowspan ="2" width="" class="text-center">Waktu & durasi</th>
                                                        <th rowspan ="2" width="" class="text-center">Bukti Kerjasama</th>
                                                        <th rowspan ="2" width="" class="text-center">Aksi</th>
                                                        <tr>
                                                            <th width="" class="text-center">Internasional</th>
                                                            <th width="" class="text-center">Nasional</th>
                                                            <th width="" class="text-center">Lokal/Wilayah</th>
                                                        </tr>
                                                    </tr>
                                                </thead>
                                                <tbody id="C1_LKPS">
                                                    <td><input disabled name="lembaga_mitra[0]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="inter[1]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="nasional[2]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="lokal[3]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="judul[4]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="manfaat[5]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="waktu[5]" class="form-control form-control-sm" /></td>
                                                    <td><input disabled name="bukti[5]" class="form-control form-control-sm" /></td>
                                                    <td></td>
                                                </tbody>
                                                <tfoot>
                                                    <tr >
                                                        <td colspan="9">                                                                    
                                                            <button class="btn btn-small btn-success" onclick="additemc1lkps(); return false"><i class="glyphicon glyphicon-plus"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr >
                                                        <td>&Sigma;<br><input disabled name="1" class="form-control form-control-sm" /></td>
                                                        <td><br><input disabled name="2" class="form-control form-control-sm" /></td>
                                                        <td><br><input disabled name="3" class="form-control form-control-sm" /></td>
                                                        <td><br><input disabled name="4" class="form-control form-control-sm" /></td>
                                                        <td><br><input disabled name="5" class="form-control form-control-sm" /></td>
                                                        <td><br><input disabled name="6" class="form-control form-control-sm" /></td>
                                                        <td><br><input disabled name="7" class="form-control form-control-sm" /></td>
                                                        <td><br><input disabled name="8" class="form-control form-control-sm" /></td>
                                                        <td></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- #END# Bordered Table -->
                                    <p>Keterangan :
                                        <ol>
                                            <li>Beri tanda V pada kolom yang sesuai,  jika tidak beri tanda (-).</li>
                                            <li>Diisi dengan judul kegiatan kerjasama yang sudah terimplementasikan, melibatkan sumber daya dan memberikan manfaat bagi Program Studi yang diakreditasi.</li>
                                            <li>Bukti kerjasama dapat berupa Surat Penugasan, Surat Perjanjian Kerjasama (SPK),
                                                bukti-bukti pelaksanaan (laporan, hasil kerjasama, luaran kerjasama), atau bukti lain
                                                yang relevan. Dokumen Memorandum of Understanding (MoU), Memorandum of
                                                Agreement (MoA), atau dokumen sejenis yang memayungi pelaksanaan kerjasama,
                                                tidak dapat dijadikan bukti realisasi kerjasama.</li>
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