
<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Jadwal Pelajaran</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form>
        <div class="card-body">
          <div class="form-group">
            <label>Kelas</label>
            <select class="form-control" onchange="TampilJdl(this.value)">
              <option selected="true" disabled="disabled">--Pilih Kelas--</option>
              <?php
              include'../database/koneksi.php';
              $querykelas = mysqli_query($koneksi,"SELECT * FROM tbl_kelas");

              while ($rowkelas = mysqli_fetch_array($querykelas)) {

               ?>

              <option value="<?php echo $rowkelas['nama_kelas']; ?>"><?php echo $rowkelas['nama_kelas']; ?></option>
            <?php } ?>
            </select>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<div id="JdlData"></div>
