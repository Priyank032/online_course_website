<?php
session_start();
if(!isset($_SESSION['uid']))
{
  header("Location:login.php");
}
include('admin_conn.php');
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
    <link rel="stylesheet" href="css/view.css">
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

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

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="courses.php">Courses</a></li>
                                <!-- <li class="breadcrumb-item active" aria-current="page"> <?php echo $row['cname']; ?></li> -->
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    <?php
    
    $uid=$_SESSION['uid'];
    $sql="select cid,status from enrolled_course where uid=$uid";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "<h6>You have Not enrolled in any course....</h6>";
       
    }

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
           
<div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
  If your enrolled course is not here Don't worry After approval of admin your course will be appear here
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                <div class="row">
                    <?php   
                    while($row=mysqli_fetch_array($result))
                    {
                        $cid=$row[0];
                        $status=$row[1];
                        if($status=="approved")
                        {

                         $sqql="select * from courses where cid=$cid";
                         $res=mysqli_query($conn,$sqql);
                         while( $row1=mysqli_fetch_array($res))
                         {
                             ?>
                             <div class="col-lg-4 col-md-6">
                                <div class="singel-course mt-30">
                                    <div class="thum">
                                        <div class="image">
                                            <?php echo" <img height=275 width=150 src='../course_img/$row1[2]' alt='Course'>"?>
                                        </div>
                                        <div class="price">
                                            <span><?php echo $row1['cfees']."&#8377"; ?></span>
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
                                        <a href="#"><h4> <?php echo $row1['cname']; ?></h4></a>
                                        <h6 style="margin-top: -25px;">Duration: <?php echo $row1['cdur']." month"; ?></h6>
                                        
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
                                                        <button class="btn btn-warning text-white font-weight-bold" name="submit" value="<?php echo $row1['cid'];?>">View Course</button>
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- singel course -->
                            </div>
                            <?php
                        }
                    }
                }
                ?>  
            </div> <!-- row -->
        </div>

    </div> <!-- tab content -->

    <!-- row -->
</div> <!-- container -->
</section>



<!--====== COURSES SINGEl PART ENDS ======-->

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
