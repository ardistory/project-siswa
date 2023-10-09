<?php
include "../database/koneksi.php";
  $kode = $_GET['kode_mapel'];
  $query = "DELETE FROM tbl_mata_pelajaran WHERE kode_mapel='$kode'";
  $hasil = mysqli_query($koneksi, $query);
  if ($hasil) {
    echo "<script>alert('Berhasil Dihapus'); document.location='index.php?page=data_mapel';</script>";
  } else {
    echo "<script>alert('Gagal Dihapus')</script>";
  }

?>
