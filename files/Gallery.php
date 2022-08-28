<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/Gallery.css">

    <!-- jQuery -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/c151818ffe.js" crossorigin="anonymous"></script>
   <!-- Navbar -->
   <link rel="stylesheet" href="./Navbar.css">
   <link rel="stylesheet" href="./app.css">
   <script src="./app.js" ></script>
   <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <?php
    require 'partials/_nav.php';
    ?>

    <div class="container">
        <h1 class="main-heading">Image Gallery</h1>
        <div class="image-container">
            <div class="image">
                <img src="./images/pup_img1.jpg" alt="">
            </div>
            <div class="image">
                <img src="./images/pup_img2.jpg" alt="">
            </div>
            <div class="image">
                <img src="./images/pup_img3.jpg" alt="">
            </div>
            <div class="image">
                <img src="./images/pup_img4.jpg" alt="">
            </div>
            <div class="image">
                <img src="./images/pup_img5.jpg" alt="">
            </div>
            <div class="image">
                <img src="./images/pup_img1.jpg" alt="">
            </div>
        </div>

        <div class="popup-image">
            <span>&times;</span>
            <img src="./images/pup_img1.jpg" alt="">
        </div>
    </div>
    <footer-component></footer-component>
    <script src="./js/Gallery.js"></script>
</body>
</html>