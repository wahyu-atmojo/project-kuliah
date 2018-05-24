<?php
session_start();
if (empty($_SESSION['user'])OR empty(
$_SESSION['pass'])){
	header("Location:login.php");
}else{
?>	
<?php
include"koneksi.php";

$no_anggota = $_POST['no_anggota'];
$nama = $_POST['nama'];
$alm = $_POST['alamat'];
$telp = $_POST['telp'];
$sumber = @$_FILES['foto']['tmp_name'];
        $target = 'foto/';
        $nama_gambar = @$_FILES['foto']['name'];
//echo $angka;

mysqli_query($koneksi, "insert into petani (no_anggota,nama,alamat,telp,foto) values ('$no_anggota','$nama','$alm','$telp','$nama_gambar')");
header("Location:data_petani.php") ;

?>
<?php
}
?>