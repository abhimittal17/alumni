<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- jQuery -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   
   <!-- Navbar -->
   <link rel="stylesheet" href="./Navbar.css">
   <script src="./app.js" ></script>
   <script src="https://kit.fontawesome.com/c151818ffe.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="./app.css">
   <link rel="icon" type="image/x-icon" href="favicon.ico">

    <title>Neighbourhood Campuses</title>
</head>
<body>
  <?php
    require 'partials/_nav.php';
    ?>

    <div class="container">
        
        <div class="row">
            <div class="col-sm-12">
                <div style="margin: 30px 0;" class="text-center"><h2 style=" font-weight:700;">ਨਿਕਟਵਰਤੀ ਕੈਂਪਸ Neighbourhood Campuses</h2>
            </div>
        </div>
        
                
        <table class="table" style="border: 1px solid #dee2e6; ">
          <thead>
            <tr style="background-color: #011D4B; color:#EACC15;">
              <th> Campus/ ਕੈਂਪਸ</th>
              <th>Incharge Name/ ਇੰਚਾਰਜ ਨਾਮ</th>
              <th>Contact/ ਸੰਪਰਕ</th>
              <th>Website</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><p>
                ਇੰਜੀਨੀਅਰਿੰਗ ਅਤੇ ਮੈਨੇਜਮੈਂਟ ਕਾਲਜ, ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ ਨਿਕਟਵਰਤੀ ਕੈਂਪਸ, ਰਾਮਪੁਰਾ ਫੂਲ
                <br>
                <span style="color: #4B5563;">
(College Of Engineering and Management, Punjabi University Neighbourhood Campus, Rampura Phul)	
                </span></p></td>
              <td><p>Dr. Lakhwinder Singh Rakhra (Incharge)	
            </p>
            </td>
              <td>01651-248894, 9501800048</td>
              <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=122" target="_blank"><button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>
            <tr>
              <td><p >ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ ਅਕਾਲੀ ਫੂਲਾ ਸਿੰਘ ਨਿਕਟਵਰਤੀ ਕੈਂਪਸ, ਦੇਹਲਾ ਸੀਹਾਂ (ਸੰਗਰੂਰ)<br>
                <span style="color: #4B5563;">(Punjabi University Akali Phoola Singh Neighbourhood Campus, Dehla Seehan, Sangrur)</span></p></td>
              <td><p>Mr. Sukhveer Singh (Incharge) </p></td>
              <td><p>9914894593</p></td>
              <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=116" target="_blank"><button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>
            <tr>
              <td><p> ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ ਬਾਬਾ ਧਯਾਨ ਦਾਸ ਨਿਕਟਵਰਤੀ ਕੈਂਪਸ, ਝੁਨੀਰ (ਮਾਨਸਾ)<br>
                <span style="color: #4B5563;">(Punjabi University Baba Dhian Dass Neighbourhood Campus, Jhuneer, Mansa)</span></p></td>
              <td><p>Dr. Parneet Singh Bhasin (Incharge) </p></td>
              <td><p>0165-9260901</p></td>
              <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=115" target="_blank"><button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a>
              </td>
            </tr>
            
            <tr>
                <td><p>  ਬਿਜ਼ਨਸ ਸਟੱਡੀਜ਼ ਵਿਭਾਗ , ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ ਗੁਰੂ ਕਾਸ਼ੀ ਕੈਂਪਸ ਤਲਵੰਡੀ ਸਾਬੋ<br>
                    <span style="color: #4B5563;">(Punjabi University Guru Kashi Campus Talwandi Sabo, Department of Business Studies)</span>	</p></td>
                  <td><p>Dr. Anand Bansal</p></td>
                  <td><p>9779006733</p></td>
                  <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=148" target="_blank"><button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>

            <tr>
                <td><p> ਯਾਦਵਿੰਦਰਾ ਇੰਜੀਨੀਅਰਿੰਗ ਵਿਭਾਗ, ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ ਗੁਰੂ ਕਾਸ਼ੀ ਕੈਂਪਸ, ਦਮਦਮਾ ਸਾਹਿਬ (ਤਲਵੰਡੀ ਸਾਬੋ)<br>
                    <span style="color: #4B5563;">(Punjabi University Guru Kashi Campus Talwandi Sabo, Yadavindra College of Engineering (YCOE))</span></p></td>
                  <td><p>Dr. Jagtar Singh</p></td>
                  <td><p>01655-220786</p></td>
                  <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=114" target="_blank"><button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a>
                  </button></td>
            </tr>

            <tr>
                <td><p> ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ ਨਿਕਟਵਰਤੀ ਕੈਂਪਸ, ਜੈਤੋ (ਫਰੀਦਕੋਟ)<br>
                    <span style="color: #4B5563;">(Punjabi University Neighbourhood Campus , Jaito, Faridkot)</span></p></td>
                  <td><p>Dr. PARMINDER SINGH TAGGAR</p></td>
                  <td><p>9501766644</p></td>
                  <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=118" target="_blank"> <button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>

            <tr>
                <td><p> ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ, ਬਾਬਾ ਜੋਗੀ ਪੀਰ ਨਿਕਟਵਰਤੀ ਕੈਂਪਸ, ਰੱਲਾ (ਮਾਨਸਾ)<br>
                    <span style="color: #4B5563;">(Punjabi University, Baba Jogi Peer Neighbourhood Campus, Ralla, Mansa)</span></p></td>
                  <td><p>Dr. Sandeep Gupta (Incharge)</p></td>
                  <td><p>9878232600</p></td>
                  <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=117" target="_blank"> <button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>

            
          </tbody>
        </table>
      </div>
    </div>
    
    <footer-component></footer-component>
    
</body>
</html>