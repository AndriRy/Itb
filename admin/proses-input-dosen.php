 <?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nidn=$_POST['nidn'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$mata_pelajaran=$_POST['mata_kuliah'];
$tingkat_pengajaran=$_POST['tingkat_pengajaran'];
$alamat=$_POST['alamat'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into dosen(nidn,nama,jenis_kelamin,mata_kuliah,tingkat_pengajaran,alamat) 
                        values ('$nidn', '$nama', '$jenis_kelamin', '$mata_kuliah', '$tingkat_pengajaran', '$alamat')");

if($simpan==true){

    header("location:tampil-dosen.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>