<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Info Akun</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <table class="table table-condensed table-hover">
          <?php
          include '../database/koneksi.php';
          $session = $_SESSION['username'];
          $query = "SELECT * FROM tbl_user WHERE level='admin'";
          $hasil = mysqli_query($koneksi, $query);
          while ($row = mysqli_fetch_array($hasil)) {

           ?>
           <tr>
             <td>No Identitas</td>
             <td>:</td>
             <td><?php echo $row['no_identitas'] ?></td>
           </tr>
          <tr>
            <td width="160">Username</td>
            <td width="10">:</td>
            <td><?php echo $row['username']; ?></td>
          </tr>
          <tr>
            <td width="160">Password</td>
            <td width="10">:</td>
            <td><?php echo $row['password']; ?></td>
          </tr>
        </table>
      </div>
    <?php } ?>
      <!-- /.card-body -->
    </div>
  </div>
</div>
