<?php
include "../database/koneksi.php";
  $id = $_GET['id'];
  $tahun = $_GET['tahunakademik'];
  $aktif = $_GET['isaktif'];

  $query = "UPDATE tbl_tahun_akademik SET tahun_akademik='$tahun', is_aktif='$aktif' WHERE id_tahun_akademik='$id'";
  $hasil = mysqli_query($koneksi, $query);
  if ($hasil) {
    echo "<script>alert('Berhasil Edit'); document.location='index.php?page=data_tahun_akademik';</script>";
  } else {
    echo "<script>alert('Gagal Edit')</script>";
  }

?>
