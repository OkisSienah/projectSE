<?php
    session_start();
    $user = $_SESSION['username'];
    if(!isset($_SESSION['username'])) {
        header('location: login.php');
    } else {    
        include 'config.php';
        $query = "SELECT * FROM order_log WHERE user = '$user'";
        $execute = mysqli_query($conn, $query);

        if (mysqli_num_rows($execute) > 0) {
            while ($row = mysqli_fetch_assoc($execute)) {
                echo "<table>";
                echo '<tr>';
                echo "<th> History</th>";
                echo "</tr>";

                echo '<tr>';
                echo "<td> Order ID: " . $row['order_id'] . "</td>";
                echo "</tr>";
                
                echo '<tr>';
                echo "<td>User: " . $row['user'] . "</td>";
                echo "</tr>";

                echo '<tr>';
                echo "<td>Onigiri Ayam Suwir: " . number_format($row['q_noriAS'], 0, ',') . "</td>";
                echo "</tr>";

                echo '<tr>';
                echo "<td>Onigiri Ikan Tongkol: " . number_format($row['q_noriIT'], 0, ',') . "</td>";
                echo "</tr>";

                echo '<tr>';
                echo "<td>Onigiri Tuna Mayo: " . number_format($row['q_noriTM'], 0, ',') . "</td>";
                echo "</tr>";

                echo '<tr>';
                echo "<td>Onigiri Rendang: " . number_format($row['q_noriR'], 0, ',') . "</td>";
                echo "</tr>";

                echo '<tr>';
                echo "<td>Total: " . number_format($row['total'], 2, ',', '.') . "</td>";
                echo "</tr>";

                echo '<tr>';
                echo "<td>Date Time: " . $row['buy_time'] . "</td>";
                echo "</tr>";
                echo "</table>";
            }
        } else {
            echo "<table>";
            echo "<tr>";
            echo "<td>History</td>";
            echo "</tr>";
            echo "<tr><td>No history entries found.</td></tr>";
            echo "</table>";
        }
    mysqli_close($conn);
    }
    echo "
        <div class='footer'>
            <div class='footer-left'>
                <i class='fa fa-copyright'></i><div class='copyright'>2023 TabeNori</div>
            </div>
            <div class='footer-center'>
                <i class='fa fa-map-marker'></i><div class='location'>Indonesia, DKI Jakarta, Jakarta</div><br>
                <i class='fa fa-whatsapp'></i><div class='numphone'><a href='https://www.whatsapp.com/catalog/6285158422110/?app_absent=0'>+62 851-5842-2110</a></div><br>
                <i class='fa fa-instagram'></i><div class='instagram'><a href='https://www.instagram.com/tabe_nori/'>@tabe_nori1</a></div>
            </div>
            <div class='footer-right'>
                <div class='privacy-policy'><a href='privacy-policy.html'>Privacy Policy</a></div>
                <div class='faq'><a href='faq.html'>FAQ</a></div>
                <div class='about'><a href='aboutUs.html'>About Us</a></div>
            </div>
        </div>";
?>