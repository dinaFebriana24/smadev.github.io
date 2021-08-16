<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi/koneksi.php';

// menangkap data yang dikirim dari form
$id_pengguna = $_POST['id_pengguna'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from pengguna where id_pengguna='$id_pengguna' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$result =mysqli_fetch_assoc($data);

if($cek > 0){
	if($result['admin']==1){
		$_SESSION['id_pengguna'] = $id_pengguna;
		$_SESSION['status'] = "login";
		header("Location:admin.php"); // admin
	}
	else{
		header("Location:profil.php"); // bukan admin
	}


}else{
	header("Location:login.php?pesan=gagal");
}
?>
