<?php

    if ($p=="home"){ require_once('home.php'); }
    // elseif ($p=="input_pelanggaran"){ require_once('input_pelanggaran.php'); }
    elseif ($p=="input_pelanggaran"){ require_once('inputpel.php'); }
    elseif ($p=="siswa"){ require_once('datasiswa.php'); }
    elseif ($p=="rekap"){ require_once('rekap.php'); }
    

    else
    {
        echo "Salah Alamat";
    }
    

?>