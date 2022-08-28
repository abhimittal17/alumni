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
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c151818ffe.js" crossorigin="anonymous"></script>
    <!-- NavBar -->
    <link rel="stylesheet" href="./Navbar.css" >
    <script  src="./app.js"></script>

    <title>Projects Description</title>
    <link rel="stylesheet" href="./css/ProjectsDescription.css">
    <link rel="stylesheet" href="./app.css">
  </head>
  <body>
    <?php
    require 'partials/_nav.php';
    ?>

    <?php
    $var = substr($_SERVER['QUERY_STRING'], 4);
    $query = "SELECT * FROM `myprojects` WHERE `sno` = $var";
    // FETCHING DATA FROM DATABASE
    $result = $conn->query($query); 
    if ($result->num_rows > 0) 
       {
           // OUTPUT DATA OF EACH ROW
           while($row = $result->fetch_assoc())
           {
              $desc = $row["description"];
              $title = $row["title"];
           }
        } 
        else {
            echo "0 results";
        }
      
       $conn->close();
      
    ?>
    <div class="card desc-card">
        <div class="card-body desc-card-body">
            <h1 id="desc-title"><?php echo $title; ?></h1>
            <p id="desc-para"><?php echo $desc; ?></p>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a class="btn btn-primary desc-btn" href="./ContributePage.php" type="button">Contribute Now</a>
           </div>
        </div>
      </div>
    <footer-component></footer-component>
  </body>
</html>