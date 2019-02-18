<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="col-md-2"></div>
	<div class="col-md-7">
		<form action="" method="post">
				<div class="form-group">
					<label for="nama">Nama Project</label>
					<input type="text" name="nama_project" class="form-control" placeholder="Masukkan Nama Project">
				</div>
				<div class="form-group">
					<label for="tgl">Type Project</label>
					<input type="text" name="type" class="form-control" placeholder="Masukkan Type Project">
				</div>
				<div class="form-group">
					<label for="keterangan">Keterangan Project</label>
					<textarea name="keterangan" id="keterangan" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="image">Example file input</label>
					<input type="file" name="upload1" class="form-control-file" id="image">
				</div>
				<div class="form-group">
				  	<button type="submit" class="btn btn-primary" name="submit" value="submit">Kirim</button>
				  </div>
		</form>
	</div>
	<div class="col-md-3"></div>
</body>
</html>
<?php
$con = mysqli_connect('localhost','root','','db_biodata');

if(isset($_POST['submit'])){
	$lokasi = 'image/';
	$nama_file = $_FILES['upload1']['name'];
	$file = $_FILES['upload1']['tmp_name'];

	$upload = $nama_file;
	move_uploaded_file($file, $lokasi.$nama_file);
	
	$statement = sprintf("INSERT INTO content (nm_pro,Type,desk,gmbr)
		VALUES('%s','%s','%s','%s','%s')",
		$_POST['nama_project'],
		$_POST['type'],
		$_POST['keterangan'],
		$upload);

	$query = mysqli_query($con, $statement);

	if($query){
		echo "input berhasil";
	}else{
		echo "input gagal".mysqli_error($con);
	}
}
?>