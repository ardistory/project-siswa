
<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Profil</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <?php
      include '../database/koneksi.php';
      $session = $_SESSION['username'];
      $query = "SELECT * FROM tbl_user us, tbl_siswa sw WHERE us.no_identitas=sw.no_identitas and level='siswa' and nama_siswa='$nama' and username='$username' and tgl_lahir_siswa='$tgl'";
      $hasil = mysqli_query($koneksi, $query);
      $row = mysqli_fetch_array($hasil);

      $nama = $row['nama_siswa'];
      $alamat = $row['alamat_siswa'];
      $date = $row['tgl_lahir_siswa'];
       ?>
      <form role="form" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="namalengkap" value="<?php echo $nama ?>">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" value="<?php echo $alamat ?>">
          </div>
          <div class="form-group">
            <label >Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggallahir" value="<?php echo $date ?>">
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
    $namalengkap = $_POST['namalengkap'];
    $alamatguru = $_POST['alamat'];
    $tgl = $_POST['tanggallahir'];

    $query = mysqli_query($koneksi, "UPDATE tbl_siswa set nama_siswa='$namalengkap', alamat_siswa='$alamatguru', tgl_lahir_siswa='$tgl' WHERE no_identitas='$noIden'");

    if ($query) {
      echo "<script>alert('Data Berhasil di update');document.location='index.php?page=edit_profil';</script>";
    }else {
      echo "<script>alert('Data Gagal di update')</script>";
    }
}
?>
