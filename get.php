<?php
//koneksi ke database
$db=mysqli_connect("localhost", "root", "","web");
mysqli_select_db("web");
 
//ambil id dari $_GET id
$id = addslashes($_GET['id']);
 
//query ke database
$query = mysqli_query($db,"SELECT name FROM images WHERE id='$id'");
//$row = mysqli_fetch_assoc($query);
//$image_db = $row['image'];
 
header('Location: scanresep.php');
 
echo $image_db;
?>