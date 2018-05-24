<?php
session_start();
if (empty($_SESSION['user'])OR empty(
$_SESSION['pass'])){
	header("Location:login.php");
}else{
?>	
<?php
include "koneksi.php";
$no_anggota = $_POST['no_anggota'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$sumber = @$_FILES['foto']['tmp_name'];
        $target = 'foto/';
        $nama_gambar = @$_FILES['foto']['name'];
$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
mysqli_query($koneksi, "update petani set nama = '$nama', alamat = '$alamat', telp='$telp' , foto='$nama_gambar' where no_anggota = '$no_anggota'");

header("Location:data_petani.php");
?>
<?php
}
?> 