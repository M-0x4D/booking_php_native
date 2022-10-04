<!DOCTYPE html>
<html>
    <head>
     <meta charset="utf-8">
     <title>Home Page</title>
     <link href="css/style.css" rel = "stylesheet" type="text/css">
     <script  src="js/script.js" ></script>
    </head>
    <body onload="ready()"  >
      <?php

session_start();

   if (isset($_SESSION["loggedin"])) {
  
    //header("location:".$_SERVER['PHP_SELF']);
    
   echo '<div  class="special">
   <a>Welcome Mr ' . $_SESSION["username"] . ' </a>
   <a href="logout.php"><span>logout</span></a>&nbsp;&nbsp;&nbsp;
   For emergency call<span>0388556621</span>
   </div>
    <header><img alt="logo" src="img/logo.png"/><span class="logo" ><b>Russel</b><i>Street Medical</i></span>
        <div class="empty" >&nbsp; </div><img class="marker"  alt="Map Marker"  src="img/marker.png" /><span class="adress" > 340 Russel Street,Melbourne<br /><i>Victoria, Australia</i> </span>             
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#AboutUs">About Us</a></li>
            <li><a href="#whoWeAre">Who We Are</a></li>
            <li><a href="#Services">Booking Area</a></li>
        </ul>
    </nav>
    <main>
        <div class="upeffect">
            <h1> Highest Quality of Care<br />in Melbourne </h1><span> Our primary focus is to provide the best possible care for each individual and their families. Our surgery has been styled to provide warm, friendly and professional environment</span><br /><br /><a href="#" class="color"  > View more</a><a href="#" class="gray">Call Us</a>
        </div>
        <div class="empty" >&nbsp; </div><img class="lefteffect" alt="doctor" src="img/3.png">
    </main>
    <section id="AboutUs">
        <h1 class="title">About Us</h1>
        <div class="noscroll"><img src="img/reception2.JPG" alt="reception">
            <p class="lefteffect">Russel Street Medical Opened in 2003 and is ideally  located in Melb CBD at 340 Russel Street Melbourne, VIC, 3000. It is within a small walking distance from Melbourne Central Station.</p>
        </div>
        <div class="noscroll">
            <p class="righteffect"> We consider our patients as a whole and offer medical care that seeks to find the perfect balance between mind and body. This approach allows us to provide comprehensive medical care.</p>
            <img src="img/reception.JPG" alt="reception">
        </div>
    </section>
    <section id="whoWeAre">
        <h1 class="bigtitle ">
            <span  class="upeffect">
            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTMiIGhlaWdodD0iMTUiIHZpZXdCb3g9IjAgMCAxMyAxNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik02LjMwMDAyIDE0LjRDNi4zMDAwMiAxNC4zIDYuMzAwMDIgMTQuMyA2LjMwMDAyIDE0LjRDNC4zMDAwMiAxMi43IDIuNCAxMS4xIDAuNSA5LjVDMC4zIDkuNCAwLjIgOS4xOTk5OCAwIDkuMDk5OThDMC42IDguNTk5OTggMS4xMDAwMSA4LjIwMDAxIDEuNzAwMDEgNy43MDAwMUMyLjkwMDAxIDguNzAwMDEgNC4wMDAwMSA5LjY5OTk5IDUuMjAwMDEgMTAuOEM1LjIwMDAxIDcuMTk5OTkgNS4yMDAwMSAzLjYgNS4yMDAwMSAwQzYuMDAwMDEgMCA2LjcgMCA3LjUgMEM3LjUgMy42IDcuNSA3LjE5OTk5IDcuNSAxMC44QzguNyA5Ljc5OTk5IDkuOCA4Ljc5OTk5IDExIDcuNzk5OTlDMTEuNiA4LjI5OTk5IDEyLjEgOC43MDAwMSAxMi43IDkuMjAwMDFDMTAuNiAxMC44IDguNDAwMDIgMTIuNiA2LjMwMDAyIDE0LjRaIiBmaWxsPSJibGFjayIvPgo8L3N2Zz4K" alt="downwards arrow icon">
            
                &nbsp; &nbsp; Who we are ? &nbsp; &nbsp;
                
          <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTMiIGhlaWdodD0iMTUiIHZpZXdCb3g9IjAgMCAxMyAxNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik02LjMwMDAyIDE0LjRDNi4zMDAwMiAxNC4zIDYuMzAwMDIgMTQuMyA2LjMwMDAyIDE0LjRDNC4zMDAwMiAxMi43IDIuNCAxMS4xIDAuNSA5LjVDMC4zIDkuNCAwLjIgOS4xOTk5OCAwIDkuMDk5OThDMC42IDguNTk5OTggMS4xMDAwMSA4LjIwMDAxIDEuNzAwMDEgNy43MDAwMUMyLjkwMDAxIDguNzAwMDEgNC4wMDAwMSA5LjY5OTk5IDUuMjAwMDEgMTAuOEM1LjIwMDAxIDcuMTk5OTkgNS4yMDAwMSAzLjYgNS4yMDAwMSAwQzYuMDAwMDEgMCA2LjcgMCA3LjUgMEM3LjUgMy42IDcuNSA3LjE5OTk5IDcuNSAxMC44QzguNyA5Ljc5OTk5IDkuOCA4Ljc5OTk5IDExIDcuNzk5OTlDMTEuNiA4LjI5OTk5IDEyLjEgOC43MDAwMSAxMi43IDkuMjAwMDFDMTAuNiAxMC44IDguNDAwMDIgMTIuNiA2LjMwMDAyIDE0LjRaIiBmaWxsPSJibGFjayIvPgo8L3N2Zz4K" alt="downwards arrow icon">
            </span>
          </h1>
          
        <div class="noscroll flex">
            <div class="card righteffect">
              <img src="img/pexels-pavel-danilyuk-8442283.jpg"/>     
                <h3>Dr. Mariana Michael</h3>
                <p>
                Mariana is a UK trained doctor, ahe graduated from the University of Oxford . she is passionate about providing quality care. She enjoys all araes of general practise and 
                has a special interest in womens health 
                </p>
                    
            </div>
            <div class="card righteffect">
              <img src="img/pexels-tima-miroshnichenko-6234600.jpg"/>     
                <h3>Dr. Ali  Mak</h3>
                <p>
  Ali Mak graduated from Melbourne University in 1987,he has completed his fellowship in the UK and obtained the Membership of the Royal College of General Practitioners 
  in UK.   </p>
                    
            </div>
            <div class="card righteffect">
              <img src="img/pexels-alexander-zvir-9062164.jpg"/>     
                <h3>Dr Madonna Shenouoda</h3>
                <p>
                  Dr Madonna has extensive experience in general practise, she has worked with people from different backgrounds
                  she has graduated from the University of Monash and has a past work experince in Monash Health

             </p>
                    
            </div>
          </div>   
      </section>
    <section id="Partnerships">
        <h1>Partnerships</h1>
        <table>
            <tr>
                <th>
                    Consultation
                </th>
                <th>
                    Normal Fee
                </th>
                <th>
                    Uni Member Fee
                </th>
                <th>
                    Medicare Rebate
                </th>
            </tr>
            <tr>
                <td>
                    Standard
                </td>
                <td>
                    $85.00
                </td>
                <td>
                    $60.00
                </td>
                <td>
                    $39.75
                </td>
            </tr>
            <tr>
                <td>
                    Long Or Complex
                </td>
                <td>
                    $130.00
                </td>
                <td>
                    $91.00
                </td>
                <td>
                    $76.95
                </td>
            </tr>
        </table>
    </section>
    <section id="Services">
        <div style="background: #000;">
            <div class="video-background">
                <video id="player" preload="none" poster="1.jpg" autoplay muted loop class="video" playinline="">
                    <source src="img/1.webm" type="video/webm">
                </video>
                <div class="content"> 
                    <span>
                        Please use online booking system to book Vax appointmnets and blood tests.
                    </span>
                    <a href="booking.php">
                    <div class="Checkbutton"><div> Book an Appointment</div> </div>
                    </a>

                </div>
                 
            </div>

        </div>

    </section>
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
  </div>
' ;
    //die();
  }
  else {
    header("location:"."login.php");
  }

   ?>
      
      
       
      
        
     












    </body>











</html>