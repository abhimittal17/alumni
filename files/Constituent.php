
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
   <script src="https://kit.fontawesome.com/c151818ffe.js" crossorigin="anonymous"></script>
   <link rel="icon" type="image/x-icon" href="favicon.ico">
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
            <div class="col-sm-12">
                <div style="margin: 30px 0;" class="text-center" style=" font-weight:700;"><h2>ਕੰਸਟੀਚੂਐਂਟ ਕਾਲਜ/ Constituent Colleges</h2>
            </div>
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
                <td><p style="white-space: nowrap;"> ਕੰਸਟੀਚੂਐਂਟ ਕਾਲਜ <br> <span style="color: #4B5563;">(Constituent Colleges)</span></p></td>
                  <td><p> Dr. Trishanjeet Kaur</p></td>
                  <td></td>
                  <td><a href="#" target="_blank"> <button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>

            <tr>
                <td><p> ਮਾਤਾ ਸੁੰਦਰੀ ਯੂਨੀਵਰਸਿਟੀ ਕਾਲਜ (ਲੜਕੀਆਂ)<br>
                    <span style="color: #4B5563;">(Mata Sundri University Girls College, Mansa)</span></p></td>
                  <td><p>Smt. KIRAN BALA</p></td>
                  <td></td>
                  <td><a href="http://www.punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=133" target="_blank"> <button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>

            <tr>
                <td><p> ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ ਟੀਪੀਡੀ ਕਾਲਜ, ਰਾਮਪੁਰਾ ਫੂਲ <br>
                    <span style="color: #4B5563;">(Punjabi University T.P.D. College, Rampura Phul.)</span> </p></td>
                  <td><p>DR. BARINDER KAUR</p></td>
                  <td></td>
                  <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=138" target="_blank"> <button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>

            <tr>
                <td><p> ਸ. ਬਲਰਾਜ ਸਿੰਘ ਭੂੰਦੜ ਯਾਦਗਾਰੀ ਯੂਨੀਵਰਸਿਟੀ ਕਾਲਜ, ਸਰਦੂਲਗੜ੍ਹ<br>
                    <span style="color: #4B5563;">(S. Balraj Singh Bhunder Mamorial University College, Sardulgarh)</span></p></td>
                  <td><p>Dr. Lakhvir Singh Gill</p></td>
                  <td><p>9814928741</p></td>
                  <td><a href="http://universitycollegesardulgarh.blogspot.com/p/welcome.html" target="_blank"> <button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>

            <tr>
                <td><p> ਯੂਨੀਵਰਸਿਟੀ ਕਾਲਜ, ਬਹਾਦੁਰਪੁਰ,ਮਾਨਸਾ<br>
                    <span style="color: #4B5563;">(University College, Bahadurpur (Mansa))</span></p></td>
                  <td><p>Dr. Baldev Singh Dodra (Incharge)</p></td>
                  <td><p>98885-63517</p></td>
                  <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=142" target="_blank"> <button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>

            <tr>
                <td><p> ਯੂਨੀਵਰਸਿਟੀ ਕਾਲਜ, ਬਰਨਾਲਾ<br>
                    <span style="color: #4B5563;">(University College, Barnala)</span></p></td>
                  <td><p>Dr. Rakesh Jindal (Principal)</p></td>
                  <td><p>98149-27887</p></td>
                  <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=140" target="_blank"> <button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>

            <tr>
                <td><p> ਯੂਨੀਵਰਸਿਟੀ ਕਾਲਜ, ਬੇਨੜਾ (ਧੂਰੀ)<br>
                    <span style="color: #4B5563;">(University College, Benra (Dhuri))</span></p></td>
                  <td><p>Dr. Sanjiv Dutta</p></td>
                  <td><p>9417082682</p></td>
                  <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=141" target="_blank"> <button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>

            <tr>
                <td><p> ਯੂਨੀਵਰਸਿਟੀ ਕਾਲਜ , ਚੁਨੀ ਕਲਾਂ<br>
                    <span style="color: #4B5563;">(University College, Chuni Kalan)</span></p></td>
                  <td><p>Dr. Jatinder Singh (Incharge)</p></td>
                  <td><p>9878815457</p></td>
                  <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=131" target="_blank"> <button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>

            <tr>
                <td><p> ਯੂਨੀਵਰਸਿਟੀ ਕਾਲਜ, ਢਿਲਵਾਂ<br>
                    <span style="color: #4B5563;">(University College, Dhilwan)</span></p></td>
                  <td><p>Dr. Lakhwinder Singh Rakhra</p></td>
                  <td><p>9501800048</p></td>
                  <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=134" target="_blank"> <button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>

            <tr>
                <td><p> ਯੂਨੀਵਰਸਿਟੀ ਕਾਲਜ , ਘਨੌਰ<br>
                    <span style="color: #4B5563;">(University College, Ghanaur)</span></p></td>
                  <td><p>Dr. Rekha Bhatia</p></td>
                  <td><p>9718304990</p></td>
                  <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=129" target="_blank"> <button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>

            <tr>
                <td><p> ਯੂਨੀਵਰਸਿਟੀ ਕਾਲਜ, ਘੁੱਦਾ (ਬਠਿੰਡਾ)<br>
                    <span style="color: #4B5563;">(University College, Ghudda (Bathinda))</span></p></td>
                  <td><p>Dr. Jaspal Singh (Incharge)</p></td>
                  <td><p>9815105353, 9417922578</p></td>
                  <td><a href="http://www.punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=127" target="_blank"> <button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>

            <tr>
                <td><p> ਯੂਨੀਵਰਸਿਟੀ ਕਾਲਜ, ਜੈਤੋ<br>
                    <span style="color: #4B5563;">(University College, Jaito)</span></p></td>
                  <td><p>Dr. PARMINDER SINGH TAGGAR</p></td>
                  <td><p>9501766644 , ucjaito2014@gmail.com</p></td>
                  <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=139" target="_blank"> <button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>

            <tr>
                <td><p> ਯੂਨੀਵਰਸਿਟੀ ਕਾਲਜ , ਮੀਰਾਂਪੁਰ<br>
                    <span style="color: #4B5563;">(University College, Miranpur)</span></p></td>
                  <td><p>Dr. Surjit Singh Puar (Professor, Incharge)</p></td>
                  <td><p>9855479522</p></td>
                  <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=130" target="_blank"> <button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>

            <tr>
                <td><p> ਯੂਨੀਵਰਸਿਟੀ ਕਾਲਜ , ਮੂਨਕ<br>
                    <span style="color: #4B5563;">(University College, Moonak)</span></p></td>
                  <td><p>Dr. Gurpreet Singh Harika</p></td>
                  <td><p>9463051133</p></td>
                  <td><a href="http://punjabiuniversity.ac.in/Pages/Department.aspx?dsenc=132" target="_blank"> <button style="padding: 5px 15px; background-color: #A3BEEA; border: 0; color:black; border-radius: 50px;" class="btn btn-sm btn-primary"> Website</button></a></td>
            </tr>
        </tbody>
        </table>
        </div>
        <footer-component></footer-component>
</body>
</html>