<?php
include "../database/koneksi.php";
  $kode = $_GET['kode_mapel'];
  $nama = $_GET['nama_mapel'];

  $query = "UPDATE tbl_mata_pelajaran SET nama_mapel='$nama' WHERE kode_mapel='$kode'";
  $hasil = mysqli_query($koneksi, $query);
  if ($hasil) {
    echo "<script>alert('Berhasil Edit'); document.location='index.php?page=data_mapel';</script>";
  } else {
    echo "<script>alert('Gagal Edit')</script>";
  }

?>
