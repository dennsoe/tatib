<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table td, th {
        border: 1px solid #AAAAAA;
        padding: 5px;
        }

        td.pernyataan{
            text-align:justify;
        }

        td.bio{
            text-align: center;
        }
    </style>
</head>
<body style="font-size:small;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 lh-1">
                Surat teguran ini diterbitkan karena telah terbukti melanggar ketentuan tata tertib mengenai aturan kedisiplinan yang ada di lingkungan SMK Negeri 1 Banyuwangi, ditujukan kepada :
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-2">

                        <table border="1" width="100%" style="border: 1px solid black; border-collapse: collapse;" width="800">
                            <tr>
                                <th width="80" class="text-center">NAMA SISWA</th>
                                <th width="30" class="text-center">KELAS</th>
                                <th width="200" class="text-center">JENIS PELANGGARAN</th>
                            </tr>
                            <tr>
                                <td class="bio"><?=$dtsiswa['nama']?></td>
                                <td class="bio"><?=$dtsiswa['nm_kelas']?></td>
                                <td>
                                    <?php foreach($p_siswa as $ps){ ?>
                                    <li><?=$ps['pelanggaran']?></li>
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">Dikarenakan telah melakukan pelanggaran tersebut, dengan ini sekolah memberikan sanksi berupa poin <?=$j_poin[0]?> sesuai dengan peraturan dan tata tertib yang berlaku di SMK Negeri 1 Banyuwangi</td>
                            </tr>
                            <tr>
                                <th class="text-center" colspan="2">PERNYATAAN SISWA</th>
                                <th width="100" class="text-center">PENINDAK</th>
                            </tr>
                            <tr>
                                <td class="pernyataan" colspan="2">Dengan ini menyatakan bahwa dengan penuh kesadaran, saya tidak akan mengulangi kembali bentuk pelanggaran apapun yang telah di tetapkan di sekolah ini. Dan apabila dikemudian hari saya melakukan pelanggaran kembali maka saya siap menerima sanksi yang telah ditetapkan di sekolah ini berdsarkan pasal ketentuan kedisiplinan SMK Negeri 1 Banyuwangi
                                <br>
                                <br>
                                <br>
                                <br>
                                <div style="text-align:right;">-- <?=$dtsiswa['nama']?> --</div>

                                </td>
                                <td>
                                    <div class="atas">Banyuwangi, <?=tgl_indo(time())?> </div>
                                    <div class="bawah">Penindak,</div>


                                    <div class="">NAMA : <?=$pd['nama']?></div>
                                    <div class="">JABATAN : GURU</div>
                                    <div class="">TANDA TANGAN :</div>

                                    
                                </td>
                            </tr>
                        </table>
            </div>
        </div>
    </div>




    
</body>
</html>