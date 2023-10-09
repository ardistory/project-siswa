<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Info Akun <?php echo $row['username']; ?> </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <table class="table table-condensed table-hover">
          <?php
          include '../database/koneksi.php';
          $session = $_SESSION['username'];
          $query = "SELECT * FROM tbl_user us, tbl_siswa sw WHERE us.no_identitas=sw.no_identitas and level='siswa' and nama_siswa='$nama' and username='$username' and tgl_lahir_siswa='$tgl'";
          $hasil = mysqli_query($koneksi, $query);
          while ($row = mysqli_fetch_array($hasil)) {

            $gender = $row['gender_siswa'];
            if ($gender == 'L') {
              $jeniskel = "Laki-Laki";
            } elseif ($gender == "P") {
              $jeniskel = "Perempuan";
            }

           ?>
           <tr>
             <td>NIS</td>
             <td>:</td>
             <td><?php echo $row['no_identitas'] ?></td>
           </tr>
           <tr>
             <td>Nama</td>
             <td>:</td>
             <td><?php echo $row['nama_siswa'] ?></td>
           </tr>
           <tr>
             <td>Jenis Kelamin</td>
             <td>:</td>
             <td><?php echo $jeniskel ?></td>
           </tr>
           <tr>
             <td width="160">Alamat</td>
             <td width="10">:</td>
             <td><?php echo $row['alamat_siswa']; ?></td>
           </tr>
           <tr>
             <td width="160">Tanggal Lahir</td>
             <td width="10">:</td>
             <td><?php echo $row['tgl_lahir_siswa']; ?></td>
           </tr>
          <!-- <tr>
            <td width="160">Username</td>
            <td width="10">:</td>
            <td><?php echo $row['username']; ?></td>
          </tr> -->
          <!-- <tr>
            <td width="160">Password</td>
            <td width="10">:</td>
            <td><?php echo $row['password']; ?></td>
          </tr> -->
        </table>
      </div>
    <?php } ?>
      <!-- /.card-body -->
    </div>
  </div>
</div>
