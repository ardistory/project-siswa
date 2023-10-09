<?php
include "../database/koneksi.php";
  $id = $_GET['id'];
  $query = "DELETE FROM tbl_kelas WHERE id_kelas='$id'";
  $hasil = mysqli_query($koneksi, $query);
  if ($hasil) {
    echo "<script>alert('Berhasil Dihapus'); document.location='index.php?page=data_kelas';</script>";
  } else {
    echo "<script>alert('Gagal Dihapus')</script>";
  }

?>
