<html>
<head>
	<title>Laporan Evaluasi Diri</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
		#kiri
		{
			width:100px;
			height:100px;
			background-color:#FFFFFF;
			float:left;
		}
		#kanan
		{
			width:100px;
			height:100px;
			background-color:#FFFFFF;
			float:right;
		}
	</style>

	<?php
        // dd($_GET['id']);
		$led_cover=DB::table('led_cover')->where('id_prodi',$_GET['id'])->first();
		// dd($led_cover->file_ttd1);
		$data['tb_prodi'] = DB::table('master_prodi')
									->get();
		$data['led_cover_upps'] = DB::table('led_cover_prodi_upps')
									->join('led_cover', 'led_cover_prodi_upps.id_cover', '=', 'led_cover.id')
									->select( 'led_cover_prodi_upps.*')
									->where('id_cover',$_GET['upps'])
									->get();
		$led_pendahuluan=DB::table('led_pendahuluan')->where('id_prodi',$_GET['id'])->first();
		$led_upps=DB::table('led_upps')->where('id_prodi',$_GET['id'])->first();
		$led_kondisieks=DB::table('led_kondisieks')->where('id_prodi',$_GET['id'])->first();
		$c1=DB::table('led_c1')->where('id_prodi',$_GET['id'])->first();
		$c2=DB::table('led_c2')->where('id_prodi',$_GET['id'])->first();
		$c3=DB::table('led_c3')->where('id_prodi',$_GET['id'])->first();
		$c4=DB::table('led_c4')->where('id_prodi',$_GET['id'])->first();
		$c5=DB::table('led_c5')->where('id_prodi',$_GET['id'])->first();
		$c6=DB::table('led_c6')->where('id_prodi',$_GET['id'])->first();
		$c7=DB::table('led_c7')->where('id_prodi',$_GET['id'])->first();
		$c8=DB::table('led_c8')->where('id_prodi',$_GET['id'])->first();
		$c9=DB::table('led_c9')->where('id_prodi',$_GET['id'])->first();
		$analisis=DB::table('led_analisis_upps')->where('id_prodi',$_GET['id'])->first();
		$penutup=DB::table('led_penutup')->where('id_prodi',$_GET['id'])->first();
    ?>
	
<div>
	<br><br><br><br>
	<div style="text-align:center">
		<img src="{{URL::asset('/images/logopolines.jpg')}}" enctype="multipart/form-data" alt="logopolines" width="20%" height="auto"  /><br>
	</div>
	<br><br>
	<div style="text-align:center">
        <h2><p style="text-align:center"><b>LAPORAN EVALUASI DIRI</b></p></h2>
    </div>
	<div style="text-align:center">
		<h1><p style="text-align:center"><b>AKREDITASI PROGRAM STUDI</b></p></h1>
    </div>
	
	<br><br><br><br>
	<br><br>
	<div class="col-sm-4"></div>
	<center>
	<div class="col-sm-4"style="text-align:center">
        <select name="prodi" id="id" class="form-control show-tick">
            @foreach($tb_prodi as $user)
            	<option value="{{$user->id}}"
                    @if ($user->id === $led_cover->prodi)
                    	selected
                    @endif
				>
				{{$user->nama}}
                </option>
            @endforeach
        </select>
	</div>
	</center>
	<br>
	<div class="col-sm-4"></div>
	<div style="text-align:center">
			<h2><?php echo $led_cover->pt; ?></h2>
	</div>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<div style="text-align:center">
			<h2><?php echo $led_cover->kota; ?></h2>
	</div>
	<div style="text-align:center">
			<b>TAHUN <?php echo $led_cover->th; ?></b>
	</div>

	<br><br><br><br>
	<div>
        <h1><p style="text-align:center"><b>IDENTITAS PENGUSUL</b></p></h1>
    </div>
	<table width="800px">
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Perguruan Tinggi</b></label></td>
			<td width="50%"><?php echo $led_cover->pt?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Unit Pengelola Program Studi</b></label></td>
			<td width="50%"><?php echo $led_cover->upps?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Jenis Program Studi</b></label></td>
			<td width="50%"><?php echo $led_cover->jenis_ps?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Nama Program Studi</b></label></td>
			<td width="50%">            
				<select name="prodi" id="id" class="form-control show-tick" disabled>
					@foreach($tb_prodi as $user)
						<option 
							value="{{$user->id}}"
							@if ($user->id === $led_cover->prodi)
								selected
							@endif
								>{{$user->nama}}
					@endforeach
						</option>
            	</select>
			</td>
		</tr>



		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Nomor SK Pendirian PT</b></label></td>
			<td width="50%"><?php echo $led_cover->sk_pt?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Nomor SK Pendirian PT</b></label></td>
			<td width="50%"><?php echo $led_cover->sk_pt?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Alamat Program Studi</b></label></td>
			<td width="50%"><?php echo $led_cover->alamat?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Nomor Telepon</b></label></td>
			<td width="50%"><?php echo $led_cover->telp?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Email & Website</b></label></td>
			<td width="50%"><?php echo $led_cover->email_web?></td>
		</tr>



		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Nomor SK Pendirian PT</b></label></td>
			<td width="50%"><?php echo $led_cover->sk_pt?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Tanggal SK Pendirian PT</b></label></td>
			<td width="50%"><?php echo $led_cover->tgl_sk_pt?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Pejabat Penandatangan SK Pendirian PT</b></label></td>
			<td width="50%"><?php echo $led_cover->pp_sk_pt?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Nomor SK Pembukaan PS</b></label></td>
			<td width="50%"><?php echo $led_cover->sk_ps?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Pejabat Penandatangan SK Pendirian PS</b></label></td>
			<td width="50%"><?php echo $led_cover->pp_sk_ps?></td>
		</tr>		
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Tahun Pertama Kali Menerima Mahasiswa</b></label></td>
			<td width="50%"><?php echo $led_cover->th_awal?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Peringkat Terbaru Akreditasi PS</b></label></td>
			<td width="50%"><?php echo $led_cover->peringkat_banpt?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Nomor SK BAN-PT</b></label></td>
			<td width="50%"><?php echo $led_cover->sk_banpt?></td>
		</tr>
	</table>

	<p>Daftar Program Studi di Unit Pengelola Program Studi (UPPS)</p>
	<table width="800px">
		
		<tr>
			<td width="1%"><label for="formGroupExampleInput"><b>Jenis Program</b></label></td>
			<td width="1%"><label for="formGroupExampleInput"><b>Nama Program Studi</b></label></td>
			<td width="1%"><label for="formGroupExampleInput"><b>Status/Peringkat</b></label></td>
			<td width="1%"><label for="formGroupExampleInput"><b>No. & Tgl. SK</b></label></td>
			<td width="1%"><label for="formGroupExampleInput"><b>Tgl. Kadaluarsa</b></label></td>
			<td width="1%"><label for="formGroupExampleInput"><b>Jumlah <br> Mahasiswa <br>saat TS</b></label></td>
		</tr>
		@foreach($led_cover_upps as $cek1)
		<tr>
			<td width="1%"><?php echo $cek1->jp_upps?></td>
			<td width="1%"><?php echo $cek1->prodi_upps?></td>
			<td width="1%"><?php echo $cek1->status?></td>
			<td width="1%"><?php echo $cek1->no_tgl_sk?></td>
			<td width="1%"><?php echo $cek1->tgl_kdw?></td>
			<td width="1%"><?php echo $cek1->jml_mhs?></td>
		</tr>
		@endforeach
	</table>

	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<div>
        <h1><p style="text-align:center"><b>IDENTITAS TIM PENYUSUN LAPORAN EVALUASI</b></p></h1>
    </div>
	<br><br>
	<table width="800px">
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Nama</b></label></td>
			<td width="50%"><?php echo $led_cover->nama_pys1?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>NIDN</b></label></td>
			<td width="50%"><?php echo $led_cover->nidn_pys1?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Jabatan</b></label></td>
			<td width="50%"><?php echo $led_cover->jabatan_pys1?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Tanggal Pengisian</b></label></td>
			<td width="50%"><?php echo $led_cover->tgl1?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Tanda Tangan</b></label></td>
			<td width="50%">
				<img src="{{URL::asset($led_cover->file_ttd1)}}" width="auto" height="auto"/><br>
			</td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Nama</b></label></td>
			<td width="50%"><?php echo $led_cover->nama_pys2?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>NIDN</b></label></td>
			<td width="50%"><?php echo $led_cover->nidn_pys2?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Jabatan</b></label></td>
			<td width="50%"><?php echo $led_cover->jabatan_pys2?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Tanggal Pengisian</b></label></td>
			<td width="50%"><?php echo $led_cover->tgl2?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Tanda Tangan</b></label></td>
			<td width="50%">
				<img src="{{URL::asset($led_cover->file_ttd2)}}" width="auto" height="auto"/><br>
			</td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Nama</b></label></td>
			<td width="50%"><?php echo $led_cover->nama_pys3?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>NIDN</b></label></td>
			<td width="50%"><?php echo $led_cover->nidn_pys3?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Jabatan</b></label></td>
			<td width="50%"><?php echo $led_cover->jabatan_pys3?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Tanggal Pengisian</b></label></td>
			<td width="50%"><?php echo $led_cover->tgl3?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Tanda Tangan</b></label></td>
			<td width="50%">
				<img src="{{URL::asset($led_cover->file_ttd3)}}" width="auto" height="auto"/><br>
			</td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Nama</b></label></td>
			<td width="50%"><?php echo $led_cover->nama_pys4?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>NIDN</b></label></td>
			<td width="50%"><?php echo $led_cover->nidn_pys4?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Jabatan</b></label></td>
			<td width="50%"><?php echo $led_cover->jabatan_pys4?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Tanggal Pengisian</b></label></td>
			<td width="50%"><?php echo $led_cover->tgl4?></td>
		</tr>
		<tr>
			<td width="50%"><label for="formGroupExampleInput"><b>Tanda Tangan</b></label></td>
			<td width="50%">
				<img src="{{URL::asset($led_cover->file_ttd4)}}" width="auto" height="auto"/><br>
			</td>
		</tr>
	</table>
	
	<br><br><br><br>
	<br><br>
	<div>
        <h1><p style="text-align:center"><b>KATA PENGANTAR</b></p></h1>
    </div>
	<br><br>
		<div style="text-align:center">
			<h1><p style="text-align:center"><?php echo $led_cover->kata_pengantar?></p></h1>
    	</div>
	
	<br><br><br><br>
	<br><br>
	<div>
        <h1><p style="text-align:center"><b>RINGKASAN EKSEKUTIF</b></p></h1>
    </div>
	<br><br>
		<div style="text-align:center">
			<h1><p style="text-align:center"><?php echo $led_cover->ringkasan?></p></h1>
    	</div>
</div>
</body>
</html>