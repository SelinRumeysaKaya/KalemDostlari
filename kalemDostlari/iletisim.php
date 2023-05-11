<!DOCTYPE html>
<html lang="tr">
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
    </style>
</head>
<body style="background-color:rgb(221, 199, 177)";>

 <div>
        <nav class="navbar navbar-expand-lg " >
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="https://i.ibb.co/jgyVDPx/logo.png" alt="logo"  width="200" height="200"> </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Anasayfa</a>
                  </li>
                 
                 
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Elektronik Eşya Destiği
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Telefon</a></li>
                      <li><a class="dropdown-item" href="#">Laptop</a></li>
                      <li><a class="dropdown-item" href="#">Tablet</a></li>
                    </ul>
                   
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Burs Desteği
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item " href="#">Burs başvuruları görüntüle</a></li>
                        <li><a class="dropdown-item" href="#">Burs sonuçları görüntüle</a></li>
                        
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Mentorluk Desteği
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Danışmanla görüş</a></li>
                        <li><a class="dropdown-item" href="#">birşeker </a></li>
                        <li><a class="dropdown-item" href="#">birşeker</a></li>
                      </ul>
                  </li>
                  
                  <nav class="navbar ">
                    <div class="container-fluid">
                      <form class="d-flex" role="search">&nbsp&nbsp
                        <button class="btn" style=" border-color: black; color: black;"><a class="nav-link" href="#" onclick="iletisim()">İletişim</a></button> &nbsp&nbsp
                        <input class="form-control me-2" type="search" placeholder="Arama" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"> Arama  </button>&nbsp&nbsp
                        <button class="btn "style= "border-color: black; color: black; ">Hesabım</button>
                      </form>
                    </div>
                  </nav>
                </ul>
              </div>
            </div>
          </nav>
    </div>

<header><br><br>
    <h2 >Kalem Dostlari</h2><br><br>
</header>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <h2>İletişim</h2>
        <form class="form-container">
            <div class="form-group">
                <label for="ad">Ad:</label>
                <input type="text" class="form-control" id="ad">
            </div>
            <div class="form-group">
                <label for="soyad">Soyad:</label>
                <input type="text" class="form-control" id="soyad">
            </div>
            <div class="form-group">
                <label for="mail">E-Posta:</label>
                <input type="email" class="form-control" id="mail">
            </div>
            <div class="form-group">
                <label for="yorum">Mesaj:</label>
                <textarea class="form-control" rows="5" id="yorum"></textarea>
            </div>
            <button type="button" class="btn btn-success">Gönder</button>
        </form>
    </div>
</div>

<script>
  
  function iletisim() {
    window.location.href = "iletisim.php";
  }

</script>



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
              <li><a href="#" class="d-flex align-items-center"><span class="icon mr-3 icon-phone"></span> +90 555 555
                  55 55 </a></li>
              <li><a href="#" class="d-flex align-items-center"><span class="icon mr-3 icon-envelope"></span> <span
                    class="__cf_email__" data-cfemail="d3babdb5bc93b4beb2babffdb0bcbe">[email&#160;protected]</span></a>
              </li>
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

