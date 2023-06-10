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
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">

  <style>
    .navbar {
      background-color: rgb(221, 199, 177);
    }

    .kalem-dostlari {
      height: 50vh;
      padding-left: 20px;
        }

  #resim1, #resim2 {
			display: none;
			margin: 50px auto;
			max-width: 100%;
		}

  </style>
</head>

<body style="background-color: rgb(221, 199, 177)">
 <div class="container-md">
   
     <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="https://i.ibb.co/jgyVDPx/logo.png" alt="logo" width="200"
            height="200"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link active" aria-current="page" href="index.html">Anasayfa</a></li>

            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="" role="button"
                data-bs-toggle="dropdown" aria-expanded="false"> Destekler </a>
              <ul class="dropdown-menu" id="dash">
                <li> <a class="dropdown-item" href="elektronik.php"> Elektronik Eşya Desteği </a> </li>

                <li><a class="dropdown-item" href="burs.php">Burs Desteği </a></li>
                <li><a class="dropdown-item" href="mentorluk.php">Mentorluk Desteği </a></li>
              </ul>

            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="hakkimizde.php"> Hakkımızda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="nasılCalısır.php">Nasıl çalışır ?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Basvurularım.php">başvurularım deneme ?</a>
            </li>



            <nav class="navbar ">
              <div class="container-fluid">
                <form class="d-flex" role="search">&nbsp&nbsp
                  <button class="btn rounded" style=" border-color: black; color: black;"><a class="nav-link" href="#"
                      onclick="iletisim()">İletişim</a> </button> &nbsp&nbsp

                  <div class="col-4 form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Arama">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-search"></i>
                          <svg viewBox="0 0 512 512" width="30" title="search">
                            <path
                              d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" />
                          </svg>
                        </span>
                      </div>
                    </div>
                  </div>
                  <button class="col-2 btn rounded " style="border-color: black; color: black; "
                    onclick="sign_in()">Giris yap
                    <svg viewBox="0 0 512 512" width="30" title="sign-in-alt">
                      <path
                        d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z" />
                    </svg>
                  </button>
                </form>

              </div>
            </nav>
          </ul>
        </div>
      </div>
    </nav>
  <br><br>
</div>
  <div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center">Kalem Dostları Nasıl Çalışır ?</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<img id="resim1" src="https://cdn-images-1.medium.com/max/960/1*1oJp_rKxS2uG98rZxfuytg.png" alt="Resim 1">
			</div>
			<div class="col-sm-6">
				<img id="resim2" src="https://cdn-images-1.medium.com/max/960/1*SQvTpSoHestLWf2SBaK6Bw.png" alt="Resim 2">
			</div>
		</div>
	</div>

  
<!-- Bootstrap JS dosyalarını ekleyin -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper-core.min.js"
		integrity="sha384-ILQSRoHm6gBdC7zKmWbqXmzLflYb1DZL/j56jJG2itdz/hnFyGB2NIOx8Wf25XKv"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"
		integrity="sha384-cCfSABaB0V+929Jgj1Kct5UCxR9ny+oC75dOfnZt+u1tJq3SQdwF6PyIjK+0CKhL"
		crossorigin="anonymous"></script>
	
	<script>
		$(window).on('scroll', function() {
			var scrollTop = $(this).scrollTop();
			var resim1Top = $('#resim1').offset().top;
			var resim2Top = $('#resim2').offset().top;
			
			if (scrollTop >= resim2Top) {
				$('#resim1').show();
				$('#resim2').hide();
			} else {
				$('#resim1').hide();
				$('#resim2').show();
			}
		});
	</script>

<script> 
  function nasılCalısır() {
    window.location.href = "nasılCalısır.php";
  }
</script>


  
</body>

  

</html>
