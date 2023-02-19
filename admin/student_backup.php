<?php
session_start();
if(!isset($_SESSION['name']))
{
  header("Location:admin_login.php");
}
?>
<?php 
include('includes/header.php');
include('includes/nav.php');
include('includes/admin_conn.php');
?>
<!-- course modal -->
<div class="modal fade" id="course" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All Courses</h6>
                </div>
                <div class="card-body">
                    <table class="table table-responsive" id="myTable">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Course Name</th>

                                <th>Course Description</th>
                                <th>Course Duration</th>
                                <th>Course Fees</th>
                                <th>Course Image</th>
                                <th>Upload Date</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "select * from courses";
                            $result = mysqli_query($conn, $sql);
                            $s=0;
                            while ($row = mysqli_fetch_array($result)) {
                                $s++;
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $s; ?>
                                    </td>
                                    <td>
                                        <?php echo $row[1] ?>
                                    </td>
                                    <td>
                                        <?php echo $row[3] ?>
                                    </td>
                                    <td>
                                        <?php echo $row[4] . " months"; ?>
                                    </td>
                                    <td>
                                        <?php echo $row[5] . "Rs."; ?>
                                    </td>
                                    <td>
                                        <?php echo "<img height=40  width=40  class='img-profile rounded-circle'
                                        src='course_img/$row[2]'>"; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["c_up_time"]; ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#my<?php echo $row[0]; ?>"> EDIT </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- student modal -->
<div class="modal fade" id="student" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All Students</h6>
                </div>
                <div class="card-body">
                    <table class="table table-responsive" id="myTablenew">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>User Image</th>
                                <th>Register Date</th>
                                <th>Profile</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "select * from user_reg";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row['uid']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["first_name"] . " " . $row["last_name"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["email"]; ?>
                                    </td>
                                    <td>
                                        <?php echo "<img height=40  width=40  class='img-profile rounded-circle'
                                        src='user_img/$row[3]'>"; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["reg_date"]; ?>
                                    </td>
                                    <?php
                                    $encrypt_1 = (($row['uid'] * 123456789 * 5678) / 956783);
                                    $link = "view_profile.php?uid=" . urlencode(base64_encode($encrypt_1));
                                    ?>
                                    <td><a href="<?= $link; ?>" class="btn btn-info">view</a></td>
                                </tr>
                                <?php
                            }
                            ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- pending modal -->
<div class="modal fade" id="pending" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All Students</h6>
                </div>
                <div class="card-body">
                    <table class="table table-responsive" id="myTablenew1">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>User Name.</th>
                                <th>User Email</th>
                                <th>Course name</th>
                                <th>Register Date</th>
                                <th>status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "select * from enrolled_course where status='pending'";
                            $result = mysqli_query($conn, $sql);
                             $s=0;
                            while ($row = mysqli_fetch_array($result)) {
                                $s++;
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $s; ?>
                                    </td>
                                     <td>
                                        <?php echo $row["uname"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["uemail"]; ?>
                                    </td>
                                     <td>
                                        <?php echo $row["cname"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $row["e_date"]; ?>
                                    </td>
                                    <td>
                                         <?php 
                                           if($row["status"]=="approved"){
                                             echo "<font color='green'>Approved</font>";
                                           }
                                           else{
                                             echo "<a class='btn btn-danger' href='admin_approve_enroll.php?eid=$row[0]                         '>approve</a>";
                                           }
                                          ?>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        <!-- Nav Item - Alerts -->
        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                <?php 
                $sql="select name from admin_login";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result);
                echo $row["name"];
                ?>
            </span>
            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
        </a>
    </div>
</li>
</ul>
</nav>
<!-- End of Topbar -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <!-- Content Row -->
        <div class="row">
            <!-- Total Students Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2 " name="mkl" data-toggle="modal" data-target="#student">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    <h6><b>Total Students</b></h6>
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                    $sql="select * from user_reg";
                                    $result=mysqli_query($conn,$sql);
                                    $count=mysqli_num_rows($result);
                                    echo $count;
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2"  data-toggle="modal" data-target="#course">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    <h6><b>Total Courses</b></h6>
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                    $sql="select * from courses";
                                    $result=mysqli_query($conn,$sql);
                                    $count=mysqli_num_rows($result);
                                    echo $count;
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2" data-toggle="modal" data-target="#pending" >
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php
                                    $sql="select * from enrolled_course where status='pending'";
                                    $result=mysqli_query($conn,$sql);
                                    $count=mysqli_num_rows($result);
                                    echo $count;
                                    ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->


<?php
include('includes/scripts.php');?>

<?php
include('includes/footer.php');
?>
