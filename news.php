<!DOCTYPE html>
<?php
include 'koneksi/koneksi.php';
if(isset($_GET['lihat'])){
  $id_berita = $_GET['lihat'];
  mysqli_query($koneksi,"select from shipping where id_berita='$id_berita'");
}
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title> </title>
    <link rel="stylesheet" href="news.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="nav-container">
      <header>
      <div>
        <img src="images/log.png" class="logo" width="110"  >
      </div>
      <div class="link">
        <a href="index.php" class="atas"> Home </a>
        <a href="maps.php" class="atas"> Locations </a>
        <a href="news.php" class="atas"> News </a>
        <a href="simulasi.php" class="atas"> Simulation </a>
      </div>
      <div class="sign">
        <button class="log" onclick="pindah('profil.php')"> <img src="images/pr.png" width="50px" height="40px"> </button>
      </div>
      </header>

      <!-- main content -->
      <div id="main_content">
        <h2>News</h2>
        <?php
        $data = mysqli_query($koneksi,"select * from berita");
        while($d = mysqli_fetch_array($data)){
          ?>

        <div class="content">
          <div class="item">

            <h4> <?= $d['judul']?> </h4>
            <p> <?= $d['isi']?> </p>
            <label>Komentar </label><input type="text" name="">
          </div>

        </div>
        <?php
        }
        ?>
      </div>
      
  
    </div>



  </body>
</html>
<script type="text/javascript">
    function pindah(url)
    {
window.location = url;
}
</script>