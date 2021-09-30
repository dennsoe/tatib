<?php 

    include('mod/db.php');

    include('mod/login.php');
    $user = new user;

    include('mod/kelas.php');
    $kelas = new kelas;

    include('mod/siswa.php');
    $siswa = new siswa;

    include('mod/pelanggaran.php');
    $pelanggaran = new pelanggaran;

    include('routing/routing.php');
?>