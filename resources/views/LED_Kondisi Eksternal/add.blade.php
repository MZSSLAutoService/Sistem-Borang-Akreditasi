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
                            <h2>KONDISI EKSTERNAL</h2>
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
                                <form  action="{{ url('LEDKondisiEksPost') }}" id="wizard_with_validation" method="POST">
                                {{ csrf_field() }}
                                    <h3>Kondisi Eksternal</h3>
                                    @if(\Session::has('alert-success'))
                                        <div class="alert alert-success">
                                            <div>{{Session::get('alert-success')}}</div>
                                        </div>
                                    @endif
                                    <fieldset>
                                        <div class="row justify-content-end">
                                            <p class="justify">Bagian ini menjelaskan kondisi eksternal program studi yang diakreditasi, yang
                                            terdiri atas lingkungan makro dan lingkungan mikro di tingkat lokal, nasional,
                                            dan internasional. Lingkungan makro mencakup aspek politik, ekonomi,
                                            kebijakan, sosial, budaya, perkembangan ilmu pengetahuan dan teknologi.
                                            Lingkungan mikro mencakup aspek pesaing, pengguna lulusan, sumber calon
                                            mahasiswa, sumber calon dosen, sumber tenaga kependidikan, e-Learning,
                                            pendidikan jarak jauh, Open Course Ware, kebutuhan dunia usaha/industri dan 
                                            masyarakat, mitra, dan aliansi. </p>
                                            <p class="justify">UPPS perlu menganalisis aspek-aspek dalam lingkungan makro dan lingkungan mikro 
                                            yang relevan dan dapat mempengaruhi eksistensi dan pengembangan UPPS dan program 
                                            studi. UPPS harus mampu merumuskan strategi pengembangan program studi yang 
                                            berkesesuaian untuk menghasilkan program-program pengembangan alternatif yang tepat, 
                                            yang dijabarkan lebih rinci pada Bagian Kedua huruf D.</p>
                                            <br>
                                            <div>
                                                <textarea rows="10" cols="800" name="desc" class="ckeditor" id="ckedtor" required></textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary waves-effect" name="simpan" value="Simpan">SAVE</button>
                                        <button type="reset" class="btn btn-danger waves-effect" name="batal" value="Batal">CANCEL</button>
                                    <div>
                                </form>
                            <div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
            </div>
    </section>
@endsection