<div class="row">
    <div class="col-md-12 mt-2">
        <div class="card">
            <div class="card-header">
                <a data-bs-toggle="modal" data-bs-target="#cari" class="btn btn-primary"><i class="bi-search"></i> Cari</a>

                <?php
                if (!empty($nm_kelas))
                {
                    echo '<a href="?p=rekap" class="btn btn-success"><i class="bi-recycle"></i> Reset</a>';
                }
                ?>

                <?php
                if (!empty($nm_kelas)) {
                ?>
                    <div class="float-end">
                        <div class="mt-2 ">
                            <span class="rounded text-light pt-2 pb-2 ps-4 pe-4 mb-3" style="background-color:#D83A56;"><?= $nm_kelas ?></span>
                            &nbsp;&nbsp;
                            <span class="rounded text-light pt-2 pb-2 ps-2 pe-2 mb-3" style="background-color:#38A3A5;"><?= $tgl1 ?> </span>
                            &nbsp; s/d &nbsp;
                            <span class="rounded text-light pt-2 pb-2 ps-2 pe-2 mb-3" style="background-color:#38A3A5;"><?= $tgl2 ?> </span>
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
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
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
                                <select name="id_kelas" class="form-select">
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