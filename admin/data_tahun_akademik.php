<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Tahun Akademik</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>NO</th>
            <th>Tahun Akademik</th>
            <th>Is Aktif</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            <?php
              include '../database/koneksi.php';
              $query = mysqli_query($koneksi,"SELECT * FROM tbl_tahun_akademik");
              $i = 1;

              while ($row = mysqli_fetch_array($query)) {
                // code...
                $is = $row['is_aktif'];
                $aktif = "Aktif";
                if ($is == "y") {
                  $aktif = "Aktif";
                } elseif ($is == "n") {
                  $aktif = "Tidak Aktif";
                }

             ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['tahun_akademik']; ?></td>
            <td><?php echo $aktif; ?></td>
            <td class="project-actions text-right">
                <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#modaledit<?php echo $row['id_tahun_akademik']; ?>">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                </a>
                <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#modaldelete<?php echo $row['id_tahun_akademik']; ?>" >
                    <i class="fas fa-trash">
                    </i>
                    Delete
                </a>
            </td>
          </tr>
          <div class="modal fade" id="modaldelete<?php echo $row['id_tahun_akademik']; ?>">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Hapus Tahun Akademik</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class="" action="delete_tahun_akademik.php" method="get">
                    <div class="form-group">
                      <label>Anda ingin menghapus tahun akademik <?php echo $row['tahun_akademik']; ?></label>
                      <input type="hidden" name="id" class="form-control" value="<?php echo $row['id_tahun_akademik']; ?>">
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
          <div class="modal fade" id="modaledit<?php echo $row['id_tahun_akademik']; ?>">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Edit Tahun Akademik</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class="" action="edit_tahun_akademik.php" method="get">
                    <div class="form-group">
                      <label>Tahun Akademik</label>
                      <input type="text" class="form-control" name="tahunakademik" value="<?php echo $row['tahun_akademik']; ?>">
                      <input type="hidden" name="id" class="form-control" value="<?php echo $row['id_tahun_akademik']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Is Aktif</label>
                      <select class="form-control" name="isaktif">
                        <option value="y">Ya</option>
                        <option value="n">Tidak</option>
                      </select>
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
