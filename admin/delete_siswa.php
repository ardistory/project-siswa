<?php
include "../database/koneksi.php";
  $id = $_GET['id'];

  $query = "DELETE FROM tbl_siswa WHERE no_identitas='$id'";

  $hasil = mysqli_query($koneksi, $query);
  if ($hasil) {
    $delete = mysqli_query($koneksi, "DELETE FROM tbl_user WHERE no_identitas='$id'");
    echo "<script>alert('Berhasil Dihapus'); document.location='index.php?page=data_siswa';</script>";
  } else {
    echo "<script>alert('Gagal Dihapus')</script>";
  }

?>
