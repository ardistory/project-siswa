
<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Form Input Tahun Akademik</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label>Tahun Akademik</label>
            <input type="text" class="form-control" name="tahunakademik" placeholder="Masukkan Tahun Akademik">
          </div>
          <div class="form-group">
            <label >Is Aktif</label>
            <select class="form-control" name="isaktif">
              <option value="y">Ya</option>
              <option value="n">Tidak</option>
            </select>
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
    $tahun = $_POST['tahunakademik'];
    $aktif = $_POST['isaktif'];

    $query = mysqli_query($koneksi, "INSERT INTO tbl_tahun_akademik VALUES('','$tahun', '$aktif', 0)");

    if ($query) {
      echo "<script>alert('Data Berhasil Ditambahkan')</script>";
    }else {
      echo "<script>alert('Data Gagal Ditambahkan')</script>";
    }
}
?>
