<?php 
require_once 'db_koneksi.php';
?>
<?php 
   if(isset($_GET['iddel'])){
      $ar_data[]=$_GET['iddel'];//?
         $sql = "DELETE FROM produk WHERE id=?";
   } else{
      $_jenis_produk = $_POST['jenis_produk'];
      
      $_proses = $_POST['proses'];
      
      // array data
      $ar_data[]=$_jenis_produk;
   }
  
   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO jenis_produk (jenis_produk)
   VALUES (?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE jenis_produk SET jenis_produk=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   echo '<meta http-equiv="refresh" content="0; url=list_jenis.php">';
?>