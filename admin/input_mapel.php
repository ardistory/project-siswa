

<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Form Input Mata Pelajaran</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label>Kode Mata Pelajaran</label>
            <input type="text" class="form-control" name="kode_mapel" placeholder="Masukkan Kode Mapel">
          </div>
          <div class="form-group">
            <label >Nama Mata Pelajaran</label>
            <input type="text" class="form-control" name="nama_mapel" placeholder="Masukkan Nama Mapel">
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
include'../database/koneksi.php';

if (isset($_POST['submit'])) {
    $kode = $_POST['kode_mapel'];
    $nama = $_POST['nama_mapel'];

    $query = mysqli_query($koneksi, "INSERT INTO tbl_mata_pelajaran VALUES('$kode', '$nama')");

    if ($query) {
      echo "<script>alert('Data Berhasil Ditambahkan')</script>";
    }else {
      echo "<script>alert('Data Gagal Ditambahkan')</script>";
    }
}
?>
