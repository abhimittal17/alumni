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
    <title>University Projects</title>
    <link rel="stylesheet" href="./css/Projects.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
  
   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   
   <!-- Navbar -->
   <link rel="stylesheet" href="./Navbar.css">
   <script src="./app.js" ></script>
   <script src="https://kit.fontawesome.com/c151818ffe.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="./app.css">
   

  </head>
  <body>
    <?php
    require 'partials/_nav.php';
    ?>

    <h1 class="mytitle">Punjabi University Upcoming Projects</h1>
    <div class="container ">
            <div class="d-flex justify-content-between flex-wrap  card-main">

    <!-- Php Script -->
    <?php
     $query = "SELECT * FROM `myprojects`;";
  
     // FETCHING DATA FROM DATABASE
     $result = $conn->query($query); 
       if ($result->num_rows > 0) 
       {
           // OUTPUT DATA OF EACH ROW
           while($row = $result->fetch_assoc())
           {
            $id = $row["sno"];
            ?>

            <div class="card">
            <img src="https://www.med.unc.edu/cellbiophysio/baldwinlab/wp-content/uploads/sites/1239/2021/04/Image-from-iOS-scaled.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row["title"]?></h5>
              <p class="card-text"><?php echo substr($row["description"],0, 160)?>...</p>
              <a href="ProjectsDescription.php?<?php echo "sno=". $id?>" class="btn">Read More</a>
            </div>
            </div> 

          <?php
           }
       } 
       else {
           echo "0 results";
       }
     
      $conn->close();
     
   ?>
   </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <footer-component></footer-component>
  </body>
</html>