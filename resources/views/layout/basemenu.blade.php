<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SIBORA - SISTEM BORANG AKREDITASI</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    @include('layout.css')
    <!--Add Cover LKPS-->
    <script>
        var i = 1;
        function additemcoverlkps() {
        //menentukan target append
            var itemlist = document.getElementById('AddCoverLKPS');
                        
        //membuat element
            var row = document.createElement('tr');
            // var no = document.createElement('td');
            var jenis_upps = document.createElement('td');
            var nama_upps = document.createElement('td');
            var status_upps = document.createElement('td');
            var sk_upps = document.createElement('td');
            var tgl_upps = document.createElement('td');
            var mhs_upps = document.createElement('td');
            var aksi = document.createElement('td');
        
        //meng append element
            itemlist.appendChild(row);
            // row.appendChild(no);
            row.appendChild(jenis_upps);
            row.appendChild(nama_upps);
            row.appendChild(status_upps);
            row.appendChild(sk_upps);
            row.appendChild(tgl_upps);
            row.appendChild(mhs_upps);
            row.appendChild(aksi);
        
        //membuat element input
            // var no_input = document.createElement('input');
            // no_input.setAttribute('name', 'no_input[' + i + ']');
            // no_input.setAttribute('class', 'form-control form-control-sm');
        
            var jenis_pro_input = document.createElement('input');
            jenis_pro_input.setAttribute('name', 'jenis_pro_input[' + i + ']');
            jenis_pro_input.setAttribute('class', 'form-control form-control-sm');

            var nama_pro_input = document.createElement('input');
            nama_pro_input.setAttribute('name', 'nama_pro_input[' + i + ']');
            nama_pro_input.setAttribute('class', 'form-control form-control-sm');

            var status_input = document.createElement('input');
            status_input.setAttribute('name', 'status_input[' + i + ']');
            status_input.setAttribute('class', 'form-control form-control-sm');

            var sk_input = document.createElement('input');
            sk_input.setAttribute('name', 'sk_input[' + i + ']');
            sk_input.setAttribute('class', 'form-control form-control-sm');

            var tgl_kadaluarsa_input = document.createElement('input');
            tgl_kadaluarsa_input.setAttribute('name', 'tgl_kadaluarsa_input[' + i + ']');
            tgl_kadaluarsa_input.setAttribute('class', 'form-control form-control-sm');
            tgl_kadaluarsa_input.setAttribute('type', 'date');

            var jum_mhs_input = document.createElement('input');
            jum_mhs_input.setAttribute('name', 'jum_mhs_input[' + i + ']');
            jum_mhs_input.setAttribute('class', 'form-control form-control-sm');
        
            var hapus = document.createElement('span');
        
        //meng append element input
            // no.appendChild(no_input);
            jenis_upps.appendChild(jenis_pro_input);
            nama_upps.appendChild(nama_pro_input);
            status_upps.appendChild(status_input);
            sk_upps.appendChild(sk_input);
            tgl_upps.appendChild(tgl_kadaluarsa_input);
            mhs_upps.appendChild(jum_mhs_input);
            aksi.appendChild(hapus);
        
            hapus.innerHTML = '<button class="btn btn-small btn-danger"><i class="glyphicon glyphicon-trash"></i></button>';
        //  membuat aksi delete element
            hapus.onclick = function () {
                row.parentNode.removeChild(row);
            };
        
            i++;
        }
    </script>
    
    <!--C1 LKPS-->
    <script>
        var i = 1;
        function additemc1lkps() {
        //menentukan target append
            var itemlist = document.getElementById('C1_LKPS');
                        
        //membuat element
            var row = document.createElement('tr');
            // var no = document.createElement('td');
            var lembaga_mitra = document.createElement('td');
            var inter = document.createElement('td');
            var nasional = document.createElement('td');
            var lokal = document.createElement('td');
            var judul = document.createElement('td');
            var manfaat = document.createElement('td');
            var waktu = document.createElement('td');
            var bukti = document.createElement('td');
            var aksi = document.createElement('td');
        
        //meng append element
            itemlist.appendChild(row);
            // row.appendChild(no);
            row.appendChild(lembaga_mitra);
            row.appendChild(inter);
            row.appendChild(nasional);
            row.appendChild(lokal);
            row.appendChild(judul);
            row.appendChild(manfaat);
            row.appendChild(waktu);
            row.appendChild(bukti);
            row.appendChild(aksi);
        
        //membuat element input
            // var no_input = document.createElement('input');
            // no_input.setAttribute('name', 'no_input[' + i + ']');
            // no_input.setAttribute('class', 'form-control form-control-sm');
        
            var lembaga_mitra_input = document.createElement('input');
            lembaga_mitra_input.setAttribute('name', 'lembaga_mitra_input[' + i + ']');
            lembaga_mitra_input.setAttribute('class', 'form-control form-control-sm');

            var inter_input = document.createElement('input');
            inter_input.setAttribute('name', 'inter_input[' + i + ']');
            inter_input.setAttribute('class', 'form-control form-control-sm');
            // inter_input.setAttribute('type', 'checkbox');

            var nasional_input = document.createElement('input');
            nasional_input.setAttribute('name', 'nasional_input[' + i + ']');
            nasional_input.setAttribute('class', 'form-control form-control-sm');

            var lokal_input = document.createElement('input');
            lokal_input.setAttribute('name', 'lokal_input[' + i + ']');
            lokal_input.setAttribute('class', 'form-control form-control-sm');

            var judul_input = document.createElement('input');
            judul_input.setAttribute('name', 'judul_input[' + i + ']');
            judul_input.setAttribute('class', 'form-control form-control-sm');

            var manfaat_input = document.createElement('input');
            manfaat_input.setAttribute('name', 'manfaat_input[' + i + ']');
            manfaat_input.setAttribute('class', 'form-control form-control-sm');

            var waktu_input = document.createElement('input');
            waktu_input.setAttribute('name', 'waktu_input[' + i + ']');
            waktu_input.setAttribute('class', 'form-control form-control-sm');

            var bukti_input = document.createElement('input');
            bukti_input.setAttribute('name', 'bukti_input[' + i + ']');
            bukti_input.setAttribute('class', 'form-control form-control-sm');
            // bukti_input.setAttribute('type', 'file');
        
            var hapus = document.createElement('span');
        
        //meng append element input
            // no.appendChild(no_input);
            lembaga_mitra.appendChild(lembaga_mitra_input);
            inter.appendChild(inter_input);
            nasional.appendChild(nasional_input);
            lokal.appendChild(lokal_input);
            judul.appendChild(judul_input);
            manfaat.appendChild(manfaat_input);
            waktu.appendChild(waktu_input);
            bukti.appendChild(bukti_input);
            aksi.appendChild(hapus);
        
            hapus.innerHTML = '<button class="btn btn-small btn-danger"><i class="glyphicon glyphicon-trash"></i></button>';
        //  membuat aksi delete element
            hapus.onclick = function () {
                row.parentNode.removeChild(row);
            };
        
            i++;
        }
    </script>

    <!--C2 LKPS-->
    <script>
        var i = 1;
        function additemc2lkps() {
        //menentukan target append
            var itemlist = document.getElementById('C2_LKPS');
                        
        //membuat element
            var row = document.createElement('tr');
            // var no = document.createElement('td');
            var prodi = document.createElement('td');
            var ts2a = document.createElement('td');
            var ts1a = document.createElement('td');
            var tsa = document.createElement('td');
            var ts2f = document.createElement('td');
            var ts1f = document.createElement('td');
            var tsf = document.createElement('td');
            var ts2p = document.createElement('td');
            var ts1p = document.createElement('td');
            var tsp = document.createElement('td');
            var aksi = document.createElement('td');
        
        //meng append element
            itemlist.appendChild(row);
            // row.appendChild(no);
            row.appendChild(prodi);
            row.appendChild(ts2a);
            row.appendChild(ts1a);
            row.appendChild(tsa);
            row.appendChild(ts2f);
            row.appendChild(ts1f);
            row.appendChild(tsf);
            row.appendChild(ts2p);
            row.appendChild(ts1p);
            row.appendChild(tsp);
            row.appendChild(aksi);
        
        //membuat element input
            // var no_input = document.createElement('input');
            // no_input.setAttribute('name', 'no_input[' + i + ']');
            // no_input.setAttribute('class', 'form-control form-control-sm');
        
            var prodi_input = document.createElement('input');
            prodi_input.setAttribute('name', 'prodi_input[' + i + ']');
            prodi_input.setAttribute('class', 'form-control form-control-sm');

            var ts2a_input = document.createElement('input');
            ts2a_input.setAttribute('name', 'ts2a_input[' + i + ']');
            ts2a_input.setAttribute('class', 'form-control form-control-sm');
            ts2a_input.setAttribute('type', 'number');

            var ts1a_input = document.createElement('input');
            ts1a_input.setAttribute('name', 'ts1a_input[' + i + ']');
            ts1a_input.setAttribute('class', 'form-control form-control-sm');
            ts1a_input.setAttribute('type', 'number');

            var tsa_input = document.createElement('input');
            tsa_input.setAttribute('name', 'tsa_input[' + i + ']');
            tsa_input.setAttribute('class', 'form-control form-control-sm');
            tsa_input.setAttribute('type', 'number');

            var ts2f_input = document.createElement('input');
            ts2f_input.setAttribute('name', 'ts2f_input[' + i + ']');
            ts2f_input.setAttribute('class', 'form-control form-control-sm');
            ts2f_input.setAttribute('type', 'number');

            var ts1f_input = document.createElement('input');
            ts1f_input.setAttribute('name', 'ts1f_input[' + i + ']');
            ts1f_input.setAttribute('class', 'form-control form-control-sm');
            ts1f_input.setAttribute('type', 'number');

            var tsf_input = document.createElement('input');
            tsf_input.setAttribute('name', 'tsf_input[' + i + ']');
            tsf_input.setAttribute('class', 'form-control form-control-sm');
            tsf_input.setAttribute('type', 'number');

            var ts2p_input = document.createElement('input');
            ts2p_input.setAttribute('name', 'ts2p_input[' + i + ']');
            ts2p_input.setAttribute('class', 'form-control form-control-sm');
            ts2p_input.setAttribute('type', 'number');

            var ts1p_input = document.createElement('input');
            ts1p_input.setAttribute('name', 'ts1p_input[' + i + ']');
            ts1p_input.setAttribute('class', 'form-control form-control-sm');
            ts1p_input.setAttribute('type', 'number');

            var tsp_input = document.createElement('input');
            tsp_input.setAttribute('name', 'tsp_input[' + i + ']');
            tsp_input.setAttribute('class', 'form-control form-control-sm');
            tsp_input.setAttribute('type', 'number');
        
            var hapus = document.createElement('span');
        
        //meng append element input
            // no.appendChild(no_input);
            prodi.appendChild(prodi_input);
            ts2a.appendChild(ts2a_input);
            ts1a.appendChild(ts1a_input);
            tsa.appendChild(tsa_input);
            ts2f.appendChild(ts2f_input);
            ts1f.appendChild(ts1f_input);
            tsf.appendChild(tsf_input);
            ts2p.appendChild(ts2p_input);
            ts1p.appendChild(ts1p_input);
            tsp.appendChild(tsp_input);
            aksi.appendChild(hapus);
        
            hapus.innerHTML = '<button class="btn btn-small btn-danger"><i class="glyphicon glyphicon-trash"></i></button>';
        //  membuat aksi delete element
            hapus.onclick = function () {
                row.parentNode.removeChild(row);
            };
        
            i++;
        }
    </script>

    <!--C5 LKPS-->
        <script>
            var i = 1;
            function additemc51lkps() {
            //menentukan target append
                var itemlist = document.getElementById('C51_LKPS');
                            
            //membuat element
                var row = document.createElement('tr');
                var SM = document.createElement('td');
                var KMK = document.createElement('td');
                var NMK = document.createElement('td');
                var KRT = document.createElement('td');
                var SEM = document.createElement('td');
                var PPPL = document.createElement('td');
                var KKJ = document.createElement('td');
                var SIK = document.createElement('td');
                var PEN = document.createElement('td');
                var KET = document.createElement('td');
                var KETK = document.createElement('td');
                var DRP = document.createElement('td');
                var UP = document.createElement('td');
                var aksi    = document.createElement('td');
            
            //meng append element
                itemlist.appendChild(row);
                row.appendChild(SM);
                row.appendChild(KMK);
                row.appendChild(NMK);
                row.appendChild(KRT);
                row.appendChild(SEM);
                row.appendChild(PPPL);
                row.appendChild(KKJ);
                row.appendChild(SIK);
                row.appendChild(PEN);
                row.appendChild(KET);
                row.appendChild(KETK);
                row.appendChild(DRP);
                row.appendChild(UP);
                row.appendChild(aksi);

            
            //membuat element input
                var SM_input = document.createElement('input');
                SM_input.setAttribute('name', 'SM_input[' + i + ']');
                SM_input.setAttribute('class', 'form-control form-control-sm');
                SM_input.setAttribute('type', 'number');

                var KMK_input = document.createElement('input');
                KMK_input.setAttribute('name', 'KMK_input[' + i + ']');
                KMK_input.setAttribute('class', 'form-control form-control-sm');
                KMK_input.setAttribute('type', 'number');
                
                var NMK_input = document.createElement('input');
                NMK_input.setAttribute('name', 'NMK_input[' + i + ']');
                NMK_input.setAttribute('class', 'form-control form-control-sm');

                var KRT_input = document.createElement('input');
                KRT_input.setAttribute('name', 'KRT_input[' + i + ']');
                KRT_input.setAttribute('class', 'form-control form-control-sm');
                KRT_input.setAttribute('type', 'number');

                var SEM_input = document.createElement('input');
                SEM_input.setAttribute('name', 'SEM_input[' + i + ']');
                SEM_input.setAttribute('class', 'form-control form-control-sm');
                SEM_input.setAttribute('type', 'number');

                var PPPL_input = document.createElement('input');
                PPPL_input.setAttribute('name', 'PPPL_input[' + i + ']');
                PPPL_input.setAttribute('class', 'form-control form-control-sm');
                PPPL_input.setAttribute('type', 'number');
                
                var KKJ_input = document.createElement('input');
                KKJ_input.setAttribute('name', 'KKJ_input[' + i + ']');
                KKJ_input.setAttribute('class', 'form-control form-control-sm');
                KKJ_input.setAttribute('type', 'number');

                var SIK_input = document.createElement('input');
                SIK_input.setAttribute('name', 'SIK_input[' + i + ']');
                SIK_input.setAttribute('class', 'form-control form-control-sm');

                var PEN_input = document.createElement('input');
                PEN_input.setAttribute('name', 'PEN_input[' + i + ']');
                PEN_input.setAttribute('class', 'form-control form-control-sm');

                var KET_input = document.createElement('input');
                KET_input.setAttribute('name', 'KET_input[' + i + ']');
                KET_input.setAttribute('class', 'form-control form-control-sm');

                var KETK_input = document.createElement('input');
                KETK_input.setAttribute('name', 'KETK_input[' + i + ']');
                KETK_input.setAttribute('class', 'form-control form-control-sm');

                var DRP_input = document.createElement('input');
                DRP_input.setAttribute('name', 'DRP_input[' + i + ']');
                DRP_input.setAttribute('class', 'form-control form-control-sm');

                var UP_input = document.createElement('input');
                UP_input.setAttribute('name', 'UP_input[' + i + ']');
                UP_input.setAttribute('class', 'form-control form-control-sm');
            
                var hapus = document.createElement('span');
            
            //meng append element input
                // no.appendChild(no_input);
                SM.appendChild(SM_input);
                KMK.appendChild(KMK_input);
                NMK.appendChild(NMK_input);
                KRT.appendChild(KRT_input);
                SEM.appendChild(SEM_input);
                PPPL.appendChild(PPPL_input);
                KKJ.appendChild(KKJ_input);
                SIK.appendChild(SIK_input);
                PEN.appendChild(PEN_input);
                KET.appendChild(KET_input);
                KETK.appendChild(KETK_input);
                DRP.appendChild(DRP_input);
                UP.appendChild(UP_input);
                aksi.appendChild(hapus);
            
                hapus.innerHTML = '<button class="btn btn-small btn-danger"><i class="glyphicon glyphicon-trash"></i></button>';
            //  membuat aksi delete element
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                };
            
                i++;
            }
        </script>
        
        <script>
            var i = 1;
            function additemc52lkps() {
            //menentukan target append
                var itemlist = document.getElementById('C52_LKPS');
                            
            //membuat element
                var row = document.createElement('tr');
                var JP = document.createElement('td');
                var ND = document.createElement('td');
                var MK = document.createElement('td');
                var BI = document.createElement('td');
                var aksi = document.createElement('td');
            
            //meng append element
                itemlist.appendChild(row);
                row.appendChild(JP);
                row.appendChild(ND);
                row.appendChild(MK);
                row.appendChild(BI);
                row.appendChild(aksi);

            
            //membuat element input
                var JP_input = document.createElement('input');
                JP_input.setAttribute('name', 'JP_input[' + i + ']');
                JP_input.setAttribute('class', 'form-control form-control-sm');

                var ND_input = document.createElement('input');
                ND_input.setAttribute('name', 'ND_input[' + i + ']');
                ND_input.setAttribute('class', 'form-control form-control-sm');
                
                var MK_input = document.createElement('input');
                MK_input.setAttribute('name', 'MK_input[' + i + ']');
                MK_input.setAttribute('class', 'form-control form-control-sm');

                var BI_input = document.createElement('input');
                BI_input.setAttribute('name', 'BI_input[' + i + ']');
                BI_input.setAttribute('class', 'form-control form-control-sm');
            
                var hapus = document.createElement('span');
            
            //meng append element input
                // no.appendChild(no_input);
                JP.appendChild(JP_input);
                ND.appendChild(ND_input);
                MK.appendChild(MK_input);
                BI.appendChild(BI_input);
                aksi.appendChild(hapus);
            
                hapus.innerHTML = '<button class="btn btn-small btn-danger"><i class="glyphicon glyphicon-trash"></i></button>';
            //  membuat aksi delete element
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                };
            
                i++;
            }
        </script>
    
    <!--C6 LKPS-->
        <script>
            var i = 0;
            function additemc61lkps() {
            //menentukan target append
                var itemlist = document.getElementById('C61_LKPS');
                            
            //membuat element
                var row = document.createElement('tr');
                var dosen = document.createElement('td');
                var tema = document.createElement('td');
                var mhs = document.createElement('td');
                var judul = document.createElement('td');
                var th = document.createElement('td');
                var aksi = document.createElement('td');
            
            //meng append element
                itemlist.appendChild(row);
                row.appendChild(dosen);
                row.appendChild(tema);
                row.appendChild(mhs);
                row.appendChild(judul);
                row.appendChild(th);
                row.appendChild(aksi);

            
            //membuat element input
                var dosen_input1 = document.createElement('input');
                dosen_input1.setAttribute('name', 'dosen_input1[' + i + ']');
                dosen_input1.setAttribute('class', 'form-control form-control-sm');

                var tema_input1 = document.createElement('input');
                tema_input1.setAttribute('name', 'tema_input1[' + i + ']');
                tema_input1.setAttribute('class', 'form-control form-control-sm');
                
                var mhs_input1 = document.createElement('input');
                mhs_input1.setAttribute('name', 'mhs_input1[' + i + ']');
                mhs_input1.setAttribute('class', 'form-control form-control-sm');

                var judul_input1 = document.createElement('input');
                judul_input1.setAttribute('name', 'judul_input1[' + i + ']');
                judul_input1.setAttribute('class', 'form-control form-control-sm');

                var th_input1 = document.createElement('input');
                th_input1.setAttribute('name', 'th_input1[' + i + ']');
                th_input1.setAttribute('class', 'form-control form-control-sm');
                th_input1.setAttribute('type', 'number');

                var hapus = document.createElement('span');
            
            //meng append element input
                // no.appendChild(no_input);
                dosen.appendChild(dosen_input1);
                tema.appendChild(tema_input1);
                mhs.appendChild(mhs_input1);
                judul.appendChild(judul_input1);
                th.appendChild(th_input1);
                aksi.appendChild(hapus);
            
                hapus.innerHTML = '<button class="btn btn-small btn-danger"><i class="glyphicon glyphicon-trash"></i></button>';
            //  membuat aksi delete element
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                };
            
                i++;
            }
        </script>
        
        <script>
            var i = 0;
            function additemc62lkps() {
            //menentukan target append
                var itemlist = document.getElementById('C62_LKPS');
                            
            //membuat element
                var row = document.createElement('tr');
                var dosen = document.createElement('td');
                var tema = document.createElement('td');
                var mhs = document.createElement('td');
                var judul = document.createElement('td');
                var th = document.createElement('td');
                var aksi = document.createElement('td');
            
            //meng append element
                itemlist.appendChild(row);
                row.appendChild(dosen);
                row.appendChild(tema);
                row.appendChild(mhs);
                row.appendChild(judul);
                row.appendChild(th);
                row.appendChild(aksi);

            
            //membuat element input
                var dosen_input = document.createElement('input');
                dosen_input.setAttribute('name', 'dosen_input[' + i + ']');
                dosen_input.setAttribute('class', 'form-control form-control-sm');

                var tema_input = document.createElement('input');
                tema_input.setAttribute('name', 'tema_input[' + i + ']');
                tema_input.setAttribute('class', 'form-control form-control-sm');
                
                var mhs_input = document.createElement('input');
                mhs_input.setAttribute('name', 'mhs_input[' + i + ']');
                mhs_input.setAttribute('class', 'form-control form-control-sm');

                var judul_input = document.createElement('input');
                judul_input.setAttribute('name', 'judul_input[' + i + ']');
                judul_input.setAttribute('class', 'form-control form-control-sm');

                var th_input = document.createElement('input');
                th_input.setAttribute('name', 'th_input[' + i + ']');
                th_input.setAttribute('class', 'form-control form-control-sm');
                th_input.setAttribute('type', 'number');

                var hapus = document.createElement('span');
            
            //meng append element input
                // no.appendChild(no_input);
                dosen.appendChild(dosen_input);
                tema.appendChild(tema_input);
                mhs.appendChild(mhs_input);
                judul.appendChild(judul_input);
                th.appendChild(th_input);
                aksi.appendChild(hapus);
            
                hapus.innerHTML = '<button class="btn btn-small btn-danger"><i class="glyphicon glyphicon-trash"></i></button>';
            //  membuat aksi delete element
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                };
            
                i++;
            }
        </script>

    <!--Add Cover LED-->
    <script>
        var i = 1;
        function additemcoverled() {
        //menentukan target append
            var itemlist = document.getElementById('AddCoverLED');
                        
        //membuat element
            var row = document.createElement('tr');
            // var no = document.createElement('td');
            var jenis_upps = document.createElement('td');
            var nama_upps = document.createElement('td');
            var status_upps = document.createElement('td');
            var sk_upps = document.createElement('td');
            var tgl_upps = document.createElement('td');
            var mhs_upps = document.createElement('td');
            var aksi = document.createElement('td');
        
        //meng append element
            itemlist.appendChild(row);
            // row.appendChild(no);
            row.appendChild(jenis_upps);
            row.appendChild(nama_upps);
            row.appendChild(status_upps);
            row.appendChild(sk_upps);
            row.appendChild(tgl_upps);
            row.appendChild(mhs_upps);
            row.appendChild(aksi);
        
        //membuat element input
            // var no_input = document.createElement('input');
            // no_input.setAttribute('name', 'no_input[' + i + ']');
            // no_input.setAttribute('class', 'form-control form-control-sm');
        
            var jenis_pro_input = document.createElement('input');
            jenis_pro_input.setAttribute('name', 'jenis_pro_input[' + i + ']');
            jenis_pro_input.setAttribute('class', 'form-control form-control-sm');

            var nama_pro_input = document.createElement('input');
            nama_pro_input.setAttribute('name', 'nama_pro_input[' + i + ']');
            nama_pro_input.setAttribute('class', 'form-control form-control-sm');

            var status_input = document.createElement('input');
            status_input.setAttribute('name', 'status_input[' + i + ']');
            status_input.setAttribute('class', 'form-control form-control-sm');

            var sk_input = document.createElement('input');
            sk_input.setAttribute('name', 'sk_input[' + i + ']');
            sk_input.setAttribute('class', 'form-control form-control-sm');

            var tgl_kadaluarsa_input = document.createElement('input');
            tgl_kadaluarsa_input.setAttribute('name', 'tgl_kadaluarsa_input[' + i + ']');
            tgl_kadaluarsa_input.setAttribute('class', 'form-control form-control-sm');
            tgl_kadaluarsa_input.setAttribute('type', 'date');

            var jum_mhs_input = document.createElement('input');
            jum_mhs_input.setAttribute('name', 'jum_mhs_input[' + i + ']');
            jum_mhs_input.setAttribute('class', 'form-control form-control-sm');
        
            var hapus = document.createElement('span');
        
        //meng append element input
            // no.appendChild(no_input);
            jenis_upps.appendChild(jenis_pro_input);
            nama_upps.appendChild(nama_pro_input);
            status_upps.appendChild(status_input);
            sk_upps.appendChild(sk_input);
            tgl_upps.appendChild(tgl_kadaluarsa_input);
            mhs_upps.appendChild(jum_mhs_input);
            aksi.appendChild(hapus);
        
            hapus.innerHTML = '<button class="btn btn-small btn-danger"><i class="glyphicon glyphicon-trash"></i></button>';
        //  membuat aksi delete element
            hapus.onclick = function () {
                row.parentNode.removeChild(row);
            };
        
            i++;
        }
    </script>
</head>

<body class="theme-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/">SIBORA - SISTEM BORANG AKREDITASI</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        @include('layout.leftsidebar')
        @include('layout.rightsidebar')
    </section>
    @yield('content')
  </div>
    </div>
  </div>
  @include('layout.js')
</body>

</html>