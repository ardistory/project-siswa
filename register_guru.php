<?php
  include 'database/koneksi.php';

  $nama = $_POST['namalengkap'];
  $genderguru = $_POST['gender'];
  $tgl = $_POST['tgllahir'];
  $date = date('dmy', strtotime($tgl));
  $user = $_POST['username'];
  $address = $_POST['alamat'];
  $pass = md5($_POST['password']);
  $repass = md5($_POST['repassword']);
  $kelas = $_POST['kelas'];
  $nis = $_POST['no_identitas'];

  $cekuser = mysqli_query($koneksi, "SELECT * FROM tbl_guru sw, tbl_user sr where sw.no_identitas=sr.no_identitas and username='$user'");

    if(mysqli_num_rows($cekuser) > 0) {
     echo '<script language="javascript">alert("Username Sudah Terdaftar ! "); document.location="admin/index.php?page=input_guru";</script>';
   } else {
     if(!$user || !$pass || !$nama || !$tgl || !$genderguru || !$address || !$nis) {
       echo '<script language="javascript">alert("Masih Ada Data Yang Kosong !"); document.location="admin/index.php?page=input_guru";</script>';
     } else if ($pass == $repass) {

       $simpan = mysqli_query($koneksi, "INSERT INTO tbl_user VALUES('','$nis','$user','$pass','guru')");

       $save = mysqli_query($koneksi, "INSERT INTO tbl_guru VALUES('$nis', '$nama', '$genderguru', '$address','$tgl', '$kelas')");

       if($simpan && $save) {
         echo '<script language="javascript">alert("Pendaftaran Sukses ! "); document.location="admin/index.php?page=input_guru";</script>';
       } else {
         echo '<script language="javascript">alert("Pendaftaran Gagal ! "); document.location="admin/index.php?page=input_guru";</script>';
       }
     }
     else {
        echo '<script language="javascript">alert("Password tidak sama "); document.location="admin/index.php?page=input_guru";</script>';
     }
   }
?>
