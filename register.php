<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <link rel="stylesheet" href="dist/css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index2.html"><b>SIAK</b>Register</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
    <ul class="tab-group">
      <li class="tab active"><a href="#guru">Guru</a></li>
      <li class="tab"><a href="#siswa">Siswa</a></li>
    </ul>
    <div class="tab-content">
      <div id="guru">
        <p class="login-box-msg">Register a new membership</p>
        <form action="register_guru.php" method="post">
          <div class="input-group mb-3">
            <input type="text" name="namalengkap" class="form-control" placeholder="Nama Lengkap">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <select class="form-control" name="gender">
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-venus-mars"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
          <input type="date" class="form-control" name="tgllahir" >
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="far fa-calendar-alt"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-address-card"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="repassword" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
          </div>
        </form>
      </div>
      <div id="siswa">
        <p class="login-box-msg">Register a new membership</p>
        <form action="register_siswa.php" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="namalengkap" placeholder="Nama Lengkap">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <select class="form-control" name="gender">
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-venus-mars"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
          <input type="date" class="form-control" name="tgllahir" >
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="far fa-calendar-alt"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-address-card"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="repassword" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <select class="form-control" name="kelas">
              <option selected="true" disabled="disabled">--Pilih Kelas--</option>
              <?php
              include 'database/koneksi.php';
              $querykelas = mysqli_query($koneksi,"SELECT * FROM tbl_kelas");

              while ($rowkelas = mysqli_fetch_array($querykelas)) {

               ?>
              <option value="<?php echo $rowkelas['id_kelas']; ?>"><?php echo $rowkelas['nama_kelas']; ?></option>
            <?php } ?>
            </select>

            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user-graduate"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <a href="index.php" class="text-center">I already have a membership</a>
  </div>
</div>
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src='dist/js/jquery.min.js'></script>
<script src="dist/js/index.js"></script>
</body>
</html>
