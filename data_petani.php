<?php
session_start();
if (empty($_SESSION['user'])OR empty(
$_SESSION['pass'])){
  header("Location:login.php");
}else{
?>  
<!DOCTYPE html>
<html>
<head>
	<title>Data Petani</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</title>
<body>

<nav class="navbar navbar-inverse" >
  <div class="container-fluid" style="background-color: orange">
    <div class="navbar-header" >
      <b><a class="navbar-brand" style="color:black;" href="index.php">Petani Kita</a></b>
    </div>

	 <ul class="nav navbar-nav navbar-right">

	
	
	<li class ="dropdown1">
		<a href="logout_petani.php" style="color:black;"><b><span class="glyphicon glyphicon-log-in"></span> Log Out
       </b> </a>
  

	</li>
	
	</ul>
	</div>
	</nav>
	<div class="container">
             <a href="index.php" class="btn btn-info" role="button">Tambah Anggota</a> 
  <table class="table table-condensed">
  <br>
    <thead>
    <br>
    <tr>
    <th><h3>Daftar Anggota</th></h3>
    </tr>

      <tr>

        <th>No Anggota</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
      <?php

include "koneksi.php";


$query = "select *from petani";
$hasil= mysqli_query($koneksi,$query);


while($data=mysqli_fetch_array($hasil))
{
	?>
<tr>
	<td><?php echo "$data[no_anggota] " ;?></td>
	<td><img src=foto/<?php echo "$data[foto]"; ?> width = "80px" /></td>
	<td><?php echo " $data[nama] ";?></td>
	<td><?php echo " $data[alamat] ";?></td>
	<td><?php echo " $data[telp] ";?></td>
	<td><a href='edit_petani.php?no_anggota=<?php echo $data['no_anggota']; ?>'>Edit</a>

		<a href='hapus_petani.php?no_anggota=<?php echo $data['no_anggota']; ?>'>Hapus</a></td>
	</tr>
	

	<?php
	}


?>
    </tbody>
  </table>
</div>

 
  </table>
  </body>
  <?php
}
?>