<!DOCTYPE html>
<?php
include 'koneksi/koneksi.php';
if(isset($_GET['id_pengguna'])){
  $id_pengguna = $_GET['id_pengguna'];
  mysqli_query($koneksi,"select from shipping where id_pengguna='$id_pengguna'");
}

?>
<html>
<head>
	<title>profil</title>
	<link rel="stylesheet" type="text/css" href="profil.css">
</head>
<body>
<header>
	<div>
	<img src="images/log.png" class="logo">
	</div>
	<div class="link">
	<a href="index.php" class="atas"> Home </a>
	<a href="maps.php" class="atas"> Locations </a>
	<a href="news.php" class="atas"> News </a>
	<a href="simulasi.php" class="atas"> Simulation </a>
	</div>
	
</header>

<h2>Profil Pengguna</h2>
		<div class="page" >
			<div class="or"><img src="images/pr.PNG" class="pr"></div>
			<?php
        $data = mysqli_query($koneksi,"select * from pengguna");
        while($d = mysqli_fetch_array($data)){
        ?>
				<div class="n">
					<div class="o"><label>Nama Lengkap</label></div>
					<div class="p"><label><?=$d['nama'] ?></label></div>
				</div>
				<div class="n">
					<div class="o"><label>Alamat</label></div>
					<div class="p"><label><?=$d['alamat'] ?></label></div>
				</div>
				<div class="n">
					<div class="o"><label>Email</label></div>
					<div class="p"><label><?=$d['email'] ?></label></div>
				</div>
			<?php
        }
        ?>
		</div>

</body>
</html>