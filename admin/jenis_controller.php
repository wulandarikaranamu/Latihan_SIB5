<?php 
include_once 'koneksi.php';
include_once 'models/Jenis_produk.php';
//tampilkan request
$nama = $_POST['nama'];

//simpan di dalam data
$data = [
    $nama
];

//eksekusi program

$model = new Jenis_produk();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case 'simpan':$model->simpan($data); break;
    default:
    header('Location:index.php?url=jenis_produk');
    break;
}
header('Location:index.php?url=jenis_produk');

?>