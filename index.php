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
      <b><a class="navbar-brand" style="color:black;" href="data_petani.php">Petani Kita</a>
    </div>

	 <ul class="nav navbar-nav navbar-right">

	
	
	<li class ="dropdown1">
		<a href="logout_petani.php" style="color:black;"><b><span class="glyphicon glyphicon-log-in"></span> Log Out
       </b> </a>
       
	</li>
  
	
	</ul>
	</div>
	</nav>


<h3>Data Anggota &raquo; Tambah Anggota</h3>
      <hr />

  <div class="kolom">

    <form class="form-horizontal" action="proses-input.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label class="col-sm-3 control-label">No Anggota </label>
          <div class="col-sm-2">
            <input type="text" name="no_anggota" class="form-control" placeholder="Masukkan No" required>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-3 control-label">Nama</label>
          <div class="col-sm-4">
            <input type="text" name="nama" class="form-control" placeholder="Nama" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Alamat</label>
          <div class="col-sm-2">
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Telepon</label>
          <div class="col-sm-4">
            <input type="text" name="telp" class="form-control" placeholder="Telepon" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Foto</label>
          <div class="col-sm-4">
            <input type="file" name="foto" />
          </div>
        </div>
        
       <div class="form-group">
          <label class="col-sm-3 control-label">&nbsp;</label>
          <div class="col-sm-6">
            <input type="submit"  class="btn btn-sm btn-primary" value="Tambah">
            <a href="index.php" class="btn btn-sm btn-danger">Batal</a>
          </div>
        </div>
      </form>
      
         
    </div>
  </body>
  </head>
  </html>
  <?php
}
?>