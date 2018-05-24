<?php
include "koneksi.php";

$user=$_POST['user'];
$pass=md5($_POST['pass']);
$login=mysqli_query($koneksi,"SELECT * FROM user WHERE nama='$user'
AND pass='$pass'");
$jumlah=mysqli_num_rows($login);
$x=mysqli_fetch_array($login);

if($jumlah == 1){
	session_start();

	$_SESSION[user]=$x[nama];
	$_SESSION[pass]=$x[pass];
	
	header("Location:data_petani.php");
	
	
}
else{
	header("Location:login.php");
}
?>
