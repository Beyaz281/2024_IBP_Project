<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Eğitimlerim</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        
body {
    font-family: Arial, sans-serif;
    background-color: #808080;
    margin: 0;
    padding: 0;
    overflow-y: scroll;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
    text-align: center;
}
.container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            display: block;
            margin: 0 auto; 
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

.course {
    margin-bottom: 20px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.course img {
    max-width: 40%;
    height: auto;
    border-radius: 5px;
    
}

h2 {
    color: #333;
}

p {
    color: #666;
    line-height: 1.6;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Eğitimlerim</h1>
        <form action ="egitimlerim.php" method ="post">
        <div class="course">
            <img src="photo/kod.jpg" alt="Course 1">
            <h2>Web Geliştirme Temelleri</h2>
            <p>HTML, CSS ve JavaScript ile web sayfaları oluşturmayı öğrenin.</p>
        </div>
        <div class="course">
            <img src="photo/kod.jpg" alt="Course 2">
            <h2>Python Programlama</h2>
            <p>Python dilini kullanarak temel programlama becerilerini geliştirin.</p>
        </div>
        <div class="course">
            <img src="photo/kod.jpg" alt="Course 1">
            <h2>Web Geliştirme Temelleri</h2>
            <p>Modern Web Tasarımı.</p>
        </div>
        <div class="course">
            <img src="photo/kod.jpg" alt="Course 1">
            <h2>Veri Bilimi Giriş</h2>
            <p>Python ve R kullanarak veri analizi.</p>
        </div>
        <div class="course">
            <img src="photo/kod.jpg" alt="Course 1">
            <h2>Mobil Uygulama Geliştirme</h2>
            <p>Android ve iOS için uygulama geliştirme temelleri.</p>
        </div>
        <div class="course">
            <img src="photo/kod.jpg" alt="Course 1">
            <h2>Bulut Bilişim Temelleri</h2>
            <p>AWS, Azure ve Google Cloud gibi popüler bulut platformlarında hizmetler ve mimariler.</p>
        </div>
        <!-- Diğer eğitimler burada listelenebilir -->
    </div>
</body>
</html>
