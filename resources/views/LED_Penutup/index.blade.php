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
                            <h2>PENUTUP</h2>
                            <br>
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
                                        // dd($_GET['id']);
                                        $cek=DB::table('led_penutup')->where('id_prodi',$_GET['id'])->first();
                                        // dd($cek);
                                    ?>
                                    <!-- UPDATE -->
                                    <form id="wizard_with_validation" method="POST">
                                    {{ csrf_field() }}

                                    <?php
                                        $cek1=DB::table('komentar')->where('id_penutup',$_GET['upps'])->first();
                                    ?>
                                    @if($cek1 != null)
                                        <h3>Penutup</h3> 
                                            <fieldset>
                                            <div class="row justify-content-end">
                                                <p class="justify">Bagian ini berisi deskripsi yang memuat kesimpulan dari Laporan Evaluasi Diri.</p>
                                                <br>
                                                <div>
                                                    <textarea rows="10" cols="800" name="desc" class="ckeditor" id="ckedtor" required>
                                                        <?php echo $cek->description?>
                                                    </textarea>
                                                </div>
                                            </div>
                                                <?php
                                                    $cek1=DB::table('komentar')->where('id_penutup',$_GET['upps'])->first();
                                                ?>
                                                <div class="modal-footer">
                                                    <input name="komentar" value="<?php echo $cek1->ket?>" placeholder="Komentar" type="text" class="form-control form-control-sm col-sm-6" id="pt">
                                    @else
                                        <form  action="{{ url('komentarpendahuluan') }}" id="wizard_with_validation" method="POST">
                                        <h3>Penutup</h3> 
                                            <fieldset>
                                                <div class="row justify-content-end">
                                                    <p class="justify">Bagian ini berisi deskripsi yang memuat kesimpulan dari Laporan Evaluasi Diri.</p>
                                                    <br>
                                                    <div>
                                                        <textarea rows="10" cols="800" name="mkp" class="ckeditor" id="ckedtor">
                                                            <?php echo $cek->description?>
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" name="id_penutup" value="{{$id_penutup}}"/>
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

                            <div>
                        @else
                            <div class="body">
                                <div class="form-group form-float form-group-lg">
                                    <?php
                                        // dd($_GET['id']);
                                        $cek=DB::table('led_penutup')->where('id_prodi',$_GET['id'])->first();
                                        // dd($cek);
                                    ?>
                                    <!-- UPDATE -->
                                    <form action="{{ url('updatepenutup') }}" id="wizard_with_validation" method="POST">
                                    {{ csrf_field() }}
                                        <h3>Penutup</h3>    
                                        @if(\Session::has('alert-success'))
                                            <div class="alert alert-success">
                                                <div>{{Session::get('alert-success')}}</div>
                                            </div>
                                        @endif
                                        <fieldset>
                                            <div class="row justify-content-end">
                                                <p class="justify">Bagian ini berisi deskripsi yang memuat kesimpulan dari Laporan Evaluasi Diri.</p>
                                                <br>
                                                <div>
                                                    <input type="hidden" name="id" value="{{ $cek->id}}"> <br/>
                                                    <textarea rows="10" cols="800" name="description" class="ckeditor" id="ckedtor">
                                                        <?php echo $cek->description?>
                                                    </textarea>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary waves-effect" name="update" value="Update">UPDATE</button>
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
                                                        <form action="{{ route('penutup.destroy', $cek->id) }}" method="POST">
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

                                            <a href="#" class="btn btn-secondary" data-target="#modalCompare" data-toggle="modal">COMPARE</a>
                                            <!-- Modal Popup --> 
                                            <div id="modalCompare" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title" style="text-align:center;">Cek Similarity</h4>
                                                        </div>
                                                        
                                                        <div class="modal-body">
                                                            <form action="{{ url('comparepost') }}" method="POST">
                                                                {{ csrf_field() }}
                                                                    <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                                                                        <!-- <input type="hidden" name="id" value="{{ $cek->id}}"> <br/> -->
                                                                        <input name="string" placeholder="Nilai" type="text" class="form-control form-control-sm col-sm-6">
                                                                        <button type="submit" class="btn btn-primary waves-effect" name="simpan" value="Cek">CEK</button>
                                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">CLOSE</button>
                                                                    </div>
                                                            </form>

                                                            <?php
                                                                $data = \Session::get('hasil'); 
                                                                echo 'Hasil Dari Compare : ' . $data . '%';
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="reset" class="btn btn-secondary waves-effect" name="batal" value="Batal">CANCEL</button>
                                        <div>
                                    <!-- #END DELETE -->

                                </div>
                            <div>
                        @endif

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
            </div>
    </section>
@endsection