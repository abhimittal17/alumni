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
    <link rel="stylesheet" href="./index.css" />
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
            <p class="title1">
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
            </p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="d-flex audio1">
              <h2 class="title" style="padding-right: 5px">University Dhuni</h2>
              <audio controls style="width: 65%">
                <source src="audio/pup.mp3" type="audio/mp3" />
                Your browser does not support the audio element.
              </audio>
            </div>
            <!-- <video autoplay loop controls width="640" height="480">
                <source type="video/mp4" src="Videos/promotion.mp4">
                </video> -->
            <iframe
              width="100%"
              style="border-radius: 10px"
              height="85%"
              src="https://www.youtube.com/embed/WYRf33XU2os?playlist=WYRf33XU2os&loop=1"
            >
            </iframe>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-lg-9 col-md-9 col-sm-12 col-12">
            <div class="message-container reverse">
              <p class="message">
                I am privileged and honoured to have been given the opportunity
                of serving as Vice Chancellor of Punjabi University, Patiala,
                which is amongst the premier institutions of higher learning.
                The University was established on April 30, 1962 with a mandate
                to promote Punjabi language, literature and culture, and was the
                second university in the world to have been named after a
                language. It has since emerged as a key institution for
                imparting high-quality education and to perform cutting-edge
                research in the areas of life sciences, physical sciences,
                medicine, engineering and technology, business studies, law,
                social sciences, languages, education, information sciences, and
                arts and culture. It is a matter of great pride that the
                National Assessment and Accreditation Council (NAAC) has awarded
                the University a Five Star grade in the first cycle (2002-07)
                and A grade in the second (2008-13) and the third (2016-23)
                cycles. Currently, the University has 65 teaching and research
                Departments, 275 affiliated colleges, 5 neighborhood campuses,
                14 constituent colleges, 4 regional centres.<button
                  type="button"
                  class="btn"
                  style="background-color: rgb(9, 28, 72)"
                >
                  <a
                    href="http://www.punjabiuniversity.ac.in/Pages/Page.aspx?dsenc=vc"
                    style="color: white; text-decoration: none"
                  >
                    Know More</a
                  >
                </button>
              </p>
              <div class="user" >
                <img
                  src="Imagehome/VC.jpeg"
                  alt="user"
                  class="user-image"
                />
                <div class="user-details">
                  <h4 class="username">Vice Chancellor Message</h4>
                  <p class="role">Prof. Arvind</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-12">
            <iframe
              width="100%"
              style="border-radius: 10px; margin: 20px auto"
              height="90%"
              src="https://www.youtube.com/embed/WYRf33XU2os?start=282&end=374;"
            >
            </iframe>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="message-container1 ">

              <div class="user1 d-flex justify-content-center">
                <img
                  src="Imagehome/dean.jpeg"
                  
                  alt="user"
                  class="user-image1"
                />
                <div class="user-details1">
                  <h4 class="username1">Dean Alumni</h4>
                  <p class="role1">Dr. Satnam Singh Sandhu</p>
                  <p class="role1">(Professor)</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="message-container1 reverse">
            
              <div class="user1 d-flex justify-content-center">
                <img
                  src="Imagehome/dws.png"
                  alt="user1"
                  class="user-image1"
                />
                <div class="user-details1">
                  <h4 class="username1">Co-coordinator</h4>
                  <p class="role1">Dr. Williamjeet Singh</p>
                   <p class="role1">(Assistant Professor)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container" style="margin-top: 50px">
        <a id="aims">
          <h2 class="title py-4" style="text-align: center">
            Aims and Objectives
          </h2>
        </a>
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6">
            <img src="Imagehome/1.jpeg" class="img1" alt="image" />
            <img src="Imagehome/2.jpeg" class="img1" alt="image" />
            <img src="Imagehome/3.jpeg" class="img1" alt="image" />
            <img src="Imagehome/4.jpeg" class="img1" alt="image" />
            <img src="Imagehome/5.jpeg" class="img1" alt="image" />
            <img src="Imagehome/8.jpeg" class="img1" alt="image" />
            <img src="Imagehome/9.jpeg" class="img1" alt="image" />
            <img src="Imagehome/11.jpeg" class="img1" alt="image" />
            <img src="Imagehome/13.jpeg" class="img1" alt="image" />
            <img src="Imagehome/14.jpeg" class="img1" alt="image" />
            <img src="Imagehome/15.jpeg" class="img1" alt="image" />
            <img src="Imagehome/16.jpeg" class="img1" alt="image" />
            <img src="Imagehome/17.jpeg" class="img1" alt="image" />
            <img src="Imagehome/18.jpeg" class="img1" alt="image" />
            <img src="Imagehome/20.jpeg" class="img1" alt="image" />
            <img src="Imagehome/21.jpeg" class="img1" alt="image" />
            <img src="Imagehome/22.jpeg" class="img1" alt="image" />
            <img src="Imagehome/23.jpeg" class="img1" alt="image" />
            <img src="Imagehome/25.jpeg" class="img1" alt="image" />
            <img src="Imagehome/6.jpeg" class="img1" alt="image" />
            <img src="Imagehome/7.jpeg" class="img1" alt="image" />
            <img src="Imagehome/12.jpeg" class="img1" alt="image" />
            <img src="Imagehome/13.jpeg" class="img1" alt="image" />
            <img src="Imagehome/19.jpeg" class="img1" alt="image" />
            <img src="Imagehome/2.jpeg" class="img1" alt="image" />
          </div>
          <div class="col-lg-3">
            <dl style="font-size: 19px">
              <hr />
              <dd>
                1. To foster a spirit of brotherhood and comradeship amongst the
                alumni of the University.
              </dd>
              <hr />

              <dd>
                2. To arrange and collect funds for the development of the
                University.
              </dd>
              <hr />
              <dd>3. To arrange social and cultural functions.</dd>
              <hr />
              <dd>
                4. To further the interests of the Punjabi University, Patiala
                in general.
              </dd>
            </dl>
          </div>

          <div class="col-lg-3">
            <dl style="font-size: 19px">
              <hr />
              <dd>
                5. To publish literature, papers and journals for the
                fulfillment of the objects of the Association.
              </dd>
              <hr />
              <dd>
                6. To do all other acts in furtherance of the objects of the
                association.
              </dd>
              <hr />

              <dd>
                7. To look after the interest of the alumni of the University.
              </dd>
              <hr />
              <dd>8. To open branches of the Association.</dd>
            </dl>
          </div>
        </div>
      </div>

      <div class="container-fluid" style="margin-top: 50px">
        <h1 class="title3 py-4" style="text-align: center">
          International Alumni Chapter
        </h1>
        <div class="row">
          <div class="col-md-6">
            <h1 class="title2">USA</h1>
            <img src="Imagehome/26.jpeg" class="chapter1" alt="image" />
          </div>
          <div class="col-md-6 chapter2">
            <h1 class="title2">Canada</h1>
            <img src="Imagehome/27.jpeg" class="chapter1" alt="image" />
          </div>
        </div>
      </div>

      <div class="container" style="margin-top: 70px" id="duties">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="title3 py-4" style="text-align: center">
              Duties and Functions of Office Bearers
            </h1>
            <div class="faq">
              <input id="faq-a" type="checkbox" />
              <label for="faq-a">
              <p class="faq-heading">CHIEF PATRON</p>
              <div class="faq-arrow"></div>
              <ul>
                <li>
                  The Chief Patron shall preside over the meetings of the
                  Association, the meetings of the Executive Council and all
                  other functions that may be organised by the Association.
                </li>
                <li>
                  The Chief Patron shall be the custodian of the property and
                  interests of the Association.
                </li>
                <li>
                  He shall call special meetings of the Executive
                  Council/General Body of the Association if a written
                  requisition  is signed by at least 7 members in case of the Executive
                  Council and 30 members in case of the Association is presented
                  to him.
                </li>
              </ul>
              </label>
              <input id="faq-b" type="checkbox" />
              <label for="faq-b">
              <p class="faq-heading">PRESIDENT/SENIOR VICE-PRESIDENT</p>
              <div class="faq-arrow"></div>
              <ul>
                <li>
                  The President shall perform the duties and functions of the
                  Chief Patron in his absence. The Senior Vice-President shall
                  perform the duties and functions of the President in his
                  absence.
                </li>
                <li>
                  President/Senior Vice-President shall perform such other
                  duties and functions as may be entrusted to him by the Chief
                  Patron or the Executive Council.
                </li>
              </ul>
              </label>

              <input id="faq-c" type="checkbox" />
              <label for="faq-c">
              <p class="faq-heading">GENERAL SECRETARY</p>
              <div class="faq-arrow"></div>
              <ul>
                <li>
                  He will be the custodian of all the records and documents of
                  the Association.
                </li>
                <li>
                  He will be responsible for the safe custody of the funds of
                  the Association and will operate bank accounts jointly with
                  either Secretary or Joint-Secretary-cum- treasurer on behalf
                  of the Association.
                </li>
                <li>
                  He will call and arrange meetings of the Executive Council and
                  the Association.
                </li>
                <li>
                  He will record the minutes of the meetings of the Executive
                  Council and the Association.
                </li>
                <li>
                  He will represent the Association in all legal proceedings and
                  sign all legal documents on behalf of the Association.
                </li>
                <li>
                  He will maintain an up-to-date register of members and of all
                  subscriptions and donations.
                </li>
                <li>
                  He will maintain a property register and all such registers as
                  may be necessary in connection with the work of the
                  Association.
                </li>
              </ul>
              </label>

              <input id="faq-d" type="checkbox" />
              <label for="faq-d"> 
              <p class="faq-heading">SECRETARY</p>
              <div class="faq-arrow"></div>
              <ul>
                <li>
                  He will assist General Secretary in the administrative
                  matters.
                </li>
                <li>
                  He will also assist General Secretary in conducting activities
                  of the Association.
                </li>
              </ul>
              </label>

              <input id="faq-e" type="checkbox" />
              <label for="faq-e">
              <p class="faq-heading">JOINT SECRETARY-CUM-TREASURER</p>
              <div class="faq-arrow"></div>
              <ul>
                <li>
                  He will assist the General Secretary in the discharge of his
                  duties and functions regarding finances/accounts of the
                  Association.
                </li>
                <li>
                  He will perform such other duties and functions as may be
                  entrusted to him by the Executive Council.
                </li>
              </ul>
              </label>
            </div>
          </div>
        </div>
      </div>

      <h1 class="title3" style="text-align: center; padding: 2rem">
        Previous Vice Chancellor's of Punjabi University, Patiala
      </h1>
      <div class="container-fluid" style="overflow-x: hidden">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="gallery m-auto px-2" style="height: 265px">
              <a target="_blank" href="Imagehome/v11.jpeg">
                <img src="Imagehome/v11.jpeg" />
              </a>
              <div class="desc">Dr.Bhai Jodh Singh <br />(1962-1965)</div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="gallery m-auto px-2" style="height: 265px">
              <a target="_blank" href="Imagehome/v6.jpeg">
                <img src="Imagehome/v6.jpeg" />
              </a>
              <div class="desc">S.Kirpal Singh Narang <br />(1965-1975)</div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="gallery m-auto px-2" style="height: 265px">
              <a target="_blank" href="Imagehome/v3.jpeg">
                <img src="Imagehome/v3.jpeg" />
              </a>
              <div class="desc">Mrs.I.K.Sandhu <br />(1975-1977)</div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="gallery m-auto px-2" style="height: 265px">
              <a target="_blank" href="Imagehome/v4.jpeg">
                <img src="Imagehome/v4.jpeg" />
              </a>
              <div class="desc">
                Dr.Amrik Singh <br />
                (1977-1979)
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="gallery m-auto px-2" style="height: 265px">
              <a target="_blank" href="Imagehome/v12.jpeg">
                <img src="Imagehome/v12.jpeg" />
              </a>
              <div class="desc">
                Dr.Bhagat Singh <br />
                (1979-1982, 1986-1989)
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="gallery m-auto px-2" style="height: 265px">
              <a target="_blank" href="Imagehome/v5.jpeg">
                <img src="Imagehome/v5.jpeg" />
              </a>
              <div class="desc">
                Dr.S.S.Johi <br />
                (1983-1986)
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="gallery m-auto px-2" style="height: 265px">
              <a target="_blank" href="Imagehome/v8.jpeg">
                <img src="Imagehome/v8.jpeg" />
              </a>
              <div class="desc">
                Dr.H.K.Manmohan Singh <br />
                (1989-1993)
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="gallery m-auto px-2" style="height: 265px">
              <a target="_blank" href="Imagehome/v2.jpeg">
                <img src="Imagehome/v2.jpeg" />
              </a>
              <div class="desc">
                Dr.Joginder Singh Pur <br />
                (1993-1999)
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="gallery m-auto px-2" style="height: 265px">
              <a target="_blank" href="Imagehome/v9.jpeg">
                <img src="Imagehome/v9.jpeg" />
              </a>
              <div class="desc">
                Dr.Jasir Singh Ahluwalia <br />
                (1999-2002)
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="gallery m-auto px-2" style="height: 265px">
              <a target="_blank" href="Imagehome/v10.jpeg">
                <img src="Imagehome/v10.jpeg" />
              </a>
              <div class="desc">
                S.Swar Singh Boparai <br />
                (2002-2007)
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="gallery m-auto px-2" style="height: 265px">
              <a target="_blank" href="Imagehome/v7.jpeg">
                <img src="Imagehome/v7.jpeg" />
              </a>
              <div class="desc">
                Dr.Jaspal Singh <br />
                (2007-2017)
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-2">
            <div class="gallery m-auto px-2" style="height: 265px">
              <a target="_blank" href="Imagehome/v13.jpeg">
                <img src="Imagehome/v13.jpeg" />
              </a>
              <div class="desc">
                Prof. B.S Ghuman <br />
                (2017-2020)
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container" style="margin-top: 70px">
        <div class="row">
          <h1 class="title3 py-4" style="text-align: center">Notable Alumni</h1>

          <section class="testimonials">
            <div class="testSlide-container">
              <img
                src="http://cdn.onlinewebfonts.com/svg/img_109185.png"
                alt="left"
                id="slide-left"
                class="arrow"
              />
              <section class="testContainer" id="testSlider">
                <div class="testThumbnail">
                  <div style="background-color: #b8dded; border-radius: 10px">
                    <img src="Imagehome/A3.jpeg" alt="person-1" />
                  </div>
                  <div class="person-details">
                    <h5 style="padding-top:.5rem">Prof.  Harbans Singh</h5>
                    <p>
                    Prof.  Harbans Singh was an educationist, administrator, scholar
                      and  editor-in-chief of the Encyclopaedia of Sikhism.
                      He was respected for his contributions to Sikh scholarship
                      and Punjabi literary studies and had a vital and pervasive
                      influence in the field of religious studies, with special
                      reference to Sikhism.
                    </p>
                  </div>
                </div>
                <div class="testThumbnail">
                  <div style="background-color: #b8dded; border-radius: 10px">
                    <img src="Imagehome/A4.jpeg" alt="person-1" />
                  </div>
                  <div class="person-details">
                    <h5 style="padding-top:.5rem">Dr. Ganda Singh</h5>
                    <p>
                      Dr. Ganda Singh was the founder of the Department and was a
                      pioneer in the research on Punjab and Sikhs. Besides
                      writing a number of books, Dr Ganda Singh had collected
                      sources available on Punjab history in many languages.
                    </p>
                  </div>
                </div>
                <div class="testThumbnail">
                  <div style="background-color: #b8dded; border-radius: 10px">
                    <img src="Imagehome/a11.jpeg" alt="person-1" />
                  </div>
                  <div class="person-details">
                    <h5 style="padding-top:.5rem">Dr. Jodh Singh</h5>
                    <p>
                    Dr.  Jodh Singh was also editor-in-chief of the Sikh Encyclopaedia
                      published by the university. He had joined Punjabi
                      University as Professor at the Department of Sikh
                      Encyclopaedia. He worked on  the Sikh  philosophy and
                      Gurbani. He also translated the ‘waran’ written by Bhai
                      Gurdas into English.
                    </p>
                  </div>
                </div>
                <div class="testThumbnail">
                  <div style="background-color: #b8dded; border-radius: 10px">
                    <img src="Imagehome/A1.jpeg" alt="person-1" />
                  </div>
                  <div class="person-details">
                    <h5 style="padding-top:.5rem">Dr. Dalip Kaur Tiwana</h5>
                    <p>
                      Dr. Dalip Kaur Tiwana was a novelist and short-story writer of
                      contemporary Punjabi literature. She won awards, both
                      regional and national, and was a widely translated author.
                      She retired as Professor of Punjabi, and Dean, Faculty of
                      Languages, from Punjabi University, Patiala.
                    </p>
                  </div>
                </div>
                <div class="testThumbnail">
                  <div style="background-color: #b8dded; border-radius: 10px">
                    <img src="Imagehome/A2.jpeg" alt="person-1" />
                  </div>
                  <div class="person-details">
                    <h5 style="padding-top:.5rem">Prof.   Narinder Singh Kapoor</h5>
                    <p>
                    Prof.  Narinder Singh Kapoor is an Indian writer from
                      Punjab. His writings are about social, cultural and
                      psychological issues. He lives in Patiala, Punjab. He
                      graduated with his M.A. in English from the Punjabi
                      University, Patiala.
                    </p>
                  </div>
                </div>

                <div class="testThumbnail">
                  <div style="background-color: #b8dded; border-radius: 10px">
                    <img src="Imagehome/A5.png" alt="person-1" />
                  </div>
                  <div class="person-details">
                    <h5 style="padding-top:.5rem">Prof.  Baldev Singh Sood</h5>
                    <p>
                      Prof. B.S. Sood served Punjabi University ,Patiala for
                      25 years. After his retirement, he continued to serve as
                      Director Nuclear Science Laboratories for another seven
                      years. The Radio-isotopeDivision of BARC, (DAE) gave
                      special permission to use Radio Isotopes for research in
                      the projects sanctioned by DAE.
                    </p>
                  </div>
                </div>

                <div class="testThumbnail">
                  <div style="background-color: #b8dded; border-radius: 10px">
                    <img src="Imagehome/A6.jpeg" alt="person-1" />
                  </div>
                  <div class="person-details">
                    <h5 style="padding-top:.5rem">Dr. Surjit Patar</h5>
                    <p>
                    Dr. Surjit Patar is a Punjabi language writer and poet of
                      Punjab, India. His poems enjoy immense popularity with the
                      general public and have won high acclaim from critics. He
                      has translated into Punjabi the three tragedies of
                      Federico García Lorca, the play Nagmandala of Girish
                      Karnad, and poems of Bertolt Brecht and Pablo Neruda.
                    </p>
                  </div>
                </div>
                <div class="testThumbnail">
                  <div style="background-color: #b8dded; border-radius: 10px">
                    <img src="Imagehome/A9.png" alt="person-1" />
                  </div>
                  <div class="person-details">
                    <h5 style="padding-top:.5rem">Prof.  S.S. Bir</h5>
                    <p>
                      Prof. S.S. Bir was a renowned Evolutionary Bota- NIST
                      and was known for his comprehensive Biosystematics and
                      Phytogeographic studies in more than 500 species of higher
                      vascular plants of India. These include Ferns and fern
                      allies from different floristic regions of India
                      representing Himalaya, Central India and South India.
                    </p>
                  </div>
                </div>
                <div class="testThumbnail">
                  <div style="background-color: #b8dded; border-radius: 10px">
                    <img src="Imagehome/A10.png" alt="person-1" />
                  </div>
                  <div class="person-details">
                    <h5 style="padding-top:.5rem">Prof.  Sanjiv Puri</h5>
                    <p>
                      Prof. Sanjiv Puri worked in Investigations of Photon-atom
                      interaction processes in x-ray energy region using
                      synchrotron radiation. Investigation of Ion-atom
                      interaction processes for low velocity projectile impact
                      using ECR source.
                    </p>
                  </div>
                </div>
              </section>
              <img
                src="http://cdn.onlinewebfonts.com/svg/img_71708.png"
                alt="right"
                id="slide-right"
                class="arrow"
              />
            </div>
          </section>
        </div>
      </div>
      <div class="container">
        <h1 class="title3 py-4" style="text-align: center">
          Research Department and Nodal Center Information
        </h1>

<div class="d-flex">
          <div
            class="row gap-3 m-auto justify-content-center align-items-center"
          >
            <div class="row col-md-4 col-lg-2">
              <a
                type="button"
                class="btn  button__pages-link"
                href="http://www.punjabiuniversity.ac.in/Pages/Pages.aspx?dsenc=%E0%A8%A8%E0%A8%BF%E0%A8%95%E0%A8%9F%E0%A8%B5%E0%A8%B0%E0%A8%A4%E0%A9%80%20%E0%A8%95%E0%A9%88%E0%A8%82%E0%A8%AA%E0%A8%B8%20Neighbourhood%20Campuses"
             >Neighbourhood Campuses</a
              >
            </div>
            <div class="row col-md-4 col-lg-2">
              <a
                type="button"
                class="btn button__pages-link"
                href="http://punjabiuniversity.ac.in/Pages/Pages/Pages.aspx?dsenc=ਖੇਤਰੀ%20ਕੇਂਦਰ%20Regional%20Centres"
                >Regional Centres</a
              >
            </div>
            <div class="row col-md-4 col-lg-3">
              <a
                type="button"
                class="btn button__pages-link"
                href="http://punjabiuniversity.ac.in/Pages/FacultyDepartments.aspx#"
                >Teaching Departments</a
              >
            </div>
            <div class="row col-md-4 col-lg-3">
              <a
                type="button"
                class="btn button__pages-link"
                href="http://punjabiuniversity.ac.in/Pages/Page.aspx?dsenc=irc"
                >Interdisciplinary  Research Centres</a
              >
            </div>
            <div class="row col-md-4 col-lg-2">
              <a
                type="button"
                class="btn button__pages-link"
                href="http://punjabiuniversity.ac.in/Pages/Pages.aspx?dsenc=ਕੰਸਟੀਚੂਐਂਟ%20ਕਾਲਜ%20Constituent%20Colleges"
                >Constituent Colleges</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer-component></footer-component>
  </body>
  <script src="./index.js"></script>
</html>