<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 2px solid#f2f2f2;
  padding: 4px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #977373;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #59292d;
  color: white;
}
</style>
</head>
<body>

<h1>Üye Panel</h1>

<table id="customers">
  <tr>
    <th>Ad </th>
    <th>Soyad</th>
    <th>Email</th>
    <th>Şifre</th>
   
    
    
  </tr>

  <?php


  session_start();

  
  
    include("baglanti.php");

$sec="Select * From üyepanel";
$sonuc=$baglan->query($sec);//sorgu yapılıyor ve sonuca atılıyor

if($sonuc->num_rows>0)//veri varsa çekicez ve göstericez,satır sayımız 0 dan büyükse

  {
    while($cek=$sonuc->fetch_assoc())// tüm verileri alıyoruz cek dizisine atıp görüntüleyebiliyoruz
    {
      echo "
      <tr>
            <td>".$cek['ad']." </td>
            <td>".$cek['soyad']."</td>
            <td>".$cek['email']."</td>
            <td>".$cek['şifre']."</td>
   
    
    
      </tr>
        
             
      ";
    }
  }
  else
  {
    echo"Veri tabanında veri bulunmamaktadır";
  }


?>

  
</table>

</body>
</html>

