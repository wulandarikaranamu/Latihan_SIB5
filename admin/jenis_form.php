<?php 
error_reporting(0);
$objJenis = new Jenis_produk();
$rs = $objJenis->dataJenis();
$idedit = $_REQUEST ['idedit'];
$objJenis = new Jenis_produk();
if (!empty($idedit)){
  $row = $objJenis->getJenis($idedit);
}else{
  $row = array();
}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="jenis_controller.php" method="POST">
<br>

<h2 align="center">Isi Nama Jenis Produk</h2>
<br>

  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="nama" type="text" class="form-control" placeholder="isi nama jenis produk"
        value="<?= $row['nama'] ?>">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <?php 
        if(empty($idedit)){ ?>
              <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
      <?php  } else{
        ?>
          <button type="submit" name="proses" value="ubah" class="btn btn-warning">Ubah</button>
   <?php   } ?>
   <input type="hidden" name="idx" value="<?= $idedit; ?>">
    
    </div>
  </div>