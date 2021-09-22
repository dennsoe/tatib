<form action="" method="post">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Cari Data Siswa
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Cari Nama Siswa..." required oninvalid="this.setCustomValidity('Kosong bos...')" oninput="setCustomValidity('')">
                    </div>
                </div>
                <div class="card-footer">
                    <?= $reset ?>
                    <button class="float-end btn btn-primary"><i class="bi-search"></i> Cari</button>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="row">
            <?php
            if (!empty($_POST['nama'])) {
                $carisiswa = $siswa->cariWildCard($con, $_POST['nama']);
                foreach ($carisiswa as $cs) {
                    if (!empty($cs['nama'])) {


            ?>

                        <div class="col-md-3">
                            <div class="card" style="background-color:#D7E9F7">
                                <div class="card-body">
                                    <h4 class="text-primary"><?= $cs['nama'] ?></h4>
                                    <span class="fw-bold">Kelas : <?= $cs['nm_kelas'] ?></span>
                                    <a href="?p=input_pelanggaran&sis=<?= $cs['id_siswa'] ?>" class="rounded-pill ps-3 pe-3 float-end btn btn-success"><i class="bi-check-circle"></i> Pilih</a>
                                </div>
                            </div>
                        </div>



            <?php
                    } else {
                        echo "Tidak ada siswa";
                    }
                }
            }
            ?>


        </div>
    </div>
</div>