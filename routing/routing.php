<?php 

    if (!empty($_GET['p']))
    {
        $p=strtolower($_GET['p']);
        
        if ($p=="login")
        {
            include('view/login.php');
        }
        elseif ($p=="siswa")
        {
            $title="Pilih Siswa";
            if (!empty($_POST['nama']))
            {
                $nama = $_POST['nama'];
                $reset = '<a href="?p=siswa" class="btn btn-success"><i class="bi-recycle"></i> Reset</a>';
                $carisiswa = $siswa->cariWildCard($con, $nama);
            }else
            {
                $carisiswa = "";
                $reset="";
            }


            include('view/index.php');
        }
        elseif ($p=="input_pelanggaran")
        {
            $title="Input Pelanggaran Siswa";
            $list_siswa = $siswa->showAll($con);
            $list_pelanggaran = $pelanggaran->showAll($con);

        if (!empty($_GET['pel'])) {
            $find_pelanggaran = $pelanggaran->find($con, $_GET['pel']);
            $id_pelanggaran = $find_pelanggaran['id_pelanggaran'];
            $nm_pelanggaran = $find_pelanggaran['pelanggaran'];
        }else
        {
           $id_pelanggaran="";
           $nm_pelanggaran="";     
        }            

            if (!empty($_POST['id_pelanggaran']))
            {
                $id_siswa = $_POST['id_siswa'];
                $id_pelanggaran = $_POST['id_pelanggaran'];
                $tgl = time();
                $input=$pelanggaran->inputPelanggaranSiswa($con, $tgl, $id_siswa, $id_pelanggaran);
            }
            
            if (!empty($_GET['del']))
            {
                $id=$_GET['del'];
                $id_siswa = $_GET['sis'];
                $pelanggaran->hapusPelanggaranSiswa($con, $id, $id_siswa);
            }
            

            include('view/index.php');
        }

        elseif($p=="rekap")
        {
            $title="Rekapitulasi Pelanggaran Siswa";
            $list_kelas = $kelas->showAll($con);

            if (!empty($_POST['id_kelas'])) {
                $tgl1 = $_POST['tgl1'];
                $tgl2 = $_POST['tgl2'];
                $id_kelas = $_POST['id_kelas'];
                $kel = $kelas->find($con, $id_kelas);
                $nm_kelas = $kel['nm_kelas'];
            } else {
                $tgl1 = "";
                $tgl2 = "";
                $nm_kelas = "";
        }


        
            
            include('view/index.php');
        }

        elseif($p=="home")
        {
            $title="Selamat Datang, Pelopor Kedisiplinan SMKN 1 Banyuwangi";
            include('view/index.php');
        }
    }

?>