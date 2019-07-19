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
	</style>
	<style type="text/css">
	/* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
		body {
			height: 100%;
			margin: 0;
			padding: 0;
			background-color: #FAFAFA;
			font: 12pt "Tahoma";
		}
		* {
			box-sizing: border-box;
			-moz-box-sizing: border-box;
		}
		.page {
			width: 210mm;
			min-height: 297mm;
			padding: 20mm;
			margin: 10mm auto;
			background: white;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
		}
		.subpage {
			margin: 30mm 30mm 30mm 40mm;
			height: 257mm;
		}
		
		@page {
			size: A4;
			margin: 0;
		}
		@media print {
			html, body {
				width: 210mm;
				height: 297mm;        
			}
			.page {
				margin: 0;
				border: initial;
				border-radius: initial;
				width: initial;
				min-height: initial;
				box-shadow: initial;
				background: initial;
				page-break-after: always;
			}
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
	
<div class="book">
    <div class="page">
			<br><br><br><br>
			<br><br><br><br>
			<br><br><br><br>
			<div style="text-align:center">
				<img src="{{URL::asset('/images/logopolines.jpg')}}" enctype="multipart/form-data" alt="logopolines" width="20%" height="auto"  /><br>
			</div>
			<br><br>
			<div style="text-align:center">
                <h1><p style="text-align:center"><b>LAPORAN EVALUASI DIRI</b></p></h1>
            </div>
            <div style="text-align:center">
                <h1><p style="text-align:center"><b>AKREDITASI PROGRAM STUDI</b></p></h1>
			</div>
			<br><br><br>
			<br><br><br>
			<center>
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
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
			<br><br><br><br>
			<br><br><br><br>
			<div style="text-align:center">
					<h2><?php echo $led_cover->kota; ?></h2>
			</div>
			<div style="text-align:center">
					<b>TAHUN <?php echo $led_cover->th; ?></b>
			</div>

			<br><br><br><br>
			<br><br><br><br>
			<div style="padding:50px">
                <h1><p style="text-align:center"><b>IDENTITAS PENGUSUL</b></p></h1>
            </div>
            <div style="text-align:center" class="row justify-content-end">
                <div class="col-sm-6">
                	<label for="formGroupExampleInput"><b>Perguruan Tinggi</b></label>
                </div>
                <div class="col-sm-6">
                    <?php echo $led_cover->pt?>
                </div>
			</div>
			<div style="text-align:center" class="row justify-content-end">
                <div class="col-sm-6">
                	<label for="formGroupExampleInput"><b>Unit Pengelola Program Studi</b></label>
                </div>
                <div class="col-sm-6">
                    <?php echo $led_cover->upps?>
                </div>
			</div>
			<div style="text-align:center" class="row justify-content-end">
                <div class="col-sm-6">
                	<label for="formGroupExampleInput"><b>Jenis Program Studi</b></label>
                </div>
                <div class="col-sm-6">
                    <?php echo $led_cover->jenis_ps?>
                </div>
			</div>
	</div>
</div>
	<table>
			<br>
            <div>
                <h1><p style="text-align:center"><b>IDENTITAS PENGUSUL</b></p></h1>
            </div>
            <div style="text-align:center" class="row justify-content-end">
                <div class="col-sm-6">
                	<label for="formGroupExampleInput"><b>Perguruan Tinggi</b></label>
                </div>
                <div class="col-sm-6">
                    <?php echo $led_cover->pt?>
                </div>
			</div>
			<div style="text-align:center" class="row justify-content-end">
                <div class="col-sm-6">
                	<label for="formGroupExampleInput"><b>Unit Pengelola Program Studi</b></label>
                </div>
                <div class="col-sm-6">
                    <?php echo $led_cover->upps?>
                </div>
			</div>
			<div style="text-align:center" class="row justify-content-end">
                <div class="col-sm-6">
                	<label for="formGroupExampleInput"><b>Jenis Program Studi</b></label>
                </div>
                <div class="col-sm-6">
                    <?php echo $led_cover->jenis_ps?>
                </div>
			</div>
			
			<div style="text-align:center">
				<img src="{{URL::asset($led_cover->file_ttd1)}}" width="auto" height="auto"/><br>
			</div>
			<!-- LED Cover -->

			<tr>
				<th>
					<?php
						// echo $led_pendahuluan->description;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $led_pendahuluan->dasar_penyusunan;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $led_pendahuluan->tim_penyusun;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $led_pendahuluan->mekanisme;
					?>
				</th>
			</tr>
			<!-- LED Pendahuluan -->

			<tr>
				<th>
					<?php
						echo $led_upps->description;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $led_upps->sejarah_upps;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $led_upps->visi_misi;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $led_upps->org;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $led_upps->mhs_alumni;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $led_upps->dosen_tk;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $led_upps->keu_sarpras;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $led_upps->spm;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $led_upps->kinerja;
					?>
				</th>
			</tr>
			<!-- LED UPPS -->

			<tr>
				<th>
					<?php
						echo $led_kondisieks->description;
					?>
				</th>
			</tr>
			<!-- LED Kondisi Eksternal -->

			<tr>
				<th>
					<?php
						echo $c1->description;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c1->kebijakan;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c1->stp_vmts;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c1->iku;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c1->ikt;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c1->eval_vmts;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c1->simpulan_vmts;
					?>
				</th>
			</tr>
			<!-- LED C1 -->

			<tr>
				<th>
					<?php
						echo $c2->description;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c2->kebijakan;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c2->stp_vmts;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c2->iku1;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c2->iku2;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c2->iku3;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c2->iku4;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c2->ikt;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c2->eval;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c2->pmtp;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c2->kpg;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c2->simpulan;
					?>
				</th>
			</tr>
			<!-- LED C2 -->

			<tr>
				<th>
					<?php
						echo $c3->description;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c3->kebijakan;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c3->stp_standar;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c3->iku1;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c3->iku2;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c3->iku3;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c3->ikt;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c3->eval;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c3->pmm;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c3->kpg;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c3->simpulan;
					?>
				</th>
			</tr>
			<!-- LED C3 -->

			<tr>
				<th>
					<?php
						echo $c4->description;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c4->kebijakan;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c4->stp_standar;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c4->iku1;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c4->iku2;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c4->iku3;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c4->iku4;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c4->ikt;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c4->eval;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c4->pm_sdm;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c4->kpg;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c4->simpulan;
					?>
				</th>
			</tr>
			<!-- LED C4 -->
			
			<tr>
				<th>
					<?php
						echo $c5->description;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c5->kebijakan;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c5->stp_standar;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c5->iku1;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c5->iku2;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c5->iku3;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c5->ikt;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c5->eval;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c5->pm_keupras;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c5->kpg;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c5->simpulan;
					?>
				</th>
			</tr>
			<!-- LED C5 -->

			<tr>
				<th>
					<?php
						echo $c6->description;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c6->kebijakan;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c6->stp_standar;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c6->iku1;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c6->iku2;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c6->iku3;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c6->ikt;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c6->eval;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c6->pmp;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c6->kpg;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c6->simpulan;
					?>
				</th>
			</tr>
			<!-- LED C6 -->

			<tr>
				<th>
					<?php
						echo $c7->description;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c7->kebijakan;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c7->stp_standar;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c7->iku;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c7->ikt;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c7->eval;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c7->pmpl;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c7->kpg;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c7->simpulan;
					?>
				</th>
			</tr>
			<!-- LED C7 -->

			<tr>
				<th>
					<?php
						echo $c8->description;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c8->kebijakan;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c8->stp_standar;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c8->iku;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c8->ikt;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c8->eval;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c8->pmpm;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c8->kpg;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c8->simpulan;
					?>
				</th>
			</tr>
			<!-- LED C8 -->

			<tr>
				<th>
					<?php
						echo $c9->iku1;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c9->iku2;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c9->ikt;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c9->eval;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c9->pmplct;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c9->kpg;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $c9->simpulan;
					?>
				</th>
			</tr>
			<!-- LED C9 -->

			<tr>
				<th>
					<?php
						echo $analisis->analisis_capaian;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $analisis->analisis_swot;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $analisis->strategi;
					?>
				</th>
			</tr>
			<tr>
				<th>
					<?php
						echo $analisis->program_lanjutan;
					?>
				</th>
			</tr>
			<!-- LED Analisis -->

			<tr>
				<th>
					<?php
						echo $penutup->description;
					?>
				</th>
			</tr>
			<!-- LED Penutup -->
	  	</table>
		  <script>
		window.print();
	</script>
</body>
</html>