
<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Input Kelas</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label>Nama Kelas</label><span> *gunakan angka romawi</span>
            <input type="text" class="form-control" name="namakelas" placeholder="Masukkan Nama Kelas">
          </div>
        </div>
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
    $nama = $_POST['namakelas'];

    $query = mysqli_query($koneksi, "INSERT INTO tbl_kelas VALUES ('', '$nama')");

    if ($query) {
      echo "<script>alert('Data Berhasil Ditambahkan')</script>";
    }else {
      echo "<script>alert('Data Gagal Ditambahkan')</script>";
    }
}
?>
