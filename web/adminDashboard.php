<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="/assets/favicon-tabenori.png">
        <link rel="stylesheet" href="style/admin.css">
        <link rel="stylesheet" href="style/media.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Dashboard | Tabe Nori</title>
    </head>
    <body>
        <?php 
            require 'function/functions.php';
        ?>
        <p>Click on the Menu Icon to transform it to "X":</p>
        <div class="container" onclick="toggleIconMenu(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        </div>
        <a href="function/logout.php">Logout</a>
    </body>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>