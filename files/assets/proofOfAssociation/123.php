<?php
include '_dbconnect.php';
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';

?>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){


      $emailSent = false;
 



    $Email = $_POST['email'];
   
      
   
      
   
       $result=true;
          if($result){
              $loginAdded = true;
          }
          // Sending mail
          if($loginAdded){
            $mail = new PHPMailer(true);
            try {
              // $mail->SMTPDebug = SMTP::DEBUG_SERVER      
              $mail->isSMTP();                                           
              $mail->Host       = 'mail.pupalumni.org';                     
              $mail->SMTPAuth   = true;                                   
              $mail->Username   = 'mails@pupalumni.org';                                            
              $mail->Password   = '@t]fAfd}KZjK';                             
              $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
              $mail->Port       = 465;                                    

            
              $mail->setFrom('mails@pupalumni.org', 'PUP Alumni Association');

              $mail->addAddress($Email);             
              $mail->isHTML(true);                                 
              $mail->Subject = 'Welcome to PUP Alumni Association';
              $mail->Body    = "
              Welcome to our PUP Alumni Association Family. <br>
              We are very happy to see you here. <br>
              These are your Recovery  credentials: <br>
            
              
              ";
              $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

              $mail->send();
              $emailSent = true;
            } catch (Exception $e) {
                $emailSent = false;
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
          }
          
        }
        
      

      
      if($emailSent){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your entry has been submitted. We have sent you an email with the login credentials. If you can\'t find it, please check in you spam messages also
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
                
                <h3 class="text-center my-5 " style="font-size: 30px; font-weight: 750; color: darkblue;" >Recover Your Account </h3>
                <form action = "./Recover_email.php" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1" class="mb-2" style="font-weight: bold;">Email</label>
                      <input type="text"  id="fpass" name="email" class="form-control" id="fpass" aria-describedby="emailHelp" placeholder="Email" required>
                    </div>
    <br>
                    <div class="text-center pb-5">
                        <button type="submit" class="btn btn-primary btn1 my-2 ">Send Mail</button>

                    </div>
                  </form>
                  
            </div>

        </div>
 
    </div>
    <footer-component></footer-component>
</body>
</html>