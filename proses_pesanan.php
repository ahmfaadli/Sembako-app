<?php 
require_once 'db_koneksi.php';
?>
<?php 
   if(isset($_GET['iddel'])){
      $ar_data[]=$_GET['iddel'];//?
         $sql = "DELETE FROM produk WHERE id=?";
   } else{
      $_nama_pelanggan = $_POST['nama_pelanggan'];
      $_produk_id = $_POST['produk_id'];
      $_tanggal = $_POST['tanggal'];
      $_quantity = $_POST['quantity'];
      
      $_proses = $_POST['proses'];
      
      // array data
      $ar_data[]=$_nama_pelanggan; // ? 2
      $ar_data[]=$_produk_id; // ? 1
      $ar_data[]=$_tanggal; // ? 2
      $ar_data[]=$_quantity;// 3
 
   }
  
   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (nama_pelanggan,produk_id,tanggal,quantity)
   VALUES (?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pesanan SET nama_produk=?,produk_id=?,tanggal=?,quantity=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   echo '<meta http-equiv="refresh" content="0; url=list_pesanan.php">';
?>