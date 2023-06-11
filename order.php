<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/order.css">
    <link rel="stylesheet" href="../css/template.css">
    <link rel="stylesheet" href="../css/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Order | Tabe Nori</title>
  </head>
  <body>
    <?php include 'orderconf.php'; ?>
    <div class="card-box min-vh-100">
        <div class="card">
            <img src="../assets/AyamSuwir.png" alt="">
            <label for="Onigiri Ayam Suwir">Onigiri Ayam Suwir</label><br>
            <input type="number" name=" onigiri1" id="" placeholder="Enter Quantity"><br>
            <button name="addToCart">Add To Cart</button><br>
        </div>

        <div class="card">
            <img src="../assets/IkanTongkol.png" alt="">
            <label for="Onigiri Ikan Tongkol">Onigiri Ikan Tongkol</label><br>
            <input type="number" name="onigiri2" id=""><br>
            <button name="addToCart">Add To Cart</button><br>
        </div>

        <div class="card">
            <img src="../assets/TunaMayo.png" alt="">
            <label for="Onigiri Tuna Mayo">Onigiri Tuna Mayo</label><br>
            <input type="number" name="onigiri3" id=""><br>
            <button name="addToCart">Add To Cart</button><br>
        </div>

        <div class="card">
            <img src="../assets/Rendang.png" alt="">
            <label for="Onigiri Rendang">Onigiri Rendang</label><br>
            <input type="number" name="onigiri4" id=""><br>
            <button name="addToCart">Add To Cart</button><br>
        </div>
    </div>
  </body>
</html>