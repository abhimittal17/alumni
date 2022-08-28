<?php include("connection.php");?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>


<main class="content" role="content">
	
	<section id="section1">
		<div class="container-fluid col-md-6 col-md-offset-3">


<form  action="#" method="Post">
  <h1>Register:</h1>
  Year 3of joining
    <p><input type="date" oninput="this.className = ''" name="joindate"></p>
    Year of leaving
    <p><input  type ="date" placeholder="Last name..." oninput="this.className = ''" name="leavingdate"></p>
    University Registration Number
    <p><input  type ="number" placeholder="University Registration Number" oninput="this.className = ''" name="Registration"></p>
    Degree
    <p><input  type ="text" placeholder="Degree" oninput="this.className = ''" name="Degree"></p>
    Proof of association
    <p><input  type ="file" placeholder="Degree" oninput="this.className = ''" name="Proof"></p>
  
  First name
    <p><input placeholder="First name ..." oninput="this.className = ''" name="fname"></p>
    Last name
    <p><input placeholder="last name ..." oninput="this.className = ''" name="lname"></p>

    Email
    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
    Phone
    <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
    Profile Photo
    <p><input type="file" oninput="this.className = ''" name="photo"></p>
 Profession
    <p><input placeholder="Profession.." oninput="this.className = ''" name="Profession"></p>
    Position/Designation
    <p><input placeholder="Position/Designation.." oninput="this.className = ''" name="Position"></p>
    City
    <p><input placeholder="City.." oninput="this.className = ''" name="City"></p>
    Postal Code
    <p><input placeholder="Postal Code.." oninput="this.className = ''" name="Pincode"></p>
    Country
    <p><input placeholder="Country.." oninput="this.className = ''" name="Country"></p>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="submit" name="sub">Submit</button>
    </div>
  </div>
 
</form>

	
		</div>
	</section>

</main> 
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script><script  src="./script.js"></script>

</body>
</html>
<?php
if($_POST['sub'])
{
    $yj=$_Post['joindate'];
    $yl=$_Post['leavingdate'];
    $unireg=$_Post['Registration'];
    $degree=$_Post['Degree'];
    $proofas=$_Post['Proof'];
    $fname=$_Post['fname'];
    $lname=$_Post['lname'];
    $email=$_Post['email']; 
    $phone=$_Post['phone'];
    $photo=$_Post['photo'];
    $profession=$_Post['Profession'];
    $position=$_Post['Position'];
    $city=$_Post['City'];
    $pincode=$_Post['Pincode'];
    $country=$_Post['Country'];
}
$query= "INSERT INTO FROM values('$yj','$yl','$unireg','$degree','$proofas','$fname','$lname','$email','$phone','$photo','$profession','$position','$city','$pincode','$country')";

$data =mysqli_query($conn,$query);

if($data)
{
    echo "dta inserted into data base";
}
else 
{ 
    echo "Failed";
}


?>
