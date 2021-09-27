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
    <div class="col-md-8 mt-2">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th style="width:20%">Pilih</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($_POST['nama'])) {
                            $carisiswa = $siswa->cariWildCard($con, $_POST['nama']);
                            foreach ($carisiswa as $cs) {
                                if (!empty($cs['nama'])) {
                        ?>
                                    <tr>
                                        <td class="text-center">
                                            <a href="?p=input_pelanggaran&sis=<?= $cs['id_siswa'] ?>" class="rounded-pill btn btn-sm btn-success"><i class="bi-check-circle"></i> Pilih</a>
                                        </td>
                                        <td>
                                            <?= $cs['nama'] ?>
                                        
                                        </td>
                                        <td><?= $cs['nm_kelas'] ?></td>
                                    </tr>
                        <?php
                                } else {
                                    echo "Tidak ada siswa";
                                }
                            }
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

