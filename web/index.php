<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/assets/favicon-tabenori.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/template.css">
    <link rel="stylesheet" type="text/css" href="style/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home | Tabe Nori</title>
  </head>
  <body>
    <div class="topnav" id="topnav">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="logo" href="home.php">
            <img id="logo" src="assets/logo.png" alt="" width="300px" height="24">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-3">
              <li class="nav-item">
                <a class="nav-link active" href="guestMenu.html">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="order.php">Order Now</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="history.php">History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="content-box">
      <div class="content-group mb-auto">
        <div id="carouselExampleInterval" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="assets/img1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="assets/img2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/img3.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev justify-content-start" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon text text-primary" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next justify-content-end" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    
        <div class="MenuOnigiri" id="menu">
          <img src="assets/bgMenu2.png" alt="">
          <div class="onigiri" id="onigiri1">
            <a href="guestTM.html"><img src="assets/TunaMayo.png" alt=""></a>
            <div class="content" id="content1">
              <a href="guestTM.html"><div class="text" id="text1"> Tuna Mayo </div></a>
            </div>
          </div>
                
          <div class="onigiri" id="onigiri2">
            <a href="guestIT.html"><img src="assets/IkanTongkol.png" alt=""></a>
            <div class="content" id="content2">
              <a href="guestIT.html"><div class="text" id="text2">Ikan Tongkol</div></a>
            </div>
          </div>
              
          <div class="onigiri" id="onigiri3">
            <a href="guestR.html"><img src="assets/Circle Rendang.png" alt=""></a>
            <div class="content" id="content3">  
              <a href="guestR.html"><div class="text" id="text3">Rendang</div></a>
            </div>
          </div>
                
          <div class="onigiri" id="onigiri4">
            <a href="guestAS.html"><img src="assets/AyamSuwir.png" alt=""></a>
            <div class="content" id="content4">
              <a href="guestAS.html"><div class="text" id="text4">Ayam Suwir</div></a>
            </div>
          </div>
        </div> 

        <div class="footer">
          <div class="footer-left">
            <i class="fa fa-copyright"></i><div class="copyright">2023 TabeNori</div>
          </div>
          <div class="footer-center">
            <i class="fa fa-map-marker"></i><div class="location">Indonesia, DKI Jakarta, Jakarta Pusat</div><br>
            <i class="fa fa-whatsapp"></i><div class="numphone"><a href="https://wa.me/6285158422110">+62 851-5842-2110</a></div><br>
            <i class="fa fa-instagram"></i><div class="instagram"><a target="_blank" href="https://www.instagram.com/tabe_nori.p2mw/">@tabe_nori</a></div>
          </div>
          <div class="footer-right">
            <div class="privacy-policy"><a href="privacy-policy.html">Privacy Policy</a></div>
            <div class="faq"><a href="faq.html">FAQ</a></div>
            <div class='about'><a href='aboutUs.html'>About Us</a></div>
          </div>
        </div>
      </div> 
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="../js/script.js"></script>
</html>