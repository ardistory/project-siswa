<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Form Input Guru</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="../register_guru.php" method="POST">
        <div class="card-body">
        <div class="form-row">
           <div class="form-group col-md-6">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="namalengkap" placeholder="Nama Lengkap">
          </div>
          <div class="form-group col-md-6">
            <label>NIP</label>
            <input type="number" class="form-control" name="no_identitas" placeholder="Nomor Induk Pegawai">
          </div>
          
          <div class="form-group col-md-6">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="gender">
              <option selected="true" disabled="disabled" name="gender">--Pilih Jenis Kelamin--</option>

              <option value="L" name="gender">Laki-Laki</option>
              <option value="P" name="gender">Perempuan</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Tanggal Lahir</label>
            <input type="date" class="form-control" name="tgllahir" placeholder="Nama Lengkap">
          </div>
        
          <div class="form-group col-md-6">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
          </div>
          <div class="form-group col-md-6">
            <label>Kelas</label>
            <select class="form-control" name="kelas">
              <option selected="true" disabled="disabled">--Pilih Kelas--</option>
              <?php
              include'../database/koneksi.php';
              $querykelas = mysqli_query($koneksi,"SELECT * FROM tbl_kelas");

              while ($rowkelas = mysqli_fetch_array($querykelas)) {

               ?>

              <option value="<?php echo $rowkelas['id_kelas']; ?>"><?php echo $rowkelas['nama_kelas']; ?></option>
            <?php } ?>
            </select>
          </div>
         
          <div class="form-group col-md-6">
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username">
              </div>
          <div class="form-group col-md-3">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <div class="form-group col-md-3">
            <label>Masukkan Kembali Password</label>
            <input type="password" class="form-control" name="repassword" placeholder="Password">
          </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
        </div>
        </div>
      </form>      
    </div>
  </div>
</div>
<!--  -->