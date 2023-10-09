<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Guru</h3>
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
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Username</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            <?php
              include '../database/koneksi.php';
              $query = mysqli_query($koneksi,"SELECT * FROM tbl_guru gr, tbl_user us WHERE gr.no_identitas = us.no_identitas");
              $i = 1;

              while ($row = mysqli_fetch_array($query)) {

                $gender = $row['gender_guru'];
                if ($gender == 'L') {
                  $jeniskel = "Laki-Laki";
                } elseif ($gender == "P") {
                  $jeniskel = "Perempuan";
                }

             ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['no_identitas']; ?></td>
            <td><?php echo $row['nama_guru']; ?></td>
            <td><?php echo $jeniskel ?></td>
            <td><?php echo $row['alamat_guru'] ?></td>
            <td><?php echo $row['tgl_lahir_guru'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td class="project-actions text-right">
                <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#modaledit<?php echo $row['no_identitas']; ?>">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                </a>
                <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#modaldelete<?php echo $row['no_identitas']; ?>" >
                    <i class="fas fa-trash">
                    </i>
                    Delete
                </a>
            </td>
          </tr>
          <div class="modal fade" id="modaldelete<?php echo $row['no_identitas']; ?>">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Hapus Akun Guru</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class="" action="delete_guru.php" method="get">
                    <div class="form-group">
                      <label>Anda ingin menghapus akun <?php echo $row['nama_guru']; ?></label>
                      <input type="hidden" name="id" class="form-control" value="<?php echo $row['no_identitas']; ?>">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Yes</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal"s>No</button>
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
                  <h4 class="modal-title">Edit Akun Guru</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class="" action="edit_guru.php" method="get">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>">
                      <input type="hidden" name="id" class="form-control" value="<?php echo $row['no_identitas']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" name="password" class="form-control" placeholder="Masukkan password">
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
