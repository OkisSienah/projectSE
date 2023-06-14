<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/orderCheckOut.css">
    <link rel="stylesheet" href="../css/template.css">
    <link rel="stylesheet" href="../css/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CheckOut | Tabe Nori</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php include 'checkOutconf.php'; ?>
    <div class="topnav" id="topnav">
      <nav>
        <div class="logo">
          <a href="home.php"><img src="../assets/logo.png" alt="Logo"></a>
        </div>
        <ul class="menu">
          <li><a href="menu.html">Menu</a></li>
          <li><a href="order.php">Order Now</a></li>
          <li><a href="history.php">History</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
    <form class="checkOutBox" action="<?php $_SERVER["PHP_SELF"]?>" method="post">
        <?php if(isset($msg)) echo $msg; ?>
        <table>
            <tr>
                <th>Onigiri Name</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            <tr>
                <td><?php echo $onigiri1;?></td>
                <td><?php echo $q_noriAS;?></td>
                <td><?php echo "Rp. $onigiri1_text";?></td>
            </tr>
            <tr style="background-color: rgb(190, 190, 190);">
                <td><?php echo $onigiri2;?></td>
                <td><?php echo $q_noriIT;?></td>
                <td><?php echo "Rp. $onigiri2_text";?></td>
            </tr>
            <tr>
                <td><?php echo $onigiri3;?></td>
                <td><?php echo $q_noriTM;?></td>
                <td><?php echo "Rp. $onigiri3_text";?></td>
            </tr>
            <tr style="background-color: rgb(190, 190, 190);">
                <td><?php echo $onigiri4;?></td>
                <td><?php echo $q_noriR;?></td>
                <td><?php echo "Rp. $onigiri4_text";?></td>
            </tr>
            <tr>
                <td style="font-weight: 600;">Total</td>
                <td style="font-weight: 600;"><?php echo $quantityTotal;?></td>
                <td style="font-weight: 600;"><?php echo "Rp. $totalPrice_text";?></td>
            </tr>
            <tr>
                <td colspan="3"><button name="checkOut">Check Out</button></td>
            </tr>
        </table>
    </form>
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
        <div class='about'><a href='aboutUs.html'>About Us</a></div>
      </div>
    </div>
  </body>
  <script src="../js/script.js"></script>
</html>