<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $jenis = $_POST['jenis'];
  $warna = $_POST['warna'];
  $kaki = $_POST['kaki'];

  $query = "INSERT INTO hewan (nama, jenis, warna, kaki) VALUES ('$nama', '$jenis', '$warna', '$kaki')";

  mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Anjing Kucing Burung</title>
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">
</head>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Tambah Hewan</h4>
		</div>
		<div class="col-md-6"></div>
	</div>
	<br>
    <form action="" method="post">
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
	            <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama">
	            </div>
	    </div>
        <br>
        <div class="form-group row">
            <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
	            <div class="col-sm-10">
                    <select class="form-control" id="jenis" name="jenis">
				        <option value="Kucing">Kucing</option>
				        <option value="Anjing">Anjing</option>
                        <option value="Burung">Burung</option>
		            </select>
	            </div>
	    </div>
        <br>
        <div class="form-group row">
            <label for="warna" class="col-sm-2 col-form-label">Warna</label>
	            <div class="col-sm-10">
                    <input type="text" class="form-control" id="warna" name="warna">
	            </div>
	    </div>
        <br>
        <div class="form-group row">
            <label for="kaki" class="col-sm-2 col-form-label">Jumlah Kaki</label>
	            <div class="col-sm-10">
                    <input type="text" class="form-control" id="kaki" name="kaki">
	            </div>
	    </div>
        <br>
        <div class="form-group row">
	        <div class="col-sm-10">
	            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <button type="button" onclick="location.href='index.php'" class="btn btn-success">Kembali</button>
            </div>
        </div>
    </form>
</div>