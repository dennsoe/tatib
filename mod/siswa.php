<?php

    class Siswa{

        function showAll($con)
        {
            $list = array();
            $q = mysqli_query($con, "select * from siswa join kelas on siswa.id_kelas = kelas.id_kelas");
            while ($dt = mysqli_fetch_array($q)) {
                $list[] = $dt;
            }
            return $list;
        }

        function perKelas($con,$id_kelas)
        {
            $list=array();
            $q=mysqli_query($con,"select * from siswa join kelas on siswa.id_kelas = kelas.id_kelas where siswa.id_kelas = '$id_kelas'");
            while($dt = mysqli_fetch_array($q))
            {
                $list[]=$dt;
            }
            return $list;
        }

        function find($con,$id_siswa)
        {
            $q=mysqli_query($con,"select * from siswa join kelas on siswa.id_kelas = kelas.id_kelas where siswa.id_siswa = '$id_siswa'");
            $dt = mysqli_fetch_array($q);
            return $dt;
        }

        function cariWildCard($con,$nama)
        {
            $list = array();
            $q = mysqli_query($con, "select * from siswa join kelas on siswa.id_kelas = kelas.id_kelas where siswa.nama LIKE '%$nama%' order by nama");
            while ($dt = mysqli_fetch_array($q)) {
                $list[] = $dt;
            }
            return $list;
        }
    }
?>