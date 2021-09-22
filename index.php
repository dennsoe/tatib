<?php 

    include('mod/db.php');

    include('mod/kelas.php');
    $kelas = new kelas;

    include('mod/siswa.php');
    $siswa = new siswa;

    include('mod/pelanggaran.php');
    $pelanggaran = new pelanggaran;

    include('routing/routing.php');
?>