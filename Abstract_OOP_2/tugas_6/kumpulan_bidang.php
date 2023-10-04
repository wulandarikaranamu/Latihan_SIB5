<?php 
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

//selesaikan agar hasil keliling dan jari-jari tampil 
//note : tugas
$lingkaran = new Lingkaran(5);
$persegiPanjang = new PersegiPanjang(5,10);
$segitiga = new Segitiga(6,8);

$dataBidang = [
    ['lingkaran', 'Jari-jari : 5', $lingkaran->luasBidang(), $lingkaran->kelilingBidang()],
    ['Persegi Panjang', 'Panjang : 5, Lebar : 10',$persegiPanjang->luasBidang(), $persegiPanjang->kelilingBidang()],
    ['Segitiga ', 'Alas : 6, Tinggi : 8', $segitiga->luasBidang(), $segitiga->kelilingBidang()],
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Bidang</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2 align="center">Inheritance OOP</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bidang</th>
                <th>Keterangan</th>
                <th>Luas Bidang</th>
                <th>Keliling Bidang</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataBidang as $key => $bidang): ?>
                <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td><?php echo $bidang[0]; ?></td>
                    <td><?php echo $bidang[1]?></td>
                    <td><?php echo $bidang[2]; ?></td>
                    <td><?php echo $bidang[3]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>