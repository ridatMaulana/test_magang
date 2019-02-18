<?php
 $con = mysqli_connect('localhost','root','','db_biodata');
      $statement = sprintf('SELECT * FROM content WHERE id="%s"',$_GET['id']);

      $hasil = mysqli_query($con,$statement);
      $data = mysqli_fetch_array($hasil)
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<div class="container text-center">
    	<img src="image/<?php echo $data['gmbr'] ?>.jpg" alt="" width="800px" class="text-center">
    	<br>
    	<h1><?php echo $data['nm_pro'] ?></h1>
    	<br>
    	<br>
    	<h3>Bahasa yang digunakan: <?php  echo $data['lag'] ?></h3>
    	<br>
    	<br>
    	<h3><?php  echo $data['desk'] ?></h3>
	</div>
</body>
</html>