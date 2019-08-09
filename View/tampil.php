<?php 
include '../Model/database.php';
$db = new database();
?>
<h1></h1>
<h2></h2>
<h3>Data User</h3>
 
<a href="../Model/input.php">Input Data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>username</th>
		<th>password</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['username']; ?></td>
		<td><?php echo $x['password']; ?></td>
		<td>
			<a href="../Model/edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="../Controller/proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>