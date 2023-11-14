<?php
$id_kelas = $_SESSION['id_guru'];
include '../database/koneksi.php';
$query = mysqli_query($koneksi, "SELECT tbl_siswa.* FROM tbl_siswa WHERE tbl_siswa.id_kelas = $id_kelas");
$dataMurid = [];

foreach ($query as $qr) {
  $dataMurid[] = $qr;
}
?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <h3 class="card-title">Data Nilai Siswa</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <label for="data-murid">Murid :</label>
        <select id="data-murid">
          <option data-nama="Pilih Siswa" value="Pilih Siswa" class="nama-siswa">
            Pilih Siswa
          </option>
          <?php foreach ($dataMurid as $murid): ?>
            <option data-nama="<?= $murid['no_identitas']; ?>" value="<?= $murid['no_identitas']; ?>" class="nama-siswa">
              <?= $murid['nama_siswa']; ?>
            </option>
          <?php endforeach; ?>
        </select>
        <button class="btn btn-success" id="print">Print</button>

        <table class="table table-bordered table-hover mt-3">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Surat</th>
              <th>Nilai</th>
            </tr>
          </thead>
          <tbody id="tbody">

          </tbody>
        </table>
        <button class="btn btn-success mt-2">SAVE</button>
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

  const selectMurid = document.getElementById('data-murid');
  const cetakMurid = document.getElementById('cekbymurid');

  selectMurid.addEventListener('change', () => {
    const namaSiswa = selectMurid.options[selectMurid.selectedIndex].getAttribute('data-nama');

    const xhr = new XMLHttpRequest();
    xhr.open('GET', `./../server/ambilDataMurid.php?no_identitas=${namaSiswa}`, true);
    xhr.onload = function () {
      if (xhr.status === 200) {
        const tbody = document.getElementById('tbody');

        const data = JSON.parse(xhr.responseText);
        let bodyTable = '';
        let nomorUrut = 1;
        data.forEach(value => {
          bodyTable += `<tr>
              <td>
                ${nomorUrut}
              </td>
              <td>
              ${value.nama_surat}
              </td>
              <td>
              <input type="text" class="form-nilai" value="${value.nilai}" data-id="${value.id}" data-noidentitas="${value.no_identitas}">
              </td>
            </tr>`;

          nomorUrut++;
        });

        const idSurat = document.querySelectorAll('.form-nilai');
        idSurat.forEach((value) => {
          console.log(value);
        });

        tbody.innerHTML = bodyTable;
      } else {
        console.log(xhr.responseText);
      }
    }
    xhr.send();

  });

</script>