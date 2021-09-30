<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a data-bs-toggle="modal" data-bs-target="#cari" class="btn btn-primary"><i class="bi-search"></i> Cari</a>

                <?php
                if (!empty($nm_kelas)) {
                    echo '<a href="?p=rekap" class="btn btn-success"><i class="bi-recycle"></i> Reset</a>';
                }
                ?>

                <?php
                if (!empty($nm_kelas)) {
                ?>
                    <div class="float-end">
                        <div class="mt-2 ">
                            <span class="rounded-pill text-light pt-2 pb-2 ps-4 pe-4 mb-3" style="background-color:#D83A56;"><?= $nm_kelas ?></span>
                            &nbsp;&nbsp;
                            <?php
                                if (!empty($tgl1) and !empty($tgl2))
                                {
                            ?>
                            <span class="rounded-pill text-light pt-2 pb-2 ps-2 pe-2 mb-3" style="background-color:#38A3A5;"><?= tgl_indo($tgl1) ?> </span>
                            &nbsp; s/d &nbsp;
                            <span class="rounded-pill text-light pt-2 pb-2 ps-2 pe-2 mb-3" style="background-color:#38A3A5;"><?= tgl_indo($tgl2) ?> </span>
                            <?php } else{ ?>
                            <span class="rounded-pill text-light pt-2 pb-2 ps-2 pe-2 mb-3" style="background-color:#38A3A5;">Data Keseluruhan</span>
                            <?php } ?>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="float-end">
                        <div class="mt-2">
                            <span class="rounded text-light pt-2 pb-2 ps-2 pe-2 mb-3" style="background-color:#D83A56;">No Data</span>
                        </div>
                    </div>
                <?php } ?>


            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jumlah Poin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($_POST['id_kelas'])) {
                            $no = 1;
                            $id_kelas = $_POST['id_kelas'];
                            $daftarsiswa = $siswa->perKelas($con, $id_kelas);
                            
                            foreach ($daftarsiswa as $sis) {
                                $jumlahpoin = $pelanggaran->poinSiswaByTgl($con, $sis['id_siswa'], $tgl1, $tgl2);
                                if ($jumlahpoin[0] < 1) {
                                    $jp = "0";
                                } else {
                                    $jp = $jumlahpoin[0];
                                }
                        ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $sis['nama'] ?></td>
                                    <td><?= $sis['nm_kelas'] ?></td>
                                    <td>
                                        <span class="btn btn-sm btn-danger rounded-pill">
                                            <?= $jp ?> 
                                        </span>
                                    </td>
                                </tr>

                        <?php $no++;
                            }
                        }  ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="modal fade" id="cari" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cari Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="id_kelas">
                                Pilih Kelas
                                <select name="id_kelas" class="form-select" required>
                                    <option value="">Pilih Kelas</option>
                                    <?php
                                    foreach ($list_kelas as $kel) {
                                    ?>
                                        <option value="<?= $kel['id_kelas'] ?>"><?= $kel['nm_kelas'] ?></option>
                                    <?php } ?>
                                </select>
                            </label>
                        </div>
                        <div class="form-group mt-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="tgl1">Dari Tanggal</label>
                                            <input type="date" name="tgl1" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="tgl2">Sampai Tanggal</label>
                                            <input type="date" name="tgl2" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Cari Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>