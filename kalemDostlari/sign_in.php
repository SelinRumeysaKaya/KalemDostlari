<?php
include_once "connection.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
    <title>Kalem Dostlari</title>
    <style>
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .form-group label {
            width: 100px;
            text-align: right;
            margin-right: 10px;
        }
        
        header, h2 {
        text-align: center;
        font-family: 'Times New Roman', Times, serif; 
        }

        .navbar {
            background-color:rgb(221, 199, 177);
        }
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }



    #giris {
    width: 360px;
    height: min-content;
    padding: 20px;
    border-radius: 12px;
    background: #ffffff;
    }

    .login h1 {
    font-size: 36px;
    margin-bottom: 25px;
    }

    .login form {
    font-size: 20px;
    }

    .login form .form-group {
    margin-bottom: 12px;
    }

    .login form input[type="submit"] {
    font-size: 20px;
    margin-top: 15px;
    }
        
    </style>
</head>

<body style="background-color: rgb(221, 199, 177)">

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="https://i.ibb.co/jgyVDPx/logo.png" alt="logo" width="150"
          height="150"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Anasayfa</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Destekler
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Elektronik Eşya Desteği</a></li>
              <li><a class="dropdown-item" href="#">Akademik Burs Desteği</a></li>
              <li><a class="dropdown-item" href="#">Mentorluk Desteği</a></li>
              <li><a class="dropdown-item" href="#">İş/Staj Desteği</a></li>
              <li><a class="dropdown-item" href="#">Eğitim Desteği</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hakkimizde.php">Hakkımızda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="nasilCalisir.php">Nasıl Çalışır?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="basvurularim.php">Başvurularım</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="imkanlarimiz.php">Imkanlarımız</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="iletisim.php">İletişim</a>
          </li>
        </ul>
        <form class="d-flex">
          <div class="col-6 form-group">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Arama">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="fa fa-search"></i>
                  <button class="btn btn-outline-success" type="submit"><svg viewBox="0 0 512 512" width="30"
                      title="search">
                      <path
                        d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" />
                    </svg>
                  </button>



                </span>
              </div>
            </div>
          </div>





          <button class="btn btn-outline-success  rounded" style="margin:10px;border-color: black; color: black;"><a
              class="nav-link" href="#" onclick="girisYap()"> Giris yap
              <svg viewBox="0 0 512 512" width="30" title="sign-in-alt">
                <path
                  d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z" />
              </svg>
            </a>
          </button>


        </form>
      </div>
    </div>
  </nav>



   
</div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-5 justufy-content-center text-center">
         <br><br><br>
        <div><h1>KALEM DOSTLARI</h1></div>
          <br><br><br>
        <div class="row">
       <form action="sign_in_do.php" method="POST" class="col text-center" id="giris">
            <div>
                 <h1 id="">Giriş Yap</h1>
           </div><br><br><br>
                <div class="form-group">
        
                    <label for="kullanici_adsoyad" class="form-label">Kullanıcı Adı</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Kullanıcı Adı " required>
                </div>

            <div class="form-group">
            <label for="kullanici_password" class="form-label">Şifre</label>
                 <input type="password" name="passwords" id="passwords" class="form-control" placeholder="Şifre" required>
                 </div>


      <div class="form-group">
            <label for="rol" class="form-label">Giriş Rol:</label>
            <select  class="form-control" id="rol" name="rol">
                <option value="ogrenci">Öğrenci</option>
                <option value="firma">Firma</option>
                <option value="yonetici">Yönetici</option>
             </select>
   
        </div>

  <div class="form-group form-check text-center">
    <input class="form-check-input" type="checkbox" id="check">
    <label class="form-check-label" for="check">Beni hatırla</label>
  </div>
  
  <div>
    <button type="submit" class="btn btn-primary" onclick="sign_in()" style="background-color:rgb(211,189,166); border-color: black; color: black;">Giriş Yap</button><br>
   
 
</form>
     <p>Henüz hesabınız yok mu? Hesap oluştur</p>
    <button type="button" class="btn btn-primary" onclick="kayit()" style="background-color:rgb(211,189,166); border-color: black; color: black;">Kayıt ol</button>
     </div>      
    </div>
</div>
</div>
</div>
</div>
</div>

  
   
        
</header>

  
  <br><br>



  






<script>
  function sign_in() {
    var role = document.getElementById("rol").value;
    if (role === "firma") {
      window.location.href = "staj_teklif_ver.php";
    } else {
      document.getElementById("giris").submit();
    }
  }

  function sign_up() {
    window.location.href = "sign_up.php";
  }

  function kayit() {
    window.location.href = "Kayit.php";
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
    <form action="sign_in_do.php" class="subscribe">
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
    <li><a href="index.html">Anasayfa</a></li>
    <li><a href="#">Elektronik Eşya Desteği</a></li>
    <li><a href="#">Burs Desteği</a></li>
      <li><a href="#">Mentorluk Desteği</a></li>
    <li><a href="#">Nasıl çalışır ? </a></li>
    <li><a href="iletisim.php">İletişim</a></li>
    </ul>
    <div class="site-logo-wrap ml-auto">
    
    <a href="index.php" class="site-logo">
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
  
  
 