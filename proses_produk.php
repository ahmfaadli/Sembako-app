<?php 
require_once 'db_koneksi.php';
?>
<?php 
   if(isset($_GET['iddel'])){
      $ar_data[]=$_GET['iddel'];//?
         $sql = "DELETE FROM produk WHERE id=?";
   } else{
      $_nama = $_POST['nama'];
      $_stok = $_POST['stok'];
      $_harga = $_POST['harga'];
      $_berat = $_POST['berat'];
      $_jenis_produk_id = $_POST['jenis_produk_id'];
      $_gambar = $_POST['gambar'];
      $_deskripsi = $_POST['deskripsi'];
      
      $_proses = $_POST['proses'];
      
      // array data
      $ar_data[]=$_nama; // ? 2
      $ar_data[]=$_stok; // ? 1
      $ar_data[]=$_harga; // ? 2
      $ar_data[]=$_berat;// 3
      $ar_data[]=$_jenis_produk_id;
      $ar_data[]=$_gambar;
      $ar_data[]=$_deskripsi;
   }
  
   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO produk (nama,stok,harga,berat,jenis_produk_id,gambar,deskripsi)
   VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE produk SET nama=?,stok=?,harga=?,berat=?,jenis_produk_id=?,gambar=?,deskripsi=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   echo '<meta http-equiv="refresh" content="0; url=list_produk.php">';
?>