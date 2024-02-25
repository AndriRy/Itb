<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-dosen.php" method="POST">
                    <div class="form-group">
                        <label for="nidn">NIDN</label>
                        <input type="number" name="nip" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                     <div class="form-group">
                        <label for="mata_kuliah">Mata Kuliah</label>
                        <input type="text" name="mata_kuliah" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="tingkat_pengajaran">Tingkat Pengajaran</label>
                        <input type="text" name="tingkat_pengajaran" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"></textarea>
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>