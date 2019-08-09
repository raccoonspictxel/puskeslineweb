<?php 
include 'database.php';
$db = new database();
?>
 
<h1>CRUD OOP PHP</h1>
<h2>WWW.MALASNGODING.COM</h2>
<h3>Edit Data User</h3>

<form action="../Controller/proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>username</td>
		<td><input type="text" name="username" value="<?php echo $d['username'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="password" value="<?php echo $d['password'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>