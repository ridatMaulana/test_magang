<?php
session_start();
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
 	$link_login = '<a href="?logout">Logout</a>';
 	$user = $_SESSION['username'];
 } 
 else{
 	$link_login = '<a href="?page=login">Login</a>';
 	$user = 'Guest';
 }
 if (isset($_GET['logout'])) {
 	session_destroy();
 	header('location:index.php');
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Portofolio</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">My Portfolio</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="?page=home">Home</a></li>
        <?php if (isset($_SESSION['username'])) {
        	?><li class="dropdown">
        		<a href="" class="dropdown-toggle" data-toggle="dropdown">Admin<span class="caret"></span></a>
        		<ul class="dropdown-menu" role="menu">
        			<li><a href="">Project</a></li>
        			<li><a href="">Data Contact</a></li>
        		</ul></li><?php
        } ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="?contact">Contact Us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a><?php echo $user; ?></a></li>
            <li><?php echo $link_login; ?></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<div class="row">
	<?php if (isset($_GET['page'])){
		include ('content/'.$_GET['page'].'.php');
	}else{include ('content/home.php');
} ?>
</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>