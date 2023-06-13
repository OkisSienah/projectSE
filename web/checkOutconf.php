<?php
    session_start();
    $user = $_SESSION['username'];
    $time = time();
    $timestamp = date('Y-m-d H:i:s', $time);

    include 'config.php';
    
    $onigiri1 = "Onigiri Ayam Suwir";
    $onigiri2 = "Onigiri Ikan Tongkol";
    $onigiri3 = "Onigiri Tuna Mayo";
    $onigiri4 = "Onigiri Rendang";
    $onigiriPrice = 13000;
    $onigiriFormatPrice = number_format($onigiriPrice, 2, '.', ',');

    $queryPullCart = "SELECT q_noriAS, q_noriIT, q_noriTM, q_noriR FROM cart WHERE user = '$user'";
    $dataPullCart = mysqli_query($conn, $queryPullCart);
    $dataPullCart = mysqli_fetch_assoc($dataPullCart);
    $q_noriAS = isset($dataPullCart['q_noriAS']) ? $dataPullCart['q_noriAS'] : 0;
    $q_noriIT = isset($dataPullCart['q_noriIT']) ? $dataPullCart['q_noriIT'] : 0;
    $q_noriTM = isset($dataPullCart['q_noriTM']) ? $dataPullCart['q_noriTM'] : 0;
    $q_noriR = isset($dataPullCart['q_noriR']) ? $dataPullCart['q_noriR'] : 0;
    $quantityTotal = $q_noriAS + $q_noriIT + $q_noriIT + $q_noriR;

    $priceOnigiriAS = $onigiriPrice * $q_noriAS;
    $priceOnigiriIT = $onigiriPrice * $q_noriIT;
    $priceOnigiriTM = $onigiriPrice * $q_noriTM;
    $priceOnigiriR = $onigiriPrice * $q_noriR;

    $onigiri1_text = number_format($priceOnigiriAS, 2, ',', '.');
    $onigiri2_text = number_format($priceOnigiriIT, 2, ',', '.');
    $onigiri3_text = number_format($priceOnigiriTM, 2, ',', '.');
    $onigiri4_text = number_format($priceOnigiriR, 2, ',', '.');


    $totalPrice = $priceOnigiriAS + $priceOnigiriIT + $priceOnigiriTM + $priceOnigiriR;
    $totalPrice_text = number_format($totalPrice, 2, '.', ',');

    if(isset($_POST['checkOut']) && $totalPrice != 0) {
        include 'config.php';
        $selectOrder = "SELECT order_id from order_log";
        $validating = mysqli_query($conn, $selectOrder) or die ('Error, query failed username '. mysqli_error($conn));
        $output = mysqli_fetch_array($validating);

        $queryPay = "INSERT INTO order_log(user, q_noriAS, q_noriIT, q_noriTM, q_noriR, total, buy_time) VALUES ('$user', '$q_noriAS', '$q_noriIT', '$q_noriTM', '$q_noriR', '$totalPrice' , '$timestamp')";
        $queryClear = "DELETE FROM cart WHERE user = '$user'";
        mysqli_query($conn, $queryPay);
        mysqli_query($conn, $queryClear);

        $priceOnigiriAS = 0;
        $priceOnigiriIT = 0;
        $priceOnigiriTM = 0;
        $priceOnigiriR = 0;
        $q_noriAS = 0;
        $q_noriIT = 0;
        $q_noriTM = 0;
        $q_noriR = 0;
        $onigiri1_text = number_format(0, 2, ',', '.');
        $onigiri2_text = number_format(0, 2, ',', '.');
        $onigiri3_text = number_format(0, 2, ',', '.');
        $onigiri4_text = number_format(0, 2, ',', '.');
        $totalPrice_text = number_format(0, 2, ',', '.');

        mysqli_close($conn);
    }
?>

<!-- echo "
        <!doctype html>
        <html lang='en'>
        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
            <link rel='stylesheet' href='../css/orderCheckOut.css'>
            <link rel='stylesheet' href='../css/template.css'>
            <link rel='stylesheet' href='../css/media.css'>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
            <title>Order | Tabe Nori</title>
        </head>
        <body>
        <div class='topnav' id='topnav'>
            <nav>
                <div class='logo'>
                <a href='home.php'><img src='../assets/logo.png' alt='Logo'></a>
                </div>
                <ul class='menu'>
                <li><a href='aboutUs.html'>About Us</a></li>
                <li><a href='menu.html'>Menu</a></li>
                <li><a href='order.php'>Order Now</a></li>
                <li><a href='logout.php'>Logout</a></li>
                </ul>
            </nav>
            </div>
            <form class='checkOutBox' action='{$_SERVER['PHP_SELF']}' method='post'>
                <table>
                    <tr>
                        <th>Onigiri Name</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>{$onigiri1}</td>
                        <td>{$q_noriAS}</td>
                        <td>Rp. {$formatPriceAS}</td>
                    </tr>
                    <tr>
                        <td>{$onigiri2}</td>
                        <td>{$q_noriIT}</td>
                        <td>Rp. {$formatPriceIT}</td>
                    </tr>
                    <tr>
                        <td>{$onigiri3}</td>
                        <td>{$q_noriTM}</td>
                        <td>Rp. {$formatPriceTM}</td>
                    </tr>
                    <tr>
                        <td>{$onigiri4}</td>
                        <td>{$q_noriR}</td>
                        <td>Rp. {$formatPriceR}</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>{$quantityTotal}</td>
                        <td>Rp. {$formatTotalPrice}</td>
                    </tr>
                    <tr>
                        <td colspan='3'><button name='checkOut'>Check Out</button></td>
                    </tr>
                </table>
            </form>
            <div class='footer'>
            <div class='footer-left'>
                <i class='fa fa-copyright'></i><div class='copyright'>2023 TabeNori</div>
            </div>
            <div class='footer-center'>
                <i class='fa fa-map-marker'></i><div class='location'>Indonesia, DKI Jakarta, Jakarta</div><br>
                <i class='fa fa-whatsapp'></i><div class='numphone'>+62 851-5842-2110</div><br>
                <i class='fa fa-instagram'></i><div class='instagram'>@tabe_nori1</div>
            </div>
            <div class='footer-right'>
            <div class='privacy-policy'><a href='privacy-policy.html'>Privacy Policy</a></div>
                <div class='faq'><a href='faq.html'>FAQ</a></div>
            </div>
        </div>
        "; -->