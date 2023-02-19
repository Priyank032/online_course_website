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
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Our Courses</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Courses</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== COURSES PART START ======-->
    <?php  
    // Import the file where we defined the connection to Database.     
    
        $per_page_record = 6;  // Number of entries to show in a page.   
        // Look for a GET variable page if not found default is 1.        
        if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
      }    

      $start_from = ($page-1) * $per_page_record;     
      $query = "SELECT * FROM courses LIMIT $start_from, $per_page_record";     
      $rs_result = mysqli_query ($conn, $query);    
      ?>    
      <section id="courses-part" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="courses-top-search">
                        <ul class="nav float-left" id="myTab" role="tablist">

                            <li class="nav-item">Our Popular Courses</li>
                        </ul> <!-- nav -->
                        
                        <div class="courses-search float-right">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button type="button"><i class="fa fa-search"></i></button>
                            </form>
                        </div> <!-- courses search -->
                    </div> <!-- courses top search -->
                </div>
            </div> <!-- row -->
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                <div class="row">
                    <?php   
                    while( $row=mysqli_fetch_array($rs_result))
                        { ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="singel-course mt-30">
                                    <div class="thum">
                                        <div class="image">
                                            <?php echo" <img height=275 width=150 src='../course_img/$row[2]' alt='Course'>"?>
                                        </div>
                                        <div class="price">
                                            <span><?php echo $row['cfees']."&#8377"; ?></span>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>(20 Reviws)</span>
                                        <a href="#"><h4> <?php echo $row['cname']; ?></h4></a>
                                        <h6 style="margin-top: -25px;">Duration: <?php echo $row['cdur']." month"; ?></h6>
                                        
                                        <div class="course-teacher">
                                            <div class="thum">
                                                <a href="#"><img src="images/course/teacher/t-1.jpg" alt="teacher"></a>
                                            </div>
                                            <div class="name">
                                                <a href="#"><h6>Mark anthem</h6></a>
                                            </div>
                                            <div class="admin">
                                                <ul>
                                                    <form action="single_course.php" method="post">
                                            <button class="btn btn-warning text-white font-weight-bold" name="submit" value="<?php echo $row['cid'];?>">View Course</button>
                                        </form>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- singel course -->
                            </div>
                            <?php
                        }
                        ?>  
                    </div> <!-- row -->
                </div>
                
            </div> <!-- tab content -->
            <style>.pagination {  
               text-align: center; 
           }   
           .pagination a {   
            font-weight:bold;   
            font-size:18px;   
            color: black;   
            float: left;   
            padding: 8px 16px;   
            text-decoration: none;   

        }   
        .pagination a.active {   
            background-color: #ffc600;
            border-radius: 25px;   
        }   
        .pagination a:hover:not(.active) {   
            background-color: #ffc600; 
            border-radius: 25px;  
        }   
    </style>   
    <div class="row">
        <div class="col-lg-12">
            <nav class="courses-pagination mt-50">
                <ul class="pagination justify-content-center">
                 <?php  
                 $query = "select count(*) from courses";     
                 $rs_result = mysqli_query($conn, $query);     
                 $row = mysqli_fetch_row($rs_result);     
                 $total_records = $row[0];     

                 echo "</br>";     
        // Number of pages required.   
                 $total_pages = ceil($total_records / $per_page_record);     
                 $pagLink = "";       

                 if($page>=2){   
                    echo "<a href='courses.php?page=".($page-1)."'><i class='fa fa-angle-left'></i>    Prev   </a>";

                }       

                for ($i=1; $i<=$total_pages; $i++) {   
                  if ($i == $page) {   
                      $pagLink .= "<a class = 'active' href='courses.php?page="  
                      .$i."'>".$i." </a>";   
                  }               
                  else  {   
                      $pagLink .= "<a href='courses.php?page=".$i."'>   
                      ".$i." </a>";     
                  }   
              };     
              echo $pagLink;   

              if($page<$total_pages){   
                echo "<a href='courses.php?page=".($page+1)."'>  Next <i class='fa fa-angle-right'></i> </a>";   
            }   

            ?>    
        </ul>
    </nav>  <!-- courses pagination -->
</div>
</div>  <!-- row -->
</div> <!-- container -->
</section>

<!--====== COURSES PART ENDS ======-->

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
