<?php 
    require_once '../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT DISTINCT kartu.*, pelanggan.kartu_id FROM kartu LEFT JOIN pelanggan ON kartu.id=pelanggan.kartu_id";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form_kartu.php" role="button">Create Kartu</a>
        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr class="table-primary text-uppercase">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Diskon</th>
                    <th>Iuran</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['kode']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['diskon']?></td>
                        <td><?=$row['iuran']?></td>
                        <td>
                            <a class="btn btn-primary" href="view_kartu.php?id=<?=$row['id']?>">View</a>
                            <a class="btn btn-warning" href="edit_kartu.php?idedit=<?=$row['id']?>">Edit</a>
                        <?php if ($row['kartu_id']) :?>
                            <a class="btn btn-danger disabled" href="" onclick="alert('Produk memiliki relasi!')">Delete</a>
                        <?php else : ?>
                            <a class="btn btn-danger" href="delete_kartu.php?iddel=<?= $row['id'] ?>" onclick="return confirm('Anda Yakin Hapus Data Kartu <?= $row['nama'] ?>?')">Delete</a>
                        <?php endif;?>
                        </td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
