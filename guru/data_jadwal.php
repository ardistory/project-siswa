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
            <th>Guru</th>
            <th>Kelas</th>
            <th>Hari</th>
            <th>Jam</th>
          </tr>
          </thead>
          <tbody>
            <?php
              include '../database/koneksi.php';

              $query = mysqli_query($koneksi,"SELECT * FROM tbl_jadwal jdl, tbl_kelas kl, tbl_guru gr, tbl_mata_pelajaran mapel where
              mapel.kode_mapel = jdl.kode_mapel and jdl.no_identitas = gr.no_identitas and jdl.id_kelas = kl.id_kelas and nama_guru='$nama'");

              $i = 1;

              while ($row = mysqli_fetch_array($query)) {


             ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['nama_mapel']; ?></td>
            <td><?php echo $row['nama_guru']; ?></td>
            <td><?php echo $row['nama_kelas'] ?></td>
            <td><?php echo $row['hari'] ?></td>
            <td><?php echo $row['jam'] ?></td>
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
