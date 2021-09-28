<?php
session_start();
if (empty($_SESSION['id'])) {
    header('location:?p=login');
} else {
    $id_user = $_SESSION['id'];
    $namauser = $_SESSION['nama'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- select 2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
    <!-- data table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap4.min.css">
    <link rel="shortcut icon" href="asset/img/smk.png" type="image/x-icon">
    <title>Kedisiplinan SMKN 1 Banyuwangi</title>

</head>

<body class="bg-light">
    <nav class="navbar shadow-lg navbar-expand-lg navbar-dark" style="background-color:#464660;">
        <div class="container">

            <a href="#" class=""><img src="asset/img/smk.png" width="40" alt=""></a>
            <div class="float-end">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item ms-3">
                            <a class="nav-link <?= hal('home') ?>" href="?p=home">Statistik</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link <?= hal('siswa') ?> <?= hal('input_pelanggaran') ?>" href="?p=siswa">Input Pelanggaran</a>
                        </li>
                        <li class="nav-item ps-3">
                            <a class="nav-link <?= hal('rekap') ?>" href="?p=rekap">Rekapitulasi</a>
                        </li>
                        <li class="nav-item ps-4">
                            <a class="nav-link" href="#" data-bs-target="#logout" data-bs-toggle="modal">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-3 mb-3">
        <span class="fs-5 fw-bold rounded-pill text-light pt-1 pb-1 ps-3 pe-3 mb-3" style="background-color:#D83A56;">
            <?= $title ?>
        </span>
    </div>

    <div class="container mt-2">
        <?php
        include('page.php');
        ?>
    </div>

    <div class="container">
        <!-- MOdal Logout -->
        <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>Yakin anda ingin keluar dari aplikasi ini ?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nggak Jadi</button>
                        <a href="?p=logout" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- MOdal Logout -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Data Table -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap4.min.js"></script>


    <!-- select -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#siswa").select2({
                theme: 'bootstrap4',
                placeholder: "Cari Siswa"
            });
            $("#pelanggaran").select2({
                theme: 'bootstrap4',
                placeholder: "Cari Pelanggaran"
            });
            $("#kelas").select2({
                theme: 'bootstrap4',
                placeholder: "Pilih Kelas"
            });

            $("#kota2").select2({
                theme: 'bootstrap4',
                placeholder: "Please Select"
            });

            $('.js-example-basic-single').select2();

        });
    </script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>



</body>

</html>