<?php
    class pelanggaran{

        //menampilkan daftar pelanggaran
        function showAll($con)
        {
            $list=array();
            $q=mysqli_query($con,"select * from pelanggaran order by id_jenis");
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

        function warna($jenis)
        {
            if ($jenis==1){$bg= 'background-color:#00C1D4';}
            elseif($jenis==2){$bg= 'background-color:#F8485E';}
            elseif($jenis==3){$bg= 'background-color:#EBA83A';}
            elseif($jenis==4){$bg= 'background-color:#4AA96C';}
            elseif($jenis==5){$bg= 'background-color:#A799B7';}
            else{$bg="";}

            return $bg;
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

        function jumlahPerPelanggaran($con,$id_pelanggaran)
        {
            $q=mysqli_query($con,"select count(id_pel_siswa) as jumlah from pelanggaran_siswa where id_pelanggaran ='$id_pelanggaran'");
            $dt=mysqli_fetch_array($q);
            return $dt;
        }

        function jumlahPerHari($con)
        {
            $skr_format = date('d-m-Y 00:00:00', time());
            $skr_int = strtotime($skr_format);

            //TGL BESOK 00:00:00
            $besok = time() + 86400;
            $besok_format = date('d-m-Y 00:00:00', $besok);
            $besok_int = strtotime($besok_format);

            $q=mysqli_query($con, "select count(id_pel_siswa) as jumlah from pelanggaran_siswa join pelanggaran on pelanggaran_siswa.id_pelanggaran = pelanggaran.id_pelanggaran where pelanggaran_siswa.tgl between '$skr_int' and '$besok_int'");
            $dt = mysqli_fetch_array($q);
            return $dt;
        }

        function jumlahAll($con)
        {
            $q=mysqli_query($con, "select count(id_pel_siswa) as jumlah from pelanggaran_siswa join pelanggaran on pelanggaran_siswa.id_pelanggaran = pelanggaran.id_pelanggaran ");
            $dt = mysqli_fetch_array($q);
            return $dt;
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

        function now($con)
        {
            //TGL INI 00:00:00
            $skr_format = date('d-m-Y 00:00:00', time());
            $skr_int = strtotime($skr_format);

            //TGL BESOK 00:00:00
            $besok = time() + 86400;
            $besok_format = date('d-m-Y 00:00:00', $besok);
            $besok_int = strtotime($besok_format);

            $list = array();
            $q = mysqli_query($con, "select * from pelanggaran_siswa join siswa on pelanggaran_siswa.id_siswa=siswa.id_siswa join kelas on siswa.id_kelas = kelas.id_kelas join pelanggaran on pelanggaran_siswa.id_pelanggaran = pelanggaran.id_pelanggaran where pelanggaran_siswa.tgl between '$skr_int' and '$besok_int' group by pelanggaran_siswa.id_siswa ");
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

        function AllPerTanggal($con,$id_kelas,$tgl1,$tgl2) //Pelanggaran Siswa per tanggal rekap
        {
            $list = array();
            $q=mysqli_query($con,"select * from pelanggaran_siswa join siswa on pelanggaran_siswa.id_siswa = siswa.id_siswa join pelanggaran on pelanggaran_siswa.id_pelanggaran = pelanggaran.id_pelanggaran join kelas on siswa.id_kelas = kelas.id_kelas where siswa.id_kelas = '$id_kelas' and tgl between '$tgl1' and '$tgl2'");
            while($dt=mysqli_fetch_array($q))
            {
                $list[] = $dt;
            }
            return $list;
        }

        function perKelasAll($con,$id_kelas)
        {
            $list = array();
            $q = mysqli_query($con, "select * from pelanggaran_siswa join siswa on pelanggaran_siswa.id_siswa = siswa.id_siswa join pelanggaran on pelanggaran_siswa.id_pelanggaran = pelanggaran.id_pelanggaran join kelas on siswa.id_kelas = kelas.id_kelas where siswa.id_kelas = '$id_kelas' ");
            while ($dt = mysqli_fetch_array($q)) {
                $list[] = $dt;
            }
            return $list;
        }

        function poinSiswaByTgl($con,$id_siswa,$tgl1,$tgl2)
        {
            $q=mysqli_query($con, "select sum(poin) as jumlah_poin from pelanggaran_siswa join pelanggaran on pelanggaran_siswa.id_pelanggaran = pelanggaran.id_pelanggaran where pelanggaran_siswa.id_siswa = '$id_siswa' and tgl between '$tgl1' and '$tgl2' ");
            $dt = mysqli_fetch_array($q);
            return $dt;
        }

        function rangeWarna($nilai1)
        {
                    if($nilai1 >= 0 && $nilai1 <= 50)
                    {
                        echo 'Bilangan '.$nilai1.' berada antara 0-50.';
                    }
                    else if ($nilai1 >= 51 && $nilai1 <= 60) 
                    {
                        echo 'Bilangan '.$nilai1.' berada antara 51-60.';
                    } else if ($nilai1 >= 61 && $nilai1 <= 70) 
                    {
                        echo 'Bilangan '.$nilai1.' berada antara 61-70.';
                    }
                    else if ($nilai1 >= 71 && $nilai1 <= 80)
                    {
                        echo 'Bilangan '.$nilai1.' berada antara 71-80.';
                    }
                    else if ($nilai1 >= 81 && $nilai1 <= 90)
                    {
                        echo 'Bilangan '.$nilai1.' berada antara 81-90.';
                    }
                    else if($nilai1 >= 91 && $nilai1 <= 100)
                    {
                        echo 'Bilangan '.$nilai1.' berada antara 91-100.';
                    }
                    else
                    {
                        echo 'Bilangan '.$nilai1.' tidak berada dalam range bilangan.';
                    }
        }
      
        
    }
?>