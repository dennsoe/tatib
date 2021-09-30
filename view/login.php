<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="asset/img/smk.png" type="image/x-icon">
    <title>Ketertiban SMKN 1 Banyuwangi</title>
</head>

<body>

    <nav class="navbar shadow-sm navbar-expand-lg navbar-dark" style="background-color:#464660;">
        <div class="container">
            <span class="float-start">
                <img src="asset/img/smk.png" width="40" alt="">
            </span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="float-end">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav fw-bold">
                        <li class="nav-item ps-3">
                            <a class="nav-link" href="#">Help Me!</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mt-4 mb-4">
                    <h3>Sistem Pengendali Kedisiplinan SMKN 1 Banyuwangi</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum repellat voluptate cupiditate natus voluptatibus tempora, qui non, adipisci amet saepe fugit sint reiciendis accusantium quas quo! Blanditiis quidem quasi, id aut tempora impedit pariatur odit dolore ab nostrum deserunt, maiores repudiandae accusamus eligendi explicabo corporis laboriosam culpa sunt. Eaque, eius!</p>
                    <br>
                    <br>
                    <img src="asset/img/smk.png" width="100" alt="">
                    <img src="asset/img/smkvokasi.png" width="100" alt="">
                </div>

                <div class="col-md-4 mt-4 mb-4">
                    <div class="card shadow-lg" style="background-color:#F0D9FF">

                        <div class="card-body">
                            <form action="" method="post">
                                <h4 class="ps-2 mb-3">Login</h4>
                                <?php 
                                    if (!empty($_GET['login']))
                                    {
                                ?>
                                <div class="mt-2 mb-2">
                                    <span class="bg-danger text-light fw-light rounded pe-2 ps-2 mt-1 mb-1">Username dan Password salah..</span>
                                </div>
                                <?php }?>

                                <div class="form-group">
                                    <input type="text" name="username" class="rounded-pill form-control" placeholder="Username" autofocus>
                                </div>
                                <div class="form-group mt-2">
                                    <input type="password" name="password" class="form-control rounded-pill" placeholder="Password">
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary rounded-pill ps-4 pe-4" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>