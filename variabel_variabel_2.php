<?php
//print="diketahui:"
$phi = 3.14;
$r = 7.2;
$t_tabung = 20;
$t_kerucut = 5;

//phytagoras kerucut
print "====phytagoras/garis miring ====\n";
$a = pow(5,2);
$b = pow(7.2,2);
$c= sqrt($a+$b);
$number_format = number_format ($c,1);
print "c2 = a2 + b2 \n = ".$number_format."m2\n";

//rumus tabung
print "====volume tabung ====\n";
$volume_tabung = $phi * pow($r,2) * $t_tabung;
$number_format = number_format ($volume_tabung,1);
print "phi = 3.14 \n r = 7.2m \n t = 20m \n"."volume tabung=".$number_format."m3\n";

//rumus kerucut
print "====volume kerucut ====\n";
$volume_kerucut = $phi * pow($r,2) * $t_kerucut/3;
$number_format = number_format ($volume_kerucut,1);
print "phi = 3.14 \n r = 7.2m\n t = 5m\n"." volume kerucut= ".$number_format."m3\n";

//voume gabungan
print "====volume gabungan ====\n";
$volume_gabungan = $volume_tabung + $volume_kerucut;
$number_format = number_format ($volume_gabungan,1);
print "volume gabungan =".$number_format."m3\n";

//alas lingkaran
print "====alas lingkaran====\n";
$alas_lingkaran = $phi * pow($r,2);
$number_format = number_format ($alas_lingkaran,1);
print "alas lingkaran =".$number_format."m2\n";
//mengubah m2 menjadi m3
$lingkaran = $alas_lingkaran / 100;
$number_format = number_format ($lingkaran,1);
print " = ". $number_format ."m3\n";

//volume gabungan - alas lingkaran
print "====hasil akhir ====\n";
$hasil_akhir = $volume_gabungan - $lingkaran;
$number_format = number_format ($hasil_akhir,1);
print "maka jumlah volume sumur tersebut adalah = ". $number_format . "m3\n";
?>