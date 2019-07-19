@extends('layout.basemenu')
@section('content')
  <!-- Main content -->
  <div class="main-content">
  <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Deskripsi 1.1.1</h2>
            </div>

           <!-- Exportable Table -->
           <div class="row clearfix  js-sweetalert">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DESKRIPSI 1.1.1
                            </h2>
                            <br>
                            <a href="#" class="btn btn-xs btn-link waves-effect" data-target="#modalAdd" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> ADD DATA</a>
                            <!-- Modal -->
                            <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Tambah Deskripsi</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form method="POST">
                                            <div class="form-group form-float form-group-lg">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" />
                                                    <label class="form-label">Judul</label>
                                                </div>
                                            </div>    
                                            <!-- TinyMCE -->
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="card">
                                                        <div class="header">
                                                            <h2>
                                                                DATA DESKRIPSI
                                                            </h2>
                                                        </div>
                                                        <div class="body">
                                                            <textarea id="tinymce">
                                                                <h2>WYSIWYG Editor</h2>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
                                                                <h3>Lacinia</h3>
                                                                <ul>
                                                                    <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                                                                    <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                                                                    <li>Praesent non lacinia mi.</li>
                                                                    <li>Mauris a ante neque.</li>
                                                                    <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                                                                </ul>
                                                                <h3>Pellentesque adipiscing</h3>
                                                                <p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- #END# TinyMCE -->                        
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
                                            <th>Judul</th>
                                            <th>Action</th>
                                            <th>Similarity</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Action</th>
                                            <th>Similarity</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Visi Misi</td>
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
                                                                        <label class="form-label">Judul</label>
                                                                    </div>
                                                                </div>   
                                                                <br> 
                                                                <!-- CKEditor -->
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="card">
                                                                            <div class="header">
                                                                                <h2>
                                                                                    DATA DESKRIPSI
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <textarea id="ckeditor">
                                                                                    <h2>WYSIWYG Editor</h2>
                                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
                                                                                    <h3>Lacinia</h3>
                                                                                    <ul>
                                                                                        <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                                                                                        <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                                                                                        <li>Praesent non lacinia mi.</li>
                                                                                        <li>Mauris a ante neque.</li>
                                                                                        <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                                                                                    </ul>
                                                                                    <h3>Pellentesque adipiscing</h3>
                                                                                    <p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
                                                                                </textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- #END# CKEditor -->
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
                                            <td>
                                                <div class="form-group form-float form-group-lg ">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Disabled" disabled />
                                                    </div>
                                                </div> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Tujuan</td>
                                            <td>Edinburgh</td>
                                            <td>
                                                <div class="form-group form-float form-group-lg ">
                                                    <div class="form-line disabled">
                                                        <input type="text" class="form-control" placeholder="Disabled" disabled />
                                                    </div>
                                                </div> 
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
            </div>
        </div>
    </section>
    </div>
@endsection