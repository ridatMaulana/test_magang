<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <div class="row">
    <<div class="container text-center mt-5">
      <img src="image/datte1.png" alt="" width="23%" class="img-circle">
    <h1>My Profil</h1>
    <p><h3>Nama lengkap Ridat Maulana. Lahir di Cianjur pada tanggal 02 Juli tahun 2002. Tinggal di Kompleks SMPN2 Kp.Babakan
    Empang RW.02/RT.05, Sawahgede, Cianjur. Asal sekolah SMKN1 Cianjur. Kelas 11 Rekayasa Perangkat Lunak(RPL) 1. </h3></p>
  </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">
      <h1>Skill</h1>
      <p><h3>Bahasa pemrograman yang dikuasai antara lain C#,<br> C++, CSS, HTML, JAVA,
    JAVASCRIPT, PASCAL, PHP, PYTHON.</h3></p>
    </div>
    <br>
    <div class="col-md-3"></div>
    <div class="col-md-3"><img src="image/desktop.png" alt="" width="70%"></div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3"><img src="image/rocket.png" alt="" width="70%"></div>
    <div class="col-md-2"></div>
    <div class="col-md-5 text-right">
      <h1>Motivasi dan hal yang ingin dipelajari</h1>
      <p><h3>Ingin lebih tahu dan mendalami
    tentang web(apllikasi lain juga jika boleh).</h3></p>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="row">
    <div class="container">
      <div class="col text-center">
        <h1>Projects</h1>
      </div>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="item active tex-center">
      <img class="img-responsive center-block" src="image/microprocessor.png" width="480px">
    </div>
    <?php 
      $con = mysqli_connect('localhost','root','','db_biodata');
      $statement = sprintf('SELECT * FROM content');

      $hasil = mysqli_query($con,$statement);

      while ($data = mysqli_fetch_array($hasil)) {
             ?>
    <div class="item">
    <a href="?page=detail&id=<?php echo $data['id'] ?>"><img class="img-responsive center-block" src="image/<?php echo $data['Type']?>.png"></a>
  </div>
        <?php } ?>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</body>
</html>