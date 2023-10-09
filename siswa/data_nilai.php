<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Jadwal Saya</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>NO</th>
            <th>Mata Pelajaran</th>
            <th>Nilai</th>
          </tr>
          </thead>
          <tbody>
            <?php
              include '../database/koneksi.php';

              $query = mysqli_query($koneksi,"SELECT * FROM tbl_nilai nl, tbl_mata_pelajaran mp where nl.kode_mapel = mp.kode_mapel and no_identitas='$noIden'");

              $i = 1;

              while ($row = mysqli_fetch_array($query)) {


             ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['nama_mapel']; ?></td>
            <td><?php echo $row['nilai']; ?></td>
          </tr>
          </tbody>
          <?php
          $i++;
        }
           ?>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</div>
