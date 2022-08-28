<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/c151818ffe.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Navbar -->
    <link rel="stylesheet" href="./home.css" />
    <link rel="stylesheet" href="./Navbar.css" />
    <script src="./app.js"></script>
    <link rel="stylesheet" href="./app.css" />

    <title>PUP Alumni</title>
  </head>
  <body>
    <?php
    require 'partials/_nav.php';
    ?>

    <div style="margin: auto; margin-top: 3rem">
      <div class="container">
        <div class="row reverse">
          <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <h2 class="title">About Punjabi University</h2>
            <p class="title1">
              Punjab Assembly established Punjabi University, Patiala under the
              Punjab Act No. 35 of 1961. Dr. S. Radhakrishnan, the then
              President of India laid foundation of Punjabi University on June
              24, 1962. He preached, "The institutes of higher education share
              the burden of nation-building in a critically important sense. Our
              aim is a strong, free and democratic India where every citizen has
              an equal place and full opportunity for growth. In this task, a
              vast responsibility rests on our universities." Established on
              April 30, 1962 in the erstwhile princely state of Patiala with the
              main objective of furthering the cause of Punjabi language, art
              and literature, Punjabi University has since evolved into the
              largest University in the state. This is the second University in
              the world to be named after a language, the first being the Hebrew
              University of Israel. Its vision is to establish and incorporate a
              University for the advancement of Punjabi studies and development
              of the Punjabi language as a medium of instruction or otherwise for
              providing instruction in humanistic and scientific subjects and
              generally for the promotion of education and research. The
              University started working from its present lush green, pollution
              free, 316 acres campus since 1965.
            </p>
            <!-- <p class="title1">
              Initially, University’s jurisdiction area was fixed as the 16 km
              radius having only 9 colleges. In 1969, it grew into an
              affiliating university, with 43 colleges affiliated to it. Now the
              university caters to the educational needs of nine Districts of
              Punjab. Over the time since its inception, the University has
              evolved into a multi-faceted and multi-faculty educational
              institution for the promotion of higher education and research in
              Humanities, Arts, Sciences, Engineering Languages, Technology and
              many more. Spread over 600 acres of land, its 1500+ teachers are
              imparting instruction and guidance to nearly 14,000+ students in a
              multi-faceted, multi-pronged and multi-faculty environment
              comprising 70+ Teaching and Research Departments/Chairs on its
              Campus, 27 Regional Centre/ Neighbourhood Campuses/Constituent
              Colleges and 274 Colleges affiliated to it.
            </p> -->
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <h2 class="title">ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ ਬਾਰੇ</h2>
            <p class="title1" style="font-size :16.4px;">
          ਪੰਜਾਬ ਵਿਧਾਨ ਸਭਾ ਨੇ 1961 ਦੇ ਪੰਜਾਬ ਐਕਟ ਨੰ. 35 ਅਧੀਨ ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ ਪਟਿਆਲਾ ਦੀ ਸਥਾਪਨਾ 30 ਅਪ੍ਰੈਲ 1962 ਨੂੰ ਕੀਤੀ ਗਈ। ਇਸ ਉਪਰੰਤ ਭਾਰਤ ਦੇ ਰਾਸ਼ਟਰਪਤੀ ਡਾ. ਐਸ. ਰਾਧਾ. ਕ੍ਰਿਸ਼ਨਨ ਵਲੋਂ 24 ਜੂਨ 1962 ਈ. ਵਿਚ ਇਸਦਾ ਨੀਂਹ ਪੱਥਰ ਰੱਖਿਆ ਗਿਆ। ਉਹਨਾਂ ਆਪਣੇ ਭਾਸ਼ਣ ਵਿਚ ਕਿਹਾ ਕਿ ਉੱਚ ਸਿੱਖਿਆ ਦੇਣ ਵਾਲੀਆ ਸੰਸਥਾਵਾਂ ਦੇਸ਼/ਕੌਮ ਦੀ ਉਸਾਰੀ ਵਿਚ ਅਹਿਮ ਯੋਗਦਾਨ ਨਿਭਾਉਂਦੀਆਂ ਹਨ। ਸਾਡਾ ਟੀਚਾ ਲੋਕਤੰਤਰ ਭਾਰਤ ਵਿਚ ਸ਼ਕਤੀਸ਼ਾਲੀ ਅਤੇ ਆਜ਼ਾਦ ਨਾਗਰਿਕ ਬਣਾਉਣਾ ਹੈ ਜਿਹਨਾਂ ਵਿਚ ਵਧਣ-ਫੁੱਲਣ ਦੀ ਬਰਾਬਰ ਸੰਭਾਵਨਾ ਹੋਵੇ। ਇਸ ਕੰਮ ਲਈ ਅਹਿਮ ਜ਼ਿੰਮੇਵਾਰੀ ਯੂਨੀਵਰਸਿਟੀਆਂ ਦੀ ਹੁੰਦੀ ਹੈ। ਇਜ਼ਰਾਈਲ ਦੀ ਹਿਬਰੋ ਯੂਨੀਵਰਸਿਟੀ ਤੋਂ ਬਾਅਦ ਸ਼ਾਹੀ ਰਿਆਸਤ ਪਟਿਆਲਾ ਵਿਚ ਸਥਾਪਤ ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ ਦੁਨੀਆਂ ਦੀ ਅਜਿਹੀ ਦੂਜੀ ਯੂਨੀਵਰਸਿਟੀ ਹੈ, ਜੋ ਭਾਸ਼ਾ ਦੇ ਨਾਮ ‘ਤੇ ਸਥਾਪਿਤ ਕੀਤੀ ਗਈ ਹੈ। ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ ਦਾ ਮੁੱਖ ਮੰਤਵ, ਪੰਜਾਬੀ ਭਾਸ਼ਾ, ਸਾਹਿਤ ਅਤੇ ਸਭਿਆਚਾਰ ਦਾ ਪ੍ਰਚਾਰ-ਪ੍ਰਸਾਰ ਕਰਨਾ ਹੈ। ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ ਕੇਵਲ ਪੰਜਾਬੀ ਭਾਸ਼ਾ ਨੂੰ ਲੈ ਕੇ ਹੀ ਕਾਰਜਸ਼ੀਲ ਨਹੀਂ ਬਲਕਿ ਇਸ ਵਿਚ ਵੱਖ-ਵੱਖ ਗਿਆਨ ਖੇਤਰਾਂ ਨਾਲ ਸਬੰਧਿਤ 70 ਦੇ ਲਗਭਗ ਵਿਭਾਗ ਹਨ, ਜਿਨ੍ਹਾਂ ਵਿੱਚ ਜਿੱਥੇ ਸਾਇੰਸ, ਇੰਜੀਨੀਅਰਿੰਗ, ਸੋਸ਼ਲ ਸਾਇੰਸਜ, ਧਰਮ, ਅਰਥ ਸ਼ਾਸਤਰ, ਮਨੈਜਮੈਂਟ ਆਦਿ ਖੇਤਰਾਂ ਨਾਲ ਸਬੰਧਿਤ ਅਧਿਆਪਨ ਕਾਰਜ ਕਰਵਾਇਆ ਜਾਂਦਾ ਹੈ, ਉਥੇ ਇਨ੍ਹਾਂ ਖੇਤਰਾਂ ਨਾਲ ਜੁੜੇ ਵਿਸ਼ਿਆਂ ਵਿਚ ਐੱਮ.ਫਿਲ ਅਤੇ ਪੀਐੱਚ. ਡੀ ਪੱਧਰ ਦਾ ਖੋਜ ਕਾਰਜ ਵੀ ਕਰਵਾਇਆ ਜਾਂਦਾ ਹੈ। ਇਸ ਯੂਨੀਵਰਸਿਟੀ ਨਾਲ ਸਬੰਧਿਤ ਵਿਦਿਆਰਥੀਆਂ ਨੇ ਵੱਖ-ਵੱਖ ਖੇਤਰਾਂ ਵਿਚ ਵੱਡੀਆਂ ਮੱਲਾਂ ਮਾਰੀਆਂ ਹਨ। ਜਿਵੇਂ ਫਿਲਮ ਅਤੇ ਸੰਗੀਤ ਜਗਤ ਨਾਲ ਸਬੰਧਿਤ ਵੱਡੇ ਚਿਹਰੇ ਇਸ ਯੂਨੀਵਰਸਿਟੀ ਦੇ ਪੈਦਾ ਕੀਤੇ ਹਨ। ਇਸਦੇ ਨਾਲ ਜੁੜੇ ਵਿਦਵਾਨ ਤੇ ਆਲੋਚਕ ਅੰਤਰ-ਰਾਸ਼ਟਰੀ ਪ੍ਰਸਿੱਧੀ ਰੱਖਦੇ ਹੋਏ ਵਿਸ਼ਵ ਪੱਧਰ ਦੀਆਂ ਕਾਨਫ਼ਰੰਸਾਂ ਵਿਚ ਆਪਣੇ ਮੁੱਲਵਾਨ ਵਿਚਾਰ ਪੇਸ਼ ਕਰਦੇ ਰਹੇ ਹਨ। ਪੰਜਾਬੀ ਯੂਨੀਵਰਸਿਟੀ 316 ਏਕੜ ਦੇ ਹਰੇ-ਭਰੇ ਪ੍ਰਦੂਸ਼ਣ ਮੁਕਤ ਕੈਂਪਸ ਵਿੱਚ 1965 ਤੋਂ ਵਿਦਿਆ ਦਾ ਚਾਨਣ ਵੰਡ ਰਹੀ ਹੈ। </p>
        <!-- <p  class="title1" style="font-size:16.5px;">
          ਸ਼ੁਰੂਆਤ ਵਿੱਚ ਯੂਨੀਵਰਸਿਟੀ ਦੇ ਅਧੀਨ 16 ਕਿਲੋਮੀਟਰ ਦੇ ਖੇਤਰ ਵਿੱਚ ਪੈਂਦੇ 9 ਕਾਲਜਾਂ ਨੂੰ ਇਸ ਨਾਲ ਜੋੜਿਆ ਗਿਆ ਅਤੇ ਬਾਅਦ ਵਿੱਚ ਇਹ ਗਿਣਤੀ 43 ਹੋ ਗਈ। ਅੱਜ ਇਹ ਯੂਨੀਵਰਸਿਟੀ ਪੰਜਾਬ ਦੇ ਨੌਂ ਜ਼ਿਲ੍ਹਿਆਂ ਦੀਆਂ ਵਿੱਦਿਅਕ ਲੋੜਾਂ ਸੰਪੂਰਨ ਸਮਰੱਥਾ ਨਾਲ ਪੂਰੀਆਂ ਕਰ ਰਹੀ ਹੈ। ਆਰੰਭ ਤੋਂ ਲੈ ਕੇ ਸਮੇਂ ਦੇ ਨਾਲ-ਨਾਲ ਸਰਵ-ਪੱਖੀ ਅਤੇ ਵਿੱਦਿਆ ਲਈ ਸਥਾਪਤ ਇਹ ਵਿੱਦਿਅਕ ਸੰਸਥਾ, ਉਚੇਰੀ ਵਿੱਦਿਆ ਦੇ ਪਾਸਾਰ, ਮਾਨਵਤਾ ਭਲਾਈ, ਹੁਨਰਾਂ, ਵਿਗਿਆਨਾਂ, ਇੰਜੀਨੀਅਰਿੰਗ ਭਾਸ਼ਾਵਾਂ, ਤਕਨਾਲੋਜੀ ਅਤੇ ਹੋਰ ਬਹੁਤ ਸਾਰੇ ਵਿਸ਼ਿਆਂ ਦੇ ਮਿਆਰੀ ਖੋਜ ਕਾਰਜਾਂ ਲਈ ਇੱਕ ਵਰਦਾਨ ਸਿੱਧ ਹੋਈ ਹੈ। 600 ਏਕੜ ਜ਼ਮੀਨ ਤੇ ਫੈਲੀ ਹੋਈ ਇਹ ਯੂਨੀਵਰਸਿਟੀ ਜਿਸ ਵਿਚ 1500+ ਦੇ ਲਗਭਗ ਯੋਗ ਅਧਿਆਪਕ 14,000+ ਵਿਦਿਆਰਥੀਆਂ ਨੂੰ ਬਹੁ-ਪੱਖੀ, ਬਹੁ-ਖੋਜੀ ਅਤੇ ਬਹੁ-ਪ੍ਰਤਿਭੀ ਸਿੱਖਿਆ ਬਹੁਤ ਹੀ ਢੁਕਵੇਂ ਵਾਤਾਵਰਨ ਵਿੱਚ ਪਰਦਾਨ ਕਰ ਰਹੇ ਹਨ, ਕੈਂਪਸ ਵਿੱਚ 70+ ਸਿੱਖਿਆ ਅਤੇ ਖੋਜ ਵਿਭਾਗ/ਚੇਅਰਾਂ ਹਨ, ਇਸ ਨਾਲ 27 ਖੇਤਰੀ ਕੇਂਦਰ/ ਨੇਬਰਹੁੱਡ ਕੈਂਪਸ/ਕਾਨਸਟੀਚੀਊਐਂਟ ਕਾਲਜ ਅਤੇ 274 ਕਾਲਜ ਜੁੜੇ ਹੋਏ ਹਨ। 
        </p> -->
   </div>


   <div class="d-flex justify-content-center" >
              <a class="btn-primary b1" href="RegisterPage.php" role="button" style="border-radius: 8px;padding: 0.6rem 1.2rem;">Become A Member (ਮੈਂਬਰ ਬਣੋ)</a>
            </div>

        </div>
        <div class="row d-flex">
          <div class="col-lg-4 col-md-4 col-sm-12 col-12">
        <a href="http://punjabiuniversity.ac.in/Pages/Page.aspx?dsenc=vc" target="_blank" style="text-decoration:none"> <div class="message-container">
             
              <div class="user" >
                <img
                  src="Imagehome/VC.jpeg"
                  alt="user"
                  class="user-image"
                />
                <div class="user-details">
                  <h4 class="username">Vice Chancellor</h4>
                  <p class="role">Prof. Arvind</p>
                </div>
              </div>
            </div></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-12">
     <a href="https://www.pbidde.org" target="_blank" style="text-decoration:none">     <div class="message-container ">

              <div class="user d-flex justify-content-center">
                <img
                  src="Imagehome/dean.jpeg"
                  
                  alt="user"
                  class="user-image"
                />
                <div class="user-details">
                  <h4 class="username1">Dean Alumni</h4>
                  <p class="role">Dr. Satnam Singh Sandhu</p>
                  <p class="role">(Professor)</p>
                </div>
              </div>
            </div></a>  
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-12">
   <a href="https://csepup.ac.in/pdf/Profile_27.pdf?" target="_blank" style="text-decoration:none">       
    <div class="message-container">
            
              <div class="user d-flex justify-content-center">
                <img
                  src="Imagehome/dws.png"
                  alt="user"
                  class="user-image"
                />
                <div class="user-details">
                  <h4 class="username">Co-coordinator</h4>
                  <p class="role">Dr. Williamjeet Singh</p>
                   <p class="role">(Assistant Professor)</p>
                </div>
              </div>
            </div></a> 
          </div>
         
        </div>
      </div>

    <footer-component></footer-component>
  </body>
  <script src="./index.js"></script>
</html>