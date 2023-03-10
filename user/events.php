<?php
include('admin_conn.php');
session_start();
?>
<!doctype html>
<html lang="en">
<head>

  <!--====== Required meta tags ======-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--====== Title ======-->
  <title>Edubin - the best learning platform</title>

  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <!--====== Slick css ======-->
  <link rel="stylesheet" href="css/slick.css">
<link rel="stylesheet" href="css/view.css">
  <!--====== Animate css ======-->
  <link rel="stylesheet" href="css/animate.css">

  <!--====== Nice Select css ======-->
  <link rel="stylesheet" href="css/nice-select.css">

  <!--====== Nice Number css ======-->
  <link rel="stylesheet" href="css/jquery.nice-number.min.css">

  <!--====== Magnific Popup css ======-->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!--====== Bootstrap css ======-->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!--====== Fontawesome css ======-->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!--====== Default css ======-->
  <link rel="stylesheet" href="css/default.css">

  <!--====== Style css ======-->
  <link rel="stylesheet" href="css/style.css">

  <!--====== Responsive css ======-->
  <link rel="stylesheet" href="css/responsive.css">
  
  
</head>

<body>

 <?php 
 include('header.php');
 ?>

 <!--====== SEARCH BOX PART START ======-->

 <div class="search-box">
  <div class="serach-form">
    <div class="closebtn">
      <span></span>
      <span></span>
    </div>
    <form action="#">
      <input type="text" placeholder="Search by keyword">
      <button><i class="fa fa-search"></i></button>
    </form>
  </div> <!-- serach form -->
</div>

<!--====== SEARCH BOX PART ENDS ======-->

<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-3.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-banner-cont">
          <h2>Events</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Events</li>
            </ol>
          </nav>
        </div>  <!-- page banner cont -->
      </div>
    </div> <!-- row -->
  </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->
<section id="event-singel" class="pt-80 pb-20 gray-bg">
  <div class="container">
    <div class="events-area">
      <div class="row">
        <div class="col-lg-8">
          <div class="events-left">
            <h3>Campus clean workshop</h3>
            <a href="#"><span><i class="fa fa-calendar"></i> 2 December 2018</span></a>
            <a href="#"><span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span></a>
            <a href="#"><span><i class="fa fa-map-marker"></i> Rc Auditorim</span></a>
            <img src="images/event/singel-event/se-1.jpg" alt="Event">
            <p>Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam</p>
          </div> <!-- events left -->
        </div>
        <div class="col-lg-4">
          <div class="events-right">
            <div class="events-coundwon bg_cover" data-overlay="8" style="background-image: url(images/event/singel-event/coundown.jpg)">
              <div data-countdown="2020/03/12"></div>
              <div class="events-coundwon-btn pt-30">
                <a href="#" class="main-btn">Book Your Seat</a>
              </div>
            </div> <!-- events coundwon -->
            <div class="events-address mt-30">
              <ul>
                <li>
                  <div class="singel-address">
                    <div class="icon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="cont">
                      <h6>Start Time</h6>
                      <span>12:00 Am</span>
                    </div>
                  </div> <!-- singel address -->
                </li>
                <li>
                  <div class="singel-address">
                    <div class="icon">
                      <i class="fa fa-bell-slash"></i>
                    </div>
                    <div class="cont">
                      <h6>Finish Time</h6>
                      <span>05:00 Am</span>
                    </div>
                  </div> <!-- singel address -->
                </li>
                <li>
                  <div class="singel-address">
                    <div class="icon">
                      <i class="fa fa-map"></i>
                    </div>
                    <div class="cont">
                      <h6>Address</h6>
                      <span>Street Park ,America</span>
                    </div>
                  </div> <!-- singel address -->
                </li>
              </ul>
              <div id="contact-map" class="mt-25"></div> <!-- Map -->
            </div> <!-- events address -->
          </div> <!-- events right -->
        </div>
      </div> <!-- row -->
    </div> <!-- events-area -->
  </div> <!-- container -->
</section>
<!--====== EVENTS PART START ======-->

<section id="event-page" class="pt-20 pb-60 gray-bg">
  <div class="container">
   <div class="row">
     <div class="col-lg-12">
       <div class="singel-event-list mt-30">
         <div class="event-thum">
           <img src="images/event/e-1.jpg" alt="Event">
         </div>
         <div class="event-cont">
           <span><i class="fa fa-calendar"></i> 2 December 2018</span>
           <a href="#"><h4>Tech Summit</h4></a>
           <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
           <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
           <p>Nam nec tellus a odio tincidunt auctor a ornare odionon mauris itae erat conuat</p>
         </div>
       </div>
     </div>

   </div> <!-- row -->
 </div></section>


 <!--====== EVENTS PART ENDS ======-->

</div> <!-- container -->
</section>

<!--====== EVENTS PART ENDS ======-->

<?php 
include('footer.php');
?>  

<!--====== BACK TO TP PART START ======-->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!--====== BACK TO TP PART ENDS ======-->

<!--====== jquery js ======-->
<script src="js/vendor/modernizr-3.6.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>

<!--====== Bootstrap js ======-->
<script src="js/bootstrap.min.js"></script>

<!--====== Slick js ======-->
<script src="js/slick.min.js"></script>

<!--====== Magnific Popup js ======-->
<script src="js/jquery.magnific-popup.min.js"></script>

<!--====== Counter Up js ======-->
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>

<!--====== Nice Select js ======-->
<script src="js/jquery.nice-select.min.js"></script>

<!--====== Nice Number js ======-->
<script src="js/jquery.nice-number.min.js"></script>

<!--====== Count Down js ======-->
<script src="js/jquery.countdown.min.js"></script>

<!--====== Validator js ======-->
<script src="js/validator.min.js"></script>

<!--====== Ajax Contact js ======-->
<script src="js/ajax-contact.js"></script>

<!--====== Main js ======-->
<script src="js/main.js"></script>

<!--====== Map js ======-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
<script src="js/map-script.js"></script>

</body>
</html>
