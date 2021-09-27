<?php
    $jumlahhariini = $pelanggaran->jumlahPerHari($con);
    $jumlahAll = $pelanggaran->jumlahAll($con);
?>

<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header ">
                Data Statistik Pelanggaran
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-2 mb-2">
                        <div class="card ">
                            <div class="card-header bg-danger text-light">
                                Jumlah Hari Ini
                            </div>
                            <div class="card-body text-center">
                                <strong class="fs-2"><?=$jumlahhariini[0]?></strong>
                                Pelanggaran
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 mb-2">
                        <div class="card ">
                            <div class="card-header bg-danger text-light">
                                Jumlah Per Semester
                            </div>
                            <div class="card-body text-center">
                                <strong class="fs-2"><?=$jumlahAll[0]?></strong>
                                Pelanggaran
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mt-2">
        <div class="card ">
            <div class="card-header ">
                Pelanggaran Hari Ini <span class="rounded-pill bg-primary text-light ps-2 pe-2"><?=tgl_indo(time())?></span>
            </div>
            <div class="card-body">
                
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Pelanggaran</th>
                                    <th>Jumlah Poin</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $pelanggaran_sekarang = $pelanggaran->now($con);
                                $no=1;
                                foreach($pelanggaran_sekarang as $ps){
                            ?>
                                <tr>
                                    <td><?=$no?></td>
                                    <td><?=$ps['nama']?></td>
                                    <td><?=$ps['nm_kelas']?></td>
                                    <td>

                                        <?php
                                            $persiswa = $pelanggaran->perSiswaNow($con, $ps['id_siswa']);
                                            $n=1;
                                            foreach($persiswa as $pss)
                                            {
                                                echo $n.". ".$pss['pelanggaran']."<br>";
                                                $n++;
                                            }
                                        ?>

                                    </td>
                                    <td><?=$ps['poin']?></td>
                                </tr>
                                <?php $no++; } ?>

                            </tbody>
                        </table>
                    
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mt-2">
        <div class="card ">
            <div class="card-header ">
                Jenis Pelanggaran Terbanyak
            </div>
            <div class="card-body">
            
                <div class="col-md-8">
                     <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Pelanggaran</th>
                            <th>Poin</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=1;
                        $list_pelanggaran=$pelanggaran->showAll($con);
                        foreach($list_pelanggaran as $lp){
                            $jum_pel = $pelanggaran->jumlahPerPelanggaran($con,$lp['id_pelanggaran']);
                        ?>
                        <tr>
                            <td><?=$no?></td>
                            <td><?=$lp['pelanggaran']?></td>
                            <td><?=$lp['poin']?></td>
                            <td><?=$jum_pel['jumlah']?></td>
                        </tr>
                        <?php $no++; } ?>

                    </tbody>
                </table>
                </div>
               
            </div>
        </div>
    </div>
</div>



