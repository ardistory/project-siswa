<?php
	include 'database/koneksi.php';

  $nama = $_POST['namalengkap'];
  $gendersiswa = $_POST['gender'];
  $tgl = $_POST['tgllahir'];
	$date = date('dmy', strtotime($tgl));
	$user = $_POST['username'];
	$address = $_POST['alamat'];
	$pass = md5($_POST['password']);
  $repass = md5($_POST['repassword']);
	$kelas = $_POST['kelas'];
// dd($nama);
// dd($nama);

	$cekuser = mysqli_query($koneksi, "SELECT * FROM tbl_siswa sw, tbl_user sr where sw.no_identitas=sr.no_identitas and username='$user'");

		if(mysqli_num_rows($cekuser) > 0) {
     echo '<script language="javascript">alert("Username Sudah Terdaftar ! "); document.location="register.php";</script>';
   } else {
     if(!$user || !$pass || !$nama || !$tgl || !$gendersiswa || !$address) {
       echo '<script language="javascript">alert("Masih Ada Data Yang Kosong !"); document.location="register.php";</script>';
     } else if ($pass == $repass) {

			 $siswa  = mysqli_query($koneksi, "SELECT max(no_identitas) as NoIdentitas from tbl_siswa");
			 $data = mysqli_fetch_array($siswa);
			 $noIdentitas = $data['NoIdentitas'];
			 $noIden = (int) substr($noIdentitas, 8,2);
			 $noIden++;

			 $char = $date.'02';
			 $no = $char . sprintf("%02s", $noIden);

       $simpan = mysqli_query($koneksi, "INSERT INTO tbl_user VALUES('','$no','$user','$pass','siswa')");

			 $save = mysqli_query($koneksi, "INSERT INTO tbl_siswa VALUES('$no', '$nama', '$gendersiswa', '$address','$tgl', '$kelas')");

       if($simpan && $save) {
         echo '<script language="javascript">alert("Pendaftaran Sukses, Silahkan Login ! "); document.location="index.php";</script>';
       } else {
         echo '<script language="javascript">alert("Pendaftaran Gagal ! "); document.location="register.php";</script>';
       }
     }
		 else {
		    echo '<script language="javascript">alert("Password tidak sama "); document.location="register.php";</script>';
		 }
   }
?>
