<!doctype html>
<?php
include 'koneksi/koneksi.php';
if(isset($GET['sungai'])){
  $id_sungai = $_GET['sungai'];
  mysqli_query($koneksi,"select from lokasi where id_sungai='$id_sungai'");
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="maps.css">

    <title>Locations — Peta Sungai</title>
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

        <h2> Peta Sungai </h2>
        <div class="page">
        <table border="1">
        <table style="margin-left:auto;margin-right:auto" border="1">
        <thead> 
          <tr style="background-color: #29837A ;">
            <th>No</th>
            <th>Lokasi</th>
            <th>Sungai/Kali</th>
            <th>Tinggi Air (cm)</th>
            <th>Tanggal</th>
            <th>Status Siaga</th>
          </tr>
        </thead>

        <tbody>
        <?php
        $data = mysqli_query($koneksi,"select * from lokasisungai");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
          <td> <?=$d['id_sungai'] ?> </td>
          <td> <?=$d['lokasi'] ?> </td>
          <td> <?=$d['sungai/kali'] ?> </td>
          <td> <?=$d['tinggi air'] ?> </td>
          <td> <?=$d['tanggal'] ?> </td>
          <td> <?=$d['status'] ?> </td>
        </tr>

        <?php
        }
        ?>
       </tbody> 

    </table>

      


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <div class="pes">
   <button onclick="change()" class="san" style="border: 3px solid white" style="border-radius: 5px"> <img src="images/i.png" width="40px" height="40px"> </button>
  </div>
  </div>
  </body>
</html>
<script type="text/javascript">
    function pindah(url)
    {
    window.location = url;
    }
    function change()
    {
    var myWindow = window.open("pesan.php", "_blank", "width=300,height=250");
    }
</script>