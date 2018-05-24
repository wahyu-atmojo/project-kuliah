<?php
session_start();
if (empty($_SESSION['user'])OR empty(
$_SESSION['pass'])){
	header("Location:login.php");
}else{
?>	
<?php
 include"koneksi.php";


 $no_anggota = $_GET['no_anggota'];

 mysqli_query($koneksi,"delete from petani where no_anggota ='$no_anggota'");
 header("location:data_petani.php");


?>
<?php
}
?>