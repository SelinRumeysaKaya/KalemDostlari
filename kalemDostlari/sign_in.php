<?php
include_once "connection.php";
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8"> 
  <link rel="stylesheet" href="style.css">
  <title> KALEM DOSTLARI </title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">

  <style>
    .navbar {
      background-color:rgb(221, 199, 177);
    }
    .kalem-dostlari {
      height: 50vh;
      padding-left: 20px;
    }
   body {
    width: 1000px;
    height: 480px;
    margin: 0 auto;
    background-color:#fdf5e6;
    border-radius: 60px;

}
    input[type="text"],
    input[type="password"]{
    width: 60%;
    margin: 10px;
    height: 50px;
    background: #D4D4D4;
    border-radius: 20px;
    text-align: center;
    font-size: 25px;
    color: orange;
}

.sub {
    height: 40px;
    width: 35%;
    border: none;
    border-radius: 25px;
    box-sizing:border-box;
    font-size: 1px;
    color: gray;
    font-weight: bolder;
    cursor: pointer;
    margin: 15px;
}
    
 
  </style>
</head>

<body style="background-color: rgb(221, 199, 177)"  >
    
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#">
  
         <span class="navbar-brand"> <img src="https://i.ibb.co/jgyVDPx/logo.png" alt="logo" 
            border="0" width="200" height="200"></span> </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Ana Sayfa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Hakkımızda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Destekler</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">İletişim</a>
            </li>
          </ul>
        </div>
        
  </nav>
  <br><br>
  <header>
        <h2>KALEM DOSTLARI</h2>
        
</header>
<div class="container p-3 rounded-lg border border-dark">
  <!-- Container içeriği buraya gelecek -->
  <div class="tableOuter mx-auto" >
    <h1>Giriş Yap</h1>
    <form action="girişislem.php" method="POST">
        <div class="user">
            <input type="text" name="kullanici_adsoyad" id="kullanici_adsoyad" placeholder="Kullanıcı Adı">
</div>
<div class="pass">
    <input type="password" name="kullanici_password" id="kullanici_password" placeholder="Şifre">
</div>
<button type="button" class="class="btn btn-primary mx-2 rounded-pill " onclick=sign_in()
        style="background-color:rgb(211,189,166); border-color: black; color: black;">Giriş Yap</button>

<button type="submit" class="submit mx-auto"  id="giris" name="giris_yap">Giriş Yap</button>
</form>
<a href="sign_in.php">

</div>
</div>

  


  
<script>
  function sign_in() {
      window.location.href = "sign_in.php";
    }
</script>
  
  


  

  <!-- Bootstrap JS ve jQuery -->
  <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

   <br><br>
  <footer class="footer-32892 pb-0">
    <div class="site-section">
    <div class="container">
    <div class="row">
    <div class="col-md pr-md-5 mb-4 mb-md-0">
    <h3>HAKKIMIZDA</h3>
    <p class="mb-4">Websitemiz depremde etkilenen ve zor durumda kalan öğrencilerin ihtiyaçlarına yönelik
      çeşitli yardımlar içeren bir web sitesidir.</p>
    <ul class="list-unstyled quick-info mb-4">
    <li><a href="#" class="d-flex align-items-center"><span class="icon mr-3 icon-phone"></span> +90 555 555 55 55 </a></li>
    <li><a href="#" class="d-flex align-items-center"><span class="icon mr-3 icon-envelope"></span> <span class="__cf_email__" data-cfemail="d3babdb5bc93b4beb2babffdb0bcbe">[email&#160;protected]</span></a></li>
    </ul>
    <form action="#" class="subscribe">
    <input type="text" class="form-control" placeholder="Enter your e-mail">
    <input type="submit" class="btn btn-submit" value="Send">
    </form>
    </div>
    <div class="col-md mb-4 mb-md-0">
    <h3>HEDEFIMIZ</h3>
    <ul class="list-unstyled tweets">
    <li class="d-flex">
    <div class="mr-4"><span class="icon icon-twitter"></span></div>
    <div>Websitemizde depremden etkilenen öğrencilere akademik burs, elektronik eşya desteği,
      iş ve staj imkânı ve online mentörlük görüşmeleri sunan bir platformdur.
    </div>
    </li>
    <li class="d-flex">
    <div class="mr-4"></div>
    <div>Bu platformda, öğrencilerin ihtiyaçlarını karşılamak için firmaların ve yetkili
      kişilerin daha kolay bir şekilde ulaşmasını sağlamayı amaçlıyoruz.</div>
    </li>
    
    </ul>
    </div>
    <div class="col-md-3 mb-4 mb-md-0">
    <div class="row gallery">
    <div class="col-6">
    
    </div>
    </div>
    </div>
    <div class="col-12">
    <div class="py-5 footer-menu-wrap d-md-flex align-items-center">
    <ul class="list-unstyled footer-menu mr-auto">
    <li><a href="index.php">Anasayfa</a></li>
    <li><a href="#">Elektronik Eşya Desteği</a></li>
    <li><a href="#">Burs Desteği</a></li>
      <li><a href="#">Mentorluk Desteği</a></li>
    <li><a href="#">Nasıl çalışır ? </a></li>
    <li><a href="iletisim.php">İletişim</a></li>
    </ul>
    <div class="site-logo-wrap ml-auto">
    
    <a href="#" class="site-logo">
    Kalem Dostları 
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </footer>




</body>

</html>
  
  
 