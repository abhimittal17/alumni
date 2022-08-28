class Footer extends HTMLElement {
  constructor() {
    // Always call super first in constructor
    super();
  }

  connectedCallback() {
    this.innerHTML = `
    <footer class="page-footer font-small indigo" style="background-color: #011D4C; margin-top: auto;">

    <!-- Footer Links -->
    <div class="container  text-md-left" style="width:100%;">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-6 mx-auto">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3" style="color: #EAB308;">Address</h5>
  
          <ul class="list-unstyled" style="color: white;">
            <li> Punjabi University, Patiala </li>
            <li> NH 64, Urban Estate, Phase II </li>
            <li> Patiala, Punjab (147002) </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-6 mx-auto">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3" style="color: #EAB308;">Contact</h5>
  
          <ul class="list-unstyled" style="color: white;">
            <li><a href="mailto:dean.alumnirelations@gmail.com" style="color: white; text-decoration: none;">Email: dean.alumnirelations@gmail.com</a></li>
            <li><a href="tel:9501035435" style="color: white; text-decoration: none;"> Phone:9501035435</a></li>
            <li><a href="https://goo.gl/maps/QW4CiEBtwEEN3Wzy6" target="_blank" style="color: white; text-decoration: none;"> By Map</a> </li>
          </ul>
  
        </div>
        
  
      </div>
      
  
    </div>
    
    
  
    <div style="font-size: 0.5rem; text-align: right; padding:25px 50px;">
      
    
    <a href="https://www.facebook.com/PbiUniPatiala/" target="_blank"><i class="fa-brands fa-facebook fa-3x " style="color: bisque;padding: 0 0.25rem;"></i></a>
    <a href="https://twitter.com/PbiUniPatiala" target="_blank"><i class="fa-brands fa-twitter fa-3x" style="color: bisque;padding: 0 0.25rem;" ></i></a>
    <a href="https://www.linkedin.com/school/punjabi-university/" target="_blank"><i class="fa-brands fa-linkedin fa-3x" style="color: bisque;padding: 0 0.25rem;"></i></a>
    <a href="https://www.youtube.com/channel/UCUzK9LJkEy9WVfbbqgSOSeA" target="_blank"><i class="fa-brands fa-youtube fa-3x" style="color: bisque;padding: 0 0.25rem;"></i></a>
  
  
  </div>
    <p style="color:white;text-align:center"> © 2022 Copyright Alumni Association| All Rights Reserved </p>
  </footer>
  <!-- Footer -->`;
  }
}
customElements.define("footer-component", Footer);