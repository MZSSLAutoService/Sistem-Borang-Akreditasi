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
                            <h2>Keuangan, Sarana, dan Prasarana</h2>
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
                            $cek=DB::table('lkps_keuangan')->where('id_prodi',$_GET['id'])->first();
                            $RATuppsbop=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2uppsbop + TS1uppsbop + TSuppsbop) / 3)"));
                            $RATpsbop=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2psbop + TS1psbop + TSpsbop) / 3)"));  
                            $RATuppsbd=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2uppsbd + TS1uppsbd + TSuppsbd) / 3)"));
                            $RATpsbd=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2psbd + TS1psbd + TSpsbd) / 3)"));
                            $RATuppsbtk=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2uppsbtk + TS1uppsbtk + TSuppsbtk) / 3)"));
                            $RATpsbtk=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2psbtk + TS1psbtk + TSpsbtk) / 3)"));
                            $RATuppsbopm=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2uppsbopm + TS1uppsbopm + TSuppsbopm) / 3)"));
                            $RATpsbopm=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2psbopm + TS1psbopm + TSpsbopm) / 3)"));
                            $RATuppsbotl=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2uppsbotl + TS1uppsbotl + TSuppsbotl) / 3)"));
                            $RATpsbotl=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2psbotl + TS1psbotl + TSpsbotl) / 3)"));
                            $RATuppsbok=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2uppsbok + TS1uppsbok + TSuppsbok) / 3)"));
                            $RATpsbok=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2psbok + TS1psbok + TSpsbok) / 3)"));
                            $RATuppsbp=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2uppsbp + TS1uppsbp + TSuppsbp) / 3)"));
                            $RATpsbp=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2psbp + TS1psbp + TSpsbp) / 3)"));
                            $RATuppsbpkm=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2uppsbpkm + TS1uppsbpkm + TSuppsbpkm) / 3)"));
                            $RATpsbpkm=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2psbpkm + TS1psbpkm + TSpsbpkm) / 3)"));
                            $RATuppsbsdm=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2uppsbsdm + TS1uppsbsdm + TSuppsbsdm) / 3)"));
                            $RATpsbsdm=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2psbsdm + TS1psbsdm + TSpsbsdm) / 3)"));
                            $RATuppsbsrn=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2uppsbsrn + TS1uppsbsrn + TSuppsbsrn) / 3)"));
                            $RATpsbsrn=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2psbsrn + TS1psbsrn + TSpsbsrn) / 3)"));
                            $RATuppsbpsrn=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2uppsbpsrn + TS1uppsbpsrn + TSuppsbpsrn) / 3)"));
                            $RATpsbpsrn=DB::table('lkps_keuangan')
                                            ->value(DB::raw("AVG((TS2psbpsrn + TS1psbpsrn + TSpsbpsrn) / 3)"));
                            
                            $jml1TS2upps=DB::table('lkps_keuangan')
                                            ->value(DB::raw("TS2uppsbop + TS2uppsbd + TS2uppsbtk + TS2uppsbopm + TS2uppsbotl + TS2uppsbok"));
                            $jml1TS1upps=DB::table('lkps_keuangan')
                                            ->value(DB::raw("TS1uppsbop + TS1uppsbd + TS1uppsbtk + TS1uppsbopm + TS1uppsbotl + TS1uppsbok"));
                            $jml1TSupps=DB::table('lkps_keuangan')
                                            ->value(DB::raw("TSuppsbop + TSuppsbd + TSuppsbtk + TSuppsbopm + TSuppsbotl + TSuppsbok"));
                            $jml1TS2ps=DB::table('lkps_keuangan')
                                            ->value(DB::raw("TS2psbop + TS2psbd + TS2psbtk + TS2psbopm + TS2psbotl + TS2psbok"));
                            $jml1TS1ps=DB::table('lkps_keuangan')
                                            ->value(DB::raw("TS1psbop + TS1psbd + TS1psbtk + TS1psbopm + TS1psbotl + TS1psbok"));
                            $jml1TSps=DB::table('lkps_keuangan')
                                            ->value(DB::raw("TSpsbop + TSpsbd + TSpsbtk + TSpsbopm + TSpsbotl + TSpsbok"));
                            $jml2TS2upps=DB::table('lkps_keuangan')
                                            ->value(DB::raw("TS2uppsbp + TS2uppsbpkm"));
                            $jml2TS1upps=DB::table('lkps_keuangan')
                                            ->value(DB::raw("TS1uppsbp + TS1uppsbpkm"));
                            $jml2TSupps=DB::table('lkps_keuangan')
                                            ->value(DB::raw("TSuppsbp + TSuppsbpkm"));
                            $jml2TS2ps=DB::table('lkps_keuangan')
                                            ->value(DB::raw("TS2psbp + TS2psbpkm"));
                            $jml2TS1ps=DB::table('lkps_keuangan')
                                            ->value(DB::raw("TS1psbp + TS1psbpkm"));
                            $jml2TSps=DB::table('lkps_keuangan')
                                            ->value(DB::raw("TSpsbp + TSpsbpkm"));
                            $jml3TS2upps=DB::table('lkps_keuangan')
                                            ->value(DB::raw("TS2uppsbsdm + TS2uppsbsrn + TS2uppsbpsrn"));
                            $jml3TS1upps=DB::table('lkps_keuangan')
                                            ->value(DB::raw("TS1uppsbsdm + TS1uppsbsrn + TS1uppsbpsrn"));
                            $jml3TSupps=DB::table('lkps_keuangan')
                                            ->value(DB::raw("TSuppsbsdm + TSuppsbsrn + TSuppsbpsrn"));
                            $jml3TS2ps=DB::table('lkps_keuangan')
                                            ->value(DB::raw("TS2psbsdm + TS2psbsrn + TS2psbpsrn"));
                            $jml3TS1ps=DB::table('lkps_keuangan')
                                            ->value(DB::raw("TS1psbsdm + TS1psbsrn + TS1psbpsrn"));
                            $jml3TSps=DB::table('lkps_keuangan')
                                            ->value(DB::raw("TSpsbsdm + TSpsbsrn + TSpsbpsrn"));
                                            
                            $jml1RATupps= $RATuppsbop + $RATuppsbd + $RATuppsbtk + $RATuppsbopm + $RATuppsbotl + $RATuppsbok;
                            $jml1RATps= $RATpsbop + $RATpsbd + $RATpsbtk + $RATpsbopm + $RATpsbotl + $RATpsbok;
                            $jml2RATupps= $RATuppsbp + $RATuppsbpkm;
                            $jml2RATps= $RATpsbp + $RATpsbpkm;
                            $jml3RATupps= $RATuppsbsdm + $RATuppsbsrn + $RATuppsbpsrn;
                            $jml3RATps= $RATpsbsdm + $RATpsbsrn + $RATpsbpsrn;

                            $totalTS2upps= $jml1TS2upps + $jml2TS2upps + $jml3TS2upps;
                            $totalTS1upps= $jml1TS1upps + $jml2TS1upps + $jml3TS1upps;
                            $totalTSupps= $jml1TSupps + $jml2TSupps + $jml3TSupps;
                            $totalTS2ps= $jml1TS2ps + $jml2TS2ps + $jml3TS2ps;
                            $totalTS1ps= $jml1TS1ps + $jml2TS1ps + $jml3TS1ps;
                            $totalTSps= $jml1TSps + $jml2TSps + $jml3TSps;
                            $totalRATupps= $jml1RATupps + $jml2RATupps + $jml3RATupps;
                            $totalRATps= $jml1RATps + $jml2RATps + $jml3RATps;
                            // dd($jml1RATupps);
                        ?>
                            <form action="{{ url('updatec4lkps') }}" id="wizard_with_validation" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $cek->id}}"> <br/>
                                <h3>Penggunaan Dana</h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Tuliskan data penggunaan dana yang dikelola oleh UPPS dan data penggunaan dana yang dialokasikan ke program studi yang
                                        diakreditasi dalam 3 tahun terakhir dengan mengikuti format Tabel 4 berikut ini.
                                        </p>
                                        <!-- Bordered Table -->
                                        <div class="body table-responsive">
                                            <p>Tabel 4. Penggunaan Dana</p>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th rowspan ="2" width="" class="text-center">No</th>
                                                        <th rowspan ="2" width="" class="text-center"></th>
                                                        <th rowspan ="2" width="" class="text-center">Jenis Penggunaan</th>
                                                        <th colspan ="4" width="" class="text-center">Unit Pengelola Program Studi (Rp.)</th>
                                                        <th colspan ="4" width="" class="text-center">Program Studi (Rp.)</th>
                                                        <tr>
                                                            <!-- Unit Pengelola Program Studi-->
                                                            <th width="" class="text-center">TS-2</th>
                                                            <th width="" class="text-center">TS-1</th>
                                                            <th width="" class="text-center">TS</th>
                                                            <th width="" class="text-center">Rata - rata</th>
                                                            
                                                            <!-- Program Studi-->
                                                            <th width="" class="text-center">TS-2</th>
                                                            <th width="" class="text-center">TS-1</th>
                                                            <th width="" class="text-center">TS</th>
                                                            <th width="" class="text-center">Rata - rata</th>
                                                        </tr>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php  $no=1;?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $no;?></td>
                                                        <td></td>
                                                        <td width="90px">Biaya Operasional Pendidikan</td>
                                                        <td><input type="number" name="TS2uppsbop"  value="<?php echo $cek->TS2uppsbop?>" id="TS2uppsbop"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbop"  value="<?php echo $cek->TS1uppsbop?>" id="TS1uppsbop"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbop"   value="<?php echo $cek->TSuppsbop?>" id="TSuppsbop"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATuppsbop"><?php echo number_format($RATuppsbop, 2)?></button></td>
                                                        <td><input type="number" name="TS2psbop"    value="<?php echo $cek->TS2psbop?>" id="TS2psbop"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbop"    value="<?php echo $cek->TS1psbop?>" id="TS1psbop"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbop"     value="<?php echo $cek->TSpsbop?>" id="TSpsbop"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATpsbop"><?php echo number_format($RATpsbop, 2)?></button></td>
                                                    </tr> 
                                                    <tr>    
                                                        <td></td>
                                                        <td class="text-center">a</td>
                                                        <td width="90px">Biaya Dosen (Gaji, Honor)</td>
                                                        <td><input type="number" name="TS2uppsbd"  value="<?php echo $cek->TS2uppsbd?>" id="TS2uppsbd"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbd"  value="<?php echo $cek->TS1uppsbd?>" id="TS1uppsbd"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbd"   value="<?php echo $cek->TSuppsbd?>" id="TSuppsbd"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATuppsbd"><?php echo number_format($RATuppsbd, 2)?></button></td>
                                                        <td><input type="number" name="TS2psbd"    value="<?php echo $cek->TS2psbd?>" id="TS2psbd"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbd"    value="<?php echo $cek->TS1psbd?>" id="TS1psbd"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbd"     value="<?php echo $cek->TSpsbd?>" id="TSpsbd"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATpsbd"><?php echo number_format($RATpsbd, 2)?></button></td>
                                                    </tr>
                                                    <tr>    
                                                        <td></td>
                                                        <td class="text-center">b</td>
                                                        <td width="90px">Biaya Tenaga Kependidikan  (Gaji, Honor)</td>
                                                        <td><input type="number" name="TS2uppsbtk"  value="<?php echo $cek->TS2uppsbtk?>" id="TS2uppsbtk"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbtk"  value="<?php echo $cek->TS1uppsbtk?>" id="TS1uppsbtk"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbtk"   value="<?php echo $cek->TSuppsbtk?>" id="TSuppsbtk"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATuppsbtk"><?php echo number_format($RATuppsbtk, 2)?></button></td>
                                                        <td><input type="number" name="TS2psbtk"    value="<?php echo $cek->TS2psbtk?>" id="TS2psbtk"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbtk"    value="<?php echo $cek->TS1psbtk?>" id="TS1psbtk"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbtk"     value="<?php echo $cek->TSpsbtk?>" id="TSpsbtk"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATpsbtk"><?php echo number_format($RATpsbtk, 2)?></button></td>
                                                    </tr>
                                                    <tr>    
                                                        <td></td>
                                                        <td class="text-center">c</td>
                                                        <td width="90px">Biaya Operasional Pembelajaran  (Bahan dan Peralatan Habis Pakai)</td>
                                                        <td><input type="number" name="TS2uppsbopm"  value="<?php echo $cek->TS2uppsbopm?>" id="TS2uppsbopm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbopm"  value="<?php echo $cek->TS1uppsbopm?>" id="TS1uppsbopm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbopm"   value="<?php echo $cek->TSuppsbopm?>" id="TSuppsbopm"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATuppsbopm"><?php echo number_format($RATuppsbopm, 2)?></button></td>
                                                        <td><input type="number" name="TS2psbopm"    value="<?php echo $cek->TS2psbopm?>" id="TS2psbopm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbopm"    value="<?php echo $cek->TS1psbopm?>" id="TS1psbopm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbopm"     value="<?php echo $cek->TSpsbopm?>" id="TSpsbopm"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATpsbopm"><?php echo number_format($RATpsbopm, 2)?></button></td>
                                                    </tr>
                                                    <tr>    
                                                        <td></td>
                                                        <td class="text-center">d</td>
                                                        <td width="90px">Biaya Operasional Tidak Langsung  (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport Lokal, Pajak, Asuransi, dll.)</td>
                                                        <td><input type="number" name="TS2uppsbotl"  value="<?php echo $cek->TS2uppsbotl?>" id="TS2uppsbotl"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbotl"  value="<?php echo $cek->TS1uppsbotl?>" id="TS1uppsbotl"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbotl"   value="<?php echo $cek->TSuppsbotl?>" id="TSuppsbotl"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATuppsbotl"><?php echo number_format($RATuppsbotl, 2)?></button></td>
                                                        <td><input type="number" name="TS2psbotl"    value="<?php echo $cek->TS2psbotl?>" id="TS2psbotl"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbotl"    value="<?php echo $cek->TS1psbotl?>" id="TS1psbotl"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbotl"     value="<?php echo $cek->TSpsbotl?>" id="TSpsbotl"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATpsbotl"><?php echo number_format($RATpsbotl, 2)?></button></td>
                                                    </tr>
                                                <?php $no++?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $no;?></td>
                                                        <td></td>
                                                        <td width="90px">Biaya operasional kemahasiswaan (penalaran, minat, bakat, dan kesejahteraan).</td>
                                                        <td><input type="number" name="TS2uppsbok"  value="<?php echo $cek->TS2uppsbok?>" id="TS2uppsbok"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbok"  value="<?php echo $cek->TS1uppsbok?>" id="TS1uppsbok"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbok"   value="<?php echo $cek->TSuppsbok?>" id="TSuppsbok"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATuppsbok"><?php echo number_format($RATuppsbok, 2)?></button></td>
                                                        <td><input type="number" name="TS2psbok"    value="<?php echo $cek->TS2psbok?>" id="TS2psbok"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbok"    value="<?php echo $cek->TS1psbok?>" id="TS1psbok"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbok"     value="<?php echo $cek->TSpsbok?>" id="TSpsbok"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATpsbok"><?php echo number_format($RATpsbok, 2)?></button></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" class="text-center"><b>JUMLAH</b></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml1TS2upps"><?php echo number_format($jml1TS2upps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml1TS1upps"><?php echo number_format($jml1TS1upps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml1TSupps"><?php echo number_format($jml1TSupps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml1RATupps"><?php echo number_format($jml1RATupps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml1TS2ps"><?php echo number_format($jml1TS2ps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml1TS1ps"><?php echo number_format($jml1TS1ps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml1TSps"><?php echo number_format($jml1TSps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml1RATps"><?php echo number_format($jml1RATps, 2)?></button></td>
                                                    </tr>
                                                <?php $no++?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $no;?></td>
                                                        <td></td>
                                                        <td width="90px">Biaya Penelitian</td>
                                                        <td><input type="number" name="TS2uppsbp"  value="<?php echo $cek->TS2uppsbp?>" id="TS2uppsbp"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbp"  value="<?php echo $cek->TS1uppsbp?>" id="TS1uppsbp"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbp"   value="<?php echo $cek->TSuppsbp?>" id="TSuppsbp"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATuppsbp"><?php echo number_format($RATuppsbp, 2)?></button></td>
                                                        <td><input type="number" name="TS2psbp"    value="<?php echo $cek->TS2psbp?>" id="TS2psbp"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbp"    value="<?php echo $cek->TS1psbp?>" id="TS1psbp"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbp"     value="<?php echo $cek->TSpsbp?>" id="TSpsbp"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATpsbp"><?php echo number_format($RATpsbp, 2)?></button></td>
                                                    </tr>
                                                <?php $no++?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $no;?></td>
                                                        <td></td>
                                                        <td width="90px">Biaya PkM</td>
                                                        <td><input type="number" name="TS2uppsbpkm"  value="<?php echo $cek->TS2uppsbpkm?>" id="TS2uppsbpkm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbpkm"  value="<?php echo $cek->TS1uppsbpkm?>" id="TS1uppsbpkm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbpkm"   value="<?php echo $cek->TSuppsbpkm?>" id="TSuppsbpkm"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATuppsbpkm"><?php echo number_format($RATuppsbpkm, 2)?></button></td>
                                                        <td><input type="number" name="TS2psbpkm"    value="<?php echo $cek->TS2psbpkm?>" id="TS2psbpkm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbpkm"    value="<?php echo $cek->TS1psbpkm?>" id="TS1psbpkm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbpkm"     value="<?php echo $cek->TSpsbpkm?>" id="TSpsbpkm"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATpsbpkm"><?php echo number_format($RATpsbpkm, 2)?></button></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" class="text-center"><b>JUMLAH</b></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml2TS2upps"><?php echo number_format($jml2TS2upps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml2TS1upps"><?php echo number_format($jml2TS1upps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml2TSupps"><?php echo number_format($jml2TSupps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml2RATupps"><?php echo number_format($jml2RATupps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml2TS2ps"><?php echo number_format($jml2TS2ps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml2TS1ps"><?php echo number_format($jml2TS1ps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml2TSps"><?php echo number_format($jml2TSps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml2RATps"><?php echo number_format($jml2RATps, 2)?></button></td>
                                                    </tr>
                                                <?php $no++?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $no;?></td>
                                                        <td></td>
                                                        <td width="90px">Biaya Investasi SDM</td>
                                                        <td><input type="number" name="TS2uppsbsdm"  value="<?php echo $cek->TS2uppsbsdm?>" id="TS2uppsbsdm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbsdm"  value="<?php echo $cek->TS1uppsbsdm?>" id="TS1uppsbsdm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbsdm"   value="<?php echo $cek->TSuppsbsdm?>" id="TSuppsbsdm"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATuppsbsdm"><?php echo number_format($RATuppsbsdm, 2)?></button></td>
                                                        <td><input type="number" name="TS2psbsdm"    value="<?php echo $cek->TS2psbsdm?>" id="TS2psbsdm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbsdm"    value="<?php echo $cek->TS1psbsdm?>" id="TS1psbsdm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbsdm"     value="<?php echo $cek->TSpsbsdm?>" id="TSpsbsdm"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATpsbsdm"><?php echo number_format($RATpsbsdm, 2)?></button></td>
                                                    </tr>
                                                <?php $no++?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $no;?></td>
                                                        <td></td>
                                                        <td width="90px">Biaya Investasi Sarana</td>
                                                        <td><input type="number" name="TS2uppsbsrn"  value="<?php echo $cek->TS2uppsbsrn?>" id="TS2uppsbsrn"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbsrn"  value="<?php echo $cek->TS1uppsbsrn?>" id="TS1uppsbsrn"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbsrn"   value="<?php echo $cek->TSuppsbsrn?>" id="TSuppsbsrn"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATuppsbsrn"><?php echo number_format($RATuppsbsrn, 2)?></button></td>
                                                        <td><input type="number" name="TS2psbsrn"    value="<?php echo $cek->TS2psbsrn?>" id="TS2psbsrn"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbsrn"    value="<?php echo $cek->TS1psbsrn?>" id="TS1psbsrn"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbsrn"     value="<?php echo $cek->TSpsbsrn?>" id="TSpsbsrn"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATpsbsrn"><?php echo number_format($RATpsbsrn, 2)?></button></td>
                                                    </tr>
                                                <?php $no++?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $no;?></td>
                                                        <td></td>
                                                        <td width="90px">Biaya Investasi Prasarana</td>
                                                        <td><input type="number" name="TS2uppsbpsrn"  value="<?php echo $cek->TS2uppsbpsrn?>" id="TS2uppsbpsrn"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbpsrn"  value="<?php echo $cek->TS1uppsbpsrn?>" id="TS1uppsbpsrn"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbpsrn"   value="<?php echo $cek->TSuppsbpsrn?>" id="TSuppsbpsrn"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATuppsbpsrn"><?php echo number_format($RATuppsbpsrn, 2)?></button></td>
                                                        <td><input type="number" name="TS2psbpsrn"    value="<?php echo $cek->TS2psbpsrn?>" id="TS2psbpsrn"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbpsrn"    value="<?php echo $cek->TS1psbpsrn?>" id="TS1psbpsrn"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbpsrn"     value="<?php echo $cek->TSpsbpsrn?>" id="TSpsbpsrn"    class="form-control form-control-sm" /></td>
                                                        <td><button class="btn bg-orange btn-lg btn-block waves-effect" type="button" id="RATpsbpsrn"><?php echo number_format($RATpsbpsrn, 2)?></button></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" class="text-center"><b>JUMLAH</b></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml3TS2upps"><?php  echo number_format($jml3TS2upps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml3TS1upps"><?php  echo number_format($jml3TS1upps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml3TSupps"><?php   echo number_format($jml3TSupps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml3RATupps"><?php  echo number_format($jml3RATupps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml3TS2ps"><?php    echo number_format($jml3TS2ps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml3TS1ps"><?php    echo number_format($jml3TS1ps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml3TSps"><?php     echo number_format($jml3TSps, 2)?></button></td>
                                                        <td><button class="btn bg-blue btn-lg btn-block waves-effect" type="button" id="jml3RATps"><?php    echo number_format($jml3RATps, 2)?></button></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" class="text-center"><b>TOTAL</b></td>
                                                        <td><button class="btn bg-green btn-lg btn-block waves-effect" type="button" id="totalTS2upps"><?php    echo number_format($totalTS2upps, 2)?></button></td>
                                                        <td><button class="btn bg-green btn-lg btn-block waves-effect" type="button" id="totalTS1upps"><?php    echo number_format($totalTS1upps, 2)?></button></td>
                                                        <td><button class="btn bg-green btn-lg btn-block waves-effect" type="button" id="totalTSupps"><?php    echo number_format($totalTSupps, 2)?></button></td>
                                                        <td><button class="btn bg-green btn-lg btn-block waves-effect" type="button" id="totalRATupps"><?php    echo number_format($totalRATupps, 2)?></button></td>
                                                        <td><button class="btn bg-green btn-lg btn-block waves-effect" type="button" id="totalTS2ps"><?php    echo number_format($totalTS2ps, 2)?></button></td>
                                                        <td><button class="btn bg-green btn-lg btn-block waves-effect" type="button" id="totalTS1ps"><?php    echo number_format($totalTS1ps, 2)?></button></td>
                                                        <td><button class="btn bg-green btn-lg btn-block waves-effect" type="button" id="totalTSps"><?php    echo number_format($totalTSps, 2)?></button></td>
                                                        <td><button class="btn bg-green btn-lg btn-block waves-effect" type="button" id="totalRATps"><?php    echo number_format($totalRATps, 2)?></button></td>
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
                                                        <form action="{{ route('c4lkps.destroy', $cek->id) }}" method="POST">
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