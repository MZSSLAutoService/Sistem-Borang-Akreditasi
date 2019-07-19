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
                            <form action="{{ url('LKPSc4Post') }}" id="wizard_with_validation" method="POST">
                                {{ csrf_field() }}
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
                                                        <td><input type="number" name="TS2uppsbop"  id="TS2uppsbop"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbop"  id="TS1uppsbop"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbop"   id="TSuppsbop"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATuppsbop"  disabled id="RATuppsbop" value="#RATuppsbop"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS2psbop"    id="TS2psbop"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbop"    id="TS1psbop"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbop"     id="TSpsbop"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATpsbop"    disabled id="RATpsbop"   class="form-control form-control-sm" /></td>
                                                    </tr> 
                                                    <tr>    
                                                        <td></td>
                                                        <td class="text-center">a</td>
                                                        <td width="90px">Biaya Dosen (Gaji, Honor)</td>
                                                        <td><input type="number" name="TS2uppsbd"  id="TS2uppsbd"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbd"  id="TS1uppsbd"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbd"   id="TSuppsbd"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATuppsbd"  disabled id="RATuppsbd"   value="#RATuppsbd" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS2psbd"    id="TS2psbd"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbd"    id="TS1psbd"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbd"     id="TSpsbd"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATpsbd"    disabled id="RATpsbd"   class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <tr>    
                                                        <td></td>
                                                        <td class="text-center">b</td>
                                                        <td width="90px">Biaya Tenaga Kependidikan  (Gaji, Honor)</td>
                                                        <td><input type="number" name="TS2uppsbtk"  id="TS2uppsbtk"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbtk"  id="TS1uppsbtk"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbtk"   id="TSuppsbtk"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATuppsbtk"  disabled id="RATuppsbtk"   value="#RATuppsbtk" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS2psbtk"    id="TS2psbtk"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbtk"    id="TS1psbtk"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbtk"     id="TSpsbtk"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATpsbtk"    disabled id="RATpsbtk"   class="form-control form-control-sm" /></td> 
                                                    </tr>
                                                    <tr>    
                                                        <td></td>
                                                        <td class="text-center">c</td>
                                                        <td width="90px">Biaya Operasional Pembelajaran  (Bahan dan Peralatan Habis Pakai)</td>
                                                        <td><input type="number" name="TS2uppsbopm"  id="TS2uppsbopm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbopm"  id="TS1uppsbopm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbopm"   id="TSuppsbopm"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATuppsbopm"  disabled id="RATuppsbopm"   value="#RATuppsbopm" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS2psbopm"    id="TS2psbopm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbopm"    id="TS1psbopm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbopm"     id="TSpsbopm"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATpsbopm"    disabled id="RATpsbopm"   class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <tr>    
                                                        <td></td>
                                                        <td class="text-center">d</td>
                                                        <td width="90px">Biaya Operasional Tidak Langsung  (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport Lokal, Pajak, Asuransi, dll.)</td>
                                                        <td><input type="number" name="TS2uppsbotl"  id="TS2uppsbotl"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbotl"  id="TS1uppsbotl"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbotl"   id="TSuppsbotl"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATuppsbotl"  disabled id="RATuppsbotl"   value="#RATuppsbotl" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS2psbotl"    id="TS2psbotl"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbotl"    id="TS1psbotl"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbotl"     id="TSpsbotl"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATpsbotl"    disabled id="RATpsbotl"   class="form-control form-control-sm" /></td>
                                                    </tr>
                                                <?php $no++?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $no;?></td>
                                                        <td></td>
                                                        <td width="90px">Biaya operasional kemahasiswaan (penalaran, minat, bakat, dan kesejahteraan).</td>
                                                        <td><input type="number" name="TS2uppsbok"  id="TS2uppsbok"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbok"  id="TS1uppsbok"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbok"   id="TSuppsbok"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATuppsbok"  disabled id="RATuppsbok"   value="#RATuppsbok" class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS2psbok"    id="TS2psbok"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbok"    id="TS1psbok"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbok"     id="TSpsbok"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATpsbok"    disabled id="RATpsbok"   class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" class="text-center"><b>JUMLAH</b></td>
                                                        <td><input type="text" disabled id="jml1TS2upps"   class="form-control form-control-sm" /></td>
                                                        <td><input type="text" disabled id="jml1TS1upps"   class="form-control form-control-sm" /></td>
                                                        <td><input type="text" disabled id="jml1TSupps"    class="form-control form-control-sm" /></td>
                                                        <td></td>
                                                        <td><input type="text" disabled id="jml1TS2ps"   class="form-control form-control-sm" /></td>
                                                        <td><input type="text" disabled id="jml1TS1ps"   class="form-control form-control-sm" /></td>
                                                        <td><input type="text" disabled id="jml1TSps"    class="form-control form-control-sm" /></td>
                                                        <td></td>
                                                    </tr>
                                                <?php $no++?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $no;?></td>
                                                        <td></td>
                                                        <td width="90px">Biaya Penelitian</td>
                                                        <td><input type="number" name="TS2uppsbp"  id="TS2uppsbp"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbp"  id="TS1uppsbp"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbp"   id="TSuppsbp"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATuppsbp"  disabled id="RATuppsbp"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS2psbp"    id="TS2psbp"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbp"    id="TS1psbp"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbp"     id="TSpsbp"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATpsbp"    disabled id="RATpsbp"   class="form-control form-control-sm" /></td>
                                                    </tr>
                                                <?php $no++?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $no;?></td>
                                                        <td></td>
                                                        <td width="90px">Biaya PkM</td>
                                                        <td><input type="number" name="TS2uppsbpkm"  id="TS2uppsbpkm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbpkm"  id="TS1uppsbpkm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbpkm"   id="TSuppsbpkm"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATuppsbpkm"  disabled id="RATuppsbpkm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS2psbpkm"    id="TS2psbpkm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbpkm"    id="TS1psbpkm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbpkm"     id="TSpsbpkm"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATpsbpkm"    disabled id="RATpsbpkm"   class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" class="text-center"><b>JUMLAH</b></td>
                                                        <td><input type="text" disabled id="jml2TS2upps"   class="form-control form-control-sm" /></td>
                                                        <td><input type="text" disabled id="jml2TS1upps"   class="form-control form-control-sm" /></td>
                                                        <td><input type="text" disabled id="jml2TSupps"    class="form-control form-control-sm" /></td>
                                                        <td></td>
                                                        <td><input type="text" disabled id="jml2TS2ps"   class="form-control form-control-sm" /></td>
                                                        <td><input type="text" disabled id="jml2TS1ps"   class="form-control form-control-sm" /></td>
                                                        <td><input type="text" disabled id="jml2TSps"    class="form-control form-control-sm" /></td>
                                                        <td></td>
                                                    </tr>
                                                <?php $no++?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $no;?></td>
                                                        <td></td>
                                                        <td width="90px">Biaya Investasi SDM</td>
                                                        <td><input type="number" name="TS2uppsbsdm"  id="TS2uppsbsdm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbsdm"  id="TS1uppsbsdm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbsdm"   id="TSuppsbsdm"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATuppsbsdm"  disabled id="RATuppsbsdm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS2psbsdm"    id="TS2psbsdm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbsdm"    id="TS1psbsdm"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbsdm"     id="TSpsbsdm"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATpsbsdm"    disabled id="RATpsbsdm"   class="form-control form-control-sm" /></td>
                                                    </tr>
                                                <?php $no++?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $no;?></td>
                                                        <td></td>
                                                        <td width="90px">Biaya Investasi Sarana</td>
                                                        <td><input type="number" name="TS2uppsbsrn"  id="TS2uppsbsrn"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbsrn"  id="TS1uppsbsrn"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbsrn"   id="TSuppsbsrn"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATuppsbsrn"  disabled id="RATuppsbsrn"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS2psbsrn"    id="TS2psbsrn"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbsrn"    id="TS1psbsrn"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbsrn"     id="TSpsbsrn"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATpsbsrn"    disabled id="RATpsbsrn"   class="form-control form-control-sm" /></td>
                                                    </tr>
                                                <?php $no++?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $no;?></td>
                                                        <td></td>
                                                        <td width="90px">Biaya Investasi Prasarana</td>
                                                        <td><input type="number" name="TS2uppsbpsrn"  id="TS2uppsbpsrn"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1uppsbpsrn"  id="TS1uppsbpsrn"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSuppsbpsrn"   id="TSuppsbpsrn"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATuppsbpsrn"  disabled id="RATuppsbpsrn"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS2psbpsrn"    id="TS2psbpsrn"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TS1psbpsrn"    id="TS1psbpsrn"   class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="TSpsbpsrn"     id="TSpsbpsrn"    class="form-control form-control-sm" /></td>
                                                        <td><input type="number" name="RATpsbpsrn"    disabled id="RATpsbpsrn"   class="form-control form-control-sm" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" class="text-center"><b>JUMLAH</b></td>
                                                        <td><input type="text" disabled id="jml3TS2upps"   class="form-control form-control-sm" /></td>
                                                        <td><input type="text" disabled id="jml3TS1upps"   class="form-control form-control-sm" /></td>
                                                        <td><input type="text" disabled id="jml3TSupps"    class="form-control form-control-sm" /></td>
                                                        <td></td>
                                                        <td><input type="text" disabled id="jml3TS2ps"   class="form-control form-control-sm" /></td>
                                                        <td><input type="text" disabled id="jml3TS1ps"   class="form-control form-control-sm" /></td>
                                                        <td><input type="text" disabled id="jml3TSps"    class="form-control form-control-sm" /></td>
                                                        <td></td>
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