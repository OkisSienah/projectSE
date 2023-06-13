<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/orderCheckOut.css">
    <link rel="stylesheet" href="../css/template.css">
    <link rel="stylesheet" href="../css/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Order | Tabe Nori</title>
  </head>
  <body>
    <?php include 'orderconf.php'; ?>
    <div class="topnav" id="topnav">
      <nav>
        <div class="logo">
          <a href="home.php"><img src="../assets/logo.png" alt="Logo"></a>
        </div>
        <ul class="menu">
          <li><a href="aboutUs.html">About Us</a></li>
          <li><a href="menu.html">Menu</a></li>
          <li><a href="order.php">Order Now</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
    <div class="content-box">
      <form class="card-box" action="<?php $_SERVER["PHP_SELF"]?>" method="post">
        <div class="card">
          <img src="../assets/AyamSuwir.png" alt="">
          <label for="Onigiri Ayam Suwir">Onigiri Ayam Suwir</label>
          <label for="Onigiri Ayam Suwir Price"><?php echo "Rp $onigiriFormatPrice";?></label>
          <input type="number" name="onigiri1" id="" placeholder="Enter Quantity"><br>
          <button name="addToCart1">Add To Cart</button><br>
        </div>
              
        <div class="card">
          <img src="../assets/IkanTongkol.png" alt="">
          <label for="Onigiri Ikan Tongkol">Onigiri Ikan Tongkol</label>
          <label for="Onigiri Ikan Tongkol Price"><?php echo "Rp $onigiriFormatPrice";?></label>
          <input type="number" name="onigiri2" id="" placeholder="Enter Quantity"><br>
          <button name="addToCart2">Add To Cart</button><br>
        </div>
              
        <div class="card">
          <img src="../assets/TunaMayo.png" alt="">
          <label for="Onigiri Tuna Mayo">Onigiri Tuna Mayo</label>
          <label for="Onigiri Tuna Mayo Price"><?php echo "Rp $onigiriFormatPrice";?></label>
          <input type="number" name="onigiri3" id="" placeholder="Enter Quantity"><br>
          <button name="addToCart3">Add To Cart</button><br>
        </div>
              
        <div class="card">
          <img src="../assets/Rendang.png" alt="">
          <label for="Onigiri Rendang">Onigiri Rendang</label>
          <label for="Onigiri Rendang Price"><?php echo "Rp $onigiriFormatPrice";?></label>
          <input type="number" name="onigiri4" id="" placeholder="Enter Quantity"><br>
          <button name="addToCart4">Add To Cart</button><br>
        </div>
        
        <div class="button-box">
          <button name="addAllToCart">Add All to Cart</button>
          <button><a href="checkOut.php">Check Out Here!</a></button>
        </div>
      </form>
    </div>
    <div class="footer">
      <div class="footer-left">
        <i class="fa fa-copyright"></i><div class="copyright">2023 TabeNori</div>
      </div>
      <div class="footer-center">
        <i class="fa fa-map-marker"></i><div class="location">Indonesia, DKI Jakarta, Jakarta</div><br>
        <i class="fa fa-whatsapp"></i><div class="numphone"><a href="https://www.whatsapp.com/catalog/6285158422110/?app_absent=0">+62 851-5842-2110</a></div><br>
        <i class="fa fa-instagram"></i><div class="instagram"><a href="https://www.instagram.com/tabe_nori/">@tabe_nori1</a></div>
      </div>
      <div class="footer-right">
      <div class="privacy-policy"><a href="privacy-policy.html">Privacy Policy</a></div>
        <div class="faq"><a href="faq.html">FAQ</a></div>
      </div>
    </div>
  </body>
</html>