@extends('layout.basemenu')
@section('content')
  <!-- Main content -->
  <div class="main-content">
  <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>JURUSAN</h2>
            </div>

           <!-- Exportable Table -->
           <div class="row clearfix js-sweetalert">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>JURUSAN</h2>
                            <br>
                            <a href="#" class="btn btn-xs btn-link waves-effect" data-target="#modalAdd" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> ADD DATA</a>
                            <br>
                            @if(\Session::has('edit-gagal'))
                                <div class="alert alert-danger">
                                    <div>{{Session::get('edit-gagal')}}</div>
                                </div>
                            @endif
                            @if(\Session::has('edit-success'))
                                <div class="alert alert-success">
                                    <div>{{Session::get('edit-success')}}</div>
                                </div>
                            @endif
                            <!-- Modal -->
                            <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Tambah Jurusan</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form action="{{ url('jurusanPost') }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="form-group form-float form-group-lg">
                                                <div class="form-line">
                                                    <input name="nama" type="text" class="form-control" />
                                                    <label class="form-label">Nama Jurusan</label>
                                                </div>
                                            </div>                     
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary waves-effect" name="simpan" value="Simpan">SAVE</button>
                                                <button type="reset" class="btn btn-danger waves-effect" name="batal" value="Batal">CANCEL</button>
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
                            <div class="table-responsive js-sweetalert">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Jurusan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Jurusan</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                            $no=0;
                                        ?>
                                        @foreach($master_jurusan as $master_jurusan)
                                        <?php 
                                            $no++;
                                        ?>
                                        <tr>    
                                            <td><?php echo $no;?></td>
                                            <td>{{$master_jurusan->nama}}</td>
                                            <td>
                                            <a href="#" class="btn btn-xs btn-success waves-effect" data-target="#modalEdit{{$master_jurusan->id}}" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalEdit{{$master_jurusan->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" id="myModalLabel">Edit Jurusan</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form action="{{ route('jurusan.update', $master_jurusan->id) }}" method="POST">
                                                            {{ csrf_field() }}
                                                            @method('PUT')
                                                                <div class="form-group form-float form-group-lg ">                                                                  
                                                                    <div class="form-line">
                                                                    <input name="nama" type="text" class="form-control" value="{{$master_jurusan->nama}}" />
                                                                        <label class="form-label">Nama Jurusan</label>
                                                                    </div>
                                                                </div>   
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary waves-effect" name="simpan" value="Simpan">SAVE CHANGES</button>
                                                                    <button type="reset" class="btn btn-danger waves-effect" name="batal" value="Batal">CANCEL</button>
                                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- #END# Modal -->

                                            <a href="#" class="btn btn-xs btn-danger waves-effect" data-target="#modalHapus{{$master_jurusan->id}}" data-toggle="modal"><i class="glyphicon glyphicon-remove"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalHapus{{$master_jurusan->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title" style="text-align:center;">Apakah anda yakin menghapus data ini?</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form action="{{ route('jurusan.destroy', $master_jurusan->id) }}" method="POST">
                                                            {{ csrf_field() }}
                                                            @method('DELETE')
                                                                    <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                                                                    <button type="submit" class="btn btn-danger waves-effect" name="simpan" value="Delete">DELETE</button>
                                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- #END# Modal -->
                                                <!-- <button class="btn btn-xs btn-danger waves-effect" data-type="cancel"><i class="glyphicon glyphicon-remove"></i></button> -->
                                            </td>
                                        </tr>
                                        @endforeach
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