<?php 
if (isset($_POST['login'])) {
 	$con = mysqli_connect('localhost','root','','db_biodata');
 	$stmt = sprintf("SELECT * FROM user WHERE username='%s' AND password='%s'",
 		$_POST['username'],$_POST['password']);

 	$query = mysqli_query($con, $stmt);
 	$row = mysqli_fetch_array($query);
 	$count = mysqli_num_rows($query);
 	if ($count>0) {
 		$_SESSION['username'] = $row['username'];
  }
  else{
        ?> <div class="alert alert-danger" role="danger"><center>Username atau Password salah</center></div> <?php
  }
 } 
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
  header('location:index.php');
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Login</title>
 </head>
 <body>
 	<div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
      <form class="form-signin" role="form" method="post" action="">
        <h2 class="form-signin-heading">Please Sign In</h2>
        <br>
        <input type="text" class="form-control" placeholder="Username" required autofocus name="username">
        <br>
        <input type="password" class="form-control" placeholder="Password" required name="password">
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
      </form>
 </body>
 </html>