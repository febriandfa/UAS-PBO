<?php
include "hewan.php";
include "jenis.php";
include "kucing.php";
include "anjing.php";
include "burung.php";
include "koneksi.php";
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
			<h4>Anjing Kucing Burung</h4>
		</div>
		<div class="col-md-10">
			<button onclick="location.href='tambahhewan.php'" class="btn btn-primary">Tambah Hewan</button>
		</div>
	</div>
	<br>
	<table id="tabeldata" width="100%" class="table table-striped table-bordered">
		<thead>
			<tr>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Warna</th>
				<th>Jumlah Kaki</th>
                <th>Keluarga</th>
				<th>Aktivitas</th>
                <th>Suara</th>
                <th>Aksi</th>
			</tr>	
		</thead>
<tbody>
<?php
$query = "SELECT * FROM hewan";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    if ($row['jenis'] == "Kucing") {
        $hewan = new Kucing($row['nama'], $row['jenis'], $row['warna'], $row['kaki']);
    } elseif ($row['jenis'] == "Anjing") {
        $hewan = new Anjing($row['nama'], $row['jenis'], $row['warna'], $row['kaki']);
    } elseif ($row['jenis'] == "Burung") {
        $hewan = new Burung($row['nama'], $row['jenis'], $row['warna'], $row['kaki']);
    }
?>
            <tr>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['jenis'] ?></td>
                <td><?php echo $row['warna'] ?></td>
				<td><?php echo $hewan->jumlah_kaki() ?></td>
				<td><?php echo $hewan->jenis_keluarga() ?></td>
                <td><?php echo $hewan->jenis_aktivitas() ?></td>
                <td><?php echo $hewan->bersuara() ?></td>
                <td class="text-center">
					<a href="hapushewan.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Hapus Data?')" class="btn btn-danger">Hapus</a>
			    </td>
            </tr>
<?php
}
?>
</tbody>
		<tfoot>
			<tr>
                <th>Nama</th>
				<th>Jenis</th>
				<th>Warna</th>
				<th>Jumlah Kaki</th>
				<th>Keluarga</th>
				<th>Aktivitas</th>
				<th>Suara</th>
                <th>Aksi</th>
			</tr>	
		</tfoot>
	</table>
</div>