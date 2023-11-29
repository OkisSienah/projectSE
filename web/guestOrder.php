  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/assets/favicon-tabenori.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style/template.css">
    <link rel="stylesheet" href="style/guestOrder.css">
    <link rel="stylesheet" href="style/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Order | Tabe Nori</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php 
      require 'function/functions.php';
      require 'function/queryOrder.php';
    
      if(isset($_SESSION['userid'])) {
        header('location:order.php');
      }

      if(isset($_POST['addToCart'])) {
        guestCart($_POST);
      }

      if(isset($_POST['showModal'])) {
        guestModal($_POST);
      }

      if(isset($_POST['orderNow'])){
        guestOrder($_POST);
      }
    ?>
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
      <div class="content-group">
        <form class="card-box" action="<?php $_SERVER["PHP_SELF"]?>" id="myForm" method="post">
          <p class="alert text-align-center position-absolute"><?php if (isset($msg)) { echo $msg; }; ?></p>
          <div class="flex">
            <div class="card">
              <img src="assets/Ayam Suwir.png" alt="">
              <label for="Onigiri Ayam Suwir">Onigiri Ayam Suwir</label>
              <label for="Onigiri Ayam Suwir Price"><?php echo "Rp $formatNoriPrice";?></label>
              <input type="number" name="noriAS" id="" value="0">
            </div>
                  
            <div class="card">
              <img src="assets/Ikan Tongkol.png" alt="">
              <label for="Onigiri Ikan Tongkol">Onigiri Ikan Tongkol</label>
              <label for="Onigiri Ikan Tongkol Price"><?php echo "Rp $formatNoriPrice";?></label>
              <input type="number" name="noriIT" id="" value="0">
            </div>
                  
            <div class="card">
              <img src="assets/Tuna Mayo.png" alt="">
              <label for="Onigiri Tuna Mayo">Onigiri Tuna Mayo</label>
              <label for="Onigiri Tuna Mayo Price"><?php echo "Rp $formatNoriPrice";?></label>
              <input type="number" name="noriTM" id="" value="0">
            </div>
                  
            <div class="card">
              <img src="assets/Rendang.png" alt="">
              <label for="Onigiri Rendang">Onigiri Rendang</label>
              <label for="Onigiri Rendang Price"><?php echo "Rp $formatNoriPrice";?></label>
              <input type="number" name="noriR" id="" value="0">
            </div>

            <div class="card">
              <img src="assets/Musubi.png" alt="">
              <label for="Musubi">Spam Musubi</label>
              <label for="Musubi"><?php echo "Rp $formatMusubiPrice";?></label>
              <input type="number" name="musubi" id="" value="0">
            </div>
          </div>

          <div class="brBlock">
            <div class="identity">
              <input type="text" name="fname" placeholder="Enter Fullname">
              <input type="text" name="no_hp" value="<?php echo isset($modifiedText) ? $modifiedText : ""; ?>" placeholder="Whatsapp Number [+628xxxxxxxxxx]">
            </div>
          </div>
          
          <div class="brFlex">
            <div class="btn-box">
              <div class="button-box">
                <button type="submit" name="addToCart">Add to Cart</button>
                <button type="button" name="showModal" data-bs-toggle="modal" data-bs-target="#exampleModal">Order Now!</button>
              </div>

              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header text-center">
                      <h5 class="modal-title w-100" id="exampleModalLabel">Order Detail</h5>
                    </div>
                    <div class="modal-body">
                      <?php if ($formatTotalPrice > 1): ?>
                        <?php echo "<p class='text-center'>Product:</p>"; ?>
                      <?php endif; ?>
                      <?php if ($qNoriAS > 0): ?>
                        <?php echo "<p class='text-center'>Onigiri Ayam Suwir (", $qNoriAS, ")</p>"; ?>
                      <?php endif; ?>
                      <?php if ($qNoriIT > 0): ?>
                        <?php echo "<p class='text-center'>Onigiri Ikan Tongkol (", $qNoriIT, ")</p>"; ?>
                      <?php endif; ?>
                      <?php if ($qNoriTM > 0): ?>
                        <?php echo "<p class='text-center'>Onigiri Tuna Mayo (", $qNoriTM, ")</p>"; ?>
                      <?php endif; ?>
                      <?php if ($qNoriR > 0): ?>
                        <?php echo "<p class='text-center'>Onigiri Rendang (", $qNoriR, ")</p>"; ?>
                      <?php endif; ?>
                      <?php if ($qMusubi > 0): ?>
                        <?php echo "<p class='text-center'>Spam Musubi (", $qMusubi, ")</p>"; ?>
                      <?php endif; ?>
                      <?php if ($formatTotalPrice > 1): ?>
                        <?php echo "<p class='text-center'>Total Price: Rp. ", $formatTotalPrice, "</p>"; ?>
                        <?php echo "<p class='text-center'>(Harga ini belum termasuk ongkos kirim)</p>"; ?>
                      <?php endif; ?>
                    </div>
                    <div class="modal-footer d-flex gap-2 mx-auto" style="border: none">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                      <button name="orderNow" class="btn btn-success">Order Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="footer">
      <div class="footer-left">
        <i class="fa fa-copyright"></i><div class="copyright">2023 TabeNori</div>
      </div>
      <div class="footer-center">
        <i class="fa fa-map-marker"></i><div class="location">Indonesia, DKI Jakarta, Jakarta</div><br>
        <i class="fa fa-whatsapp"></i><div class="numphone"><a href="https://wa.me/6285158422110">+62 851-5842-2110</a></div><br>
        <i class="fa fa-instagram"></i><div class="instagram"><a target="_blank" href="https://www.instagram.com/tabe_nori.p2mw/">@tabe_nori</a></div>
      </div>
      <div class="footer-right">
        <div class="privacy-policy"><a href="privacy-policy.html">Privacy Policy</a></div>
        <div class="faq"><a href="faq.html">FAQ</a></div>
        <div class='about'><a href='aboutUs.html'>About Us</a></div>
      </div>
    </div>
  </body>
  <script src="../js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>