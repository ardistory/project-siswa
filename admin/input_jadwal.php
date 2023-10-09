
<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Form Input Kelas</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" method="POST">
        <div class="card-body">
          <div class="form-group">
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
          <div class="form-group">
            <label>Mata Pelajaran</label>
            <select class="form-control" name="matapelajaran">
                <option selected="true" disabled="disabled">--Pilih Mata Pelajaran--</option>
              <?php
              include'../database/koneksi.php';
              $querymapel = mysqli_query($koneksi,"SELECT * FROM tbl_mata_pelajaran");

              while ($rowmapel = mysqli_fetch_array($querymapel)) {

               ?>
              <option value="<?php echo $rowmapel['kode_mapel']; ?>"><?php echo $rowmapel['nama_mapel']; ?></option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Nama Guru</label>
            <select class="form-control" name="guru">
                <option selected="true" disabled="disabled">--Pilih Guru--</option>
              <?php
              include'../database/koneksi.php';
              $queryguru = mysqli_query($koneksi,"SELECT * FROM tbl_guru");

              while ($rowguru = mysqli_fetch_array($queryguru)) {

               ?>
              <option value="<?php echo $rowguru['no_identitas']; ?>"><?php echo $rowguru['nama_guru']; ?></option>
            <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Hari</label>
            <select class="form-control" name="hari">
              <option selected="true" disabled="disabled">--Pilih Hari--</option>
              <option value="Senin">Senin</option>
              <option value="Selasa">Selasa</option>
              <option value="Rabu">Rabu</option>
              <option value="Kamis">Kamis</option>
              <option value="Jumat">Jumat</option>
              <option value="Sabtu">Sabtu</option>
            </select>
          </div>
          <div class="form-group">
            <label>Jam</label>
            <select class="form-control" name="jam">
              <option selected="true" disabled="disabled">--Pilih Jam--</option>
              <option value="07.15 - 08.00">07.15 - 08.00</option>
              <option value="08.00 - 08.45">08.00 - 08.45</option>
              <option value="08.45 - 09.30">08.45 - 09.30</option>
              <option value="09.30 - 10.00">09.30 - 10.00</option>
              <option value="10.00 - 10.45">10.00 - 10.45</option>
              <option value="10.45 - 11.30">10.45 - 11.30</option>
              <option value="11.30 - 12.15">11.30 - 12.15</option>
              <option value="12.15 - 13.00">12.15 - 13.00</option>
              <option value="13.00 - 13.30">13.00 - 13.30</option>
              <option value="13.30 - 14.15">13.30 - 14.15</option>
            </select>
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
    $kelas = $_POST['kelas'];
    $mapel = $_POST['matapelajaran'];
    $guru = $_POST['guru'];
    $jam = $_POST['jam'];
    $hari = $_POST['hari'];




    $query = mysqli_query($koneksi, "INSERT INTO tbl_jadwal VALUES ('', '$kelas','$mapel', '$guru', '$jam', '$hari')");

    if ($query) {
      echo "<script>alert('Data Berhasil Ditambahkan')</script>";
    }else {
      echo "<script>alert('Data Gagal Ditambahkan')</script>";
    }
}
?>
