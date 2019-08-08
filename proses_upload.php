<?php
  // code A
  include("fungsi_koneksi.php");
  // end of code A
   
  // code B
  $lokasi_file = $_FILES['gambar']['tmp_name'];
  $tipe_file   = $_FILES['gambar']['type'];
  $nama_file   = $_FILES['gambar']['name'];
  $direktori   = "img/$nama_file";
  // end of code B
   
  if (!empty($lokasi_file)) {
    move_uploaded_file($lokasi_file,$direktori); 
   
    // code C
    $koneksi = koneksi_db();
    $sql = "insert into dtimage values (null,'$nama_file')";
    $aksi = mysqli_query($koneksi,$sql);
    // end of code C
     
    // code D
    if (!$aksi) {
    echo "maaf gagal memasukan gambar";
    }else{
        echo "gambar berhasil di upload<br>";
            }
    // end of code D
     
  }else{
    echo "terjadi kesalahan";  
  }
   
?>