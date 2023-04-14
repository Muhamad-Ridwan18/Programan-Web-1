<?php
session_start();

if(isset($_COOKIE['nama']) && isset($_COOKIE['jeniskelamin']) && isset($_COOKIE['tempatlahir']) && isset($_COOKIE['tanggallahir']) 
&& isset($_COOKIE['agama']) && isset($_COOKIE['alamatlengkap'])) {
  $nama = $_COOKIE['nama'];
  $jeniskelamin = $_COOKIE['jeniskelamin'];
  $tempatlahir = $_COOKIE['tempatlahir'];
  $tanggallahir = $_COOKIE['tanggallahir'];
  $agama = $_COOKIE['agama'];
  $alamatlengkap = $_COOKIE['alamatlengkap'];
} else {
  $nama = "";
  $jeniskelamin = "";
  $tempatlahir = "";
  $tanggallahir = "";
  $agama = "";
  $alamatlengkap = "";
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Session And Cookie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="card mt-4 mb-4 mx-auto" style="width: 36rem; border-radius:30px;">
        <div class="container p-5">
                <h1>ADD BIODATA</h1>
                <p>Silahkan Masukan Data Diri Anda Di Bawah Ini</p>
                <form method="post" action="process.php">
                <div class="mb-3 mt-4">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama"  placeholder="Nama Lengkap">
                </div>
                <div class="mb-3">
                    <label for="Jenis Kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin" placeholder="Jenis Kelamin">
                </div>
                <div class="mb-3">
                    <label for="Tempat Lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempatlahir" name="tempatlahir"  placeholder="Tempat Lahir">
                </div>
                <div class="mb-3">
                    <label for="Tanggal Lahir" class="form-label">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tanggallahir" name="tanggallahir" placeholder="Tanggal Lahir">
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <input type="text" class="form-control" id="agama" name="agama"  placeholder="Agama">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamatlengkap" name="alamatlengkap" placeholder="Alamat Lengkap"  rows="3"></textarea>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <input type="submit" class="btn btn-success" name="create" value="+ Tambah">
                </div>
            </form>
        </div>
    </div>
</div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>


