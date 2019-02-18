<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="col-md-3"></div>
	<div class="col-md-7">
	<form action="" method="post">
		<div class="form-group">
			 <label for="nama">Nama</label>
				<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email"  name="email"  class="form-control" placeholder="Masukkan Email" required>
				</div>
				<div class="form-group">
				    <label for="telp">No telp</label>
				    <input type="text"  name="telp" class="form-control" placeholder="Masukkan Nomber">
				  </div>
				  <div class="form-group">
				    <label for="telp">Pesan</label>
				    <textarea name="pesan" id="pesan" class="form-control" required></textarea>
				  </div>
				  <div class="form-group">
				  	<button type="submit" name="submit" value="submit" class="btn btn-primary" required>Kirim Pesan</button>
				  </div>
	</form>
</div>
<div class="col-md-2"></div>
	<?php
				$con = mysqli_connect('localhost','root','','db_biodata');
				if(isset($_POST['submit'])){
					$statement = sprintf("INSERT INTO pesan (nama,email,notelp,pesan)
						VALUES('%s','%s','%s','%s')",
						$_POST['nama'],
						$_POST['email'],
						$_POST['telp'],
						$_POST['pesan']);

					$query = mysqli_query($con, $statement);
					
					if($query){
						echo"<script>alert('Pesan Anda Telah Terkirim. Terima Kasih')</script>";
					}else{
						echo "input gagal ".mysqli_error($con);
					}
				}
				?>
</body>
</html>