 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="my" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card shadow ">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User profile</h6>
                </div>
                <div class="card-body " style="margin-top: -50px;">
                    <?php
                    $id=$_SESSION['uid'];
                    $sql = "select * from user_reg where uid=$id;";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <div class="container emp-profile">
                            <div class="row">
                                <div class="col-md-4 mera mr-4">
                                    <div class="profile-img mt-3">

                                        <?php echo "<img height=100  width=100 class='rounded-circle' src='../user_img/$row[3]'> <br><br>"; ?>
                                    </div>
                                </div>
                                <div class="col-md-7  ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="tab-content profile-tab" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <h4 style="color: #3931af" class="mb-3 mt-3  text-center font-weight-bold">Personal Details</h4>
                                                            <hr style="background-color: green">
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <label>First Name</label>
                                                            <p><?php echo $row["first_name"]; ?></p>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <label>Last Name</label>
                                                            <p> <?php echo $row["last_name"]; ?></p>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <label>Email</label>
                                                            <p> <?php echo $row["email"]; ?> </p>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <label>Phone</label>
                                                            <p> <?php echo $row["mobile_no"]; ?></p>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <h4 style="color: #3931af" class="mb-3 mt-3  text-center font-weight-bold">Contact Information</h4>
                                                            <hr style="background-color: green">
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <label>City</label>
                                                            <p><?php echo $row["city"];?></p>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <label>State</label>
                                                            <p><?php echo $row["state"]; ?></p>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <label>Country</label>
                                                            <p><?php echo $row["country"];?></p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Registration date</label>
                                                            <p><?php echo $row["reg_date"];?></p>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <label>Gender</label>
                                                            <p><?php echo $row["gender"]; ?></p>
                                                        </div> 
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <button class="btn btn-primary" data-toggle="modal"
                                                            data-target="#update">Update Profile</button>
                                                        </div>      
                                                    </div>               
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>            
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card shadow ">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User profile</h6>
                </div>
                <div class="card-body " style="margin-top: -50px;">
                    <?php
                    $id=$_SESSION['uid'];
                    $sql = "select * from user_reg where uid=$id;";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <div class="container emp-profile">
                            <div class="row">
                                <div class="col-md-4 mera mr-4">
                                    <div class="profile-img mt-3">

                                        <?php echo "<img height=100  width=100 class='rounded-circle' src='../user_img/$row[3]'> <br><br>"; ?>
                                    </div>
                                </div>
                                <div class="col-md-7  ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="tab-content profile-tab" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    <form action="update.php" method="POST">
                                                        <div class="row">
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <h4 style="color: #3931af" class="mb-3 mt-3  text-center font-weight-bold">Personal Details</h4>
                                                                <hr style="background-color: green">
                                                            </div>
                                                            <input type="hidden" name="uid"
                                                            value="<?php echo $row[0]; ?>">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                                <label>First Name</label>
                                                                <div class="form-group">

                                                                    <input type="text" name="fname" id="uid" value="<?php echo $row["first_name"]; ?>" class="form-control" placeholder="First name" >
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                                <label>Last Name</label>
                                                                <div class="form-group">

                                                                    <input type="text" name="lname" id="Name" value="<?php echo $row["last_name"]; ?>" class="form-control" placeholder="last Name" >
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                                <label>Email</label>
                                                                <div class="form-group">
                                                                    <input type="email" name="email" id="Email" value="<?php echo $row["email"]; ?>" class="form-control" placeholder="Enter Email" >
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                                <label>Mobile No</label>
                                                                <div class="form-group">
                                                                    <input type="text" name="Phone" id="Phone" value="<?php echo $row["mobile_no"]; ?>" class="form-control" placeholder="Enter phone no." >
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <h4 style="color: #3931af" class="mb-3 mt-3  text-center font-weight-bold">Contact Information</h4>
                                                                <hr style="background-color: green">
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                             <div class="form-group">
                                                                <label>City</label>
                                                                <input type="text" name="City" id="City" value="<?php echo $row["city"];?>" class="form-control" placeholder="Enter City" >
                                                            </div>                
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <label>State</label>
                                                            <div class="form-group">

                                                                <input type="text" name="State" id="State" value="<?php echo $row["state"]; ?>" class="form-control" placeholder="EnterState" >
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <label>Country</label>
                                                            <div class="form-group">
                                                                <label for="Country" class="sr-only">Country</label>
                                                                <input type="text" name="Country" id="Country" value="<?php echo $row["country"];?>" class="form-control" placeholder="Enter Country" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Registration date</label>
                                                            <p><?php echo $row["reg_date"];?></p>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <label>Gender</label>
                                                            <p><?php echo $row["gender"]; ?></p>
                                                        </div> 
                                                        <input name="submit" id="Update" class="btn btn-block login-btn mb-4" type="submit" value="update">
                                                    </div> 
                                                </form>              
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>            
            </div>
        </div>
    </div>
</div>
</div>

<!--====== PRELOADER PART START ======-->

<div class="preloader">
    <div class="loader rubix-cube">
        <div class="layer layer-1"></div>
        <div class="layer layer-2"></div>
        <div class="layer layer-3 color-1"></div>
        <div class="layer layer-4"></div>
        <div class="layer layer-5"></div>
        <div class="layer layer-6"></div>
        <div class="layer layer-7"></div>
        <div class="layer layer-8"></div>
    </div>
</div>

<!--====== PRELOADER PART START ======-->

<!--====== HEADER PART START ======-->

<header id="header-part">

    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact text-lg-left text-center">
                        <ul>
                            <li><img src="images/all-icon/map.png" alt="icon"><span>127/5 Mark street, New york</span></li>
                            <li><img src="images/all-icon/email.png" alt="icon"><span>info@yourmail.com</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-opening-time text-lg-right text-center">
                        <p>Opening Hours : Monday to Saturay - 8 Am to 5 Pm</p>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header top -->
    
    <div class="header-logo-support pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="logo">
                        <a href="index-2.html">
                            <img src="images/logo.png" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="support-button float-right d-none d-md-block">
                        <div class="support float-left">
                            <div class="icon">
                                <img src="images/all-icon/support.png" alt="icon">
                            </div>
                            <div class="cont">
                                <p>Need Help? call us free</p>
                                <span>321 325 5678</span>
                            </div>
                        </div>
                        <?php

                        if(!isset($_SESSION['uid']))
                            {?>
                                <div class="button float-left">
                                    <a href="login.php" class="main-btn">Apply Now</a>
                                </div>
                                <?php
                            }
                            ?> 
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header logo support -->
        
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="active" href="index.php">Home</a>
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.php">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="courses.php">Courses</a>
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a href="events.php">Events</a>
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a href="teachers.php">Our teachers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog.html">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-singel.html">Blog Singel</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="contact.php">Contact</a>
                                        
                                    </li>
                                    <?php if(isset($_SESSION['uid']))
                                    { ?>
                                        <div class="m-auto">
                                         <li class="nav-item float-right">
                                            <a href="#" class="float-right text-right">Welcome,
                                                <?php 
                                                $id=$_SESSION['uid'];
                                                $sql="select * from user_reg where uid = $id";
                                                $result=mysqli_query($conn,$sql);
                                                $row=mysqli_fetch_array($result);
                                                echo $row["first_name"];echo "  ";
                                                echo "<img height=30  width=40 class='img-profile rounded-circle' src='user_images/$row[3]'>"
                                                ?>

                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href="#" data-toggle="modal"
                                                   data-target="#my"><i class="fas fa-user fa-sm     fa-fw mr-2 text-gray-400"></i>Profile</a></li    >
                                                   <li><a href="user_courses.php" ><i class="fas fa-user fa-sm     fa-fw mr-2 text-gray-400"></i>My Courses</a></li>
                                                   <li> <a  href="#" data-toggle="modal"     data-target="#logoutModal">
                                                    <i class="fas fa-sign-out-alt fa-sm fa-fw     mr-2 text-gray-400"></i>
                                                    Logout
                                                </a></li>
                                            </ul>
                                        </li></div>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                    
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        
    </header>
    
    <!--====== HEADER PART ENDS ======-->