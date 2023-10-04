<?php
require 'KonversiSuhu.php';

$satuanSuhuAwal = "Celsius";
$besaranSuhu = 30;
$satuanSuhuTujuan = "Fahrenheit";

$konversiSuhu = new KonversiSuhu($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan);

$satuanSuhuAwal2 = "Fahrenheit";
$besaranSuhu2 = 98;
$satuanSuhuTujuan2 = "Celsius";

$konversiSuhu2 = new KonversiSuhu($satuanSuhuAwal2, $besaranSuhu2, $satuanSuhuTujuan2);

$satuanSuhuAwal3 = "Celsius";
$besaranSuhu3 = 40;
$satuanSuhuTujuan3 = "Reaumur";

$konversiSuhu3 = new KonversiSuhu($satuanSuhuAwal3, $besaranSuhu3, $satuanSuhuTujuan3);

$satuanSuhuAwal4 = "Reaumur";
$besaranSuhu4 = 84;
$satuanSuhuTujuan4 = "Celsius";

$konversiSuhu4 = new KonversiSuhu($satuanSuhuAwal4, $besaranSuhu4, $satuanSuhuTujuan4);

$konversiSuhu->cetak();
$konversiSuhu2->cetak();
$konversiSuhu3->cetak();
$konversiSuhu4->cetak();
?>

