<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['dosen_id'];
$nidn=$_POST['nidn'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$mata_kuliah=$_POST['mata_kuliah'];
$tingkat_pengajaran=$_POST['tingkat_pengajaran'];
$alamat=$_POST['alamat'];

$ubah=$koneksi->query("update dosen set nidn='$nidn', nama='$nama', jenis_kelamin='$jenis_kelamin', mata_kuliah='$mata_kuliah', tingkat_pengajaran='$tingkat_pengajaran', alamat='$alamat' where dosen_id='$id'");

if($ubah==true){

    header("location:tampil-dosen.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>