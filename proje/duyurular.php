<!DOCTYPE html>
    <html lang="tr">
        <head>
            <meta charset="UTF-8">

            <link rel="stylesheet" href="css/style.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
#duyuru{                                

background-image: url("../ann.jpg");
background-size: cover;
padding: 50px;
height: auto;
text-align: center;


}

#h3duyuru{
    color: black;
    }
    
    #duyuruopak{
    background: rgba(255, 255, 255, 0.2);
    padding: 30px 20px ;
    border-radius: 5px; 
    margin-bottom: 50px;
    
    height: 550px;
    
    
    }
    
    #formgrup{
    width: 300px ;
    height: 50px;
    
    
    
    
    
    }
    .form-control{
    width: 100%;
    padding: 10px;
    font-size: 15px;
    line-height: 1.5px;
    color: #495057;
    background-color: white;
    margin: 10px;
    border-radius: 5px;
    border: 1px solid #ced4da;
    
    
    
    
    
    }
    textarea{
    font-family: Arial, Helvetica, sans-serif;
    height :200px;  
    
    }
    
    input[type="submit"]{
    cursor: pointer;
    background-color: #445c6e;
    font-size: 18px;
    letter-spacing: 1px;
    padding: 10px 30px;
    color: white;
    border: 2px solid white;
    border-radius: 5px;
    margin-left: 10px;
    margin-top: 10px;
    
    
    
    
    
    }
    
    

            </style>
        </head>

        <body>
            
            
                <section id="duyuru">
                    <div class="container">
                        <h3 id="h3duyuru">Duyurular</h3>
                        <form action="duyurular.php" method="post">
                        <div id="duyuruopak">
                            <div id="formgrup">
                                <input type="text" name="ad" placeholder="Ad" required class="form-control" >
                                <input type="text" name="soyad" placeholder="Soyad" required class="form-control">
                                
                                <input type="text" name="konu" placeholder="Konu" required class="form-control">
                                
                                <textarea  name="duyuru" id="" cols="30" placeholder="Duyuru" rows="10" required class="form-control" ></textarea>
                                <br>
                                <input type="submit" value="Gönder">
                                <input type="submit" value="Güncelle">
                                <input type="submit" value="Sil">
                            </div>
                        </div>

                    </div>




                </section>




            </form>



        </body>
</html>
<?php
include("baglanti.php");

if(isset($_POST["ad"],$_POST["soyad"],$_POST["konu"],$_POST["duyuru"]))
{
  $ad=$_POST["ad"];
  $soyad=$_POST["soyad"];
  $konu=$_POST["konu"];
  $duyuru=$_POST["duyuru"];
  
  if(isset($_POST["ekle"])) {
  $ekle="INSERT INTO duyuru (ad,soyad,konu,duyuru)VALUES
  ('".$ad."','".$soyad."','".$konu."','".$duyuru."')";

  if($baglan-> query($ekle)===TRUE)
  {
    echo"<script>alert('Duyuru başariyla kaydedilmiştir')</script>";
    header("Location: website.php"); // Anasayfaya yönlendir
    exit;
  }

  else{
    echo"<script>alert('Duyuru kaydedilemedi')</script>";
  }
  }



}



?>
