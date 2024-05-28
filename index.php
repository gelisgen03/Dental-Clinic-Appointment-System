<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
      .kutum {
      border-style: solid;
      border-width: 5px;
      border-color:red;
      height: 125px;
      margin-bottom: 15px;
      background-color: orange;
        
   }
   .kutum2 {
      border-style: solid;
      border-width: 5px;
      border-color:black;
      height: 300px;
      margin-top: 15px;
      background-color: white;
        
   }
   .kutum3 {
      border-style: solid;
      border-width: 2px;
      border-color:black;
      height: 50px;
      margin-bottom: 15px;
      background-color: white;
        
   }
    </style>

  </head>
  
<body>
  <div style="height: 225px;">
    <!-- Navbar Başlangıç -->
      <nav class="navbar bg-body-tertiary fixed-top">
      <div style="background-color:bisque" class="container-fluid">
        <a href="#"><img src="assets/Densin0.png" height="200" width="200"></a>
          <button style="background-color:orange " class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <div ><img src="assets/Densin2.png" height="250" width="250"></div>
              <div><h2 class="offcanvas-title" id="offcanvasNavbarLabel">DENS IN </h2></div>
              
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <div class="kutum3">
                  <center>
                    <h5>Hakkımmızda</h5>
                  </center>

                </div>
                <div class="kutum3">
                 <center>
                    <h5>Hizmetlerimiz</h5>
                  </center>
                </div>
                <div class="kutum3">
                <center>
                    <h5>İletişim</h5>
                  </center>
                </div>
                <div class="kutum3">
                <center>
                    <h5>Blog</h5>
                  </center>
                </div>
                <br>
                <li class="nav-item">

                  <center>
                    <a href="/views/login.php" target="_blank">
                    <button type="button" class="btn btn-success"><i class="fa fa-lock" style="color:white" onclick=""></i>  Giriş Yap</button>
                    </a>
                  </center>
                </li>
                <br>
                <li class="nav-item">
                  <center>
                    <a href="/views/register.php" target="_blank">
                    <button type="button" class="btn btn-success"><i class="fa fa-user-circle" style="color:white"></i>  Kayıt Ol</button>
                    </a>
                  </center>
                </li>
                <br>
                <li>
                  <center>
                    <h7>Created By Gelisgen Software</h7>
                  </center>
                </li>
              </ul>
            
            </div>
          </div>
        </div>
      </nav>
  </div>      
 <!-- Navbar Bitiş -->

 <div class="kutum">
    <center>
      <h1>HOŞGELDİNİZ</h1>
      <h2>Diş hekiminizden randevu almak için lütfen giriş yapınız.</h2>
    </center>
 </div>
 <div>
  
 <!-- Ardışık Resimler Başlangıç -->
  <div style="background-color:bisque;" id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
    </div>
    <div  class="carousel-inner">
      <div  class="carousel-item active">
        <center>
        <img src="assets/photo1.jpg" class="d-block w-50" alt="...">
        </center>
        <div class="carousel-caption d-none d-md-block">
          <h3 style="color: white;">Yüksek Müşteri Memnuniyeti</h3>
        </div>
        
      </div>
    
      <div  class="carousel-item">
        <center>
        <img src="assets/photo4.jpg" class="d-block w-50" alt="...">
        </center>
        <div class="carousel-caption d-none d-md-block">
          <h3 style="color: white;">Portatif Tedavi Alanları</h3>
        </div>
      </div>
      <div class="carousel-item">
        <center>
        <img src="assets/innovative.jpg" class="d-block w-50" alt="...">
        </center>
        <div class="carousel-caption d-none d-md-block">
          <h3 style="color: white;">İnovatif Tedavi Çözümleri</h3>
        </div>
      </div>
      <div class="carousel-item">
        <center>
        <img src="assets/ekipman.jpg" class="d-block w-50" alt="...">
        </center>
        <div class="carousel-caption d-none d-md-block">
          <h3 style="color: white;">Yeni Nesil Ekipmanlar</h3>
        </div>
        
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Ardışık Resimler Bitiş -->
 </div>
 <div class="kutum2">
    <center>
      <img style="height: 300px;" src="assets/rufeyde2.png" alt="">
    </center>
 </div>
 <br><br>
 <div>

 <footer class="bg-body-tertiary text-center">
  <!-- Grid container -->
 
  

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-body" href="https://mdbf.btu.edu.tr/bilgisayar">Gelisgen Sofware</a>
    - Tüm Hakları Saklıdır.   <a href=""><i class="fa fa-github" style="color:black"></i></a> 
  </div>
  <!-- Copyright -->
</footer>
<br>
  
      
</body>
</html>
