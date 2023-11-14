<?php

require __DIR__ . '/../database/koneksi.php';

$noIdSiswa = $_GET['no_identitas'];

$ambilDataSiswa = mysqli_query($koneksi, "SELECT tbl_surat.id,tbl_surat.nama_surat, tbl_nilai.no_identitas, tbl_nilai.nilai FROM tbl_nilai, tbl_surat
WHERE tbl_nilai.id_surat = tbl_surat.id AND tbl_nilai.no_identitas = '$noIdSiswa'");
$result = [];

foreach ($ambilDataSiswa as $row) {
    $result[] = $row;
}

http_response_code(200);

echo json_encode($result);