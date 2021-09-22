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
    <link rel="shortcut icon" href="asset/img/usericon.png" type="image/x-icon">
    <title>Kedisiplinan SMKN 1 Banyuwangi</title>

</head>

<body>
    <nav class="navbar shadow-lg navbar-expand-lg navbar-dark" style="background-color:#464660;">
        <div class="container">

            <a class="navbar-brand" href="#"> <img src="asset/img/usericon.png" width="40" alt=""> Kedisiplinan SMKN 1 Banyuwangi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="float-end">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav fw-bold">
                        <li class="nav-item ms-3">
                            <a class="nav-link" href="?p=home">Home</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link" href="?p=siswa">Input Pelanggaran</a>
                        </li>
                        <li class="nav-item ps-3">
                            <a class="nav-link" href="?p=rekap">Rekapitulasi</a>
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
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        test
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex dolorem placeat tenetur aspernatur aut dolore ea itaque aliquid impedit unde!
                    </div>
                </div>
            </div>
        </div> -->
        <?php
        include('page.php');
        ?>
    </div>

    <div class="container">

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