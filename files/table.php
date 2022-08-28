<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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


  </head>
  <body>
  <?php
    require 'partials/_nav.php';
    ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
            <div style="margin: 30px 0;" class="text-center"><h2 style=" font-weight:700;">Alumni List</h2>
        </div>
        <table
          class="table table-bordered table-responsive "
          style="border: 1px solid #dee2e6; ">
          <tbody>
            <tr style="background-color: #011d4b; color: #eacc15;text-align:center;" >
              <th scope="col">Name</th>
              <th scope="col">Course/ Department Details</th>
              <th scope="col">Contact Info</th>
              <th scope="col">Email-Id</th>
              <th scope="col">Address</th>
            </tr>
            <tr>
              <td style="width: 20%">SH. SWARAN SINGH BOPARAI</td>
              <td>khalsa college amritsar</td>
              <td>0175-2286682 , 0175-22824</td>
              <td>vc@pbi.ac.in , boparai@pbi.ac.in</td>
              <td></td>
            </tr>
            <tr>
              <td style="width: 20%">SH. GURCHARAN SINGH VIRK</td>
              <td>M.A Eng, P.G. Dip. in Lingustics/1967-1970</td>
              <td>0172-2602739, 01763-23218</td>
              <td></td>
              <td># 1552, Sector 36-D, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">MS RAVNEET KAUR SMAGH</td>
              <td>Zoology</td>
              <td>0164-3292458, 9780495292</td>
              <td>sweety_chilly303@yahoo.com</td>
              <td>Model Town, Phase-II, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SH CHARAN GILL</td>
              <td>Punjabi Deptt.</td>
              <td>2280006</td>
              <td>charansinghgill@yahoo.co.in</td>
              <td>94-C, Professor Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. RAMINDERJIT SINGH WAS</td>
              <td>LL.B, M.J.M.C/1990-1992</td>
              <td>(R) 0175-2201195 (O) 0172</td>
              <td></td>
              <td># 1158-59/3, CHHOTI BARANDARI, BEAT 8, PATIALA.</td>
            </tr>
            <tr>
              <td style="width: 20%">SH AJIT PAL SINGH</td>
              <td>M.A./Pol. Sci./2003-2005</td>
              <td>01679235047, 9988042733</td>
              <td></td>
              <td>
                H.No. B-XIII/1096, Nanaksar Bye ;Pass Road, Barnala, Distt.
                Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS MANISHA BANSAL</td>
              <td>M.Sc./Chemistry</td>
              <td>2227741</td>
              <td>jindal_manisha@yahoo.com</td>
              <td>44, Mansahia Colony, 21 No. Phatak, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH JASPREET SINGH</td>
              <td>M.P.Ed</td>
              <td>9915440012</td>
              <td></td>
              <td>VPO Bahadurgarh, DIST. &amp; TEH.PATIALA</td>
            </tr>
            <tr>
              <td style="width: 20%">MS AANCHAL MIDHA</td>
              <td>MCA</td>
              <td>9873119959</td>
              <td></td>
              <td>303-B, Bhai Randhir Singh Nagar, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">MS CHARAN KAMAL SEKHON</td>
              <td></td>
              <td>2355321, 9814100761</td>
              <td>charankamal_sekhon@yahoo.co.in</td>
              <td>81/3, Manjit Nagar, Bhadson Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. SHVETA</td>
              <td>M.Sc, M.Phil</td>
              <td>01883-237693, 9464482670</td>
              <td>shvetakaushal07@gmail.com</td>
              <td>
                H.No. 1580 U-T3, Sector-3, TALWARA T/SHIP.,DISTT. HOSHIARPUR
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. JAGWINDER S. SAINI</td>
              <td>M.A.</td>
              <td>647-284-6565</td>
              <td>jsaini68@hotmail.com</td>
              <td>80 WINTER FOLD DR. BRAMPTON L6V-3T2, CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">S. KULDIP SINGH DHILLON</td>
              <td>LL.B., M.Lib.&amp;Inf.Sc., Assistant Librarian/1984-1988</td>
              <td>2286559, 98155-34185</td>
              <td></td>
              <td>
                H.No. 282, W. No. 13, KHANNA ROAD, SAMRALA, DISTT. LUDHIANA
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. BALWINDER SINGH THEKE</td>
              <td>Law/1983-1984</td>
              <td>(R) 2283740, 0175-380408,</td>
              <td></td>
              <td># 195, Urban Estate, Phase-I, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH CHARANJIT SINGH</td>
              <td>M.Phil, Anth. Linguistics,1985-1990</td>
              <td>2772572, 2602503,2603379</td>
              <td></td>
              <td>
                Yuva Bhawan, Sec. 42-A, Chandigarh, H. No. 2572, 19-C,
                Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. GURMEET SINGH</td>
              <td>M.A./Pbi.</td>
              <td>9501855119</td>
              <td>gurmeetpup@gmail.com</td>
              <td>V.P.O. SADHARAN PUR, TEH. PATRAN, PATIALA</td>
            </tr>
            <tr>
              <td style="width: 20%">MS AMANDEEP KAUR</td>
              <td>M.A./Pol. Sci./2004-2006</td>
              <td>9888618491, 01637-240432</td>
              <td></td>
              <td>Vill. &amp; P.O. Lambi, Teh. Malout, Distt. Muktsar</td>
            </tr>
            <tr>
              <td style="width: 20%">SH RAJVINDER SINGH</td>
              <td>M.P.Ed</td>
              <td>9888809135</td>
              <td></td>
              <td>PO &amp; VPO Dhanaula, Dist. Branala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR KEWAL KRISHAN</td>
              <td>Ph.D./Zoology</td>
              <td>9418012122</td>
              <td>kkrishan12@yahoo.co.in</td>
              <td>
                Opp. M.L. Mahajan's House, Haripur, Sunder Nagar, Mandi (HP)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH NIRVAIR SINGH</td>
              <td>M.Phil Economics</td>
              <td>9464132030</td>
              <td>nirvair_pbi@yahoo.co.in</td>
              <td>
                V.HARIE Wala, P.O-MAHA KALAN ,TEH. HAGHA PURANA,(MOGA)
                Pin-142080
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS HARPREET KAUR</td>
              <td>M.Sc. Math</td>
              <td>0175-2303565, 98145-08202</td>
              <td></td>
              <td>197/2, GURU NANAK STREET, ANAR DANA CHOWK, PATIALA</td>
            </tr>
            <tr>
              <td style="width: 20%">SH NITIN KUMAR</td>
              <td>MBA</td>
              <td>01675-222686</td>
              <td></td>
              <td>
                C/O HANDS SILK EMPORIUM, SADAR BAZAAR, DHURI, DIST. SANGRUR
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. VIJAY K. SHARMA</td>
              <td>LL.B/1978-1981</td>
              <td>01824-263450, 507511</td>
              <td></td>
              <td>Civil Court, Phagwara, Distt. Kapurthala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR MOHAMAD YUSUF</td>
              <td></td>
              <td>2287607, 3046409</td>
              <td>yusuf_sah04@yahoo.co.in</td>
              <td>
                DEPTT. OF CHEMISTRY, PBI.UNI.PATIALA, NO. R-42, UNIVERSITY
                CAMPUS, P.U.P.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MADHU BALA</td>
              <td>PH.D.</td>
              <td>0186-2100720</td>
              <td>diamond-Zoo@yahoo.co.in NIL</td>
              <td>V.P.O.Koonterpur, Distt. Gurdaspur Pb. 145101</td>
            </tr>
            <tr>
              <td style="width: 20%">DR GURMEET SINGH</td>
              <td>M.Ed/1990-1998,</td>
              <td>(R) 2282561</td>
              <td></td>
              <td>H.No-355, Urban Estate, Phase I,Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS MANISHA RANI</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td>7589281050</td>
              <td>manishasingh123450@gmail.com</td>
              <td>
                Sahi Sweets House Boha, Tehsil Budhlada, Distt. Mansa M.No.
                75892-81050
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS GAGANDEEP KAUR</td>
              <td>M.Sc. (Chemistry) 2015-2017</td>
              <td>9915319734</td>
              <td></td>
              <td>
                #1300, VPO Chhajli, Teh. Sunam, Sangrur (M.No. 99153-19734)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS RITIKA</td>
              <td>M.Sc. (Chemistry) 2015-2017</td>
              <td>8872371931</td>
              <td>goyalritika045@gmail.com</td>
              <td>
                Old Post Office Street, Near Gandhi School, Mansa M.No.
                88723-71931
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS SHEENAM</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td>9814077378</td>
              <td>priyanka94bansal@gmail.com</td>
              <td>
                Tarpal Karyana Store, Near Bus Stand, Nagar Council Committee,
                Rampura Phul M.No. 98140-77378
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS HARMANPREET KAUR</td>
              <td>M.Sc. (Chemistry) 2015-2017</td>
              <td>9530971923</td>
              <td>sspreetss@gmail.com</td>
              <td>
                Vill. Phullo Mithi, PO Sangat, Distt. Bathinda (M.No.
                95309-71923)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS BHAWANA</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>bhawana.arora20@gmail.com</td>
              <td>
                VPO Dhaban Kokrian, Teh. Abohar, Distt. Fazilka (M.No.
                94174-88971)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. NEETU KAUSHAL</td>
              <td></td>
              <td></td>
              <td>neetukaushal29@yahoo.in</td>
              <td>
                #12/116, Mohalla Kaisthan Wala, Banur, Tehsil Rajpura, Distt.
                Mohali M.No. 94638-89798
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. GURDEEP SINGH</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td>9915633600</td>
              <td>gurdeepsingh@gmail.com</td>
              <td>VPO Regla Teh. Sunam Distt. Sangrur M.No. 99156-33600</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. PUSHPINDER SINGH</td>
              <td>M.Sc. (Mathematics)/2005-2006</td>
              <td>0161-286077</td>
              <td></td>
              <td># B-III-434, Dehlon Road, Sanehwal (Tel. No. 0161-286077)</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. RAVINDER KAUR</td>
              <td>M.Sc. (Mathematics) 2005-2007</td>
              <td>01675-250891</td>
              <td></td>
              <td>
                Guru Teg Bahadur Colony, Near Battey Hospital, Malerkotla Tel.
                No. 01675-250891
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. PARMINDER RANI</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td>01675-320280</td>
              <td></td>
              <td>
                #123, W. No. 11, Shivpuri Mohall, Dhuri (Tel. No. 01675-320280)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. DR. BALWINDER KAUR</td>
              <td>Ph.D. (Linguistics) 2007-2013</td>
              <td></td>
              <td>balwinderdpr@gmail.com</td>
              <td>
                Guru Nanak College, Moga, VPO Boparai, Kaplan, Distt. Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS ARBINDER KAUR</td>
              <td>M.Sc. (Chemistry) 2015-2017</td>
              <td>8284830192</td>
              <td>virk5357@gmail.com</td>
              <td>
                Vill. Musapur, PO Nurpur Bedi, Teh. Anandpur Sahib, Distt. Ropar
                M.No. 82848-30192
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS SHIWANI</td>
              <td>MBA</td>
              <td>2362450, 9814535376</td>
              <td></td>
              <td>160, Anand Nagar-A, Tripuri, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARWINDER SINGH</td>
              <td>B.A.</td>
              <td>0164-2224879, 9914185711</td>
              <td>dhimanhs@gmail.com, dhiman_hs@ yahoo.co.in</td>
              <td>
                Street No. 3/1 (Pakke Wale) Bhai Mati Dass Nagar, Bathinda
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH SUKHSIMRANJIT SINGH</td>
              <td>MBA</td>
              <td>01635-231262</td>
              <td>kaushalvicky2001@yahoo.co.in</td>
              <td>Sada Patti, Jaitu, Faridkot</td>
            </tr>
            <tr>
              <td style="width: 20%">SH VIKAS KUMAR JINDAL</td>
              <td>M.P.Ed</td>
              <td>0175-2293301</td>
              <td>vikasjindal08@yahoo.com</td>
              <td># 82, STREET NO. 7, SAHIB NAGAR, THERI, PATIALA</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. PANKAJ SHARMA</td>
              <td>Ph.D.</td>
              <td>16472019279</td>
              <td>pankajshaarma@yahoo.ca</td>
              <td>206, 25-Kensington Road Brampton Canada</td>
            </tr>
            <tr>
              <td style="width: 20%">DR HARBANS SINGH</td>
              <td></td>
              <td>9210053686, 9868116638</td>
              <td>harbans0077@yahoo.co.in</td>
              <td>#373, College ROAD, SARDAR BASI, GALI NO. 5, SANGRUR</td>
            </tr>
            <tr>
              <td style="width: 20%">SH GOBIND SINGLA</td>
              <td>MBA/PUSBS</td>
              <td>01764-242387, 9872350873</td>
              <td>Gobindsingla@yahoo.co.in</td>
              <td>
                M/S CHAJJU RAM SHAM LAL C/A ANAJ MANDI PATRAN, DIST/ PATIALA
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. HARBANS SINGH</td>
              <td>M.Sc.</td>
              <td>2283276, 9417500276</td>
              <td>harbanssingh63@yahoo.com, harbans2233@gmail.com</td>
              <td>#-6, SALARIA VIHAR, NEAR RADIO STATION PATIALA</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. RANBIR SINGH</td>
              <td>M.B.A/1986-1993</td>
              <td></td>
              <td></td>
              <td>V.P.O. Datewas, Teh. Budhlada, Distt. Mansa</td>
            </tr>
            <tr>
              <td style="width: 20%">MS POOJA BANSAL</td>
              <td>B.A.</td>
              <td>0164-3092023, 9876853154</td>
              <td>puji789@gmail.com, puji789yahoo.com</td>
              <td>Garg Prevision Store, Jhujhar Nagar, # 20090, BTI</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ZORAWAR SINGH</td>
              <td>M.Sc./Zoology</td>
              <td>94172-30075</td>
              <td>Zorawars@hotmail.com</td>
              <td>2, VIKAS NAGAR,PO. RAYON AND SILK MILLS , AMRITAR.</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. NEELAM SAINI</td>
              <td></td>
              <td>647-224-3405</td>
              <td>neelamsaini07@gmail.com</td>
              <td>1608-6 SILVER MAPLE COURT BRAMPTON ON, CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">DR N.R. DHAMIWAL</td>
              <td>Ph.D./Chemistry</td>
              <td>2286719, 304-6409</td>
              <td>nrd_pup@yahoo.com</td>
              <td>#4166, PHASE- II, URBAN ESTATE- PATIALA</td>
            </tr>
            <tr>
              <td style="width: 20%">SH KEWAL KRISHAN</td>
              <td></td>
              <td>98148-15507</td>
              <td>kewalkaushik@gmail.com</td>
              <td>
                Deptt. Of Defence And Stragic Studies, Pbi. Uni., Patiala/Q-24,
                Pbi. Uni. Campus, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS SAT KIRAN JIT</td>
              <td>M.Phil/Zoology</td>
              <td>01874-244676, 9814327627</td>
              <td></td>
              <td>Singhpura House, Tibri Road, Gurdaspur</td>
            </tr>
            <tr>
              <td style="width: 20%">MS SONIA GOYAL</td>
              <td>MBA</td>
              <td></td>
              <td></td>
              <td>7401, Kartar Basti, Near Refind Cell, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SH DEVINDER PAL SINGH</td>
              <td>M.Sc. Automotive Design Engg.</td>
              <td>2286576, 00447888400401</td>
              <td>er.devinderpalsingh@gmail.com</td>
              <td>412-C, Phase-II, U.E, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. J. S. DARGAN</td>
              <td>Ph.D</td>
              <td>0172-4651271, 9815842858</td>
              <td>darganjs@hotmail.com</td>
              <td>H. No 1271, Sector 18-C, Chandigarh 160018</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ASHISH GROVER</td>
              <td>MBA</td>
              <td>01638-260224</td>
              <td></td>
              <td>Kailash Nagar, St. No. 4 (E), Fazilka, Distt. Ferozpur</td>
            </tr>
            <tr>
              <td style="width: 20%">MS SHAVETA DODA</td>
              <td>MCA</td>
              <td></td>
              <td>shavetadoda@gmail.com</td>
              <td>Ahrja Street, Fazilka, Ferozpur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURPREET SINGH</td>
              <td>MBA/PUSBS</td>
              <td>01874-691324, 9888664226</td>
              <td>gurpreetsinghgdp@gmail.com</td>
              <td>
                VPO Tibber, Dist. Gurdaspur, Near Govt. Sr. Sec. School, Tibber
                (GSP)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR DEVINDER SINGH</td>
              <td>M.Phil., Ph.D./Linguistics</td>
              <td>3204500, 3046241</td>
              <td>devu1962@sify.com</td>
              <td>
                Deptt. Of Lingustics &amp; Punjabi Lexicograpyy, Pbi. Uni.
                Patiala/904/9, Darshan Singh Nagar, Alipur Road, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. SARBJIT KAUR RANDHAW</td>
              <td>M.Sc.</td>
              <td>9815377277</td>
              <td>NIL NIL</td>
              <td>74- SALARIA VIHAR URBAN ESTATE PHASE-1 PATIALA</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. DEVINDER KAUR</td>
              <td>M.Sc. M.PHIL, P.hd</td>
              <td>01884245386</td>
              <td>NIL NIL</td>
              <td>C/O NAVJOT HOSPITAL,, MAHILPUR DISTT. HOSHIARPUR (PB.)</td>
            </tr>
            <tr>
              <td style="width: 20%">SH INDERJEET SINGH</td>
              <td>B.Ed, (M.A I)</td>
              <td>01886-2511404,9815120669</td>
              <td>chaudaryinderjeet@yahoo.com</td>
              <td>Vill.Fatehpur, P.O. Hariyana, Distt. Hoshiapur</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. PARMJIT SINGH GILL</td>
              <td>LL.B, MBA</td>
              <td>416-910-5676</td>
              <td>pgill2000@yahoo.com</td>
              <td>
                2565 STEELES AVE. (E) #20 BRAMPTON ONTARIO- L6T-4L6, CANADA
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SMT SARBJEET KAUR</td>
              <td>M.Phil Lingustics/1982-1984</td>
              <td>2562175, 5009245</td>
              <td></td>
              <td>11-C, SBS Nagar Pakhowal Road, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">DR KAMAL KINGER</td>
              <td>Ph.D./1988-1994</td>
              <td>2303054, 98156-13054</td>
              <td>kingerkamal@rediffmail.com</td>
              <td>#B/1/2, Hira NAGAR, PATIALA</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. SUNIL SHARMA</td>
              <td>M.Phil Physics, Ph.D/1981-1984</td>
              <td>2644320, 2640283, 2630283</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td style="width: 20%">SH JAGDEV SINGH DHILLON</td>
              <td>M.A, LL.B</td>
              <td>98145-11132</td>
              <td>RRIDKOT</td>
              <td>Baba Fridnagar, S.No. 1,Old Cantt. Road, Fridkot</td>
            </tr>
            <tr>
              <td style="width: 20%">MS AMANDEEP KAUR</td>
              <td></td>
              <td>9888555024</td>
              <td></td>
              <td>Vill.&amp;PO Lambi, TEH. MALOUT DIST. MUKATSAR</td>
            </tr>
            <tr>
              <td style="width: 20%">SH SARBJIT SINGH JAWANDH</td>
              <td>LL.B/1978-1987</td>
              <td>01675-211132, 98141-41801</td>
              <td></td>
              <td>4-D, City Centre, Near 22 No. Phatak, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH PRITAM SINGH</td>
              <td>M.A.</td>
              <td>0175-215565</td>
              <td></td>
              <td>Vill. Issi, P.O. Mimsa, Distt. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. RAJEEV KANSAL</td>
              <td>M.Com</td>
              <td>2200202, 0175-3046208</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td style="width: 20%">DR. DIDAR SINGH</td>
              <td>Ph.D./Physics, PG.DM.SEF.</td>
              <td>2285176</td>
              <td></td>
              <td>3164, U.E., Phase II, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. PARDEEP SACHDEVA</td>
              <td>M.B.A/1979-1981</td>
              <td># 88/C, MODEL TOWN PATILA</td>
              <td></td>
              <td># 88/C, MODEL TOWN PATILA</td>
            </tr>
            <tr>
              <td style="width: 20%">SMT YASHWINDER KAUR</td>
              <td>LL.M /1995-2000</td>
              <td>98720-25482</td>
              <td></td>
              <td># 2548,PHASE-2, URBAN ESTATE, PATIALA</td>
            </tr>
            <tr>
              <td style="width: 20%">SH JUJHVIR SINGH</td>
              <td>M.Tech</td>
              <td>2363141</td>
              <td></td>
              <td># 92, DASHMESH NAGAR, PATIALA</td>
            </tr>
            <tr>
              <td style="width: 20%">MS MOHINI TATHGUR</td>
              <td>M.Sc./Chemistry, B.Ed.</td>
              <td>2206465</td>
              <td>moni_19_cat@yahoo.co.in</td>
              <td>#141/A</td>
            </tr>
            <tr>
              <td style="width: 20%">SH KARAMVIR SINGH</td>
              <td>MBA</td>
              <td>01679-237399</td>
              <td></td>
              <td>
                H.No. B XIV 2859, Opp. I.T.I. (Boys), Bhai Gurdas Nagar, Street
                No. 5, Raikot Road, Barnala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS SULTANA BAGAM</td>
              <td></td>
              <td>01675-296061</td>
              <td></td>
              <td>Vill. , V.P.O. Banbhoura, Teh. Malerkotla, Dist. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">MISS VIRPAL KAUR</td>
              <td>M.A.</td>
              <td>(R) 01652-280265, 98150-6</td>
              <td></td>
              <td>V.P.O. Moosa, Distt Mansa</td>
            </tr>
            <tr>
              <td style="width: 20%">MS SARU BAJWA</td>
              <td>M.Tech/2004-2006</td>
              <td>01765-220833, 9873585336</td>
              <td>bajwasaw@yahoo.com</td>
              <td>
                C/O Prof. Zora Singh, Model School Road, Near Govt. Fruit
                Nursery, Nabha
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH VARUN SINGLA</td>
              <td>B.Com, MBA</td>
              <td>01765-504313, 9888289893</td>
              <td>taurusvarun_singla@yahoo.co.in</td>
              <td>H. No. 190, Old Sabzi Mandi, Nabha, Dist. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR JASBIR KAUR</td>
              <td>Ph.D Music/1990-1993</td>
              <td>(R)2286649 (O) 2284443</td>
              <td></td>
              <td>#DPD PUP, C-2 PUNJABI UNI. CAMPUS PATIALA</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. AMIT SAREEN</td>
              <td>M.Sc, M.Phil, B.Ed</td>
              <td>0175-2203144, 0175-221410</td>
              <td>amit_sareen123@yahoo.co.in</td>
              <td>H. No. -523, Street No. - 5, Gurbax Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH TARSEM SINGH RANA</td>
              <td>M.Phil Pbi, B.Ed/1988-1991</td>
              <td>01675-250694, 253016</td>
              <td></td>
              <td>B-543/6, Dashmesh Nagar, Malerkotla, Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF. GURJEET SINGH</td>
              <td>Post-Graduate Diploma in Public Relations And Advertising</td>
              <td>0183-2501375, 09872019375</td>
              <td>professorgurjeetsingh@gmail.com</td>
              <td>
                939, H.I.G. Flats, Housing Board Colony, Ranjit Avenue, C-Block,
                Amritsar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. HARKANWAL KORPAL</td>
              <td>M.A Pbi/1977-1979</td>
              <td>2229129, 98156-58782</td>
              <td></td>
              <td># 80- Govt. Officer's Colony, Taylor Road, Amritsar</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ANAND BANSAL</td>
              <td>M.Com., MFC, MBA/1994-1996</td>
              <td>01652-233440, 01655-22025</td>
              <td>preetmillie@yahoo.com</td>
              <td>Nehru Street, Near Mansa Club Mansa-151505-Pb.</td>
            </tr>
            <tr>
              <td style="width: 20%">MS MAMTA SODHI</td>
              <td>MBA</td>
              <td></td>
              <td></td>
              <td>237, Bharat Nagar, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BALDEEP SINGH</td>
              <td>MBA</td>
              <td>9815050398, 9815707571</td>
              <td></td>
              <td>
                Baba Farid Nagar, St. No. 1, Near Bibl Wala Chowk, Bathinda
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH AMANPREET SINGH</td>
              <td>MCA/2003-2006</td>
              <td>2223094, 01242886051</td>
              <td>amanpreet83@gmail.com</td>
              <td>212/1, Chappar Bandha Mohalla, B-Tank, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. L.S. KHEEVA</td>
              <td>M.Phil Pbi</td>
              <td>0172-2612083, 792754, 017</td>
              <td></td>
              <td>S.G.G.S. College, Sec-26, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">DR MEENAKSHI MALHOTRA</td>
              <td>Zoology</td>
              <td>228018, 9316150810</td>
              <td></td>
              <td>2039, Phase II, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">M/S GAGANDEEP KAUR</td>
              <td>M.Sc/ Zoology</td>
              <td>9888089040</td>
              <td></td>
              <td>1467, D Block, Model Town Extension, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">DR SHASHI AGGARWAL</td>
              <td>M.Sc. Zoology, Ph.D. Life Science/ Zoology</td>
              <td>9815813829, 3046335-35</td>
              <td>shashianimdia@yahoo.co.in</td>
              <td>Dept. Of Zoology, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SONIKA KAPOOR</td>
              <td>PH.D M.Sc</td>
              <td>9780991075</td>
              <td>sonika-kpr@yahoo.com nil</td>
              <td>395, Urban Estate, Phase I, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS REETA DEVI</td>
              <td>M.P.Ed</td>
              <td>01893-207021, 01893-28321</td>
              <td></td>
              <td>Vill. Sahaura, PO Dhiala, Teh. Indora, Dist. Kangra (HP)</td>
            </tr>
            <tr>
              <td style="width: 20%">SH NARINDER KUMAR</td>
              <td>MBA</td>
              <td>01676-224994, 9417235992</td>
              <td>narinder_shelly@yahoo.co.in</td>
              <td>167, St. No. 4, Bhai Mool Chand Colony, Sunam, Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">MS HARISH KUMARI</td>
              <td>Ph.D.</td>
              <td>9888263000</td>
              <td>harish.management@gmail.com</td>
              <td>105, Sec. 22/A. Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SH AMRINDER SINGH</td>
              <td>B.Tech., MBA</td>
              <td>01637-266779, 9814965278</td>
              <td>er_amrindersingh@yahoo.com</td>
              <td>Sarabha Nagar, St. No. 8, Malout</td>
            </tr>
            <tr>
              <td style="width: 20%">SH SANJAY DHAWAN</td>
              <td></td>
              <td>2216083, 9814626250</td>
              <td></td>
              <td>B-33/214, Bhindian Street, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS POONAM BRAR</td>
              <td>M.Tech</td>
              <td>01633-501887</td>
              <td>s3_sweet@yahoo.com</td>
              <td>Opp. Bhandari Hospital, Bathinda Road, Muktsar</td>
            </tr>
            <tr>
              <td style="width: 20%">MS DEEPIKA SHARMA</td>
              <td>M.Sc. MFT./Biotechnology</td>
              <td>0161-2671295</td>
              <td></td>
              <td>360, Jamal Pur Colony, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH VIJAY RIKHI</td>
              <td>M.A./Eng., LL.B</td>
              <td>01675-253401, 98154-46989</td>
              <td>paritosh.rikhi@gmail.com</td>
              <td>Rikhi's 772, Tapa Street, Malerkotla, Dist. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. HINA KHAN</td>
              <td>M. Sc., Ph.D</td>
              <td>9464796786</td>
              <td>capsinvitro@yahoo.co.in</td>
              <td>
                Dr. Hina Khan , Assistant Professor, Deparment Of Botany,
                Punjabi University, Patiala/H. No. 351, Ahmed Manzil I/S, Delhi
                Gate, Malerkotla, Disst. Sangrur, Punjab
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS ABHILASHA DHIMAN</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td></td>
              <td>
                VPO Kotahar Khurd, Teh. Amb, Distt. Una (HP) M.No. 94184-62262
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. RAHUL KUMAR</td>
              <td>M.A. (Def.)/2007-2009</td>
              <td></td>
              <td>rahulbajaj590@yahoo.com</td>
              <td>
                VPO Ghanaur, Ward No. 11, #47, Distt. Patiala, Tehsil Rajpura
                M.No. 94635-44435
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. AJAY GOYAL</td>
              <td></td>
              <td></td>
              <td>dr.ajaygoyal@yahoo.com</td>
              <td>
                Near Goyal Nursing Home, Tehsil Road, Samana, Patiala M.No.
                84270-84800
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. AMANPREET KAUR</td>
              <td>M.A. Lingustics/2012</td>
              <td></td>
              <td>aman.narula1989@gmail.com</td>
              <td>#10, Green Lehal, Passi Road, Patiala (M.No. 98889-61011)</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. REKHA SHARMA</td>
              <td>Ph.D.(Music)/2008-2013</td>
              <td></td>
              <td>anilmittudmnpta@gmail.com</td>
              <td>#355, Spl. Type-IV, DMN, Patiala M.No. 81466-75996</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. GAURAV KUMAR</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td>dwkkamboj91@gmail.com</td>
              <td>VOP. Dab Wala Distt. Fazilka M.No. 98887-88281</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. HARISH BANSAL</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td></td>
              <td>#107, Harinder Nagar, Patiala Tel. No. 0175-2351092</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. SATNAM SINGH</td>
              <td>2004-2006</td>
              <td></td>
              <td></td>
              <td>
                #8546 B/5, Main Bazar, Near OBC Bank Gurbax Colony, Patiala
                M.No. 94633-78266
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. AVTAR KAUR SIDHU</td>
              <td>M.Phil. m.SC.,P.HD</td>
              <td>9218766129</td>
              <td>avtarkaurzsi@yahoo.com</td>
              <td>V.P.O. Chak Bhakhtu, Via Bhuchu Mandi Distt, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. MANDEEP SINGH</td>
              <td>M.A. (Music Instrumental)/2001-2003</td>
              <td></td>
              <td>mandeepdhillon669@gmail.com</td>
              <td>
                #12, Baba Shri Chand Marg, Sirhind Road, Patiala (M.No.
                94633-66155)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RANBIR SINGH</td>
              <td>M.A. Ph.D Enrolled/2000-2004</td>
              <td></td>
              <td></td>
              <td>
                Dashmesh Farm Chhajli Kothe, Tehsil Sunam, Distt. Sangrur M.No.
                94174-66108
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. GITIKA KANSAL</td>
              <td>M.Sc. (Mathematics)/2005</td>
              <td></td>
              <td></td>
              <td>
                Shakti Niwas, J.P. Nagar, St. No. 3, Old Cantt Road, Faridkot
                M.No. 98767-03076
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. NAGAR SINGH</td>
              <td>Sociology/1985-1983</td>
              <td>2280463, 2286461-65</td>
              <td></td>
              <td>
                Lingustics Deptt., Pbi. Uni. Patiala/ 92 D, Professor Colony.
                Opp. Punjabi University Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH PUSHPINDER SINGH</td>
              <td>,,</td>
              <td>2380174</td>
              <td>pushpindersingh1282@gmail.com</td>
              <td>Vill. Shekhupura, P.O. P.U.P.</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. BHIMINDER SINGH</td>
              <td></td>
              <td>(R) 2283168</td>
              <td>bhiminderpbi@gmail.com</td>
              <td>Deptt. Of Literary Studies, Pbi. Uni. Patiala/</td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARINDERJIT SINGH</td>
              <td>MBA</td>
              <td>01675-279279, 9814602268</td>
              <td>harinder_billing@yahoo.co.in</td>
              <td>VPO Dhadhogal, Teh. Dhuri, Dist. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">MS HARSANGEET PAL KAUR</td>
              <td>M.A., M.Phil, Defence &amp; Strategic Studies</td>
              <td>0164-2219105</td>
              <td></td>
              <td>
                H.No. 390, St. No. 1, Ward No. 16, Mandi Dabwali, Bathinda Road,
                Samadhi Wali Gali
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. SATWINDER JIT PAL SIN</td>
              <td>M.Sc., M.Phil, Botany</td>
              <td>0183-2401940, 9915747399</td>
              <td>splehri@yahoo.com</td>
              <td>H.No. 5, Kapoor Lane, Model Town, Amritsar</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. ANWAR CHIRAGH</td>
              <td>Ph.D Pbi/1989-2003</td>
              <td>94171-24171</td>
              <td></td>
              <td>
                Deptt. Of Punjabi Lexicography, Punjabi University, Patiala.
                Vill. Sherawani Kot, P.O. Malerkotla, Dist. Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. MANOHAR SINGH VOHRA</td>
              <td>M.A. Eng/1967-1969</td>
              <td>0172-3132780, 2565644, 50</td>
              <td></td>
              <td># 696, Sector 6, Punchkula (HR)</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BALJINDER SINGH</td>
              <td>M.P.Ed</td>
              <td>98888115899</td>
              <td></td>
              <td>Vill. Model Town, PO Udmur, Teh. Tanda, Dist. Hoshiarpur</td>
            </tr>
            <tr>
              <td style="width: 20%">MS RAMANDEEP KAUR</td>
              <td>MCA</td>
              <td></td>
              <td>raman_mcapbi@yahoo.com</td>
              <td>211, Giani Zail Singh Nagar, Ropar</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. ARNEET GILL</td>
              <td>M. Sc., Ph.D</td>
              <td>9417173865</td>
              <td>arneetgill@gmail.com/arneetgill@rediffmail.com</td>
              <td>
                Department Of Botany, Punjabi University, Patiala 147002
                Punjab/# 3146, Phase-II, Urban Estate, Patiala 147002 Punjab
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SUKHMANDER SINGH SEK</td>
              <td>LL.B, Diploma in Business Managment/1977</td>
              <td>(R)2285580 (O) 01637-2381</td>
              <td></td>
              <td>4035, Urban Estate, Phase II, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. SHAMSHER SINGH AULAKH</td>
              <td>M.A/1995-1997</td>
              <td>01765-260082</td>
              <td></td>
              <td>
                # C/O Robin Girls College, Patiala Road, Bhadson, Dist. Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR P.C. GARG</td>
              <td>M.Sc., Statistics/1978-1980</td>
              <td>22,865,183,046,444</td>
              <td>pcgarg2k2@yahoo.co.in</td>
              <td>
                Deptt. Of Statistics, Pbi. Uni. Patiala/House No. C-21, Uni.
                Campus, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS KURSHED</td>
              <td></td>
              <td>01675-252481</td>
              <td></td>
              <td>V.P.O. Haider Nagar, Teh. Malerkotla, Dist. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF HARBHAJAN SINGH (N.R</td>
              <td>M.Sc. Physics/1967-1969</td>
              <td>(R) 408-246-2976</td>
              <td>prof_harbhajan@att.net</td>
              <td>3508, AGATE DRIVE #1, SANTA CLARA CA 95051, U.S.A.</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. KAUR SINGH</td>
              <td>M.Sc Botany, M.Ed/1977-1979</td>
              <td>98143-61261, 01672-223126</td>
              <td></td>
              <td>
                Street No. 4, Indra Colony, Patiala Gate, Sangrur./ (V.P.O.
                Khetla, Teh. Sunam,Distt. Sangrur)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURSANGAT SINGH GILL</td>
              <td>MCA</td>
              <td>9884707221</td>
              <td>gursangat_gill@yahoo.com</td>
              <td>VPO Rumi, Teh. Jagraon, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">MR KAUR SINGH</td>
              <td>M.Sc., Botany</td>
              <td>01672-231261, 9814361261,</td>
              <td>kskhetla@gmail.com</td>
              <td>H. No. 4, Indra Colony, Patiala Gate, Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH TARLOK SINGH CHHABRA</td>
              <td>B.A., Diploma in MGMT</td>
              <td>0172-2228609, 9872346650</td>
              <td>singhtarlok91@yahoo.com</td>
              <td>889, Sec. 60, Phase 3-B/2, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. YADWINDER SINGH</td>
              <td>M. Sc</td>
              <td>01639-257861, 9417174561</td>
              <td>yadwinder.bot@gmail.com</td>
              <td>
                C/O Dr. Munruchi Kaur, Department Of Botany, Punjabi University,
                Patiala-147002
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH DHARM PAL</td>
              <td>M.A His/1997-1999</td>
              <td>01672-275056, 249037</td>
              <td></td>
              <td>
                V.P.O.Bassiark, P.O.Ghanour Jattan, Teh. Bhawanigarh, Distt.
                Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH JANG SINGH</td>
              <td>M.A, LLB,Law Deptt</td>
              <td>9855206353, 9814640158</td>
              <td>jsnap48_@yahoo.com</td>
              <td>198, Phase- 3, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH MASHHOOD AHMED TAYYAB</td>
              <td></td>
              <td>9888350920</td>
              <td></td>
              <td>Warrach House, Muslim Street, Qadian, Gurdaspur</td>
            </tr>
            <tr>
              <td style="width: 20%">M/S RASHMI</td>
              <td>Zoology</td>
              <td>9815212155</td>
              <td></td>
              <td>H.No. 237-B, St.No. 2, Gurbax Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RAJINDER KUMAR BANSAL</td>
              <td>M. Sc., B.Ed</td>
              <td>01672-234051, 9872201457</td>
              <td>bansalnets@gmail.com</td>
              <td>
                Rajinder Kumar Bansal, St. No. 3, Prem Basti, Sangrur 148001,
                Punjab
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. BALWINDER SINGH</td>
              <td>Ph.D Eco./1981-1990</td>
              <td>(R) 0175-2285601 (O) 0175</td>
              <td>balwinder@pbi.ac.in</td>
              <td>4113, Urban Estate, Phase - II, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR BALDEV SINGH CHEEMA</td>
              <td>Ph.D Pbi/1979-1983</td>
              <td>(R) 3094475</td>
              <td>cheemapunjabi@gmail.com</td>
              <td>
                Head, Punjabi Department, Punjabi University, Patiala C-24,
                Punjabi University, Campus,PTA.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH ASHWANI KUMAR LATYAN</td>
              <td>,,</td>
              <td>9417303760</td>
              <td>ashwani_biotech@yahoo.co.in</td>
              <td>Vill. &amp; P.O. Titawi, Dist. Muzaffar Nagar</td>
            </tr>
            <tr>
              <td style="width: 20%">MS HARMEET KAUR</td>
              <td>B.Tech</td>
              <td>355317</td>
              <td></td>
              <td>226-C, Rattan Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH RAJANDEEP SINGH</td>
              <td>M.Sc/ Zoology</td>
              <td>01628-223887</td>
              <td>Lovejot_2003@yahoo.co.in</td>
              <td>220, Sun City Colony, Amloh Road, Khanna</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. ANIL KUMAR BHARDWAJ</td>
              <td>M.Sc., M.Phil., Ph.D</td>
              <td>0135-2640111 to 354 (R) (</td>
              <td>anilbhardwaj@wii.gov.in anilbhardwajus@yahoo.com</td>
              <td>
                # 44 Kasturba Nagar Jallandhar Cantt. (Pb.) 144 005./Wildlife
                Institute Of India, P.O.Box No. 18, Chandrabani, Dehradun (UK)
                248001
              </td>
            </tr>
            <tr>
              <td style="width: 20%">KAMALENDER VERMA</td>
              <td></td>
              <td>01978-252482</td>
              <td></td>
              <td>V&amp; P.O Hatwar, Dist. Bilaspur, Himachal Pradesh</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BHAVDEEP SINGLA</td>
              <td>B.Tech/2002-2006</td>
              <td>2211949</td>
              <td>bhavsingla@yahoo.com</td>
              <td>4-A/1, Model Town, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH RAVINDER SINGH</td>
              <td>M.sc (Applico physics)</td>
              <td>9417096353</td>
              <td></td>
              <td>7 Lehal Colony, Opp.Dr(Sohal) Ortho. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. ASHISH KUMAR SHARMA</td>
              <td>M. Sc., M.Phil, B.Ed</td>
              <td>01628258137, 01628256587,</td>
              <td>ashishvaid12@rediffmail.com</td>
              <td>
                NRI Colony, Near Magnum International School, Doraha, Distt.
                Ludhiana, Punjab
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. AMARINDER SINGH</td>
              <td>M.Sc. (Mathematics)/2005</td>
              <td></td>
              <td></td>
              <td>
                V-Kuhli Khurd, PO Lehal, Teh. Payal, Distt. Ludhiana Tel. No.
                0161-2858376
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS SEEMA GARCHA</td>
              <td>Ph.D/,,</td>
              <td>0161-2552272, 3046263</td>
              <td>sgarcha@rediffmail.com</td>
              <td>
                Deptt. Of Biotechnology, P.U.P/36, Shant Park, Agar Nagar-I,
                Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR RENU AGGARWAL</td>
              <td>Ph.D./Zoology</td>
              <td>2305660</td>
              <td></td>
              <td>U-17, Tej Bag Colony, Sanour Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH VINOD HARCHAND</td>
              <td>M.A./1989-1993</td>
              <td>98157-38928</td>
              <td></td>
              <td>V+P.O., Kahnuwan, Distt. Gurdaspur</td>
            </tr>
            <tr>
              <td style="width: 20%">MS HARPREET KAUR</td>
              <td>,,</td>
              <td>01679-238508</td>
              <td></td>
              <td>H.No. 69, 22 ACRE, Barnala, Dist. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. KIRPAL SINGH BILLING</td>
              <td>M.Sc./Physics</td>
              <td>001-718-805-2211, 001-347</td>
              <td>kirpal@ksbins.com</td>
              <td>118-12, Atlantic Ave., Richmond Hill, NY-11419</td>
            </tr>
            <tr>
              <td style="width: 20%">MS NAVDEEP KAUR</td>
              <td>MBA/PUSBS</td>
              <td>01655-244850</td>
              <td>n_maan2007@yahoo.co.in</td>
              <td>
                Vill. Bangi Nihal Singh, PO Bangi Kalan, Teh. Talwandi Sabo,
                Dist. Bathinda
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR A.K. GARG</td>
              <td>M.Sc. M.Phil, Botany</td>
              <td>9986558371</td>
              <td>garg58@yahoo.com</td>
              <td>T H Galaxy Estate Apt 13Th X 8Th Main Banglore-560003</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI BAGICHA SINGH SOHAL</td>
              <td>Diploma in Civil Eng./1963</td>
              <td>2282484</td>
              <td></td>
              <td>House No. - 200, Urban Estate Phase - 1, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. JAGMOHAN SINGH</td>
              <td>M.Phil Public Administration/1986-1990</td>
              <td>01765-256960, 259340</td>
              <td></td>
              <td>
                # 7, Amloh Road, Backside P.W.D. Rest House, Mandi Gobindgarh,
                Dist. Fatehgarh Sahib
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR RAWAIL SINGH</td>
              <td>Ph.D, Pbi/1995-1999</td>
              <td>26257298, 23514692, 23615</td>
              <td>rawails@rediffmail.com</td>
              <td>
                Punjabi Academy, Delhi, D.D.A. Community Centre, Sadar Thana
                Road, Pahar Ganj, New Delhi-110055
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. BALRAJ SINGH SOHI</td>
              <td>LL.B</td>
              <td>647-500-7677, 905-694-966</td>
              <td>sohilaw@gmail.com</td>
              <td>108-2970 DREW ROAD MISSISSAUGA ON L4T-0A6, CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">MS AMANJEET BATH</td>
              <td>M.Sc, Ph.D., Botany</td>
              <td>6095299804</td>
              <td>abath@emsl.com, bath_a@yahoo.com</td>
              <td>95, Windor Pond Road, Prienceton Junction NJ-08530</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. BALWINDER SINGH SOOCH</td>
              <td>M.Sc., Ph.D, Microbial &amp; Food Tech.</td>
              <td>3046262, 9815491199</td>
              <td>soochb@yahoo.com</td>
              <td>
                Deptt. Of Bio. Tech., Pbi. Uni. PTA, VPO Chhajli, Near Bus
                Stand, Distt. Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS BHANVI WADHAWAN</td>
              <td>Zoology</td>
              <td>2365959</td>
              <td>bhanvi1984@yahoo.co.in</td>
              <td>204, Prem Nagar, Bhadson Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS RAJNI</td>
              <td></td>
              <td>01672-250666</td>
              <td>rajni_redroses@yahoo.com</td>
              <td>
                38, Mahal Mubarak Colony, B/S Of Singla Soap Factory, Haripura
                Road, Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. NAMITA JINDAL</td>
              <td>M. Sc.,</td>
              <td>9815898678</td>
              <td>polysaccharides@gmail.com</td>
              <td>H. No. 429, Phase-II, Urban Estate, Patiala, Punjab</td>
            </tr>
            <tr>
              <td style="width: 20%">MS RAJVIR KAUR</td>
              <td></td>
              <td>01679-250804</td>
              <td></td>
              <td>VPO Bihla, Teh. Barnala, Dist. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. AMRITPAL KAUR</td>
              <td>M.Phil, Pbi/1983-1986</td>
              <td>0175-2285014</td>
              <td></td>
              <td>
                Pbi. Literary Studies, Pbi. Uni. PTA. # 2107, Phase-II, Urban
                Estate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR JATINDER SINGH AULAKH</td>
              <td>,,</td>
              <td>183-2254759</td>
              <td>chemiaulakh@gmail.com</td>
              <td>
                Deptt. Of Chemistry, Pbi. Uni., Patiala /.No. E 13-2381, Vill
                &amp; P.O. Ghanupur, Chheharaja, Amritsar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. I.B. PRASHER</td>
              <td>M.Sc., Ph.D</td>
              <td>0172-2712552, 9815734689</td>
              <td>chromista@yahoo.co.in</td>
              <td>Botany Department, Punjab University, Chandigarh/</td>
            </tr>
            <tr>
              <td style="width: 20%">SH AVIKASH SINGLA</td>
              <td>LL.B</td>
              <td>9814758786</td>
              <td></td>
              <td>171, Kesar Market, Amargarh, Dist. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. AVTAR SINGH</td>
              <td>Ph.D</td>
              <td>9465312716</td>
              <td>avtarbilaspuri@yahoo.in</td>
              <td>Bilaspur Th. N.S.Wala , Moga</td>
            </tr>
            <tr>
              <td style="width: 20%">DR MANJIT KAUR SIDHU</td>
              <td>M.Sc., Ph.D/1967, Botany</td>
              <td>2286439, 9855406366</td>
              <td>sidhulsmk@gmail.com</td>
              <td>4287, Phase-II, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. SEWA SINGH</td>
              <td>M. Sc.</td>
              <td>9418896082</td>
              <td>sewasss@gmail.com</td>
              <td>
                Biotechnology Division, IHBT (CSIR), Palampur, HP-176061/Sewa
                Singh S/O Gurdev Singh VPO-Malkana, Distt. Bathinda (PB) 151301
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH BARINDER KUMAR SHARMA</td>
              <td>MBA</td>
              <td>01672-238493, 9872507156</td>
              <td>batish_babbu@yahoo.co.in</td>
              <td>185, Partap Nagar, Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">DR INDERJIT SINGH CHEEMA</td>
              <td>M.A, MPhil, Phd,MA(English,pbi)</td>
              <td>9815736225, 2350765</td>
              <td></td>
              <td>99, Phulkian Enclave Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. PREET RATTAN KAUR</td>
              <td>M. Sc.</td>
              <td>01679-235998, 9501380566</td>
              <td>preetrattan89@rediffmail.com</td>
              <td>H. No. C-248/W-3, Bajwa Patti, Mohalla Jaglan, Barnala</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. HARJASPREET KAUR GIL</td>
              <td>M.Phil, Pbi</td>
              <td>416-930-5676</td>
              <td>harjaspreet@live.com</td>
              <td>12 HIGHVALLEY CIRCLE BRAMPTON ON L6P 2C6, CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">DR ANUPAMA PARMAR</td>
              <td>M.Sc., M.Phil, Ph.D./</td>
              <td>2300191, 9417270250</td>
              <td></td>
              <td>45, New Majithia Enclave, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH KULDEEP GROVER</td>
              <td>MBA</td>
              <td>9915195460, 9872337530</td>
              <td></td>
              <td>79, House Fed Colony, Opp. Verka Milk Plant, BTI</td>
            </tr>
            <tr>
              <td style="width: 20%">SH SUKHWINDER SINGH</td>
              <td>M.A punjabi, B Ed, MEd (punjabi)2000-2007</td>
              <td>9814909540</td>
              <td></td>
              <td>
                V.Kamal Wala(Zira), PO Mallan Wala, Teh. Zira, Ferozepur ,Distt
                Ferozpur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. NIRMAL KUMAR GOYAL</td>
              <td>M. Sc</td>
              <td>2306516, 9814380651</td>
              <td>goyalnk@gmail.com</td>
              <td># 117, Punjabi Bagh, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS BABITA JINDAL</td>
              <td>MBA</td>
              <td>01651-220540, 9814975540</td>
              <td>babita_jindal02@yahoo.co.in</td>
              <td>120, Ward No. 14, New Market, Rampura Phul</td>
            </tr>
            <tr>
              <td style="width: 20%">MS RITAM</td>
              <td>B.Com.</td>
              <td>2210793, 9988486887</td>
              <td></td>
              <td>339, Model Town-I, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. BALJINDER SINGH SANDH</td>
              <td>M. Sc., M. Phil.</td>
              <td>01872-258048, 9888331448</td>
              <td>shahsandhu@gmail.com</td>
              <td>Village Kot Yog Raj, P. O. Kala Bala, Distt. Gurdasspur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH GULZAR SINGH SANDHU</td>
              <td>1991-1995</td>
              <td>0172-2602538</td>
              <td></td>
              <td>1538, Sector 36 D, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SH VIKRAM MAHAJAN</td>
              <td>MBA</td>
              <td>9815452722, 9888408241</td>
              <td>vikram_mahajan27@yahoo.co.in</td>
              <td>
                Near Ravi Karyana Store, Bank Colony, Sunder Nagar, Dhangu Road,
                Pathankot, Distt. Gurdaspur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS POONAM SINGLA</td>
              <td>M.C.A. 1995-1998</td>
              <td>0181-271320, 0161-603175-</td>
              <td></td>
              <td>278-R, Model Town, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BALJITPAL SINGH</td>
              <td>M.P.Ed</td>
              <td>9988739660</td>
              <td></td>
              <td>Deviwala Road, St.No. 7, Kotakpur</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. GURPAUL SINGH DHINGRA</td>
              <td></td>
              <td>9815100172</td>
              <td>dhingragurpaul@gmail.com</td>
              <td>
                Botany Deptt., Punjabi University, Patiala/H. No. 1189,
                Sector-18-C, Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR INDERJIT SINGH SETHI</td>
              <td>Ph.D Pol. Sco/1977-1978</td>
              <td>304,645,055,471,259,000,0</td>
              <td></td>
              <td>
                Sethi Cottage, Ram Gali, Near Ahlluwaila Gurudawra, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS KULWINDER KAUR</td>
              <td>M.P.Ed</td>
              <td>9876331631</td>
              <td></td>
              <td>VPO Chutala, Dist. Tarantaran</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS GURNAM KAUR</td>
              <td>Ph.D Philosophy/1979-1986</td>
              <td>(R) 2280953</td>
              <td></td>
              <td># 22, Urban Estate, Phase I, P.O. Pbi. Uni. PTA.</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. BALKAR SINGH</td>
              <td>Ph.D Pbi/1999</td>
              <td>01633-268167, 263857, 981</td>
              <td></td>
              <td>Pbi. Deptt., Punjabi Uni., Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. GURKIRPAL SINGH ASHK</td>
              <td>M.J.M.C/1991</td>
              <td>01765-252252, 98154-81646</td>
              <td>gsashk@yahoo.com</td>
              <td>
                # B-1/34, Guru Ki Nagri, Mandi Gobindgarh, Dist. Fatehgarh
                Sahib/25, Sec. 10-B, Guru Ki Nagri, Mandi Gobindgarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. SHALLU JAIN</td>
              <td>M.Com, Ph.D./1998-2006</td>
              <td>01764-220208, 9815901546</td>
              <td>shallu_pbi@rediffmail.com</td>
              <td>108/8, Ram Basti, Near Post Office, Samana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH RATESH KUMAR</td>
              <td>M.Sc/Zoology</td>
              <td>01874-280913</td>
              <td>rateshkumarjassal@yahoo.co.in</td>
              <td>1067, Mohalla Mughlan, VPO Kalanaur, Dist. Gurdaspur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURPAL SINGH DHILLON</td>
              <td>M.Sc. Physics</td>
              <td>9417172913</td>
              <td>gurpalsinghfro@gmail.com</td>
              <td>21002, St. No. 2, Power House Road, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SH RAJIV KUMAR</td>
              <td>M.Tech</td>
              <td>2305045, 919888260602</td>
              <td>rajiv_patiala@gmail.com</td>
              <td>47 G/A, Gobind Nagar, Model Town, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. GULJIT SINGH CHATHA</td>
              <td>M. Sc.,Ph.D.</td>
              <td>01887-224803, 9417407974</td>
              <td>drgschatha@gmail.com</td>
              <td>
                Department Of Botany, Govt. Shivalik College, Nangal -140124/#
                8111 - Hill View Enclave, Bhakhra Road, Nangal - 140124,
                Rupnagar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. MANJIT SANDHU</td>
              <td>M.Com</td>
              <td>416-300-7393, 905-799-246</td>
              <td>sandhumanjitsingh@yahoo.com</td>
              <td>103 FAIR WOOD CIRCLE BRAMPTON, ONT, L6R OX5, CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">DR GURDEV SINGH CHANDI</td>
              <td>Ph.D Pbi./1980-1987</td>
              <td>(R) 2222777, 98155-12675</td>
              <td>c_gurdev@rediffmail. com</td>
              <td>
                Deptt. Of C.C., Pbi. Uni. Patiala/71, Friends Colony, Near 22
                No. Phatak, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. JASWINDER SINGH</td>
              <td>LL.B/1980-1983</td>
              <td>0161-2772599, 5009216, 94</td>
              <td>jjsdakha@hotmail.com</td>
              <td># 268, Model Gram, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">DR W.R. BANSAL</td>
              <td>,,</td>
              <td>2282152, 3046409</td>
              <td>wr_bansal@yahoo.com</td>
              <td>
                Chemistry Deptt., Pbi. Uni. Patiala/415, Urban Estate, Phase I,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. NIRMAL SINGH AZAD (EX</td>
              <td>Ph.D Eco/1991</td>
              <td>(R) 2282641 (O) 2286142</td>
              <td></td>
              <td>Economics Deptt, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH CHARANJOT SINGH WALIA</td>
              <td>LL.B</td>
              <td>2364849, 9815322244</td>
              <td></td>
              <td>77-E, Police Lines Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR ASHU PAL BANSAL</td>
              <td>M.B.A./1995</td>
              <td>212740, 214175, 2662545</td>
              <td></td>
              <td>H.No.- B-19/409, Kharadian Street, Dhak Bazaar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. DARSHAN SINGH</td>
              <td>M.Phil Pbi/1971-1976</td>
              <td>2230666</td>
              <td></td>
              <td>
                Lecturer, Vill. Dashmesh Nagar, P.O. Karhali, Distt Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS DIVYA KHANNA</td>
              <td>,,</td>
              <td>01762-227444</td>
              <td>divyakhanna24@yahoo.com</td>
              <td>75, SBS Colony, Rajpura, Dist. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. BHUPINDER S. KHAIRA</td>
              <td>Ph.D./1973-1975</td>
              <td>(R) 0175-2282091 (O) 2282</td>
              <td></td>
              <td>#91, Phase I, Urban Estate, Patiala.</td>
            </tr>
            <tr>
              <td style="width: 20%">SMT NEELAM SINGLA</td>
              <td>M.Sc., Statistics, 1994-1996</td>
              <td>9888481431, 3046444</td>
              <td>neelgagan2k3@yahoo.co.in</td>
              <td>Deptt. Of Statistics, Pbi. Uni. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH PARAS</td>
              <td></td>
              <td>9814848594</td>
              <td></td>
              <td>1771/1, Joity Ram Street, Kacha Patiala, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS KANCHAN RANI</td>
              <td>B.Com.</td>
              <td>9915308639, 9876967067</td>
              <td>kanchanrama_mba@yahoo.co.in</td>
              <td>Vill. Agampur, Teh. &amp; PO Anandpur Sahib Dist. Ropar</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS ANU BHASIN</td>
              <td>M.Sc./Zoology</td>
              <td>01632-228840, 9855245802</td>
              <td>anu_luthra2k@yahoo.co.in</td>
              <td>4, Vikas Colony, Ferozepur City</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI ASHOK SACHDEVA</td>
              <td>P.G. in Materials Management/1987-1989</td>
              <td>609189, 603175</td>
              <td></td>
              <td>
                Manger (Materials), Vardhman Spinnings &amp; Gen. Mills Ltd,
                Chandigarh Road, Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH JARNAIL SINGH PANDHER</td>
              <td>LL.B/1980-1983</td>
              <td>2562175, 5009245</td>
              <td></td>
              <td>11-C, SBS Nagar Pakhowal Road, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH MANJIT SINGH</td>
              <td></td>
              <td>01655-221424, 98729-46222</td>
              <td>manjit_chem2005@hotmail.com</td>
              <td>Guru Kashi Nagar, V.P.O. Talwandi Sabo, Distt. Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SMT MOHINDER KAUR</td>
              <td>M.Phil/Chemistry</td>
              <td>9417184049, 0171-2644619</td>
              <td>gujralps_ptl@rediffmail.com</td>
              <td>Govt. Ripudaman College, Nabha, Dist. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS SHAVETA GAGNEJA</td>
              <td>LL.M</td>
              <td>9855330039</td>
              <td></td>
              <td>Hotel Chandar Lok, Thana Road, Abohar</td>
            </tr>
            <tr>
              <td style="width: 20%">MS NEEL KAMINI</td>
              <td>MBA</td>
              <td>9988074604</td>
              <td></td>
              <td>
                H.No. 167, Ward No. 13, Near M.C. Park, Bhucho Mandi, Dist. BTI
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. ASHA RANI</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td></td>
              <td>
                Om Oil &amp; Cotton Mill, Maur Mandi, Bathinda Tel. No.
                01655231218
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SMT HARMINDER KAUR</td>
              <td>M.A Pbi</td>
              <td>2363852, 2281776, 2354019</td>
              <td></td>
              <td>464, Phase-I, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. HARINDER SINGH CHAHAL</td>
              <td>M.Phil./Linguistics</td>
              <td>9417354040</td>
              <td></td>
              <td>
                H.No. 358, Street No. 4, Sardar Colony, Near Church, Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS SACHNA MONGA</td>
              <td></td>
              <td></td>
              <td></td>
              <td>1161, Street No. 9, Jawahar Nagar, Moga</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. HARI SINGH BOPARAI</td>
              <td>M.A His/1968-1970</td>
              <td>(R) 2281673 (O) 2282885</td>
              <td></td>
              <td># 289, Phase-I, Urban Estate, Patiala.</td>
            </tr>
            <tr>
              <td style="width: 20%">DR BALKAR SINGH</td>
              <td>Ph.D/1964-1966</td>
              <td>3092736</td>
              <td>balkarsingh@mail.com</td>
              <td>34, Urban Estate, Phase-I, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BALJEET SINGH</td>
              <td>M.A(public adm.), MA (punjabi)</td>
              <td>0175-2622422, 9463811119</td>
              <td>baljeetsinghgill@gmail.com</td>
              <td>Vill. Fatehpur New, PO. Bakhsiwala, Distt. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. MINNI SINGH</td>
              <td>Ph.D Biotechnology/1993</td>
              <td>(M) 97799-32011</td>
              <td>minnisingh@pbi.ac.in</td>
              <td>
                Deptt. Of Biotechnology, Punjabi University, Patiala, H. No.
                Q-44, Punjabi University, Patiala, # 2276-A, Sector 47 C,
                Chandigarh (P.A)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURJEET SINGH WALIA</td>
              <td>M.Sc., Statistics, 2002-2004</td>
              <td>23,709,003,046,444</td>
              <td>walia_gurjeet80@yahoo.com</td>
              <td>
                Deptt. Of Statistics, Pbi. Uni. Patiala/H. No 94, St. No. 2, New
                Bishan Nagar, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. JAGTAR SINGH</td>
              <td>M.Phil/Pol. Sci.</td>
              <td>2673326, 9855708550</td>
              <td></td>
              <td>Vill. Kuka, P.O. Gajju Majra, Dist. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BHARAT SINGLA</td>
              <td>B.Com</td>
              <td>0164-2254146, 9855736549</td>
              <td>singlabharat@yahoo.co.in</td>
              <td>117, Veer Colony, Amrik Singh Road, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SH TARUN GOYAL</td>
              <td>M.Sc/Zoology</td>
              <td>2251545, 2250283</td>
              <td>goyaltarun82@yahoo.co.in</td>
              <td>5247, Malviya Nagar, Gali No 2, Nai Basti, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SH MANINDERJEET SINGH SID</td>
              <td>M.Sc/ Zoology</td>
              <td>01679-236520, 9417639331</td>
              <td>maninderbnl@yahoo.in</td>
              <td>B XI 1283, St. No. 1, Gobind Colony, Barnala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. KESAR SINGH</td>
              <td>M.Phil Eco, LL.B/1984</td>
              <td>01763-220238</td>
              <td></td>
              <td>
                # 1937 , Near School Ground, Brahman Majra Sirhind, Dist.
                Fatehgarh Sahib
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH RAJINDER SINGH</td>
              <td>M.P.Ed</td>
              <td>9872101340</td>
              <td></td>
              <td>VPO Mandvi, Teh. Moonak, Dist. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">DR M.S. SAINI</td>
              <td>Ph.D/Zoology</td>
              <td>2351832, 9417120251</td>
              <td>saini20@ hotmail.com</td>
              <td>
                Deptt. Of Zoology, Punjabi University, Patiala/20, New Mehar
                Singh Colony, Tripuri, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. BIRDAVINDER SINGH DEO</td>
              <td>LL.B</td>
              <td>647-407-9394</td>
              <td>deolb76@hotmail.com</td>
              <td>373 STEELES AVE (W) # BRAMPTON ON L6Y-0P8, CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF. RAMESH KUMAR BANSAL</td>
              <td>Ph.D Eco/1973-1975</td>
              <td>(R) 2219206</td>
              <td>romesh.bansal@gmail.com</td>
              <td>Economics Deptt, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH RAVINDER SINGH</td>
              <td>M.A./Pbi.</td>
              <td>9888341617</td>
              <td>rsghuman@gmail.com</td>
              <td>Vill. Kotla, Nasru, P.O. Rajla, Teh. Samana, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS HARPREET KAUR</td>
              <td>
                M.A., Defence &amp; Strategic Studies, M.A. Eng., M.Phil, M.Ed
              </td>
              <td>01637-260605, 98767-06204</td>
              <td>harpreetdhanju75@yahoo.in</td>
              <td>H.No 1074, Backside Civil Hospital, Malout</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. MOHD. RAMZAN</td>
              <td>M. Sc.,M. Phil.</td>
              <td>01675-251919, 9417780175</td>
              <td></td>
              <td>
                B/S Dr. Prem Lata Hospital, GTB Colony, H. No. 117,
                Malerkotla-148023
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARKANWAL SINGH</td>
              <td>Zoology</td>
              <td>01679-288561, 288161, 690</td>
              <td>gaggucheema@yahoo.com</td>
              <td>
                S/O Sh. Harnaib Singh, VPO Cheema, Teh. &amp; Dist. Barnala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURDEEP SINGH</td>
              <td>M.A.</td>
              <td>2361613</td>
              <td></td>
              <td>
                15 Corner View, Near Walia Nursing Home, Dukhniwaran Sahib Road,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR MAJOR S. DHILLON</td>
              <td>M.Sc Zoology/1970-1972</td>
              <td>951-279-4461, 951-340-251</td>
              <td></td>
              <td>2448, Centennial Way, Corona, Calif., USA. 92882</td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARMANDEEP SINGH</td>
              <td>M.Tech/Com. Sci.</td>
              <td>2353011, 9855857444</td>
              <td></td>
              <td>Jhajj Farm, Vill. Jhill, Sirhind Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">M/S PRABHJOT KAUR</td>
              <td>M.Sc/ Zoology</td>
              <td>9888833593</td>
              <td>jot_sapphire@yahoo.co.in</td>
              <td>263, Ward No. 7, Sunder Nagar, Doraha, Dist. Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. CHARANPREET SINGH BU</td>
              <td>M.Sc., M.Phil., Ph.D</td>
              <td>3257316, 9356068023</td>
              <td></td>
              <td>
                Govt. Ripudaman College, Nabha, Patiala. Punjab/Dr. C. P. Singh,
                198, Urban Estate, Phase III, Patiala. 147002
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH AKHIL PURI</td>
              <td>MCA/2003-2006</td>
              <td>01822-237721, 9855449800</td>
              <td>akhilpuri@hotmail.com</td>
              <td>27-B, Officers Colony, Kapurthala, 144601, Punjab</td>
            </tr>
            <tr>
              <td style="width: 20%">SH PANKAJ MAHESHWARI</td>
              <td>MBA/PUSBS</td>
              <td>01655-240007</td>
              <td>pankaj_holani 2008@rediffmail.com</td>
              <td>
                C/O Jagan Nath Ram Krishan, Commission Agent, Ranan Mandi, Dist.
                Bathinda
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS SONIA RANI</td>
              <td>,,</td>
              <td>01652-227106</td>
              <td></td>
              <td>Ward No 10, Shiv Parvati Mandir Street, Mansa</td>
            </tr>
            <tr>
              <td style="width: 20%">MS KOMAL</td>
              <td>M.Sc./Zoology</td>
              <td>01887-224328</td>
              <td>komalkapila@rediffmail.com</td>
              <td>33-AA, Nangal T/Ship-140124 (Punjab)</td>
            </tr>
            <tr>
              <td style="width: 20%">SH NARINDERJIT SINGH</td>
              <td>M.A./Pbi.</td>
              <td>01675-213308</td>
              <td></td>
              <td>
                Vill. Kaulseri, P.O. Bhullerher, Teh. Dhuri, Dist. Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH NAVDEEP SINGH</td>
              <td>MBA/PUSBS</td>
              <td>9418470280, 9816863295</td>
              <td>navdeep561983@yahoo.com</td>
              <td>V &amp; PO Alampur, Teh. Jaisinghpur, Dist. Kangra, H.P.</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. V.K. SINGHAL</td>
              <td>M. Sc.,Ph. D.</td>
              <td>2206611, 9872646611</td>
              <td>vksinghal53@gmail.com</td>
              <td>
                Department Of Botany, Punjabi University, Patiala/#47A, K. S.
                Enclave, St. No. 2, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR MALVINDER SINGH MALI</td>
              <td>Journlism And Mass communication/1994-1997</td>
              <td>01672-276455, 276670, 981</td>
              <td></td>
              <td>V.P.O. Samraudi, Distt. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">MS DEEPIKA GROVER</td>
              <td>Zoology</td>
              <td>01672-503962</td>
              <td>rsdeeps@yahoo.com</td>
              <td>39, Partap Nagar, Outside Sunami Gate, Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH DEEPAK MEHTA</td>
              <td>M.P.Ed</td>
              <td></td>
              <td></td>
              <td>H. No. 500, Ram Nagar, Hosiharpur</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. BALWANT SINGH SALARIA</td>
              <td>Ph.D./Physics</td>
              <td>9855433900</td>
              <td>bssalaria52@yahoo.com</td>
              <td>
                Dept. Of Physics, P.U.P. / Vill. &amp; P.O. Jangal, Teh.
                Pathankot, Dist. Gurdaspur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH SUNIL GARG</td>
              <td>M.A His/1982-1984</td>
              <td>2224297, 2203182, 98143-4</td>
              <td></td>
              <td>#503, Dhobi Ghat, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH MUKESHINDER SINGH SIDH</td>
              <td>B.Tech/2002-2006</td>
              <td>2350892</td>
              <td>mukeshsi@techmahindra.com</td>
              <td>8346/5, Preet Nagar, Tripuri Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH SOURAV GUPTA</td>
              <td>MBA/PUSBS</td>
              <td>01764-245816, 9888845816</td>
              <td>sourav_ptr@yahoo.com</td>
              <td>
                Gupta Jewellers, Shop No. 10-B, Naya Bazaar, Patran, Dist.
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURINDERVEER SINGH</td>
              <td>MBA/PUSBS</td>
              <td>99145-72842</td>
              <td>gvs.sidhubrar@gmail.com</td>
              <td>
                Vill. Baina Bulland, Teh. Amloh, PO. Nurpura, Dist. Fatehgarh
                Sahib
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. SULEKHA RANI</td>
              <td>M. Sc., B.Ed</td>
              <td>9815440151</td>
              <td>aastha_sulekha@yahoo.co.in</td>
              <td># 250, Model Town Extension Block-D, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH MANJIT SINGH MAKKAR</td>
              <td>M.A./Philosophy</td>
              <td>9417119091, 01639250031</td>
              <td>manjit5669@gmail.com</td>
              <td>Govt. College Of Education, Faridkot</td>
            </tr>
            <tr>
              <td style="width: 20%">MS HARSIMRAN KAUR</td>
              <td>MBA/PUSBS</td>
              <td>9814073439</td>
              <td>harsimran-kaur0@yahoo.com</td>
              <td>E-17, Jagdish Colony, Rajpura Raod, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR SURINDER MOHAN VASUDEV</td>
              <td>Ph.D/1969</td>
              <td>2285675, 9803364061</td>
              <td></td>
              <td>3167, Phase-II, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. LABH SINGH</td>
              <td>Ph.D</td>
              <td>9469797979</td>
              <td>labhsingh@gmail.com NIL</td>
              <td>
                #39 Sarv Mangal Society PH-1 East VIP Road Zirakpur Punjab.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS PRABHLEEN KAUR</td>
              <td>M. Sc.</td>
              <td>9781404085</td>
              <td></td>
              <td># 2510, Sector-70, Near The British School, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">DR KANWAL JIT KAUR GILL</td>
              <td></td>
              <td>22828570</td>
              <td>k_k_gill@yahoo.com</td>
              <td>
                Deptt. Of C.C, Pbi. Uni., Patiala/207, Urban Estate, Phase-I,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. SUKHJINDER SINGH TIW</td>
              <td>M.Phil,./Pbi.</td>
              <td>9417018411</td>
              <td></td>
              <td>
                Vill. Chanarthal Khurd, P.O. Chanarthal Kalan, Dist. Fatehgarh
                Sahib
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. JIWAN SINGH</td>
              <td>M. Sc., M.Ed</td>
              <td>7696043948, 9872816725</td>
              <td>jsrupal@gmail.com</td>
              <td>D-439, Azad Nagar, Sirhind Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS SHELLY</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>shellysingh28@gmail.com</td>
              <td>
                Dina Nath Tyre Street, Ward No. 5, Near Bus Stand, Mansa M.No.
                82839-17944
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. RUPINDER KAUR</td>
              <td>M.Sc. (Mathematics)/2005</td>
              <td></td>
              <td></td>
              <td>
                #22160, St. No. 11/1, Power House Road, Bathinda Tel. No.
                01642221318
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. MANJEETPAL KAUR</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td>mannu7616@gmail.com</td>
              <td>VPO. Jhupar Khera Abohar Distt. Fazilka M.No. 95013-63908</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. DR. HEMANT KAPIL</td>
              <td>Ph.D (Music)/2008-2012</td>
              <td></td>
              <td>ykapil234@gmail.com</td>
              <td>
                #1576/1, Near Badi Sabji Mandi, Near Shish Ganj Gurudwara,
                Ambala City (M.No. 94684-38946)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. SHALINI GUPTA</td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                HIG-753, Urban Estate, Phase-2, Patiala (Tel No. 01752280454)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. GURLEEN KAUR</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td></td>
              <td>5-C, Malwa Colony, Patiala Tel. No. 2211181</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. MANJINDER SINGH</td>
              <td>Diploma in Gatka/2015-2016</td>
              <td></td>
              <td></td>
              <td>
                # 61, Village Sheakhpura Near Punjabi University, Patiala M.No.
                95173-19153
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. ASHOK KUMAR</td>
              <td>M.A. (Music Instrumental)/2005-2007</td>
              <td></td>
              <td>musicashok85@yahoo.com</td>
              <td>
                #384, Krishna Colony, Opp. Bus Stand, Tohana, Haryana M.No.
                095418-85800
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. DR. JAGJIT SINGH</td>
              <td>1989-1991</td>
              <td></td>
              <td>jagjitsingh0007@gmail.com</td>
              <td>
                #2875/13, Sirhind Mandi, Distt. Fatehgarh Sahib (M.No.
                99882-11707)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. PARKASH SINGH</td>
              <td>Research Scholar</td>
              <td></td>
              <td>parkashveer9@gmail.com</td>
              <td>
                Rattan Nagar (Datian Wali), PO Dharamgarh, Tehsil Sunam, Distt.
                Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. SUDHIR KUMAR</td>
              <td>M.Sc. (Sports Science)/2014-2016</td>
              <td></td>
              <td>sk03sudhirkumar@gmail.com</td>
              <td>
                RZ.51,Near Railway Factory, N.O. Iind Najafgarh, New Delhi M.No.
                95017-45278
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. PARABHJEET KAUR</td>
              <td>M.Phil. (Linguistics)</td>
              <td></td>
              <td>parabhjeetkaur@gmail.com</td>
              <td>
                Ward No. 11, Jeevan Nagar, Maout, Distt. Shri Kuktsar Sahib
                M.No. 87280-05989
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. HARPREET KAUR</td>
              <td>M.A. (Def)/1990-1992</td>
              <td></td>
              <td>harpreetdhanju75@yahoo.in.</td>
              <td>
                #1074, Backside Civil Hospital, Malout (M.No. 98767-06204)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS RAJBIR KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>gbhullar06@gmail.com</td>
              <td>
                Vill. Chotte Bille, Ummarwal Billa, Jalandhar (M.No.
                93163-44988)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS VIPANVEER KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>khairabinay63@gmail.com</td>
              <td>
                Vill. Bishanpura, Patiala Road, Sunam, Distt. Sangrur M.No.
                95924-84212
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. SATINDER SINGH</td>
              <td>
                PG Diploma in Health Fitness &amp; Trainer (Sports
                Science)/2015-16
              </td>
              <td></td>
              <td>satindersandhu9100@gmail.com</td>
              <td>
                Vill. PO Dandrala Dhindsa, Near Tehsil Nabha, Distt. Patiala
                M.No. 98769-09100
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS NAVNEET KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>navneetkaur@gmail.com</td>
              <td>
                VPO Maipur, Tehsil Patran, Distt. Patiala (M.No. 98762-25066)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. ONKAR SINGH</td>
              <td>M.B. Pbi, Hindi/1966-1968</td>
              <td>2367495</td>
              <td></td>
              <td># 19, Prem Nagar, Bhadson Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">S. MANDEEP SINGH SIDHU</td>
              <td>M.Sc.</td>
              <td>9592900051</td>
              <td>cop11ms@gmail.com NIL</td>
              <td>The Shelter Doctor Kehra Singh Marg, Kk Road, Mukatsar.</td>
            </tr>
            <tr>
              <td style="width: 20%">DR GURMEL SINGH</td>
              <td>Ph.D Phyics/1972-1986</td>
              <td>2282141</td>
              <td></td>
              <td>
                Deptt. Of Physics, Punjabi University, Patiala/466, Phase-I,
                Urban Estate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR KULVIR GOJRA</td>
              <td>Ph.D Pbi/1996-2004</td>
              <td>9871100116, 011-27666621</td>
              <td>kulvirdu@yahoo.co.in</td>
              <td>
                Deptt. Of Pbi., Faculty Of Arts, North Campus, Delhi/360, St.
                No. 3, Tagore Nagar, Hoshiarpur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH BHAJAN PARTAP SINGH</td>
              <td>M.Sc/ Zoology</td>
              <td>2351625, 9888069880</td>
              <td>bpsdhaliwal@yahoo.com</td>
              <td>403, Anand Nagar-A, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH MAAN SINGH GILL</td>
              <td>LLB</td>
              <td>9815344890</td>
              <td></td>
              <td>145, Opp. Pbi.Uni. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. KARAMJIT KAUR</td>
              <td>M. Sc., M.Phil</td>
              <td>9914144145</td>
              <td>sukhkaranleen@gmail.com</td>
              <td>
                Headmistress, Govt. High School, Karhali/# 72 A, Rose Avenue,
                Near Hari Om Public School, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. JOGINDER SINGH SAHI</td>
              <td>M.Sc. Geography</td>
              <td>905-654-0282</td>
              <td>jogindersahi@gmail.com</td>
              <td>BRAMPTON ONT. PINE CODE L6R2T9, CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">DR JAGTAR SINGH BANAIT</td>
              <td>,,</td>
              <td>2286816, 3046310</td>
              <td>js_banait@yahoo.com</td>
              <td>
                Deptt. Of Chemistry, Pbi. Uni., Patiala/4079, Phase II, Urban
                Estate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS APOORVA BASANDRAI</td>
              <td>M.Tech</td>
              <td>01826-222565</td>
              <td>apoorva_basandrai@infosys.com</td>
              <td>Opp. DSP Residence, Club Road, Phillour, Distt. Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">DR SAGAN DEEPT KAUR</td>
              <td>Ph.D/Zoology</td>
              <td>0172-2773178, 2743980, 27</td>
              <td>deepshagan@yahoo.co.in</td>
              <td>439, Sec. 22, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">DR PARAMJEET CHEEMA</td>
              <td>Ph.D Botany/1983-1997</td>
              <td>(R) 2286048 (O) 2286245,</td>
              <td>dr_paramjeet@rediffmail.com</td>
              <td>122, Phase-2, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. BIKRAMJIT SINGH LAKH</td>
              <td>M.Sc.Statics/1968-1970</td>
              <td>2234641, 0172-3102696, 98</td>
              <td></td>
              <td>
                Retd. Bank Manager, # 642 Ph-X, Sector 64, Mohali, Distt. Ropar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR JASVIRINDER SINGH</td>
              <td>Ph.D Botany/1981-1990</td>
              <td>(R) 2220986, 9417242986</td>
              <td>jisk_pbi@rediffmail.com</td>
              <td>
                Department Of Botany, Punjabi University, Patiala/26, Raja
                Avenue, 21 No. Phatak, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARBANS LAL</td>
              <td>M.Phil, Eng., B.J.M.C</td>
              <td>94165-72972, 01743-223982</td>
              <td></td>
              <td>Govt. Girls Sr. Sec. School, Cheeka, Kaithal</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS KANWALJIT KAUR AHLUWA</td>
              <td>Ph.D./Zoology</td>
              <td>2784489</td>
              <td></td>
              <td>F-23, Sec 25, P.U. Campus, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. KINDERJIT KAUR</td>
              <td>M. Sc.,M. Phil</td>
              <td>01874-276237, 9855176056</td>
              <td>bnkcdhariwal@yahoo.com</td>
              <td>
                Bebe Nanaki Khalsa College For Women, Dhariwal, Dist. Gurdaspur,
                Punjab/VPO Marar, Teh. Batala, Dist. Gurdaspur, Punjab
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. LAKHVINDER SINGH SIDH</td>
              <td>M.A Pol. Sci., Ph.D, LL.B/ 1988-1996</td>
              <td>2285743, 2282885, 9872637</td>
              <td></td>
              <td>
                Department Of Correspondence (Pol Sci) Punjabi University
                Patiala/3089, Phase II, Urban Estate, Patiala.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH NIRMALJIT SINGH</td>
              <td>LL.B/1979-1985</td>
              <td>2282119, 98140-09671</td>
              <td></td>
              <td># 47, Theri, Near M.I.G. 420, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH JAI NARAIN</td>
              <td>M.A His/1982-1984</td>
              <td>2214631, 01765256151, 981</td>
              <td>jngoyal24@yahoo.co.in</td>
              <td>#39, Khalsa College Colony, Patiala.</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. G.S. PASRICHA</td>
              <td>M.Com1988-1990</td>
              <td>9872026257, 01887220643</td>
              <td></td>
              <td>Commerce Deptt., Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF RANJIT SINGH GHUMAN</td>
              <td>Ph.D Eco./1977-1981</td>
              <td>(R) 2282040 (O) 2282461-6</td>
              <td>ghumanrs@yahoo.co.uk</td>
              <td>
                Econonics Deptt., Pbi. Uni. Patiala/H.No. 804, Urban Estate,
                Phase I, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH MANDEEP SINGH</td>
              <td>M.P.Ed</td>
              <td>9463154195</td>
              <td></td>
              <td>VPO Kalyon, Teh. &amp; Dist. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. ANJULA BREJA</td>
              <td>M. Sc., M. Phil</td>
              <td>011-45521800, 9958133300</td>
              <td>breja.anjula@gmail.com</td>
              <td>B2/70, First Floor, Paschim Vihar, Delhi-63</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. GURMAIL KAUR</td>
              <td>M. Sc., M.Phil, M.Ed</td>
              <td>9417756489, 9872588756</td>
              <td>gk_mann@yahoo.com</td>
              <td>
                Dr. K. S. Mann, #-Q-28, Type V, SLIET Longowal, Sangrur, Punjab
                148106
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH JASPREET SINGH</td>
              <td>M.Com, P.G.D.C.P/1990</td>
              <td>2363464, 2300094, 2223587</td>
              <td></td>
              <td># 208, Ghuman Nagar, Sirhind Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ASHISH KUMAR</td>
              <td>MBA</td>
              <td></td>
              <td></td>
              <td>
                Vill. Beri-Mian, PO Gehrwin, Teh. Jhandutta, Dist. Bilaspur
                (H.P)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SMT. PUSHPAL KAUR</td>
              <td>M.A Eng, Pbi, M.Ed/1981-1983</td>
              <td>2209460, 2225239</td>
              <td></td>
              <td>
                # 159 E, Bhupindra Nagar, Civil Lines, Patiala. (# 19, Century
                Enclave, Nabha Road, Patiala.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. SANJAY TALWANI</td>
              <td>M. Sc., Ph.D</td>
              <td>01628-234040, 9815941890</td>
              <td>stalwani@rediffmail.com</td>
              <td>
                A. S. College, Khanna/St. No. 2, Gurcharan Colony, Khanna Khurd
                Road, Khanna
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH RANA RANBIR</td>
              <td></td>
              <td>9988924300, 2285984</td>
              <td>ranaranbir970@yahoo.com</td>
              <td>2338, Phase II, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. SATWINDER KAUR</td>
              <td>M.Sc., B.Ed</td>
              <td>0172-2625372, 9915091200</td>
              <td>ksatwinder@gmail.com</td>
              <td>
                C/O Sh. Himmat Singh, I.P.S. Adg(W), BSF, BSF Campus Lakhnaur,
                P.O. Sohana, Distt. Mohali
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. RAGHUBIR SINGH SALARI</td>
              <td>M.Sc Physics/1984-1986</td>
              <td>2393260, 2393005, 2393138</td>
              <td>rssalaria@ tiet.ac.in</td>
              <td># 20, Type-IV, Thapar Technology Campus, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH SURJIT SINGH JAWANDA</td>
              <td>M.Sc Physic/1972-1975</td>
              <td>01628-289236, 9814325242</td>
              <td></td>
              <td>G.T. Road, Bija, Distt. Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARJINDER SINGH (JEET)</td>
              <td>MBA</td>
              <td>0164-2425742, 9915444158</td>
              <td>jeetrajinder@gmail.com</td>
              <td>VPO Ghudda, Teh. &amp; Dist. Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">MS AMBIKA</td>
              <td>M.Sc/ Zoology</td>
              <td>2320512, 2215835</td>
              <td></td>
              <td>
                Khalsa College, Patiala/Nahar Bhawan, Samania Gate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. GURCHARAN SINGH VIRK</td>
              <td>M.A Eng, P.G. Dip. in Lingustics/1967-1970</td>
              <td>0172-2602739, 98143-02391</td>
              <td>agvirk@yahoo.com</td>
              <td># 218, Sector 19-A , Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. ANJU SINGLA</td>
              <td>M.Com, Ph.D./1989-1999</td>
              <td>0172-2744251, 9872817577</td>
              <td>tribhawansingla@sify.com</td>
              <td>578, Sec. 11B, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SH MANPREET SINGH PANDHE</td>
              <td>M.Sc/Zoology</td>
              <td>01628-231942</td>
              <td>mpandher.iari@gmail.com</td>
              <td>
                Chatar Singh, A.S. Sr. Sec. School, G.T. Road, Khanna, Dist.
                Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH JASWINDER SINGH GILL</td>
              <td>M.phil(History)</td>
              <td>9988110456</td>
              <td></td>
              <td>3089, Phase II, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. JASMER SINGH</td>
              <td>M.A Eco</td>
              <td>(R) 0175-2285147 (O)22856</td>
              <td></td>
              <td># 2109, Phase-II, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. BALJINDER SINGH</td>
              <td>Ph.D./Pbi./1993-1968</td>
              <td>01628-275059, 01764-22009</td>
              <td></td>
              <td>2675, Phase II, U.E., Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH KULWINDER SINGH</td>
              <td></td>
              <td>01672-285769</td>
              <td></td>
              <td>V &amp; P.O. Nadampur, Distt. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BALWAN SINGH</td>
              <td>M.Tech</td>
              <td>9416270251</td>
              <td>balwan2k@rediffmail.com</td>
              <td>
                Vill. Garwa, P.O. Patwan (Behal), Teh. Siwani, Distt. Bhiwani
                (HR)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH</td>
              <td>,,</td>
              <td>01765-231413, 98158-44420</td>
              <td>maan82@rediffmail.com</td>
              <td>
                120, Shiv Temple Road, T &amp; P.O. Amloh, Dist. Fatehgarh Sahib
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR BALJIT KAUR SEKHON</td>
              <td>Ph.D Pbi./1988</td>
              <td>(R) 2285580 (O)2284443</td>
              <td></td>
              <td>
                D.P.D., Punjabi University, Patiala. 4035, Urban Estate II,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH MANDEEP SINGH</td>
              <td>,,</td>
              <td>01762-267549</td>
              <td></td>
              <td>Vill. Chamaru, P.O. Lachrukalan, Teh. Rajpura, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH DAVINDER KUMAR</td>
              <td>MBA/PUSBS</td>
              <td>01883-274383, 9417761063</td>
              <td>davinderusbs@gmail.com</td>
              <td>Vill. Chhana Rai, PO Bhangala, Dist. Hoshirpur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BALWINDER SINGH</td>
              <td>MA, Ph.D</td>
              <td>9872543143</td>
              <td>mbceralla@gmail.com</td>
              <td>V.P.O. Ubha,Teh. &amp; Distt. Mansa</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. MOHAN SINGH BHUPAL</td>
              <td>M.Sc., M.Phil</td>
              <td>0522-2208093, 9415460923</td>
              <td>msbask1987@yahoo.co.in</td>
              <td>
                Araya Bhawan, 17, Rana Partap Marg, Locknow, U.P./# 4331, Urban
                Estate, Ph.-II, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS SUMITA SHARMA</td>
              <td>M.C.A. 1995-1998</td>
              <td>01744-25005, 0161-603175</td>
              <td></td>
              <td>H.No. 704/13, Urban Estate, Kurukshetra, Haryana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. AJAY SEHGAL</td>
              <td>M.Phil Mathematics/1982-1985</td>
              <td>01883-236284</td>
              <td></td>
              <td># 14-B, Sector 3, Talwara Town Ship, Distt. Hoshiarpur</td>
            </tr>
            <tr>
              <td style="width: 20%">MISS SUJNEET KAUR BOLENA</td>
              <td>M.A. Dance</td>
              <td>09216616999, 09313208817</td>
              <td>suzneet@yahoo.co.in</td>
              <td>
                Vill. Nangal Khurd, P.O. Behram Sarishta, Distt. Jalandhar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS MANJEET KAUR</td>
              <td>M.A./Pol. Sci./2003-2005</td>
              <td>01763-268388, 9872829274</td>
              <td></td>
              <td>Vill. Barkat Pur, P.O. Latour, Dist. Fatehgarh Sahib</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. BHAJAN SINGH</td>
              <td>Ph.D./Physics</td>
              <td>2286576, 9417002276</td>
              <td>bhajan2k1@yahoo.co.in</td>
              <td>412-C, Phase-II, U.E, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">M/S JATINDER PAL KAUR</td>
              <td>M.Sc/ Zoology</td>
              <td>01763-252347</td>
              <td>jatinderghuman27@yahoo.com</td>
              <td>
                155, W.No. 7, Mohalla Hakima, Bassi Pathana, Dist. Fatehgarh
                Sahib
              </td>
            </tr>
            <tr>
              <td style="width: 20%">PROF. GURNAM SINGH</td>
              <td>M.Phil Music/1984</td>
              <td>(R) 0175-2285014</td>
              <td>drgnam@yahoo.com</td>
              <td>#2107 Urban Estat Phase I Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS KAMALJIT KAUR</td>
              <td>M.P.Ed</td>
              <td>9855051427</td>
              <td></td>
              <td>
                Sheed-E-Alam Sukdev Thapper Sen. Sec. School Bharat Nagar
                Chownk, Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH DALJEET SINGH</td>
              <td>M.A., Defence &amp; Strategic Studies</td>
              <td>2633330, 98149-64528</td>
              <td></td>
              <td>Vill. Panjeta, PO Bhunerheri, Teh. &amp; Dist. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS BALBIR KAUR</td>
              <td>Ph.D/Chemistry</td>
              <td>2282824, 3046410</td>
              <td>aries_balbir@yahoo.co.in</td>
              <td>
                Deptt. Of Chemistry, Pbi. Uni., Patiala/3003, Phase-2, Urban
                Estate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR SUKHDARSHAN SINGH KHEH</td>
              <td></td>
              <td>2286571, 9815611023</td>
              <td>sukhdarshan05@yahoo.co.in</td>
              <td>
                Deptt. Of Law, Punjabi University, Patiala/4023, Phase-2, Urban
                Estate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR SUKHPAL SINGH THIND</td>
              <td>Ph.D Pbi/1990-1994</td>
              <td>0181-2205579, 98885-21960</td>
              <td>sukhpalthind@yahoo.com</td>
              <td>Shifted To Canada</td>
            </tr>
            <tr>
              <td style="width: 20%">SH JASBIR SINGH</td>
              <td>LL.B/1997-1999</td>
              <td>98146-25260</td>
              <td></td>
              <td>
                Advocate, Vill. Chadiala, P.O. Amlala, Teh. Rajpura, Distt.
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR MUKENDER SINGH</td>
              <td></td>
              <td>98153-15812</td>
              <td></td>
              <td>
                Deptt. Of Statistics, Pbi. Uni. Patiala /H. No. 2575, Urban
                Estate, Phase-2, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH AMIT KATEWA</td>
              <td>Zoology</td>
              <td>01572-249593</td>
              <td></td>
              <td>
                Katewa House, C-36, Veertya Colony, Nawalghar Road Sikar,
                Rajasthan
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS RANJIT KAUR</td>
              <td>M.P.Ed</td>
              <td></td>
              <td></td>
              <td>207, Stock No. 27, Mohalla Premgarh, Dist. Hoshiarpur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH JASPREET SINGH MADAN</td>
              <td>B.Tech/2002-2006</td>
              <td>2218240</td>
              <td></td>
              <td>19, Waraich Colony, Ranbir Marg, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARBANS SINGH</td>
              <td>MBA/PUSBS</td>
              <td>01679-271517</td>
              <td>harbansshergill@yahoo.co.in</td>
              <td>Ward No. 7, Near Andrla Deara, VPO Tapa, Dist. Barnala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. RAVINDER KUMARI</td>
              <td>M.Sc., M.Phil, Botany</td>
              <td>9478143405</td>
              <td>ravi2163@gmail.com</td>
              <td>IFF, Prem Vihar, S.B.S. Nagar, Pakhowal Road, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH RAMAN KUMAR SKKA</td>
              <td>M.Phil/Zoology</td>
              <td>01672-251616, 9855157616</td>
              <td></td>
              <td>B-73, St. No. 2, Officer's Colony, Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH SUSHIL KUMAR</td>
              <td></td>
              <td>9417405636</td>
              <td></td>
              <td>
                Yadawindra College Of Engineering, Guru Kashi, Pbi. Uni. Campus,
                Talwandi Sabo/ H.No 17423, Minocha Colony, Gali No. 2, Bathinda
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS GAGANPREET KAUR SAINI</td>
              <td>,,</td>
              <td>0181-2274973</td>
              <td>gagansaini1@rediffmail.com</td>
              <td>177, Indra Park, PO Model Town, Jalandhar</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ABHINEK NANDA</td>
              <td>MBA/PUSBS</td>
              <td>01872688600, 9814954070</td>
              <td>abhinek_nanda@yahoo.co.in</td>
              <td>Sant Nagar, Railway Road, Qadian, Dist. Gurdaspur</td>
            </tr>
            <tr>
              <td style="width: 20%">DR TEJINDER KAUR</td>
              <td></td>
              <td>2219976, 2282885, 2217960</td>
              <td>tejinder_sp@yahoo.co.in</td>
              <td>
                Deptt. Of C.C., Pbi. Uni. Patiala/9-A, Bachhittar Nagar, Near 22
                No. Phatak, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SMT. PAVITTAR KAUR</td>
              <td>M.Phill</td>
              <td>9915773323</td>
              <td>pavittarkaurdhillon@gmail.com</td>
              <td>V.P.O.Gobindgharh Th. Jaitu Dst, FDK</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. YOG RAJ</td>
              <td>M.Phil./Pbi.</td>
              <td></td>
              <td></td>
              <td>Punjabi Deptt., Punjab University, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">MS NEETU RANI</td>
              <td>Ph. D</td>
              <td></td>
              <td></td>
              <td>C/O B.M Machinery Store, VPO Bhagta Bhai, Distt. Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SH MANDEEP SINGH</td>
              <td>,,</td>
              <td>2670378</td>
              <td></td>
              <td>Vill. Bishaupur Channa, P.O. Ranbir Pura, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS NEETU RANI</td>
              <td>Ph.D</td>
              <td>9463046219,01651-257740</td>
              <td>gustakh_7a@yahoo.co.in</td>
              <td>C/O B.M Machinery Store, VPO Bhagta Bhai, Distt. Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">DR USHA GUPTA</td>
              <td>,,</td>
              <td>5006185</td>
              <td>ushagupta_doc@yahoo.co.in</td>
              <td>
                Deptt. Of Chemistry, Pbi. Uni., Patiala/H. No. 47, Urban Estate,
                Phase II, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR GURINDER KAUR WALIA</td>
              <td>Ph.D/Zoology</td>
              <td>01762-223720</td>
              <td>gurinderkaur_walia@yahoo.co.</td>
              <td>
                Deptt. Of Zoology, Punjabi University, Patiala/J-1/2B, Gobind
                Colony, Rajpura, Dist. Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">PROF KUSUM LATA</td>
              <td>M.Com./1987-1989</td>
              <td>2217999, 2220493</td>
              <td></td>
              <td>
                Deptt. Of Commerce, Punjabi University, Patiala. 10-A, Raghbir
                Colony, Model Town, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH SATINDER SINGH</td>
              <td>MBA</td>
              <td>01746-266329, 9463040869</td>
              <td>satinder01_2005@yahoo.com</td>
              <td>VPO Batta, Teh. Kalayat, Dist. Kaithal (HR)</td>
            </tr>
            <tr>
              <td style="width: 20%">SH INDERJEET SINGH</td>
              <td>M.A. His, M. Lib/1997-2001</td>
              <td>01639-240413, 240001, 981</td>
              <td>mann_inderjeet@yahoo.com</td>
              <td>
                Vill. Sahnewali, P.O. Jhunir, Teh. Sardulgarh, Distt. Mansa
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURJASWINDER SINGH</td>
              <td>M.A, Eco./1994-1996</td>
              <td>01675-283377, 01633-26385</td>
              <td></td>
              <td>
                Pbi. Uni. Regional Centre, Muktsar/ Vill. Chhokran, P.O.
                Mandian, Teh. Malerkotla, Distt. Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. RAJNI BALA</td>
              <td></td>
              <td></td>
              <td>singla2rajni@yahoo.co.in.</td>
              <td>
                #176, W. No. 15, Maur Mandi, Distt. Bathinda Tel. No.
                01655-230195
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. RAJWANT KAUR</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td></td>
              <td>#69, Ekta Nagar, Ferozepur City M.No. 98555-04479</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. NISHU JAIN</td>
              <td>M.Sc. (Mathematics)/2005</td>
              <td></td>
              <td></td>
              <td>
                Subhash Nagar, St. No. 2, Gidderbaha, Distt. Muktsar Tel. No.
                01637-231079
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. GURPREET KAUR</td>
              <td>M.Sc. (Mathematics)/2005</td>
              <td></td>
              <td></td>
              <td>Q. No. F/1, Civil Station, Bathinda Tel. No. 0164-2223385</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. MANDEEP SINGH</td>
              <td>Diploma in Gatka/2015-2016</td>
              <td></td>
              <td>deepmann6734@gmail.com</td>
              <td>
                #105, Guru Teg Bahadur Colony, Comando Complex, Near Jalalpur
                Road M.No. 95923-23007
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. MANISHA UTTAM</td>
              <td>Ph.D (Sports Science)/2015-till continue</td>
              <td></td>
              <td>manisha_uttam1989@rediffmai.com</td>
              <td>#1009, Amam Bara Chowk, Gurdaspur (M.No. 98727-98212)</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. MANINDER SINGH</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td></td>
              <td>
                VPO. Khunan Teh. Ratia Distt. Fatehabad Karyana M.No.9468174008
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. MOHABBAT PREET SINGH</td>
              <td>M.Phil. (Sports Science)/2011-till continue</td>
              <td></td>
              <td></td>
              <td>VPO Samme Vala Distt. Shri Mukarsar Sahib M.No.9876878444</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. MANPREET SINGH</td>
              <td>M.Phil. (Sports Science)/2015-till continue</td>
              <td></td>
              <td>mprandhawamp@gamil.com</td>
              <td>#22, Block-C, Putlighar Amritsar M.No. 75089-08021</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. KANCHAN</td>
              <td>M.Sc. (Mathematics)/2005</td>
              <td></td>
              <td></td>
              <td>
                M/S Ashoka Teaders, Wholesale Tea Merchant, Near Gandhi Chowk, M
                Dabwali M.No. 98157-38119
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. MANINDER SINGH</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td>manindersekhon3399@gamil.com</td>
              <td>Vill. Katkalan Teh. Nabha Dist. Patiala M.No. 99148-53059</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. MANA RAM</td>
              <td>M.Sc. (Sports Science)/2014-2016</td>
              <td></td>
              <td></td>
              <td>
                Vill.Alipur Jattan PO Charson, Distt. Patiala M.No.9815694887
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. RISHPAL SINGH</td>
              <td>M.A.(Music), M.Phil.(Music), Ph.D. (Music)</td>
              <td></td>
              <td>rishpalsinghvirk@gmail.com</td>
              <td>
                Vill. Noorpur, Tehsil Patran, Distt. Patiala (M.No.
                099151-05008)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. MAAN SINGH</td>
              <td>M.Phil.(Linguistics)/2014</td>
              <td></td>
              <td>maansandhy9@gmail.com</td>
              <td>
                Vill. Gumti, PO Guram, Teh/Distt. Barnala (M.No. 98150-26158)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. RAVI DATT</td>
              <td></td>
              <td></td>
              <td>ravidatt.kaushish@gmail.com</td>
              <td>#571, MIG Urban Estate, Phase-I M.No. 94634-34630</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. DR. RUPINDER SHARMA</td>
              <td></td>
              <td></td>
              <td>rupindersharma09@gmail.com</td>
              <td>
                Vill. Kalamajra, PO Jhansla, Tehsil Rajpura, Distt. Patiala
                M.No. 98726-94866
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. GURKIRAT SINGH</td>
              <td>M.Phil. (Linguistics)</td>
              <td></td>
              <td>kiratamargarh@gmail.com</td>
              <td>#100, Chinar Bagh (Faloli), Patiala M.No. 78372-27007</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. HARVIR KAUR</td>
              <td>M.Phil (Linguistics)</td>
              <td></td>
              <td></td>
              <td>VPO Bujrak, Tehsil Samana, Patiala M.No. 94782-58474</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. HARWINDER SINGH</td>
              <td>M.A., M.Phil(Def.)</td>
              <td></td>
              <td></td>
              <td>
                #43, Ward No. 3, Master Colony, PO Khaunouri Mandi, Tehsil
                Moonak, Distt. Sangrur M.No. 98151-33151
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. DALJEET SINGH</td>
              <td>M.A. (Def)/2006-2008</td>
              <td></td>
              <td></td>
              <td>
                Vill. Panjeta PO Bhunerheri, Teh &amp; Distt. Patiala (M.No.
                98149-64528)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS PAWANDEEP KAUR (POST M</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td></td>
              <td>
                Vill. Harion Kalan, Teh. &amp; PO Samrala, Distt. Ludhiana M.No.
                99151-35147
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS GURVINDER KAUR (POST M</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td></td>
              <td>
                VPO Malkan, Tehsil Dudhlada, Distt. Mansa (M.No. 99887-16464)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. PRITPAL SINGH</td>
              <td>M.Phil. (Linguistics)</td>
              <td></td>
              <td>preetdhaliwal1387@gmail.com</td>
              <td>
                VPO Dhapali, Tehsil Phul, Distt. Bathinda (M.No. 94633-32793)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH M. SUGAMARAN</td>
              <td>M.Pharm</td>
              <td></td>
              <td>Murugesansugumaran@yahoo.com</td>
              <td>3/104, Cross Street, Elatakkam, Dist. Kancheepuram, T.N.</td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARJINDER SINGH</td>
              <td>Ph.D</td>
              <td></td>
              <td>harjinderkhanna@gmail.com</td>
              <td>VPO Ikolaha, Teh. Khanna, Distt-Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. ASHWANI KUMAR SHARMA</td>
              <td>M. Sc.,Ph. D.</td>
              <td>2221257, 2214108, 9814107</td>
              <td>ash14nabha@yahoo.com</td>
              <td>
                Department Of Botany, M. M. Modi College, Patiala/# 102, Raghbir
                Nagar, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR HARBHAGAT SINGH</td>
              <td>M. Sc., B.Ed</td>
              <td>01628-288011, 9855019011</td>
              <td></td>
              <td>
                Village Turmari P.O. Hoal Teh. Khanna Distt. Ludhiana (Pb.)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. MANJIT SINGH MANGAT</td>
              <td>LL.B</td>
              <td>905-456-8999</td>
              <td>manjitlaw@yahoo.com</td>
              <td>1300 STEELES AVE BRAMPTON ON L6T-1A2, CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">MR MUNISH CHANDER</td>
              <td>M.Sc., P.G. D.C/1992-1994</td>
              <td>2352321, 222508</td>
              <td></td>
              <td>6, Aasiana, Dashmesh Nagar -B, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF MAHENDRA LAL TRIVEDI</td>
              <td>Ph.D./Botany</td>
              <td>02962-648660, 9413850845</td>
              <td>mltrivedi@yahoo.co.in</td>
              <td>Ganesh Chowk, Nagarwara, Bhanswara, 327001, Rajesthan</td>
            </tr>
            <tr>
              <td style="width: 20%">SH AMARDEEP SINGH</td>
              <td>MBA</td>
              <td>0164-2281275, 9876132222</td>
              <td>amar.amardeep@gmail.com</td>
              <td>31351, St. No. 10, Paras Ram Nagar, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SH LAKHA SINGH</td>
              <td>M.Phil His., M.J.M.C.</td>
              <td>01676-238312, 94174-34064</td>
              <td></td>
              <td>V.P.O. Gujjran, Teh. Sunam, Distt. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">MS SANDEEP KAUR</td>
              <td></td>
              <td>01628-277934</td>
              <td></td>
              <td>VPO Bharthala Randhawa, Teh. Payal, Dist. Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. ASHOK KUMAR BASRA</td>
              <td>M.Sc., M.Ed</td>
              <td>0181-2225030, 2282223, 81</td>
              <td>basraak@rediffmail.com</td>
              <td># 419-A, Urban Estate, Phase-I, Jalandhar City</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. GURSHARANJIT SINGH</td>
              <td>Ph.D/1998</td>
              <td>9872241650</td>
              <td></td>
              <td>301, Phase 3, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. HARCHARAN SINGH BHULL</td>
              <td>B.Lib.Sc., M.A. Eco, M.L.I. Sc/1970-1971</td>
              <td>01852-225484, 94172-25484</td>
              <td></td>
              <td>
                Opp. Guru Har Krishan Public School , Tarantaran, Distt.
                Amritsar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR RUBINA SHABNAM</td>
              <td>Ph.D/1997-2002</td>
              <td>09317748056, 01675-250883</td>
              <td></td>
              <td>
                W/O Mohd Saleem Khilji, Advocate, Moh. Maler, Hazrat Sheikh,
                Malerkotla, Dist. Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR GEETIKA SIRHINDI</td>
              <td>Ph.D. Botany/1993-2001</td>
              <td>9417807407</td>
              <td>geetikasir123@gmail.com</td>
              <td>
                Deptt. Of Botany, Pbi. Uni. Patiala/140/4, Sidhu Colony, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH NAVDEEP SHARMA</td>
              <td>LL.B</td>
              <td>2221046, 9815566050</td>
              <td></td>
              <td>408, St. No. 4, Gurbax Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. LOVLEEN</td>
              <td>M. Sc.</td>
              <td>9463306703</td>
              <td>lovleeneco@gmail.com</td>
              <td>
                C/O Prof. M. I. S. Saggoo, Department Of Botany, Punjabi
                University, Patiala/D/O Sh. Madan Lal, Near Peer Di Than, New
                Hari Nagar, Hoshiarpur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. BIRINDER SINGH</td>
              <td>M.B.A/1975-1976</td>
              <td>0172-2726583, 2664518</td>
              <td></td>
              <td># 596, Sector 18-B, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">DR SANJEEV CHUGH</td>
              <td>Ph.D./Biotechnology</td>
              <td>01334-254308</td>
              <td>sanjeev.kchug@yahoo.co.in</td>
              <td>
                N-2 Ram Nagar Colony, P.O. Gurukul, Kangri, Dist. Hardwar, U.A.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. SUKHRISHPAL KAUR</td>
              <td>Ph. D.</td>
              <td>9417937522</td>
              <td>rishi_0905@hotmail.com</td>
              <td>
                H. No. 248, St. No.- 12, Manjit Nagar, Bhadson Road, Patiala,
                Punjab 147001
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH ABHINAV SAXENA</td>
              <td>Zoology</td>
              <td>2365936, 9463617697</td>
              <td></td>
              <td>H.No. 03, St. No. 1, Prem Nagar, Bhadson Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH JASWINDER SINGH</td>
              <td>B.Ed, M.Sc./Zoology</td>
              <td>9814072549</td>
              <td>singhjassi 75@yahoo.co.in</td>
              <td>
                Dept. Of Zoology, Khalsa College, Amritsar/43, Preet Vihar,
                Purani Chungi, PO Rayon Silk Mill, Chharhata Road, Amritsar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. HARWINDER KAUR</td>
              <td>M.Sc., Ph.D</td>
              <td>9464848979</td>
              <td>harwinderkaur.1@gmail.com</td>
              <td>
                Department Of Botany, Punjabi University, Patiala/V.P.O-
                Bajakhana, Teh.- Jaitu Distt.- Faridkot 151205
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH MANINDER SINGH</td>
              <td>M.Sc. MFT./Biotechnology</td>
              <td>01637-260433, 01637-26013</td>
              <td>maninder_sunny83@ yahoo.co.in</td>
              <td>St. No. 2, Super Bazaar, Malout</td>
            </tr>
            <tr>
              <td style="width: 20%">MS PRIYANKA RANI</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>priyanka94bansal@gmail.com</td>
              <td>Tibba Basti, Patran, Distt. Patiala M.No. 98884-54924</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI KIRPAL SINGH GILL</td>
              <td>B.Sc., M.A. (Eco), LL.B, F.I.E./1973-1976</td>
              <td>214786, 212069</td>
              <td></td>
              <td>Kothi No. - 2, Bhupinder Nagar, Civil Lines, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. HARJODH SINGH</td>
              <td>Ph. D Pbi/1990-1998</td>
              <td>2286669, 282462-65, 94172</td>
              <td></td>
              <td>
                Punjabi Literary Studies, Pbi. Uni. PTA. # Q-12, Punjabi
                University Campus, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR MANJIT INDER SINGH SAG</td>
              <td>M.Phil, Ph.D,/1975</td>
              <td>6522571, 9888080327</td>
              <td>msaggoo@rediffmail.com</td>
              <td>
                Deptt. Of Botany, Punjabi University, Patiala/H. No. 71, Indra
                Puri, Sirhind Road, Patiala.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. HARI SIMRAN KAUR</td>
              <td>Ph.D. Hindi/1981-1986</td>
              <td>(R) 2351953</td>
              <td></td>
              <td>Kothi No. 250, Harindra Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR HARSH KUMAR MEHTA</td>
              <td>Ph.D/1978-1982</td>
              <td>01883-236504</td>
              <td>dr_harshmehta@yahoo.com</td>
              <td>Govt. College, Talwara, Hoshiarpur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ASHISH KAKKAR</td>
              <td></td>
              <td>01638-263839</td>
              <td></td>
              <td>Shakti Nagar, St. No. 1, College Road, Fazilka, Ferozpur</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. ATULA SALWAN</td>
              <td>M. Sc., Ph. D</td>
              <td>2205680, 9876197144, 9914</td>
              <td>atula1@hotmail.com</td>
              <td># 36, Raja Avenue, 21 No. Phatak, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR JASWINDER SINGH SAINI</td>
              <td>M.A. Ligustics, Ph.D Pbi/1984-1996</td>
              <td>0181-2414598, 01882-25546</td>
              <td></td>
              <td>
                Deptt. Of Punjabi, Pbi. Uni. Patiala/270, Sainik Vihar, Lane No.
                5, Dhilwan Road, Rama Mandi, Jalandhar.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR GURJIT SINGH</td>
              <td>Ph.D./Philosophy</td>
              <td>2210004, 2211983</td>
              <td>dr.gurjeet@gmail.com</td>
              <td>H.No. 19750, St. No. 12, Ajit Road, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">M/S PRITPAL KAUR</td>
              <td>MBA/PUSBS</td>
              <td>9464478401</td>
              <td>preet.aulabh90@yahoo.com</td>
              <td>
                D/O Sh. Jageet Singh, Vill. Lele Wala, Teh. Talwandi Sabo,Dist.
                Bathinda
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH YOGRAJ</td>
              <td>Ph.D</td>
              <td>(R)0175-2220358, (O)0175-</td>
              <td></td>
              <td>13-E, Model Town, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH PARGAT SINGH RANDHAWA</td>
              <td>M.Sc./Biotechnology</td>
              <td>9814016546</td>
              <td></td>
              <td>Vill. &amp; P.O. Meemsa, Teh. Dhuri, Dist. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS RAJNI KATYAL</td>
              <td>B.Ed, M.Phil/Zoology</td>
              <td>01676-220875, 9350339053</td>
              <td>harjai_rajni@yahoo.co.in</td>
              <td>New Grain Market, SCF 72, Sunam</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. ASHUTOSH MISHRA</td>
              <td>M.J.M.C/1990-1992</td>
              <td>0771-2254874, 0172-263128</td>
              <td></td>
              <td>
                Deptt. Of Journalism, Kurukshetra University, Kurukshetra. 211,
                Samta Colony, Raipur (Chhattisgarh)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARISH KUMAR THAKUR</td>
              <td>M.Phil/Botany/1976-1981</td>
              <td>0172-2654346, 7589090439</td>
              <td>thakurhk@yahoo.co.in</td>
              <td>
                2346, Sector- 29-C, Chandigarh/30/B-3/340, Badungar, Patiala 147
                001
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. RUPINDER SINGH KHERA</td>
              <td>Ph.D Chemistry/1984-1992</td>
              <td>2215722</td>
              <td>zenglow1@yahoo.com</td>
              <td>28, Doctor's Enclave, Stadium Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH KULWANT SINGH</td>
              <td>M.A Pol. Sci., LL.B</td>
              <td>98151-5354101</td>
              <td></td>
              <td>Vill. Hiragarh (Farm House), Devigarh Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS MANPREET KAUR</td>
              <td>M.A. , Pbi.</td>
              <td>2224650, 9815377129</td>
              <td></td>
              <td>H.No. 735/3, Khalsa Mohalla, Dharampura Bazar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR HARPREET SINGH</td>
              <td>Ph.D, Defence &amp; Strategic Studies</td>
              <td>01924-266929, 94641-25063</td>
              <td>hschatha@rediffmail.co</td>
              <td>HIG 920, Urban Estate, Phagwara, Distt. Kapurhala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. P. D. MANGAL</td>
              <td>M. Sc., M. Phil., Ph.D</td>
              <td>2285503</td>
              <td></td>
              <td>H.No. 3156, Ph-II, Urban Estate, Patiala 147002.</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RANDHIR KANWAL</td>
              <td>M.A.,M.Phill(Eco.)</td>
              <td>0161-2310017,9815069017</td>
              <td>rankam0@yahoo.co.in</td>
              <td>
                H/No.13,RS PURAM,Radha Swami Satsang Mumbran Road Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS TULIKA MISHRA</td>
              <td>,,</td>
              <td>0172-2650909</td>
              <td>tulika_chd@yahoo.com</td>
              <td>
                59, Tribune Colony Complex, Raipur Khurd, Airport Chowk,
                Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH DIGAM BARY</td>
              <td>MBA</td>
              <td></td>
              <td></td>
              <td>MIG-536, Phase-1, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR D.K. JINDAL</td>
              <td>Ph.D./Zoology</td>
              <td>01887-220118, 220643</td>
              <td></td>
              <td>
                Govt. Shivalik College, Naya Nangal/1295, Phase II, Shivalik
                Avenue/Naya Nangal, Dist. Ropar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. MUNISH KUMAR</td>
              <td>M. Sc.</td>
              <td>221758, 9996032591</td>
              <td>munishich@yahoo.co.in</td>
              <td>W. N. 6, Shakti Nagar, Cheeka, Distt. Kaithal. Haryana</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. SUBHASH JOSHI</td>
              <td>LL.B</td>
              <td>416-788-5804</td>
              <td>sjoshilaw@gmail.com</td>
              <td>30-1530 DREW RD. MISSISSAUGA, CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. BHARPUR SINGH DHANOA</td>
              <td>M.A Eco/1969-1971</td>
              <td>0172-2634861, 01160-50013</td>
              <td></td>
              <td># 682,Sector-49-A, PSB Complex, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">MS HARPREET KAUR</td>
              <td>M.Com.</td>
              <td>2206426, 3046485, 9872206</td>
              <td>harpreet.pbiuniv@gmail.com</td>
              <td>C.C. Deptt., Pbi. Uni. Patiala/160, Sewak Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH NITIN SABHARWAL</td>
              <td>M.Tech/2004-2006</td>
              <td>0161-2493277, 9872895277</td>
              <td>sendtank@yahoo.co.in, sendtank@gmail.com</td>
              <td>H.No. 152, Atam Nagar, Bank Colony, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">DR PRITHVI RAJ THAPAR</td>
              <td>M.A Eng/1983-1990</td>
              <td>65814305, 9818411018</td>
              <td></td>
              <td>14-B, L.I.G. Flats Madhuban Enclave, Rohtak Road, Delhi</td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARBANS SINGH</td>
              <td>B.A. (Hons) Pbi./1983-86</td>
              <td>01672-230401, 94171-89994</td>
              <td>harbans0077@yahoo.com</td>
              <td># 373, College Road, Sardar Basi, Gali No 5, Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">MS CHARANPREET KAUR</td>
              <td></td>
              <td>2355309</td>
              <td></td>
              <td>22, St. No. 5, Anand Nagar-B, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARBHAJAN SINGH VIRK</td>
              <td>M.A Economics,LLB</td>
              <td>9814251695, 2281022</td>
              <td></td>
              <td>77, Vidya Nagar, Karheri, Opp. Pbi Uni Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR DAVINDER PAL SINGH</td>
              <td>Ph.D. Botany</td>
              <td>2360834, 9876160834</td>
              <td>dp.khokhar@rediffmail.com</td>
              <td>
                Deptt. Of Botany, Pbi. Uni. Patiala/3418, Anand Nagar-B, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH JAGWANT SINGH RAI</td>
              <td>M.A Social Work/1988-1990</td>
              <td>98158-38204</td>
              <td></td>
              <td>
                Vill. Narike (Khurd), P.O. Gowara,Teh. Maler Kotla, Distt.
                Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. KARMJEET KAUR</td>
              <td>M.A. (Linguistics)/2011</td>
              <td></td>
              <td>jeetkarm72@gmail.com</td>
              <td>
                PO Raghu Bangi, Vill. Sukhladhi, Tehsil Talwandi Sabo, Distt.
                Bathinda (M.No. 94789-86983)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. SATPAL SINGH</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td></td>
              <td>VPO Dhindsa Tel.Samrala Distt. Ludhiana. M.No.9464913929</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. RAJVEER KAUR</td>
              <td>Diploma in Gatka/2015-2016</td>
              <td></td>
              <td></td>
              <td>
                VPO Bhagiwander. Tehsil Talwandi Sabo, Distt. Bathinda M.No.
                78373-82413
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. POOJA DUA</td>
              <td>M.Sc. (Mathematics)/2005</td>
              <td></td>
              <td></td>
              <td>
                VPO Ahiya, Near Tanda Urmur, Distt. Hoshiarpur Tel. No.
                01886223371
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. ROOPKAMAL KAUR</td>
              <td>M.Sc. (Sports Science)/2014-2016</td>
              <td></td>
              <td>roopkamal88@gmail.com</td>
              <td>#3075, Rajpura Town Near City Thana. M.No. 99148-14820</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. HARBANS SHARMA</td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                Near Old Police Station, Ward No. 9, Lehra Gaga, Distt. Sangrur
                M.No. 94636-70088
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. RUPALI GOYAL</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td></td>
              <td>
                Deevan Khana Road, Near Sheesh Mahal, Gali No. 2, Malerkotla
                M.No. 98554-54116
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. RAVNEET KAUR</td>
              <td>M.A.(Music), M.Phil.(Music Vocal)/1997-2005</td>
              <td></td>
              <td>gssodhisahil@gmail.com</td>
              <td>VPO Dhilwan Kalan, Distt. Faridkot M.No. 95018-77225</td>
            </tr>
            <tr>
              <td style="width: 20%">MS BEANT KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td></td>
              <td>VPO Cheema, Teh. &amp; Distt. Barnala M.No. 84275-87122</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. KAMALPREET KAUR</td>
              <td>M.Sc. (Sports Science)/2014-2016</td>
              <td></td>
              <td>kamaldengan@gmail.com</td>
              <td>
                #4C/8, Bagrian Road, Nehru Market, Dhuri Sangrur M.No.
                85678-42009
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. JYOTI SHARMA</td>
              <td>M.A.(Music)/1996-2001</td>
              <td></td>
              <td></td>
              <td>
                R-12, Tej Bagh Colony, Sanour Road, Patiala (M.No. 98768-2233)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. NAVJOT KAUR</td>
              <td>Ph.D. (Linguistics)/2009-2015</td>
              <td></td>
              <td>navjotkaursandhu@gmail.com</td>
              <td>
                Vill. Veere Wala Khurd, PO Sandhwan, Tehsil/Distt. Faridkot
                M.No. 84376-24386
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. HARPREET SINGH</td>
              <td>M.A., Ph.D(Def.)/1976</td>
              <td></td>
              <td>hschatha@rediffmail.com</td>
              <td>HIG 920, Urban Estate Phagwara M.No. 94641-25063</td>
            </tr>
            <tr>
              <td style="width: 20%">MS HARMANDIP KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>manamritdhillon@gmail.com</td>
              <td>
                VPO Gureh, Teh. Jagroan, Distt. Ludhiana (M.No. 99148-89893)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. BALJINDER SINGH CHAHA</td>
              <td>M.A. (Def)/1984-1986</td>
              <td></td>
              <td></td>
              <td>7-C, City Centre, Patiala M.No. 98551-20101</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. AMRITPAL SINGH</td>
              <td>M.Phil. (Music)/2009-2011</td>
              <td></td>
              <td>ubcamritpal@yahoo.com</td>
              <td></td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SUKHDEV SINGH SIDHU</td>
              <td>M.A. Eco/1972-1974</td>
              <td>2642473, 98144-37327</td>
              <td></td>
              <td>H.No. 73, Sect. 27-A, Chandhigarh.</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. BALDEV KAUR</td>
              <td>M. Sc.</td>
              <td>0181-2271222, 5015628-629</td>
              <td></td>
              <td>
                H. No. 186, Urban Estate, Phase-II, P. O. Garha, Jalandhar City,
                PIN- 144022
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI VISWAJIT KHANNA</td>
              <td>M.A. (Eng), Bachelor of Law/1980-1985</td>
              <td>0172-2686876, 2701361, 27</td>
              <td>viswajeet@hotmail.com</td>
              <td>
                P.S.I.D.C., Punjab Udyog Bhawan, 17-D, Chandigarh/H.No. 916,
                Sec. 39 A, Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. J.K.BHARDWAJ</td>
              <td>M.B.A/1975-1977</td>
              <td>2212647</td>
              <td>jkpatiala@yahoo.com</td>
              <td># 32, Officers Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">M/S AMRITPAL KAUR</td>
              <td>Zoology</td>
              <td>0161-2630702</td>
              <td>amritpal kaur90@yahooo.com</td>
              <td>H.No. 1057, Krisna Colony, Rahon Road, Ludhiana-7</td>
            </tr>
            <tr>
              <td style="width: 20%">MS AMNINDER KAUR GILL</td>
              <td>M.Tech, Deptt. of Com. Sci.</td>
              <td>9876096204, 3046327</td>
              <td>amninder@rediffmail.com</td>
              <td>
                5605, Sec. 38-Nest, Chandigarh, Vill Sarangp Ur U.T., Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS RAMANJEET KAUR</td>
              <td>M.P.Ed</td>
              <td>9412568163, 9888241352</td>
              <td></td>
              <td>48, Budmajra, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. RAJINDER SINGH JAKHAR</td>
              <td>M. Sc.,M. Phil.,Ph.D.</td>
              <td>2302940, 9464143709</td>
              <td>rajindersinghjakhar3@gmail.com</td>
              <td>80, Gurdarshan Nagar, Patiala.147002 Punjab</td>
            </tr>
            <tr>
              <td style="width: 20%">SH NARESH KANSAL</td>
              <td>M.A His/1982-1984</td>
              <td>2207417, 94170-12072</td>
              <td></td>
              <td># 70, New Lal Bagh, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR HARBANS SINGH JHAJJ</td>
              <td>Ph.D Statistics</td>
              <td>2285656</td>
              <td>drhsjhajj@yahoo.co.in</td>
              <td>
                Deppt. Of Statictics, Punjabi University, Patiala/4104,
                Phase-II, Urban Estate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS STUTI JHANJI</td>
              <td></td>
              <td>01628-229617, 228470</td>
              <td></td>
              <td>1679/3, Nai Abadi, Khanna, Dist. Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">M/S PALLAVI GARG</td>
              <td>MBA/PUSBS</td>
              <td>01676-227457, 9780371850</td>
              <td>pallavi_usbs@yahoo.co.in</td>
              <td>Peer Banna Banoi Road, Gahir Street, Sunam, Dist. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. GURINDER KAUR</td>
              <td>M. Sc.</td>
              <td>5007125, 9781774100</td>
              <td>kaurgurinder05@gmail.com</td>
              <td>
                H. No. 84, Urban Estate, Phase-II, Patiala/ C/O Master Gurnam
                Singh, V. P.O Sherpur, Sherpur Thana, Patti-Thind, Teh. Dhuri,
                Distt. Sangrur, 148025
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. REETA RANI</td>
              <td>M. Sc.</td>
              <td>0164-2240096, 9417846456</td>
              <td>reetabti6@gmail.com</td>
              <td>
                Lecturer, Govt. Rajindra College, Bathinda, Punjab/# 100, North
                Estate, Bathinda
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR MANGALESHWAR SHARMA</td>
              <td>Ph.D/Botany 1968</td>
              <td>2285170, 9417663051</td>
              <td>msharma_patiala@rediffmail.com</td>
              <td>4051, Urban Estate, Phase-II, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. HARBHAJAN SINGH BHATT</td>
              <td></td>
              <td>9872462040</td>
              <td>drhsbhatti 03@yahoo.co.in</td>
              <td>Physics Deptt. P.U. P/ 4248, U.E. Phase-II, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARVINDER SINGH AULAKH</td>
              <td>B.Pharm., MBA</td>
              <td>01636-226070, 9855890420</td>
              <td></td>
              <td>1402/4, New Civil Lines, GT Road, Moga</td>
            </tr>
            <tr>
              <td style="width: 20%">MS BALJINDER KAUR SANDHU</td>
              <td>M.Sc., M.Ed, M.Phil (Edu.)</td>
              <td>2372138, 5060150, 9463052</td>
              <td>babbi-sandhu@yahoo.co.in</td>
              <td>#1359/37, St. No. 13, Guru Nanak Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR BALDEV SANDHU</td>
              <td>Ph.d, Public Adm.</td>
              <td></td>
              <td>bs2155@hotmail.com</td>
              <td>
                20, Woodstream, Cres Kellyville, NSW 2155 Sydney, Australia
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARMANDEEP SINGH DHIND</td>
              <td>Diploma Mass Comm &amp; Journalism</td>
              <td>2233128, 8872611335</td>
              <td>harman.dhindsa7@gmail.com</td>
              <td>80 A, Ghuman Nagar- A, Sirhind Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. ATUL KAPOOR</td>
              <td>LL.B, P.G.D.C.A/1999-2002</td>
              <td>2650251, 5003229, 2650675</td>
              <td></td>
              <td>Lawyer, V.P.O.Sanour, Distt.Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. P.S. PANESAR</td>
              <td>M.Sc., Ph.D., Microbial &amp; Food Tech.</td>
              <td>9417494849</td>
              <td>pspbt@yahoo.com</td>
              <td>
                Biotechnology Research Lab. Deptt. Of Food Engg. &amp; Tech.
                SLIET, Longowal-148106/45,IV,SLIET, Longowal
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARPREET SINGH</td>
              <td>B.Tech/2002-2006</td>
              <td>0161-2783676</td>
              <td>harryin09@yahoo.com</td>
              <td>355, Jassian Road, G.T. Road Side, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. HARCHARAN SINGH</td>
              <td>M.Phil Pbi/1983-1985</td>
              <td>(R) 2200520 (O) 2214108</td>
              <td>harcharansingh80@yahoo.co.in</td>
              <td># 178,Charan Bagh, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. NARINDER KUMAR DOGRA</td>
              <td>Ph.D Pol. Sci./1977-1982</td>
              <td>(R) 2282291</td>
              <td></td>
              <td>Deptt Of Political Science, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ANMOL RATTAN</td>
              <td>LLM/Law Deptt./2006-2008</td>
              <td>9257258259</td>
              <td>jaikishantb@gmail.com</td>
              <td>
                Chamber No. 595, Yadvindera Court Complex, District Court,
                Patiala/267, SST Nagar/Sunder Nagar, Near Harkishan Public
                School, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">PROF. AMARJEET SINGH</td>
              <td>Ph.D</td>
              <td>098767-68918, 9876390290</td>
              <td>amarjeetsingh_bot@yahoo.co.in</td>
              <td>
                Department Of Botany, Punjabi University, Patiala/ # 242-A,
                Charan Bagh, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">PROFF. SUNITA KAPILA</td>
              <td>M.Sc., Ph.D</td>
              <td>0172-2534010, 9872629092</td>
              <td>s_kapila0802@yahoo.co.in</td>
              <td>
                Department Of Botany, Panjab University, Chandigarh/# 2368,
                Sector-44-C, Chandigarh.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. RAJINDER LEHRI</td>
              <td>Ph.D Pbi/1984-1992</td>
              <td>(R) 0175-2286442 (M) 9815</td>
              <td></td>
              <td>
                Punjabi Literary Studies, Punjabi University, Patiala, P-14,
                Pbi. Uni. Campus, PTA.,
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH UDAY KUMAR ARUN</td>
              <td>M.Tech</td>
              <td>9868436509</td>
              <td>uday_arun@yahoo.com</td>
              <td>
                Vill. Khangraitha, PO Nahas Rupauli, Dist. Madhubani, Bihar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">PROF RADHA SHARN ARORA</td>
              <td>Ph.D/1983-1985</td>
              <td></td>
              <td></td>
              <td>Deptt. Of Commerce, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH RANJEET SINGH</td>
              <td>Zoology</td>
              <td>1902205877</td>
              <td></td>
              <td>
                68, Pangi Colony, Shamshi, VPO Shamshi, Dist. Kullu (H.P.)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH ATAM JIT SINGH</td>
              <td>M.A., History</td>
              <td>2370134, 9855070134</td>
              <td>atamjitsingh14@yahoo.in</td>
              <td>759, S.S.T. Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. NARINDERPAL SINGH KAL</td>
              <td>LL.B/1999-2002</td>
              <td>98159^61565</td>
              <td></td>
              <td>
                # 28, Bachitter Nagar, Patiala. Kaleka House, Kothi No 6,
                Dhandial Road, Patran, Dist. Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS PRIYANKA KUMARI</td>
              <td>Zoology</td>
              <td>9888020623</td>
              <td></td>
              <td>
                Sub. Kartar Singh Colony, H. No. 31, Near Malwa School, Bhadson
                Road, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS MEENU DUTTA</td>
              <td>M.Sc/Zoology</td>
              <td>0161-2536655</td>
              <td>meenu_dutta28@yahoo.co.in</td>
              <td>14052, St.No. 6, Parbhat Nagar, Dholewal Chownk, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. RAJINDER SINGH</td>
              <td>M.Ed, Ph.D Public Administration</td>
              <td>9417571570</td>
              <td>rajinderpatran@yahoo.com</td>
              <td>
                New Khalsa Emporium, Jakhal Road, Patran-147105, Distt. Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. BALJINDER KAUR</td>
              <td>M. Sc., M. Phil.</td>
              <td>0161-2562315, 2420987, 98</td>
              <td>dhira999@gmail.com</td>
              <td>
                # 275-F, Shaheed Bhagat Singh Nagar, Pakhowal Road, Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. CHANDER KANTA SATIJA</td>
              <td>Ph.D.</td>
              <td>2553687, 9872614640</td>
              <td></td>
              <td>62, Prof. Colony, Barewal, Road, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH AMANDEEP SINGH</td>
              <td>MBA</td>
              <td>01655244891, 9815576956</td>
              <td>usbsaman@gmail.com</td>
              <td>VPO Bangi Kalan, Teh. Talwandi Sabo, Dist. Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">DR DEVINDER SINGH</td>
              <td>Ph.D/ Zoology</td>
              <td>9815796591, 3046335, 2283</td>
              <td>devinder.ss.61@gmail.com</td>
              <td>
                Dept. Of Zoology, Punjabi University, Patiala/468, Phase I,
                Urban Estate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SMT. SURINDER KAUR</td>
              <td>M.A. His, Diploma In Journalism1976-1979</td>
              <td>(R) 0175-2286566</td>
              <td>sktiwana@yahoo.com</td>
              <td>
                Technical Assistant, Journalism &amp; Mass Communications
                Department, E-30, Pbi.Uni. Campus, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS PUJA BHATIA</td>
              <td></td>
              <td>9888370199</td>
              <td>puja17bt@gmail.com</td>
              <td>124/1 B Block, Govind Nagar, Kanpur</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. SUKHJEET KAUR</td>
              <td>Ph.D , M.Sc.</td>
              <td>0172-2274600</td>
              <td>sukhjeet-sidhu@gmail.com NIL</td>
              <td>3365 Sector - 71 Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">SH MADAN LAL</td>
              <td>MBA</td>
              <td></td>
              <td></td>
              <td>
                Vill. Ghansed, P.O. Suin-Surhar, Teh. Sahar, Dist. Bilaspur,
                H.P.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH DEEPINDER SINGH</td>
              <td>M.E Economics,Sociology</td>
              <td>0175-2311302,2311303, (O)</td>
              <td>deepinderrangi@yahoo.com</td>
              <td>H.No 666, 33B Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. HARISH CHOPRA</td>
              <td>Ph.D, Chemistry</td>
              <td>2300191, 01672-253204</td>
              <td>hk67@rediffmail.com</td>
              <td>45, New Majithia Enclave, Near 24 No. Phatak, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH SUNNY KUMAR</td>
              <td>MBA/PUSBS</td>
              <td>01883-502912</td>
              <td>sunny.pusbs@gmail.com</td>
              <td>
                Guru Nanak Nagar, Khichian Roadm Mukerian, Dist. Hoshiarpur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. GULSHAN K. ARORA</td>
              <td>LL.B/1978-1982</td>
              <td>222409, 222818, 98155-287</td>
              <td></td>
              <td>
                C/O Gee Pee Marble Industry, Sirhind Road, Fatahegarh Sahib
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS AKVINDER KAUR</td>
              <td>Ph.D./Pbi./1996-2006</td>
              <td>9814142673</td>
              <td></td>
              <td>Basant Vatika, Vidya Nagar, Opp. Pbi. Uni. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH SATNAM SINGH</td>
              <td></td>
              <td>9888952421</td>
              <td>satnamaulakh@yahoo.com</td>
              <td>H. No. 60, St. No. 7, Virk Colony, Near DMW, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. GEETA BATISH</td>
              <td>M. Sc.,M. Phil,Ph. D.</td>
              <td>2357392, 9814001904</td>
              <td></td>
              <td>725-A, Harinder Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS SARBJIT KAUR</td>
              <td>,,</td>
              <td></td>
              <td></td>
              <td>Kothi No. 312, Phase II, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">SH MANOJ SOIN</td>
              <td>LL.B</td>
              <td>2225401, 9814806415</td>
              <td></td>
              <td>86, Desi Mehmandari, Opp. Rajpura Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. SUKHJEET KAUR</td>
              <td>Ph.D , M.Sc.</td>
              <td>0172-2274600</td>
              <td>sukhjeet-sidhu@gmail.com NIL</td>
              <td>M.Sc., Ph.D, Dean Student Welfare At SUSCET , Tangori</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BHART BHUSHAN JAIN</td>
              <td>MBA/PUSBS</td>
              <td>01655-241207, 01655-24015</td>
              <td>bhartjain2007@rediffmail.com</td>
              <td>
                Banarsi Dass Rattan Chand Jain, Commission Ajent, Raman Mandi,
                Dist. BTI
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH TARLOCHAN SINGH</td>
              <td>M.Phil, Defence &amp; Strategic Studies</td>
              <td>01887-230628</td>
              <td></td>
              <td>Vill. Mataur, Ward No.6, Anandpur Sahib, Distt. Ropar</td>
            </tr>
            <tr>
              <td style="width: 20%">SH VIKRANT SYNGAL</td>
              <td>MBA</td>
              <td>2219216, 2213136</td>
              <td>ifmc@sify.com</td>
              <td>Kothi No. 50-B, Model Town, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. PARMINDER KAUR</td>
              <td>M. Sc., M. Phil</td>
              <td>9501550400</td>
              <td>pamyhundal@gmail.com</td>
              <td>
                B-13, Staff Colony, Govt. Polytechnic, Near RXS Mills,
                Amritsar/21-Bank Colony, Near Amar Hospital, Patiala-147001
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. SAMAR</td>
              <td>M. Sc.</td>
              <td>01675-257626, 9463861026</td>
              <td></td>
              <td>
                G.T. B, Colony Near Battey Hospital, Malerkotla, Dist. Sangrur,
                Punjab
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. SATINDER K. BANSAL</td>
              <td>LL.B/1978-1980</td>
              <td>01672-233404</td>
              <td></td>
              <td># B-V-266, Patiala Gate, Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">DR PARAMJIT SINGH RAMANA</td>
              <td>Ph.D Eng/1979-1988</td>
              <td>0164-2211413, 2241035</td>
              <td>paramjitramana@yahoo.co.in</td>
              <td>
                Prof. Of English, Regional Centre, Bathinda. (21484, Power House
                Road, Bathinda.)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MISS NEERAJ JINDAL</td>
              <td>B.Sc</td>
              <td>6541968, 9876977368</td>
              <td>usbs_neeraj@yahoo.co.in, limca_68@yahoo.co.in</td>
              <td>520, Harinder Nagar, Sirhind Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. AMAR BHUSHAN AGGARWAL</td>
              <td>M. Sc., B.J., M.M.C</td>
              <td>0175-2282555, 09463037225</td>
              <td>abaggarwal26@gmail.com</td>
              <td>283, Urban Esatate, Phase-II, Patiala 147002</td>
            </tr>
            <tr>
              <td style="width: 20%">DR MUNRUCHI KAUR</td>
              <td>Ph.D. Botany/1988-1996</td>
              <td>2282059, 9988195434</td>
              <td>munruchi@gmail.com</td>
              <td>
                Deptt. Of Botany, Pbi. Uni. Patiala/2059, Phase-2, Urban Estate,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH VARUN KUMAR</td>
              <td></td>
              <td>01976-242396</td>
              <td></td>
              <td>C/O Samrat Boot House, UNA Road,Gagret, Teh. Amb. (H.P)</td>
            </tr>
            <tr>
              <td style="width: 20%">SH SUNIL KUMAR</td>
              <td>MBA/PUSBS</td>
              <td>0164-500073, 9463935093</td>
              <td>sunilghulani246@yahoo.co.in</td>
              <td>33170, St. No. 1, Partap Nagar, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. JAGDEEP SINGH</td>
              <td>M.SC. ZOOLOGY M.PHIL , PH.D</td>
              <td>0172-2274600</td>
              <td>jagdeep@iisecmohali.ac.in NIL</td>
              <td>3365 Sector - 71 Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. AMRIT PAL SINGH KALEK</td>
              <td>M.Sc. zOOLOGY M.phil , PH.D</td>
              <td>9417024945</td>
              <td>apskaleka@gmail.com NIL</td>
              <td>297, Mandir Street , Anand Nagar A Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. TEJ PAL SINGH MANN</td>
              <td>LL.B/1978-1982</td>
              <td>2221894</td>
              <td></td>
              <td># 7-A, Hem Bagh Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH MANIK KUMAR</td>
              <td></td>
              <td></td>
              <td></td>
              <td>621 A, Sec. 14, Nanak Nagar, Jammu</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. KARAMJIT SINGH</td>
              <td>M.Sc.</td>
              <td>2357612, 9417436612</td>
              <td>karamjitsinghcheema@gmail.com</td>
              <td>H.No. 864 St.No. 14, Ghuman Nagar-A, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. SAPNA</td>
              <td>M. Sc., B.Ed</td>
              <td>0172-2277377, 9779051518</td>
              <td>sapson23@gmail.com</td>
              <td>
                51, Green Enclave Colony, P. O. Daun, Teh &amp; Distt. Mohali,
                Punjab
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. NAVJIT SINGH JOHAL</td>
              <td>Bachclor of Journilism/1978-1979</td>
              <td>98155-51478</td>
              <td></td>
              <td>Department Of MJMC, Punabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. GURCHARAN SINGH SIDHU</td>
              <td>M.Sc. Physics/1973-1975</td>
              <td>2609890, 2720875, 2781733</td>
              <td></td>
              <td># 1483/1, Sector 43 B, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SH RANJEET SINGH</td>
              <td>MCA/2000-2003</td>
              <td>9871009780</td>
              <td>rsingh@in.safenet_inc.com</td>
              <td>1852, Sec. 28, Faridabad, Haryana</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. HARJOT KAUR</td>
              <td>C.C Deptt.(Pbi. Uni., patiala)</td>
              <td>9815126375</td>
              <td></td>
              <td>P-6, Punjabi University, Campus</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. SHIV PARSAD</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td></td>
              <td>
                Joginder Mal Bhura Mal, Mehta Furniture House, Mandi Dabwali
                Tel. No. 01668-2273940
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. LAKHWINDER PAUL SINGH</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td></td>
              <td>
                #169, Takia Muhalla, Old W. No. 6, New W. No. 3, Amloh, Distt.
                Fatehgarh Sahib M.No. 98888-49036
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. GAGAN DEEP</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td></td>
              <td>#2443-B, Anand Nagar, Rajpura Town (M.No. 98885-30990)</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. RAMANPREET KAUR</td>
              <td>Diploma in Gatka/2015-2016</td>
              <td></td>
              <td></td>
              <td>
                Vill. Sadda Singh Wala, PO Moora, Distt-Teh. Mansa M.No.
                94649-80730
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. NIRAJ KUMAR SHARMA</td>
              <td>M.Sc. (Sports Science)/2014-2016</td>
              <td></td>
              <td>mrneerajs1508@gmail.com</td>
              <td>
                #227, Dashmesh Avenue, Majitha Road Near Navjyoti School
                Amritsar M.No. 99146-76250
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. SUKHDEV SINGH</td>
              <td>M.Sc. (Sports Science)/2014-2016</td>
              <td></td>
              <td>charanjitmaster41@gmail.com</td>
              <td>VPO.Blbera Teh.Patiala M.No.73079444250</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. SUMANDEEP KAUR</td>
              <td>M.A., M.Phil. Ph.D. (Linguistics) Proceeding</td>
              <td></td>
              <td></td>
              <td>
                #119-121, Harbax Enclave, Opp. Punjabi University, Patiala M.No.
                98883-14993
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. MANDEEP KAUR</td>
              <td>M.Phil. (Linguistics)</td>
              <td></td>
              <td>mandipkaurmoga@gmail.com</td>
              <td>VPO Nasire Wala, Tehsil Dharamkot, Distt. Moga</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. NAVJOT KAUR KASEL</td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                #209, Vidya Nagar, Opp. Punjabi University, Patiala (M.No.
                98726-15320)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. SUNIL KUMAR</td>
              <td>M.A., M.Phil.(Def.)/2005-2009</td>
              <td></td>
              <td></td>
              <td>
                #19, Prem Nagar, Near Thapar College, Patiala M.No. 98782-12132
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. TARLOCHAN SINGH</td>
              <td>M.A., M.Phil.(Def.)/2005-2009</td>
              <td></td>
              <td></td>
              <td>
                Vill. Mataur, Ward No. 6, Anandpur Sahib, Distt. Ropar Tel. No.
                01887-2306280
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS GURSIMAR KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>karamjeets09@gmail.com</td>
              <td>
                #607, St. No. 4, Kartarpura Nagar, Harori Road, Sangrur M.No.
                94640-53101
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. PARAMJIT KAUR</td>
              <td>M.Phil, Ph.D (Linguistics)doing</td>
              <td></td>
              <td>robin.parkar143@gmail.com</td>
              <td>
                #185, Sec. 4, LIC Colony, Mandi Kharar, Mohali M.No. 94647-29228
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS HEENA</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>hs61340@gmail.com</td>
              <td>
                #808, Dhawan Colony, St. No. 8, Ferozepur City (M.No.
                81960-30561
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS TARLOCHAN KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>tarlochan.tk@gmail.com</td>
              <td>
                VPO Balahri Kalan, Distt. Fatehgarh Sahib M.No. 97813-52725
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS VANDANA (POST MATRIC S</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>vandanakardam32@gmail.com</td>
              <td>
                #397, St. NO. 4, Ward No. 5, Dr. B.R. Ambedkar Colony, Khanna
                M.No. 78145-13071
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS INSHA SHAHEEN</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td></td>
              <td>
                Vaidan Street, Near Kamal Cinema Road, Malerkotla M.No.
                98143-48618
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. RAJWANT KAUR</td>
              <td>Ph.D Pbi/1999-2002</td>
              <td>(R) 2287745, 98144-23703</td>
              <td>asa@yahoo.co.in</td>
              <td>D.P.D., Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH KANWAR DEEP SINGH</td>
              <td>M.Phil Pbi</td>
              <td>01675-218074</td>
              <td></td>
              <td>Vill. Jatimajra, P.O. Himtana, Teh. Dhuri, Distt. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. RAVINDER JIT SINGH</td>
              <td>M.Com1991-1993</td>
              <td>9872843436, 2215835</td>
              <td>rsanand1972@gmail.com</td>
              <td>228/2, Chahal Street, Twakli Mor, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH PARWINDER SINGH</td>
              <td>MBA/PUSBS</td>
              <td>01655-221069</td>
              <td></td>
              <td>In Frort Of BDO Block, Talwandi Sabo</td>
            </tr>
            <tr>
              <td style="width: 20%">SH SATNAM SINGH</td>
              <td>M.A., Defence &amp; Strategic Studies UGC (NET), B.Ed</td>
              <td>94633-78266</td>
              <td></td>
              <td>
                H.No. 8546, B/5, Main Bazaar, Near OBC Bank, Gubax Colony,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. S. S. SAINI</td>
              <td>Ph.D</td>
              <td>2227473, 9988803022</td>
              <td></td>
              <td>22-P, Punjabi Bagh, Patiala, 147001, Punjab</td>
            </tr>
            <tr>
              <td style="width: 20%">MR RUPINDER PAL SINGH</td>
              <td>M.Sc., Microbial &amp; Food Tech.</td>
              <td>01881-277117, 9417766114</td>
              <td>nagrarupinder@yahoo.com</td>
              <td>Vill. Bhaowal, PO Bharatgarh, The. &amp; Distt. Ropar</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. BALJIT SINGH</td>
              <td>,,</td>
              <td>2210914</td>
              <td></td>
              <td>30-E, Hira Nagar, Opp. Power Colony No. II, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. ARUN WALIA</td>
              <td>LL.B./1978-1981</td>
              <td>0172-2607341, 2740079, 26</td>
              <td></td>
              <td>Lawyer, Bunglow No.1572, Sector 34-D, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SH JATINDER KUMAR MEHTA</td>
              <td>MCA</td>
              <td>9900822188, 08025500622</td>
              <td></td>
              <td>
                C/O R.K. Mehta, 51, Panchsheel Avenue, Deep Nagar, Jalandhar
                Cantt.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. VIVEK SHARMA</td>
              <td>Ph. D</td>
              <td>9816767189</td>
              <td>vivek03sharma@rediffmail.com</td>
              <td>
                S/O Late Suresh Chand Sharma, Vill. Dhameta, Teh. Fatehpur,
                Dist. Kangra, HP 176025
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS RUPINDER KAUR</td>
              <td>M.Com/1995</td>
              <td>(R) 2226388 (O) 2286245</td>
              <td></td>
              <td>2C, Malwa Colony, Backside Motibagh Palace, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. HARINDER KAUR</td>
              <td>M.Sc.</td>
              <td>98728822528</td>
              <td>h_kaur43@yahoo.in</td>
              <td># 2528, Sec-70, Mohali, Punjab</td>
            </tr>
            <tr>
              <td style="width: 20%">SH SATINDER PAL SINGH</td>
              <td>M.Phil/Punjabi</td>
              <td>01633-265113, 9463240063</td>
              <td>satinder_mks@yahoo.com</td>
              <td>1885/7-B, Tilak Nagar, Muktsar</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. PUNAM BANSAL</td>
              <td>M. Sc., Ph.D, M.Ed</td>
              <td>0172-2698416, 9914385044</td>
              <td></td>
              <td># 359 Sector 38A, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. BALWINDER KAUR CHATH</td>
              <td>M.A. Pbi.</td>
              <td>905-230-8299, 905-230-738</td>
              <td>ajaib.chatha@gmail.com</td>
              <td>45 RAY LAWSON BLYD. BRAMPTON ON LBY3L4, CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">DR GURCHARAN SINGH</td>
              <td>Ph.D/Theatre &amp; T.V./1976</td>
              <td>2286838, 3046293, 940175-</td>
              <td></td>
              <td>
                Theatre And Television, Punjabi University, Patiala/2130,
                Phase-II, Urban Estate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH AMARINDER SINGH</td>
              <td>M.A., Defence &amp; Strategic Studies</td>
              <td>2305181, 98886-08811</td>
              <td></td>
              <td>Kartar Cottage, Lehal Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. MANJIT SINGH NIJJAR</td>
              <td>Ph.D/1980-1987,LL.M</td>
              <td>2283226</td>
              <td></td>
              <td>Q-27, Punjabi University Campus, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH JATINDER PAL SINGH WAR</td>
              <td>M.Sc. Physics, M.Sc. C.S,M.E/1988-1990</td>
              <td></td>
              <td></td>
              <td>1846, Randhawa Road, Kharar, Ropar</td>
            </tr>
            <tr>
              <td style="width: 20%">DR MOHAMMAD IDRIS</td>
              <td>Ph.D</td>
              <td>3046192, 9814171786</td>
              <td>aidris@rediffmail.com</td>
              <td>
                History Deptt., Punjabi University, Patiala/Q-29, Punjabi
                University Campus, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. KULDIP KUMAR LOMIS</td>
              <td>M. Sc.</td>
              <td>0172-2728601, 9814462074</td>
              <td>kuldiplomis@gmail.com</td>
              <td>
                Department Of Forests &amp; Wildlife Preservation, Punjab.
                Forest Complex, Sector 68, SAS Nagar, Mohali, Punjab/H. No. 267,
                Sector- 16A, Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS DEEPIKA</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>gargdeepika123@gmail.com</td>
              <td>Jakhal Road, Peer Colony, Partan</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. SATWINDER PAL SINGH</td>
              <td>M.Sc</td>
              <td>416-918-7653</td>
              <td>satsingh@trebnet.com</td>
              <td>25 HAVELOCK DR BRAMPTON ONTARIO L6W-4A5 CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. JOGINDER SINGH</td>
              <td>M.A Pol. Sci./1976</td>
              <td>2358203</td>
              <td></td>
              <td># 214, Street No. 4-A, Sidhu Colony , Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH DEEPAK KAPOOR</td>
              <td>,,</td>
              <td>01824-270735, 9888123410</td>
              <td>kdips_kandy@rediffmail.com</td>
              <td>Street No. 1, New Harkishan Nagar, Phagwara</td>
            </tr>
            <tr>
              <td style="width: 20%">MS KAVITA SHARMA</td>
              <td></td>
              <td>2217264</td>
              <td></td>
              <td>
                R/O Krishan Kumar Clinical Laboratory, Jagdish Marg, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH JYOTINDER SINGH</td>
              <td>Diploma Mass Comm &amp; Journalism</td>
              <td>8146990009, 9317890009</td>
              <td>jyotinder@gmail.com</td>
              <td>352, Ghuman Nagar A, St. No. 6, Sirhind Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF JOGA SINGH</td>
              <td>Ph.D Anth. Linguistics/1979-1983</td>
              <td>(R) 2281582</td>
              <td>joga@pbi.ac.in</td>
              <td>Head, Linguistics Department, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR RAM SARUP SINGH</td>
              <td>Ph.D./Biotechnology</td>
              <td>2286481, 3046262, 2283073</td>
              <td>rssingh11@lycos.com</td>
              <td>
                Deptt. Of Biotechnology, Punjabi University Patiala/Q-37,
                Punjabi University Campus, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">M/S MAMTA</td>
              <td>MBA/PUSBS</td>
              <td>0181-2260701</td>
              <td>mattu83_agg@yahoo.co.in</td>
              <td>45, St. No. 16, Jalandhar Cantt</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. SATNAM SINGH LADHAR</td>
              <td>M.Sc.M.Phil, Ph.D</td>
              <td>0172-2217877, 9463200886</td>
              <td>ssladhar@yahoo.com</td>
              <td>H.No. 4556-C, MIG Super, Sector-70, Mohali.</td>
            </tr>
            <tr>
              <td style="width: 20%">SMT BALWINDERJIT KAUR</td>
              <td>B.Sc., B.Ed, M.A/1974-1992</td>
              <td>2282141</td>
              <td></td>
              <td>Lecturer, 466, Urban Estate Phase-I, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. SURJIT SINGH</td>
              <td>Ph.D./Pbi./1986-1997</td>
              <td>0161-3957155, 3046458, 93</td>
              <td>surjitpbiu@yahoo.co.in</td>
              <td>
                Deptt. Of Pbi. Pbi. Uni. Patiala/H.No. 3089, Phase 2, Urban
                Estate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH YOGESH KUMAR</td>
              <td></td>
              <td>01655-240265, 9417326731</td>
              <td></td>
              <td>Gali Geeta Bhawan, Rama Mandi- 151301</td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURTEJ SINGH</td>
              <td>M.P.Ed</td>
              <td>9914420083</td>
              <td></td>
              <td>Shekhpura, Near Pbi. Uni. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. HARPREET SINGH BHATI</td>
              <td>Ph.D</td>
              <td>0161-4416354, 9463061618</td>
              <td>bhatiaharpreetsingh@rediffmail.com</td>
              <td>
                105, C-205, OWPL, Phase V, Focal Point Ludhiana-141010
                Punjab/#774, Phase II, Urban Estate, Focal Point, Ludhiana,
                Punjab
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. RAMANDEEP KAUR</td>
              <td>M. Sc., Ph.D</td>
              <td>9417164458</td>
              <td>ramandeepav@rediffmail.com</td>
              <td>
                Department Of Botany, Tara Vivek College, Gajjan Majra/Professor
                Colony, Behind Eid Masil School, Guru Nanak Pura, Raikot
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. PRITPAL SINGH</td>
              <td>M.A/1968-1970</td>
              <td>2202252</td>
              <td></td>
              <td># 14 D, City Centre Apt., 22 No. Phatak , Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS SHILPA CHHABRA</td>
              <td>MCA</td>
              <td>01762-222879, 9818106579</td>
              <td>can_shilpa@yahoo.co.in</td>
              <td>
                Plot No. 2-D, Near S.D. Mandir, Opp. H. No. 1905-A, Rajpura
                Town, Distt. Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH SUKHJEET KUMAR</td>
              <td>B.Tech</td>
              <td>1885223288</td>
              <td>sukhjeet 786@hotmail.com</td>
              <td>Vill. Sujjowal Bet. PO Balachaur, Distt. Hoshiarpur</td>
            </tr>
            <tr>
              <td style="width: 20%">MS PARNEET KAUR</td>
              <td>M.C.A.</td>
              <td>2362238</td>
              <td>parneetdhall@yahoo.co.in</td>
              <td>
                H.No. 1, Upkar Nagar, Near Govt. Press, Sirhind Road, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH ARVINDER SINGH</td>
              <td>,,</td>
              <td>2351010</td>
              <td>arry5@rediffmail.com</td>
              <td>190, Anand Nagar-A, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ARASH KOTHARI</td>
              <td>B.Com.</td>
              <td>01635-232642, 9417054666</td>
              <td>kothari_mba@yahoo.co.in</td>
              <td>Mansa Ram Street, Jaitu Mandi, Dist. Faridkot</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. PUNEET SAHI</td>
              <td>LL.B</td>
              <td></td>
              <td>puneetsahi@hotmail.com</td>
              <td>301-17 KNIGHTBRIDGE RD. BLAMP L6T-3X9, CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. SARBJIT SINGH VIRK</td>
              <td>M.Phil Lingustics, LL.B/1980-1987</td>
              <td>2281224, 94170-72314</td>
              <td>advocatevirk@yahoo.com</td>
              <td># 53, Phase-I, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARSANT SINGH</td>
              <td></td>
              <td>01676-247057</td>
              <td></td>
              <td>Vill. Rorewala, P. Kauhrian, T. Moonk, Dist. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. GURBAZ SINGH</td>
              <td>M. Sc.</td>
              <td>0172-2601768, 9814061956</td>
              <td>gurbazsinghifs@sify.com</td>
              <td>
                Gurbaz Singh, IFS. H. No. 2168 Sector 42-C, Chandigarh- 160036/
                Gurbaz Singh S/O S. Sajjan Singh, H. No. 77, Street No. 1/3,
                Guru Nanak Nagar, P.O. Gurbax Colony, Patiala-147001
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR HARPREET KAUR</td>
              <td>,,</td>
              <td>01764-222088, 3046409</td>
              <td>preetjudge@yahoo.co.in</td>
              <td>
                Deptt. Of Chemistry, Pbi. Uni., Patiala/Prem Niwas, House No.
                136, Partap Colony, Samana, Dist. Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH MANJIT SINGH</td>
              <td>MBA</td>
              <td>6532009, 9216889009</td>
              <td></td>
              <td>A-506, Ivory Towers, Sec-70, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. RENU SHARMA</td>
              <td>M. Sc.</td>
              <td>9915081456</td>
              <td>renusharma.science@gmail.com</td>
              <td>H. No. 2017, Sec 21, Panchkula, Haryana</td>
            </tr>
            <tr>
              <td style="width: 20%">MS POOJA RANI</td>
              <td>MBA/PUSBS</td>
              <td>01659-250307</td>
              <td>singlapuja@yahoo.co.in</td>
              <td>Rorki Road, Ward No. 9, Sardulgarh, Dist. Mansa</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. JASMINE BRAR</td>
              <td>M. Sc.</td>
              <td></td>
              <td>jasminethapar83@gmail.com</td>
              <td>
                Department Of Biotechnology, Thapar University, Patiala/126,
                Adarsh Colony, Behind Thapar University, Patiala. 147001 Punjab
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. DALJEET SINGH</td>
              <td>M.Sc., Botany</td>
              <td>9878402366</td>
              <td>daljeethoney@yahoo.com</td>
              <td>Nandgarh Kotra, PO Ramanvas, The. Phul, Distt. Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. JAGDISH KAUR</td>
              <td>Ph.D/Pbi./1986-1993</td>
              <td>92566-48797, 0161-2401960</td>
              <td>dishajogipau@yahoo.com</td>
              <td>
                Deptt. Of Language Journalism And Culture, Punjab Agriculture
                University, Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR HARBHAJAN KAUR</td>
              <td>Zoology</td>
              <td>2210104</td>
              <td>harbhajankaur@hotmail.com</td>
              <td>
                Deptt. Of Zoology, Punjabi University, Patiala/235, Ajit Nagar,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH ARUN VERMA</td>
              <td>B.Com.</td>
              <td>2359360, 9876426153</td>
              <td>usbsarun@gmail.com</td>
              <td>DN-8/2, Dashmesh Nagar, Tripuri, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARMANPREET</td>
              <td>M.Tech/2001-2003</td>
              <td>01765-253436, 9818025914</td>
              <td>harmangill7@yahoo.com</td>
              <td>1018, Phase-I, Urban Estate, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">MS MANPREET KAUR</td>
              <td>B.Tech</td>
              <td>2357794</td>
              <td>manpreet82002@yahoo.co.in</td>
              <td>196/2, St. No. 9, Ekta Vihar, Anand Nagar-B, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. HARINDER PAL S. CHEEM</td>
              <td>Ph.D Education</td>
              <td>647-274-8728</td>
              <td>cheemahs8728@yahoo.com</td>
              <td>54 MADISON ST. BRAMPTON ON L653C5, CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF PARM BAKHSHISH SINGH</td>
              <td>M.A., Ph.D. His/1969-1971</td>
              <td>2222767, 2286416, 2283073</td>
              <td>pbsidhu@yahoo.com</td>
              <td>61-A, New Officers Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH AMIT SHARMA</td>
              <td>B.Com</td>
              <td>0172-2688587, 9988558578</td>
              <td>amit.013@gmail.com</td>
              <td>2251/1, Sec. 37-C, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. ROHINI</td>
              <td>M. Sc.,Ph.D.</td>
              <td>9050577826</td>
              <td>rohishum@gmail.com</td>
              <td>
                Akshram # 110-B/1,Gobind Nagar, Ambala Cantt. 131001, Haryana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. S.M.S. CHAHAL</td>
              <td></td>
              <td>2286304, 2286461</td>
              <td>smschahal@rediff.com</td>
              <td>Deptt. Of Human Biology, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH INDERJIT SINGH</td>
              <td>M.A./Pol. Sci./2004-2006</td>
              <td>2663268, 9814608550</td>
              <td>deolinder@yahoo.co.in</td>
              <td>V.P.O. Kauli, Distt. &amp; Teh. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. GURJIT SINGH</td>
              <td></td>
              <td>98724-70729</td>
              <td></td>
              <td>V &amp; P.O. Dullal, Th. Patran, Dist. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RAJINDER SINGH</td>
              <td>Ph. D.</td>
              <td>9417261506</td>
              <td>amrit_19751@yahoo.com</td>
              <td>Mubarik Kothi, Sangrur-148001</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. SUDARSHAN GASSO</td>
              <td>Ph.D. Pbi/1979-1986</td>
              <td>0171-2610566, 2640321, 98</td>
              <td></td>
              <td>
                # 114, Vidya Nagar, P.O. Kuldeep Nagar, Ambala Cantt. (Haryana)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH PREET MOHINDER SINGH</td>
              <td>P.G. Diploma in Tourism, Hotel Management</td>
              <td>5024485, 2282394, 9915004</td>
              <td></td>
              <td>
                8, Near Honda Prop. Dealer, Prof. Colony, Opp. Pbi. Uni. Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURUPDESH SINGH SOHAL</td>
              <td>MBA</td>
              <td>01679-231523, 9815467444</td>
              <td>usbs_85@yahoo.co.in</td>
              <td>St. No. 3, Near New Courts, Handiaya Road, Barnala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS RITU BALA</td>
              <td>B.Com.</td>
              <td>0164-2436296, 998136342</td>
              <td>ritu_Bansal_123@yahoo.co.in</td>
              <td>Near Govt. High School, Kot Shamir, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. LALITA</td>
              <td>M. Sc.</td>
              <td>9815772196</td>
              <td>rinkubargujer22@gmail.com</td>
              <td>
                # 194, Ordinance Cable Factory Estate, Sec-29A,
                Chandigarh/#4111, Defence Colony, Jind, Haryana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. BALJINDER SINGH CHEE</td>
              <td>LL.B/1994-1997</td>
              <td>98147-89279</td>
              <td></td>
              <td># 1509, Street No.15, Guru Nanak Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR HARJINDER WALIA</td>
              <td></td>
              <td>2282020, 9872314380</td>
              <td>hpsahluwalia@yahoo.co.in</td>
              <td>Deptt. Of Journalism, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. ARPANA LAMBA</td>
              <td>M. Sc., B.Ed</td>
              <td>01881223900, 9872206766</td>
              <td>arpana_lamba2008@yahoo.com</td>
              <td>
                SAI Bhandar, Old Anaj Mandi, Ropar, Punjab Pin Code- 140001
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH PARVEEN KUMAR GARG</td>
              <td>M.Sc. (I.T.)</td>
              <td>9872044975</td>
              <td>pkg_aggarwal@yahoo.co.in</td>
              <td>
                C/O Aggarwal Karyana Store, Near Kewal Hospital, Jakkal Road,
                Sunam, Dist. Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURDEEP SINGH CHAHAL</td>
              <td>M.A Social Work, LL.B</td>
              <td>2286962, 98881-27227</td>
              <td></td>
              <td>167, Phase-III, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ARVIND SINGH</td>
              <td>M.A punjabi, M.A sociology</td>
              <td>9463370027</td>
              <td></td>
              <td>530/2 Guru Nanak Street-Gher Sodhian Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. KULWINDER KAUR</td>
              <td>M. Sc.</td>
              <td>9779378371</td>
              <td></td>
              <td>
                St. No. 7, House No. 2316, Gill Road, Janta Nagar, Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. KIRANDEEP KAUR</td>
              <td>M.Sc. (Mathematics)/2005</td>
              <td></td>
              <td></td>
              <td>
                Opp. Truck Union, Moga Road, Kotakapura, Distt. Faridkot Tel.
                No. 01635-224728
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. ANUPREET KAUR</td>
              <td>M.Sc. (Mathematics)/2005</td>
              <td></td>
              <td></td>
              <td>
                D/O Jagtar Singh Advocate, Old Post Office Street, Basti, Mansa
                Tel. No. 01652-228315
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. JASVIR SINGH</td>
              <td>Diploma in Gatka/2015-2016</td>
              <td></td>
              <td>jasvirsinghkhalsa80@gmail.com</td>
              <td>
                Vill. Dhura, PO Harchandpura, Tehsil Dhuri, Distt. Sangrur M.No.
                98558-27280
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. AARTI SIDHU</td>
              <td>
                PG Diploma in Health Fitness &amp; Trainer (Sports
                Science)/2015-16
              </td>
              <td></td>
              <td></td>
              <td>#524, Friends Colony, Yamuna Nagar M.No. 98124-91925</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. SANDEEP ATTRI</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td>sattri57@gamil.com</td>
              <td>
                #450/20, Shankar Nagar, Tibri Road Gurdaspur M.No. 98887-14244
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RAMANDEEP KAUR</td>
              <td>M.A.(Music), M.Phil. (Music)</td>
              <td></td>
              <td>ramanmusic2@gmail.com</td>
              <td>
                Vill. Nourpur, Tehsil Patran, Distt. Patiala (M.No.
                099151-05008)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. PARAMINDER KAUR</td>
              <td>M.Phil. (Music)</td>
              <td></td>
              <td>paramsangeet786@gmail.com</td>
              <td>
                #1942, Near Committee Bazar, Mohalla Moulvian, Raikot, Distt.
                Ludhiana (M.No. 98726-02656)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. BALJEET SINGH</td>
              <td>M.Sc. (Sports Science)/2014-2016</td>
              <td></td>
              <td>sbaljeet784@gmail.com.</td>
              <td>VPO.Jandi,Teh. Jagroon,Distt. Ludhiana. M.No. 98556-27351</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. MANMOHAN SHARMA</td>
              <td>Ph.D.(Music)/1972-1974</td>
              <td></td>
              <td>manmohan.pup@gmail.com</td>
              <td>
                #729, HIG Urban Estate, Phase-I, Patiala (M.No. 97799-77881)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. PALLAVI KAUSHAL</td>
              <td>M.A.(Linguistics)</td>
              <td></td>
              <td>kaushalpallavi3030@gmail.com</td>
              <td>#2028/1, Old Lal Bagh, Patiala M.No. 98886-69357</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. PRIYA RANI</td>
              <td></td>
              <td></td>
              <td>lect_priya26@rediffmail.com</td>
              <td>#212, Phulkian Enclave, Patiala M.No. 98559-27235</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. JAGBIR SINGH</td>
              <td>M.A., M.Phil (Linguistics)</td>
              <td></td>
              <td>jagbirkang11@gmail.com</td>
              <td>
                VPO Dhanetha, Tehsil Samana, Distt. Patiala (M.No. 94657-79092)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. RANDEEP KAUR</td>
              <td>Ph.D. (Linguistics) Proceeding</td>
              <td></td>
              <td>sandhusandeep11@gmail.com</td>
              <td>
                VPO Dhanetha, Tehsil Samana, Distt. Patiala (M.No. 78144-68177)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS ARSHPREET KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>arsh1994@gmail.com</td>
              <td>
                #30, Capt. Karm Singh Nagar, Sunam Road, Sangrur M.No.
                94630-17099
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS MANJINDER KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td></td>
              <td>
                #426, Vill. Ratta Khera, PO Mandi Amin Ganj, Teh. Jalalabad,
                Distt. Fazilka (M.No. 94646-08807
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS GAGANDEEP KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>gagan.kharay7@gmail.com</td>
              <td>
                # L/98, Street No. 2, GTB Nagar, Lalheri Road, Khanna, Ludhiana
                M.No. 98866-11025
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. BINDU SHARMA</td>
              <td>M.Sc. Zoology, M.J.M.C/1989-1994</td>
              <td>0172-2631287, 01744-23841</td>
              <td></td>
              <td># 439, Krishna Puri Street, Nabha, Distt. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR JASWINDER SINGH BRAR</td>
              <td>Ph.D. Eco/1986-1994</td>
              <td>(R) 2283465 (O) 2282461-6</td>
              <td>brar_jas@yahoo.co.in</td>
              <td>Economics Department, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SMT SUMAN PREET</td>
              <td>M.Phil Anth. Ling./1987-1991</td>
              <td>9316233560</td>
              <td>virksumanpreet.co.in</td>
              <td>Deppt. Of Punjabi Lexicography, Pbi. Uni. Pta.</td>
            </tr>
            <tr>
              <td style="width: 20%">MS ANURADHA RANI</td>
              <td>M.Tech/2004-2006</td>
              <td>1632-2237530</td>
              <td>chopara_anuradha@rediffmail.com</td>
              <td>
                C/O Mr. Ram Lal Chopra, Street Thakur Singh Dhomija, I/S Delhi
                Gate, Ferozepur City
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. S. S. JOHAL</td>
              <td>Ph.D. Eco, D.Lit, D.Sci/1948-1952</td>
              <td>(R) 0161-2409306 (O) 0172</td>
              <td>sardarasinghjohl@yahoo.com</td>
              <td>2920, Gurdev Nagar, Ludhiana 2-8-1928</td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURJIT SINGH</td>
              <td>M.A. Philosophy, LL.B/1990-1993</td>
              <td>9815333052</td>
              <td></td>
              <td>Vill. Chintgarh, P.O. Kurali, Distt. Ropar</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. RAJ MITTAL</td>
              <td>Ph.D./Physics</td>
              <td>2285549, 3046163</td>
              <td>rmsingla@yahoo.com</td>
              <td>Physics Deptt. P.U. P/4302, U.E., Phase II, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. HARJIT SINGH NAGRA</td>
              <td>M.A. Eco/1973-1975</td>
              <td>0172-3221416, 98880-81566</td>
              <td></td>
              <td># 1566/Sect. 69, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">M/S LOVEPREET KAUR SANDHU</td>
              <td>M.Sc/ Zoology</td>
              <td>0161-2772014</td>
              <td>preetsandhu4@gmail.com</td>
              <td>H.No.242-243, Model Gram, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARWINDER SINGH</td>
              <td>M.Phil, Defence &amp; Strategic Studies</td>
              <td>98181-33151</td>
              <td>sandhu.harwinder@gmail.com</td>
              <td>
                43, Ward No. 3, Master Colony, Post Office, Khunouri Mandi, Teh.
                Moonak, Distt. Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH KARAMJIT SINGH</td>
              <td>B.A/1971</td>
              <td>2363852, 2281776, 2354019</td>
              <td></td>
              <td>464, Phase-I, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR JOGINDER SINGH</td>
              <td>,,</td>
              <td>2282826</td>
              <td></td>
              <td>144, Urban Estate, Phase I, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR NAVNEET SINGH</td>
              <td>Zoology</td>
              <td>01507-221727</td>
              <td>nsrsgill@yahoo.co.in</td>
              <td>Vill. 26 P 5, Raisingh Nagar, Sriganga Nagar, Rajasthan</td>
            </tr>
            <tr>
              <td style="width: 20%">SH NEERAJ NAGPAL</td>
              <td>MBA/PUSBS</td>
              <td>9463356669</td>
              <td></td>
              <td>H.No. 798, Cycle Market, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH MANISH KUMAR GARG</td>
              <td>MBA/PUSBS</td>
              <td>01635-231530</td>
              <td>gargmanish1@yahoo.co.in</td>
              <td>Pawan Karyana Store, New Market, Jaitu</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. PERVESH K. SHARMA</td>
              <td>M.A Eng/1976-1978</td>
              <td>2366021, 94172-86021</td>
              <td></td>
              <td># 100/1, Ekta Vihar, Near Anand Nagar B, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURPREET SINGH</td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                V PO Chack Ram Singh Walla, (Bhucho Mandi), Dist. Bathinda
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH SUKHDEEP SINGH</td>
              <td>M.P.Ed</td>
              <td>9855313066</td>
              <td></td>
              <td>Vill. Jawaharlal, Teh &amp; Dist. Mansa</td>
            </tr>
            <tr>
              <td style="width: 20%">SH GAUTAM MONGA</td>
              <td>MCA</td>
              <td>0161-2501330</td>
              <td>gautam.monga@yahoo.com</td>
              <td>68-69, Golden Avenue, Dhandra Road, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. SAMIDHA SHARMA</td>
              <td>M. Sc.</td>
              <td>2366131, 9876062457</td>
              <td>samidha8885@gmail.com</td>
              <td>H. No. 3, New Prem Nagar, Near Bhadson Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH RAVINDER KUMAR VASHISH</td>
              <td>,,</td>
              <td>0172-2634258, 9815495308</td>
              <td>vashist00_pbi@yahoo.co</td>
              <td>786, GBS &amp; DC Society, Sec. 48-A, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SH VIKRAMJIT SINGH</td>
              <td>M.P.Ed</td>
              <td>9815012512</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td style="width: 20%">MS SIMRANJEET KAUR</td>
              <td></td>
              <td>0164-2216649, 2220048</td>
              <td></td>
              <td>Q. No. 10, Power House Road, Catigory II, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">MS AKRITTEE KAD</td>
              <td></td>
              <td>01672-272594</td>
              <td>akrittee_kad@yahoo.com</td>
              <td>Kad Street, Bhawanigarh, Dist. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">MS RUPINDER KAUR</td>
              <td>B.A Hons, Ph.D</td>
              <td>9465742528</td>
              <td></td>
              <td>Q.No-10, Near Water Tank, Fort Bahadurgarh, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH NARINDER SINGH SHERGI</td>
              <td>M.A. Eco/1988-1991</td>
              <td>0172-2607942, 98152-27600</td>
              <td></td>
              <td>1117, Sec-33-C, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RAMANDEEP KAUR</td>
              <td>M.Sc. (Sports Science)/2014-2016</td>
              <td></td>
              <td>raman.rd390@gmail.com</td>
              <td>
                Vill. Janisar Teh. Jalalabad Distt.Fazilka M.No.7589117420
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS MANINDER KAUR</td>
              <td>B.Ed</td>
              <td>9779075143</td>
              <td>deffy1997@gmail.com</td>
              <td>Near Gurdwara Sahib, Professor Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI PARMINDER SINGH</td>
              <td>M.Phil. Botany/1985-1987</td>
              <td>9814031713, 9501500006</td>
              <td>nilu527@rediffmail.com</td>
              <td>Excise Officer, 527, Phase-1, Uraban Estate, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">DR GIAN SINGH</td>
              <td>Ph.D Eco./1978</td>
              <td>(R) 2203515</td>
              <td>giansingh88@yahoo.com</td>
              <td>
                Economics Department, Punjabi University, Patiala 5-A, Friends
                Colony, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. PARMOD</td>
              <td>M. Sc., M.Ed</td>
              <td>0172-2212075, 9815115197</td>
              <td>kumarashokmonty@yahoo.co.in</td>
              <td>440, Phase-X, Mohali, Punjab</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. SHEESH PAL SINGH</td>
              <td>M. Sc., Ph.D</td>
              <td>9456687309</td>
              <td>sheesh9@yahoo.in</td>
              <td>
                Akshram # 110-B/1,Gobind Nagar, Ambala Cantt. 131001, Haryana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. SHRUTI SOOD</td>
              <td>M. Sc., M.Phil, B.Ed</td>
              <td>4237271, 9868311253</td>
              <td>insshruti@gmail.com</td>
              <td>
                Mr. Dhiraj Sood, Kailash Dham Apartments, Sec-50, Flat No.- 103,
                Block-17, Noida, UP
              </td>
            </tr>
            <tr>
              <td style="width: 20%">S. SOHAN SINGH BHULLAR</td>
              <td>LL.B/1966-1970</td>
              <td>(R) 2351953 (O) 01763-232</td>
              <td></td>
              <td>H. No. 250, Harinder Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI B.S. BIR</td>
              <td>M.A Eng/1969-1971</td>
              <td>(R) 01765-309778 (O) 0176</td>
              <td></td>
              <td>Mehram Publications, Nabha, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF DHANWANT KAUR</td>
              <td>Ph.D Pbi/1975-1983</td>
              <td>(R) 2220984 (O) 2284443</td>
              <td>prof.dhanwant@gmail.com</td>
              <td>
                Prof. &amp; Head, D.P.D., Punjabi University, Patiala. 245,
                Charan Bagh, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. BALJIT SINGH ROHARJAG</td>
              <td>LL.B/1993-1996</td>
              <td>2202133, 98142-21818</td>
              <td></td>
              <td># 41-Rose Avenue, Near New Officers Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SMT DEEPIKA DHIR</td>
              <td>M.Phil Eng/1983-1985</td>
              <td>0161-2457479, 94172-57479</td>
              <td></td>
              <td>104-B, Rai Guru Nagar Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH RAJAN SHAHI</td>
              <td>MBA</td>
              <td>01765-220817</td>
              <td></td>
              <td>Bikhi More, Ripudaman Pura, Nabha, Dist. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. MOHD. IQBAL</td>
              <td>M. Sc., M.Phil, M.Ed</td>
              <td>0181-2780090, 9041128110</td>
              <td></td>
              <td>
                Prinicpal, Kendriya Vidyalaya, CRPF Camp, Jalandhar/Rajan
                Street, Inside Sirhindi Gate, Malerkotla, Punjab
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. YADVINDER SINGH</td>
              <td>M. Sc.</td>
              <td>9876930409</td>
              <td>yad_botany@gmail.com</td>
              <td>
                Vill. Takhtu Majra, P.O.- Pabri, Teh.-Rajpura, Dist.-Patiala.
                140401 Punjab
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. JASBIR SINGH</td>
              <td>Ph.D Phy. Edu/1983-</td>
              <td>2282124, 2280968</td>
              <td></td>
              <td>
                Opp.Punvex Factory,Vill. Theri, Ring Road , Urban Estate-I,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH RAJESH KUMAR VERMA</td>
              <td>,,</td>
              <td>0161-2857665</td>
              <td></td>
              <td>
                35, Dhiran Mohalla, Ward No. 5, Malaudh, Teh. Payal, Dist.
                Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH RAJAT GROVER</td>
              <td>MBA/PUSBS</td>
              <td>9888826077</td>
              <td>Grover.rajat@yahoo.com</td>
              <td>
                S/O Sham Lal, Mohalla Gharami Pati, Near Gurdwara Singh Sabha,
                Samana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS SUKRIT SHUKLA</td>
              <td>B.Tech</td>
              <td>5008228</td>
              <td>sukhrit@yahoo.co.in</td>
              <td>28-B, Model Town, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. SONIKA</td>
              <td>M.Sc.</td>
              <td>9878233700</td>
              <td>sandeepguptanabha@gmail.com</td>
              <td>
                # 323-A, Ward No. 10, St. No.5, New Bhagat Singh Colony, Rampura
                Phul, Distt. Bathinda
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. HARPAL SINGH</td>
              <td>M.Phil Anth. Linguistics/1986-1990</td>
              <td>2361104, 98152-36604</td>
              <td></td>
              <td>North Avenue, Near Rishi Clinic, Bhadson Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. UMESH K. CHAMBIAL</td>
              <td>M.Phil Physics/1981-1984</td>
              <td>0186-228684, 2240705</td>
              <td></td>
              <td>Rajinder Nagar, College Road, Pathankot, Dist. Gurdaspur</td>
            </tr>
            <tr>
              <td style="width: 20%">MS MONA</td>
              <td></td>
              <td>01651-220574, 9417019574</td>
              <td>singla.mona@gmail.com</td>
              <td>Tripta Tea Co-Press Street, Rampuraphul, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. PUJA SONI</td>
              <td>M. Sc., M.Ed</td>
              <td>0161-2454710, 9914006279</td>
              <td>kochharpuja@yahoo.in</td>
              <td>
                Assistant Professor, G. N. College Of Education, Gopalpur,
                Ludhiana/H. No.-13, Nehru Nagar, Guru Chhaya, Ist Floor, Model
                Town, Ludhiana-141002
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. GURJIT SINGH</td>
              <td></td>
              <td>8146661464</td>
              <td>gurjitsingh0039@gmail.com</td>
              <td>
                S/O Mohinder Singh V.P.O Mandi Kalar, The. Phul, Distt. Bathinda
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI RAJESHWAR DHUNDIA</td>
              <td>M.A. His/1973-1975</td>
              <td>2214026, 0172-2715087, 98</td>
              <td></td>
              <td>6-Malwa Colony, Near Moti Bagh, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">ER AMARJIT SINGH SANDHU,</td>
              <td>B.E. /1970-1974</td>
              <td>(R) 2286110 (O) 2286433</td>
              <td>dil_ajs@yahoo.co.in</td>
              <td>
                XEN # B-12, Punjabi University, Patiala 60, Punjabi Bagh,
                Patiala.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR BALJEET KAUR</td>
              <td>Ph.D Zoology/1984</td>
              <td>(R) 2285419 (O) 2284443</td>
              <td></td>
              <td>
                D.P.D., Punjabi University, Patiala/Q-9, University Campus,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH JIVAN SINGH</td>
              <td>MBA</td>
              <td>2301310, 9855093095</td>
              <td>jivan_r@rediffmail.com</td>
              <td>H.No. 760/7, St. No. 7, Guru Nanak Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH TEJINDERPAL SINGH SAND</td>
              <td>LL.B, MJMC</td>
              <td>2216013</td>
              <td>tejinder_pta@yahoo.com</td>
              <td>Chattarpura Street, Adalat Bazar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR S.P.S. VIRDI</td>
              <td>Diploma In German &amp; French/1969-1972</td>
              <td>2282531</td>
              <td></td>
              <td>431-C, Phase I, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH RAJIV CHAWLA</td>
              <td>M.Sc./,,</td>
              <td>01651-233245, 98720-73245</td>
              <td>r.chawla@mail.com</td>
              <td>Guru Nanak Colony, Rampura Phul</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. RAMINDER GHAI</td>
              <td>M.Sc.,M.Phil, Ph..D</td>
              <td>9814854134</td>
              <td>raminder0508@gmail.com</td>
              <td>
                Govt. Brijindra College, Faridkot/R.Ghai, Golewala St. B/S Home
                Guards, Harindra Nagar, Faridkot, 151203
              </td>
            </tr>
            <tr>
              <td style="width: 20%">PROF SANTOSH KUMARI</td>
              <td>M.Sc.,Ph.D.</td>
              <td>8427778169</td>
              <td>skumari05@rediffmail.com</td>
              <td>219, Advocates Society, 49A, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">MS INDERDEEP KAUR</td>
              <td>M.Sc./Biotechnology</td>
              <td>0183-2701996, 9888426676</td>
              <td>indu2482@yahoo.co.in</td>
              <td>2473-A, Kotbhagat Singh Sultan Wind Road, Amritsar</td>
            </tr>
            <tr>
              <td style="width: 20%">SH NITIN KUMAR</td>
              <td>MBA/PUSBS</td>
              <td>0164-2254499, 9463247147</td>
              <td>nitin_singla248@yahoo.com</td>
              <td>2239, Madhuban Street, Amrik Singh Road, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RANJIT SINGH BHULLAR</td>
              <td>M. Sc., M. Phil</td>
              <td>2282068, 9888513680</td>
              <td>bhullarranjitsingh@yahoo.com</td>
              <td>H. No. 27-C, Phase-I, Patiala 147002</td>
            </tr>
            <tr>
              <td style="width: 20%">MS ADITI GOYAL</td>
              <td>B.Com.</td>
              <td>0164-2237444, 9872694446</td>
              <td>aditigoyal84@yahoo.co.in</td>
              <td>4250, Kiker Bazar, Guru Bhawan Street, BTI</td>
            </tr>
            <tr>
              <td style="width: 20%">DR AJS BHANWER</td>
              <td>P.hd/ Human Biology</td>
              <td>5012123, 2450601-14 Ext 3</td>
              <td>ajsbhanwer@gmail.com</td>
              <td>
                Dept. Of Human Genetics, GNDU, Amritsar.,368/A, Street No. 40,
                Janta Nagar, Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. SURJIT SINGH</td>
              <td>M. Sc., Ph.D</td>
              <td>01624-257752, 9814919007</td>
              <td>surjitgk@gmail.com</td>
              <td>
                Department Of Botany, S. Govt College Of Science Education And
                Research Jagraon-142006, Ludhiana, Punjab/285/A-I, Basant
                Avenue, Malak Road, Jagraon-142006
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. HARDIP SINGH KINGRA</td>
              <td>M.Sc., AIFC</td>
              <td>011-2410-4187, 9810194320</td>
              <td>hskingra@hotmail.com</td>
              <td>
                "Chairman-Cum-MD, National Scheduled Castes Finance And
                Development Corporation, Scope Minar, 14Th Floor, Core '1' &amp;
                '2' Laxmi Nagar, Centre Delhi-110 092/V.P.O. Kamiana,Faridkot,
                Punjab 151 203
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS KARAMJOT KAUR KOHLI</td>
              <td>BMIT</td>
              <td>9872752669</td>
              <td>karamvirgo@gmail.com</td>
              <td>A-31, Thermal Colony, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SH MANISH KUMAR</td>
              <td>MBA/PUSBS</td>
              <td>9815856788</td>
              <td>manishkatyal18@gmail.com</td>
              <td>
                5465/2, St. No. 21 ½, Gobind Nagar, Daba Road, Shimla Puri,
                Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR S.S. BIR</td>
              <td>M.Sc., Ph.D Botany/1967-1989</td>
              <td>2223773, 2280288</td>
              <td>ssbir28@rediffmail.com, ssbir28@yahoo.com</td>
              <td>Manauli House, 33, Yadvindra Colony, The Mall, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. AMARJEET WARAICH</td>
              <td>M.J.M.C/1982-1986</td>
              <td>22859880, 2282394, 94178-</td>
              <td>aswwaraich@yahoo.com</td>
              <td>4080, Phase II, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH MANDEEP SINGH</td>
              <td></td>
              <td>2352546</td>
              <td></td>
              <td>
                134, Manjeet Nagar, St. No. 7, Near Bhadson Chungi (Old),
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS MONIKA AHUJA</td>
              <td>LL.M</td>
              <td>9814830447</td>
              <td>monikaahujapta@gmail.com</td>
              <td>2047, Phase II, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH JATINDER KUMAR SHARMA</td>
              <td></td>
              <td>9855278333, 3046224</td>
              <td></td>
              <td>2-A, Vikas Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. TEJINDERPAL SINGH</td>
              <td>Ph.D.</td>
              <td>9872708901, 0172-12541591</td>
              <td>tejinder_ubs@yahoo.co.in</td>
              <td>
                V. Aloona Muana, Po. Aloona Pallah, Tel. Payal, Dist. Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS POONAM SOOD</td>
              <td>M.P.Ed</td>
              <td></td>
              <td></td>
              <td>398/1, Kishan Avenue, Kayli Road, Kapurthala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. MANPREET KAUR</td>
              <td>M.Sc.</td>
              <td>9872023248</td>
              <td>phd_2012@yahoo.com</td>
              <td>
                70-E, Near, Haathi Gali, Mohalla Hamnagar, Nangal Township,
                Distt. Ropar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. VISHNU K. SHELLEY</td>
              <td>Eng, 1977-1979</td>
              <td>01743-221110</td>
              <td></td>
              <td>
                V.K. Dutt, 44-Industrial Area Hafed Road, Cheeka, (Haryana)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH AMIT SHARMA</td>
              <td>MBA</td>
              <td></td>
              <td></td>
              <td>F-2, Central Revenue Colony, Lawrence Road, Amritsar</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. GURPREET KAUR</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td></td>
              <td>VPO. Barwa Dist. Ropar M.No.964002206</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. NAZAR SINGH RENAL</td>
              <td>Ph.D. (Music)/2014</td>
              <td></td>
              <td>nazarrehal@gmail.com</td>
              <td>
                #430, Sec-24B, Street No. 7, Dall Nagar, Mandi Gobindgarh M.No.
                98145-60041
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. MALKEET SINGH</td>
              <td></td>
              <td></td>
              <td>singhmalkeet1964@gmail.com</td>
              <td>#80, Sun City, Roopnagar</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. PUNEET JHAJJ</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td>puneet1584@yahoo.co.in</td>
              <td>#4104, Phase-2, Urban Estate, Patiala (M.No. 98887-74106)</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. SUNIL KUMAR</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td></td>
              <td>
                Kala Manj Gate, Kalgidhar Colony, Opp. Jagtar Singh's Kothi,
                Mukerian, Distt. Hoshiarpur Tel. No. 01883-249199
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. PARVINDER KAUR</td>
              <td>Diploma in Gatka/2015-2016</td>
              <td></td>
              <td>jagdish.singh29@yahoo.com</td>
              <td>
                V/O Jagdish Singh, #119. Ward No. 11, Kurali M.No. 94172-38393
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. BAKHSHISH SINGH</td>
              <td>Diploma in Gatka/2015-2016</td>
              <td></td>
              <td>bkalsi47@gmai.com</td>
              <td>
                Vill. Chak, Samian Wala, PO Guru Harshaye, Distt. Firozpur M.No.
                99144-66332
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. BHIM SAIN</td>
              <td>
                PG Diploma in Health Fitness &amp; Trainer (Sports
                Science)/2015-16
              </td>
              <td></td>
              <td>waljot35@gmail.com</td>
              <td>
                #134, Ward No. 11-B, Dhuri, Distt. Sangrur M.No. 97810-39735
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. GURLEEN KAUR</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td></td>
              <td>VPO. Bias Pind. Distt. Jalandhar M.No.85570010280</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. MANDEEP KAUR</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td>mddurat100@gmail.com</td>
              <td>
                #9, Street No. 14, Darshan Singh Nagar, Alipur Road,Patiala
                M.No. 98149-04998
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. SUKHJINDER SINGH</td>
              <td>M.Sc. (Sports Science)/2014-2016</td>
              <td></td>
              <td>hs5050420@gamil.com</td>
              <td>
                Basti Gobind Nagar Ramaspur Road Samana Distt. Patiala M.No.
                94656-57010
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. AMANDEEP KAUR</td>
              <td>M.Sc. (Sports Science)/2014-2016</td>
              <td></td>
              <td>amandeepkaur.msg@gmail.co</td>
              <td>
                Vill. Jameetgarh, PO Lohsimbly, Tehsil Rajpura Distt. Patiala
                M.No. 88725-98396
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. PARMINDER KAUR</td>
              <td>M.Sc. (Sports Science)/2014-2016</td>
              <td></td>
              <td></td>
              <td>VPO Lang.Distt. Patiala (M.No. 9878088657)</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. GURJEET SINGH</td>
              <td>M.Sc. (Sports Science)/2014-2016</td>
              <td></td>
              <td></td>
              <td>
                Vill. Narike,PO. Gowara,Teh. Malerkotla Distt. Sangrur
                M.No.9914064131
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. SURJIT SINGH</td>
              <td>Ph.D. (Linguistics)/14-8-2014</td>
              <td></td>
              <td>surjitsingh12@gmail.com</td>
              <td>VPO Mashingan, Teh. &amp; Distt. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS KULWINDER KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td></td>
              <td>
                VPO Jhinjri, Tehsil Anandpur Sahib, Distt. Ropar M.No.
                94171-52276
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS PRABHJOT KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td></td>
              <td>
                #308F, Ranjit Nagar, Seona Road, Patiala (M.No. 96465-05287)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS LIKHRAN DEEP KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td></td>
              <td>
                #482, St. No. 1, Dashmesh Nagar, Near Truck Union, Malerkotla,
                Distt. Sangrur (M.No. 95015-14164)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. KEWAL KRISHAN</td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                Q-24, Punjabi University Campus, Patiala (M.No. 98148-15507)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. ARUNJIT SINGH TIWANA</td>
              <td>M.Phil, Ph.D (Linguistics)doing</td>
              <td></td>
              <td>tiwanaarjunjit@gmail.com</td>
              <td>
                #20, Professor's Colony, Behind Sheesh Mahal, VPO Sular, Patiala
                M.No. 99157-15322
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS ISHA JOSHI</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>joshiisha76@gmail.com</td>
              <td>
                Ward No. 2, Preet Nagar, Near Aam Khas Bagh, Bassi Road, Sirhind
                M.No. 98727-83143
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARINDERJEET SINGH SAN</td>
              <td>M.Phil Pbi/1980-1988</td>
              <td>604-543-9032, 604-671-576</td>
              <td></td>
              <td>#14115-71A AVE., Surrey B.C., V3W 2L5, Canada</td>
            </tr>
            <tr>
              <td style="width: 20%">DR NARENDER SINGH ATRI</td>
              <td>Ph.D Botany/1976-1983</td>
              <td>2201596, 9417810754</td>
              <td>narinderatri04@yahoo.com</td>
              <td>
                Professor, Botany Department, Punjabi University, Patiala/B-2,
                Punjabi University Campus, Patiala/Vill. Chayan, P.O. Daron
                Deoria, Dist. Sirmour, Via Sarahan, Himachal Pradesh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH MOHINDER SINGH KAINTH</td>
              <td></td>
              <td>0172-222</td>
              <td></td>
              <td>686, Phase VI, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">MS GULSNOVER</td>
              <td>M.P.Ed</td>
              <td>1871683292</td>
              <td></td>
              <td>Vill. Samra, PO Samrai, Dist. Gurdaspur, Teh. Batiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS SATINDER PAL KAUR</td>
              <td>M.Phil/Zoology</td>
              <td>9915833774, 01824-264426,</td>
              <td>satindersooch@yahoo.co.in</td>
              <td>
                393, Hargobind Nagar, Phagwara/Dr. SPS Sooch, Gandhi Hospital,
                Phagwara
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH RAJESH KUMAR</td>
              <td>MBA/PUSBS</td>
              <td>94641-06644</td>
              <td>rajeshcool_0209@yahoo.com</td>
              <td>S/O Mohan Lal, VPO Bargari, Dist. FDK,151208</td>
            </tr>
            <tr>
              <td style="width: 20%">M/S NISHU BAJAJ</td>
              <td>B.Sc/ Zoology</td>
              <td>01638-260612</td>
              <td></td>
              <td>
                Kailash Nagar, St. No. 4D, H.No.B/2058, Fazilka, Dist. Ferozpur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. HARJINDER SINGH ATWAL</td>
              <td>Ph.D Pbi/1973-1975</td>
              <td>(R) 0181-2231403 (O) 0181</td>
              <td></td>
              <td>
                Lecturer, Lyallpur Khalsa College, 9 Staff Colony, Jalandhar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS MADHURI CHAWLA</td>
              <td>M.Phil Eng/1982-1988</td>
              <td>23371579, 98100-95296</td>
              <td>madhurichawla2000@yahoo.co.in</td>
              <td>
                Dyal Singh College, 6-A, Railway Officers Colony, Tilak Bridge,
                N. Delhi/1512, Sec. 38-B, Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR RANJODH SINGH</td>
              <td>Ph.D, Pbi/1987-1989</td>
              <td>01764-266615, 98155-46667</td>
              <td></td>
              <td>V+P.O. Dhanetha, Teh. Samana, Dist. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURDEEP SINGH</td>
              <td>MBA</td>
              <td>0164-2284284</td>
              <td></td>
              <td>28397, S.A.S Nagar, Dharamshala Wali Gali, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SMT JASWINDER KAUR MANGAT</td>
              <td>M.Phil Theatre &amp; Television/1983-1986</td>
              <td>2282287 (O) 2284443</td>
              <td></td>
              <td>424, Urban Estate, Phase I, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS NAVJOT</td>
              <td>MBA/PUSBS</td>
              <td>01635-246183, 9914831774</td>
              <td>khawahish_life@yahoo.co.in</td>
              <td>
                D/O Mr. Dev Kumar, VPO Bajakhana, Teh. Jaitu, Dist. Faridkot
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH MANINDER ANGARIA</td>
              <td>MBA/PUSBS</td>
              <td>01892-213188</td>
              <td>angari_gr8@yahoo.co.in</td>
              <td>VPO Nandrool, Teh. &amp; Dist. Kangra, H.P.</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BALJINDER SINGH CHAHAL</td>
              <td>M.A./Defence Studies</td>
              <td>2220652, 98551-20101</td>
              <td></td>
              <td>7-C, City Centre, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH LAKHWINDER SINGH</td>
              <td>M.P.Ed</td>
              <td>9988113446</td>
              <td></td>
              <td>
                Kartar Nagar, Gali No. 7, B/S Petrol Pump, Chhuh, Amirtsar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH RITU PAWAN</td>
              <td>,,</td>
              <td>9876416095</td>
              <td>ritup_karnal@rediffmail.com</td>
              <td>C/O Kansal Gas Service, Raman, Dist. Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SH PARDEEP KUMAR</td>
              <td></td>
              <td>2286001</td>
              <td></td>
              <td>
                Dept. Of Philosophy, P.U.P., 16, Urban Estate, Phase III,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR SURJIT SINGH RATOL</td>
              <td>M.B.B.S, M.S/1967-1972</td>
              <td>5535274, 2213274, 98145-3</td>
              <td>milapratol@yahoo.com</td>
              <td># 18-Fateh Colony, Behind Rakhra Palace Cinema, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. ABDUS SALAM NIAZI</td>
              <td>M. Sc., M.Phil</td>
              <td>01672-231038, 9915406099</td>
              <td>abdusniazi@gmail.com</td>
              <td>38-J.P. Nagar, Sangrur, Punjab 148001</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI BALBIR SINGH BILLING</td>
              <td>M.A, LL.B/1977-1980</td>
              <td>3090256, 2214364, 98150-4</td>
              <td></td>
              <td>Advocate, B-1, Partap Nagar, Patiala Cantt</td>
            </tr>
            <tr>
              <td style="width: 20%">SH MOHD ASHRAF</td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                Vill. Binjoki Khurd, P.O. Haider Nagar, Teh. Maler Kotla, Dist.
                Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS GURPREET KAUR</td>
              <td>M.Tech/2004-2006</td>
              <td>0161-2866239</td>
              <td>deol_preet@rediffmail.com</td>
              <td>Vill. Dangon, P.O. Pakhowal, Dist. Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">MS RAJINDER KAUR</td>
              <td>B.Sc. PGDCA, M.Sc Microbial &amp; Food Tech.</td>
              <td>2285777, 987239337</td>
              <td>rajinderbt@gmail.com</td>
              <td>2200, Phase 2, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR MEENU WATS</td>
              <td>M.Sc./Zoology</td>
              <td>0172-2573058, 2743980, 27</td>
              <td>meenuwats@yahoo.co.in</td>
              <td>902, Sec. 9, Panchkula</td>
            </tr>
            <tr>
              <td style="width: 20%">SH JAGTAR VIRK</td>
              <td>M.Phil, Pbi</td>
              <td>9878200058</td>
              <td>virkjagtar@rediffmail.com</td>
              <td>29, Mahesh Nagar, Handiaya Road, Barnala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH GUNWANT SINGH BHATIA</td>
              <td>Graduation, Mohindra College, Patiala</td>
              <td>9417762500, 304-6266, 228</td>
              <td></td>
              <td>520, Phase-II, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RAM KUMAR</td>
              <td>M. Sc.</td>
              <td>0181-2680312, 9815906508</td>
              <td>bio_rk@yahoo.com</td>
              <td>508, Isharpuri Colony, Near U. E. Phase-II, Jalandhar</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. GULSHAN PANAG</td>
              <td>M.A. Sociology</td>
              <td></td>
              <td></td>
              <td>110 SUNFOREST DR. BRAMPTON ON L6Z-4BI , CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">SH DEPESH KUMAR</td>
              <td>B.Tech/2002-2006</td>
              <td>9876516416, 9985689890</td>
              <td></td>
              <td>2183-C, Urban Estate, Phase-II, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ANEESH RANA</td>
              <td>M.P.Ed</td>
              <td>9418054428</td>
              <td></td>
              <td>
                H.No. 97, H.P. Housing Board Colony, Nolta Palampur, Dist.
                Kangra, H.P.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RAJESH KUMAR SINGLA</td>
              <td>M. Sc., M.Phil, B.Ed</td>
              <td>0164-2214121, 9417308640</td>
              <td>singlacollegeofbiology@gmail.com</td>
              <td>
                C/O Singla's College Of Biology, 20588, Ajit Road Main, Opp. St.
                No. 23-B, Bathinda-151001
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. NAVTEJ SINGH SARWARA</td>
              <td>LL.B/1994-1997</td>
              <td>2228223, 3094159, 98140-9</td>
              <td>sarwaranavtejsingh@yahoo.com</td>
              <td>310, Phase I, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. JASPREET KAUR</td>
              <td>M. Sc.</td>
              <td>2360948, 8146410948</td>
              <td>preetjass85@gmail.com</td>
              <td>H. No. 46, 1-C, Prem Nagar, Bhadson Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. JASPREET KAUR</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td></td>
              <td>
                #345, St. No. 3, Dashmesh Nagar, Dagana Road, Hoshiarpur Tel.
                No. 01882-252298
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. DALJIT KAUR</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td></td>
              <td>
                #151, Street No. 4, Sidhu Colony, Anand Nagar-B, Patiala
                0175-2365755
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. NAVJEET KAUR</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td></td>
              <td>#26, New Moti Bagh Colony, Patiala (Tel. No. 2220638)</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. GURPREET SINGH</td>
              <td>M.A. (Music), M.Phil. (Music)/2005-2010</td>
              <td></td>
              <td>megamusic84@gmail.com</td>
              <td>
                VPO Karyal Distt. Moga, Tehsil Dharamkot (M.No. 99887-85652)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. RAJNI SHARMA</td>
              <td>M.Sc. (Sports Science)/2014-2016</td>
              <td></td>
              <td></td>
              <td>
                #70, Ward No. 6A, Near Telephone Exchange Dhuri.M.No. 9056439871
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS SUNITA</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td></td>
              <td>VPO Madhosinghana, Sirsa, Haryana (M.No. 94663-66076)</td>
            </tr>
            <tr>
              <td style="width: 20%">MS RUPINDER KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>rupindersaini875@gmail.com</td>
              <td>
                Vill. Anaitpur, PO Saidpur, Distt. Fatehgarh Sahib M.No.
                90413-31005
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR GURMOHINDER PAL SINGH</td>
              <td></td>
              <td>(R) 2286111 (O) 2286245</td>
              <td></td>
              <td>
                4285, Phase-II, Urban Estate, Patiala/Director, Allied Services
                Training Centre, Punjabi University,Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. HARSH MOHAN</td>
              <td>Ph.D Physics/1981-1988</td>
              <td>01732-233768, 255960</td>
              <td></td>
              <td>
                33, Kalandi Colony, Lal Dawara Road, Yamuna Nagar, Haryana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR GURDARSHAN SINGH BRAR</td>
              <td>Ph.D Nucl. Physics/1993-1996</td>
              <td>01642219023, 2211983</td>
              <td>brargurdarshan@yahoo.com</td>
              <td>St. No. 13, Ajit Road, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. SAVITA ARYA NEE PURI</td>
              <td>M. Sc., M. Phil, B.Ed</td>
              <td>2652964, 9417686623</td>
              <td></td>
              <td>
                M. R. A. Sr. Sec. School, Sec-27A, Chandigarh/2065, Sec-27-C
                Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR HARINDER KAUR</td>
              <td>Ph.D. Sociology/1981-1983</td>
              <td>2222550</td>
              <td></td>
              <td>
                Deptt. Of C.C., Pbi. Uni. Patiala/Prem Niketan, Hira Nagar,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. LT. COL. AMARJIT SING</td>
              <td>M.A. His, Dip. Permgt &amp; Ir, Dip. Mtrl Mgt/1979-1983</td>
              <td>462635, 603175</td>
              <td></td>
              <td>142-C, BRS Nagar, Ludhiana - 141001</td>
            </tr>
            <tr>
              <td style="width: 20%">SH JAGSIR SINGH</td>
              <td>MBA</td>
              <td>01682-246941</td>
              <td></td>
              <td>Vill. Khosa Kotla, P.O. Khosa Randhir, Dist. Moga</td>
            </tr>
            <tr>
              <td style="width: 20%">MS HARDEEP KAUR</td>
              <td>MBA</td>
              <td>0164-2262905, 9888218194</td>
              <td>85deep@gmail.com</td>
              <td>Dharmshala Street, Goniana Mandi, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">MS PROMILA BISHT</td>
              <td>B.Tech/2002-2006</td>
              <td>0172-3208722</td>
              <td>promila_bisht@rediffmail.com</td>
              <td>
                Flat No. D-111, Rail Vihar, Sec. 4, MDC, Panchkula, Haryana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. KANTA KHOSLA</td>
              <td>M. Sc.</td>
              <td>9814823634</td>
              <td>-</td>
              <td>
                # 34, Tagore Park, Professor's Colony, Near D.A.V. College Play
                Ground, Jalandhar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. HARPREET KAUR</td>
              <td>M.Sc., Ph.D, Botany</td>
              <td>9464740052</td>
              <td>harpreetsidhu75@gmail.com</td>
              <td>VPO Ahmedpur, The. Budhlada, Distt. Mansa</td>
            </tr>
            <tr>
              <td style="width: 20%">SH NISHU BANSAL</td>
              <td>M.Com./1993-1995</td>
              <td>2214175, 0171-2518341, 01</td>
              <td>vinay_pta@yahoo.co.in</td>
              <td>B-19/409, Dhak Bazaar, Kharadian Street, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. NARINDER PAL SINGH DH</td>
              <td>M. Sc., M. Phil, Ph.D</td>
              <td>0181-4600727, 9872033727</td>
              <td>npsdhillon@hotmail.com</td>
              <td># 727, Urban Estate Phase- 2, Jalandhar - 144022</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. AVNEET PAL SINGH</td>
              <td>M. Sc., Ph. D.</td>
              <td>304-6225, 9501036143</td>
              <td>"avneet7@rediffmail.com</td>
              <td></td>
            </tr>
            <tr>
              <td style="width: 20%">SH RISHPAL SINGH AUJLA</td>
              <td>M.B.B.S/1953-1958</td>
              <td>4103608671 3014743991</td>
              <td></td>
              <td># 8113, Pinehurst Harbour Way, Pasadena, Md. 21122, USA.</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. AMANDEEP KAUR</td>
              <td>Ph.D, Botany</td>
              <td>01675-256652, 9815249537</td>
              <td>amandeepbotany75@gmail.com</td>
              <td>
                Chandigarh Colony, Near Truck Union, Dhuri Road, Malerkotla,
                Distt. Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. TARANBIR SINGH</td>
              <td>LL.B/1993-1996</td>
              <td>2216155, 98142-72709</td>
              <td></td>
              <td># 66-B, Punjab Niwas, Model Town, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR KUM KUM BAJAJ</td>
              <td>Ph.D Eng, 1982-1990</td>
              <td>2282885, 2282759</td>
              <td>Bajajk2002@ yahoo.com</td>
              <td>
                Principal, Asian Institution , Sirhind Road, Patiala/House No.
                36, Phase 3, Urban Estate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH MANDEEP SINGH</td>
              <td>M.A., LL.B</td>
              <td>01675-295219, 98727-84819</td>
              <td></td>
              <td>Vill. Mahorana, P.O. Banbhaura, Teh. Maler Kotla, Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. JASPREET KAUR</td>
              <td>Ph.D./1985-1988</td>
              <td>4648075, 9872888075</td>
              <td>jaspreet1969@sify.com</td>
              <td>4791/9, Pancham Society, Sec. 68, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">MS RITU MALHOTRA</td>
              <td>M.A./Pol. Sci./2004-2006</td>
              <td>2308009</td>
              <td></td>
              <td>H.No. B 40/384, Gher Sodhian, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SMT. RABIA LITT</td>
              <td>M.A/1996-1998</td>
              <td>01765-260082, 98151-17954</td>
              <td></td>
              <td>
                C/O Robin Girls College, Patiala Road, Bhadson, Dist. Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR DAVINDER KUMAR</td>
              <td>Ph.D., Statistics</td>
              <td>2285145</td>
              <td>dkgarg_stat@yahoo.co.in</td>
              <td>
                Deptt. Of Statistics, Pbi. Uni. Patiala /H. No. 2145, Urban
                Estate, Phase-2, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR SATYAPAL SINGH SALOOJA</td>
              <td>LL.M</td>
              <td>2302489, 9417125151</td>
              <td></td>
              <td>112-C, Sewak Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR RAVINDER GASSO</td>
              <td>M.A(Hindi), M.phil, Ph.D</td>
              <td>9416110679</td>
              <td></td>
              <td>2545/8, Sheela Colony, Amim Road, Kurukshetra</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI ANIL KUMAR BHANDARI</td>
              <td>P.G.in Matersts Management/1971-1975</td>
              <td>477673, 603175, 602789</td>
              <td></td>
              <td>137-C, Rishi Nagar, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. VEERPAL KAUR</td>
              <td>M.Phil Pbi/1983-1988</td>
              <td>(R) 2220986 (O) 2214469</td>
              <td></td>
              <td># 26, Raja Avenue, Near 21 No. Phatak, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. KRISHAN SINGLA</td>
              <td>LL.B/1980-1983</td>
              <td>0161-256913, 2661616, 260</td>
              <td></td>
              <td>1FF, Prem Vihar, SBS Nagar, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF. DEEPAK MANMOHAN SIN</td>
              <td>M.A, Psychology &amp; Punjabi</td>
              <td>3046518-19, 9876200380</td>
              <td>dmspunjab@gmail.com</td>
              <td>
                A-10, Pbi. Uni. Campus, Patiala, VPO Mubarakpur, Via Malerkotla,
                Distt. Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MISS HARSHARAN KAUR KALER</td>
              <td>LL.M</td>
              <td>5060165, 98729-90165</td>
              <td></td>
              <td># 165, Street No. 9, Manjit Nagar, Bhadson Road, Pta.</td>
            </tr>
            <tr>
              <td style="width: 20%">MS INDERPREET KAUR</td>
              <td>M.Tech/2004-2006</td>
              <td>01882-250070</td>
              <td>lamba_81@yahoo.co.in</td>
              <td>196, Tagore Nagar, Hoshiarpur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ASHISH VIJ</td>
              <td>MBA</td>
              <td>9999309270</td>
              <td>act_in_ash@yahoo.com</td>
              <td>24, Pavitar Enclave, Vikas Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. HARVINDER KAUR</td>
              <td>M. Sc., Ph.D</td>
              <td>01962262103, 9469075954</td>
              <td>komrlrainr03@gmail.com</td>
              <td>
                Department Of Botany, Govt. Degree College, Poonch Distt.
                Poonch, State J&amp;K/D/O S. Jagbir Singh, Ward No. 6, Behind
                Old J&amp;K Bar, Jawahar Nagar, Rajouri J&amp;K
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS MANBEER KAUR</td>
              <td>Ph.D./Zoology</td>
              <td>01881-223996, 01884-28109</td>
              <td>kaur.manbeer@rediffmail.com</td>
              <td>
                CBAM, Khalsa College, Garhshankar/568, Gaini Zail Singh Nagar,
                Ropar/VPO Sukwanad, Teh. Bagapurana, Dist. Moga
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH VIKAS KALRA</td>
              <td>MBA</td>
              <td>2221014, 2213136, 9815945</td>
              <td>ifmc@sify.com</td>
              <td>27, Majithia Enclave, Phase 2, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. SUNITA SINGLA</td>
              <td>M.Sc., M.Phil</td>
              <td>2212909, 9876390602</td>
              <td></td>
              <td># 11-B, Ajit Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SMT. MANJIT KAUR</td>
              <td>M.A Pbi/1981-1983</td>
              <td>2352877</td>
              <td></td>
              <td># 58/B, Rattan Nagar, Tripuri Town, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR MANJEET KAUR</td>
              <td>Ph.D. LL.B.Prfessional/1983-1992</td>
              <td>98728-24302, 3046476</td>
              <td></td>
              <td>82, Phulkian Enclave, Mini Sectriate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH KULJIT SINGH</td>
              <td>B.Tech</td>
              <td>1628272102</td>
              <td>k9_kuljit@yahoo.com</td>
              <td>VPO Kotala, Teh. Samrala, Dist. Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. SUDESH KUMARI</td>
              <td>M. Sc., M.Phil</td>
              <td>2218254, 9914429141</td>
              <td></td>
              <td>
                Principal, G. S. S. S. Dakala/155, Bharpur Garden, Opposite New
                Moti Bagh Palace, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS VARINDER KAUR</td>
              <td>M.Sc./Chemistry</td>
              <td>01676-221833, 98150-65809</td>
              <td>var_ka04@yahoo.co.in</td>
              <td>126, III, Ajit Nagar, Patiala Road, Sunam</td>
            </tr>
            <tr>
              <td style="width: 20%">SMT. NEELAM VERMA</td>
              <td>Ph.D Chemistry/1982-1986</td>
              <td>9779006254</td>
              <td>verma_ neelam2@gmail.com</td>
              <td># 4211, Urban Estate, Phase-II, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH UMESH PANDAV</td>
              <td>LL.B, D.C.A</td>
              <td>2282837, 94171-31541</td>
              <td></td>
              <td>Advocate, K.N.188, Phase-I Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS RAMANDEEP KAUR</td>
              <td>MCA</td>
              <td>2285092</td>
              <td></td>
              <td>1057, Phase-II, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">M/S DEEPTI MINHAS</td>
              <td>Zoology</td>
              <td></td>
              <td>deepti377@yahoo.co.in</td>
              <td>
                Vill. Nangal Awana, PO. Dhaula Khera, Teh. Mukerian, Dist.
                Hoshiarpur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR ASHOK KUMAR MALIK</td>
              <td>,,</td>
              <td>09815551332, 2353447</td>
              <td>malik_chem2002@yahoo.co.uk</td>
              <td>42, Upkar Nagar, Factory Area, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. MANDEEP KAUR</td>
              <td>M.Sc., M.Phil, Botany</td>
              <td>8968870718</td>
              <td>balmandy@yahoo.com</td>
              <td>VPO Bassian Bet, The. Jagraon, Distt. Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. BALJEET SINGH JOHAL</td>
              <td>M.A. Eco/1978-1983</td>
              <td>2215290, 2213911, 2302011</td>
              <td></td>
              <td>
                Mananging Director, Johal Air Travels Services, Pvt. Ltd. Opp.
                Bus Stand, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR KAMALJEET SINGH</td>
              <td>M.A(pbi), Ph.d, NET,Ph.d,LL.B</td>
              <td>01675-236190</td>
              <td>kamaljitsinghtibba @gmail.com</td>
              <td>
                Tara Vivek College, Gajjan Majra Teh-Malerkotla,Distt-Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS NIPUNJOT KAUR</td>
              <td>M.Sc./Biotechnology</td>
              <td>2283899</td>
              <td>nipunjotsoni@rediffmail.com</td>
              <td>444, Phase-I, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH AMARDEEP SINGH KHAIRA</td>
              <td>M.Tech/2004-2006</td>
              <td>2227739, 9899971837</td>
              <td>harrykhaira@hotmail.com</td>
              <td>190, Sewak Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS KULDEEP KAUR</td>
              <td>MBA/PUSBS</td>
              <td>0164-2273035, 9855807838</td>
              <td>deep.aulakh@yahoo.co.in</td>
              <td>
                16401/C, St. No. 11/9, Baba Farid Nagar, Bibi Wala Chowk,
                Bathinda
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH VRINDER MANKOTIA</td>
              <td>MBA/PUSBS</td>
              <td>01972-276055, 9816180415</td>
              <td>vrinder_mankotia@yahoo.in</td>
              <td>
                Vill. Jol, PO. Bir Bagera, Teh. Sujanpur Tihra, Dist. Hamirpur,
                H.P.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH PRABHJOT SINGH</td>
              <td>MBA</td>
              <td>2281560, 9872206488</td>
              <td>usbs_prabhjot@yahoo.co.in</td>
              <td>H. No. 1, Walia Enclave, Opp. Pbi. Uni. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURKIRPAL SINGH SEKHO</td>
              <td>LL.B</td>
              <td>2302620, 9872409678</td>
              <td></td>
              <td>58, Charan Bagh, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH KAMAL RAIJEET SINGH RA</td>
              <td>M.P.Ed</td>
              <td>9815359912</td>
              <td></td>
              <td>18, Majar Bindra Enclave, Dist. Jalandhar</td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARDEEP SINGH MANHAS</td>
              <td>M.P.Ed</td>
              <td>9463676359</td>
              <td>harry_cool@yahoo.co.in</td>
              <td>
                Ward No. 9, H. No. 62, Mohalla Dhangah, VPO Garhdiwala,
                Hosiharpur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">PROF PARMJIT KAUR</td>
              <td>M.Com./1989-1991</td>
              <td>2532321, 2215835</td>
              <td></td>
              <td>6, Aasiana, Dashmesh Nagar - B, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS ANNIE</td>
              <td>,,</td>
              <td>01881-22041</td>
              <td>anniedhruva@yahoo.co.in</td>
              <td>56, Dashmesh Colony, Ropar</td>
            </tr>
            <tr>
              <td style="width: 20%">M/S GURBINDER KAUR</td>
              <td>Zoology</td>
              <td>01501-286099, 09460618059</td>
              <td></td>
              <td>
                D/O Sh. Darshan Singh, VPO 25F, Gulabewala, Teh. Sri Karanpur,
                Dist. Sri Ganganagar (Rajasthan)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. MANDEEP PABBY</td>
              <td>M. Sc., B.Ed</td>
              <td>0161-2301680, 9914523556</td>
              <td>mandeeppabby@gmail.com</td>
              <td>
                W/O Gaurav Pabby, H. No.- 1446/8D, Kapil Park, Adjoining, Petrol
                Pump, Humbran Road, Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. RAMANJEET KAUR</td>
              <td>M.Sc., M.Phil, Botany</td>
              <td>0183-2401940, 9915747299</td>
              <td>splehri@yahoo.com</td>
              <td>H.No. 5, Kapoor Lane, Model Town, Amritsar</td>
            </tr>
            <tr>
              <td style="width: 20%">MS SUNITI</td>
              <td>MBA</td>
              <td>2232256, 9876132256</td>
              <td>sunitichaudhary@yahoo.co.in</td>
              <td>C-264, Azad Nagar, Sirhind Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. PRIYA</td>
              <td>M. Sc., B.Ed</td>
              <td>01679-264008, 9779156044</td>
              <td>garg_oct.8424@yahoo.com</td>
              <td>
                Surinder Karyana Store, Opp. SBOP Dhanaula Distt. Barnala 148105
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. PARAMJEET BAIDWAN</td>
              <td>LL.B</td>
              <td>416-401-0020</td>
              <td>paramjeetkb@hotmail.com</td>
              <td>8 BLACKMERE CIRCLE BRAMPTON, ON L6Y4M3, CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. MUKESH KUMAR</td>
              <td>M.A./Pbi.</td>
              <td>01676-273219, 0167627212</td>
              <td></td>
              <td>Ward 13, Near State Bana, Lehra Gaga, Distt. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH KULWINDER SINGH</td>
              <td>M.A(pbi),Ph.D (pbi)</td>
              <td>9876463700</td>
              <td>dhillonkulwinder01@gmail.com</td>
              <td>Vill. Kharak Singh Wala, PO Ghuman Kalan, Distt. Mansa</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. PARAMJIT KAUR</td>
              <td>M. Sc., M. Phil., B.Ed</td>
              <td>2360834, 9876060834</td>
              <td></td>
              <td>34/8, Anand Nagar-B, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR NEENA SETH</td>
              <td>M.Sc., B.Ed, Ph.D/1992-1998</td>
              <td>2354196</td>
              <td></td>
              <td>Deptt. Of Zoology, Pbi. Uni. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS SUKHDEEP KAUR</td>
              <td>M.Phil./Pol. Sci.</td>
              <td>01655-241719</td>
              <td></td>
              <td>V.P.O. Abul Khurana, Distt. Muktsar, Teh. Malout</td>
            </tr>
            <tr>
              <td style="width: 20%">DR NEENA SETH PAJNI</td>
              <td></td>
              <td>2354196, 9814004474</td>
              <td>nseth_pajni@yahoo.com</td>
              <td>
                S.S. Degree College For Girls, Bhikhi/31 Guru Nanak Nagar,
                Tripuri, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. IABAL SINGH</td>
              <td>M.Sc., IFS</td>
              <td>0522-4070637, 9415410553</td>
              <td>iqbal_sondhi@gmail.com</td>
              <td>3/225, Vipul Khand, Gomtinagar, Lucknow 226010</td>
            </tr>
            <tr>
              <td style="width: 20%">SH TARLOCHAN DASS GARG</td>
              <td>M.Sc/Zoology</td>
              <td>0164-2290788, 2210668,229</td>
              <td>tidzgang.yahoo.com</td>
              <td>
                Kendriya Vidyalaya No. 1, Bathinda Cantt/22253. Shant Nagar,
                Bathinda
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH BIKRAMJIT SINGH</td>
              <td>M.Tech/2001</td>
              <td>01874-279047, 93169-82526</td>
              <td>lehalbiks@yahoo.com</td>
              <td>Vill. Lehal, P.O Dhariwal, Distt. Gurdaspur</td>
            </tr>
            <tr>
              <td style="width: 20%">DR HARPAL KAUR KHEHRA</td>
              <td></td>
              <td>2286571, 9876208790</td>
              <td>hkkh28@ymail.com</td>
              <td>
                Deptt. Of Law, Punjabi University, Patiala/4023, Phase-2, Urban
                Estate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH DINESH KUMAR</td>
              <td></td>
              <td>01871-256065, 9855050396</td>
              <td></td>
              <td>
                Ward No. 12, Near Post Office, Fatehgarh Churian, Gurdaspur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH RAMANDEEP SINGH OBEROI</td>
              <td>BCA, MBA</td>
              <td>0164-2218595, 9872658595</td>
              <td>oberoi_1@hotmail.com</td>
              <td>17253, St. No. 1, Aggarwal Colony, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SH VANEET KANWAL SINGH D</td>
              <td></td>
              <td></td>
              <td></td>
              <td>19131, St. No. 9, Bibiwala Road, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. PUNEET KUMAR</td>
              <td>M. Sc., Ph. D</td>
              <td>9876023472</td>
              <td>puneetbotcyto@gmail.com</td>
              <td>
                H. No. 429, Urban Estate, Phase-II, Patiala. Punjab/New Colony
                Sansarpur Khas. Teh.- Kotla Jaswan, Distt. Kangra (H. P.) 176501
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR MANOJ KAUSHIK</td>
              <td>M.B.A./1996-1998</td>
              <td>2664550</td>
              <td></td>
              <td>
                H.No.-4565/1, Radha Swami Street, Namdar Khan Road, Near
                Sirhindi Gate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH AMARVIR SINGH</td>
              <td></td>
              <td>001652-232193, 9872426084</td>
              <td>mannamarvir@hotmail.com</td>
              <td>Ward No. 6, St. No. 17, Near Bus Stand, Mansa</td>
            </tr>
            <tr>
              <td style="width: 20%">MS SHILPA RANI</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>Shilpagarg104@gmail.com</td>
              <td>
                Aggarwal Cloth Store, Near Old Bus Stand, Tapa Mandi, Distt.
                Barnala (M.No. 95017-62191)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS HATAKSHI VERMA</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>hitakshiverma171095@gmail.com</td>
              <td>
                #3015, Ward No. 12, Brahman Majra, Distt. Fatehgarh Sahib M.No.
                81462-95860
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS RAJINDER KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>rajinderkaurlongia@gmail.com</td>
              <td>
                Vill. Singh, PO Bhagwantpur, Distt. &amp; Teh. Ropar (M.No.
                76963-68507)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. GURMEET KAUR</td>
              <td>M.A. (Linguistics)</td>
              <td></td>
              <td></td>
              <td>VPO Duggan, Sangrur M.No. 94643-97600</td>
            </tr>
            <tr>
              <td style="width: 20%">MS HIMANI SAINI</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>sainihimani68@gmail.com</td>
              <td>
                #56, VPO Bela, Teh. Chamkaur Sahib, Distt. Ropar M.No.
                98554-55193
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS ANKITA DHAWAN</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>ankitadhawan0001@gmail.com</td>
              <td>#1, Friends Colony, Ferozepur M.No. 99147-48854</td>
            </tr>
            <tr>
              <td style="width: 20%">MS LOVEPREET KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>arsh1994@gmail.com</td>
              <td>
                VPO Chathe Sekhwan, Teh. &amp; Distt. Sangrur (M.No.
                94643-49747)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS KULBEER KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>kulbeer24kaur@gmail.com</td>
              <td>
                Vill. Bhauri Bhann, PO Dodh, Teh. &amp; Distt. Ferozepur M.No.
                94654-11404
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS PARMINDER KAUR (POST M</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>parmindertoor21@gmail.com</td>
              <td>
                VPO Kuthala, Teh. Malerkotla, Distt. Sangrur (M.No. 97815-82146)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS TANVIR KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>tanvir281094@gmail.com</td>
              <td>
                Vill. Long Majori, PO Mangewal, Distt. Ropar, Teh. Anandpur
                Sahib
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. INDERJEET SINGH CHAHA</td>
              <td>M.A. (Def)/1988-1990</td>
              <td></td>
              <td></td>
              <td>
                Deptt. Of Defence &amp; Strategic Studies, Punjabi University,
                Patiala M.No. 98554-86922
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RAJESH KUMAR VERMA</td>
              <td>M.Phil (Music)</td>
              <td></td>
              <td>verma.rajesh84@gmail.com</td>
              <td>
                #71, Sec-1/B, Vikas Nagar, Mandi Gobindgarh, Distt. Fatehgarh
                Sahib M.No. 94175-90853
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. ARVINDER KAUR</td>
              <td>Ph.D.(Music) persuing</td>
              <td></td>
              <td>arvinder905@gmail.com</td>
              <td>Cinema Road, Sunam M.No. 94783-94303</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. GURJASPAL SINGH</td>
              <td>M.Sc. (Sports Science)/2014-2016</td>
              <td></td>
              <td></td>
              <td>VPO. Ahlupur Teh. Sardulgarh Distt.Mansa M.No.9463625657</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. VANITA</td>
              <td></td>
              <td></td>
              <td>vanita27@gmail.com</td>
              <td>
                #578, Urban Estate, MIG, Phase-I, Patiala (M.No. 94640-11172)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. DAVINDER KAUR</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td>lakhwinderkaurlakhu408@gmail.com</td>
              <td>
                VPO Gill Patti Goianan Mandi Distt. Bathinda M.No. 84378-01866
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. MANDEEP KAUR</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td></td>
              <td>
                VPO. Sohian Kalan, Distt. Amritsar. Near Mata Rani Mandir.
                M.No.9988041339
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. AMANDEEP KAUR</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td>preet16jul.hk@gmail.com</td>
              <td>VPO. Bias Pind Distt. Jalandhar M.No. 81460-17831</td>
            </tr>
            <tr>
              <td style="width: 20%">MS MANISHA RANI</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td></td>
              <td>
                Police Colony, Thana City, Q No. 8, Jalalabad (W), Distt.
                Fazilka M.No. 98147-90106
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. ROBINS KUMAR</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td>robinsdenga23@gmail.com</td>
              <td>VPO. Kauli Distt. Patiala M.No. 95018-27907</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. GURWINDER SINGH</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td>sgurwinder799@gmail.com</td>
              <td>VPO. Uppli Teh Sangrur Distt. Sangrur M.No. 98886-81973</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. SARABJIT KAUR</td>
              <td>Ph.D (Music) persuing</td>
              <td></td>
              <td>sarabjit819@gmail.com</td>
              <td>
                #148, Behind S.D. School, Maur Mandi, Distt. Bathinda M.No.
                94653-55406
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. RAJWINDER KAUR</td>
              <td>M.Sc. (Sports Science)/2014-2015</td>
              <td></td>
              <td>rkamboj120@gmail.com</td>
              <td>
                VPO. Fatehabad Teh Khadoor Sahib.Distt. Tarn Taran
                M.No.9876093138
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. DAMANJEET KAUR</td>
              <td>Ph.D. (Music) persuing</td>
              <td></td>
              <td>damnjeet_sidhu@gmail.com</td>
              <td>
                PO Raghu Bangi, Vill. Sukhladhi, Tehsil Talwandi Sabo, Distt.
                Bathinda (M.No. 94789-86983)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. HARSHITA YADAV</td>
              <td>Ph.D (Sports Science)/2015-till continue</td>
              <td></td>
              <td>harshitayadav@gmail.com</td>
              <td>
                St. No. 5, Arya Nagar, Ballour Road, Bahadurgarh M.No.
                99917-57696
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. AJAY PAL NATT</td>
              <td>Ph.D (Sports Science)/2013-till continue</td>
              <td>8360299566</td>
              <td>ajaypalnat@yahoo.com</td>
              <td>
                #342, Civil Hospital Road, Near Water Worksmansa M.No.
                88724-00710
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. HIMLESH</td>
              <td>Ph.D (Sports Science)/2015-till continue</td>
              <td></td>
              <td>nonubhutani@gmail.com</td>
              <td>#98, 22 Acre Colonis, Barnala Punjab (M.No. 90567-85488)</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. KAMALPREET SINGH</td>
              <td>
                PG Diploma in Health Fitness &amp; Trainer (Sports
                Science)/2015-16
              </td>
              <td></td>
              <td></td>
              <td>VPO Nathana, Distt. Bathinda-151102 M.No. 9876970564</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. SUMIT GARG</td>
              <td>M.Sc. (Mathematics)/2005</td>
              <td></td>
              <td></td>
              <td>
                Yash Choudhry Market, Behind Shimla Tailor, Dhuri, Distt.
                Sangrur Tel. No. 01675-226739, M.No. 98726-26739
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. SONIA GOYAL</td>
              <td>M.Sc. (Mathematics)/2005</td>
              <td></td>
              <td></td>
              <td>
                #1081, St. No. 4/5, 1St Chowk, Gobind Nagri, Abohar M. No.
                98552-05347
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. NANCY GARG</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td></td>
              <td>#130, Model Town, Tohana, Fatehabad Tel. No. 01692-231991</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. SANJEEV SINGLA</td>
              <td>M.Sc. (Mathematics)/20052007</td>
              <td></td>
              <td>www.sanjubti@yahoo.com</td>
              <td>
                #27, Ward No. 12, Janta Colony, Rampura Phul M.No. 98886-71789
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. SEEMA SHARMA</td>
              <td>M.A. (Music Instrumental)/1988-1990</td>
              <td></td>
              <td></td>
              <td>
                #93, MITC Colony, Barnala Road, Sirsa, Haryana M.No. 94162-29363
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. NEETU VERMA</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td></td>
              <td>
                B-III/156, Line Bazar, Kamla Street 1, Faridkot Tel. No.
                016339-50067
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RAJVEER SINGH</td>
              <td>Diploma in Gatka/2015-2016</td>
              <td></td>
              <td>rajbirsingh3010@gmail.com</td>
              <td>
                Ward No. 27, Guru Nanak Colony-2, Chalta Road Kharar, SAS Nagar,
                Mohali M.No. 85911-44722
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI JAGMEET SINGH SAHOTA</td>
              <td>Law/1987-1991</td>
              <td>256252, 259340, 098724-56</td>
              <td>jagmeetsahota2011@gmail.com</td>
              <td>B-VI/206, Mandi Gobindgarh, Fatehgarh Sahib</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. BALINDERJIT KAUR</td>
              <td>M.Litt, /1966</td>
              <td>(R)2215443</td>
              <td>rajbalika@pbi.ac.in</td>
              <td>
                Philosphy Deptt, Pbi. Uni. Pta. Karan Kung, 12 A-1, Ranbir Marg,
                Model Town, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR KULDEEP SINGH</td>
              <td>Ph.D. Pol. Sci./1982-1987</td>
              <td>3245656, 2792754, 2790312</td>
              <td></td>
              <td>
                Sri Guru Gobind Singh College, Sec. 26, Chandigarh/1307, Phase
                V, Mohali
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. JASVIR SINGH</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td>jasmeet.sangrur@gmail.com</td>
              <td>VPO. Manawal, Distt. Sangrur M.No. 94646-31231</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. SUKHWINDER KAUR BATH</td>
              <td></td>
              <td></td>
              <td>bathsk10@gmail.com</td>
              <td>
                # A-6, University Campus, Punjabi University, Patiala M.No.
                98149-69226
              </td>
            </tr>
            <tr>
              <td style="width: 20%">PROF RAGHBIR CHAND GUPTA</td>
              <td>Ph.D./Botany</td>
              <td>(R) 2206521, 9417491981</td>
              <td>guptarc53@rediffmail.com</td>
              <td>
                Botany Deptt., Pbi. Uni. PTA/ 163-A, Punjabi Bagh, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR NASIB SINGH BAWEJA</td>
              <td>Ph.D. Pbi/1975-1980</td>
              <td>(R) 2352847 (O) 2288585</td>
              <td></td>
              <td>146, New Green Park Colony, Jhill Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. RAJIV BHANDARI</td>
              <td>M.Sc. Statistics/1981-1983</td>
              <td>01732-233433, 220960</td>
              <td></td>
              <td># 1977, Sector 17, Huda, Jagadhri(HR)</td>
            </tr>
            <tr>
              <td style="width: 20%">MS JATINDER KAUR</td>
              <td>MCA</td>
              <td>01675-242759, 9814563904</td>
              <td></td>
              <td>
                Bhai Bhir Singh Nagar, Near Hind Hospital, Ahmadgarh, Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS ANUPAMA</td>
              <td>B.A(Hons),M.A,Mphil,PhD.</td>
              <td>0164-3296484</td>
              <td>anupamauppal@yahoo.com</td>
              <td>
                Deptt. Of Post Graduate Studies,Punjabi Universityregional
                Centre, Bathinda/22256, Gali No. 2, Shant Nagar, Bathinda
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR S.C. SHARMA</td>
              <td>M.A. Eng, Dip in French</td>
              <td>2228138, 2213195</td>
              <td></td>
              <td>Aashiana, Sheranwala Gate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH YASHU</td>
              <td>MBA/PUSBS</td>
              <td>0164-2217259, 9464874107</td>
              <td>yashu_bht@yahoo.co.in</td>
              <td>3206, St. No. 3, Court Road, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. TARA SINGH</td>
              <td>Ph.D</td>
              <td>9463123505</td>
              <td></td>
              <td>C-24 Punjabi University, Campus</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. JASWINDER SINGH</td>
              <td>M.Phil Pbi/1979-1983</td>
              <td>2353515, 2321695</td>
              <td></td>
              <td>
                15-Deep Nagar, Near Anand Nagar B, Seona Road, Tripuri, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS HINA NANDROJOG</td>
              <td>M.A., Eng./1982-1987</td>
              <td>2710871, 9810693946</td>
              <td></td>
              <td>8/101, East End Apartments, Delhi</td>
            </tr>
            <tr>
              <td style="width: 20%">SH AJAY SONDHI</td>
              <td></td>
              <td>2647685, 9888066611</td>
              <td>sondhiajay123@Gmail.com</td>
              <td>2089/3, Sec-45-C, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. SANDEEP KAUR</td>
              <td>M.Sc. (Mathematics)/2005</td>
              <td></td>
              <td></td>
              <td>
                VPO Bhagi Wander Lalle Aana Road, Teh. Talwandi Sabo, Distt.
                Bathinda (M.No. 98727-66808)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. PARDEEP SINGH</td>
              <td>M.Phil Lingustics/1988-1991</td>
              <td>01635-267916, 267993</td>
              <td></td>
              <td>V.P.O. Sibian, Distt. Fridkot</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. SURINDERPAL SINGH</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td>laddicheema58@gmail.com</td>
              <td>
                VOP. Cheema Mandi, Ward No. 6, Tehsil Sunam, Distt. Sangrur
                M.No. 97807-41416
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR SUKHJIT SINGH DHALIWAL</td>
              <td>Ph.D Maths/1983-1992</td>
              <td>01672-280106, 284842, 280</td>
              <td>sukhjit_d@yahoo.com</td>
              <td>
                Deppt. Of Mathematics, S.L.I.E.T., Longowal, Dist. Sangrur/Vill.
                Laddi, P.O. Ghabdan Kothi, Teh. &amp; Dist. Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. NARINDER SINGH BHATIA</td>
              <td>Diploma in Gatka/2015-2016</td>
              <td></td>
              <td></td>
              <td>
                #106-B, Mathura Colony, Rajpura Road, Patiala M.No. 96466-69181
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS NAVPREET KAUR</td>
              <td>M.A. , Pbi.</td>
              <td>3292575</td>
              <td></td>
              <td>47 A, Khalsa College Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. LAKHWINDER KAUR</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td>lakhwinderkaurlakhu408@gmail.com</td>
              <td>Vill Ajnauda Khurd Distt. Patiala M.No. 98551-26419</td>
            </tr>
            <tr>
              <td style="width: 20%">DR MUKESH KUMAR THAKAR</td>
              <td>M.SC, Ph.D</td>
              <td>09316327790, 2283530</td>
              <td>mukeshk38@gmail.com</td>
              <td>H.No 319, Urban Estate, Phase III, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR ANITA GILL (SHARMA)</td>
              <td>Ph.D. Eco/1984-1987</td>
              <td>2282295</td>
              <td>gill_anita2003@yahoo.com</td>
              <td>68, Urban Estate, Phase I, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS JYOTI PRABHA</td>
              <td>M.Phil/Chemistry</td>
              <td>2215922, 2211988</td>
              <td></td>
              <td>182, Phase II, Urban Estate, Model Town, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. DEVENDRA KUMAR SRIVA</td>
              <td>M. Sc.</td>
              <td>09006119587, 9417491877</td>
              <td>devsrivastv@gmail.com</td>
              <td>
                C/O Prof. M. I. S. Saggoo, Dept. Of Botany, Punjabi University,
                Patiala/Vill. Mubarakpur, P.O. Chainpur, Dist. –SIWAN, BIHAR
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. HARDEEP SINGH</td>
              <td>M.A. , LL.B</td>
              <td>905-497-7199</td>
              <td>hardeepvirdi@hotmail.com</td>
              <td>44 SPRINGTOWN TRAIL L6R 2C7 BRAMPTON ON T, CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. NAVPREET SINGH</td>
              <td></td>
              <td></td>
              <td>nanvor@rediffmail.com</td>
              <td>
                #67, Profesors Colony, Opp. Punjabi University, Patiala M.No.
                98142-21516
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. MANISHA</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td></td>
              <td>
                Near OBC Bank, Maur Mandi, Distt. Bathinda Tel. NO.
                01655-232391, 230031
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI CHANCHAL MANOHAR SIN</td>
              <td>M.A., M.Lets. B. Journalism/1968-1970</td>
              <td>2697799, 94172-70345</td>
              <td></td>
              <td>Kothi No. - 845 Sector 38-A, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SH MUNISH KUMAR</td>
              <td>,,</td>
              <td>2370031</td>
              <td>dhir_munishkumar@yahoo.com</td>
              <td>937, Street. No. 9, Gurbax Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SMT SUKHJINDER KAUR</td>
              <td>M.A Pbi/1985-1987</td>
              <td>01765-230234, 98887-20622</td>
              <td></td>
              <td>W/2, 184-Radha Kishan Road, Hira Mahal Nabha, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH PARMINDER SINGH DEHAR</td>
              <td>M.Sc/ Zoology</td>
              <td>01676-249074, 9872249074</td>
              <td>inder_dehar@yahoo.co.in</td>
              <td>
                S/O Sh. Dhan Ram, Vill. Baghraul, PO Kamalpur, Via-Dirba, Dist.
                Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR RAM KUMAR</td>
              <td>Ph.D./Zoology</td>
              <td>0172-2725444, 01792-25224</td>
              <td></td>
              <td>
                Dept. Of Entomology And Apiculture DRYSP UHF, Nauni 173230,
                Solan/1170, Sec 15-B, Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH PRITAM SINGH</td>
              <td>M.A Pol. Sci., LL.B</td>
              <td>98724-00649</td>
              <td></td>
              <td>Advocate, Killa Road, Amloh, Fatehgarh Sahib</td>
            </tr>
            <tr>
              <td style="width: 20%">DR DALJEET KAUR</td>
              <td>Ph.D/Linguisics</td>
              <td>9815989834, 3046292</td>
              <td></td>
              <td>42-D, Professor Colony, Near Shiv Mandir, Opp. P.U.P</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ANIL KUMAR</td>
              <td>MBA</td>
              <td>0183-2526329, 2767342, 98</td>
              <td>anilpuri_1984@yahoo.com</td>
              <td>228/7, Gali Sandik Phelwan, Jouro Pipal, Amrisar</td>
            </tr>
            <tr>
              <td style="width: 20%">SH VARINDER SINGH</td>
              <td>M.P.Ed</td>
              <td>94630-11897</td>
              <td></td>
              <td>Vill. Hessuwal, Teh. Gashi Ram Pur, Dist. Hoshiarpur</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. BHAGAT SINGH GILL</td>
              <td>Ph.D</td>
              <td>2282414, 9872697044</td>
              <td></td>
              <td>25, Urban Estate, Phase-I, Patiala 147002, Punjab</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. MANJU SAHNI</td>
              <td>M. Sc., M. Phil., Ph. D</td>
              <td>0161-2486287, 9872486287</td>
              <td></td>
              <td>
                W/O Dr. Viney Kakkar, 1334, 5615 Raghbir Park Habowal Kalan,
                Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. YASHWANT BASSI</td>
              <td>M. Sc.</td>
              <td>9417023268, 8054014242</td>
              <td>jasschacha@yahoo.com</td>
              <td># 373, Giani Zail Singh Nagar, Rupnagar, Punjab</td>
            </tr>
            <tr>
              <td style="width: 20%">SH RUPESH KUMAR SHARMA</td>
              <td>MBA/PUSBS</td>
              <td>2202128</td>
              <td>rupesh_sharma149@ yahoo.com</td>
              <td>56-B, Rose Avenue, New Officer's Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. BALAM LIMBA</td>
              <td>Ph.D, Pbi.</td>
              <td>9815533103</td>
              <td></td>
              <td>VPO Heron Kalan, The. &amp; Distt. Mansa</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. CHARANJIT SINGH</td>
              <td>M.Sc</td>
              <td>01628-257228, 259589, 981</td>
              <td>kashmirlabs@yahoo.co.in</td>
              <td>Kashmir Color Labs, Doraha 141421</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. GURDEEP KAUR</td>
              <td>M.Sc., Botany</td>
              <td>0161-28321700, 9915233248</td>
              <td>deepswatch@gmail.com</td>
              <td>
                VPO Koomkalan, Near Chandigarh Road, Kohara, Distt. Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS HARDEEP KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td></td>
              <td>
                Ward No. 12, Near Deep Nursing Home, Teh. Anadpur Sahib, Ropar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. SUKHDEV SINGH KAHLON</td>
              <td>M.Sc. Physics/1981-1983</td>
              <td>0161-2446868, 2424433, 24</td>
              <td>sukhdevkahlon@yahoo.com</td>
              <td>Vill. Jalala, P.O. Mukerian, Distt. Hoshiarpur</td>
            </tr>
            <tr>
              <td style="width: 20%">DR BALDEV SINGH</td>
              <td></td>
              <td>2282677, 2285548</td>
              <td></td>
              <td>41, Phase-I, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR GURPREET KAUR</td>
              <td>Ph.D. Botany</td>
              <td>2302810</td>
              <td>gurpreetahuja15@yahoo.com</td>
              <td>
                Deptt. Of Botany, Pbi. Uni. Patiala/105, Ajit Nagar, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARDIP SINGH</td>
              <td>,,</td>
              <td>9888845119</td>
              <td></td>
              <td>V.P.O., Kularan, Teh. Samana, Distt. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SALIL KAPOOR</td>
              <td>LL.B/1978-1981</td>
              <td>011-23311355, 09818394449</td>
              <td></td>
              <td>4, Central Lane (G.F), Sengali Market, New Delhi-100001</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. RAJINDER KAUR</td>
              <td>M.Com., Ph.D.</td>
              <td>2283771, 3046209</td>
              <td>rajinderg@yahoo.com</td>
              <td>
                Commerce Deptt., Punjabi University, Patiala/ 213, Urban Estate,
                Phase-I, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">PROF. BINDU GARG</td>
              <td>M.Sc., M.Phil</td>
              <td>0164-2270154, 2214555, 98</td>
              <td>sk7065@gmail.com</td>
              <td>DAV College Bathinda/A-21, Thermal Colony, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. PARMOD SINGLA</td>
              <td>M. Sc.</td>
              <td>28742472, 9871672955</td>
              <td>parmod.niscair@gmail.com</td>
              <td>TRSA-54, NPL-Colony, New Rajinder Nagar, New Delhi-110060</td>
            </tr>
            <tr>
              <td style="width: 20%">MS PRIYANKA GARG</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>priyankagarg860@gmail.com</td>
              <td>
                Shri Ganesh Cement Store, 90 Feet Narwana Road, Patran, Distt.
                Patiala M.No. 75894-68937
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. HARPREET SINGH BINDRA</td>
              <td>Hon's School in Eco/1978-1980</td>
              <td></td>
              <td>hbindra662@aol.com</td>
              <td># 8213, Bambridge CT. Pasadena, MD 21122, U.S.A.</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BHUPINDER SINGH</td>
              <td>M.A. Pol. Sci., LL.B/1986-1988</td>
              <td>01672-272345, 98147-16845</td>
              <td></td>
              <td>
                C/O. Randhawa Transport, Sangrur Road, Bhawanigarh, Distt.
                Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS PAWANDEEP KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>kaurpawan987@gmail.com</td>
              <td>
                VPO Tibba, Distt. Kapurthala, Teh. Sultanpur Lodhi M.No.
                95175-52353
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH SURINDER SINGLA</td>
              <td>M.A Eco/1963-1965</td>
              <td>2740761, 2741286, 2749147</td>
              <td>surindersingla_fm@yahoo.com</td>
              <td></td>
            </tr>
            <tr>
              <td style="width: 20%">MRS JASWANT KAUR ARORA</td>
              <td></td>
              <td>0172-2273233 0160-264635</td>
              <td></td>
              <td>2357, Sector 71, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. PARDEEP K. VERMA</td>
              <td>M.Sc Human Biology/1981-1983</td>
              <td>5001422</td>
              <td></td>
              <td># 48/32-A, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ABHISHEK JASWAL</td>
              <td>MBA</td>
              <td>01976-263431, 9815287173</td>
              <td>jaswal_abhi@yahoo.com</td>
              <td>
                Vill. Bihri, P.O. Rajpur Jaswan, Teh. AMB, Dist. UNA, (H.P)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH RAJESH KUMAR</td>
              <td>M.Phil</td>
              <td>9878950523</td>
              <td>socab0210@gmail.com</td>
              <td>103, Punjabi Bagh, Near Sanjeevani Nursing Home, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. GARIMA BATRA</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td></td>
              <td>
                #85, Palika Vihar, Ambala City, Haryana (Tel. No. 0171-2445050)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. A.K. SIKRI</td>
              <td></td>
              <td>2282133, 3046163</td>
              <td>gsikri@yahoo.co.in</td>
              <td>Dept. Of Physics, P.U.P./377, U.E., Phase-I, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS PUJAN</td>
              <td>MCA/2000-2003</td>
              <td>9810615008</td>
              <td>pjetly@in.safenet_inc.com</td>
              <td>1240 A, Sec. 9, Karnal, Haryana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. JATINDER SINGH</td>
              <td>M.A. (Def)</td>
              <td></td>
              <td>jatindercylcoach9@yahoo.com</td>
              <td>
                #38, Virk House, Vill. Sheakhpura, Patiala (M.No. 93162-97606)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH VISHAL GOYAL</td>
              <td>M.C.A/1997-2000</td>
              <td>01632-223701</td>
              <td>goyal_vishal@yahoo.com.sg</td>
              <td>
                Deppt. Of Comp. Sci., Pbi. Uni. PTA/Peeran Wala Mohalla,
                Ferozepur City
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. ALANKAR SINGH</td>
              <td>M.A. (Music Vocal)1995-1997</td>
              <td></td>
              <td>dralankarsingh@gmail.com</td>
              <td>#4182, Urban Estate-2, Patiala M.No. 98141-40209</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. PAWANPREET KAUR</td>
              <td>M.Phil (Linguistics)/2011-2012</td>
              <td></td>
              <td>preetpawankaur87@gmail.com</td>
              <td>
                #395, W.No. 1, Kailpur Road, Near PSEB, Mullanpur M.No.
                94637-29421
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. GURINDERJIT SINGH</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td>grgurna@gmail.com</td>
              <td>Shiv Mandir Road Hira Metial Nabha M.No. 96460-04829</td>
            </tr>
            <tr>
              <td style="width: 20%">MR CHANDER PARKASH</td>
              <td>1986-1991</td>
              <td>2212114, 2212110</td>
              <td></td>
              <td>
                Sr. Staff Correspondent, 2-D, Passi Road, Pta., House No. 2006,
                Birla Mill Road, Bathinda
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR MOHIT SHARMA</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td></td>
              <td>VPO Nangal K............ Distt. Una (HP)</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS SHIKHA BANSAL</td>
              <td>LL.B/2002-2005</td>
              <td>0164-5007360, 9855517360</td>
              <td></td>
              <td>9257, Pujan Wala Mohalla, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SH SUKHWINDER SINGH</td>
              <td>M.A., Pbi./1985-1987</td>
              <td>01676-242253, 94171-33963</td>
              <td></td>
              <td>V+P.O. Janal, Teh. Sunam, Dist. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH HEERA LAL</td>
              <td>MBA/PUSBS</td>
              <td>0186-2277545</td>
              <td>heeralal09@yahoo.co.in</td>
              <td>
                Vill. Basau Barwan, PO. Bamial, Teh. Pathankot, Dist. Gurdaspur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. SHAILLY GARG</td>
              <td>M. Sc., B.Ed</td>
              <td>0172-4624418, 9872700021</td>
              <td>accord_chd@yahoo.com</td>
              <td># 1463, Sec-44B, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. IFTIKAAR ALI KHAN</td>
              <td>Ph.D (Sports Science)/2015-till continue</td>
              <td></td>
              <td>ikphysio@gmail.com</td>
              <td>B-10, Punjabi University, Campus M.No. 98724-02091</td>
            </tr>
            <tr>
              <td style="width: 20%">MS MAHENDER KUMAR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>mahi26091994@gmail.com</td>
              <td>
                Vill. Bahod, PO Bassi, Teh. Chachiot, Distt. Mandi (HP) M.No.
                98052-19533
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS NAVKIRANJIT KAUR DHALI</td>
              <td>M.Com1993-1995</td>
              <td>9872842461</td>
              <td></td>
              <td>3050, Phase-II, U.E., Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH VIKRANT SAINI</td>
              <td></td>
              <td>01875-255645, 9814850889</td>
              <td>ginnyvik_saini@yahoo.co.in</td>
              <td>V.P.O. Taragarh (Old), Dist. Gurdaspur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. AMARJIT SINGH TANDA</td>
              <td>M.Sc. Astronomy &amp; Space Physics/1980-1982</td>
              <td>2664639, 2776056, 2703038</td>
              <td>astanda@hub.nic.in</td>
              <td>EDP Manager, SCO 28-31, Sector 17A, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SH DAMPREET WALIA</td>
              <td>LL.B</td>
              <td>2281164, 9915247403</td>
              <td>dampreetwalia@yahoo.co.in</td>
              <td>
                37, Urban Estate, Near Radio Station Road, Deelwal Colony,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH AJAIB SINGH CHATHA</td>
              <td>LL.B/1978-1981</td>
              <td>98729-83845</td>
              <td>ajaib.chatha@gmail</td>
              <td>Canada</td>
            </tr>
            <tr>
              <td style="width: 20%">MS RUPINDER KAUR</td>
              <td>MBA/PUSBS</td>
              <td>9878198556</td>
              <td>Roma_Rupi@yahoo.co.in</td>
              <td>
                Mandeep Niwas, H.No. 281, St. No. 18, Guru Nanak Nagar, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. RAMANJIT KAUR</td>
              <td>M.Sc. (Sports Science)/2014-2016</td>
              <td></td>
              <td>ramansaini89@yahoo.com</td>
              <td>
                #342,Water Wax, Ward No. 131, Civil Hospital Road, Mansa M.No.
                88723-50300
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH JYOTI PARKASH</td>
              <td>MBA/PUSBS</td>
              <td>01634-224543</td>
              <td>jyoti_3b2@yahoo.co.in</td>
              <td>485, St. No. 5, Sunder Nagri, Abohar-152116</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. NISHINDER KAUR</td>
              <td>M. Sc., M.Phil, B.Ed</td>
              <td>2200478, 8146611001</td>
              <td>nishinderkaur@yahoo.in</td>
              <td>Principal, GGSSS O.P.L. Patiala/#-56, Hira Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR SHIVAM VIKHANA</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>shivamvikhana143@gmail.com</td>
              <td>
                #1658, Phirni Road, Malkhana Mohalla, St. No. 5, Fazilka M.No.
                75893-24591
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. RAJESH MISHRA</td>
              <td>MFC/1996-1998</td>
              <td>9316259919</td>
              <td>rajmish25@rediffmail.com</td>
              <td>H.No. 77-E, Professor Colony, Yamuna Nagar, Haryana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH SANJEEV KUMAR</td>
              <td>MBA/PUSBS</td>
              <td>0161-2846680, 9464365264</td>
              <td>sanjeev65264@yahoo.co.in</td>
              <td>
                B-1/640, Railway Road, Sahnewal, VPO Sahnewal, Dist. Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">M/S ANIT KAUR</td>
              <td>M.Sc/ Zoology</td>
              <td>01632-245916</td>
              <td></td>
              <td>59, St.No. 7, Near Meat Market, Ferozpur Cantt</td>
            </tr>
            <tr>
              <td style="width: 20%">DR UPASANA SHARMA</td>
              <td></td>
              <td>9815703437</td>
              <td>agrim_sharma@yahoo.com</td>
              <td>
                Deptt. Of Statistics, Pbi. Uni. Patiala /H. No. 1621, Sec. 49 B,
                Pushpac Complex, Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS ANUREET BHALLA</td>
              <td>M.Com/1994-1996</td>
              <td>0172-2224555, 9815322455</td>
              <td></td>
              <td>3419, Sector-71, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">SH RANBIR SINGH</td>
              <td>M.A/ Defence Studies</td>
              <td>01676-261035, 9417466108</td>
              <td></td>
              <td>
                801 Tolly RD # 3 Modesto C.A. 95350, 001-209-576-8517/Dashmesh
                Farm Chhajli Kothi, The. Sunam, Dist. Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH VISHESH GOYAL</td>
              <td>MBA/PUSBS</td>
              <td>9464111324, 9417170324</td>
              <td>vishesh111@yahoo.co.in</td>
              <td>Sidhu Nagri, St. No. 4, Second Crossing, Abohar</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RAJINDER SOOD</td>
              <td>M. Sc.</td>
              <td>2212262, 9646123243</td>
              <td>rsood.mgbank@gmail.com</td>
              <td>J-39, Majithia Enclave, Near 24 No. Fatak, Patiala 147005</td>
            </tr>
            <tr>
              <td style="width: 20%">SH JAGDISH KUMAR</td>
              <td>M.A, History/1996-1998</td>
              <td>94175-06071, 01633-260229</td>
              <td>jagdish_rajsingla@yahoo.co.in</td>
              <td>
                Guru Nanak College, Muktsar/ V.P.O. Haryau Khurd, Vill. Patran,
                Distt. Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH AKSHAY RISHI</td>
              <td>MCA</td>
              <td>9873266420</td>
              <td>akshays_nest@yahoo.com</td>
              <td>SU-98, Pitampura, New Delhi</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. JASPREET KAUR</td>
              <td>Ph. D.</td>
              <td>0172-6665306, 9855197302</td>
              <td>jaspreet2112@yahoo.co.in</td>
              <td>
                H. No. 23, Trust Colony, Dalhousie Road, Pathankot, Punjab
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. AVTAR SINGH</td>
              <td>M.Sc. Physics/1981-1983</td>
              <td>0172-22681, 2770226, 9814</td>
              <td></td>
              <td># 4582-A,MIG(S), Sector 70, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">MS NIDHI BHARGAVA</td>
              <td>,,</td>
              <td>9417447057, 01882-250084</td>
              <td>techno_nidz@yahoomail.com</td>
              <td>663, Model Town, Hoshiarpur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ROHIT BANSAL</td>
              <td>MBA</td>
              <td>0164-2255860, 9417023806</td>
              <td>bansal.electrical@gmail.com</td>
              <td>4918, 4/B, Nai Basti, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">DR GURSHARN SINGH SANDHU</td>
              <td>Ph.D./Philosophy</td>
              <td>3208034, 3046224</td>
              <td>drgssandhu2001@ yahoo.com</td>
              <td>B-122, Azad Nagar, Sirhind Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. GURMUKH SINGH</td>
              <td>Ph.D Pbi/1995-2001</td>
              <td>(R) 01628-259050</td>
              <td></td>
              <td>Pbi. Deptt., Pbi. Uni. PTA.</td>
            </tr>
            <tr>
              <td style="width: 20%">MS AARTI DHINGRA</td>
              <td>MCA</td>
              <td>2225550</td>
              <td>aartidhingra5@yahoo.co.in</td>
              <td>30, Power Colony-1, Model Town, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS NUPUR SOOD</td>
              <td>Zoology</td>
              <td>9888124914</td>
              <td>nupur_sood_512@yahoo.co.in</td>
              <td>24, Shekhpura, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH JONES GUPTA</td>
              <td>MBA/PUSBS</td>
              <td></td>
              <td></td>
              <td>St. No. 5, Hanjra Marg, Ram Nagar, Indra Basti, Sonam</td>
            </tr>
            <tr>
              <td style="width: 20%">DR V.K. SINGH</td>
              <td>Ph.D./Zoology</td>
              <td>9417458787, 01874-241057</td>
              <td>vksingh136@gmail.com</td>
              <td>Opp. Guru Nanak Park, Jail Road, Gurdaspur</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. NIRMAL SINGH SOHI</td>
              <td>M. Sc., B.Ed</td>
              <td>01672-241941, 9779327711</td>
              <td>nirmalsohi1958@gmail.com</td>
              <td>
                House No. 75, Street No. 8, Guru Nanak Enclave, Patiala/Behind
                Shehnai Palace, Haripura Road, Shivam Colony, Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">PROF CHANDAN SINGH</td>
              <td></td>
              <td>(R) 2283209 (O) 2282423,</td>
              <td></td>
              <td>
                Prof. , Computer Science And Engineering Dept., Punjabi
                University, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR JAGBIR SINGH</td>
              <td>Ph.D/Zoology</td>
              <td>2282402, 9814067481</td>
              <td>prjagbir2005@gmail.com</td>
              <td>
                Deptt. Of Zoology, Punjabi University, Patiala/Gurjas Home,
                Sheranwala Gate, Kapurthla
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS NEELIMA R KUMAR</td>
              <td>Ph.D./Zoology</td>
              <td>0172-2725444,2534217, 931</td>
              <td>neelimark@yahoo.co.in</td>
              <td>
                Dept. Of Zoology, Panjab University, Chandigarh/1170, Sec. 15 B,
                Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS GURNOOR KAUR</td>
              <td>,,</td>
              <td>2212800, 9198158-20524</td>
              <td>ginnu23@rediffmail.com</td>
              <td>H.No. 23, Gian Colony, Near 22 No. Phatak, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH SATWANT SINGH</td>
              <td>,,</td>
              <td>01628-233756, 9888465199</td>
              <td>jpboxer_7@yahoo.co.in</td>
              <td>
                Vill. Daudpur, P.O. Chakh Maffi, Teh. Samrala, Distt. Ludihana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH SUKHPAL SINGH</td>
              <td></td>
              <td>01633-261813</td>
              <td>sukhpal78@yahoo.co.in</td>
              <td>H.NO. 1077, Kacha Thande Wala Road, Bawa Colony, Muktsar</td>
            </tr>
            <tr>
              <td style="width: 20%">MS PURNIMA GARG</td>
              <td>B.Tech</td>
              <td>212236</td>
              <td></td>
              <td>6457/1, Lahori Gate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ARSHDEEP SINGH</td>
              <td>MBA/PUSBS</td>
              <td>9463910148</td>
              <td>arsh_nijjer@yahoo.co.in</td>
              <td>115, Seel Road, Bahadurgar, Dist. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURDIAL SINGH</td>
              <td>MBA/PUSBS</td>
              <td>01859-316649</td>
              <td>kehra01@yahoo.co.in</td>
              <td>
                VPO. &amp; Teh. Khadoor Sahib, Patti Lamian Di, Dist. Tarntaran
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH TEJINDER PAL SINGH</td>
              <td>M.Sc. Physics</td>
              <td>2744618, 2753618, 9855487</td>
              <td>singh-tp71@yahoo.com</td>
              <td>618 PEC Campus, Sec-12, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. PUNEET DHILLON</td>
              <td>M. Sc.</td>
              <td>01628-262102, 9988362555</td>
              <td>puneet_dhillon9@yahoo.com</td>
              <td>Masand Mohalla, Samrala, Dist Ludhiana, Punjab</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. HARJIT SINGH</td>
              <td></td>
              <td>98551-790780,01676-256299</td>
              <td>hjit@live.com</td>
              <td>Jakhal Road,Tibba Basti,Lal Chand Gali,Patran(Pb.)</td>
            </tr>
            <tr>
              <td style="width: 20%">SH KAMALJIT SINGH</td>
              <td>B.Ed (c.c.), Pbi. Uni. Patiala</td>
              <td>9888397127</td>
              <td></td>
              <td>H.No 1241 Moh- Dhoorkot, VPO. Shahkot, Distt. Jalandhar</td>
            </tr>
            <tr>
              <td style="width: 20%">DR PRAVEEN P. BALGIR</td>
              <td>Ph.D/,,</td>
              <td>2281941, 3046263</td>
              <td>balgirbt@yahoo.com</td>
              <td>Deptt. Of Biotechnology, P.U.P./C-36, Uni. Campus, P.U.P</td>
            </tr>
            <tr>
              <td style="width: 20%">MS MINAKSHI MITTAL</td>
              <td>M.Sc. MFT./Biotechnology</td>
              <td>01764-242144, 01764-24254</td>
              <td>minakshimittal@rediffmail.com</td>
              <td>Mittal Medical Hall, Jakhal Road, Patran, Dist. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR MUNISH PURI</td>
              <td>Ph.D./Biotechnology</td>
              <td>2283073</td>
              <td>mpuri@pbi.ac.in</td>
              <td>
                Deptt. Of Biotechnology, P.U.P./ 794, Urban Estate, Phase I,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. LAXMI NARAIN</td>
              <td>Ph.D Pbi</td>
              <td>2283695, 2215951</td>
              <td></td>
              <td>M.I.G. 481, Phase-I, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH MOHD. IMRAN</td>
              <td>PGDCA</td>
              <td>01675-260567</td>
              <td></td>
              <td>Chatta Street 1, Sadar Bazar, Malarkotla, Dist. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. SUKHWINDER SINGH TIWA</td>
              <td>M.A(Pol.Sci),ph.d</td>
              <td>0175-2286412</td>
              <td>sstiwanapbiuniv@yahoo.com</td>
              <td>1027,Urban Estate Phase II Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS SHAHNAZ PARVEEN</td>
              <td>M.Sc., Botany</td>
              <td>9463793107</td>
              <td>shahnazcr@gmail.com</td>
              <td>
                Vill., Binjoli Khurd, PO Haider Nagar, The. Malerkotla, Distt.
                Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR SUNITA DHIR</td>
              <td>Ph.D/1980</td>
              <td>3094484, 3046342, 2046342</td>
              <td>dhir.sunita@yahoo.com</td>
              <td>
                Deptt. Of Theatre &amp; Television, Pbi. Uni. Patiala/342, Phase
                I, Urban Estate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR T.A. SARMA</td>
              <td>
                Punjabi Praveshika, Certificate course in German/1976, Ph.D
              </td>
              <td>0866-2452132, 9490502978</td>
              <td>ta.sarma@gmail.com</td>
              <td>
                Jaiyalakshmi, Nilayam, Door No. 48-7-22, ESI, Hospital Road,
                Gunadala, Vijaywada-4, Andhra Predesh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH VIKRAM SINGH RATHOR</td>
              <td>M.Sc/ Zoology</td>
              <td>2223746, 9417992215</td>
              <td>rathor_vikram@rediffmail.com</td>
              <td>H-1, Railway, Hospital Colony, DMW, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI B.D. BHARDWAJ</td>
              <td>M.A./DPMAIR/1988-1993</td>
              <td>677684, 603175-76</td>
              <td></td>
              <td>
                Asst. Manager, M/S Vardhman Spg Gen. Mills Ltd, Chandigarh Road,
                Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. MANJT SINGH</td>
              <td>M.Com/2000-2002</td>
              <td>01763-503998, 9815521898,</td>
              <td>manjitsaggi@yahoo.co.in</td>
              <td>
                Mohalla Behlolpuri, Bassi Pathana, Distt. Fathegarh Sahib,
                Punjab
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH ZAHOOR AHMED</td>
              <td></td>
              <td>01675-250440, 9417741940</td>
              <td></td>
              <td>
                Moh. Nusrat Khani, Back Side Jama Masjid , W/13-365, Malerkotla,
                Dist. Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. JAGDEEP SINGH</td>
              <td>M. Sc., M.Phil, B.Ed</td>
              <td>0164-2280086, 9417776409</td>
              <td>cmtjagdeepsingh@gmail.com</td>
              <td>V.P.O - Naruana, Badal Road, Bathinda, Punjab</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. GURMEET KAUR SHERGIL</td>
              <td>M.Phil Education/1981-1986</td>
              <td>2282694, 2206354</td>
              <td></td>
              <td># 48-C, Urban Estate, Phase-III, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH PREM PRAKASH SINGH</td>
              <td>MBA</td>
              <td>01976-242027</td>
              <td></td>
              <td>VPO Badoh, Teh. Ambala, Dist. Una (H.P)</td>
            </tr>
            <tr>
              <td style="width: 20%">MS KULDEEP KAUR</td>
              <td></td>
              <td>01632-254317</td>
              <td></td>
              <td>
                Vill. Saranwali, PO. Wara Bhai, Teh. &amp; Dist. Ferozepur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. GEETA MAHAJAN</td>
              <td>M.Sc, Ph.D.</td>
              <td>01902-260205, 9418011104</td>
              <td>geetamah@gmail.com</td>
              <td>
                Cambridge International School, NH-21, Mohal, Kullu-175126,
                H.P/C/O Arun K. Mahajan, House No. 2, Garden Colony, Mission
                Road, Pathankot-145001
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH PARAMJIT SINGH</td>
              <td>P.B.D &amp; M.Sc Physics</td>
              <td>9888372468, 0164-2251340</td>
              <td>ldh_it_2009@yahoo.in</td>
              <td>H. No. 366, Patel Nagar, Bibi Wala Road, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SH SUKHWINDER SINGH TIWAN</td>
              <td>M.Sc</td>
              <td>9915309757, 01675-281817</td>
              <td></td>
              <td>VPO Lassoi, The. Malerkotla, Distt. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. INDERJIT KAUR BHINDE</td>
              <td>M.Phil</td>
              <td>905-676-9642,905-677-1919</td>
              <td>inderjitbhinder@yahoo.co.in</td>
              <td>38 VISION WAY BRAMPTON, CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI TIRATH SINGH</td>
              <td>M.A. (Pol.Sci.), LL.M.</td>
              <td>(R) 0175-2360325</td>
              <td></td>
              <td>84, Upkar Nagar, Patiala.</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF ARVINDER SINGH CHAWL</td>
              <td>Ph.D</td>
              <td>2282074,3046205, 2281512</td>
              <td>aschawla2000@yahoo.com</td>
              <td>
                M.B.A. Deptt., Punjabi University, Patiala/4207, Phase II, Urban
                Estate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH VIKRANT THAKUR</td>
              <td>MBA/PUSBS</td>
              <td>01975-203482</td>
              <td>vikrant19rana@gmail.com</td>
              <td>Vill. Chanpur, PO. Palkwah, Teh. Horoli, Dist. Uno, H.P.</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. A. S. JOSHI</td>
              <td>M. Sc.</td>
              <td>0755-2674225, 0755-267435</td>
              <td>ajsjoshi@gmail.com</td>
              <td>
                M. P. Forest Deptt., Satpuda Bhawan, Bhopal (M. P.)- 462004
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH ANKUR JAIN</td>
              <td>MBA/PUSBS</td>
              <td>2254408</td>
              <td>usbs_ankurjain@yahoo.co.in</td>
              <td>4634, Near Fire Station, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. DALVIR KAUR</td>
              <td>M. Sc.</td>
              <td>01881-244276, 9872288570</td>
              <td>dalvircyto@gmail.com</td>
              <td>
                C/O Dr. V. K. Singhal, Department Of Botany, Punjabi University,
                Patiala/Vill. –Kheri, P.O.-Purkhali Distt-Ropar, Punjab 140001
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RAMINDER PAL SINGH SI</td>
              <td>LL.B</td>
              <td>416-301-0304</td>
              <td>sidhulawoffice@hotmail.com</td>
              <td>8-60 COTRELLE BLVD. BRAMPTON L6S-OE1 CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ANUPREET SINGH TIWANA</td>
              <td>M.Sc./Geography</td>
              <td>01763-232247</td>
              <td>anutiwana@hotmail.com</td>
              <td>
                20, Professor Colony, Behind Sheesh Mahal, Sular Road, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH AMARPREET SINGH</td>
              <td>,,</td>
              <td>01882-244357, 9888187917</td>
              <td>amarpreet_83@rediffmail.com</td>
              <td>V.P.O. Soos, Teh. &amp; Distt. Hoshiarpur</td>
            </tr>
            <tr>
              <td style="width: 20%">MS ARPINDER KAUR</td>
              <td>MBA</td>
              <td>0164-2210592, 9888447961</td>
              <td>arpinderkaur@gmail.com</td>
              <td>17404, St. No. 3, Pukhraj Colony, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARWINDER SINGH</td>
              <td>MBA/PUSBS</td>
              <td>94630-773389, 9888657592</td>
              <td>harsh_choudry@yahoo.co.in</td>
              <td>Qt. No. C-116, Thermal Colony, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">DR D.D.S. SANDHU</td>
              <td>Ph.d, Defence Studies</td>
              <td>01744-238021, 238039, 238</td>
              <td>vc.kuk@rediffmail.com</td>
              <td>390, Char Chaman, Karnal, Haryana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. JARNAIL SINGH</td>
              <td>M.A</td>
              <td>9478260911</td>
              <td></td>
              <td>E-5, Pbi. Uni. Campus, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RAJNISH GARG</td>
              <td>M. Sc.</td>
              <td>01651-225666, 9463022066</td>
              <td>rajnishbot81@rediffmail.com</td>
              <td>
                SBS Colony St. No. -1, # 65, Near Bus Stand Rampura Phul-151103
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH SARBJIT SINGH</td>
              <td>LL.M</td>
              <td>2285862</td>
              <td></td>
              <td>157, Urban Estate, Phase II, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH REET MP SINGH</td>
              <td>Bachelor of Education</td>
              <td>2284877, 9915077877</td>
              <td>reet@reet.in</td>
              <td>Machhike, 303, Urban Estate-1, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. DIVJOT KAUR SANDHU</td>
              <td>M. Sc., B.Ed</td>
              <td>01872-258048, 9463542429</td>
              <td>shahsandhu@gmail.com</td>
              <td>
                W/O Mr. Baljinder Singh Sandhu, Village Kot Yog Raj, P. O. Kala
                Bala, Distt. Gurdasspur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH NACHHATAR SINGH SIDHU</td>
              <td>M.A. Eco/1988-1991</td>
              <td>2280716, 2285355, 98141-9</td>
              <td></td>
              <td>217, Urban Estate, Phase-III, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS GEETA BHATIA</td>
              <td>M.Com1997-1999</td>
              <td>0172-2574938, 9872216370</td>
              <td></td>
              <td>443, Sec.-11, Panchkula</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. SHAMSHER SINGH</td>
              <td>Ph.D./Pbi./1987-1989</td>
              <td>9888563260, 01764-220093</td>
              <td></td>
              <td>H. No. 6, Street No. 2, Gurmat Enclave, Sular, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS KHUSHMEET KAUR</td>
              <td>MBA</td>
              <td>9814721525</td>
              <td></td>
              <td>
                Vill. Chugha, P.O. Sharin Wala Brar, Teh. Jalalabad, Dist.
                Ferozpur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH PARDEEP GOYAL</td>
              <td>B.Com.</td>
              <td>01765-224422, 9417528157</td>
              <td>pardeepgoyal84@yahoo.co.in</td>
              <td>Bansan Street, Madian Wala Vehra, Near Appo Aaap, Nabha</td>
            </tr>
            <tr>
              <td style="width: 20%">SH KULBIR SINGH WALIA</td>
              <td>B.Tech</td>
              <td>0164-221073</td>
              <td>kswalia_25@yahoo.com</td>
              <td>22606, St. No. 16, Bhaju Road, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BHUPINDER SINGH</td>
              <td>M.A. His./1995-1997</td>
              <td>94173-29861</td>
              <td></td>
              <td>135/A. St. No. 2, Dashmesh Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH RAKESH THAKUR</td>
              <td>LL.B</td>
              <td>3203629</td>
              <td></td>
              <td>
                B-26/56, Arian St., T.B. Hospital Road, Lahori Gate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH RANJIT SINGH AULAKH</td>
              <td>M.A. His./1995-1997</td>
              <td>01675-273312, 01675-24852</td>
              <td></td>
              <td>V.P.O. Kup Kalan, Teh. Maler Kotla, Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ASIF AHMED</td>
              <td>M.A/Defence Studies, PGDJMC</td>
              <td>01675-250699, 9814350606</td>
              <td>asif_ahmed081@yahoo.com</td>
              <td>
                Diwan Khana Road, Near Old Civil Courts, H.No. B 17/32, Bakulan
                Street. Malerkotla
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH PARVEEN PAHUJA</td>
              <td>,,</td>
              <td>01762-227263</td>
              <td>p.pahuja@hotmail.com</td>
              <td>1648, Rajpura Town, Dist. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH SANDEEP KUMAR SINGLA</td>
              <td>MBA/PUSBS</td>
              <td>0164-2264518, 9464152952</td>
              <td>ssandeep89@yahoo.com</td>
              <td>Dasmesh Nagar, Gali No. 3, Guniana Mandi, Dist. Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">M/S JASPREET KAUR</td>
              <td>Zoology</td>
              <td>01639-252023, 9876387880</td>
              <td></td>
              <td>B-XII/68, Harindra Nagar, Near Gurudwara Sahib, Faridkot</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. SANJEEV KAUR THIND</td>
              <td>M. Sc.,Ph.D.</td>
              <td>2451862, 8968786700</td>
              <td>skthind_105@yahoo.com</td>
              <td>
                Department Of Botany, Punjab Agriculture University, Ludhiana
                141004/H. No. 4042, Gurudwara Road, Sunam, Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS SANTOSH BALA</td>
              <td>M.Sc.</td>
              <td>01970258134, 9805204082</td>
              <td>santosh_gamo@rediffmail.com</td>
              <td>
                D/O Kartar Singh, V.P.O. Sakri, Teh. Dehra Gopipur, Distt.
                Kangra, H.P.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS HARINDER KAUR SODHI</td>
              <td></td>
              <td>2286818, 304-6476</td>
              <td></td>
              <td>
                Deptt. Of Correspondence Courses, P.U.P./ 4141, Urban Estate,
                Phase II, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. SURINDER SINGH BOLA</td>
              <td>M.Sc./Physics</td>
              <td>011-27863504, 011-2586109</td>
              <td>ss_bola@yahoo.com</td>
              <td>35, Sheetal Apartment, Sec. 14, Rohini, Delhi-85</td>
            </tr>
            <tr>
              <td style="width: 20%">SH SARBJIT RALA</td>
              <td></td>
              <td>01875-259464, 98556-21917</td>
              <td>ralasarbjit@rediffmail.com</td>
              <td>
                Vill. Kothe Sadana, P.O. Jharou, Teh. &amp; Dist. Gurdaspur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. INDERDEEP SINGH MANN</td>
              <td>MBA.</td>
              <td>0175-2304952,9915218395</td>
              <td>inderdeep.mann@gmail.com</td>
              <td>83-C Model Town Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. GURPREET KAUR</td>
              <td>Ph.D, Pbi</td>
              <td>01636-240252</td>
              <td>brar202010@yahoo.com</td>
              <td>
                Distance Education Deptt., Pbi. Uni. Patiala, VPO Rajiana, The.
                Bagha Purana, Distt. Moga
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. RAJDEVINDER SINGH</td>
              <td>M.Phil Pol. Sci., LL.B/1984-1990</td>
              <td>01672-239242, 234133</td>
              <td></td>
              <td># 12A, Ranbir Club, Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. AMANDEEP KAUR</td>
              <td></td>
              <td></td>
              <td>antal22dec@gmail.com</td>
              <td>#393A, Sector 43A, Chandigarh M.No. 95011-17576</td>
            </tr>
            <tr>
              <td style="width: 20%">MS GUSHANDEEP KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>kaurgush0001@gmail.com</td>
              <td>
                VPO Rogla, Tehsil Sunam, Distt. Sangrur (M.No. 98158-58639)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR GURJINDER SINGH (POST</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>gurjindersingh100@yahoo.com</td>
              <td>VPO Ahmad Dhandi, Distt. Firozpur (M.No. 97812-65663)</td>
            </tr>
            <tr>
              <td style="width: 20%">MS SANDEEP KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td></td>
              <td>
                New Abadi Akalgarh, Teh. Raikot, Distt. Ludhiana M.No.
                95018-89646
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS TARANG GUPTA</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td></td>
              <td>
                #67, New Milap Nagar, Ambala City, Haryana (M.No. 98960-17169)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. ASHOK KUMAR</td>
              <td>M.A. (Def.)/2008-2010</td>
              <td></td>
              <td></td>
              <td>
                #98 E, St. N. 5, Partap Nagar, Patiala (M.No. 80546-89367)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. RAJMOHINDER KAUR</td>
              <td>M.Phil, Ph.D. (Linguistics)/2005-2013</td>
              <td></td>
              <td>rajsidhu1983@gmail.com</td>
              <td>
                Sidhu Niwas, Lele Wala Road, Talwandi Sabo, Bathinda M.No.
                88722-00136
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. NAVEEN KUMAR</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td>naveen_m@rediffmail.com</td>
              <td>#47 MIG, Model Town, Phase-1, Bathinda M.No. 94179-40980</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. SUNIL KUMAR</td>
              <td>
                PG Diploma in Health Fitness &amp; Trainer (Sports
                Science)/2015-16
              </td>
              <td></td>
              <td>sunilkamboj92@ymail.com</td>
              <td>
                Vill. Baje Ke, PU Lindi Tehsil Guru Harsahai, Distt. Ferozpur
                M.No. 94172-54196
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. BHAIRVI</td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                #729, HIG, Urban Estate, Phase-I, Patiala (M.No. 95018-90088)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. MONICA BAINS</td>
              <td>M.Sc. (Mathematics)/2005-2007</td>
              <td></td>
              <td></td>
              <td>Jail Road, Arya Nagar, Gurdaspur Tel. No. 01874-220206</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. NIRMAL SINGH</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td>nirmalsin51@gmail.com</td>
              <td>
                VPO. Bahaderpur Teh. Budhlada Distt.Mansa M.No. 94652-63822
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. RUPINDER KAUR</td>
              <td>Ph.D.(Music) persuing/2013</td>
              <td></td>
              <td>musiclove2117@gmail.com</td>
              <td>
                #1983/91, St. No. 8/2, Guru Bobind Singh Nagar, Near Shimlapuri,
                Ludhiana (M.No. 94782-33882
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. NIVEDITA UPPAL</td>
              <td>M.A. (Music Vocal)1987-1989</td>
              <td></td>
              <td>drniveditavocalist@gmail.com</td>
              <td>#5059, Urban Estate-I, Patiala M.No. 98885-15059</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. YASHPAL SHARMA</td>
              <td></td>
              <td></td>
              <td>profyash@gmail.com</td>
              <td>#116, Phase-II, Urban Estate, Patiala (M.No. 82880-05159)</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. ASIF AHMED</td>
              <td>M.A. (Def)/2002-2004</td>
              <td></td>
              <td>asif_ahmed081@yahoo.com</td>
              <td>
                Diwan Khana Road, Near Old Civil Courts, # B 17/22, Bakulan
                Street, Malerkotla (M.No. 98143-50606)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR SUCHA SINGH GILL</td>
              <td>Ph.D. Eco. /1980</td>
              <td>2282857, 9855082857</td>
              <td></td>
              <td>207, URBAN ESTATE, PHASE-1 PATIALA-147002</td>
            </tr>
            <tr>
              <td style="width: 20%">DR MANJEET SINGH (EXPIRED</td>
              <td>M.Sc. Pharmacol, Ph.D./ 1994</td>
              <td>823147, 822461-66, 0188-8</td>
              <td>822461-66 EXT. 6184 (RES.) 823147</td>
              <td>VILL/ MANAK MAJRA, P.O. SOHANA, DISTT. ROPAR, PUNJAB</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF BALKAR SINGH</td>
              <td>M.A. Punjabi and Persian, Ph.D.</td>
              <td>282639, 283009</td>
              <td></td>
              <td>34, Urban Estate - 1, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR DAISY WALIA</td>
              <td>
                M.A. Dance, M.A. Music (Inst.), M.A. Music (vocal), M.A. Hindi,
                Ph.D./1970-1976
              </td>
              <td>306100, 222189</td>
              <td></td>
              <td>2 A, Moti Bagh Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS RAMANJIT KAUR</td>
              <td>M.Sc. Geography/1982-1984</td>
              <td>2286304</td>
              <td></td>
              <td>B-8, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR K.S. SIDHU</td>
              <td>Ph.D. Defence Studies/1970-1972</td>
              <td>218910, 28-2461-5</td>
              <td></td>
              <td>44-B, Passi Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR PRAVEEN SINGHAL</td>
              <td>M.Sc., Ph.D./1970</td>
              <td>214314</td>
              <td></td>
              <td>
                Dean, Deptt. Of Human Biology, Punjabi University, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR S.P. SINGH</td>
              <td>M.Sc., Ph.D./1971</td>
              <td>282270</td>
              <td></td>
              <td>Deptt. Of Human Biology, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR CHAMAN LAL</td>
              <td></td>
              <td>213069</td>
              <td></td>
              <td>C/O Kirpal Kazak</td>
            </tr>
            <tr>
              <td style="width: 20%">DR R.N. MISHRA</td>
              <td>M.Sc. Military Science/1958-1965</td>
              <td>282686, 282461-65</td>
              <td></td>
              <td>2690, Urban Estate, Phase-II, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR CHARANJIT SINGH</td>
              <td></td>
              <td>200135</td>
              <td></td>
              <td>
                Deptt. Of Law, Punjabi University, Patiala. # 93, Raghbir Nagar,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR JASWINDER SINGH</td>
              <td>M.A. Hons, M.Phil, Ph.D./1979</td>
              <td>2220984</td>
              <td></td>
              <td>
                Deptt. Of Punjabi, Punjabi University, Patiala. # 245, Charan
                Bagh, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR SATISH KUMAR VERMA</td>
              <td>M.A. Hons, M.Phil</td>
              <td></td>
              <td></td>
              <td>Deptt. Of Punjabi, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR S.S. DHILLON</td>
              <td></td>
              <td>282951, 283005</td>
              <td></td>
              <td>83, Phase-III, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR BALDEV SINGH MALHI</td>
              <td>M.A., LL.M., Ph.D.</td>
              <td>2286379</td>
              <td></td>
              <td>
                Deptt. Of Law, Punjabi University, Patiala. 4284, Urban
                Estate-II, Patiala.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR PROMILA MEHTA</td>
              <td>M.Phil, Ph.D./1972</td>
              <td>2300786</td>
              <td></td>
              <td>Department Of Human Biology, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR SATBIR KAUR</td>
              <td>M.Phil, Ph.D./1987</td>
              <td>2309884, 2217170</td>
              <td></td>
              <td>Deptt. Of Human Biology, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR HARSURINDER KAUR</td>
              <td>Ph.D./1973-1980</td>
              <td>2354246</td>
              <td></td>
              <td>Deptt. Of Human Biology, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR PUSHPA SINGHAL</td>
              <td>Ph.D./1970</td>
              <td></td>
              <td></td>
              <td>Deptt. Of Human Biology, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR RAJINDER KAUR ROHI</td>
              <td>Ph.D./1979</td>
              <td></td>
              <td></td>
              <td>
                Deptt. Of Religious Studies, Punjabi University, Patiala. 23,
                Raghvir Marg, Patiala.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS ALKA BALI</td>
              <td>M.Pharm./1995</td>
              <td></td>
              <td></td>
              <td>
                Pharmaceutical Sciences And Drug Research, Punjabi University,
                Patiala. TI/1, Sector 25, Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR AJAY SHARMA</td>
              <td>Ph.D.(Pursuing)/1995</td>
              <td></td>
              <td></td>
              <td>
                Pharmaceutical Sciences And Drug Research, Punjabi University,
                Patiala. # 831, Gali No. 4, Gurbax Colony, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR SUNIL GUPTA</td>
              <td>1996</td>
              <td>822461</td>
              <td></td>
              <td>
                Pharmaceutical Sciences And Drug Research, Punjabi University,
                Patiala. # 5/6, Adarsh Colony, Township Rajpura, Distt. Patiala.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SMT RICHA SHRI</td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                Pharmaceutical Sciences And Drug Research, Punjabi University,
                Patiala. # G-2, Sec. 14, Chandigarh.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SMT GURPREET KAUR</td>
              <td></td>
              <td></td>
              <td>kaurgpt@gmail.com</td>
              <td>
                Pharmaceutical Sciences And Drug Research, Punjabi University,
                Patiala. H L 209, Phase-1, Mohali.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR RAMAN KUMAR VERMA</td>
              <td>M.Phil, Ph.D./1979-1984</td>
              <td>822461</td>
              <td>raman_verma58@yahoo.com</td>
              <td>
                Reader, Chemistry Deptt., Punjabi University, Patiala. # H-82,
                Rajpura Colony, Patiala.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR VINAY PARIKH</td>
              <td>Ph.D./1994</td>
              <td></td>
              <td></td>
              <td>
                Phamaceutical Sciences And Drug Research, Punjabi University ,
                Patiala. # 49 A, DDA Flats, Vikrant Enclave, Mayapuri, New Delhi
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS INDIRA BAGGA</td>
              <td>M.Sc.,M.Ed/1970-1972</td>
              <td>2214344, 2217587</td>
              <td></td>
              <td>43, Ranjit Bagh, Near Modi Mandir, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF RANJIT RANIA</td>
              <td>M.A. Hons(Pbi)/1975-1977</td>
              <td>5006634</td>
              <td></td>
              <td>4143, Urban Estate Phase -2, Patiala, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF BARJINDER SINGH TIWA</td>
              <td>M.Phil (Pol.Sci.)</td>
              <td></td>
              <td></td>
              <td>Village And P.O. Tohra, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR SUKHWINDER SINGH</td>
              <td>M.Phil, Ph.D./1979-1988</td>
              <td>220643, 221196</td>
              <td></td>
              <td>Deptt. Of Economics, Pbi. Uni. PTA.</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF GURJIT SINGH MANN</td>
              <td>M.Phil Public Administration/1984-1988</td>
              <td>272354, 220583</td>
              <td></td>
              <td>
                Desh Bhaget College Bardwal (Dhuri), Sangrur/ Patt Chahalan,
                Bhawanigarh, Distt. Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">PROF KAPIL CHOPRA</td>
              <td>M.A. Eco1993-1995</td>
              <td>2353023</td>
              <td></td>
              <td>111, Harinder Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF JATINDER DEV</td>
              <td>
                B.P.Ed., M.Phil (Phy. Edu.), Diploma in Coaching(H/B)/1984-1993
              </td>
              <td>220093</td>
              <td></td>
              <td>Lecturer, Public College, Samana, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR AJAY SETH</td>
              <td>B.A.</td>
              <td>2222101, 2201139</td>
              <td></td>
              <td>Raj Kumar Seth &amp; Sons, The Lower Mall Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF PARMINDER SINGH</td>
              <td>M.Phil Geography, M.A. Socialogy/1980-1990</td>
              <td>2253424, 250753</td>
              <td></td>
              <td>Govt. Barjindra College, Faridkot</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI DEV RAJ BANSAL</td>
              <td>LL.B/1969-1973</td>
              <td>2217110</td>
              <td></td>
              <td>251, Ajit Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR MANOJ KUMAR BANSAL</td>
              <td>B.E. 1979-1983</td>
              <td>2217110</td>
              <td></td>
              <td>251, Ajit Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI HARWINDER SINGH SETH</td>
              <td>M.A. Pub. Adm./1981</td>
              <td>2353240</td>
              <td>mjf_hssethi@yahoo.com</td>
              <td>251, Anand Nagar - A, Tripuri Town, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR JATINDER SINGH BHATIA</td>
              <td>LL.B/1987/M.A. Social work 1989</td>
              <td>01825-260268, 261255</td>
              <td></td>
              <td>
                Asstt. Manager (Welfare), J.C.T. Ltd, Phagwara, Dist.
                Kapurthala/IHMS-109, Thaper Colony, Phagwara-144401
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SMT MANJIT KAUR BHATIA</td>
              <td>M.A. Eco1978-1982</td>
              <td>2219809</td>
              <td></td>
              <td>Qr. No. - 55, Power Colony - II, Near PSEB Sheds, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR PARMINDER SINGH BHATIA</td>
              <td>M.Phil, Ph.D. Eco/19781-985</td>
              <td>2219809, 01763-230247</td>
              <td></td>
              <td>Qr. No. - 55, Power Colony - II, Near PSEB Sheds, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF MANJIT LATA</td>
              <td>M.Com/1973-1980</td>
              <td>2223842, 2220493</td>
              <td></td>
              <td>Govt. Bikram College Of Commerce, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS SONIA JINDAL</td>
              <td>M.Com/1993-1995</td>
              <td>2212935, 2220493</td>
              <td></td>
              <td>
                Govt. Bikram College Of Commerce, Patiala. # 33-G, Model Town,
                Near Dispensery, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SMT INDERJEET KAUR</td>
              <td>M.Com</td>
              <td>2212338, 2221851</td>
              <td></td>
              <td>Village Hassanpur, Opp. Milk Plant, Sirhind Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SMT PARVEEN LATA</td>
              <td>M.Com</td>
              <td>2224620</td>
              <td></td>
              <td>H.No. - 62, Street No. - 3, Desi Mehmandari, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR JAGDEEP SINGH</td>
              <td>M.Com</td>
              <td>220873</td>
              <td></td>
              <td>
                H.No. – W/2,423, Near Dhanetha Hospital, Hira Mahal Colony,
                Nabha, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">PROF SANGEETA HANDA</td>
              <td>M.Phil Eng/1980-1983</td>
              <td></td>
              <td></td>
              <td>9, The Mall, Opp. Polo Ground, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR HARJIT SINGH</td>
              <td>B.Sc, LL.B/1990-1993</td>
              <td>01652-230122, 01672-23409</td>
              <td></td>
              <td>Asstt. Manager, F.C.I., Near Old Park, Mansa</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF HARBANS SINGH TIWANA</td>
              <td>M.Phil Eco/1984-1985</td>
              <td>2303962, 230247</td>
              <td></td>
              <td>33-A, Sarabha Nagar (Grid Road), Bhadson Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR SWINDER SINGH REKHI</td>
              <td>M.A., Ph.D/1988-1994</td>
              <td>0175-2282874, 01675-25301</td>
              <td></td>
              <td>Kothi No. 219, Urban Estate Phase - I, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF DHARMINDER SINGH</td>
              <td>M.Com/1988-1990</td>
              <td>221058, 230247</td>
              <td></td>
              <td>
                Sohaj Villa, Near Sirhind Public School, Hamyunpur, Sirhind,
                Fatehgarh Sahib
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR HARJIT SINGH ATWAL</td>
              <td>LL.B/1980-1986</td>
              <td>2281160, 2282580</td>
              <td></td>
              <td>
                M/S Atwal Filling Station, Urban Estate Phase - II, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">PROF RATTAN SINGH</td>
              <td>M.Phil (Linguistics)/1984-1985</td>
              <td>260696</td>
              <td></td>
              <td>
                Deptt. Of English, Ramgarhia College, Phagwara, Dist. Kapurthala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS ANJU</td>
              <td>M.Com/1989-1991</td>
              <td>699445</td>
              <td></td>
              <td>
                Deptt. Of Commerce, Punjabi University, Patiala/H.No. 290, Sec.
                40 A, Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS RAJINDER KAUR</td>
              <td>M.Com/1994-1996</td>
              <td>2281208</td>
              <td>rajindergb@yahoo.com</td>
              <td>
                Head, Deptt. Of Commerce, Punjabi University, Patiala/213, Urban
                Estate, Phase-1, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">PROF JASMINDEEP KAUR</td>
              <td>M.Com/1990-1997</td>
              <td>222950</td>
              <td></td>
              <td>104, Civil Lines, Patiala,</td>
            </tr>
            <tr>
              <td style="width: 20%">SMT HARGUNJIT KAUR</td>
              <td>M.B.A., Ph.D/1994-1996</td>
              <td>282230</td>
              <td></td>
              <td>4245,Phase - II, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF JASMEET SINGH PASRIC</td>
              <td>M.Com., Ph.D/1976-1978</td>
              <td>2282299</td>
              <td></td>
              <td>Deptt. Of Commerce, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR RAJESH BAGGA</td>
              <td>M.Com., LL.B/1991-1994</td>
              <td>2235926</td>
              <td></td>
              <td>259 - A, Golden Avenue, Phase - II, Jalandhar</td>
            </tr>
            <tr>
              <td style="width: 20%">MS LOVELEEN BAGGA</td>
              <td>M.Com./1991</td>
              <td>258546, 258547</td>
              <td></td>
              <td>259 - A, Golden Avenue, Phase - II, Jalandhar</td>
            </tr>
            <tr>
              <td style="width: 20%">MR JASPAL SINGH</td>
              <td>M.A. Social Work, LL.B/1988-1991</td>
              <td>449498, 494417, 493982</td>
              <td></td>
              <td>
                Distt. Social Securtiy Officer, Social Welfare Complex, Gill
                Road, Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">PROF BHUPINDER SINGH VIRK</td>
              <td>LL.M., Ph.D in progress</td>
              <td>852281245</td>
              <td></td>
              <td>
                Deptt. Of Law, Pbi. Uni. Patiala. 170, Village And P.O.
                Bahadurgarh, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR NEERJA</td>
              <td>M.B.B.S./1985-1991</td>
              <td>2221855</td>
              <td></td>
              <td>251, Ajit Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR NAVJEEVAN GOYAL</td>
              <td>M.B.B.S.</td>
              <td>2221855</td>
              <td></td>
              <td>251, Ajit Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR MINAKSHI BANSAL</td>
              <td>M.B.B.S., M.D./1983-1992</td>
              <td>2217110</td>
              <td>sanjaydr14@yahoo.co.in</td>
              <td>251, Ajit Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR SANJAY BANSAL</td>
              <td>M.B.B.S.,Dipl. Orthopaedics, M.S./1982-1992</td>
              <td>2217110</td>
              <td></td>
              <td>251, Ajit Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF ARVINDER KAUR</td>
              <td>M.A. Eng, M.A. Pbi, M.Phil Anth. Ling/1977-1982</td>
              <td></td>
              <td></td>
              <td>7 - A, Vikas Colony, Opp. Sirhindi Gate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS KANWALJIT HARIKA</td>
              <td>LL.B., M.Phil Pol.Sci./1976-1985</td>
              <td>279588</td>
              <td></td>
              <td>96 - A, New Officer's Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS SATINDER KAUR</td>
              <td>M.A., M.Phil (Hist)/1975-1978</td>
              <td>271481</td>
              <td></td>
              <td>50, Doctor Colony, Bhadson Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS RAJINDER KAUR</td>
              <td>M.A.(Pbi), M.A. (Music), Giani</td>
              <td></td>
              <td></td>
              <td>641, Sector -16 D, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">MR RAJ NARESH SINGH</td>
              <td>P.G. Eng/1984-1986</td>
              <td>2214916, 2215164</td>
              <td></td>
              <td>Bhagat Singh Motor Co., The Mall, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR JAGDEEP SINGH CHOWHAN</td>
              <td>LL.B., M.A., P.G. Diploma, PMIR,/1973-1977</td>
              <td>710110, 714430, 740787, 7</td>
              <td></td>
              <td>H.No. - 412, Sector 22 A, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI HARBIR SINGH BHANWAR</td>
              <td>Bachelor of Journalism/1974-1975</td>
              <td>0161-23231506</td>
              <td></td>
              <td>J-29/100, Bhai Randhir Singh Nagar, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SHER SINGH HIRA</td>
              <td>M.B.A./1980</td>
              <td>27020, 27149</td>
              <td></td>
              <td>Distt. Manager, Punsup, Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">MR RATTAN SINGH CHALIA</td>
              <td>M.Sc.(Physics)/1965-1967</td>
              <td></td>
              <td></td>
              <td>8-9, Sector - 17, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI JAGMEET SINGH BRAR</td>
              <td>Degree in Law/1977-1980</td>
              <td></td>
              <td></td>
              <td>Kothi No. - 49, Sector -8, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI DARBARA SINGH GURU</td>
              <td>M.Sc. (Physics)/1973-1975</td>
              <td>2773969, 2740293, 98156-0</td>
              <td></td>
              <td>Kothi No. - 195, Sector -16, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI KARAN BIR SINGH SIDH</td>
              <td>Bachelor of Engg.</td>
              <td>226161, 226162, 226262</td>
              <td></td>
              <td>2430, Phase - 10, S.A.S. Nagar, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI ARUN GOEL</td>
              <td>M.Sc. (Math)/1981</td>
              <td>440,570,403,100</td>
              <td></td>
              <td>Kothi No. 902, Sector 39-A, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI JAGJIT PURI</td>
              <td>LL.B/1972-1975</td>
              <td>2794792, 98159-68709</td>
              <td></td>
              <td>Sec. Freedom &amp; Fighter, 722, 7 B, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SATINDER PAL SINGH</td>
              <td>M.A. (Eng)/1969-1971</td>
              <td>24,652,582</td>
              <td></td>
              <td>Citco - U.T., Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI JAGDISH KUMAR MITTAL</td>
              <td>M.Sc./1974-1976</td>
              <td>570755, 572580</td>
              <td></td>
              <td>Kothi No. 1045-1046, Phase-IV, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI S.K. AHLUWALIA</td>
              <td>M.A. (Eng), M.A. (Pbi), M.A (Hindi)/1967-1973</td>
              <td>306100, 222189</td>
              <td></td>
              <td>2 A, Moti Bagh Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI GOPAL KRISHAN SINGH</td>
              <td>M.A. (Pol. Sci.)/1976-1978</td>
              <td></td>
              <td></td>
              <td>Asst. Commission (UT) Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS JASWINDER KAUR</td>
              <td>M.Phil (Eng)/1982-1990</td>
              <td></td>
              <td></td>
              <td>23, Bank Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR INDU MALHOTRA</td>
              <td>M.Sc., M.Phil, Ph.D/1983-1991</td>
              <td>34192, 34260</td>
              <td></td>
              <td>Additional Deputy Commissioner, Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI GURLOVELEEN SINGH</td>
              <td>B.A.</td>
              <td>400002, 400153</td>
              <td></td>
              <td>121- Bharat Nagar, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SURESH KUMAR SHARMA</td>
              <td>M.A. (Eco)/1971-1973</td>
              <td></td>
              <td></td>
              <td>
                Commissioner, Municipal Corparation, Ludhiana/2243, Latur Pura,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR HARBHJAN SINGH DEOL</td>
              <td>Ph.D./1982-1985</td>
              <td>73201, 78170</td>
              <td></td>
              <td>
                23-24, New Officer's Colony, Kheri Road, Phase-II, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI BALWINDER SINGH</td>
              <td>M.B.A./1976-1978</td>
              <td>77397</td>
              <td></td>
              <td>H.No. - 1220, Office Apartment, Sector -24, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SARBJIT SINGH DHALIW</td>
              <td>B.J. Degree, Journalism/1980-1981</td>
              <td>812110, 812111</td>
              <td></td>
              <td>Correspondent, English Tribune, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI DILBAG SINGH JOHAL</td>
              <td>LL.B/1987-1990</td>
              <td>9988001790</td>
              <td></td>
              <td>3181, Gurdev Nagar, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI DEVINDER SINGH</td>
              <td>M.A. Hist/1973-1975</td>
              <td>31382</td>
              <td></td>
              <td>D.S.P., Kothi No. 4, Police Line, Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SURPINDERJIT SINGH M</td>
              <td>M.B.A./1988-1990</td>
              <td>32388, 33760</td>
              <td></td>
              <td>
                O.S.D. To A.D.G.P. (Law &amp; Order) Punjab, Sector - 9, Punjab
                Police Head Quarters, Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS SUKHVINDER KHANNA</td>
              <td>M.B.A./1980-1982</td>
              <td>212121, 213520</td>
              <td></td>
              <td>
                Joint Commissioner (Income Tax), C/O Sh. Viswajit Khanna, M.D.,
                P.S.I.D.C., Punjab Udyog Bhawan, 17-D, Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS AMBIKA SHARANJIT KAUR</td>
              <td>M.B.A./1991-1992</td>
              <td></td>
              <td></td>
              <td>
                D.C., Customs &amp; Central Excise, 206, Charan Bagh, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI KASHMIR SINGH GILL</td>
              <td></td>
              <td>8908</td>
              <td></td>
              <td>S.P. (Security), H.Q., Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI MANDEEP SINGH SIDHU</td>
              <td>M.Sc. Geography, M.Phil/1985-1988</td>
              <td>01633-62851, 01672-34306</td>
              <td></td>
              <td>
                C/O The Shelter Dr. Kelar Singh Marg, Near Kotkapura Rd. Muktsar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SURJIT PATAR</td>
              <td>M.A. Pbi/1966-1970</td>
              <td>0161-2552515</td>
              <td></td>
              <td>46-47, Asha Puri, Near Agar Nagar, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI HARCHARAN SINGH BHUL</td>
              <td>LL.B, M.A.P./1985-1988</td>
              <td>22383, 24478</td>
              <td></td>
              <td>S.P., Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS MANJIT DHILLON</td>
              <td>M.A. Eng/1976-1978</td>
              <td>742628, 741958, 740059</td>
              <td></td>
              <td>H.No.- 301, Sector - 9D, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI RAMAN BEHL</td>
              <td>LL.B/1978-1981</td>
              <td>30318, 31118</td>
              <td></td>
              <td>Advocate, President, Municipal Council, Gurdaspur</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI ZORA SINGH THIND</td>
              <td>M.A. Eng</td>
              <td>2228519, 1763-230220</td>
              <td></td>
              <td>S.D.M., Barnala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI DHARAMBIR KALRA</td>
              <td>M.B.A., LL.B/1975-1977</td>
              <td>222623, 225032</td>
              <td></td>
              <td>
                Chief Executive, Chirag Industries, Circular Road, Rajpura Town,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI JAGJIT SINGH BAWA</td>
              <td></td>
              <td></td>
              <td></td>
              <td>Vice President, Municipal Council, Mandi Gobindgarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI DALJIT SINGH SRA</td>
              <td>M.A. Pbi/1971-1975</td>
              <td>28461</td>
              <td></td>
              <td>1107, Sec. 44 B, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS MANREET KAUR POONI</td>
              <td>M.Sc. Biotechnology/1993</td>
              <td>540551, 541588</td>
              <td></td>
              <td>H.No. - 54, Sector - 27 - A, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">COL P.L. LOOMBA</td>
              <td>LL.M./1989</td>
              <td></td>
              <td></td>
              <td>
                69, Officer's Enclave, Near Officers Colony, Patiala Cantt.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI RANDHIR SINGH MANGAT</td>
              <td>B.Tech/1991-1995</td>
              <td>0172-770181</td>
              <td></td>
              <td>H.No. 654, Sector - 16 D, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SARDOOL SINGH SIDHU</td>
              <td>M.A., B.J.M.C./1993-1994</td>
              <td>20458 PP, 31090, 211915</td>
              <td></td>
              <td>Distt.Welfare Officer, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI MOHANJIT SINGH POONI</td>
              <td>M.B.A/1988-1990</td>
              <td>544962, 542182, 542352</td>
              <td></td>
              <td>
                H.No. - 54, Sector - 27 A, Chandigarh/H.No. 33, Sec. 5,
                Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI INDERJIT SINGH CHAHA</td>
              <td>M.A. Eng/1971-1973</td>
              <td>9872910010</td>
              <td></td>
              <td>475, Hira Nagar, PTA.</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SIKANDER SINGH</td>
              <td>M.B.A./1986</td>
              <td></td>
              <td></td>
              <td>
                H.No.- B-1/354, Near Nirankari Bhawan, Kotkapura, Distt.
                Faridkot
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI BIRINDER SINGH</td>
              <td>M.B.A./1975-1977</td>
              <td>2597, 2596</td>
              <td></td>
              <td>
                Chief Manager, Markfed, 60, Phase 3-A, Mohali, (Chandigarh)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR TAJINDERPAL SINGH</td>
              <td>M.Sc. (physics)M.B.A./1975-1980</td>
              <td>2371, 2370</td>
              <td></td>
              <td># 99, W. No. 6, V.P.O. Raikot, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF AJMER SINGH AULAKH</td>
              <td>M.A. Pbi/1963-1965</td>
              <td>20767, 20074</td>
              <td></td>
              <td>Lok Kala Manch, Mansa</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI VINOD KUMAR GOEL</td>
              <td>M.B.A./1978-1980</td>
              <td>0161-461600, 603175-6</td>
              <td></td>
              <td>
                SEL Manufacturing Co. Ltd., 247, Dhandari Khurd, G.T Road,
                Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI JASBIR INDER SINGH D</td>
              <td>B.A.</td>
              <td>305202</td>
              <td></td>
              <td>Ishar Niwas, H.No. - 5131, Arorian Street, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR RAKESH TREHAN</td>
              <td>M.B.B.S./1985-1990</td>
              <td>43407, 44931</td>
              <td></td>
              <td>Trehan Nursing Home, Railway Road, Patti</td>
            </tr>
            <tr>
              <td style="width: 20%">DR RANBIR SINGH SARAO</td>
              <td>M.Phil, Ph.D. Eng</td>
              <td>9878179179</td>
              <td></td>
              <td>42 B, Hira Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI CHARANJIT SINGH WALI</td>
              <td>LL.B./1968-1971</td>
              <td>77372</td>
              <td></td>
              <td>Former M.P., 13 - D, Passey Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SURINDER SINGH BANGA</td>
              <td>M.A. Eng/1971-1974</td>
              <td>211141, 29261</td>
              <td></td>
              <td>
                E.T.O., H.No. - 3799/2, Opp. Mandir Hanuman, Samania Gate,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SANJAY AGNIHOTRI</td>
              <td>LL.B./1987-1990</td>
              <td>2219196</td>
              <td></td>
              <td>Judicial Magistrate, Arya Samaj Chowk, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI JATINDER SINGH TUNG</td>
              <td>M.Sc. Geog/1979-1980</td>
              <td>2903</td>
              <td></td>
              <td>V.P.O. Kakra, Sub Tehsil Bhawanigarh, Distt. Sangrur.</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI JAGBIR SINGH BRAR</td>
              <td>Law Degree/1985-1988</td>
              <td>01633-62299,01637-30100</td>
              <td></td>
              <td>Khalsa School Road, Mukatsar</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SANJEEV GUPTA</td>
              <td>M.B.A./1981-1983</td>
              <td>403719, 644103-5</td>
              <td></td>
              <td>PEE JAY International Ltd, 353, Industrial Area, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI NISHINDERDEEP SINGH</td>
              <td>LL.B./1978-1981</td>
              <td>01762-25808, 22372, 0172-</td>
              <td></td>
              <td>
                Former Deputy Advocate General, 1-J/12, Gobind Colony, Rajpura,
                Dist. Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI AMRIT PAL SINGH</td>
              <td>M.B.A./1990-1992</td>
              <td></td>
              <td></td>
              <td>T - 85, Railway Colony, Dhuri, Dist. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI RAJESH KUMAR</td>
              <td></td>
              <td>567560, 578898</td>
              <td></td>
              <td>H. No. - 1102, Sector - 15, Panchkula, Dist. Haryana</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI HIRDAY PAUL SINGH</td>
              <td>Bachelor of Journalism &amp; Mass comunation/1986-1987</td>
              <td>018948-229</td>
              <td></td>
              <td>
                Editor, S. Sobha Singh Art Gallery, Village &amp; P.O. Andretta,
                Dist. Himachal Perdesh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI RUPINDER SINGH</td>
              <td>M.A. His/1975-1977</td>
              <td>75757</td>
              <td></td>
              <td>8 - B, Model Town, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI AMARJIT SINGH SODHI</td>
              <td>M.A. His. &amp; Pol. Sci./1970</td>
              <td></td>
              <td></td>
              <td>H.No. - 97/5, Guru Nanak Street, Old Sabzi Mandi, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI S.P. BANSAL</td>
              <td>B.Com., LL.B./1978-1981</td>
              <td></td>
              <td></td>
              <td>Max India Ltd, S.C.O. 86-87, Sector - 8C, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI HARJIT SINGH SHERU</td>
              <td>LL.B./1979-1981</td>
              <td></td>
              <td></td>
              <td>23, Raghubir Marg, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI GOBINDER SINGH HARIK</td>
              <td>LL.B./1976-1979</td>
              <td>79588</td>
              <td></td>
              <td>96 - A, New Officer's Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR RAJINDER SINGH ATWAL</td>
              <td>Diploma Ortho1981-1986</td>
              <td>71481</td>
              <td></td>
              <td>50, Doctor Colony, Bhadson Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SATINDER PAL SINGH</td>
              <td>LL.B./1974-1977</td>
              <td></td>
              <td></td>
              <td>19, Nihal Bagh, Opp. Circuit House, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI NIRAJ VATS</td>
              <td>LL.B./1974-1977</td>
              <td>73571, 70020</td>
              <td></td>
              <td>195, Vats Bhawan, Sewak Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI PAWAN KUMAR GARG</td>
              <td>M.A., LL.B./1974-1978</td>
              <td>22491, 2008</td>
              <td></td>
              <td>Advocate, Former President, Municipal Council, Mansa</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS SURJIT KAUR</td>
              <td>M.A. Pol. Sci., B.Ed. &amp; M.Ed/1967-1971</td>
              <td>215191</td>
              <td></td>
              <td>Deputy Director, Employment, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI GURTEJ SINGH GILL</td>
              <td>M.A. Eco. &amp; Sociology/1978-1989</td>
              <td>0172-671866, 260411, 6087</td>
              <td></td>
              <td>
                Joint Director, Deptt. Of Social Welfare, Punjab, 128-129,
                Sector - 34 - A, Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI JAGDISH CHANDER SODH</td>
              <td>LL.B., M.B.A./1974-1979</td>
              <td>62532, 61255</td>
              <td>pgw@rma.sprintrpg.ems.vsnl.net...in</td>
              <td>
                General Manager (L &amp; IR), JCT Ltd, Phagwara, Dist.
                Kapurthala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI RAM PARKASH SINGLA</td>
              <td>M.A. Eco/1981</td>
              <td>747980</td>
              <td></td>
              <td>
                Dy. General Manager, CIGDC, 182/1-2, Industrial Area,
                Chandigarh. # 1022, Sec. 11, Chandigarh.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SANGEET PAL SINGH</td>
              <td>LL.M./1985-1991</td>
              <td>58313</td>
              <td></td>
              <td>
                Judicial Magistrate, Distt. Courts. Hoshiarpur/32-B, Old
                Barandari, Jalandhar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI VINOD KUMAR GOYAL</td>
              <td>LL.M./1981-1986</td>
              <td>220368, 220746</td>
              <td></td>
              <td>
                Civil Judge, Samana, Dist. Patiala/C/O Dr. Ram Dass 38/1,
                Sheranwala Gate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI OM PARKASH KHICHI</td>
              <td>M.B.A./1978-1980</td>
              <td>2908, 2936</td>
              <td></td>
              <td>D.M. P.R.T.C., Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI PARWEEN MITTAL</td>
              <td>M.A. Eng/1973-1975</td>
              <td>76244</td>
              <td></td>
              <td>67 - C, Model Town, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR H.C. MODI</td>
              <td>Doctorate/1972-1982</td>
              <td></td>
              <td></td>
              <td>C/O Madam S.K. Modi Judge Fast Track Court, Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI PARAMJIT SINGH GILL</td>
              <td>M.A. Eco/1974-1979</td>
              <td>223852, 227779</td>
              <td></td>
              <td>
                D.I.G. (I.R.B.), Patiala/4 Taylar Road. Officer Colony,
                Amritsar.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI ASHOK KUMAR SINGLA</td>
              <td>LL.B./1977-1980</td>
              <td>25166</td>
              <td></td>
              <td>Executive Magistrate, D.C. Office, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">MR DALJIT SINGH CHHINA</td>
              <td>LL.B./1977-1980</td>
              <td></td>
              <td></td>
              <td>
                Tehsildar, Agrarian, Ludhiana. # 551, Phase 3 B I, S.A.S. Nagar,
                Mohali.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI BARJINDER SINGH DHIL</td>
              <td>M.A. Pol. Sci./1991</td>
              <td>0164-213932, 214697</td>
              <td></td>
              <td>
                Inspector Vigilance, Bathinda, C/O S.P. Vigilance, Bathinda.
                D.S.P., Sahnewal, Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. GURMEET SINGH</td>
              <td></td>
              <td></td>
              <td></td>
              <td>House No.355, Phase-I, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI ASHOK BANTH</td>
              <td></td>
              <td></td>
              <td></td>
              <td>D.S.P. In Punjab Police At Malout, Dist. Mukatsar</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI JATINDER SINGH</td>
              <td>M.Sc. Geography</td>
              <td>55456</td>
              <td></td>
              <td>Not Available</td>
            </tr>
            <tr>
              <td style="width: 20%">DR CHARAN SINGH GILL</td>
              <td>Ph.D. Pbi/1964-1966</td>
              <td>23223, 30247</td>
              <td></td>
              <td>
                Street No. 1, Professor Colony, Sirhind Mandi, Distt. Fatehgarh
                Sahib.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR S.M. HAIDER ASHRAF</td>
              <td>P.G. Diploma in Pers. Mgt and Ind. Relations/1964</td>
              <td>67866, 61255, 403655</td>
              <td></td>
              <td>
                Asst. General Manager (HRD), Masud Mahal Lal Diggi, Aligarh. JCT
                LTD- G.T. Road, Phagwara, Dist. Kapurthala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI DINESH KOCHHAR</td>
              <td>B.E. /1991</td>
              <td>01824-268635, 260620</td>
              <td></td>
              <td>
                C-7, Thapar Colony, JCT Limited, Phagwara, Dist. Kapurthala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI PRABHJOT SODHI</td>
              <td>M.B.A/1979-1981</td>
              <td>02673-30685, 30984, 22160</td>
              <td></td>
              <td>Project Manager/Service, H.No. 2282, Sec 21C, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS DEEPIKA GANDHI</td>
              <td>M.Phil. Eng/1984-1986</td>
              <td></td>
              <td></td>
              <td>HJ 356, Randhir Singh Nagar, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">DR KULWANT SINGH</td>
              <td>M.Phil, Ph.D. Physics/1976-1984</td>
              <td>2258840</td>
              <td></td>
              <td>Physics Deptt. GNDU University, Amritsar</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF RAVINDER SINGH BHATH</td>
              <td>M.A Pbi, M. Litt/1967-1969</td>
              <td>0161-2560885, 9888748121</td>
              <td></td>
              <td>90-F, Shaheed Bhagat Singh Nagar, Pakhowal Road, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI DALVINDERJIT SINGH</td>
              <td>LL.B/1975-1978</td>
              <td>22255</td>
              <td></td>
              <td>Bawa House, Dharampura, Quadian, Distt Gurdaspur</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS RESHAM SHARMA</td>
              <td>M.B.A/1995-1997</td>
              <td>0161-401438, 670707</td>
              <td></td>
              <td>B-Xx-770/2, Vardhman House, Gurdev Nagar, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SURINDER SINGH</td>
              <td>M.A. Eng/1972-1974</td>
              <td></td>
              <td></td>
              <td>
                H.No. 326, Ward No. -5, Sugar Mill Road, Morinda, Dist. Ropar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI HARSHVINDER SINGH</td>
              <td>M.A. Eng/1972-1974</td>
              <td>01763-22793, 20790, 30247</td>
              <td></td>
              <td>3671, Hamayunpur, Sirhind, Dist. Fatehgarh Sahib</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI ACHHRU SINGH</td>
              <td>M.A. Eng/1968-1970</td>
              <td>30878, 20074</td>
              <td></td>
              <td>N.M. Govt. College, Mansa</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI PRITHI PAL SINGH</td>
              <td>M.Sc. Physics, M.A. Pbi/1965-1967</td>
              <td>23356</td>
              <td></td>
              <td>Street No. -1, Proffesor Colony, Sirhind Mall, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI PARSHOTAM AGGARWAL</td>
              <td>M.Sc., M.Phil Mathematics1984-1989</td>
              <td>01652-23730, 75645</td>
              <td></td>
              <td>Street Brahamkumari, Jawaharke Road, Mansa</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI JASPAL SINGH</td>
              <td>M.Sc., M.Phil Geography/1987-1991</td>
              <td></td>
              <td></td>
              <td>
                Norang Street, Old City, H.No. B-II/73, Kotkapura, Dist.
                Faridkot
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI HARBANS SINGH GILL</td>
              <td>M.Phil Anthropological Linguistics/1980-1981</td>
              <td>50669, 50753</td>
              <td></td>
              <td>B-XII 50, Behind Gurudwara Harinder Nagar, Faridkot</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS RAJBIR KAUR</td>
              <td>M.A., M.Phil (pbi Lit.)1972-1979</td>
              <td>52136, 50753</td>
              <td></td>
              <td>B-XII/139, Harindra Nagar , Faridkot</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI BRAHM JAGDISH SINGH</td>
              <td>M.Phil Anthro Linguistics /19661969</td>
              <td>52136, 50753</td>
              <td></td>
              <td>B-XII/139, Harindra Nagar, Faridkot.</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI DALBIR SINGH</td>
              <td>M.Phil Eng/1984-1985</td>
              <td>52079, 50753</td>
              <td></td>
              <td>B-XII 177/7 New Harindra Nagar, Faridkot</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SUKHJINDER SINGH SID</td>
              <td>M.Phil Pbi/1973-1978</td>
              <td>51144, 50753</td>
              <td></td>
              <td>B-177/8 New Harindra Nagar , Faridkot</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI RULIA SINGH SIDHU</td>
              <td>Ph.D Pbi./1969-1971</td>
              <td>01635-21578</td>
              <td></td>
              <td>
                Near Gurmail Palace, Bathinda Road, Kotkpura, Dist. Faridkot
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI JASVIR SINGH</td>
              <td>B.A.</td>
              <td>01672-35881</td>
              <td></td>
              <td>V.P.O. Longowal, Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">SHRI SUKHWINDER.S.VIRK</td>
              <td>M.A. Pbi, M.A. Linguisics/1980-1988</td>
              <td>01628-41097</td>
              <td></td>
              <td>L-8, G.T.B. Nagar Khanna, Doraha, Dist. Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">DR HARMEET SINGH</td>
              <td>MBBS/1983-1987</td>
              <td>271341, 57054</td>
              <td></td>
              <td>
                Asst. Director Investigation, Type IV/1 Income Tax Colony,
                Basant Vihar Road, Jalandhar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR SUBA SINGH</td>
              <td>M.A. Pbi, M.A. Religious Studies, LLB, Ph.D/</td>
              <td>2228939, 9815971735, 220</td>
              <td></td>
              <td>35-New Dashmesh Avenue, Opp. Khalsa College Amritsar.</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. RAVINDER SINGH SANDHU</td>
              <td>M.A. Sociology/1972-1974</td>
              <td>64842</td>
              <td></td>
              <td>G R School Of Planning, G.N.D.U., Amritsar</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. JAGJIT SINGH</td>
              <td>M.A.</td>
              <td>601990, 703195</td>
              <td></td>
              <td>2867-B, 42-C, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. PARAM RAJ SINGH</td>
              <td>Law/1986</td>
              <td></td>
              <td></td>
              <td>1029, Sector - 36-C, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">ER. KULDIP SINGH</td>
              <td>B.Sc (Engg) Elec, Post G. Dip, LL.B.</td>
              <td>78200, 75685</td>
              <td></td>
              <td>Xen, Grid Maintance Cell, P.S.E.B., Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. ANTARPREET SINGH</td>
              <td>M.B.A/1983-1985</td>
              <td></td>
              <td></td>
              <td>944, Ph. IV, SAS Nagar, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. VARINDER SINGH</td>
              <td>M.A. Sociology/1973-1975</td>
              <td>224298</td>
              <td></td>
              <td>293, New Jawahar Nagar, Jalandhar</td>
            </tr>
            <tr>
              <td style="width: 20%">S. SUKHVIR SINGH TIWANA</td>
              <td>Law/1985-1990</td>
              <td>94170-06098, 0172-22430</td>
              <td></td>
              <td>Kothi No. 75, Phase IIIB, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. GURSEWAK SINGH</td>
              <td>LL.B/1986-1989</td>
              <td>0172-231782, 98140-80638</td>
              <td></td>
              <td>Kothi No. 38, Sec - 65, SAS Nagar, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. GIAN KAUR</td>
              <td>M.Phil Eco./1987-1991</td>
              <td>01628-26050</td>
              <td></td>
              <td>
                Principal, Sarvhitkari Vidya Mandir, Khamano, Fatehgarh
                Sahib/38, Sec. 65, S.A.S. Nagar, Mohali
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. DES RAJ BANSAL</td>
              <td>M.A/B.ed</td>
              <td>31015</td>
              <td></td>
              <td>Adarsh Nagar, Tagore, Mansa</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. KESAR SINGH</td>
              <td>LL.B/1989-1991</td>
              <td>01652-227575, 273344, 981</td>
              <td></td>
              <td>
                H. No. 48 B, W. No. 6, Near Court Complex, Jujhar Singh Nagar,
                Mansa.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. MANJIT KAUR</td>
              <td>M.A. His/1974-1976</td>
              <td>407299</td>
              <td></td>
              <td>569, Model Town, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. SATWANT KAUR</td>
              <td>M.Phil Phy.Edu./1983-1990</td>
              <td>6,265,362,120</td>
              <td></td>
              <td>Lect., Govt College, Mukatsar</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. PRITAM SINGH SARGODHI</td>
              <td>M.Phil Pbi/1964-1966</td>
              <td>33614, 63533</td>
              <td></td>
              <td>13, Jagjit Park, Kapurthala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. HARBANS SINGH GHAI</td>
              <td>M.Sc. Physics/1967-1970</td>
              <td>302246, 304158</td>
              <td></td>
              <td>6-E-Model Town Govt House, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. ANUPAMDEEP KAUR</td>
              <td>M.A</td>
              <td>305202</td>
              <td></td>
              <td># 5131, Arorian Street, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. TARANJIT SINGH</td>
              <td>M.Sc. Phy/1969-1971</td>
              <td>786746</td>
              <td></td>
              <td>E.T.O., Khasa District, P.O. Khasa Amritsar,</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. VIR SINGH RANDHAWA</td>
              <td>M.A., P.G. Diploma in Lingustics/1966-1969</td>
              <td>70070, 70037, 98880-38530</td>
              <td></td>
              <td>
                (Principal Retd.), 13, New Golden Colony, Nakodar, Jalandar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">S. DHARMBIR SINGH DHILLON</td>
              <td>M.A. Eng/1989-1991</td>
              <td>773303</td>
              <td></td>
              <td>Near Mission School, Majitha, Dist. Amritsar</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. SATNAM SINGH</td>
              <td>M.S.W., LL.B/1989-1991</td>
              <td>01652-261014,227575, 9815</td>
              <td></td>
              <td>VPO Sherkhan Wala, Teh. Budhlada, Distt. Mansa</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. JASBIR MAKKAR</td>
              <td>M.A. Music, B.Ed/1972-1978</td>
              <td>457254</td>
              <td></td>
              <td>176-C, Rajguru Nagar, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. RAM SINGH GURNA</td>
              <td>M.Phil, His, 1982-1986</td>
              <td>20470</td>
              <td></td>
              <td>A.S. College, Khanna, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. MONICA SINGH</td>
              <td>PH.D Human Biology/1991</td>
              <td>32499</td>
              <td></td>
              <td>B. Siri Ram Building, G.T. Road, Khanna, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. DIMPLE SETHI</td>
              <td>Ph.D. Pursuing/1997</td>
              <td></td>
              <td></td>
              <td>H. No. HL 479, Phase VII, Mohali, Sec. 61, Distt. Ropar.</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. SARABJIT SINGH MEHNDI</td>
              <td>B.J.M.C./1980-1981</td>
              <td></td>
              <td></td>
              <td>Shivalik College, Naya Nangal, Ropar</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. ASHOK K. MALIK</td>
              <td>M.Sc. Botany/1969-1971</td>
              <td>28613</td>
              <td></td>
              <td>28, New Shivaji Park, Yamuna Nagar, Haryana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. MAHINDER PAL SINGH</td>
              <td>M.Phil Physics/1979-1981</td>
              <td></td>
              <td></td>
              <td>
                Guru Kashi College, Damdama Sahib, Talwandi Sabo, Distt.
                Bathinda
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. HARMEET KAUR</td>
              <td>M.A. Eng /1968-1970</td>
              <td>574254</td>
              <td></td>
              <td>Kothi No. 501, Ph. - IX, SAS Nagar, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. JASBIR SINGH SIDHU</td>
              <td>M.Phil Pbi/1974-1976</td>
              <td>213520, 211983</td>
              <td></td>
              <td>H. No. 22194, Dhobinana Road, Street 12, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. RAJINDER KAUR</td>
              <td>Ph.D Human Biology/1993</td>
              <td>01624-75185</td>
              <td></td>
              <td>
                H. No. 118 B, Uday Singh Nagar, Pul Sudhar Bazar, Ludhiana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. SAGRIKA GUPTA</td>
              <td>Ph.D Human Biology/1986-1995</td>
              <td></td>
              <td></td>
              <td>
                1205, Sect - 17, Huda Colony, Jagadhari, Yamuna Nagar, Haryana
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. SURJIT BHATHAL</td>
              <td>M.A. Eng/1980-1982</td>
              <td>531662</td>
              <td></td>
              <td>H. No. 1575, Sector - 36-D, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. MAKHAN SINGH GUJRANWA</td>
              <td>M.A. Lingustics/1972-1984</td>
              <td>98787-53352</td>
              <td></td>
              <td>H.No. 285, Golden Avenu-II, Garha Road, Jalandhar</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. PARAMJIT SINGH SIDHU</td>
              <td>B.A. &amp; Diploma in Public Relations/1977</td>
              <td>2214285, 2219357</td>
              <td></td>
              <td>I-P, Sirhind By Pass, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. SUKHI BRAR</td>
              <td>M.A. Eng/1978-1980</td>
              <td>0172-260637,892633, 98140</td>
              <td></td>
              <td>911, Phase 7, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. DALIP KAUR TIWANA</td>
              <td></td>
              <td></td>
              <td></td>
              <td>B - 13, Punjabi University Campus, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. PARTAP SINGH</td>
              <td>Ph.D. Eco</td>
              <td>(R) 5002165 (O) 2282885</td>
              <td>drpartap@yahoo.com</td>
              <td># 134/V1, Prem Nagar, Bhadson Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. MADAN GOPAL ACHARYA</td>
              <td>Ph.D./1974-1991</td>
              <td>(R) 2261815, 2549041(O) 2</td>
              <td></td>
              <td>H. No. 815, Phase IV, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. JASWINDER SINGH</td>
              <td></td>
              <td></td>
              <td></td>
              <td>Mohindera College, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. GURMEET SINGH SIDHU</td>
              <td>Ph.D./1980-1999</td>
              <td>(M) 98145-90699</td>
              <td>gssencs@yahoo.com</td>
              <td>
                Dept. Of Religious Studies, Pbi. Uni. Pta., H. No. 272, Urban
                Estate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR SARBJINDER SINGH</td>
              <td>Ph.D. History &amp; Religion/1982</td>
              <td>(R) 2282037 (O) 0175-3131</td>
              <td></td>
              <td>
                Shri Guru Garanth Sahib Studies, Punjabi University, Patiala
                C-16, Pbi Uni. PTA.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. KIRANDEEP KAUR</td>
              <td>Ph.D. Education/1979-1988</td>
              <td>(R) 01752214639 (O) 22824</td>
              <td>kirandeepbrar@yahoo.com</td>
              <td>Deptt. Of Education, Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SMT. ANMOL SARKARIA</td>
              <td>M.Phil Education/1979-1983</td>
              <td>(R) 0175-2303540 (O) 0175</td>
              <td></td>
              <td># 150, Civil Lines, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">S. GURBACHAN SINGH</td>
              <td>LL.B/1979-1982</td>
              <td>(R) 0175-2214639 (O) 0167</td>
              <td></td>
              <td># 14-B, Punjabi Bagh, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. GUNJANJOT KAUR</td>
              <td>Ph.D. Pbi/1992-2002</td>
              <td>(R) 01675-280008</td>
              <td></td>
              <td>
                S.G.G.S, Pbi. Uni. PTA. V.P.O.Narike, Teh Malerkotla, Distt.
                Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR UPINDERJEET KAUR</td>
              <td>Ph.D</td>
              <td></td>
              <td></td>
              <td>
                Finance Minister, Govt Of Punjabi, 1 Azim Manzil, Railway Road,
                Kapurthala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. PARMEET KAUR</td>
              <td>Ph.D/1993-2002</td>
              <td>(R) 0175-2281819</td>
              <td></td>
              <td>
                Near Cheema Flour Mill, Urban Estate, Phase-I, P.O. Punjabi
                University, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR PARAMJIT KAUR SANDHU</td>
              <td>Ph.D Education/1981-1985</td>
              <td>(R) 0175-2286091</td>
              <td></td>
              <td>
                Dept. Education &amp; Community Service, Punjabi University,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR BACHANJEET SINGH</td>
              <td></td>
              <td></td>
              <td></td>
              <td>Punjabi Deparment, Mohindra College, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. RAJINDER PAL KAUR SID</td>
              <td>Ph.D Education/1985</td>
              <td>(R) 0175-2286509</td>
              <td>rpksidhu@yahoo.com</td>
              <td>
                Deptt Of Education &amp; C.S., Punjabi University, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. GURBINDER SARKARIA</td>
              <td>LL.B/1979-1982</td>
              <td>(R) 0175-2303440 (O) 0175</td>
              <td></td>
              <td>Advocate, # 150, Civil Lines, Patiala.</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. HIMAT SINGH</td>
              <td>M.A Pbi, Philosophy, Persian/1962-1964</td>
              <td>(R) 0175-2283246</td>
              <td>ahyadgaar@yahoo.com</td>
              <td>Vidya Nagar, Opposite Punjabi University, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. NAIB SINGH</td>
              <td>M.A Philosophy, LL.B/1989-1991</td>
              <td>(R) 0175-2372982</td>
              <td></td>
              <td># 1015, Gali No. 10 Guru Nanak Nagar, Patiala.</td>
            </tr>
            <tr>
              <td style="width: 20%">PROF. GURDIAL SINGH</td>
              <td>M.A Pbi/1986-1995</td>
              <td>(R) 01635-230434</td>
              <td></td>
              <td># 7/262, Gianpith Marg, Jaito, Faridkot</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. SURJIT SINGH</td>
              <td>M.Phil Pbi./1992-1993</td>
              <td>(R) 01635-223010,269533,</td>
              <td>surjitsingh_67@yahoo.co.in</td>
              <td>
                Near Old State Bank Patiala,Railway Road, Kotkapura, Dist.
                Faridkot
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR RAJINDER PAL SINGH</td>
              <td>Ph.D Pbi/1985-1989</td>
              <td>(R) 2283217</td>
              <td>rpsbrar63@yahoo.com</td>
              <td>
                Prof, Punjabi Department, Punjabi University, Patiala/3051,
                Urban Estate, Phase 2, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">PROF BALWINDER KAUR BRAR</td>
              <td>Ph.D. Pbi</td>
              <td>(R) 283144</td>
              <td></td>
              <td>
                Deptt. Of Punjabi , Punjabi University Patiala B-2, Pbi. Uni.
                PTA.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. GURMEL SINGH</td>
              <td>M.A Eco/1967-1969</td>
              <td>2782046, 2742356</td>
              <td></td>
              <td># 131, Sector 16-A, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. GURVINDER SINGH</td>
              <td>LL.B/1978-1981</td>
              <td>2226364, 2229177</td>
              <td></td>
              <td>
                # 5015, Arorian Street, Patiala/55, New Moti Bagh Colony,
                Patiala.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. HARDAWINDER SINGH SAN</td>
              <td>LL.B,/1984-1987</td>
              <td>98720-09199</td>
              <td></td>
              <td>H.No 66, Police Line Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. IRVINDER PAL SINGH</td>
              <td></td>
              <td>9316301693</td>
              <td>rubyjodhka@gmail.com</td>
              <td># 75, Raghbir Marg, Near OBC Bank, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. JAI KISHAN</td>
              <td>M.B.B.S, M.D/1973-1977</td>
              <td>2220257, 2220268, 98146-6</td>
              <td>gaikishantb@yahoo.co.in</td>
              <td># 267 Thikriwala Nagar, Rajpura Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. KIRPAL KAZAK</td>
              <td></td>
              <td>2285687, 98722-35040</td>
              <td></td>
              <td>. # 2687, Phase-II, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. RAKESH MITTAL</td>
              <td></td>
              <td>98141-51750</td>
              <td></td>
              <td># 907, Khalsa Mohalla, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. SUKHPAL SINGH SIDHU</td>
              <td>B.Lib/1987-1990</td>
              <td>2281140</td>
              <td></td>
              <td># 30, Phase-I, Urban Estate, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR RAVINDERPAL KAUR SANDH</td>
              <td></td>
              <td></td>
              <td></td>
              <td>138, Ajit Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR MANJEET JOHAL</td>
              <td></td>
              <td></td>
              <td></td>
              <td>37/A, Khalsa College Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARDEEP SINGH DANDIAWA</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td style="width: 20%">MS RAVINDER KAUR</td>
              <td>M.A Sanskirt/1967-1969</td>
              <td>2282508</td>
              <td></td>
              <td># 372, Urban Estate, Phase-I, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BALTEJ SINGH MANN</td>
              <td>M.A. Eco/1975-1977</td>
              <td>2285730, 2284056</td>
              <td>mannbs2001@yahoo.com</td>
              <td>
                Prof. National Integration Chair, Pbi. Uni. PTA. # 4325, Urban
                Estate, Phase II, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR SURJIT SINGH BHATTI</td>
              <td>Ph.D Pbi/1978-1983</td>
              <td>01651-248233, 248894, 981</td>
              <td></td>
              <td>Principal, University College, Rampura Phul, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SH DARSHAN SINGH BUTTAR</td>
              <td>M.A Pbi</td>
              <td>01765-22310, 98147-57562</td>
              <td></td>
              <td># 143, Hira Mahal Nabha</td>
            </tr>
            <tr>
              <td style="width: 20%">DR RAM KUMAR</td>
              <td>Zoology/1973-1981</td>
              <td>0172-2725444, 01792-25248</td>
              <td></td>
              <td>
                Deptt. Of E.A.P., Dr. Y.S.P. U.H.F., Nauni-173230, Solan, Distt.
                Himachal Perdesh/1170, Sector 15 B, Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH S.P. SOOD</td>
              <td>LL.B, P.C.S/1980-1983</td>
              <td>1655221007</td>
              <td>nseth_pajni@yahoo.com</td>
              <td>H. No. 26, Hira Bagh, Rajpura Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURINDER SANDHU</td>
              <td></td>
              <td></td>
              <td></td>
              <td># 2585, 70-Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">MISS MANJIT KAUR</td>
              <td>M.A. Pbi</td>
              <td>01769-222169</td>
              <td></td>
              <td>
                D/O Maghar Singh Tibbi Mohala, Ghrammi Patti, Samana, Dist.
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR MUKESH KUMAR SHARMA</td>
              <td>Ph.D., Statistics</td>
              <td>2282398</td>
              <td>drmksharma2004@yahoo.com</td>
              <td>
                Deptt. Of Statistics, Pbi. Uni. Patiala /Vidya Nagar, Opp. Pbi.
                Uni. PTA.
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR NIRMAL BAJAJ</td>
              <td>Ph.D Eng, 1969-1971</td>
              <td>2286268</td>
              <td></td>
              <td>P-5, Pbi. Uni., Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS RAVNEET KAUR</td>
              <td></td>
              <td></td>
              <td></td>
              <td>Deptt. Of C.C., Pbi. Uni. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS AMITA</td>
              <td></td>
              <td></td>
              <td></td>
              <td>Deptt. Of C.C., Pbi. Uni. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH DEVINDER KAUR SIDHU</td>
              <td>M.Phil, Pbi., M.Ed./1979-1982</td>
              <td>01823-260515, 01823-26006</td>
              <td></td>
              <td>
                Guru Nanak College For Women, Banga, Nawa Shehar/ 9/395, Adarsh
                Nagar, Banga
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR MOHINDER SINGH</td>
              <td>Ph.D, Pbi./1979-1981</td>
              <td>01672-230837, 01672-23413</td>
              <td></td>
              <td>
                Govt. Ranbir College, Sangrur/ H.No. B-IV-223, Patiala Gate,
                Banaran Bagh Road, Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH TRIBHAWAN SINGLA</td>
              <td></td>
              <td>2744251, 9814017577</td>
              <td>tribhawansingla@sify.com</td>
              <td>5781, Sec. 11-B, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARDEV SINGH</td>
              <td>M.B.A., LL.B/1979-1981</td>
              <td>4640325, 2215511, 98761-6</td>
              <td>monacoman1951@yahoo.com</td>
              <td>1038, Sec. 67, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. MANJIT SINGH</td>
              <td>M.Com1987-1992</td>
              <td>0175-2302511, 3046208</td>
              <td>smanjitt@gmail.com</td>
              <td>
                Deptt. Of Applied Management, Pbi. Uni. Patiala/27, Phulkian
                Enclave, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURBAX SINGH</td>
              <td>M.Phil./Linguistics/1976-1982</td>
              <td>9872406252</td>
              <td></td>
              <td>
                Deptt. Linguistics And Pbi. Kohkari, Pbi. Uni. Patiala/Vill.
                Dharamheri, P.O. Bibi Pur, Teh. &amp; Distt. Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. GURPAL SINGH</td>
              <td>M.Phil./Linguistics</td>
              <td>2282096, 3046241</td>
              <td></td>
              <td>246, Phase I, U.E, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH JAGJEET SINGH</td>
              <td>M.A./Pbi./2004-2006</td>
              <td></td>
              <td></td>
              <td>V.P.O. Chanke, Distt. Barnala, Punjab</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. SUKHDEV SINGH</td>
              <td>M.Phil./Pbi./1987-1990</td>
              <td>9417120947, 01652-275645</td>
              <td>principalsukhdevsingh@gmail.com</td>
              <td>H.38, Ward No. 13, Yog Nagar, Budhlada, Distt. Mansa</td>
            </tr>
            <tr>
              <td style="width: 20%">SH. DIDAR SINGH</td>
              <td>M.A./Pbi.</td>
              <td>01764-224627, 9872872978</td>
              <td>didarsingh56@gmail.com</td>
              <td>H.No. 796/9, Waraich Colony, Samana, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH AJAY KUMAR</td>
              <td>M.A./Pol. Sci./2004-2006</td>
              <td>01268-279259</td>
              <td></td>
              <td>V.P.O. Pinangwan, Distt. Mewat (Gurgaon), Haryana</td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURBAKSH SINGH</td>
              <td>M.A./Pol. Sci./2004-2005</td>
              <td>270040, 9814762833</td>
              <td></td>
              <td>
                Vill. Waraicha, P.O. Nurpura, Distt. Fatehgarh Sahib, Teh. Amloh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR. PRADEEP SACHDEVA</td>
              <td>Ph.D./ Public Administration Deptt.</td>
              <td>01744-221715, 09416087015</td>
              <td>roadash2006@yahoo.co.in</td>
              <td>Head, Public Administration Deptt, K.U.K.</td>
            </tr>
            <tr>
              <td style="width: 20%">DR GURDISH KAUR</td>
              <td>Ph.D.</td>
              <td>2233003, 2215835</td>
              <td>gurdishbajwa@gmail.com</td>
              <td>107- K.S. Ghuman Nagar, Sirhind Road, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BIRDALVINDER SINGH</td>
              <td>,,</td>
              <td>01765-260687</td>
              <td></td>
              <td>
                Vill. Kalar Majri, P.O. Bhadson, Teh. Nabha, Dist. Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">VANEET BANSAL</td>
              <td>B.Tech</td>
              <td>0164-215600</td>
              <td></td>
              <td>H. No. 124 C, Phase II, Model Town, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SH VINAY SHARMA</td>
              <td></td>
              <td></td>
              <td></td>
              <td>158, Type III, SLJET, Longowal, Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BHARAT TALWAR</td>
              <td></td>
              <td></td>
              <td></td>
              <td>Talwar Street, P.O. Tanda, Hoshiarpur</td>
            </tr>
            <tr>
              <td style="width: 20%">DR KULVIR SINGH</td>
              <td>Ph.D/Chemistry</td>
              <td>01765-220222</td>
              <td></td>
              <td>
                Prof. Vir Singh Colony, Near Junior PPS, Nabha, Dist. Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR BALDEV SINGH</td>
              <td>Ph.D./Chemistry</td>
              <td>2372912, 3046409</td>
              <td>drbaldev_singh@yahoo.com</td>
              <td>
                Deptt. Of Chemistry, Pbi. Uni., Patiala/H.No. 492, St. No. 12,
                Old Bishan Nagar, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR MAKHAN SINGH</td>
              <td>,,</td>
              <td>9876089601</td>
              <td></td>
              <td>
                Deptt. Of Chemistry, Pbi. Uni., Patiala/K. No. 13, Sahib
                Enclave, Mehla Colony, Near Urban Estate, Phase –I, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR BHARAT VIJAY</td>
              <td>,,</td>
              <td>2219027</td>
              <td></td>
              <td>51-C, New Lal Bagh Colony, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS SUNITA RANI</td>
              <td>Fine Arts Dept.</td>
              <td></td>
              <td></td>
              <td>H. No. 40, B-14, Prem Nagar, Islam Ganj, Ludhiana</td>
            </tr>
            <tr>
              <td style="width: 20%">MS RAJESH DHALIWAL</td>
              <td>Ph.D./,,</td>
              <td>2307312</td>
              <td>rajeshdhaliwal@yahoo.com</td>
              <td>192, Pratap Nagar, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ABDUR</td>
              <td>M.Tech</td>
              <td></td>
              <td></td>
              <td>B-17/697,Madina Basti, Malerkotla, Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">MS MENKA PATHARIA</td>
              <td>MBA</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td style="width: 20%">MS LOVELEEN KAUR</td>
              <td>LL.B</td>
              <td>9417869590</td>
              <td>lovelybhattal@yahoo.com</td>
              <td>892, Phase IV, Mohali</td>
            </tr>
            <tr>
              <td style="width: 20%">MS TANU DAANG</td>
              <td></td>
              <td></td>
              <td>tanudang@gmail.com</td>
              <td>
                Dept. Of Journalism And Mass Comm., Kanpur University,
                Kanpur/30/1, Industrial Colony, Govind Nagar, Kanpur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH PREM SHARMA</td>
              <td></td>
              <td></td>
              <td></td>
              <td>Modi College, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH SURJIT SINGH DUKHI</td>
              <td></td>
              <td>9417412251</td>
              <td>surjitsingh20@gmail.com</td>
              <td>133, Royal Enclave, Near Urban Estate, Phase-I, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">MS KIRAN BALA</td>
              <td>M.P.Ed</td>
              <td>01882-276440</td>
              <td></td>
              <td>Vill Baghpur, Dist. Hosiianpur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BALDEV RAJ</td>
              <td>M.P.Ed</td>
              <td>9463776163</td>
              <td>baldevraj7@gmail.com</td>
              <td>
                Vill. Gujjar Pur Kalan, PO Mahalon, Teh &amp; Dist. Nawanshahar
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH VARINDER SINGH</td>
              <td>M.Tech/2002-2006</td>
              <td>01676-224135</td>
              <td>er_varinder_btech@yahoo.co.in</td>
              <td>2, Opp. Bus Stand, Near SBOP, Sunam, Distt. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">MS ISHA</td>
              <td></td>
              <td></td>
              <td>isha83_mca@rediffmail.com</td>
              <td>B-90, South Moti Bagh, New Delhi</td>
            </tr>
            <tr>
              <td style="width: 20%">SH VIVEK BANSAL</td>
              <td>MCA</td>
              <td>9945037374</td>
              <td></td>
              <td>17247, Gali No. 1, Aggarwal Colony, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">SH NEERAJ BANGA</td>
              <td>M.Tech</td>
              <td>9212366880</td>
              <td>neerajbanga@rediffmail.com</td>
              <td>136, New Housing Board, Barnala Road, Sirsa</td>
            </tr>
            <tr>
              <td style="width: 20%">MS RAJBIR KAUR</td>
              <td>M.Phil, Pbi.</td>
              <td>416-742-6769, 01672-23759</td>
              <td></td>
              <td>
                49, Silver Stone Road # 102, ETOBICOKE ONTARIO, M9V 3G2,
                CANADA/H.No. B-X/205, Prem Basti, St. No. 4, Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH SWARN SINGH</td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                C/O Pushpinder Singh Gill, MBA Department, Punjabi University,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR NAVPREET KAUR</td>
              <td>Ph.D/Zoology</td>
              <td>65,421,213,046,334</td>
              <td>navpreet_pta_2006@yahoo.com</td>
              <td>
                Deptt. Of Zoology, Punjabi University, Patiala/7814/5, Gill
                House, Passey Road, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR HIMENDER BHARTI</td>
              <td>Ph.D/Zoology</td>
              <td>2280180</td>
              <td></td>
              <td>
                Deptt. Of Zoology, Punjabi University, Patiala/2039, Phase-II,
                Urban Estate, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS SHABNAM SODHI</td>
              <td>Ph.D./ Zoology</td>
              <td>2217827, 2213228</td>
              <td></td>
              <td>GCG, Patiala/112, Punjabi Bagh, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH ARVINDER PAL SINGH</td>
              <td>Zoology</td>
              <td>0172-2647930, 9814203428</td>
              <td>apsingh_60@yahoo.co.in</td>
              <td>Dept. Of Zoology, SGGS College, Sec 26, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">MS AMANPREET KAUR</td>
              <td>M.Sc/ Zoology</td>
              <td>0164-2240854</td>
              <td>amanbrar_l@yahoo.com</td>
              <td>22268, St. No. 2, Shant Nagar, Bathinda</td>
            </tr>
            <tr>
              <td style="width: 20%">MS KARANDEEP KAUR</td>
              <td>M.Sc./Zoology</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td style="width: 20%">DR RASHPAUL SINGH</td>
              <td>Ph.D./Pbi</td>
              <td>0172-2784970, 2214108, 98</td>
              <td></td>
              <td>
                M.M. Modi College, Patiala/H.No. E-I, 33, Sec. 14, P.U. Campus,
                Chandigarh
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH BIRBAL SINGH</td>
              <td>M.A, Defence &amp; Strategic Studies</td>
              <td></td>
              <td></td>
              <td>VPO Thaska, Khaunauri Mandi, The. Moonak, Dist. Sangrur</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BALJINDER SINGH</td>
              <td>M.A., Defence &amp; Strategic Studies</td>
              <td></td>
              <td></td>
              <td>VPO Daunkalan, Dist&amp;Teh. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH HARDIP SINGH KHAROD</td>
              <td>M.A., Defence &amp; Strategic Studies</td>
              <td></td>
              <td></td>
              <td>VPO Rurki, Teh. Sirhind, Dist. Fatehgarh Sahib</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BHAJAN SINGH DHALIWAL</td>
              <td>M.Phil, Public Administration</td>
              <td>94174-03251</td>
              <td></td>
              <td>
                54 A/2, Near Police Chowki, Ranbir Marg, Model Town, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">DR MANDEEP SINGH</td>
              <td>Ph.d</td>
              <td>9872437407</td>
              <td></td>
              <td>116-D Professor Colony, Opp. Pbi. Uni Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH BALVIR SINGH</td>
              <td>M.A punjabi Hons, M.phil</td>
              <td>(R)2282791,(o)2214108</td>
              <td></td>
              <td>17 Professor Colony Opp. Pbi.Uni. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SH MAHAL SINGH</td>
              <td>LLB</td>
              <td>9416167446</td>
              <td></td>
              <td>632, Sec. 20 II, Huda Barnala Road, Sirsa, Dist. Haryana</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. NASHIR NAQVI</td>
              <td>Ph.D, Diploma Mass Media</td>
              <td>2286512, 3046251</td>
              <td>nhnaqvi786@gmail.com</td>
              <td>P-12, Pbi. Uni. Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. MOHAN SINGH TYAGI</td>
              <td>M.A Eng., Pbi., Religion, M.Ed, Ph.D</td>
              <td>9814479150</td>
              <td>mohan.tyagi28@yahoo.com</td>
              <td>
                Deptt. Of Literery Studies, Pbi. Uni. Patiala, 61-B, Krishna
                Colony, Ablowal, Ward No. 1, Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH GURJEET SINGH SIDHU</td>
              <td>M.Sc Zpplogy</td>
              <td></td>
              <td>gurjeetsidhu50@yahoo.com</td>
              <td>1264, Sec. 18 C, Chandigarh</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. AKAL RACHNA KAUR</td>
              <td>M.Sc.</td>
              <td>0175-2227473</td>
              <td>akalrachna@yahoo.ca</td>
              <td>22/P Punjabi Bagh, Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. BHUSHAN KUMAR</td>
              <td>Ph.D</td>
              <td>9463109192</td>
              <td>bhushangoyal@rocketmail.com</td>
              <td>
                1097, 37-B, Chandigarh/ 122, Mohindra Complex Kheri Gujran Road,
                Patiala
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. HARMINDER (HARRY) S M</td>
              <td>LL.B</td>
              <td>905-565-5770</td>
              <td>hsm@mannlaw.ca</td>
              <td>920 DESSY ROAD EAST MISSISSAUGA ONTARIO LST 2X6, CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. SATPAL SINGH VIRK</td>
              <td>LL.B</td>
              <td>905-782-1754</td>
              <td>spvirk@yahoo.com</td>
              <td>11-7003 STEELES AV(W) TORONTO. ON, CANADA</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. P.S. PANESAR</td>
              <td>M.Sc. Ph.D</td>
              <td>9417494849,01672_253176</td>
              <td>pspbt@yahoo.com</td>
              <td>Deptt. Of Food Engg. And Technology Longowal,</td>
            </tr>
            <tr>
              <td style="width: 20%">MS RANJEETA BHARI</td>
              <td>M.Sc.</td>
              <td></td>
              <td></td>
              <td>E-576Kalkaji Extion,New Delhi</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. AMANPREET KAUR</td>
              <td>Ph.D (Sports Science)/2015-till continue</td>
              <td></td>
              <td></td>
              <td>
                Street No. 10/B, Guru Gobind Singh Nagar, Bathinda M.No.
                75082-61535
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS POOJA RANI</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>poojabansalbnl@gmail.com</td>
              <td>
                #B-VII 1602, Street No. 1, Patti Road, Bhai Mani Singh Nagar,
                Barnala (M.No. 82889-22290)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS RAJVIR KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>rajvir8894@gmail.com</td>
              <td>
                Kala Patti, VPO Kale Ke, Teh. Bagha Purana, Distt. Moga M.No.
                99882-23016
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. BIRBAL SINGH</td>
              <td>M.A. (Def.)/1988-1990</td>
              <td></td>
              <td></td>
              <td>
                VPO Thaska, Khaunauri Mandi, Tehsil Moonak, Distt. Sangrur
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. HARDIP SINGH KHAROD</td>
              <td>M.A. (Def.)/1988-1990</td>
              <td></td>
              <td></td>
              <td>VPO Rurki, Teh. Sirhind, Distt. Fatehgarh Sahib</td>
            </tr>
            <tr>
              <td style="width: 20%">MRS. BALDEEP KAUR</td>
              <td></td>
              <td></td>
              <td>baldeepkaur@gmail.com</td>
              <td>
                #5, Street No. 6, Dashmesh Nagar, Near Shankutla Vihar M.NO.
                96462-97122
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. AMANDEEP SINGH</td>
              <td></td>
              <td></td>
              <td>aman9973@gmail.com</td>
              <td>
                VPO Gandia, PO Khanpur Ralu ,Tehsil Rajpura, Distt. Patilala
                M.NO. 98146-55817
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. SANDEEP KAUR</td>
              <td>M.Sc. (Sports Science)/2014-2016</td>
              <td></td>
              <td>ssippu1@gmail.com</td>
              <td>
                VPO.Sheron, Patti Bhigha,Teh. Sunam, Distt. Sangrur
                M.No.94638642500
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. HARPREET KAUR</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td>hpreet278@gmail.com</td>
              <td>
                Vill Reona Bhola. PO. Ucha Reona Teh.Distt. Fatehgrarh Sahib
                M.No. 97801-09982
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RAJWINDER SINGH</td>
              <td>M.Sc. (Sports Science)/2015- till continue</td>
              <td></td>
              <td></td>
              <td>R/O Sahote Distt. Sangrur M.No. 94634 36400</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. PARWINDERJIT KAUR</td>
              <td>M.Phil. (Sports Science)/2015-till continue</td>
              <td></td>
              <td></td>
              <td>M.No. 9463488779</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. MALOOK SINGH</td>
              <td>Ph.D (Sports Science)/2013-till continue</td>
              <td></td>
              <td></td>
              <td>
                Kot Bhai, Kothe, Himmatpur, Tehsil Giddarbaha M.No. 73555-72000
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. JAI RAMMAN</td>
              <td>Ph.D (Sports Science)/2015-till continue</td>
              <td></td>
              <td></td>
              <td>Punjabi University, Campus M.No. 99148-89469</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. BHUPINDER SINGH</td>
              <td>
                PG Diploma in Health Fitness &amp; Trainer (Sports
                Science)/2015-16
              </td>
              <td></td>
              <td></td>
              <td>
                #358, Sector 25B, Dashmesh Colony, St. No. 5, Mandi Gobindgarh
                M.No. 98887-00094
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. HARJINDER SINGH</td>
              <td>
                PG Diploma in Health Fitness &amp; Trainer (Sports
                Science)/2015-16
              </td>
              <td></td>
              <td></td>
              <td>
                #UK, Hudadpur, PO Kutbanpur, Tehsil Samana Distt. Patiala M.No.
                99153-08682
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RANJIT SINGH</td>
              <td>
                PG Diploma in Health Fitness &amp; Trainer (Sports
                Science)/2015-16
              </td>
              <td></td>
              <td></td>
              <td>Vill. Wattu, Teh-Distt. Mukatsar Sahib (M.No. 85913-22202</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. HARINDER SINGH</td>
              <td>
                PG Diploma in Health Fitness &amp; Trainer (Sports
                Science)/2015-16
              </td>
              <td></td>
              <td></td>
              <td>Vill/PO Mansa, Distt. Mansa M.No. 95926-61028</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. VANDANA</td>
              <td>
                PG Diploma in Health Fitness &amp; Trainer (Sports
                Science)/2015-16
              </td>
              <td></td>
              <td></td>
              <td>M.No. 80590-44491</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. DHARMINDER SINGH</td>
              <td>
                PG Diploma in Health Fitness &amp; Trainer (Sports
                Science)/2015-16
              </td>
              <td></td>
              <td></td>
              <td>
                Vill. Sanjarpur, Distt. Patiala, Tehsil Rajpura M.No.
                98152-21606
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. SUKHJEET SINGH</td>
              <td>
                PG Diploma in Health Fitness &amp; Trainer (Sports
                Science)/2015-16
              </td>
              <td></td>
              <td></td>
              <td>
                VPO. Khuian Sarwar Tehsil Abohar, Distt. M.No. 99145-72121
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. GURWINDER SINGH</td>
              <td>Diploma in Gatka/2015-2016</td>
              <td></td>
              <td></td>
              <td>
                Sikh Mohalla, Tehsil Giddarbaha, Distt. Mukatsar Sahib (M.No.
                85285-01984)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. JASWINDER SINGH</td>
              <td>Diploma in Gatka/2015-2016</td>
              <td></td>
              <td></td>
              <td>
                126/3, Bharat Nagar, Nabha Road, Patiala (M.No. 99880-003373)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS. KOMAL PREET KAUR</td>
              <td>Diploma in Gatka/2015-2016</td>
              <td></td>
              <td></td>
              <td>
                Vill. Kallu Bhatia, PO Burewal, Tehsil Sultanpur Lodhi, Distt.
                Kapurthla M.No. 94647-12554
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. TALWINDER SINGH</td>
              <td>Diploma in Gatka/2015-2016</td>
              <td></td>
              <td></td>
              <td>
                #281, Ward No. 11, Gurdwara Akalgarh Sahi, Sanour Distt. Patiala
                (M.No. 98158-07004)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RAMANDEEP KAUR</td>
              <td>Diploma in Gatka/2015-2016</td>
              <td></td>
              <td></td>
              <td>
                Vill. Kalla Bhatia, PO Butewal, Tehsil Sultanpur Lodhi, Distt.
                Kapurthla
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RANJIT SINGH</td>
              <td>Diploma in Gatka/2015-2016</td>
              <td></td>
              <td></td>
              <td>
                #2567, Ward No. 7, Jalalabad (West) Distt Fazilka M.No.
                94646-09843
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. JATINDER SINGH</td>
              <td>Diploma in Gatka/2015-2016</td>
              <td></td>
              <td></td>
              <td>
                Vill. Bhura, PO Harchandpura, Tehsil Dhuri, Distt. Sangrur M.No.
                8528688019
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MR. JASWINDER SINGH</td>
              <td>
                PG Diploma in Health Fitness &amp; Trainer (Sports
                Science)/2015-16
              </td>
              <td></td>
              <td></td>
              <td>#VPO Passiana, Distt. Patiala M.No. 98147-81326</td>
            </tr>
            <tr>
              <td style="width: 20%">MR. RANJIT SINGH</td>
              <td>M.Phil. (Sports Science)/2015-till continue</td>
              <td></td>
              <td></td>
              <td>M.No. 7508861580</td>
            </tr>
            <tr>
              <td style="width: 20%">MS. RAMINDER KAUR</td>
              <td></td>
              <td></td>
              <td>zimnia088@gmail.com</td>
              <td>
                #4279, Phase-II, Urban Estate, Paitala (M.No. 98785-41321)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">MS RAMANDEEP KAUR</td>
              <td>M.Sc. (Chemistry)/2015-2017</td>
              <td></td>
              <td>raman13523@gmail.com</td>
              <td>
                Police Colony Samrala, Qr. No. 23, Distt. Ludhiana M.No.
                98729-56208
              </td>
            </tr>
            <tr>
              <td style="width: 20%">SH. AMARINDER SINGH</td>
              <td>M.A.(Def)/1988-1990</td>
              <td></td>
              <td></td>
              <td>Kartar Cottage, Lehal Colony, Patiala (M.No. 98886-08811)</td>
            </tr>
            <tr>
              <td style="width: 20%">SUMANDEEP KAUR</td>
              <td>M.A.</td>
              <td>9417934984</td>
              <td>suamtwins@gmail.com NIL</td>
              <td>V.P.O. Danger Khera Teh. &amp; Distt. Fazilka</td>
            </tr>
            <tr>
              <td style="width: 20%">DR. PARMINDER KAUR</td>
              <td>M.Sc. P.Hd</td>
              <td>9855804945</td>
              <td>paraint@in diatimer.com NIL</td>
              <td>297, Mandir Street , Anand Nagar A Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">SUKHPREET KAUR</td>
              <td></td>
              <td>9872417084</td>
              <td>sukhpreetk684@gmail.com sukhpreetk684@gmail.com</td>
              <td>
                Vil. Tibbi Hari Singh, Teh. Sardulgarh, Dist. Mansa (Punjab)
              </td>
            </tr>
            <tr>
              <td style="width: 20%">JAGDEEP SINGH</td>
              <td>
                post graduate diploma in journalism &amp; mass communication
                (one year)
              </td>
              <td>8288847042</td>
              <td>jagdeepkahlon88@gmail.com jagdeepkahlon88@gmail.com</td>
              <td>Vill Gaunspur P.O Kauli Distt Patiala</td>
            </tr>
            <tr>
              <td style="width: 20%">VARUN GUPTA</td>
              <td></td>
              <td>8054923300</td>
              <td>jsrtechvarun@gmail.com</td>
              <td>#1258, GF, Sector 21B, Chandigarh, 160022</td>
            </tr>
            <tr>
              <td style="width: 20%">ARUN KUMAR DOGRA</td>
              <td>
                B.E (ELECTRONICS AND ELECTRICAL COMMUNICATION) DEGREE FROM:
                THAPAR INSTITUTE OF ENGINEERING AND TECHNOLOGY PATIALA.
              </td>
              <td>9582131479</td>
              <td>arundogra12@gmail.com arundogra12@gmail.com</td>
              <td>B-456, KENDRIYA VIHAR, SECTOR-51, G.B.N , NOIDA</td>
            </tr>
            <tr>
              <td style="width: 20%">JEININDER SINGH CHOWHAN</td>
              <td>zOOLOGY DEPTT.</td>
              <td>9888476763</td>
              <td>NIL NIL</td>
              <td>Chowahan Clinical Lab. Banan Street, Nabha</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <footer-component></footer-component>
  </body>
</html>
