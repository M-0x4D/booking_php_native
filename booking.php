<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Booking Page</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/booking.css" rel="stylesheet" type="text/css">
        <script src="js/script.js"></script>
    </head>
    <body onload="ready()">

    <?php
    session_start();
    if (isset($_SESSION["loggedin"])){
      

    echo ' <div  class="special">
    <a>Welcome Mr ' . $_SESSION["username"] . ' </a>
   <a href="logout.php"><span>logout</span></a>&nbsp;&nbsp;&nbsp;
    For emergency call<span>0388556621</span></div>
      <header><img alt="logo" src="img/logo.png"/><span class="logo" ><b>Russel</b><i>Street Medical</i></span>
          <div class="empty" >&nbsp; </div><img class="marker"  alt="Map Marker"  src="img/marker.png" /><span class="adress" > 340 Russel Street,Melbourne<br /><i>Victoria, Australia</i> </span>             
      </header>
      <nav>
          <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#AboutUs">About Us</a></li>
              <li><a href="#whoWeAre">Who We Are</a></li>
              <li><a href="bookingarea.php">Booking Area</a></li>
          </ul>
      </nav>
          <main id="booking">
              <form action="booking_server.php" method="post">
                  <h1>Booking</h1>
                 
                  <div class="form-group">
                      <label for="Pateint_Id">Patient Id:</label>
                      <input name="Pateint_Id" id="Pateint_Id" type="text"
                      oninput="upperCase(this)" onchange="upperCase(this)" pattern="[A-Z][A-Z][0-9]+[A-Z]"/>
                  </div>
                  <div class="form-group">
                      <label for="date">Date:</label>
                      <input name="date" id="date" type="date"/>
                  </div>
                  <div class="flex">
                      <div class="empty"></div>

                      <div class="pill-container">
                          <div class="pill-group">
                              <input type="checkbox" id="time9_12" name="time[]" value="9_12">
                              <label class="box time9_12" for="time9_12">9am -12pm</label>

                              <input type="checkbox" id="time12_3" name="time[]" value="12_3">
                              <label class="box time12_3" for="time12_3">12pm -3pm</label>

                              <input type="checkbox" id="time3_5" name="time[]" value="3_5">
                              <label class="box time3_5" for="time3_5">3pm -5pm</label>
                          </div>
                      </div> 
                  </div>
                  <div class="form-group">
                      <label for="cars">Reason:</label>

                      <select name="reason" id="reason" onchange="changeReason()">
                          <option value="" selected disabled hidden>reason</option>
                          <option value="Child Vax Shots" >Child Vax Shots</option>
                          <option value="Flu Shots" >Flu Shots</option>
                          <option value="Covid Shots" >Covid Shots</option>
                          <option value="Blood Test" >Blood Test</option>
                      </select>
                  </div>
                  <div class="flex">
                      <div class="empty label3"></div>

                      <div id="info"></div>

                  </div>

                  <div class="flex">
                      <div class="empty label"></div>

                      <input type="submit"></input>
                      <button formnovalidate>Submit without validation</button>

                     <a href="index.html">
                      <button>Home Page</button>
                     </a>
                      
                  </div>
                  
              </form>

          <!-- Footer Section -->
   </main>
   <!-- Footer Section -->
  <div class="footer__container">
    <div class="footer__links">
      <div class="footer__link--wrapper">
      
        <div class="footer__link--items">
          <h2>Contact</h2>
          <a href="/">Email</a> <a href="/">Phone</a>
          <a href="/">Location</a>
        </div>
      </div>
      <div class="footer__link--wrapper">
        <div class="footer__link--items">
          <h2>Services</h2>
          <a href="/">Standared Consulations </a> <a href="/">Pathology</a>
          <a href="/">Physiotherapy</a>
        </div>
        <div class="footer__link--items">
          <h2>Social Media</h2>
          <a href="/">Instagram</a> <a href="/">Facebook</a>
          <a href="/">Youtube</a> <a href="/">Twitter</a>
        </div>
      </div>
    </div>
    <section class="social__media">
      <div class="social__media--wrap">
        <div class="footer__logo">
          <a href="/" id="footer__logo">Russel Street Medical </a>
        </div>
        <p class="website__rights">© Russel Medical 2022. All rights reserved</p>
        <div class="social__icons">
          <a href="/" class="social__icon--link" target="_blank"
            ><i class="fab fa-facebook"></i
          ></a>
          <a href="/" class="social__icon--link"
            ><i class="fab fa-instagram"></i
          ></a>
          <a href="/" class="social__icon--link"
            ><i class="fab fa-youtube"></i
          ></a>
          <a href="/" class="social__icon--link"
            ><i class="fab fa-linkedin"></i
          ></a>
          <a href="/" class="social__icon--link"
            ><i class="fab fa-twitter"></i
          ></a>
        </div>
      </div>
    </section>
  </div>';

    }
    else {
      header("location:"."login.php");

    }
    
    
    ?>
       

       
    </body>

</html