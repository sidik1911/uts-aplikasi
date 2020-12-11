<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>PENGAJUAN CUTI</title>
  </head>
  <body>
    <h1><center>FORMULIR DATA</center></h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
<?php
include "koneksi.php";
if (isset ($_POST['save'])) {
	$NIP=$_POST['NIP'];
    $nama=$_POST['nama'];
    $jabatan=$_POST['jabatan'];
	$bagian=$_POST['bagian'];
	$date=$_POST['date'];
	$pengajuan_cuti=$_POST['pengajuan_cuti'];
	$sisa_cuti=$_POST['sisa_cuti'];
$query=mysqli_query($koneksi, "insert into cuti_karyawan (NIP,nama,jabatan,bagian,pengajuan_cuti,sisa_cuti,date)
value('$NIP','$nama','$jabatan','$bagian','$pengajuan_cuti','$sisa_cuti','$date')");
if ($query){
    header("location:tampil_mahasiswa.php");
}else{
    echo mysqli_eror();
}
}
?>
<form method="POST" action="">
<table class="table bg-warning">
	<tr>
        <td>NIK</td>
	<td><input class="form-control" placeholder="" aria-label="default input example" type="varchar" name="NIP"></td>
    </tr>
    <tr>
        <td>NAMA</td>
	<td><input class="form-control" placeholder="" aria-label="default input example" type="varchar" name="nama"></td>
    </tr>
	<tr>
        <td>JABATAN</td>
	<td><input class="form-control" placeholder="" aria-label="default input example" type="varchar" name="jabatan"></td>
    </tr>
	<tr>
        <td>BAGIAN</td>
	<td><input class="form-control" placeholder="" aria-label="default input example" type="varchar" name="bagian"></td>
    </tr>
	<tr>
		<td>TANGGAL</td>
	<td><input class="form-control" placeholder="" aria-label="default input example" type="date" name="date"></td>
    </tr>
	<tr>
        <td>PENGAJUAN CUTI</td>
	<td><input class="form-control" placeholder="" aria-label="default input example" type="int" name="pengajuan_cuti"></td>
    </tr>
	<tr>
        <td>SISA CUTI</td>
	<td><input class="form-control" placeholder="" aria-label="default input example" type="int" name="sisa_cuti"></td>
    </tr>
	<tr>
        <td><input class="btn bg-danger" type="submit" name="save" value="SAVE"></td> 
		<td><a class="btn bg-danger" href="tampil_mahasiswa.php" role="button">MENAMPILKAN DATA</a></td>
	</tr>


</table>
</form>
</html>