<?php 
$login = false;
$showError = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    //$sql = "Select * from users where username= '$username' AND password='$password'";
    $sql = "Select * from users where username= '$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if(password_verify($password, $row['password'])){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: index.php");
            }
            else{
                $showError = " Invalid Credentials";
            }
        }
    }
    else{
        $showError = " Invalid Credentials";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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
    
    <?php
    if($login){
        echo'
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> You are logged in!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if($showError){
        echo'
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong>'.$showError.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if(isset($_GET["redirect"]) && $_GET["redirect"] == true){
        echo'
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>You need to Become a member first to access all the content.</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
    
    <div class="container-fluid">
        <div class="row ">
            
            <div class="col-lg-5 col-md-6 m-lg-auto m-md-auto px-md-4 px-lg-4">
                
                <h3 class="text-center my-5 " style="font-size: 30px; font-weight: 750; color: darkblue;" >Log In To Your Account</h3>
                <form action = "./login.php" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1" class="mb-2" style="font-weight: bold;">Username</label>
                      <input type="text"  id="username" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1" class="my-2" style="font-weight: bold;" >Password</label>
                      <input type="password"  id="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    <!-- <div class="form-group form-check my-3">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                      <label class="form-check-label" for="exampleCheck1" style="font-weight:500; font-size: 15px;" >Remember me</label>
                      <div class="float-end"><a href="/forgotpass.html" style="font-weight: 500; font-size: 15px; text-decoration: none;" >Forgot Your Password?</a></div>
                    </div> -->
                    <div class="text-center pb-5">
                        <button type="submit" class="btn btn-primary btn1 my-2 ">Sign In</button>
                        <!-- <div  class="mt-3"><a href="#" class="create">Create Account</a></div> -->
                        <a href="./RegisterPage.php" style="text-decoration:none;display:block;margin:auto;text-align:center;color:#434343;">Not a member yet? Sign Up</a>
                    </div>
                  </form>
                  
            </div>

        </div>
 
    </div>
    <footer-component></footer-component>
</body>
</html>
