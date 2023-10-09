<?php
include "../database/koneksi.php";
  $user = $_GET['username'];
  $pass = md5($_GET['password']);
  $id = $_GET['id'];



  if (!$pass || !$user) {
    echo "<script>alert('Data Harus Lengkap'); document.location='index.php?page=data_guru';</script>";
  } else {
    $query = "UPDATE tbl_user SET username='$user' , password='$pass' WHERE no_identitas='$id'";
    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) {
      echo "<script>alert('Berhasil Edit'); document.location='index.php?page=data_guru';</script>";
    } else {
      echo "<script>alert('Gagal Edit')</script>";
    }
  }

?>
