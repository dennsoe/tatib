<?php
    class pelanggaran{

        //menampilkan daftar pelanggaran
        function showAll($con)
        {
            $list=array();
            $q=mysqli_query($con,"select * from pelanggaran");
            while($dt=mysqli_fetch_array($q))
            {
                $list[]=$dt;
            }
            return $list;
        }

        function find($con,$id)
        {
            $q=mysqli_query($con,"select * from pelanggaran where id_pelanggaran = '$id'");
            $dt=mysqli_fetch_array($q);
            return $dt;
        }

        

        //Perlanggaran siswa
        function PerSiswa($con,$id_siswa)
        {
            $list = array();
            $q = mysqli_query($con, "select * from pelanggaran_siswa join siswa on pelanggaran_siswa.id_siswa=siswa.id_siswa join kelas on siswa.id_kelas = kelas.id_kelas join pelanggaran on pelanggaran_siswa.id_pelanggaran = pelanggaran.id_pelanggaran where pelanggaran_siswa.id_siswa = '$id_siswa'");
            while ($dt = mysqli_fetch_array($q)) {
                $list[] = $dt;
            }
            return $list;
        }

        function jumlahPerSiswaNow($con,$id_siswa)
        {
            //TGL INI 00:00:00
            $skr_format = date('d-m-Y 00:00:00', time());
            $skr_int = strtotime($skr_format);

            //TGL BESOK 00:00:00
            $besok = time() + 86400;
            $besok_format = date('d-m-Y 00:00:00', $besok);
            $besok_int = strtotime($besok_format);

            $q=mysqli_query($con, "select sum(poin) as jumlah from pelanggaran_siswa join pelanggaran on pelanggaran_siswa.id_pelanggaran = pelanggaran.id_pelanggaran where pelanggaran_siswa.id_siswa='$id_siswa' and pelanggaran_siswa.tgl between '$skr_int' and '$besok_int'");
            $dt = mysqli_fetch_array($q);
            return $dt;
        }

        function inputPelanggaranSiswa($con,$tgl,$id_siswa,$id_pelanggaran)
        {
            $q=mysqli_query($con,"insert into pelanggaran_siswa value('','$tgl','$id_siswa','$id_pelanggaran')");
            if ($q)
            {
                echo '<script>alert("Berhasil Tambah");</script>';
                header('location:?p=input_pelanggaran&sis='.$id_siswa);
            }else
            {
            echo '<script>alert("Berhasil Tambah")</script>';
            }
        }

        function perSiswaNow($con,$id_siswa)
        {
            //TGL INI 00:00:00
            $skr_format = date('d-m-Y 00:00:00',time());
            $skr_int = strtotime($skr_format);

            //TGL BESOK 00:00:00
            $besok = time() + 86400;
            $besok_format = date('d-m-Y 00:00:00',$besok);
            $besok_int = strtotime($besok_format);

            $list = array();
            $q = mysqli_query($con, "select * from pelanggaran_siswa join siswa on pelanggaran_siswa.id_siswa=siswa.id_siswa join kelas on siswa.id_kelas = kelas.id_kelas join pelanggaran on pelanggaran_siswa.id_pelanggaran = pelanggaran.id_pelanggaran where pelanggaran_siswa.id_siswa = '$id_siswa' and pelanggaran_siswa.tgl between '$skr_int' and '$besok_int' ");
            while ($dt = mysqli_fetch_array($q)) {
                $list[] = $dt;
            }
            return $list;

        }

        function hapusPelanggaranSiswa($con,$id,$id_siswa)
        {
            $q=mysqli_query($con,"delete from pelanggaran_siswa where id_pel_siswa = '$id'");
            if ($q)
            {
                header('location:?p=input_pelanggaran&sis='.$id_siswa);
            }else{
                header('location:?p=input_pelanggaran&sis='.$id_siswa);
            }
        }
        
    }
?>