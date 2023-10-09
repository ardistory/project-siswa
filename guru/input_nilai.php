<?php
$id_kelas = $_SESSION['id_guru'];

?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <h3 class="card-title">Data Nilai Siswa</h3>
        <button class="btn btn-success" id="print">Print</button>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>NO</th>
              <th>NIS</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Nilai</th>
            </tr>
          </thead>
          <tbody>
            <?php

            include '../database/koneksi.php';
            $query = mysqli_query($koneksi, "SELECT tbl_siswa.* FROM tbl_siswa WHERE tbl_siswa.id_kelas = $id_kelas");

            //  $query = mysqli_query($koneksi, "SELECT * FROM tbl_siswa sw, tbl_guru gr WHERE sw.id_kelas = gr.id_kelas");

            $i = 1;

            while ($row = mysqli_fetch_array($query)) {

              $gender = $row['gender_siswa'];
              if ($gender == 'L') {
                $jeniskel = "Laki-Laki";
              } elseif ($gender == "P") {
                $jeniskel = "Perempuan";
              }


            ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['no_identitas']; ?></td>
                <td><?php echo $row['nama_siswa']; ?></td>
                <td><?php echo $jeniskel ?></td>
                <td><input type="text" value="<?= $row['nilai']; ?>"></td>
              </tr>
              <div class="modal fade" id="modaldelete<?php echo $row['no_identitas']; ?>">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Hapus Akun Siswa</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form class="" action="delete_siswa.php" method="get">
                        <div class="form-group">
                          <label>Anda ingin menghapus akun <?php echo $row['nama_siswa']; ?></label>
                          <input type="hidden" name="id" class="form-control" value="<?php echo $row['no_identitas']; ?>">
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Yes</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal" s>No</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="modaledit<?php echo $row['no_identitas']; ?>">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Edit Akun Siswa</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form class="" action="edit_siswa.php" method="get">
                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>">
                          <input type="hidden" name="id" class="form-control" value="<?php echo $row['no_identitas']; ?>">
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="text" name="password" class="form-control" placeholder="Masukkan Password">
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
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

<script>
  const tombolPrint = document.getElementById('print');
  tombolPrint.addEventListener('click', () => {
    window.print();
  });
</script>