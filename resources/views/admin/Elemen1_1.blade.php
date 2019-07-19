@extends('layout.basemenu')
@section('content')
  <!-- Main content -->
  <div class="main-content">
  <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Elemen 1.1</h2>
            </div>

           <!-- Exportable Table -->
           <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ELEMEN 1.1
                            </h2>
                            <br>
                            <a href="#" class="btn btn-xs btn-link waves-effect" data-target="#modalAdd" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> ADD DATA</a>
                            <!-- Modal -->
                            <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Tambah Elemen</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form method="POST">
                                            <div class="form-group form-float form-group-lg">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" />
                                                    <label class="form-label">Nama Deskriptor</label>
                                                </div>
                                                <br>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" />
                                                    <label class="form-label">Harkat Peringkat 4</label>
                                                </div>
                                                <br>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" />
                                                    <label class="form-label">Harkat Peringkat 3</label>
                                                </div>
                                                <br>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" />
                                                    <label class="form-label">Harkat Peringkat 2</label>
                                                </div>
                                                <br>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" />
                                                    <label class="form-label">Harkat Peringkat 1</label>
                                                </div>
                                                <br>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" />
                                                    <label class="form-label">Harkat Peringkat 0</label>
                                                </div>
                                            </div>                     
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary waves-effect" name="simpan" value="Simpan">SAVE</button>
                                                <button type="button" class="btn btn-danger waves-effect" name="batal" value="Batal">CANCEL</button>
                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">CLOSE</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #END# Modal -->
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Deskriptor</th>
                                            <th>Penilai</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Deskriptor</th>
                                            <th>Penilai</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Kejelasan, kerealistikan, dan keterkaitan antar visi, misi, tujuan, sasaran program studi, dan pemangku kepentingan yang terlibat.</td>
                                            <td>
                                                <div class="form-group form-float form-group-lg ">
                                                    <div class="form-line disabled">
                                                        <input type="text" class="form-control" placeholder="Disabled" disabled />
                                                    </div>
                                                </div> 
                                                <a href="#" class="btn btn-xs btn-link waves-effect" data-target="#modalShowKomentar" data-toggle="modal">LIHAT KOMENTAR</a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalShowKomentar" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" id="myModalLabel">Lihat Komentar</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                                                                vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                                                                Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                                                                nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                                                                Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- #END# Modal -->
                                            </td>
                                            <td>
                                            <a href="#" class="btn btn-xs btn-success waves-effect" data-target="#modalEdit" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" id="myModalLabel">Edit File</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form method="POST">
                                                                <div class="form-group form-float form-group-lg ">                                                                  
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" />
                                                                        <label class="form-label">Nama Deskriptor</label>
                                                                    </div>
                                                                    <br>
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" />
                                                                        <label class="form-label">Harkat Peringkat 4</label>
                                                                    </div>
                                                                    <br>
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" />
                                                                        <label class="form-label">Harkat Peringkat 3</label>
                                                                    </div>
                                                                    <br>
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" />
                                                                        <label class="form-label">Harkat Peringkat 2</label>
                                                                    </div>
                                                                    <br>
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" />
                                                                        <label class="form-label">Harkat Peringkat 1</label>
                                                                    </div>
                                                                    <br>
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" />
                                                                        <label class="form-label">Harkat Peringkat 0</label>
                                                                    </div>
                                                                </div>   
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary waves-effect" name="simpan" value="Simpan">SAVE CHANGES</button>
                                                                    <button type="button" class="btn btn-danger waves-effect" name="batal" value="Batal">CANCEL</button>
                                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- #END# Modal -->
                                                <button class="btn btn-xs btn-danger waves-effect" data-type="confirm"><i class="glyphicon glyphicon-remove"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Strategi pencapaian sasaran dengan rentang waktu yang jelas dan didukung oleh dokumen.</td>
                                            <td>
                                                <div class="form-group form-float form-group-lg ">
                                                    <div class="form-line disabled">
                                                        <input type="text" class="form-control" placeholder="Disabled" disabled />
                                                    </div>
                                                </div> 
                                                <a href="#" class="btn btn-xs btn-link waves-effect" data-target="#modalShowKomentar" data-toggle="modal">LIHAT KOMENTAR</a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalShowKomentar" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" id="myModalLabel">Lihat Komentar</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                                                                vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                                                                Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                                                                nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                                                                Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- #END# Modal -->
                                            </td>
                                            <td>
                                            <a href="#" class="btn btn-xs btn-success waves-effect" data-target="#modalEdit" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" id="myModalLabel">Edit File</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form method="POST">
                                                                <div class="form-group form-float form-group-lg ">                                                                  
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" />
                                                                        <label class="form-label">Nama Deskriptor</label>
                                                                    </div>
                                                                    <br>
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" />
                                                                        <label class="form-label">Harkat Peringkat 4</label>
                                                                    </div>
                                                                    <br>
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" />
                                                                        <label class="form-label">Harkat Peringkat 3</label>
                                                                    </div>
                                                                    <br>
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" />
                                                                        <label class="form-label">Harkat Peringkat 2</label>
                                                                    </div>
                                                                    <br>
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" />
                                                                        <label class="form-label">Harkat Peringkat 1</label>
                                                                    </div>
                                                                    <br>
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" />
                                                                        <label class="form-label">Harkat Peringkat 0</label>
                                                                    </div>
                                                                </div>   
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary waves-effect" name="simpan" value="Simpan">SAVE CHANGES</button>
                                                                    <button type="button" class="btn btn-danger waves-effect" name="batal" value="Batal">CANCEL</button>
                                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- #END# Modal -->
                                                <button class="btn btn-xs btn-danger waves-effect" data-type="confirm"><i class="glyphicon glyphicon-remove"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
            
            <!-- Exportable Table -->
           <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                KETERANGAN
                            </h2>
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="5" class="text-center">Harkat dan Peringkat</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center" width="15%">Sangat Baik</th>
                                            <th class="text-center" width="15%">Baik</th>
                                            <th class="text-center" width="15%">Cukup</th>
                                            <th class="text-center" width="15%">Kurang</th>
                                            <th class="text-center" width="15%">Sangat Kurang</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center">4</th>
                                            <th class="text-center">3</th>
                                            <th class="text-center">2</th>
                                            <th class="text-center">1</th>
                                            <th class="text-center">0</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center">4</th>
                                            <th class="text-center">3</th>
                                            <th class="text-center">2</th>
                                            <th class="text-center">1</th>
                                            <th class="text-center">0</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center" width="15%">Sangat Baik</th>
                                            <th class="text-center" width="15%">Baik</th>
                                            <th class="text-center" width="15%">Cukup</th>
                                            <th class="text-center" width="15%">Kurang</th>
                                            <th class="text-center" width="15%">Sangat Kurang</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Memiliki visi, misi, tujuan, dan sasaran yang: (1) Sangat jelas. (2)	Sangat realistik. (3)	Saling terkait satu sama lain. (4) Melibatkan dosen, mahasiswa, tenaga kependidikan, alumni dan masyarakat.</td>
                                            <td>Memiliki visi, misi, tujuan, dan sasaran yang: (1) Jelas. (2)	Realistik. (3) Saling terkait satu sama lain. (4)	Melibatkan dosen, mahasiswa, tenaga kependidikan dan alumni.</td>
                                            <td>Memiliki visi, misi, tujuan, dan sasaran yang: (1) Cukup jelas. (2)	Cukup realistik. (3)	Kurang terkait satu sama lain. (4) Melibatkan dosen, mahasiswa dan tenaga kependidikan.</td>
                                            <td>Memiliki visi, misi, tujuan, dan sasaran yang: (1) Tidak jelas. (2)	Tidak realistik. (3)	Tidak terkait satu sama lain. (4)	Hanya melibatkan unsur pimpinan atau yayasan.</td>
                                            <td>(Tidak ada skor = 0)</td>
                                        </tr>
                                        <tr>
                                            <td>Strategi pencapaian sasaran: (1) dengan tahapan waktu yang jelas dan sangat realistik. (2) didukung dokumen yang sangat lengkap.</td>
                                            <td>Strategi pencapaian sasaran: (1) dengan tahapan waktu yang jelas, dan realistik. (2) didukung dokumen yang lengkap.</td>
                                            <td>Strategi pencapaian sasaran: (1) dengan tahapan waktu yang jelas, dan cukup realistik (2) didukung dokumen yang cukup lengkap.</td>
                                            <td>Strategi pencapaian sasaran: (1) tanpa adanya tahapan waktu yang jelas. (2) didukung dokumen yang kurang lengkap</td>
                                            <td>(Tidak ada skor = 0)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->

            </div>
        </div>
    </section>
      </div>
@endsection