<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    echo '
    <script>
    window.location.href="login.php?redirect=true";
    </script>';
}
?>


<?php
  include '_dbconnect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photo Gallery</title>

    <!-- jQuery -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/c151818ffe.js" crossorigin="anonymous"></script>
   
   <!-- Navbar -->
   <link rel="stylesheet" href="./Navbar.css">
   <script src="./app.js" ></script>
   <link rel="stylesheet" href="./css/GalleryCategories.css">
   <link rel="stylesheet" href="./app.css">
<link rel="icon" type="image/x-icon" href="favicon.ico">
   
  </head>
  <body>
    <?php
    require 'partials/_nav.php';
    ?>

    <h1 class="text-center main-heading">Photo Gallery</h1>
    <div class="d-flex justify-content-center flex-wrap">
        <section class="ayu-categories">
            <a href="Gallery.php
">
            <div class="ayu-box" id="a1">
                <h3>Boys Hostel tour</h3>
                Explore More
            </div>
                </a>
            <a href="Gallery.php
">
            <div class="ayu-box" id="a2">
                <h3> Infrastructure</h3>
                Explore More
            </div></a>
            <a href="Gallery.php
">
            <div class="ayu-box" id="a3">
                <h3>UCOE Building</h3>
                Explore More
            </div></a>
            <a href="Gallery.php
">
            <div class="ayu-box" id="a4">
                <h3>Girls Hostel Tour</h3>
                Explore More
            </div></a>
            <a href="Gallery.php
">
            <div class="ayu-box" id="a6">
                <h3>University Libraries</h3>
                Explore More
            </div></a>
            <a href="Gallery.php
">
            <div class="ayu-box" id="a5">
                <h3>University Lawns</h3>
                Explore More
            </div></a>
            
        </section>

    </div>
    <footer-component></footer-component>
    
  </body>
</html>