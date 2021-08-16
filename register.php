<!DOCTYPE html>
<?php
include 'koneksi/koneksi.php';
if(isset($_POST['daftar'])){
	$nama = $_POST['nama'];
	$id_pengguna = $_POST['id_pengguna'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$konfirpass = $_POST['konfirpass'];

	// input data ke db
	if($nama==null || $id_pengguna==null || $alamat==null || $email==null || $password==null || $konfirpass==null){
		echo "<script type='text/javascript'>alert('Data tidak boleh ada yang kosong');</script>";
	}
	else{
		mysqli_query($koneksi,"insert into pengguna values('$nama','$id_pengguna','$alamat','$email','$password', '$konfirpass')");
		header("Location:login.php");
	}
}
?>
<html>
<head>
	
	<meta charset="UTF-8">
	<title>Registrasi | SDV-FLOOD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="register.css">

</head>

<body>

	<div class="regis">
    <div class="title">Sign Up</div>
	<form action="" method="POST">

    <div class="form">
       <!-- <form id="regis-form" method="POST" action="index.html" onsubmit="return validateForm()">
		   !-->
	       <div class="inputfield">
	          <label>Nama Lengkap</label>
	          <input type="text" class="input form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama Lengkap" name="nama">
	       </div> 

	       <div class="inputfield">
	          <label>ID Pengguna</label>
	          <input type="text" class="input form-control" id="id_pengguna" aria-describedby="emailHelp" placeholder="ID Pengguna" name="id_pengguna">
	       </div>  
	       
	       <div class="inputfield">
	          <label>Alamat</label>
	          <textarea class="textarea" id="alamat-input" aria-describedby="emailHelp" placeholder="Alamat" name="alamat"></textarea>
	       </div>   

	       <div class="inputfield">
	          <label>Email</label>
	          <input type="text" class="input form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="email">
	       </div>  
	       
	       <div class="inputfield">
	          <label>Password</label>
	          <input type="password" class="input form-control" id="password" aria-describedby="emailHelp" placeholder="Password" name="password">
	       </div>  

	       <div class="inputfield">
	          <label>Konfirmasi Password</label>
	          <input type="password" class="input form-control" id="konfirpass" aria-describedby="emailHelp" placeholder="Konfirmasi Password" name="konfirpass">
	       </div> 

	       <div class="inputfield terms">
	          <label class="check">
	            <input type="checkbox">
	            <span class="checkmark"></span>
	          </label>
	          <p>I Agree with privacy and policy.</p>
	       </div> 
		<div class="inputfield">
	      	<button type="daftar" class="btn btn-primary button" value="daftar" name="daftar"> Daftar </button>
	      </div>


	</div>

</form>

</div>	

</body>

<!--
<script type="text/javascript">
	function validasi() {
		var namalengkap = document.getElementById("namalengkap-input").value;
		var idpengguna = document.getElementById("iduser-input").value;
		var alamat = document.getElementById("alamat-input").value;
		var email = document.getElementById("email-input").value;
		var password = document.getElementById("password-input").value;
		var konfirmasipassword = document.getElementById("konfirmpassword-input").value;

		if (namalengkap!= "" && idpengguna!="" && alamat!="" && email!="" password!= "" && konfirmasipassword!= "" &&) 
		{
			window.location.href="login.html";
			return true;
		}
	}

</script>
!-->
</html>