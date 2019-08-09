<?php 
include '../Model/database.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['nama'],$_POST['username'],$_POST['password']);
 	header("location:../View/tampil.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:../View/tampil.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['nama'],$_POST['username'],$_POST['password']);
 	header("location:../View/tampil.php");
 }
?>