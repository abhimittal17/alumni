<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin = true;
}
else{
  $loggedin = false;
}
echo 
'<div class="Logo_Container">
<div >
  <div class="Logo1_Container">
    <img src="./Imagehome/Logo.jpg" alt="" >
    <img src="./Imagehome/alumni.jpeg" alt="" >
  </div>
</div>
<div class="Logo_Container2 ">
  <div class="Logo_brand">
    <img src="./Imagehome/Pup.jpeg" alt="" style="height: 8.5vw;">
    <img src="./Imagehome/Pup_photo.png" alt="" style="height: 8.5vw;">
  </div>
</div>
</div>
<nav
  class="navbar navbar-expand-lg w-100 stick"
  style="background-color: #011d4c"
>
  <div class="container-fluid w-100">
    <a class="navbar-brand brand" href="./index.php" style="color: white"
      >Punjabi University Alumni</a
    >
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav navbar_container" style="width:100%">';
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        echo '
        </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php" style="color: white"
              >Home (ਮੁਖ ਪੰਨਾ)</a
            >
          </li>
          <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="impLinksDropdownMenuLink"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            style="color: white"
          >
           Alumni Members
          </a>
          <ul
            class="dropdown-menu"
            aria-labelledby="navbarDropdownMenuLink"
          >
            <li>
              <a class="dropdown-item" href="./table.php"
                >Already Existing Alumni</a
              >
            </li>
            <li>
              <a class="dropdown-item" href=""
                >New Alumni</a>
            </li>
          
          </ul>
        </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="impLinksDropdownMenuLink"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              style="color: white"
            >
              Important Links
            </a>
            <ul
              class="dropdown-menu"
              aria-labelledby="navbarDropdownMenuLink"
            >
              <li>
                <a class="dropdown-item" href="./Projects.php"
                  >Projects (ਪ੍ਰੋਜੈਕਟ)</a
                >
              </li>
              <li>
                <a class="dropdown-item" href="./GalleryCategories.php"
                  >Gallery (ਗੈਲਰੀ)</a
                >
              </li>
              <li>
                <a class="dropdown-item" href="./SearchPage.php"
                  >Search (ਖੋਜ)</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
        <a class="nav-link" href="./logout.php" style="color: white"
          >Log Out</a
        >';
      }
      else{
        echo'
        <li class="nav-item">
            <a class="nav-link" href="./index.php" style="color: white"
              >Home (ਮੁਖ ਪੰਨਾ)</a
            >
          </li>
          
        <li class="nav-item">
        <a class="nav-link" href="./RegisterPage.php" style="color: white"
          >Become A Member (ਮੈਂਬਰ ਬਣੋ)</a
        >
        </li>
        <li class="nav-item">
        <a class="nav-link" href="./login.php" style="color: white"
          >For Members (ਮੈਂਬਰ)</a
        >
        </li>
        
        <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle"
          href="#"
          id="impLinksDropdownMenuLink"
          role="button"
          data-bs-toggle="dropdown"
          aria-expanded="false"
          style="color: white"
        >
         Alumni Members
        </a>
        <ul
          class="dropdown-menu"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li>
            <a class="dropdown-item" href="./table.php"
              >Already Existing Alumni</a
            >
          </li>
          <li>
            <a class="dropdown-item" href=""
              >New Alumni</a>
          </li>
        
        </ul>
      </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="impLinksDropdownMenuLink"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              style="color: white"
            >
              Important Links
            </a>
            <ul
              class="dropdown-menu"
              aria-labelledby="navbarDropdownMenuLink"
            >
              <li>
                <a class="dropdown-item" href="./Projects.php"
                  >Projects (ਪ੍ਰੋਜੈਕਟ)</a
                >
              </li>
              <li>
                <a class="dropdown-item" href="./GalleryCategories.php"
                  >Gallery (ਗੈਲਰੀ)</a
                >
              </li>
              <li>
                <a class="dropdown-item" href="./SearchPage.php"
                  >Search (ਖੋਜ)</a
                >
              </li>
            </ul>
          </li>
        ';
      }
      echo'

        </ul>
      </div>
  </div>
</nav>
';
?>