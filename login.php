
<?php

 
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Petani Kita</title>
  <link rel="stylesheet" type="text/css" href="login.css"
  
</head>
<body>
  <div id="wrapper">

  <form name="login-form" class="login-form" action="login_proses.php" method="post">
  
    <div class="header">
    
    <h1>Selamat Datang </h1>
    <span>Silahkan masukan username dan password :)</span>
    </div>
    <br>
    <div class="content">
    <input name="user" type="text" class="input username" placeholder="Username" />
    <div class="user-icon"></div>
    <input name="pass" type="password" class="input password" placeholder="Password" />
    <div class="pass-icon"></div>   
    </div>

    <div class="footer">
    <input type="submit" name="submit" value="Login" class="button" />

    
    </div>
  
  </form>
  

</div>
<div class="gradient"></div>

</body>
</html>
