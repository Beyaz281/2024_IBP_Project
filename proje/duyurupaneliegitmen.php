<!DOCTYPE html>
<html>
<head>
<style>
#duyurular {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#duyurular td, #duyurular th {
  border: 2px solid#f2f2f2;
  padding: 4px;
}

#duyurular tr:nth-child(even){background-color: #f2f2f2;}

#duyurular tr:hover {background-color: #977373;}

#duyurular th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #2F4F4F;
  color: white;
}
</style>
</head>
<body>



<table id="duyurular">
  <tr>
    <th>id </th>
    <th>Ad </th>
    <th>Soyad</th>
    <th>Konu</th>
    <th>Duyuru</th>
   
    
    
  </tr>


<form id="duyurular">
<h1>Duyurular</h1>
<form action="duyurupaneliegitmen.php" method="post">
  <div>
    <label for="id">id: </label>
    <input type="number" id="id" name="id" min="0" step="1" >
  </div>
  <div class="button2">
  
    <div>
    <input type="submit" value="Bul">
    </div>
  </div>  
  <div>
    <label for="konu">Konu: </label>
    <input type="text" id="konu" name="konu">
  </div>
  <div>
    <label for="duyuru">Duyuru: </label>
    <textarea id="duyuru" name="duyuru"></textarea>
  </div>
</form>

  <div class="button1">
  <form action="duyurupaneliegitmen.php" method="post">
    <div>
    <input type="submit" value="Güncelle">
    </div>
  </div>  

  <?php
include("baglanti.php");

$sec="Select * From duyuru";
$sonuc=$baglan->query($sec);//sorgu yapılıyor ve sonuca atılıyor

if($sonuc->num_rows>0)//veri varsa çekicez ve göstericez,satır sayımız 0 dan büyükse

  {
    while($cek=$sonuc->fetch_assoc())// tüm verileri alıyoruz cek dizisine atıp görüntüleyebiliyoruz
    {
      echo "
      <tr>
            <td>".$cek['id']." </td>
            <td>".$cek['ad']." </td>
            <td>".$cek['soyad']."</td>
            <td>".$cek['konu']."</td>
            <td>".$cek['duyuru']."</td>
   
    
    
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

