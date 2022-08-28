
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    echo '
    <script>
    window.location.href="login.php?redirect=true";
    </script>';
}
?>


<?php
  include '_dbconnect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   
   <!-- Navbar -->
   <link rel="stylesheet" href="./Navbar.css">
   <script src="./app.js" ></script>
   <script src="https://kit.fontawesome.com/c151818ffe.js" crossorigin="anonymous"></script>
    <title>Search Page</title>
    <link rel="stylesheet" href="./css/SearchPage.css">
    <link rel="stylesheet" href="./app.css">

</head>
<body>
    <!-- Team Members
      Ansh Aneja
      Jessica Dhiman
      Garvit Dudeja
      Abhi Mittal
      Tania Bansal
      Ashima Jindal
      Tarun Sharma
    -->
<?php
    require 'partials/_nav.php';
    ?>
    <form action="./SearchPage.php" method="POST">
    <div class="search-bar__main bg-white">
        <div class="section__search-bar ">
            <h1 class="heading__white">Search</h1>
            <h1 class="sub-heading__white ">Search from thousands of Alumnis</h1>
            
                <div class="container__search-bar">
                        <input type='text' class="search-bar" name="Search-Name" id="search-bar" />
                        <button class="" type='submit' style="border:none;" >
                        <span class="search-icon" type="submit">
                            <i class="fa fa-search"></i>
                        </span>
                        </button>
                    <!-- <div onClick={searchResultsHandler} class="flex justify-center items-center bg-black w-11 rounded-r">
                        <BiSearchAlt class="text-white h-5 w-5 cursor-pointer"/>
                    </div> -->
                </div>
        </div>
    </div>
    
    
    <!-- mobile filter button -->
    <button class="button__primary ms-2 mt-2 filter-button-mobile " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        Filters
      </button>
      
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header d-flex justify-content-end mt-2">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <h5>Filters</h5>
            <div class="filter-buttons__container">
                <button class="button__primary " type="submit">Apply</button>
            </div>
            <div class="filters__container">
                <div class="filter-main" >
                    <div class="filter" onclick="filterAccordion(this)" >
                        <h5>Registration No.</h5>
                        <i class="caret fa fa-solid fa-caret-up fa-lg fa-rotate-180"></i>
                    </div>
                    <div class="filter-accordion d-flex flex-column gap-1">
                        <input type="text" name="RegNo" id="RegNo" value="" placeholder="Registration No."/>     
                    </div>
                    
                </div>
                <div class="filter-main">
                    <div class="filter"  onclick="filterAccordion(this)" >
                        <h5>Education</h5>
                        <i class="caret fa fa-solid fa-caret-up fa-lg"></i>
                    </div>
                    <div class="filter-accordion hide-accordion flex-column gap-1">
                        
                        <input type="text" name="YearOfJoining" id="YearOfJoining" value="" placeholder="Year of Joining"/>     
                        <input type="text" name="YearOfLeaving" id="YearOfLeaving" value="" placeholder="Year of Leaving"/>     
                        <select  id="Department" name="Department"  class="form-select form-select" aria-label=".form-select example">
                            <option value="" selected >Department</option>
                                <?php 
                                    $query = "SELECT DISTINCT `Department` FROM `alumnidata`;";
                                    $result = $conn->query($query); 
                                    if ($result->num_rows > 0) 
                                    {
                                        while($row = $result->fetch_assoc())
                                        {
                                            $departmentIterator = $row["Department"];
                                            ?>
                                            <option value= "<?php echo $departmentIterator?>" ><?php echo $departmentIterator?> </option>;
                                            <?php
                                        }
                                    }
                                ?>
                        </select>

                        <select  id="Degree" name="Degree" class="form-select form-select" aria-label=".form-select example">
                           <option value="" selected  >Degree</option>
                                <?php 
                                    $query = "SELECT DISTINCT `Degree` FROM `alumnidata`;";
                                    $result = $conn->query($query); 
                                    if ($result->num_rows > 0) 
                                    {
                                        while($row = $result->fetch_assoc())
                                        {
                                            $degreeIterator = $row["Degree"];
                                            ?>
                                            <option value= "<?php echo $degreeIterator?>" ><?php echo $degreeIterator?> </option>;
                                            <?php
                                        }
                                    }

                                ?>
                        </select>
                          
                    </div>
                    
                </div>
                <div class="filter-main"  >
                    <div class="filter" onclick="filterAccordion(this)" >
                        <h5>Location</h5>
                        <i class="caret fa fa-solid fa-caret-up fa-lg"></i>
                    </div>
                    <div class="filter-accordion hide-accordion flex-column gap-1">
                        
                        <select id="country" name="Country"   class="form-select form-select" aria-label=".form-select example">
                            <option value="" selected >Country</option>
                            <?php 
                                $query = "SELECT DISTINCT `Country` FROM `alumnidata`;";
                                $result = $conn->query($query); 
                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc())
                                    {
                                        $countryIterator = $row["Country"];
                                        ?>
                                        <option value= "<?php echo $countryIterator?>" ><?php echo $countryIterator?> </option>;
                                        <?php
                                    }
                                }

                            ?>
                        </select>
                        <select  id="State" name="State" class="form-select form-select" aria-label=".form-select example">
                        <option value="" selected >State</option>
                            <?php 
                                $query = "SELECT DISTINCT `State` FROM `alumnidata`;";
                                $result = $conn->query($query); 
                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc())
                                    {
                                        $stateIterator = $row["State"];
                                        ?>
                                        <option value= "<?php echo $stateIterator?>" ><?php echo $stateIterator?> </option>;
                                        <?php
                                    }
                                }

                            ?>
                        </select>
                        
                        
                        <select  id="City" name="City"  class="form-select form-select" aria-label=".form-select example">
                            <option value="">City</option>
                                <?php 
                                    $query = "SELECT DISTINCT `City` FROM `alumnidata`;";
                                    $result = $conn->query($query); 
                                    if ($result->num_rows > 0) 
                                    {
                                        while($row = $result->fetch_assoc())
                                        {
                                            $cityIterator = $row["City"];
                                            ?>
                                            <option value= "<?php echo $cityIterator?>" ><?php echo $cityIterator?> </option>;
                                            <?php
                                        }
                                    }

                                ?>
                        </select>
                          
                    </div>
                    
                </div>
                <div class="filter-main" >
                    <div class="filter" onclick="filterAccordion(this)" >
                        <h5>Employment</h5>
                        <i class="caret fa fa-solid fa-caret-up fa-lg"></i>
                    </div>
                    <div class="filter-accordion hide-accordion flex-column gap-1">
                        <select  id="Company" name="Company"  class="form-select form-select" aria-label=".form-select example">
                            <option value="" selected >Company</option>
                            <?php 
                                $query = "SELECT DISTINCT `Company` FROM `alumnidata`;";
                                $result = $conn->query($query); 
                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc())
                                    {
                                        $companyIterator = $row["Company"];
                                        ?>
                                        <option value= "<?php echo $companyIterator?>" ><?php echo $companyIterator?> </option>;
                                        <?php
                                    }
                                }
                            ?>
                        </select>
                        <select  id="Position" name="Position" class="form-select form-select" aria-label=".form-select example">
                            <option value="" selected >Position</option>
                                <?php 
                                    $query = "SELECT DISTINCT `Position` FROM `alumnidata`;";
                                    $result = $conn->query($query); 
                                    if ($result->num_rows > 0) 
                                    {
                                        while($row = $result->fetch_assoc())
                                        {
                                            $positionIterator = $row["Position"];
                                            ?>
                                            <option value= "<?php echo $positionIterator?>" ><?php echo $positionIterator?> </option>;
                                            <?php
                                        }
                                    }

                                ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
   
    <!-- search-results -->
    <div class="section__search-results">
        <div class="search-results__filter-box ">
            <h5>Filters</h5>
            <div class="filter-buttons__container">
                <button class="button__primary " type="submit">Apply</button>
            </div>
            <div class="filters__container">
                <div class="filter-main" >
                    <div class="filter" onclick="filterAccordion(this)" >
                        <h5>Registration No.</h5>
                        <i class="caret fa fa-solid fa-caret-up fa-lg fa-rotate-180"></i>
                    </div>
                    <div class="filter-accordion d-flex flex-column gap-1">
                        <input type="text" name="RegNo" id="RegNo" value="" placeholder="Registration No."/>     
                    </div>
                    
                </div>
                <div class="filter-main">
                    <div class="filter"  onclick="filterAccordion(this)" >
                        <h5>Education</h5>
                        <i class="caret fa fa-solid fa-caret-up fa-lg"></i>
                    </div>
                    <div class="filter-accordion hide-accordion flex-column gap-1">
                        
                        <input type="text" name="YearOfJoining" id="YearOfJoining" value="" placeholder="Year of Joining"/>     
                        <input type="text" name="YearOfLeaving" id="YearOfLeaving" value="" placeholder="Year of Leaving"/>     
                        <select  id="Department" name="Department"  class="form-select form-select" aria-label=".form-select example">
                            <option value="" selected >Department</option>
                                <?php 
                                    $query = "SELECT DISTINCT `Department` FROM `alumnidata`;";
                                    $result = $conn->query($query); 
                                    if ($result->num_rows > 0) 
                                    {
                                        while($row = $result->fetch_assoc())
                                        {
                                            $departmentIterator = $row["Department"];
                                            ?>
                                            <option value= "<?php echo $departmentIterator?>" ><?php echo $departmentIterator?> </option>;
                                            <?php
                                        }
                                    }
                                ?>
                        </select>

                        <select  id="Degree" name="Degree" class="form-select form-select" aria-label=".form-select example">
                           <option value="" selected  >Degree</option>
                                <?php 
                                    $query = "SELECT DISTINCT `Degree` FROM `alumnidata`;";
                                    $result = $conn->query($query); 
                                    if ($result->num_rows > 0) 
                                    {
                                        while($row = $result->fetch_assoc())
                                        {
                                            $degreeIterator = $row["Degree"];
                                            ?>
                                            <option value= "<?php echo $degreeIterator?>" ><?php echo $degreeIterator?> </option>;
                                            <?php
                                        }
                                    }

                                ?>
                        </select>
                          
                    </div>
                    
                </div>
                <div class="filter-main"  >
                    <div class="filter" onclick="filterAccordion(this)" >
                        <h5>Location</h5>
                        <i class="caret fa fa-solid fa-caret-up fa-lg"></i>
                    </div>
                    <div class="filter-accordion hide-accordion flex-column gap-1">
                        
                        <select id="country" name="Country"   class="form-select form-select" aria-label=".form-select example">
                            <option value="" selected >Country</option>
                            <?php 
                                $query = "SELECT DISTINCT `Country` FROM `alumnidata`;";
                                $result = $conn->query($query); 
                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc())
                                    {
                                        $countryIterator = $row["Country"];
                                        ?>
                                        <option value= "<?php echo $countryIterator?>" ><?php echo $countryIterator?> </option>;
                                        <?php
                                    }
                                }

                            ?>
                        </select>
                        <select  id="State" name="State" class="form-select form-select" aria-label=".form-select example">
                        <option value="" selected >State</option>
                            <?php 
                                $query = "SELECT DISTINCT `State` FROM `alumnidata`;";
                                $result = $conn->query($query); 
                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc())
                                    {
                                        $stateIterator = $row["State"];
                                        ?>
                                        <option value= "<?php echo $stateIterator?>" ><?php echo $stateIterator?> </option>;
                                        <?php
                                    }
                                }

                            ?>
                        </select>
                        
                        
                        <select  id="City" name="City"  class="form-select form-select" aria-label=".form-select example">
                            <option value="">City</option>
                                <?php 
                                    $query = "SELECT DISTINCT `City` FROM `alumnidata`;";
                                    $result = $conn->query($query); 
                                    if ($result->num_rows > 0) 
                                    {
                                        while($row = $result->fetch_assoc())
                                        {
                                            $cityIterator = $row["City"];
                                            ?>
                                            <option value= "<?php echo $cityIterator?>" ><?php echo $cityIterator?> </option>;
                                            <?php
                                        }
                                    }

                                ?>
                        </select>
                          
                    </div>
                    
                </div>
                <div class="filter-main" >
                    <div class="filter" onclick="filterAccordion(this)" >
                        <h5>Employment</h5>
                        <i class="caret fa fa-solid fa-caret-up fa-lg"></i>
                    </div>
                    <div class="filter-accordion hide-accordion flex-column gap-1">
                        <select  id="Company" name="Company"  class="form-select form-select" aria-label=".form-select example">
                            <option value="" selected >Company</option>
                            <?php 
                                $query = "SELECT DISTINCT `Company` FROM `alumnidata`;";
                                $result = $conn->query($query); 
                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc())
                                    {
                                        $companyIterator = $row["Company"];
                                        ?>
                                        <option value= "<?php echo $companyIterator?>" ><?php echo $companyIterator?> </option>;
                                        <?php
                                    }
                                }
                            ?>
                        </select>
                        <select  id="Position" name="Position" class="form-select form-select" aria-label=".form-select example">
                            <option value="" selected >Position</option>
                                <?php 
                                    $query = "SELECT DISTINCT `Position` FROM `alumnidata`;";
                                    $result = $conn->query($query); 
                                    if ($result->num_rows > 0) 
                                    {
                                        while($row = $result->fetch_assoc())
                                        {
                                            $positionIterator = $row["Position"];
                                            ?>
                                            <option value= "<?php echo $positionIterator?>" ><?php echo $positionIterator?> </option>;
                                            <?php
                                        }
                                    }

                                ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <div id="search-results-box" class="search-results-box">
        <?php
        
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $nameQuery = "";
            $regNo = "";
            $department = "";
            $degree = "";
            $country = "";
            $state = "";
            $city = "";
            $company = "";
            $position = "";
            $yearOfJoining = "";
            $yearOfLeaving = "";
            if(isset($_POST["Search-Name"])){
                $nameQuery = $_POST["Search-Name"];
            }
            if(isset($_POST["RegNo"])){
                $regNo = $_POST["RegNo"];
            }
            if(isset($_POST["YearOfJoining"])){
                $yearOfJoining = $_POST["YearOfJoining"];
            }
            if(isset($_POST["YearOfLeaving"])){
                $yearOfLeaving = $_POST["YearOfLeaving"];
            }
            if(isset($_POST["Department"])){
                $department = $_POST["Department"];
            }
            if(isset($_POST["Degree"])){
                $degree = $_POST["Degree"];
            }
            if(isset($_POST["Country"])){
                $country = $_POST["Country"];
            }
            if(isset($_POST["State"])){
                $state = $_POST["State"];
            }
            if(isset($_POST["City"])){
                $city = $_POST["City"];
            }
            if(isset($_POST["Company"])){
                $company = $_POST["Company"];
            }
            if(isset($_POST["Position"])){
                $position = $_POST["Position"];
            }
            $query = "SELECT * FROM `alumnidata` WHERE `Full Name` like '%$nameQuery%'
            AND `Registration No.` LIKE '%$regNo%'
            AND `Department` LIKE '%$department%'
            AND `Degree` LIKE '%$degree%' 
            AND `Country` LIKE '%$country%'
            AND `State` LIKE '%$state%'
            AND `City` LIKE '%$city%'
            AND `Company` LIKE '%$company%'
            AND `Position` LIKE '%$position%'
            AND `Year of joining` LIKE '%$yearOfJoining%'
            AND `Year of leaving` LIKE '%$yearOfLeaving%'
            ;";
            $result = $conn->query($query); 
        }
        else {
            $query = "SELECT * FROM `alumnidata`;";
  
            // FETCHING DATA FROM DATABASE
            $result = $conn->query($query); 
        }

        if ($result->num_rows > 0) 
        {
        // OUTPUT DATA OF EACH ROW
            while($row = $result->fetch_assoc())
            {
                ?>
                <div class="user-profile-card">
                    <div class="profile-card-image-container">
                        <img class="profile-card-image" src="./images/profile.jpeg"/>
                    </div>
                    <h5 ><?php echo $row["Full Name"]?></h3>
                    <h5 class="search-profile-card-position"><?php echo $row["Position"] ?></h5>
                    <h5 class="search-profile-card-position"><?php echo "at " . $row["Company"] ?></h6>
                    <h6 class="search-profile-card-location"><?php echo $row["City"] . " , " . $row["Country"]?></h6>
                    <a class="button__primary" href= <?php echo " 'mailto:" . $row["Email"] . " ' "  ?> >Message</a>
                </div>
            <?php
            }
        }
        else {
            echo "No results found";
        }
        
            ?>
            </div>
    </div>
    <footer-component></footer-component>
    <script src="./js/SearchPage.js"></script>
    
</body>
</html>