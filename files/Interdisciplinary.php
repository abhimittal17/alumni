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
   
   <!-- Navbar -->
   <link rel="stylesheet" href="./Navbar.css">
   <script src="./app.js" ></script>
   <link rel="stylesheet" href="./app.css">
   <link rel="icon" type="image/x-icon" href="favicon.ico">

    <title>Interdisciplinary</title>
</head>
<body>
    <?php
    require 'partials/_nav.php';
    ?>

    <div class="container">
        
        <div class="row">
            <div class="col-sm-12">
                <div style="margin: 30px 0;" class="text-center"><h2 style=" font-weight:700;">Interdisciplinary Reseach centres and Career Hub</h2>
            </div>
        </div>

        <!-- box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) -->
        <table style="border: 1px solid #dee2e6; " class="table">
            <thead>
              <tr style="background-color: #011D4B; color:#EACC15;">
                <th> Sr.No</th>
                <th>Name of Centre</th>
                <th>Name of Director/Coordinator</th>
                
              </tr>
            </thead>
            <tbody>

                <tr>
                    <td><p>1</p></td>
                    <td><p>  Centre for Product Development through Novel Technology Interventions</p></td>
                    <td><p style="background-color: #DDFBE8; color:#14532D ;font-weight:600;"> Dr. Gurpreet Kaur, Professor, Deptt. of Pharmaceutical Sciences and Drug Research,Dr. Minni Singh Associate Professor, Deptt. of Biotechnology. </p></td>
                </tr>

                <tr>
                    <td><p>2</p></td>
                    <td><p>  Incubation, Entreprenurship, Innovation and Career Hub</p></td>
                    <td><p style="background-color: #DDFBE8; color:#14532D ;font-weight:600;"> Dr. Balraj Singh, Professor, Mechanical Engg. Deptt., Dr. Minni Singh Associate Professor, Deptt. of Biotechnology.</p></td>
                </tr>

                <tr>
                    <td><p>3</p></td>
                    <td><p>Rapid Prototyping and Material Testing Research centre</p></td>
                    <td><p style="background-color: #DDFBE8; color:#14532D ;font-weight:600;"> Dr. Parlad Kumar, Associate Professor, Mechanical Engg. Deptt. Co-ordinator and Dr. Gurpreet Singh, Assistant Professor, Mechanical Engg. Deptt. Co-coordinator.</p></td>
                </tr>

                <tr>
                    <td><p>4</p></td>
                    <td><p>Centre for Artificial Intelligence and Data Sciences</p></td>
                    <td><p style="background-color: #DDFBE8; color:#14532D ;font-weight:600;">Dr. Gurpreet Singh Lehal, Professor, Computer Science Deptt.</p></td>
                </tr>

                <tr>
                    <td><p>5</p></td>
                    <td><p>Centre for Human Development and Knowledge Management</p></td>
                    <td><p style="background-color: #DDFBE8; color:#14532D ;font-weight:600;">Dr. Jaswinder Singh Brar, Professor Economics Deptt.</p></td>
                </tr>

                <tr>
                    <td><p>6</p></td>
                    <td><p>Centre For Public Policy And Governance</p></td>
                    <td><p style="background-color: #DDFBE8; color:#14532D ;font-weight:600;" >Dr. Rajbans Singh Gill Professor Public Administration Deptt</p></td>
                </tr>
            <hr>
            </tbody>
            </table>
        </div>
        </div>
        
    <footer-component></footer-component>
</body>
</html>