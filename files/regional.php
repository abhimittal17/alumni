<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<link rel="icon" type="image/x-icon" href="favicon.ico">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/c151818ffe.js" crossorigin="anonymous"></script>
  
  <!-- Navbar -->
  <link rel="stylesheet" href="./Navbar.css">
  <script src="./app.js" ></script>
  <link rel="stylesheet" href="./app.css">

</head>
<body>
  <?php
    require 'partials/_nav.php';
    ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12 ">
      <div class="text-center">
        <h2 style="margin: 30px 0; font-weight:700;">ਖੇਤਰੀ ਕੇਂਦਰ Regional Centres</h2>  
      </div> 
    </div>     
  </div>  
  <div class="row">
    <div class="col-sm-12">
      <table class="table" style="border: 1px solid #dee2e6;">
        <thead>
          <tr style="background-color: #011D4B; color:#EACC15;">
            <th>Campus/ ਕੈਂਪਸ</th>
            <th>Incharge Name/ ਇੰਚਾਰਜ ਨਾਮ</th>
            <th>Contact/ ਸੰਪਰਕ</th>
            <th>Website</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <p>ਨਵਾਬ ਸ਼ੇਰ ਮੁਹੰਮਦ ਖ਼ਾਨ ਇੰਸਟੀਚਿਊਟ ਆਫ਼ ਐਡਵਾਂਸਡ ਸੱਟਡੀਜ਼ ਇਨ ਉਰਦੂ, ਪਰਸ਼ੀਅਨ ਐਂਡ ਅਰੈਬਿਕ, ਮਾਲੇਰਕੋਟਲਾ<br>
              <span style="color: #4B5563;">(Nawab Sher Mohammad Khan Institute of Advanced Studies in Urdu, Persian and Arabic, Malerkotla)</span></p>
            </td>
            <td>Dr. Rubina</td>
            <td>01675-250883</td>
            <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=123" target="_blank"><button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button> </a>
                     </td>
          </tr>

          <tr>
            <td>
              <p>ਸੂਚਨਾ ਤਕਨਾਲੋਜੀ ਅਤੇ ਪ੍ਰਬੰਧਨ ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ ਖੇਤਰੀ ਕੇਂਦਰ, ਮੋਹਾਲੀ<br>
              <span style="color: #4B5563;">(Punjabi University Regional Centre for Information Technology and Management, Mohali)</span></p>
            </td>
            <td>Dr. Ambika Bhatia, HOD</td>
            <td>0172-5094196</td>
            <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=121" target="_blank"><button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a>
                     </td>
          </tr>

          <tr>
            <td>
              <p>ਸਿੱਖਿਆ ਵਿਭਾਗ, ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ ਖੇਤਰੀ ਕੇਂਦਰ, ਬਠਿੰਡਾ<br>
              <span style="color: #4B5563;">(Nawab Sher Mohammad Khan Institute of Advanced Studies in Urdu, Persian and Arabic, Malerkotla)</span></p>
            </td>
            <td>Dooley</td>
            <td>john@example.com</td>
            <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=123" target="_blank"><button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button> </a>
            </td>
          </tr>

          <tr>
            <td>
              <p>ਨਵਾਬ ਸ਼ੇਰ ਮੁਹੰਮਦ ਖ਼ਾਨ ਇੰਸਟੀਚਿਊਟ ਆਫ਼ ਐਡਵਾਂਸਡ ਸੱਟਡੀਜ਼ ਇਨ ਉਰਦੂ, ਪਰਸ਼ੀਅਨ ਐਂਡ ਅਰੈਬਿਕ, ਮਾਲੇਰਕੋਟਲਾ<br>
              <span style="color: #4B5563;">(Punjabi University Regional Centre, Bathinda, Department of Education)</span></p>
            </td>
            <td>Dr. Rakshinder Kaur, Associate Professor & Head</td>
            <td>0164-2210333(O)</td>
            <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=150" target="_blank"><button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button> </a>
            </td>
          </tr>

          <tr>
            <td>
              <p>ਕਨੂੰਨ ਵਿਭਾਗ, ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ ਖੇਤਰੀ ਕੇਂਦਰ, ਬਠਿੰਡਾ<br>
              <span style="color: #4B5563;">(Punjabi University Regional Centre, Bathinda, Department of Law)</span></p>
            </td>
            <td>Dr. Nimmi (Incharge)</td>
            <td>0164-5007210</td>
            <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=149" target="_blank"><button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button> </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<footer-component></footer-component>
</body>
</html>
