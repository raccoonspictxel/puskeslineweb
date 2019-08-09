<?php
class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "web";

	function __construct(){
		mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
	}
function tampil_data(){
		$data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db),"select * from user");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function input($nama,$username,$password){
		mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db),"insert into user values('','$nama','$username','$password')");
}
function hapus($id){
	mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db),"delete from user where id='$id'");
}
function edit($id){
	$data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db),"select * from user where id='$id'");
	while($d = mysqli_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;
}
function update($id,$nama,$username,$password){
	mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db),"update user set nama= '$nama', username= '$username', password= '$password' where id= '$id'");
}
}
?>