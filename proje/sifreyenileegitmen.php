<!DOCTYPE html>
<html>
<head>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    
    


    
}

form {
    background-color: #fff;
    padding: 60px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    font-weight: bold;
    color: #333;
}

input[type=email],
input[type=password] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

input[type=submit] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #5cb85c;
    color: white;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #4cae4c;
}

    </style>
</head>

<body>
    <form action="sifreyenileegitmen.php" method="post">
        <label for="email">E-posta:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="new_psw">Yeni Şifre:</label><br>
        <input type="password" id="new_psw" name="new_psw" required><br>
        <input type="submit" value="Şifreyi Yenile">
    </form>
</body>
</html>


<?php
    include("baglanti.php");

    if(isset($_POST["email"], $_POST["new_psw"])) {
        $email = $_POST["email"];
        $new_psw = $_POST["new_psw"];

        // Şifreyi SHA-256 ile hashle
        $hashli_sifre = hash('sha256', $new_psw);

        $guncelle = "UPDATE egitmenuyepanel SET şifre='".$hashli_sifre."' WHERE email='".$email."'";

        if($baglan->query($guncelle)===TRUE) {
            echo "<script>alert('Şifreniz başarıyla güncellendi.')</script>";
            header("Location: website.php"); // Anasayfaya yönlendir
            exit;
        } else {
            echo "<script>alert('Bir hata oluştu. Lütfen tekrar deneyin.')</script>";
        }
    }
?>