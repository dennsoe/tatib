<?php
if (!empty($_GET['sis'])) {
    $jumlahpoin = $pelanggaran->jumlahPerSiswaNow($con, $_GET['sis']);
    $datasiswa = $siswa->find($con, $_GET['sis']);
    $nama = $datasiswa['nama'];
    $id_siswa = $datasiswa['id_siswa'];
    $kelas = $datasiswa['nm_kelas'];
    $jum_poin = $jumlahpoin[0];
    $list_pelanggaran = $pelanggaran->showAll($con);
} else {
    // $nama = "Belum ada";
    // $id_siswa = "";
    // $kelas = "";
    // $jum_poin = "";
    header('location:?p=siswa');
}



?>

<div class="row">
    <!-- <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="?p=home" class="btn btn-danger">Kembali</a>
            </div>
        </div> -->
</div>
<div class="row">


    <div class="col-md-5 mt-2">
        <div class="card">
            <form action="" method="post">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">



                            <div class="form-group">
                                <label class="fw-bold" for="nama siswa">Nama Siswa</label>
                                <input type="hidden" name="id_siswa" value="<?= $id_siswa ?>">
                                <input type="text" class="form-control" name="nm_siswa" readonly value="<?= $nama ?> ( <?= $kelas ?> )">
                            </div>

                            <div class="form-group mt-2">
                                <label class="fw-bold">Jenis Pelanggaran</label>
                                <div class="row">
                                    <div class="col-md-10">
                                        <input type="hidden" name="id_pelanggaran" value="<?= $id_pelanggaran ?>">
                                        <input type="text" class="form-control" value="<?= $nm_pelanggaran ?>" placeholder="Pilih daftar pelanggaran" readonly>
                                    </div>
                                    <div class="col-md-1">
                                        <a data-bs-toggle="modal" data-bs-target="#crpel2" class=" float-end btn btn-danger"><i class="bi-search"></i></a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="?p=siswa" class="btn btn-danger"><i class="bi-backspace-fill"></i> Kembali</a>
                    <a href="?p=input_pelanggaran&sis=<?=$id_siswa?>" class="btn btn-warning"><i class="bi-recycle"></i> Reset</a>
                    <button class="btn btn-primary float-end" type="submit"><i class="bi-save"></i> Simpan</button>
                </div>

            </form>

        </div>
    </div>
</div>

<div class="row">


    <div class="col-md-12 mt-2">
        <div class="card">
            <div class="card-header">
                Daftar Pelanggaran
                <span class="float-end">Total Poin : <badge class="btn btn-sm btn-danger"><?= $jum_poin; ?></badge></span>
            </div>
            <div class="card-body">
                <table id=example class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tanggal</th>
                            <th>Jenis Pelanggaran</th>
                            <th>Poin</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $list_pelanggaran_siswa = $pelanggaran->perSiswaNow($con, $_GET['sis']);
                        $no = 1;
                        foreach ($list_pelanggaran_siswa as $list) {
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= tgl_indo($list['tgl']) ?></td>
                                <td><?= $list['pelanggaran'] ?></td>
                                <td><?= $list['poin'] ?></td>
                                <td>
                                    <a class="btn btn-sm btn-danger" href="?p=input_pelanggaran&sis=<?=$id_siswa?>&del=<?=$list['id_pel_siswa']?>">
                                        <i class="bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php $no++;
                        } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Modal -->



<div class="modal fade" id="crpel2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pelanggaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <div class="row">
                    <?php
                    foreach ($list_pelanggaran as $lp) {
                    ?>
                        <div class="col-md-3 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <a href="?p=input_pelanggaran&sis=<?=$_GET['sis']?>&pel=<?=$lp['id_pelanggaran']?>"> <img src="asset/img/<?= $lp['pic'] ?>" width="50" alt=""> </a>
                                    <br>
                                    <span>
                                        <h7><?= $lp['pelanggaran'] ?></h7>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>


            </div>
        </div>
    </div>
</div>