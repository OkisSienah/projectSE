<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style/invoice.css">
    <link rel="stylesheet" href="style/template.css">
    <link rel="stylesheet" href="style/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Order | Tabe Nori</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php 
      session_start();
      require 'function/functions.php';

      if(!isset($_SESSION['userid'])) {
          header('location:guestOrder.php');
      } else {
          $user = $_SESSION['userid'];
      }
    ?>
    <div class="topnav" id="topnav">
      <nav>
        <div class="logo">
          <a href="home.php"><img src="../assets/logo.png" alt="Logo"></a>
        </div>
        <ul class="menu">
          <li><a href="userMenu.html">Menu</a></li>
          <li><a href="testOrder.php">Order Now</a></li>
          <li><a href="history.php">History</a></li>
          <li><a href="function/logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
    <div class="content-box">
      <div class="card-invoice">
        <h1>Invoice</h1>

        <p>Invoice Number <?php echo $invoice_num ?></p>
        <p>Product Name<?php ?></p>
        <p class="status">Payment Status <?php echo $payment_status ?></p>
      </div>
      <form id="submitOrder" action="<?php $_SERVER["PHP_SELF"]?>" method="post">
        <button type="submit" name="approve">Approve</button>
        <button type="submit" name="disapproved">Disapproved</button>
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
        <div class="privacy-policy"><a href="userPrivacy.html">Privacy Policy</a></div>
        <div class="faq"><a href="faq.html">FAQ</a></div>
        <div class='about'><a href='userAboutUs.html'>About Us</a></div>
      </div>
    </div>
  </body>
  <script src="../js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>