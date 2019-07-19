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
                            <h2>COVER</h2>
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
                        @if(Session::get('id_role')=="4")
                            <div class="body">
                                <?php
                                    $cek=DB::table('lkps_cover')->where('id_prodi',$_GET['id'])->first();
                                    // $data['id_cover'] = $_GET['upps'];
                                    
                                    // $cek1=DB::table('led_cover')->get();
                                ?>
                                    
                                <form id="wizard_with_validation" method="POST">
                                    {{ csrf_field() }}
                                    <h3>Halaman Muka/Cover</h3>
                                    <fieldset>
                                        <center><img src="{{URL::asset('/images/logopolines.jpg')}}" enctype="multipart/form-data" alt="logopolines" width="20%" height="auto"  /></center><br>
                                        <div>
                                            <h1><p style="text-align:center"><b>LAPORAN KINERJA PROGRAM STUDI</b></p></h1>
                                        </div>
                                        <div>
                                            <h1><p style="text-align:center"><b>AKREDITASI PROGRAM STUDI</b></p></h1>
                                        </div>
                                        <center>
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4 ">
                                            <select name="prodi" id="id" class="form-control show-tick">
                                            @foreach($tb_prodi as $user)
                                                <option 
                                                    value="{{$user->id}}"
                                                    @if ($user->id === $cek->prodi)
                                                        selected
                                                    @endif
                                                        >{{$user->nama}}
                                                </option>
                                            @endforeach
                                            </select>
                                        </div>
                                        </center>
                                        <div class="col-sm-4"></div>
                                        <br><br><br><br><br><br><br>
                                        <div>
                                            <center>
                                            <div class="form-inline mx-auto">
                                                <?php echo $cek->pt?>
                                            </div>
                                            </center>
                                        </div>
                                        <br><br>
                                        <div>
                                            <center>
                                            <div class="form-inline mx-auto">
                                                <?php echo $cek->kota?>
                                            </div>
                                            </center>
                                        </div>
                                        <br>
                                        <div>
                                            <center>
                                            <div class="form-inline mx-auto">
                                                <label for="formGroupExampleInput"><b>TAHUN</b></label>
                                                <b><?php echo $cek->th?></b>
                                            </div>
                                            </center>
                                        </div>
                                    </fieldset>

                                    <h3>Identitas Pengusul</h3>
                                    <fieldset>
                                        <center><h3>Identitas Pengusul</h3></center>
                                        <br>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Perguruan Tinggi</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->pt?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Unit Pengelola Program Studi</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->upps?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Jenis Program Studi</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->jenis_ps?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Nama Program Studi</b></label>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <select name="prodi" id="id" class="form-control show-tick" disabled>
                                                    @foreach($tb_prodi as $user)
                                                        <option 
                                                            value="{{$user->id}}"
                                                            @if ($user->id === $cek->prodi)
                                                                selected
                                                            @endif
                                                                >{{$user->nama}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Alamat Program Studi</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->alamat?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Nomor Telepon</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->telp?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Email & Website</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->email_web?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Nomor SK Pendirian PT</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->sk_pt?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanggal SK Pendirian PT</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->tgl_sk_pt?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Pejabat Penandatangan SK Pendirian PT</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->pp_sk_pt?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Nomor SK Pembukaan PS</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->sk_ps?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanggal SK Pembukaan PS</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->tgl_sk_ps?>
                                                
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Pejabat Penandatangan SK Pendirian PS</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->pp_sk_ps?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tahun Pertama Kali Menerima Mahasiswa</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->th_awal?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Peringkat Terbaru Akreditasi PS</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->peringkat_banpt?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Nomor SK BAN-PT</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->sk_banpt?>
                                            </div>
                                        </div>

                                        <!-- Bordered Table -->
                                            <div class="body table-responsive">
                                                <p>Daftar Program Studi di Unit Pengelola Program Studi (UPPS)</p>
                                                <table class="table table-bordered" id="dynamic_field">
                                                    <thead>
                                                        <tr>
                                                            <th width="" class="text-center">Jenis Program</th>
                                                            <th width="" class="text-center">Nama Program Studi</th>
                                                            <th width="" class="text-center">Status/Peringkat</th>
                                                            <th width="" class="text-center">No. & Tgl. SK</th>
                                                            <th width="" class="text-center">Tgl. Kadaluarsa</th>
                                                            <th width="" class="text-center">Jumlah Mahasiswa saat TS</th>
                                                        </tr>
                                                    </thead>
                                                    <!-- <tbody id="AddCover"> -->
                                                    <tbody id="UpdateCoverLED">

                                                    @foreach($led as $cek1)
                                                    <tr>
                                                        <td><input disabled name="jenis_upps[]" class="form-control form-control-sm" value="<?php echo $cek1->jp_upps?>"/></td>
                                                        <td><input disabled name="nama_upps[]" class="form-control form-control-sm" value="<?php echo $cek1->prodi_upps?>"/></td>
                                                        <td><input disabled name="status_upps[]" class="form-control form-control-sm" value="<?php echo $cek1->status?>"/></td>
                                                        <td><input disabled name="sk_upps[]" class="form-control form-control-sm" value="<?php echo $cek1->no_tgl_sk?>"/></td>
                                                        <td><input disabled name="tgl_upps[]" class="form-control form-control-sm" value="<?php echo $cek1->tgl_kdw?>"/></td>
                                                        <td><input disabled name="mhs_upps[]" class="form-control form-control-sm" value="<?php echo $cek1->jml_mhs?>"/></td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        <!-- #END# Bordered Table -->
                                        <p>Keterangan :
                                            <ol>
                                                <li>Lampirkan salinan Surat Keputusan Pendirian Perguruan Tinggi</li>
                                                <li>Lampirkan salinan Surat Keputusan Pembukaan Program Studi</li>
                                                <li>Lampirkan salinan Surat Keputusan Akreditasi Program Studi terbaru</li>
                                                <li>Diisi dengan jumlah mahasiswa aktif di masing-masing PS saat TS</li>
                                            </ol> 
                                        </p>
                                    </fieldset>

                                    <h3>Identitas Tim Penyusun Laporan Evaluasi</h3>
                                    <fieldset>
                                        <center><h3>Identitas Tim Penyusun Laporan Evaluasi</h3></center>
                                        <br>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Nama</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->nama_pys1?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>NIDN</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->nidn_pys1?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Jabatan</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->jabatan_pys1?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanggal Pengisian</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->tgl1?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanda Tangan</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <img src="{{URL::asset($cek->file_ttd1)}}" alt="logopolines" width="20%" height="auto"  />
                                            </div>
                                        </div>
                                        <br><br><br>

                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Nama</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->nama_pys2?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>NIDN</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->nidn_pys2?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Jabatan</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->jabatan_pys2?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanggal Pengisian</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->tgl2?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanda Tangan</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <img src="{{URL::asset($cek->file_ttd2)}}" alt="logopolines" width="20%" height="auto"  />
                                            </div>
                                        </div>
                                        <br><br><br>
                                        
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Nama</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->nama_pys3?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>NIDN</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->nidn_pys3?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Jabatan</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->jabatan_pys3?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanggal Pengisian</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->tgl3?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanda Tangan</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <img src="{{URL::asset($cek->file_ttd3)}}" alt="logopolines" width="20%" height="auto"  />
                                            </div>
                                        </div>
                                        <br><br><br>
                                        
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Nama</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->nama_pys4?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>NIDN</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->nidn_pys4?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Jabatan</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->jabatan_pys4?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanggal Pengisian</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $cek->tgl4?>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanda Tangan</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <img src="{{URL::asset($cek->file_ttd4)}}" alt="logopolines" width="20%" height="auto"  />
                                            </div>
                                        </div>
                                    </fieldset>

                                    <h3>Kata Pengantar</h3>
                                    <fieldset>
                                        <ccenter><h3>Kata Pengantar</h3></center>
                                        <br>
                                        <div class="row justify-content-end">
                                            <textarea rows="10" cols="800" class="ckeditor" id="ckedtor"><?php echo $cek->kata_pengantar?></textarea>
                                        </div>
                                    </fieldset>

                            <?php
                                $cek1=DB::table('komentar')->where('id_cover',$_GET['upps'])->first();
                            ?>
                            @if($cek1 != null)
                                    <h3>Ringkasan Ekekutif</h3>
                                    <fieldset>
                                        <center><h3>Ringkasan Ekekutif</h3></center>
                                        <br>
                                        <div class="row justify-content-end">
                                            <textarea rows="10" cols="800"class="ckeditor" id="ckedtor"><?php echo $cek->ringkasan?></textarea>
                                        </div>
                                        <?php
                                            $cek1=DB::table('komentar')->where('id_cover',$_GET['upps'])->first();
                                        ?>
                                        <div class="modal-footer">
                                            <input name="komentar" value="<?php echo $cek1->ket?>" placeholder="Komentar" type="text" class="form-control form-control-sm col-sm-6" id="pt">
                            @else
                                <form  action="{{ url('komentarcover') }}" id="wizard_with_validation" method="POST">
                                    <h3>Ringkasan Ekekutif</h3>
                                    <fieldset>
                                        <center><h3>Ringkasan Ekekutif</h3></center>
                                        <br>
                                        <div class="row justify-content-end">
                                            <textarea rows="10" cols="800"class="ckeditor" id="ckedtor"><?php echo $cek->ringkasan?></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="hidden" name="id_cover" value="{{$id_cover}}"/>
                                            <input name="komentar" placeholder="Komentar" type="text" class="form-control form-control-sm col-sm-6" id="pt">
                                            <button type="submit" class="btn btn-primary waves-effect" name="simpan" value="Simpan">SAVE</button>
                                </form>
                            @endif
                                <!-- #END UPDATE -->
                                            <button type="reset" class="btn btn-secondary waves-effect" name="batal" value="Batal">CANCEL</button>
                                        <div>
                                        <!-- #END DELETE -->
                                    </fieldset>
                            </div>
                        @else
                            <div class="body">
                                <?php
                                    $cek=DB::table('lkps_cover')->where('id_prodi',$_GET['id'])->first();
                                    // $cek1['led'] = DB::table('led_cover_prodi_upps')
                                    //     ->join('led_cover', 'led_cover_prodi_upps.id_cover', '=', 'led_cover.id')
                                    //     ->select( 'led_cover_prodi_upps.*')
                                    //     ->where('id_cover',$_GET['upps'])
                                    //     ->first();
                                    // dd($cek1);
                                ?>
                                <form  action="{{ url('updatecoverlkps') }}" id="wizard_with_validation" method="POST">
                                    {{ csrf_field() }}
                                    <h3>Halaman Muka/Cover</h3>
                                    <fieldset>
                                        <center><img src="{{URL::asset('/images/logopolines.jpg')}}" enctype="multipart/form-data" alt="logopolines" width="20%" height="auto"  /></center><br>
                                        <div>
                                            <h1><p style="text-align:center"><b>LAPORAN KINERJA PROGRAM STUDI</b></p></h1>
                                        </div>
                                        <div>
                                            <h1><p style="text-align:center"><b>AKREDITASI PROGRAM STUDI</b></p></h1>
                                            <input type="hidden" name="id" value="{{ $cek->id}}"> <br/>
                                        </div>
                                        <center>
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4 ">
                                            <select name="prodi" id="id" class="form-control show-tick">
                                            @foreach($tb_prodi as $user)
                                                <option 
                                                    value="{{$user->id}}"
                                                    @if ($user->id === $cek->prodi)
                                                        selected
                                                    @endif
                                                        >{{$user->nama}}
                                                </option>
                                            @endforeach
                                            </select>
                                        </div>
                                        </center>
                                        <div class="col-sm-4"></div>
                                        <br><br><br><br><br><br><br>
                                        <div>
                                            <center>
                                            <div class="form-inline mx-auto">
                                                <input name="pt" type="text" class="form-control form-control-sm" id="pt" placeholder="Nama Perguruan Tinggi" value="<?php echo $cek->pt?>">
                                            </div>
                                            </center>
                                        </div>
                                        <br><br>
                                        <div>
                                            <center>
                                            <div class="form-inline mx-auto">
                                                <input name ="kota" type="text" class="form-control form-control-sm" id="kotapt" placeholder="Kota Perguruan Tinggi" value="<?php echo $cek->kota?>">
                                            </div>
                                            </center>
                                        </div>
                                        <br>
                                        <div>
                                            <center>
                                            <div class="form-inline mx-auto">
                                                <label for="formGroupExampleInput"><b>TAHUN</b></label>
                                                <input name="th" type="text" class="form-control form-control-sm" id="tahun" placeholder="Tahun" value="<?php echo $cek->th?>">
                                            </div>
                                            </center>
                                        </div>
                                    </fieldset>

                                    <h3>Identitas Pengusul</h3>
                                    <fieldset>
                                        <center><h3>Identitas Pengusul</h3></center>
                                        <br>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Perguruan Tinggi</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="" type="text" class="form-control form-control-sm col-sm-6" id="pt" value="<?php echo $cek->pt?>" disabled>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Unit Pengelola Program Studi</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="upps" type="text" class="form-control form-control-sm col-sm-6" id="upt" value="<?php echo $cek->upps?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Jenis Program Studi</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="jenis_ps" type="text" class="form-control form-control-sm col-sm-6" id="jenis_ps" value="<?php echo $cek->jenis_ps?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Nama Program Studi</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="" type="text" class="form-control form-control-sm col-sm-6" id="ps" >
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Alamat Program Studi</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <textarea rows="4" name="alamat" class="form-control no-resize" id="alamat_ps"><?php echo $cek->alamat?></textarea>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Nomor Telepon</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="no_telp" type="text" class="form-control form-control-sm col-sm-6" id="no_telp" value="<?php echo $cek->telp?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Email & Website</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="e_web" type="text" class="form-control form-control-sm col-sm-6" id="eweb" value="<?php echo $cek->email_web?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Nomor SK Pendirian PT</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="no_sk_pt" type="text" class="form-control form-control-sm col-sm-6" id="no_sk_pt" value="<?php echo $cek->sk_pt?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanggal SK Pendirian PT</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="tgl_sk_pt" type="date" class="form-control form-control-sm col-sm-6" id="tgl_sk_pt" value="<?php echo $cek->tgl_sk_pt?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Pejabat Penandatangan SK Pendirian PT</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="pp_sk_pt" type="text" class="form-control form-control-sm col-sm-6" id="sk_pt" value="<?php echo $cek->pp_sk_pt?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Nomor SK Pembukaan PS</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="no_sk_ps" type="text" class="form-control form-control-sm col-sm-6" id="no_sk_ps" value="<?php echo $cek->sk_ps?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanggal SK Pembukaan PS</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="tgl_sk_ps" type="date" class="form-control form-control-sm col-sm-6" id="tgl_sk_ps" value="<?php echo $cek->tgl_sk_ps?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Pejabat Penandatangan SK Pendirian PS</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="pp_sk_ps" type="text" class="form-control form-control-sm col-sm-6" id="sk_ps" value="<?php echo $cek->pp_sk_ps?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tahun Pertama Kali Menerima Mahasiswa</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="th_maba1" type="text" class="form-control form-control-sm col-sm-6" id="th_maba1" value="<?php echo $cek->th_awal?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Peringkat Terbaru Akreditasi PS</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="peringkat" type="text" class="form-control form-control-sm col-sm-6" id="peringkat_akt_ps" value="<?php echo $cek->peringkat_banpt?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Nomor SK BAN-PT</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="no_sk_banpt" type="text" class="form-control form-control-sm col-sm-6" id="no_sk_banpt" value="<?php echo $cek->sk_banpt?>">
                                            </div>
                                        </div>

                                        <!-- Bordered Table -->
                                            <div class="body table-responsive">
                                                <p>Daftar Program Studi di Unit Pengelola Program Studi (UPPS)</p>
                                                <table class="table table-bordered" id="dynamic_field">
                                                    <thead>
                                                        <tr>
                                                            <th width="" class="text-center">Jenis Program</th>
                                                            <th width="" class="text-center">Nama Program Studi</th>
                                                            <th width="" class="text-center">Status/Peringkat</th>
                                                            <th width="" class="text-center">No. & Tgl. SK</th>
                                                            <th width="" class="text-center">Tgl. Kadaluarsa</th>
                                                            <th width="" class="text-center">Jumlah Mahasiswa saat TS</th>
                                                        </tr>
                                                    </thead>
                                                    <!-- <tbody id="AddCover"> -->
                                                    <tbody id="UpdateCoverLKPS">

                                                    @foreach($led as $cek1)
                                                    <tr>
                                                        <td><input disabled name="jenis_upps[]" class="form-control form-control-sm" value="<?php echo $cek1->jp_upps?>"/></td>
                                                        <td><input disabled name="nama_upps[]" class="form-control form-control-sm" value="<?php echo $cek1->prodi_upps?>"/></td>
                                                        <td><input disabled name="status_upps[]" class="form-control form-control-sm" value="<?php echo $cek1->status?>"/></td>
                                                        <td><input disabled name="sk_upps[]" class="form-control form-control-sm" value="<?php echo $cek1->no_tgl_sk?>"/></td>
                                                        <td><input disabled name="tgl_upps[]" class="form-control form-control-sm" value="<?php echo $cek1->tgl_kdw?>"/></td>
                                                        <td><input disabled name="mhs_upps[]" class="form-control form-control-sm" value="<?php echo $cek1->jml_mhs?>"/></td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                    <!-- <tfoot>
                                                        <tr >
                                                            <td colspan="7">                                                                    
                                                                <button class="btn btn-small btn-success" onclick="additemcoverled(); return false"><i class="glyphicon glyphicon-plus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tfoot> -->
                                                </table>
                                            </div>
                                        <!-- #END# Bordered Table -->
                                        <p>Keterangan :
                                            <ol>
                                                <li>Lampirkan salinan Surat Keputusan Pendirian Perguruan Tinggi</li>
                                                <li>Lampirkan salinan Surat Keputusan Pembukaan Program Studi</li>
                                                <li>Lampirkan salinan Surat Keputusan Akreditasi Program Studi terbaru</li>
                                                <li>Diisi dengan jumlah mahasiswa aktif di masing-masing PS saat TS</li>
                                            </ol> 
                                        </p>
                                    </fieldset>

                                    <h3>Identitas Tim Penyusun Laporan Evaluasi</h3>
                                    <fieldset>
                                        <center><h3>Identitas Tim Penyusun Laporan Evaluasi</h3></center>
                                        <br>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Nama</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="nama1" type="text" class="form-control form-control-sm col-sm-6" id="pt" value="<?php echo $cek->nama_pys1?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>NIDN</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="nidn1" type="text" class="form-control form-control-sm col-sm-6" id="pt" value="<?php echo $cek->nidn_pys1?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Jabatan</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="jabatan1" type="text" class="form-control form-control-sm col-sm-6" id="pt" value="<?php echo $cek->jabatan_pys1?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanggal Pengisian</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="tgl1" type="date" class="form-control form-control-sm col-sm-6" id="pt" value="<?php echo $cek->tgl1?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanda Tangan</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- <textarea rows="4" name="ttd1" class="form-control no-resize" id="ttd1"><?php echo $cek->file_ttd1?></textarea> -->
                                                <img src="{{URL::asset($cek->file_ttd1)}}" alt="logopolines" width="20%" height="auto"  />
                                                <!-- <input type="file" name="ttd1"> -->
                                            </div>
                                        </div>
                                        <br><br><br>

                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Nama</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="nama2" type="text" class="form-control form-control-sm col-sm-6" id="pt" value="<?php echo $cek->nama_pys2?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>NIDN</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="nidn2" type="text" class="form-control form-control-sm col-sm-6" id="pt" value="<?php echo $cek->nidn_pys2?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Jabatan</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="jabatan2" type="text" class="form-control form-control-sm col-sm-6" id="pt" value="<?php echo $cek->jabatan_pys2?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanggal Pengisian</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="tgl2" type="date" class="form-control form-control-sm col-sm-6" id="pt" value="<?php echo $cek->tgl2?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanda Tangan</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- <textarea rows="4" name="ttd2" class="form-control no-resize" id="ttd1"><?php echo $cek->file_ttd2?></textarea> -->
                                                <img src="{{URL::asset($cek->file_ttd2)}}" alt="logopolines" width="20%" height="auto"  />
                                                <!-- <input type="file" name="ttd2"> -->
                                            </div>
                                        </div>
                                        <br><br><br>
                                        
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Nama</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="nama3" type="text" class="form-control form-control-sm col-sm-6" id="pt" value="<?php echo $cek->nama_pys3?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>NIDN</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="nidn3" type="text" class="form-control form-control-sm col-sm-6" id="pt" value="<?php echo $cek->nidn_pys3?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Jabatan</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="jabatan3" type="text" class="form-control form-control-sm col-sm-6" id="pt" value="<?php echo $cek->jabatan_pys3?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanggal Pengisian</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="tgl3" type="date" class="form-control form-control-sm col-sm-6" id="pt" value="<?php echo $cek->tgl3?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanda Tangan</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- <textarea rows="4" name="ttd3" class="form-control no-resize" id="ttd1"><?php echo $cek->file_ttd3?></textarea> -->
                                                <img src="{{URL::asset($cek->file_ttd3)}}" alt="logopolines" width="20%" height="auto"  />
                                                <!-- <input type="file" name="ttd3"> -->
                                            </div>
                                        </div>
                                        <br><br><br>
                                        
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Nama</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="nama4" type="text" class="form-control form-control-sm col-sm-6" id="pt" value="<?php echo $cek->nama_pys4?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>NIDN</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="nidn4" type="text" class="form-control form-control-sm col-sm-6" id="pt" value="<?php echo $cek->nidn_pys4?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Jabatan</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="jabatan4" type="text" class="form-control form-control-sm col-sm-6" id="pt" value="<?php echo $cek->jabatan_pys4?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanggal Pengisian</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input name="tgl4" type="date" class="form-control form-control-sm col-sm-6" id="pt" value="<?php echo $cek->tgl4?>">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-sm-6">
                                                <label for="formGroupExampleInput"><b>Tanda Tangan</b></label>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- <textarea rows="4" name="ttd4" class="form-control no-resize" id="ttd1"><?php echo $cek->file_ttd4?></textarea> -->
                                                <img src="{{URL::asset($cek->file_ttd4)}}" alt="logopolines" width="20%" height="auto"  />
                                                <!-- <input type="file" name="ttd4"> -->
                                            </div>
                                        </div>
                                    </fieldset>

                                    <h3>Kata Pengantar</h3>
                                    <fieldset>
                                        <ccenter><h3>Kata Pengantar</h3></center>
                                        <br>
                                        <div class="row justify-content-end">
                                            <textarea rows="10" cols="800" name="kt_pengantar" class="ckeditor" id="ckedtor"><?php echo $cek->kata_pengantar?></textarea>
                                        </div>
                                    </fieldset>

                                    <h3>Ringkasan Ekekutif</h3>
                                    <fieldset>
                                        <center><h3>Ringkasan Ekekutif</h3></center>
                                        <br>
                                        <div class="row justify-content-end">
                                            <textarea rows="10" cols="800" name="ringkasan_eks" class="ckeditor" id="ckedtor"><?php echo $cek->ringkasan?></textarea>
                                        </div>
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
                                                        <form action="{{ route('coverlkps.destroy', $cek->id) }}" method="POST">
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
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
            </div>
    </section>
@endsection