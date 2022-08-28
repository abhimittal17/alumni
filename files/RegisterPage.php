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

<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
<script src="https://kit.fontawesome.com/c151818ffe.js" crossorigin="anonymous"></script>

<!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- Navbar -->
<link rel="stylesheet" href="./Navbar.css">
<script src="./app.js" ></script>
<link rel="stylesheet" href="./app.css">

<title>Registration Page</title>
<link rel="stylesheet" href="./css/RegisterPage.css">
</head>
<body>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  $photosUploaded = false;
  $alumniAdded = false;
  $loginAdded = false;
  $emailSent = false;
  $usernameAlreadyExists = false;



    $YearOfJoining = $_POST['joindate'];
    $YearOfLeaving = $_POST['leavingdate'];
    $UniversityRegistrationNumber = $_POST['Registration'];
    $Degree = $_POST['Degree'];
    $Department = $_POST['Department'];
    $FullName = $_POST['fullname'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    $Company = $_POST['Company'];
    $Profession = $_POST['Profession'];
    $Position = $_POST['Position'];
    $City = $_POST['City'];
    $PostalCode = $_POST['PostalCode'];
    $State = $_POST['State'];
    $Country = $_POST['Country'];
      
      $proofOfAssociationfilename = $_FILES["proofOfAssociation"]["name"];
      $proofOfAssociationtempname = $_FILES["proofOfAssociation"]["tmp_name"];
      $tmp = explode(".",$proofOfAssociationfilename);
      $proofOfAssociationExtension = end($tmp);
  
      $proof = $UniversityRegistrationNumber . "." . $proofOfAssociationExtension;
  
  
      $profilefilename = $_FILES["profilepic"]["name"];
      $profiletempname = $_FILES["profilepic"]["tmp_name"];
      $tmp2 = explode(".",$profilefilename);
      $profilePicExtension = end($tmp2);
  
      $profile = $UniversityRegistrationNumber . "." . $profilePicExtension;
  
      $sql = "INSERT INTO `alumnidata` (`Year of joining`, `Year of leaving`, `Registration No.`, `Degree`,`Department`, `Full name`, `Email`, `Phone`, `Company`, `Profession`, `Position`, `City`, `Postal Code`, `State`, `Country`,`Proof of Association`,`Profile Pic`) VALUES ('$YearOfJoining', '$YearOfLeaving', '$UniversityRegistrationNumber', '$Degree','$Department', '$FullName', '$Email', '$Phone','$Company', '$Profession', '$Position', '$City', '$PostalCode','$State', '$Country','$proof','$profile')";
      
      $proofUploaded = false;

      if(move_uploaded_file($proofOfAssociationtempname,"./assets/proofOfAssociation/" . $proof)){
        $proofUploaded = true;
      } 
      $profileUploaded = false;
      if(move_uploaded_file($profiletempname, "./assets/profilePics/" . $profile )){
        $profileUploaded = true;
      }
      
      
      if($proofUploaded && $profileUploaded){
        $photosUploaded = true;
        try{
          $result = mysqli_query($conn, $sql);
        }
        catch(Exception $e){
          echo $e;
        }
        if($result){
          $alumniAdded = true;
        }
        
      }
      
      if( $photosUploaded && $alumniAdded){
        $username = $UniversityRegistrationNumber;
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
        $password = substr( str_shuffle( $chars ), 0, 12 );
        $existSql = "SELECT * FROM `users` WHERE username = '$username'";
        try{
        $result = mysqli_query($conn, $existSql);
        }
        catch(Exception $e){
          echo $e;
        }
        $numExistRows = mysqli_num_rows($result);
        if($numExistRows > 0){
            echo "Username $username already Exists";
        }
        else{
          $hash = password_hash($password, PASSWORD_DEFAULT);
          $sql = "INSERT INTO `users` (`username`, `password`, `email`,`dt`) VALUES ('$username', '$hash', '$Email', current_timestamp())";
          try{
            $result = mysqli_query($conn, $sql);
          }
          catch(Exception $e){
            echo $e;
          }
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
              These are your login credentials: <br>
              Username : $username <br>
              Password : $password <br>
              
              ";
              $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

              $mail->send();
              $emailSent = true;
            } catch (Exception $e) {
                $emailSent = false;
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                if($alumniAdded){
                  $sql = "DELETE FROM `alumnidata` WHERE `Registration No.` = '$UniversityRegistrationNumber' ";
                  try{
                    $result = mysqli_query($conn,$sql);
                    $alumniAdded = false;
                  }
                  catch(Exception $e){
                    echo $e;
                  }
                }
                if($loginAdded){
                  $sql = "DELETE FROM `users` WHERE `username` = '$username' ";
                  try{
                    $result = mysqli_query($conn,$sql);
                    $loginAdded = false;
                  }
                  catch(Exception $e){
                    echo $e;
                  }
                }
            }
          }
          else{
            // If alumni added but login not added, then we will send error and delete back the alumni data we added
            // so, that the user will fill the form again
            if($alumniAdded){
              $sql = "DELETE FROM `alumnidata` WHERE `Registration No.` = '$UniversityRegistrationNumber' ";
              try{
                $result = mysqli_query($conn,$sql);
                $alumniAdded = false;
              }
              catch(Exception $e){
                echo $e;
              }
            }
          }
          
        }
        
      }

      
      if($emailSent){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your entry has been submitted. We have sent you an email with the login credentials. If you can\'t find it, please check in you spam messages also
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }
      else{
      echo 
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> We are facing some technical issues and Your entry has not been submitted successfully. Sorry for the inconvenience!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }

    }
?>

<?php
  require 'partials/_nav.php';
  ?>
<div class="container-fluid my-3">
  <div class="row mx-1 ">
    <div class="col-lg-7 mb-2">
      <div id="regForm2">
      <!-- <h3 class="t" style="text-align: center;">How to Become  Alumni Member<br>(ਅਲੂਮਨੀ ਮੈਂਬਰ ਕਿਵੇਂ ਬਣਨਾ ਹੈ)</h3>
      <div class="row " >
        <div class="col  "><a class="btn btn-primary b1" href="./EntitlementPage.php" role="button" style="font-size: 1rem;  background-color: #0d2140;border:none">Ordinary Member(ਆਮ ਮੈਂਬਰ)</a></div>
        <div class="col  "></div>
        <div class="col"><a class="btn btn-primary b1" href="EntitlementPage.php" role="button" style="font-size: 1rem;  background-color: #0d2140; border:none">Life Member (ਜੀਵਨ ਮੈਂਬਰ)</a></div>
      </div> -->
      <div  style="margin-left: 20px;"><b>The following categories of persons shall be entitled to be enrolled as members of the Association:
           <br style="font-size: 0.8rem; word-spacing: 2px; letter-spacing: 1px;"> ਵਿਅਕਤੀਆਂ ਦੀਆਂ ਹੇਠ ਲਿਖੀਆਂ ਸ਼੍ਰੇਣੀਆਂ ਐਸੋਸੀਏਸ਼ਨ ਦੇ ਮੈਂਬਰਾਂ ਵਜੋਂ ਨਾਮਜ਼ਦ ਹੋਣ ਦੇ ਹੱਕਦਾਰ ਹੋਣਗੀਆਂ:</b>
           
        </div>
        <ul style="padding-top:15px;padding-left:15px;padding-right:15px;text-align:justify;">
           <li > Punjabi University, Patiala all Student and Researchers.<br>(ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ, ਪਟਿਆਲਾ ਤੋਂ ਗ੍ਰੈਜੂਏਟ & ਪੋਸਟ ਗ੍ਰੈਜੂਏਟ ਹੋਏ ਵਿਅਕਤੀ।)</li>
           <li>  Persons who have obtained diploma of at least one year duration after graduation.<br>(ਉਹ ਵਿਅਕਤੀ ਜਿਨ੍ਹਾਂ ਨੇ ਗ੍ਰੈਜੂਏਸ਼ਨ ਤੋਂ ਬਾਅਦ ਘੱਟੋ-ਘੱਟ ਇੱਕ ਸਾਲ ਦੀ ਮਿਆਦ ਦਾ ਡਿਪਲੋਮਾ ਪ੍ਰਾਪਤ ਕੀਤਾ ਹੈ।)</li>
         <li>   Graduates of other Universities (Indian or Foreign) on whom membership is conferred by the Executive Council of the Association.<br>(ਹੋਰ ਯੂਨੀਵਰਸਿਟੀਆਂ (ਭਾਰਤੀ ਜਾਂ ਵਿਦੇਸ਼ੀ) ਦੇ ਗ੍ਰੈਜੂਏਟ ਜਿਨ੍ਹਾਂ ਨੂੰ ਐਸੋਸੀਏਸ਼ਨ ਦੀ ਕਾਰਜਕਾਰੀ ਕੌਂਸਲ ਦੁਆਰਾ ਮੈਂਬਰਸ਼ਿਪ ਪ੍ਰਦਾਨ ਕੀਤੀ ਜਾਂਦੀ ਹੈ।)</li>
           <li>   Members of the teaching staff of the University or of its affiliated colleges even though they may not be graduates of this University.<br>(ਯੂਨੀਵਰਸਿਟੀ ਜਾਂ ਇਸਦੇ ਮਾਨਤਾ ਪ੍ਰਾਪਤ ਕਾਲਜਾਂ ਦੇ ਅਧਿਆਪਨ ਅਮਲੇ ਦੇ ਮੈਂਬਰ ਭਾਵੇਂ ਉਹ ਇਸ ਯੂਨੀਵਰਸਿਟੀ ਦੇ ਗ੍ਰੈਜੂਏਟ ਨਾ ਹੋਣ।)</li> 
        <br>
            <p style="text-align:center;font-weight:bold">Note : All Former Vice-Chancellors and former Registrars will be members of the Association.<br>(ਨੋਟ: ਸਾਰੇ ਸਾਬਕਾ ਵਾਈਸ-ਚਾਂਸਲਰ ਅਤੇ ਸਾਬਕਾ ਰਜਿਸਟਰਾਰ ਐਸੋਸੀਏਸ਼ਨ ਦੇ ਮੈਂਬਰ ਹੋਣਗੇ।)</p></ul>
           <h4 style="font-weight:bold ;text-align:center;">Pre-requisites before filling the form.</h4>
           <ul>
           <li>Pay Membership Fee</li> 
           <li>Scanned Copy of Detailed Marks Certificate/Degree/Registration Number And Photo</li>
          </ul>
            <h3 class="t">Membership Donation Amount</h3>
          <ul style="padding:15px;text-align:justify;">
            <li> Patron: 50,000 (INR) </li>
            <li> Donor Member: 20,000 (INR) </li>
            <li> Life Member: 1000 (INR) </li>
            <li> Ordinary Member: 100 (INR) per annum </li>
            <li> Honorary Member: On whom Membership is conferred by the Association</li>
          </ul>
          <p style="font-weight:bold;text-align:center"> Bank : State Bank of India &nbsp;&nbsp; Account : 55081436385 &nbsp;&nbsp;  IFSC code : SBIN0050009</p>

          <div class="row" >
          
            <div class="d-flex justify-content-center" >
              <a class="btn-primary b1" href="https://www.onlinesbi.com/sbicollect/icollecthome.htm?corpID=934196" target="_blank" role="button" style="border-radius: 8px;padding: 0.6rem 1.2rem;">Membership Fees (ਯੋਗਦਾਨ)</a>
            </div>
   
            
            
          </div>
      
    </div>
    </div>
    <div class="col-lg-5 ">
      <form id="regForm" action="RegisterPage.php" method="POST" enctype="multipart/form-data">
      <a href="./login.php" style="text-decoration:none;display:block;margin:auto;text-align:center;color:#434343;">Already a member? Log In</a>
      <h1 class="t">Registration Form</h1>
      <div class="tab">Year Of Joining (ਸ਼ਾਮਲ ਹੋਣ ਦਾ ਸਾਲ)
        <p><input type="date" oninput="this.className = ''" name="joindate" ></p>
        Year Of Leaving (ਛੱਡਣ ਦਾ ਸਾਲ)
        <p><input  type ="date" placeholder="Last name..." oninput="this.className = ''" name="leavingdate"></p>
        University Registration Number (ਯੂਨੀਵਰਸਿਟੀ ਰਜਿਸਟ੍ਰੇਸ਼ਨ ਨੰਬਰ)
        <p><input  type ="text" placeholder="University Registration Number" oninput="this.className = ''" name="Registration"></p>
        Department (ਵਿਭਾਗ)
        <p> <input type ="text"  placeholder="Name of your Department "  oninput="this.className = ''" name="Department">
         <p>
        Qualification (ਯੋਗਤਾ)
        <p><input  type ="text" placeholder="Qualification" oninput="this.className = ''" name="Degree"></p>
        Proof of Qualification (ਯੋਗਤਾ ਦਾ ਸਬੂਤ)
        <p><input  type ="file" placeholder="Degree" oninput="this.className = ''" name="proofOfAssociation"></p>
        
        
      </div>
      <div class="tab">Full Name (ਪੂਰਾ ਨਾਂਮ)
        <p><input type ="text" placeholder="First name ..." oninput="this.className = ''" name="fullname"></p>
      
        Email (ਈ - ਮੇਲ)
        <p><input type ="email" placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
        Phone (ਫ਼ੋਨ)
        <p><input type ="number" placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
        Profile Photo (ਪ੍ਰੋਫਾਈਲ ਫੋਟੋ)
        <p><input type="file" oninput="this.className = ''" name="profilepic"></p>
      </div>
      <div class="tab">
      Job Title(ਕੰਮ ਦਾ ਟਾਈਟਲ)
        <p><input type ="text" placeholder="Job Title" oninput="this.className = ''" name="Company"></p>
        Profession (ਪੇਸ਼ਾ)
        <p><input type ="text" placeholder="Profession.." oninput="this.className = ''" name="Profession"></p>
        Position/Designation (ਅਹੁਦਾ)
        <p><input type ="text" placeholder="Position/Designation.." oninput="this.className = ''" name="Position"></p>
        City (ਸ਼ਹਿਰ)
        <p><input type ="text" placeholder="City.." oninput="this.className = ''" name="City"></p>
        Postal Code (ਡਾਕ ਕੋਡ)
        <p><input type ="number" placeholder="Postal Code.." oninput="this.className = ''" name="PostalCode"></p>
        State (ਰਾਜ)
        <p><input type ="text" placeholder="State.." oninput="this.className = ''" name="State"></p>
        Country (ਦੇਸ਼)
        <p><input type ="text" placeholder="Country.." oninput="this.className = ''" name="Country"></p>
      
      </div>

        <div style="float:right;">
          <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
          <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>

      </div>
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
      </div>
      </form> </div>
  </div>


  </div>


  
  
<footer-component></footer-component>
<script  src="./js/RegisterPage.js"></script>

</body>
</html>