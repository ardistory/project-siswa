
<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Profil</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
          </div>
          <div class="form-group">
            <label >Password</label>
            <input type="text" class="form-control" name="password" placeholder="Masukkan Password">
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
    $user = $_POST['username'];
    $pass = md5($_POST['password']);

    $query = mysqli_query($koneksi, "UPDATE tbl_user set username='$user', password='$pass' WHERE level='admin'");

    if ($query) {
      echo "<script>alert('Data Berhasil di update')</script>";
    }else {
      echo "<script>alert('Data Gagal di update')</script>";
    }
}
?>
