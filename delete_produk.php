<?php 
require_once 'db_koneksi.php';
$_iddel=$_GET['iddel'];
$sql="DELETE FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_iddel]);
// redirect page
echo '<meta http-equiv="refresh" content="0; url=list_produk.php">';
?>