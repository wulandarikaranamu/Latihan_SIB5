<?php 
//contoh array scalar atau 1 dimensi
$ar_buah = ['pepaya','mangga','pisang','jambu'];
$ar_buah[] = 'naga';
$ar_buah[] = 'durian';

echo 'cetak data array menggunakan loopinh foreach';
foreach($ar_buah as $id => $buah){
    echo '<br> key array buah : '. $id;
}

echo '<br>----pembatas-------';
foreach($ar_buah as $buah){
    echo '<br> Data Buah : '. $buah;
}

echo '<br>----pembatas-------';
foreach($ar_buah as $id => $buah){
    echo '<br> Buah dengan id '. $id.' adalah buah '. $buah;
}
?>