<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 Array</title>
</head>
<body>
    <?php 
    $m1 = ['nim' => '0111111', 'nama' => 'Andi Setyo', 'nilai' => 95];
    $m2 = ['nim' => '0111112', 'nama' => 'Rafael', 'nilai' => 80];
    $m3 = ['nim' => '0111113', 'nama' => 'Ali Hakim', 'nilai' => 78];
    $m4 = ['nim' => '0111114', 'nama' => 'Ari', 'nilai' => 76];
    $m5 = ['nim' => '0111115', 'nama' => 'Ani', 'nilai' => 89];
    $m6 = ['nim' => '0111116', 'nama' => 'Aji', 'nilai' => 50];
    $m7 = ['nim' => '0111117', 'nama' => 'Budi Santoso', 'nilai' => 20];
    $m8 = ['nim' => '0111118', 'nama' => 'Chandra', 'nilai' => 30];
    $m9 = ['nim' => '0111119', 'nama' => 'Dewi', 'nilai' => 70];
    $m10 = ['nim' =>'0111110', 'nama' => 'Elisa', 'nilai' => 65];

    $ar_judul = ['No', 'Nim', 'Nama Mahasiswa','Nilai', 'Keterangan','Grade','Predikat'];
    $mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];
    
    $jumlah_mahasiswa = count($mahasiswa);
    $jumlah_nilai = array_column($mahasiswa, 'nilai');
    $nilai_total = array_sum($jumlah_nilai);
    $nilai_tertinggi = max($jumlah_nilai);
    $nilai_terendah = min($jumlah_nilai);
    $nilai_rata_rata = $nilai_total / $jumlah_mahasiswa;

    $keseluruhan = [
        'Jumlah Mahasiswa' => $jumlah_mahasiswa,
        'Nilai Tertinggi' => $nilai_tertinggi ,
        'Nilai Terendah' => $nilai_terendah,
        'Nilai Rata-rata' => $nilai_rata_rata,
        'Jumlah Keseluruhan Nilai' => $nilai_total

    ];

    ?>

    <h3 align="center">Daftar Nilai Mahasiswa</h3>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr><?php
            foreach($ar_judul as $judul){ ?>
                <th><?= $judul ?></th>

        
            <?php   } ?>
            
            </tr>
        </thead>

        <tbody>
            <?php $no=1;
            foreach ($mahasiswa as $mhs){ 
                $nilai = $mhs['nilai'];

                if($nilai >=89 && $nilai <= 95) $grade = "A";
                else if($nilai >= 78 && $nilai <= 88) $grade ="B";
                else if($nilai >= 70 && $nilai <= 77) $grade = "C";
                else if($nilai >= 60 && $nilai <= 69) $grade = "D";
                else if($nilai >= 20 && $nilai <= 50) $grade = "E";
                else $grade = "";

                $keterangan = ($nilai > 60) ? 'lulus' : 'tidak lulus';
            
                switch ($grade) {
                    case 'A':
                        $predikat = "Memuaskan";
                        break;
                    case 'B':
                        $predikat = "Bagus";
                        break;
                    case 'C':
                        $predikat = "Cukup";
                        break;
                    case 'D':
                        $predikat = "Kurang";
                        break;
                    case 'E':
                        $predikat = "Buruk";
                        break;
                    
                    default:
                        $predikat = '';
                        break;
                }
            ?>
            <tr>
                <td><?= $no ++?></td>
                <td><?= $mhs ['nim']?></td>
                <td><?= $mhs ['nama']?></td>
                <td><?= $mhs ['nilai']?></td>
                <td><?= $keterangan?></td>
                <td><?= $grade?></td>
                <td><?= $predikat?></td>
            </tr>
        <?php } ?>
        </tbody>

        <tfoot>
            <?php 
                foreach($keseluruhan as $kes => $hasil){
                    ?>
                    <tr>
                        <th colspan="3"><?= $kes?></th>
                        <th colspan="1"><?= $hasil?></th>
                    </tr>
               <?php }
            ?>
        </tfoot>
    </table>
</body>
</html>