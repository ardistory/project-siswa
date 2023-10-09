<?php
include "../database/koneksi.php";
  $id = $_GET['id'];
  $query = "DELETE FROM tbl_tahun_akademik WHERE id_tahun_akademik='$id'";
  $hasil = mysqli_query($koneksi, $query);
  if ($hasil) {
    echo "<script>alert('Berhasil Dihapus'); document.location='index.php?page=data_tahun_akademik';</script>";
  } else {
    echo "<script>alert('Gagal Dihapus')</script>";
  }

?>
