<?php 
    //belajar fungsi bawaan di php
    $str = 'Belajar PHP di Kampus Merdeka';
    echo $str;

    $str = strtoupper($str); //strtoupper ini adalah fungsi bawaan php yg dpt mengubah tulisan menjadi huruf besar semua
    echo '<br>'.$str;

    $str = strtolower($str);
    echo '<br>'.$str;

    $ar_buah = ['Pepaya','Mangga','Pisang','Jambu','Apel'];
    sort ($ar_buah); //mengurutkan atau memilih sesuai abjad yang kecil(ascanding)
    foreach ($ar_buah as $buah) {
        echo '<br>'.$buah;
    }

    echo '<hr>';
    arsort($ar_buah); // arsort digunakan mengurutkan sesuai abjad yang besar  (descanding)
    foreach($ar_buah as $buah){
        echo '<br>'.$buah;
    }
?>