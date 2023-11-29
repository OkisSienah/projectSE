<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/assets/favicon-tabenori.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style/template.css">
    <link rel="stylesheet" href="style/invoice.css">
    <link rel="stylesheet" href="style/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Order | Tabe Nori</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
      require 'function/functions.php';
      require 'function/queryInvoice.php';

      /* if(isset($_COOKIE['__INV_NUM__'])) {
        $__INV_NUM__ = $_COOKIE['__INV_NUM__'];
      } */
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
    <div class="content-box d-flex justify-content-center align-items-center">
      <div class="card w-100 text-center">
        <div class="card-header">
          <h3>Please pay before</h3>
          <h3><?php echo $displayTime; ?></h3>
        </div>
        <div class="card-body">
          <div class="table-responsive-md">
            <table class="table">
              <tbody>
                <tr>
                  <h4>Please Input the Price Correctly</h4>
                  <td class="h4" colspan="2"><h4><?php echo $formatPriceTotal?></h4></td>
                </tr>
                <tr>
                  <td class="h4" colspan="2"><img style="width: 300px" class="img-thumbnail" src="<?php echo $imgSource; ?>" alt=""></td>
                </tr>
                <tr>
                  <td>Invoice Number</td>
                  <td><?php echo $invoice_num?></td>
                </tr>
                <tr>
                  <td>Product</td>
                  <td>
                    <?php if ($q_NoriAS > 0): ?>
                      <?php echo "Onigiri Ayam Suwir (", $q_NoriAS, ")<br>";?>
                    <?php endif; ?>
                    <?php if ($q_NoriIT > 0): ?>
                      <?php echo "Onigiri Ikan Tongkol (", $q_NoriIT, ")<br>";?>
                    <?php endif; ?>
                    <?php if ($q_NoriTM > 0): ?>
                      <?php echo "Onigiri Tuna Mayo (", $q_NoriTM, ")<br>";?>
                    <?php endif; ?>
                    <?php if ($q_NoriR > 0): ?>
                      <?php echo "Onigiri Rendang (", $q_NoriR, ")<br>";?>
                    <?php endif; ?>
                    <?php if ($q_Musubi > 0): ?>
                      <?php echo "Spam Musubi (", $q_Musubi, ")";?>
                    <?php endif; ?>
                  </td>
                </tr>
                <tr>
                  <td>Name</td>
                  <td><?php echo $fname ?></td>
                </tr>
                <tr>
                  <td>Payment Status</td>
                  <td><?php echo $status_text; ?></td>
                </tr>
                <tr>
                  <td>Total Price</td>
                  <td><?php echo $formatPriceTotal ?></td>
                </tr>
                <tr>
                  <td>Order Time</td>
                  <td><?php echo $order_time ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
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
        <div class="privacy-policy"><a href="guestPrivacy.html">Privacy Policy</a></div>
        <div class="faq"><a href="faq.html">FAQ</a></div>
        <div class='about'><a href='guestAboutUs.html'>About Us</a></div>
      </div>
    </div>
  </body>
  <script src="../js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>