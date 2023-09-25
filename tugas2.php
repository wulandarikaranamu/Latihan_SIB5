<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
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
    <!-- Buatlah form data diri dengan element sebagai berikut:

- method form: POST

- input nama, name => nama

- seleksi pekerjaan (select option), name => pekerjaan

  option pekerjaan : pekerjaan1 s/d pekerjaan 10

- Hobby (radio button), name => hobby

   hobby1 s/d hobby10

- tombol simpan, name => simpan

Tugas:

1. Buat Form

2. Tampilkan Populasi Data di atas dalam bentuk tabel, jika tombol simpan sudah di klik

3. Tabel dicetak dalam bentuk kolom:

   | Nama | Pekerjaan | Hobby |

 -->

 <form method="POST">
    <h1>Daftar Pekerjaan Bidang IT</h1>
    <label for="">Nama : </label>
    <input type="text" name="nama" placeholder="Masukkan Nama Anda"><br><br>
    <label for="">Pekerjaan IT : </label>
    <select name="pekerjaan" id="">
        <option value="">---Pilih Pekerjaan-----</option>
        <option value="Fullstack Developer">Fullstack Developer</option>
        <option value="DevOps Engineer">DevOps Engineer</option>
        <option value="Programmer Analyst">Programmer Analyst</option>
        <option value="Product Manager">Product Manager</option>
        <option value="AI Engineer">AI Engineer</option>
        <option value="Data Scientist">Data Scientist</option>
        <option value="Software Engineer">Software Engineer</option>
        <option value="Data Engineer">Data Engineer</option>
        <option value="Database Administrator">Database Administrator</option>
        <option value="Cloud Architect">Cloud Architect</option>
    </select><br><br>
    <label for="">Hobi Anda di Bidang IT: </label>
    <p><input type='radio' name='hobby' value='Pemrograman Aplikasi Mobile' />Pemrograman Aplikasi Mobile</p>
    <p><input type='radio' name='hobby' value='Pengembangan Web' />Pengembangan Web</p>
    <p><input type='radio' name='hobby' value='Keamanan Siber (Cybersecurity)' />Keamanan Siber (Cybersecurity)</p>
    <p><input type='radio' name='hobby' value='Kecerdasan Buatan (Artificial Intelligence - AI)' />Kecerdasan Buatan (Artificial Intelligence - AI)</p>
    <p><input type='radio' name='hobby' value='Pengembangan Game' />Pengembangan Game</p>
    <p><input type='radio' name='hobby' value='Pengembangan Internet of Things (IoT)' />Pengembangan Internet of Things (IoT)</p>
    <p><input type='radio' name='hobby' value='Analisis Data' />Analisis Data</p>
    <p><input type='radio' name='hobby' value='DevOps dan Otomatisasi' />DevOps dan Otomatisasi</p>
    <p><input type='radio' name='hobby' value='Desain UI/UX' />Desain UI/UX</p>
    <p><input type='radio' name='hobby' value='Pembelajaran Bahasa Pemrograman Baru' />Pembelajaran Bahasa Pemrograman Baru</p> <br>

    <button type="submit" name="simpan" value="simpan">Simpan</button>
 </form>

 <?php 
    $nama = $_POST ['nama'];
    $pekerjaan = $_POST ['pekerjaan'];
    $hobby = $_POST ['hobby'];
    $simpan = $_POST ['simpan'];

    //menampilkan hasil dalam bentuk tabel
    //Tabel dicetak dalam bentuk kolom:
    //| Nama | Pekerjaan | Hobby |

    if(isset($simpan)){
        echo "<table> 
            <tr>
                <th>Nama</th>
                <th>Pekerjaan</th>
                <th>Hobby</th>
            </tr>
            <tr>
                <td>$nama</td>
                <td>$pekerjaan</td>
                <td>$hobby</td>
            </tr>
        
        </table>";
    }
 ?>

</body>
</html>