<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Dosen</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
                <th>NIDN</th><th>Nama Lengkap</th><th>Jenis Kelamin</th><th>Mata Kuliah</th><th>Tingkat Pengajaran</th><th>Alamat</th>
                <th>
                    <a href="input-dosen.php">
                        <button class="btn btn-success glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from dosen order by nidn ASC");
        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['nidn']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['jenis_kelamin']?></td>
                <td><?php echo $row['mata_kuliah']?></td>
                <td><?php echo $row['tingkat_pengajaran']?></td>
                <td><?php echo $row['alamat']?></td>
                <td>

                <a href="edit-dosen.php?id=<?php echo $row['dosen_id']?>">
                    <button class="btn btn-xs btn-primary glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-dosen.php?id=<?php echo $row['dosen_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-trash"></button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div><br><br><br><br>


<?php include "footer.php";?>