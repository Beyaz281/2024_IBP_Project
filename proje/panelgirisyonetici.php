<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<div class="container">

  <h2>Eğitmen giriş<i></i></h2>
  <form action="panelgirisyonetici.php"  method="post" >

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Şifre" name="psw">
  </div>

  <button type="submit" class="btn">Giriş Yap</button>
  <br>
  Eğer üye değilseniz <a href="egitmenuye.php">Üye olunuz</a>

</form>
<a href="sifreyenileegitmen.php">Şifremi unuttum</a>
</div>
</body>
</html>

<?php
session_start();
include("baglanti.php");

if(isset($_POST["email"], $_POST["psw"])) {
    $email = $_POST["email"];
    $psw = $_POST["psw"];

    // Kullanıcı bilgilerini kontrol et
    $sorgu = $baglan->prepare("SELECT * FROM egitmenuyepanel WHERE email = ?");
    $sorgu->bind_param('s', $email);
    $sorgu->execute();
    $sonuc = $sorgu->get_result();

    if ($sonuc->num_rows > 0) {
        // Kullanıcı bulundu
        $user = $sonuc->fetch_assoc();

        // Şifreyi SHA-256 ile hashle ve ilk 8 hanesini al
        $hashli_sifre = substr(hash('sha256', $psw), 0, 8);

        // Hashlenmiş şifrenin ilk 8 hanesini kontrol et
        if (hash_equals($hashli_sifre, $user['şifre'])) {
            // Şifre doğru
            $_SESSION["email"] = $email;
            header("Location: website.php");
            exit;
        } else {
            // Şifre yanlış
            echo "<script>alert('Kullanıcı Adı veya Şifre Yanlış')</script>";
        }
    } 
}
?>