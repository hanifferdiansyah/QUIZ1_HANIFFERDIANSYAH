<?php 

include("koneksi.php");

$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$rumpun = $_POST['rumpun'];
$tempat = $_POST['tempat'];
$tanggalLahir = $_POST['tanggalLahir'];
$email = $_POST['email'];


$simpan = "INSERT INTO quiz1_hanif (nidn,nama,rumpun,tempat,tanggalLahir,email) VALUES ('$nidn','$nama','$rumpun','$tempat','$tanggalLahir','$email')";

mysqli_query($koneksi, $simpan);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Dosen</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-6 m-auto">
            <div class="card">
            <div class="card-header">
                <h3>Tabel Dosen</h3>
            </div>
            <div class="card-body">
            <table class="table">
  
  <tbody>
  <tr>
        <td scope="row">NIDN</td>
        <td> : <?=$nidn?> </td>
    </tr>
    <tr>
        <td scope="row">Nama Lengkap</td>
        <td> : <?=$nama?> </td>
    </tr>
    <tr>
        <td scope="row">Rumpun</td>
        <td> : <?=$rumpun?> </td>
    </tr>
    <tr>
        <td scope="row">Tempat Lahir</td>
        <td> : <?=$tempat?> </td>
    </tr>
    <tr>
        <td scope="row">Tanggal Lahir</td>
        <td> : <?=$tanggalLahir?> </td>
    </tr>
    <tr>
        <td scope="row">Email</td>
        <td> : <?=$email?></td>
    </tr>
  </tbody>
</table>
<a href="index.php" class="btn btn-danger btn-sm">Kembali</a>
            </div>
            </div>
        </div>
    </div>
</div>

<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>