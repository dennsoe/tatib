<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header fw-bold bg-primary text-light">
                Input Pelanggaran Siswa
            </div>
            <form action="" method="post">
                <div class="card-body">
                    <div class="foem-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="text" name="tgl" class="form-control" value="<?= date('d-m-Y  H : i : s', time()) ?>">
                    </div>

                    <div class="form-group mt-2">
                        <label for="nama_siswaa">Nama Siswa</label>
                        <select id="siswa" name="id_siswa" class="form-control">
                            <option value=""></option>
                            <?php
                            foreach ($list_siswa as $siswa) {
                            ?>
                                <option value="<?= $siswa['id_siswa'] ?>" <?= $siswa['id_siswa'] == $_GET['sis'] ? "selected = selected" : ""; ?>    ><?= $siswa['nm_kelas'] ?> - <?= $siswa['nama'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                     
                    <div class="form-group mt-2">
                        <label for="nama_siswaa">Pelanggaran</label>
                        <select id="pelanggaran" name="id_pelanggaran" class="form-control">
                            <option value=""></option>
                            <?php
                            foreach ($list_pelanggaran as $pelanggaran) {
                            ?>
                                <option value="<?= $pelanggaran['id_pelanggaran'] ?>"><?= $pelanggaran['pelanggaran'] ?> - ( <?= $pelanggaran['poin'] ?> )</option>
                            <?php } ?>
                        </select>
                    </div>



                </div>
                <div class="card-footer">
                    <a href="?p=input_pelanggaran&sis=" class="btn btn-danger"><i class="bi-recycle"></i> Batal</a>
                    <button type="submit" class="btn btn-primary float-end"><i class="bi-save2-fill"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Jenis Pelanggaran</th>
                            <th>Point</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;

                        if (!empty($_GET['sis'])) {
                            $id_siswa = $_GET['sis'];
                            $list_pel_sis = $pelanggaran->PerSiswa($con,$id_siswa);

                            foreach ($list_pel_sis as $ps) {
                        ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $ps['pelanggaran'] ?></td>
                                    <td></td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-primary" href="#"><i class="bi-pencil"></i></a>
                                        <a class="btn btn-sm btn-danger" href="#"><i class="bi-trash"></i></a>
                                    </td>
                                </tr>
                        <?php $no++;
                            }
                        } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="modal fade" id="carisiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table id="myTable" class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Pilih</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Siswa 1</td>
                                <td>XII AK 1</td>
                                <td>pILIH</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>