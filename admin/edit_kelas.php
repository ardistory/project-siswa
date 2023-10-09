<?php
include "../database/koneksi.php";
  $id = $_GET['id'];
  $nama = $_GET['namakelas'];

  $query = "UPDATE tbl_kelas SET nama_kelas='$nama' WHERE id_kelas='$id'";
  $hasil = mysqli_query($koneksi, $query);
  if ($hasil) {
    echo "<script>alert('Berhasil Edit'); document.location='index.php?page=data_kelas';</script>";
  } else {
    echo "<script>alert('Gagal Edit')</script>";
  }

?>
