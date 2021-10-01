<SCRIPT>
    // window.print();
</SCRIPT>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table td,
        th {
            border: 1px solid #AAAAAA;
            padding: 8px;
        }

        td.pernyataan {
            text-align: justify;
        }

        td.bio {
            text-align: center;
        }

        .judul {
            background-color: #AAAAAA;
        }
    </style>
</head>

<body style="font-size:small;">

    
        






    <div class="container">
        <div class="row">
            
                Surat teguran ini diterbitkan karena telah terbukti melanggar ketentuan tata tertib mengenai aturan kedisiplinan yang ada di lingkungan SMK Negeri 1 Banyuwangi, ditujukan kepada :
        </div>



        <div class="row">
            <div class="col-md-12 mt-2">

                <table width="100%" border="1" style="border: 1px solid black; border-collapse: collapse; font-size:small;" width="800">
                    <tr>
                        <th width="80" class="text-center">NAMA SISWA</th>
                        <th width="30" class="text-center">KELAS</th>
                        <th width="200" class="text-center">JENIS PELANGGARAN</th>
                    </tr>
                    <tr>
                        <td class="bio"><?= $dtsiswa['nama'] ?></td>
                        <td class="bio"><?= $dtsiswa['nm_kelas'] ?></td>
                        <td>
                            <?php foreach ($p_siswa as $ps) { ?>
                                <?= $ps['pelanggaran'] ?>, 
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">Dikarenakan telah melakukan pelanggaran tersebut, dengan ini sekolah memberikan sanksi berupa poin <span style="font-weight:bold;"> <?= $j_poin[0] ?> </span>sesuai dengan peraturan dan tata tertib yang berlaku di SMK Negeri 1 Banyuwangi</td>
                    </tr>
                    <tr>
                        <th class="text-center" colspan="2">PERNYATAAN SISWA</th>
                        <th width="100" class="text-center">PENINDAK</th>
                    </tr>
                    <tr>
                        <td class="pernyataan" colspan="2">Dengan ini menyatakan bahwa dengan penuh kesadaran, saya tidak akan mengulangi kembali bentuk pelanggaran apapun yang telah di tetapkan di sekolah ini. Dan apabila di kemudian hari saya melakukan pelanggaran kembali maka saya siap menerima sanksi yang telah ditetapkan di sekolah ini berdasarkan pasal ketentuan kedisiplinan SMK Negeri 1 Banyuwangi
                            <br>
                            <br>
                            <br>
                            <br>
                            <div style="text-align:right; text-decoration:underline; font-weight:bold"><?= $dtsiswa['nama'] ?></div>

                        </td>
                        <td style="text-align:center">
                            <div class="atas">Banyuwangi, <?= tgl_indo(time()) ?> </div>
                            <div style="font-weight:bold" class="bawah"><?= $pd['jabatan'] ?></div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div style="text-decoration:underline;font-weight:bold" class="bawah"><?= $pd['nama'] ?></div>








                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>





</body>

</html>