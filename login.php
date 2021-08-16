<!DOCTYPE html>
<html>

<head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>Login Page | SDV-FLOOD</title>
	  <link rel="stylesheet" type="text/css" href="login.css">
	  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
 </head>

<body>

  <div id="card">
    <div id="card-content">
      <?php
      if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
          echo "Login gagal! username atau password salah!";
        }else if($_GET['pesan'] == "logout"){
          echo "Anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
          echo "Anda harus login untuk mengakses halaman admin";
        }
      }
      ?>
      <form method="post" action="cek_login.php">
      <div id="card-title">
        <h2>USER LOGIN</h2>
      </div>

      <form method="post" class="form" name="formlogin" action="profil.php" onsubmit="return validateForm()">
        <label for="user-name" style="padding-top:13px">
            &nbsp;Username</label>

        <input type="" id="id_pengguna" class="form-content"  name="id_pengguna" aria-describedby="emailHelp" autocomplete="on" required />

        <div class="form-border"></div>

        <label for="user-password" style="padding-top:22px">&nbsp;Password</label>

        <input id="password" class="form-content" type="password" name="password" aria-describedby="emailHelp"autocomplete="on" required />

        <div class="form-border"></div>

        <button type="login" id="submit-btn" name="login" > Login </button>
<br>
        <a href="register.php" id="signup">Don't have account yet?</a>
</div>
      </form>

    </div>

  </div>

</div>

</body>

<!--
<script>
        function validateForm() {
        
                        if (document.forms["formlogin"]["user-name"].value == "") 
                        {
                            alert("Username Tidak Boleh Kosong");
                            document.forms["formlogin"]["user-name"].focus();
                            return false;
                        }
                        if (document.forms["formlogin"]["user-password"].value == "") 
                        {
                            alert("Password Tidak Boleh Kosong");
                            document.forms["formlogin"]["user-password"].focus();
                            return false;
                        }

                        if (document.forms["formlogin"]["user-name"].value == "Sheillaf123" && document.forms["formlogin"]["user-password"].value == "1234567")   
                        {

                    window.location.href="register.html";

                  } else {
                        alert ("Username atau Password salah")
                      }
                }
  </script>
  !-->
</html>
