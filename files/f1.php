<?php 
$showError = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
     $ootp = $_POST["otp1"];
              session_start();
              session_regenerate_id();
             if($_SESSION['otp']==$ootp){
                  echo '
                      <script>
                        window.location.href="resetpass.php?redirect=true";
                      </script>';
                 
             }
             else{
                                               $showError = "Wrong otp";


             }
}
?>
        <?php
    if($showError){
        echo'
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong>'.$showError.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
 
    ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recover Your Account</title>
    <link rel="stylesheet" href="./login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c151818ffe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./Navbar.css">
    <script src="./app.js" ></script>
    <link rel="stylesheet" href="./app.css">
</head>
<body>
      <?php
    require 'partials/_nav.php';
    ?>
    <div class="container-fluid">
        <div class="row ">
            
            <div class="col-lg-5 col-md-6 m-lg-auto m-md-auto px-md-4 px-lg-4">
                
                <h3 class="text-center my-5 " style="font-size: 30px; font-weight: 750; color: darkblue;" >Enter your Otp </h3>
                <form action = " " method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1" class="mb-2" style="font-weight: bold;">OTP</label>
                      <input type="text"  id="otp" name="otp1" class="form-control" id="fpass" aria-describedby="emailHelp" placeholder="Enter your otp" required>
                    </div>
    <br>
                    <div class="text-center pb-5">
                        <button type="submit" class="btn btn-primary btn1 my-2 ">Submit</button>

                    </div>
                  </form>
                  
            </div>

        </div>
 
    </div>
    <footer-component></footer-component>
</body>
</html>