
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    echo '
    <script>
    window.location.href="login.php?redirect=true";
    </script>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contribute</title>
   
    <!-- jQuery -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/c151818ffe.js" crossorigin="anonymous"></script>
   
   <!-- Navbar -->
   <link rel="stylesheet" href="./Navbar.css">
   <script src="./app.js" ></script>
   <link rel="stylesheet" href="./app.css">
   <link rel="icon" type="image/x-icon" href="favicon.ico">

  <script>function handleChange(checkbox) {
    if(checkbox.checked == true){
        document.getElementById("submit").removeAttribute("disabled");
    }else{
        document.getElementById("submit").setAttribute("disabled", "disabled");
   }
}</script>
</head>
<body>
    <?php
    require 'partials/_nav.php';
    ?>

    <div class="container pb-4 " style="text-align:justify;">
    <h3  class="my-4" style="font-weight:bold ; text-align: center;">Terms And Conditions(ਨਿਯਮ ਅਤੇ ਸ਼ਰਤਾਂ)</h3>
    <div class="row">
    <ul   style="text-align:justify ">
        <li class=""><b>Corporate Customer: </b></span> Firm/Company/Institution (F/C/I) collecting payment from their beneficiaries.</li>
        <li class=""><b>User: </b></span>The beneficiary making a payment to F/C/I for the services/goods availed.</li>
        <li class="">Bank shall not be responsible, in any way, for the quality or merchantability of any product/merchandise or any of the services related thereto, whatsoever, offered to the User by the Corporate Customer. Any disputes regarding the same or delivery of the Service or otherwise will be settled between Corporate Customer and the User and Bank shall not be a party to any such dispute. Any request for refund by the User on any grounds whatsoever should be taken up directly with the Corporate Customer and the Bank will not be concerned with such a request.</li>
        <li class="">Bank takes no responsibility in respect of the services provided and User shall not be entitled to make any claim against the Bank for deficiency in the services provided by the Corporate Customer.</li>
        <li class="">The User shall not publish, display, upload or transmit any information prohibited under Rule 3(2) of the Information Technology (Intermediaries guidelines) Rules, 2011.</li>
        <li class="">In case of non-compliance of the terms and conditions of usage by the User, the Bank has the right to immediately terminate the access or usage rights of the User to the computer resource of the Bank and remove the non-compliant information.</li>
      
        </ul>
    </br><br>
      
        <ul  style="text-align:justify ;">
        <li><b>ਕਾਰਪੋਰੇਟ ਗਾਹਕ: </b></span>  ਫਰਮ/ਕੰਪਨੀ/ਸੰਸਥਾ (F/C/I) ਆਪਣੇ ਲਾਭਪਾਤਰੀਆਂ ਤੋਂ ਭੁਗਤਾਨ ਇਕੱਠਾ ਕਰਦੀ ਹੈ।</li>
        <li><b>ਉਪਭੋਗਤਾ:</b></span> ਲਾਭਪਾਤਰੀ ਪ੍ਰਾਪਤ ਕੀਤੀਆਂ ਸੇਵਾਵਾਂ/ਸਮਾਨ ਲਈ F/C/I ਨੂੰ ਭੁਗਤਾਨ ਕਰਦਾ ਹੈ ।</li>
        <li>ਕਾਰਪੋਰੇਟ ਗਾਹਕ ਦੁਆਰਾ ਉਪਭੋਗਤਾ ਨੂੰ ਪੇਸ਼ ਕੀਤੀ ਗਈ ਕਿਸੇ ਵੀ ਉਤਪਾਦ/ਵਪਾਰ ਜਾਂ ਇਸ ਨਾਲ ਸਬੰਧਤ ਕਿਸੇ ਵੀ ਸੇਵਾ ਦੀ ਗੁਣਵੱਤਾ ਜਾਂ ਵਪਾਰਕਤਾ ਲਈ, ਬੈਂਕ ਕਿਸੇ ਵੀ ਤਰੀਕੇ ਨਾਲ ਜ਼ਿੰਮੇਵਾਰ ਨਹੀਂ ਹੋਵੇਗਾ। ਕਾਰਪੋਰੇਟ ਗਾਹਕ ਅਤੇ ਉਪਭੋਗਤਾ ਵਿਚਕਾਰ ਸਮਾਨ ਜਾਂ ਸੇਵਾ ਦੀ ਡਿਲੀਵਰੀ ਜਾਂ ਹੋਰ ਕਿਸੇ ਵੀ ਤਰ੍ਹਾਂ ਦੇ ਵਿਵਾਦਾਂ ਦਾ ਨਿਪਟਾਰਾ ਕੀਤਾ ਜਾਵੇਗਾ ਅਤੇ ਬੈਂਕ ਅਜਿਹੇ ਕਿਸੇ ਵੀ ਵਿਵਾਦ ਦਾ ਧਿਰ ਨਹੀਂ ਹੋਵੇਗਾ। ਉਪਭੋਗਤਾ ਦੁਆਰਾ ਕਿਸੇ ਵੀ ਆਧਾਰ 'ਤੇ ਰਿਫੰਡ ਲਈ ਕੋਈ ਵੀ ਬੇਨਤੀ ਸਿੱਧੇ ਕਾਰਪੋਰੇਟ ਗਾਹਕ ਕੋਲ ਉਠਾਈ ਜਾਣੀ ਚਾਹੀਦੀ ਹੈ ਅਤੇ ਬੈਂਕ ਅਜਿਹੀ ਬੇਨਤੀ ਨਾਲ ਸਬੰਧਤ ਨਹੀਂ ਹੋਵੇਗਾ।</li>
        <li>ਬੈਂਕ ਪ੍ਰਦਾਨ ਕੀਤੀਆਂ ਸੇਵਾਵਾਂ ਦੇ ਸਬੰਧ ਵਿੱਚ ਕੋਈ ਜ਼ਿੰਮੇਵਾਰੀ ਨਹੀਂ ਲੈਂਦਾ ਅਤੇ ਉਪਭੋਗਤਾ ਕਾਰਪੋਰੇਟ ਗਾਹਕ ਦੁਆਰਾ ਪ੍ਰਦਾਨ ਕੀਤੀਆਂ ਸੇਵਾਵਾਂ ਵਿੱਚ ਕਮੀ ਲਈ ਬੈਂਕ ਦੇ ਵਿਰੁੱਧ ਕੋਈ ਦਾਅਵਾ ਕਰਨ ਦਾ ਹੱਕਦਾਰ ਨਹੀਂ ਹੋਵੇਗਾ।</li>
        <li>ਉਪਭੋਗਤਾ ਸੂਚਨਾ ਤਕਨਾਲੋਜੀ (ਵਿੱਚਲੇ ਦਿਸ਼ਾ-ਨਿਰਦੇਸ਼ਾਂ) ਨਿਯਮ, 2011 ਦੇ ਨਿਯਮ 3(2) ਦੇ ਤਹਿਤ ਵਰਜਿਤ ਕਿਸੇ ਵੀ ਜਾਣਕਾਰੀ ਨੂੰ ਪ੍ਰਕਾਸ਼ਿਤ, ਪ੍ਰਦਰਸ਼ਿਤ, ਅਪਲੋਡ ਜਾਂ ਪ੍ਰਸਾਰਿਤ ਨਹੀਂ ਕਰੇਗਾ।</li>
        <li>ਉਪਭੋਗਤਾ ਦੁਆਰਾ ਵਰਤੋਂ ਦੇ ਨਿਯਮਾਂ ਅਤੇ ਸ਼ਰਤਾਂ ਦੀ ਪਾਲਣਾ ਨਾ ਕਰਨ ਦੀ ਸਥਿਤੀ ਵਿੱਚ, ਬੈਂਕ ਨੂੰ ਉਪਭੋਗਤਾ ਦੀ ਬੈਂਕ ਦੇ ਕੰਪਿਊਟਰ ਸਰੋਤ ਤੱਕ ਪਹੁੰਚ ਜਾਂ ਵਰਤੋਂ ਦੇ ਅਧਿਕਾਰਾਂ ਨੂੰ ਤੁਰੰਤ ਖਤਮ ਕਰਨ ਅਤੇ ਗੈਰ-ਅਨੁਕੂਲ ਜਾਣਕਾਰੀ ਨੂੰ ਹਟਾਉਣ ਦਾ ਅਧਿਕਾਰ ਹੈ।</li>
      
        </ul>
        <br>
       
        
      <form  >
          <div class="form-group form-check my-3">
            <input type="checkbox" class="form-check-input" id="example" required>
            <label class="form-check-label text-dark" for="example" style="font-weight:500; font-size: 15px;" >I have read and accepted the terms and conditions stated above. (ਮੈਂ ਉੱਪਰ ਦੱਸੇ ਨਿਯਮਾਂ ਅਤੇ ਸ਼ਰਤਾਂ ਨੂੰ ਪੜ੍ਹ ਲਿਆ ਹੈ ਅਤੇ ਸਵੀਕਾਰ ਕਰ ਲਿਆ ਹੈ।<br>
                (Click Check Box to proceed for payment.)(ਭੁਗਤਾਨ ਲਈ ਅੱਗੇ ਵਧਣ ਲਈ ਚੈੱਕ ਬਾਕਸ 'ਤੇ ਕਲਿੱਕ ਕਰੋ।)</label>
          </div>
        <br>
        <div style="margin-left: 20px;" class="button">
        <button class="btn btn-primary" onclick=""  style="background-color: #01224b; color: #f0f9ff;padding:10px;border: none;"><a href="EntitlementPage.php" style="text-decoration: none;color: white;">Proceed(ਅੱਗੇ ਵਧੋ)</a></button>
    </div>
</form>  
</div>
</div>
<footer-component></footer-component>
        
      
    
</div>
</div>
</body>
</html>