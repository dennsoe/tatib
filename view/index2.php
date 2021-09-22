<?php

$tglsekarang = time();

$tglsekarangawal = date('d-m-Y 00:00:00',$tglsekarang );
echo $tglsekarangawal;// jadi format

$tglsekarangawalstring = strtotime($tglsekarangawal);
echo '<br>';//jadi int
$a = $tglsekarangawalstring + 86400;


echo date('d-m-Y H:i:s',$a);
echo '<br>';



?>  