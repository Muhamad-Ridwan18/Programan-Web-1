<?php
session_start();

if(isset($_POST['create'])) {
  $nama = $_POST['nama'];
  $jeniskelamin = $_POST['jeniskelamin'];
  $tanggallahir = $_POST['tanggallahir'];
  $tempatlahir = $_POST['tempatlahir'];
  $agama = $_POST['agama'];
  $alamatlengkap = $_POST['alamatlengkap'];

  // set session
  $_SESSION['nama'] = $nama;
  $_SESSION['jeniskelamin'] = $jeniskelamin;
  $_SESSION['tanggallahir'] = $tanggallahir;
  $_SESSION['tempatlahir'] = $tempatlahir;
  $_SESSION['agama'] = $agama;
  $_SESSION['alamatlengkap'] = $alamatlengkap;

  // set cookies
  setcookie('nama', $nama, time() + (86400 * 30), "/");
  setcookie('jeniskelamin', $jeniskelamin, time() + (86400 * 30), "/");
  setcookie('tanggallahir', $tanggallahir, time() + (86400 * 30), "/");
  setcookie('tempatlahir', $tempatlahir, time() + (86400 * 30), "/");
  setcookie('agama', $agama, time() + (86400 * 30), "/");
  setcookie('alamatlengkap', $alamatlengkap, time() + (86400 * 30), "/");

  // redirect ke halaman tampilan biodata
  header("Location: index.php");
  exit();
}
?>