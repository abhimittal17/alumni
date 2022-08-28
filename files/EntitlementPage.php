<?php
session_start();
?>

<?php
  include '_dbconnect.php';
?>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $FirstName = $_POST['uname'];
  $LastName = $_POST['lname'];
  $Email = $_POST['email'];
  $Phone = $_POST['mob'];
  $TransactionId = $_POST["transaction-id"];
  $UniversityRegistrationNumber = $_POST['unino'];
  $MembershipCategory = $_POST['Membership'];
  $Amount = $_POST['Amount'];
  $Remarks = $_POST['Remarks'];
// Submit these to a database

  

  $payment_filename = $_FILES["proofOfPayment"]["name"];
  $payment_tempname = $_FILES["proofOfPayment"]["tmp_name"];
  $tmp = explode(".",$payment_filename);
  $payment_Extension = end($tmp);

  $proof = $TransactionId . "." . $payment_Extension;

  if(move_uploaded_file($payment_tempname,"./assets/proofOfPayment/" . $proof)){
  }

  //SQL Query
  $sql = "INSERT INTO `Contributions` ( `First Name`, `Last Name`, `Email Address`, `Mobile Number`, `Transaction Id`,  `Uni Registration No.`, `Membership Category`, `Amount`, `proof` ,`Remarks`) VALUES ('$FirstName', '$LastName', '$Email', '$Phone', '$TransactionId', '$UniversityRegistrationNumber', '$MembershipCategory', '$Amount', '$proof', '$Remarks');";
  $result = mysqli_query($conn, $sql);

  if($result){
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your entry has been submitted successfully!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
  else{
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong>We are facing some technical issues and Your entry has not been submitted successfully. Sorry for the inconvenience!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entitlement Page</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- jQuery -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   
   <!-- Navbar -->
   <link rel="stylesheet" href="./Navbar.css">
   <script src="./app.js" ></script>
   <link rel="stylesheet" href="./app.css">

   <script src="https://kit.fontawesome.com/c151818ffe.js" crossorigin="anonymous"></script>

    <script>
      function myfunction(){
        console.log("fghgh");
        document.getElementById("patron").innerHTML = `<p>To Become a Patron (ਸਰਪ੍ਰਸਤ), Pay <u>Rs. 50000</u>/- on payment details given below:- <br>
          ਬਣਨ ਲਈ Patron (ਸਰਪ੍ਰਸਤ), ਭੁਗਤਾਨ ਕਰੋ <u>ਰੁਪਏ 50000</u>/- ਹੇਠ ਦਿੱਤੀ ਜਾਣਕਾਰੀ ਤੇ ਭੁਗਤਾਨ ਕਰੋ ।:-</p>`;
        document.getElementById("Patron").innerHTML ='<h5 style="text-align: center;" ><b>Patron(ਸਰਪ੍ਰਸਤ)<b></h5>'; 
                                 
	    }     
      function myfunction1(){
        document.getElementById("patron").innerHTML = `<p>To Become a Donor Member (ਦਾਨੀ ਮੈਂਬਰ), Pay <u>Rs. 20000</u>/- on payment details given below:- <br>
          ਬਣਨ ਲਈ Donor Member (ਦਾਨੀ ਮੈਂਬਰ), ਭੁਗਤਾਨ ਕਰੋ <u> ਰੁਪਏ 20000</u>/- ਹੇਠ ਦਿੱਤੀ ਜਾਣਕਾਰੀ ਤੇ ਭੁਗਤਾਨ ਕਰੋ ।:-</p>`;
          document.getElementById("Patron").innerHTML ='<h5 style="text-align: center;" ><b>Donor Member (ਦਾਨੀ ਮੈਂਬਰ)<b></h5>'; 

      }
      function myfunction2(){
        document.getElementById("patron").innerHTML = `<p>To Become a Life Member (ਜੀਵਨ ਮੈਂਬਰ), Pay<u> Rs. 1000 </u>/- on payment details given below:- <br>
          ਬਣਨ ਲਈ Life Member (ਜੀਵਨ ਮੈਂਬਰ), ਭੁਗਤਾਨ ਕਰੋ   <u> ਰੁਪਏ 1000</u>/- ਹੇਠ ਦਿੱਤੀ ਜਾਣਕਾਰੀ ਤੇ ਭੁਗਤਾਨ ਕਰੋ ।:-</p>`;
          document.getElementById("Patron").innerHTML ='<h5 style="text-align: center;" ><b>Life Member (ਜੀਵਨ ਮੈਂਬਰ)<b></h5>'; 

      }
      function myfunction3(){
        document.getElementById("patron").innerHTML = `<p>To Become a Ordinary Member (ਆਮ ਮੈਂਬਰ), Pay<u> Rs. 100 </u>/- on payment details given below:- <br>
          ਬਣਨ ਲਈ Ordinary Member (ਆਮ ਮੈਂਬਰ), ਭੁਗਤਾਨ ਕਰੋ  <u> ਰੁਪਏ 100</u>/- ਹੇਠ ਦਿੱਤੀ ਜਾਣਕਾਰੀ ਤੇ ਭੁਗਤਾਨ ਕਰੋ ।:-</p>`;
          document.getElementById("Patron").innerHTML ='<h5 style="text-align: center;" ><b> Ordinary Member (ਆਮ ਮੈਂਬਰ)<b></h5>'; 


      }
      </script>
      <script>
        var btnContainer = document.getElementById("myDIV");
        // Get all buttons with class="btn" inside the container
        var btns = btnContainer.getElementsByClassName("class1");
        // Loop through the buttons and add the active class to the current/clicked button
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
          });
        }
      </script>
      <style>
        *{
            box-sizing: border-box;
        }
        /* Set additional styling options for the columns*/
        .column {
        float: left;
        width: 50%;
        }
    
        .row:after {
        content: "";
        display: table;
        clear: both;
        }
  
        class1:active{
        background-color: #1E3A8A;
        }
        .class1{
        border: none;
        outline: none;
        padding: 10px 16px;
        background-color:rgba(184, 221, 237,0.7)
        cursor: pointer;
        }
        .class1:hover{
        background-color: #1E3A8A;
        color: white;
        }
        @media(max-width:750px){
          .column {
          width: 100%;
        }
        }
        
        </style>


</head>

<body>
    
  <?php
    require 'partials/_nav.php';
    ?>

        <h3 style="font-weight:bold ; text-align: center; margin-top: 10px; ">Alumni Entitlement(ਸਾਬਕਾ ਵਿਦਿਆਰਥੀ ਅਧਿਕਾਰ)</h3></div>
        <div class="container-fluid ;" style="text-align: justify;">
            
        <div  style="margin-left: 20px;"><b>The following categories of persons shall be entitled to be enrolled as members of the Association:
           <br style="font-size: 0.8rem; word-spacing: 2px; letter-spacing: 1px;"> ਵਿਅਕਤੀਆਂ ਦੀਆਂ ਹੇਠ ਲਿਖੀਆਂ ਸ਼੍ਰੇਣੀਆਂ ਐਸੋਸੀਏਸ਼ਨ ਦੇ ਮੈਂਬਰਾਂ ਵਜੋਂ ਨਾਮਜ਼ਦ ਹੋਣ ਦੇ ਹੱਕਦਾਰ ਹੋਣਗੀਆਂ:</b>
           
        </div>
        <ul style="padding:15px;text-align:justify;">
          <li >  Persons who have completed graduation and Post graduation from Punjabi University, Patiala. &nbsp;&nbsp;(ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ, ਪਟਿਆਲਾ ਤੋਂ ਗ੍ਰੈਜੂਏਟ & ਪੋਸਟ ਗ੍ਰੈਜੂਏਟ ਹੋਏ ਵਿਅਕਤੀ।)</li>
          <li>  Persons who have obtained diploma of at least one year duration after graduation.&nbsp;&nbsp;(ਉਹ ਵਿਅਕਤੀ ਜਿਨ੍ਹਾਂ ਨੇ ਗ੍ਰੈਜੂਏਸ਼ਨ ਤੋਂ ਬਾਅਦ ਘੱਟੋ-ਘੱਟ ਇੱਕ ਸਾਲ ਦੀ ਮਿਆਦ ਦਾ ਡਿਪਲੋਮਾ ਪ੍ਰਾਪਤ ਕੀਤਾ ਹੈ।)</li>
         <li>   Graduates of other Universities (Indian or Foreign) on whom membership is conferred by the Executive Council of the Association.<br>(ਹੋਰ ਯੂਨੀਵਰਸਿਟੀਆਂ (ਭਾਰਤੀ ਜਾਂ ਵਿਦੇਸ਼ੀ) ਦੇ ਗ੍ਰੈਜੂਏਟ ਜਿਨ੍ਹਾਂ ਨੂੰ ਐਸੋਸੀਏਸ਼ਨ ਦੀ ਕਾਰਜਕਾਰੀ ਕੌਂਸਲ ਦੁਆਰਾ ਮੈਂਬਰਸ਼ਿਪ ਪ੍ਰਦਾਨ ਕੀਤੀ ਜਾਂਦੀ ਹੈ।)</li>
          <li>   Members of the teaching staff of the University or of its affiliated colleges even though they may not be graduates of this University.<br>(ਯੂਨੀਵਰਸਿਟੀ ਜਾਂ ਇਸਦੇ ਮਾਨਤਾ ਪ੍ਰਾਪਤ ਕਾਲਜਾਂ ਦੇ ਅਧਿਆਪਨ ਅਮਲੇ ਦੇ ਮੈਂਬਰ ਭਾਵੇਂ ਉਹ ਇਸ ਯੂਨੀਵਰਸਿਟੀ ਦੇ ਗ੍ਰੈਜੂਏਟ ਨਾ ਹੋਣ।)</li> 
        </ul>
   
        <p style="margin-left:20px; font-weight:bold">Note : All Former Vice-Chancellors and former Registrars will be members of the Association. <br>(ਨੋਟ: ਸਾਰੇ ਸਾਬਕਾ ਵਾਈਸ-ਚਾਂਸਲਰ ਅਤੇ ਸਾਬਕਾ ਰਜਿਸਟਰਾਰ ਐਸੋਸੀਏਸ਼ਨ ਦੇ ਮੈਂਬਰ ਹੋਣਗੇ।)</p>
        <div style="  margin-left:25px;" >
            <br />
            <h5 style="font-weight:bold ; margin-left:20px;">Process(ਪ੍ਰਕਿਰਿਆ)</h5>
            <ol>
              <li>Choose the membership you want to enroll into.<span class='text-lg'>(ਉਹ ਮੈਂਬਰਸ਼ਿਪ ਚੁਣੋ ਜਿਸ ਵਿੱਚ ਤੁਸੀਂ ਦਾਖਲਾ ਲੈਣਾ ਚਾਹੁੰਦੇ ਹੋ।)</span></li>
              <li>Pay the contribution amount on the given account details or online.<span class='text-lg'>(ਦਿੱਤੇ ਗਏ ਖਾਤੇ ਦੇ ਵੇਰਵਿਆਂ 'ਤੇ ਯੋਗਦਾਨ ਦੀ ਰਕਮ ਦਾ ਭੁਗਤਾਨ ਕਰੋ।)</span></li>
              <li>Fill and submit the donor form along with payment details.<span class='text-lg'>(ਭੁਗਤਾਨ ਵੇਰਵਿਆਂ ਦੇ ਨਾਲ ਦਾਨੀ ਫਾਰਮ ਭਰੋ ਅਤੇ ਜਮ੍ਹਾਂ ਕਰੋ।)</span></li>
              <li>Done<span class='text-lg'>(ਮੁਕੰਮਲ)</span></li>
            </ol>
            <div class=" my-3" >
<button class="btn btn-dark"><a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm?corpID=934196" style="color:white; text-decoration:none;"  target="_blank" rel="noopener noreferrer">Click Here To Pay Online Alumni Membership Fees</a></button>

              </div>
        </div>
        <div class="row" >
          <div class="column" style="		background-color:rgba(184, 221, 237,0.7); padding:25px ;" id="myDIV">
              <h4 style="margin-top:20px; margin-left: 5px;text-align:center ">Choose membership in which you want to enroll:<br>(ਓਹ ਮੈਂਬਰਸ਼ਿਪ ਚੁਣੋ ਜਿਸ ਵਿੱਚ ਤੁਸੀਂ ਦਾਖਲਾ ਲੈਣਾ ਚਾਹੁੰਦੇ ਹੋ) :-</h4>
              <div class="class1 active" 
              onclick="myfunction()">
              <h6 class='text-lg'><b>Patron(ਸਰਪ੍ਰਸਤ)</b> </h6>
              <p class='ml-1'>A person may become a patron of this Association by donating a sum of at least of Rs. 50,000/- or more.(ਕੋਈ ਵਿਅਕਤੀ ਘੱਟੋ-ਘੱਟ 50,000 ਜਾਂ ਇਸ ਤੋਂ ਵੱਧ ਰੁਪਏ ਦੀ ਰਕਮ ਦਾਨ ਕਰਕੇ ਇਸ ਐਸੋਸੀਏਸ਼ਨ ਦਾ ਸਰਪ੍ਰਸਤ ਬਣ ਸਕਦਾ ਹੈ।)</p>
            </div>
            <div class="class1" onclick="myfunction1()">
              <h6 class='text-lg'><b>Donor Member(ਦਾਨੀ ਮੈਂਬਰ)</b></h6>
              <p class='ml-1'>A person may become a donor member of this Association by donating a sum of at least of Rs. 20,000/- or more(ਕੋਈ ਵਿਅਕਤੀ ਘੱਟੋ-ਘੱਟ 20,000 ਜਾਂ ਇਸ ਤੋਂ ਵੱਧ ਰੁਪਏ ਦੀ ਰਕਮ ਦਾਨ ਕਰਕੇ ਇਸ ਐਸੋਸੀਏਸ਼ਨ ਦਾ ਦਾਨੀ ਮੈਂਬਰ ਬਣ ਸਕਦਾ ਹੈ।)</p>
            </div>
            <div class="class1" onclick="myfunction2()">
              <h6 class='text-lg'><b>Life Member(ਜੀਵਨ ਮੈਂਬਰ)</b></h6>
              <p class='ml-1'>A person may become a patron of this Association by donating a sum of Rs. 1000/-.(ਕੋਈ ਵਿਅਕਤੀ 1000/- ਰੁਪਏ ਦੀ ਰਕਮ ਦਾਨ ਕਰਕੇ ਇਸ ਐਸੋਸੀਏਸ਼ਨ ਦਾ ਸਰਪ੍ਰਸਤ ਬਣ ਸਕਦਾ ਹੈ।)</p>
            </div>
            <div class="class1" onclick="myfunction3()">
              <h6 class='text-lg'><b>Ordinary Member(ਆਮ ਮੈਂਬਰ)</b></h6>
              <p class='ml-1' >A person may become a patron of this Association by donating a sum of Rs. 100/- per anum.(ਕੋਈ ਵਿਅਕਤੀ 100/- ਪ੍ਰਤੀ ਸਾਲ ਰੁਪਏ ਦੀ ਰਕਮ ਦਾਨ ਕਰਕੇ ਇਸ ਐਸੋਸੀਏਸ਼ਨ ਦਾ ਸਰਪ੍ਰਸਤ ਬਣ ਸਕਦਾ ਹੈ।)</p>
            </div>       
          </div>
          <div class="column" style=	"background-color:rgba(184, 221, 237,0.7); padding:40px;">
              <div class='flex flex-col  mb-2 text-justify'>
                  <div id="patron"><p style="margin-top:-4px;"><b>
                    To Become a Patron (ਸਰਪ੍ਰਸਤ), Pay <u>Rs.50000</u>/- on payment details given below:- <br>
                    ਬਣਨ ਲਈ Patron (ਸਰਪ੍ਰਸਤ), ਭੁਗਤਾਨ ਕਰੋ <u>ਰੁਪਏ 50000</u>/- ਹੇਠ ਦਿੱਤੀ ਜਾਣਕਾਰੀ ਤੇ ਭੁਗਤਾਨ ਕਰੋ ।:-</b></p>
                  </div>
                <p><b>
                  Bank : State Bank of India , Account : 55081436385 , IFSC code : SBIN0050009</b>
                </p>
              </div>
              <div class="d-flex justify-content-center my-3" >
<button class="btn btn-dark"><a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm?corpID=934196" style="color:white; text-decoration:none;" target="_blank" rel="noopener noreferrer">Click Here To Pay Online Alumni Membership Fees</a></button>

              </div>
              <div class="container" >
                <div class="row" style="background-color:white;border-radius:10px">
                    <div class="col-md-12">  
                 <p style="padding:10px"> Fill the form below after the transaction we will contact you as soon as possible.<br />(ਲੈਣ-ਦੇਣ ਤੋਂ ਬਾਅਦ ਹੇਠਾਂ ਦਿੱਤੇ ਫਾਰਮ ਨੂੰ ਭਰੋ ਅਸੀਂ ਜਿੰਨੀ ਜਲਦੀ ਹੋ ਸਕੇ ਤੁਹਾਡੇ ਨਾਲ ਸੰਪਰਕ ਕਰਾਂਗੇ।) </p>
                                  <div id="Patron"> <p> <h5 style="text-align: center;" >Patron</h5></div>
                                    <div class="container form-group">
                                      <form action="EntitlementPage.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                          <div class="col">
                                           <div>
                                               <label for="uname"><h6 style="font-size: 14px;"> First name(ਪਹਿਲਾ ਨਾਂ)</h6></label>
                                               <input type="text" class="form-control" id="uname" placeholder="Enter Firstname" name="uname" required>
                                               <br />
                                            </div>
                                          </div>
                                          <div class="col">
                                            <label for="lname"><h6 style="font-size: 14px;"> Last name(ਆਖਰੀ ਨਾਂ)</h6></label>
                                            <input type="text" class="form-control" id="lname" placeholder="Enter Lastname" name="lname" required>
                                          </div>
                                          <br/>
                                          <div class="container">
                                            <div class="row">
                                              <div class="col">
                                                    <label for="email"><h6 style="font-size: 14px;"> Email address(ਈਮੇਲ ਖਾਤਾ) </h6></label>
                                                    <input type="text" class="form-control" id="uname" placeholder="Enter Email" name="email" required>
                                                  </div>
                                                
                                               
                                                    <div class="col">
                                                    <label for="mob"><h6 style="font-size: 14px;"> Mobile No.(ਮੋਬਾਇਲ ਨੰਬਰ)</h6></label>
                                                    <input type="text" class="form-control" id="mob" placeholder="Enter mobile Number" name="mob" required>
                                                    <br>
                                                  </div>
                                                  <br>
                                                    <div class="container">
                                                        <div class="row">
                                                          <div class="col">
                                                            <label for="id"><h6 style="font-size: 14px;"> Transaction Id(ਲੈਣ-ਦੇਣ ਆਈ.ਡੀ)</h6></label>
                                                    <input type="text" class="form-control" id="transaction-id" name="transaction-id"  placeholder="Transaction Id" required>
                                                          </div>
                                                              <div class="col">
                                                               
                                                                    <label for="university"><h6 style="font-size: 14px;">Uni Registration No.(ਯੂਨੀਵਰਸਿਟੀ ਰਜਿਸਟ੍ਰੇਸ਼ਨ ਨੰਬਰ)</h6></label>
                                                                    <input type="text" class="form-control" id="unino" name="unino"  placeholder="Uni Registration Number" required>
                                                                <br>
                                                              </div>
                                                           

                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                      <div class="col">
                                                                                        <label for="text"> <h6 style="font-size: 14px;">Membership Category(ਸਦੱਸਤਾ ਸ਼੍ਰੇਣੀ)</h6></label>
                                                                                        <input type="text" class="form-control" id="Membership" name="Membership" placeholder="Membership Category" required>
                                                                                       
                                                                                        
                                                                                        </div>
                                                                                        <div class="col">
                                                                                            <label for="text"><h6 style="font-size: 14px;"> Amount(ਰਕਮ)</h6></label>
                                                                                            <input type="text" class="form-control" id="Amount" name="Amount" placeholder="Amount"  required>
                                                                                          <br>
                                                                                           
                                                                                        </div>
                                                                                       
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                      <div class="col">
                                                                                        <label for="text"> <h6 style="font-size: 14px;">Remarks</h6></label>
                                                                                        <input type="text" class="form-control" id="Remarks" name="Remarks" placeholder="Remarks" >
                                                                                       
                                                                                        </div>
                                                                                        </div>
                                                                                        <br>
      </div>
                                                                        
      <div class="container">
                                                                                            <div class="row">
                                                                                              <div class="col">
                                                                                                <label for="text"> <h6 style="font-size: 14px;">Proof of Payment(ਭੁਗਤਾਨ ਦਾ ਸਬੂਤ)</h6></label>
                                                                                           
                                                                                            <div class="px-2" style="border: 2px dashed rgb(190, 185, 185);">
                                                                                               <p style="margin-top:1rem; text-align:center;box-sizing: border-box; ">
                                                                                                <label for="myfile"></label>
                                                                                                <input type="file" id="myfile" name="proofOfPayment" multiple><br>
                                                                                                Upload a file or drag and drop(Proof of payment)</p>
                                                                                           <br><br> </div>
                                                                                      <br>
                                                                                           <!-- proofOfPayment -->
                                                                                           <div style="text-align: right;">

                                                                                          
                                                                                           <button type="submit"  class="btn btn-dark">Save</button> </div>


<br>


                                         
                                        </div>
</form>
                                      </div>
                              </div>
                        </div>
                    </div>
                    <div>
                    </div>

                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer-component></footer-component>
</body>
</html>