<?php
session_start();
include'admin_conn.php';
if(!isset($_SESSION['name']))
{
	header("Location:admin_login.php");
}
?>
<?php
foreach ($_GET as $key => $row['uid']) {
	$data2= $_GET[$key]=base64_decode(urldecode($row['uid']));
	$encrypt_2=((($data2*956783)/5678)/123456789);
}

?>
<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title></title>
	<style>
		body{
			background: -webkit-linear-gradient(left, #3931af, #00c6ff);
		}
		.mera{
			background: linear-gradient( #3931af, #00c6ff);
		}
		.emp-profile{
			padding: 3%;
			margin-top: 3%;
			margin-bottom: 3%;
			border-radius: 0.5rem;
			background: #fff;
		}
		.profile-img{
			text-align: center;
		}
		.profile-img img{
			width: 70%;
			height: 100%;
		}
		.profile-img .file {
			position: relative;
			overflow: hidden;
			margin-top: -20%;
			width: 70%;
			border: none;
			border-radius: 0;
			font-size: 15px;
			background: #212529b8;
		}
		.profile-img .file input {
			position: absolute;
			opacity: 0;
			right: 0;
			top: 0;
		}
		.profile-head h5{
			color: #333;
		}
		.profile-head h6{
			color: #0062cc;
		}
		.profile-edit-btn{
			border: none;
			border-radius: 1.5rem;
			width: 70%;
			padding: 2%;
			font-weight: 600;
			color: #6c757d;
			cursor: pointer;
		}
		.proile-rating{
			font-size: 12px;
			color: #818182;
			margin-top: 5%;
		}
		.proile-rating span{
			color: #495057;
			font-size: 15px;
			font-weight: 600;
		}
		.profile-head .nav-tabs{
			margin-bottom:5%;
		}
		.profile-head .nav-tabs .nav-link{
			font-weight:600;
			border: none;
		}
		.profile-head .nav-tabs .nav-link.active{
			border: none;
			border-bottom:2px solid #0062cc;
		}
		.profile-work{
			padding: 14%;
			margin-top: -15%;
		}
		.profile-work p{
			font-size: 12px;
			color: #818182;
			font-weight: 600;
			margin-top: 10%;
		}
		.profile-work a{
			text-decoration: none;
			color: #495057;
			font-weight: 600;
			font-size: 14px;
		}
		.profile-work ul{
			list-style: none;
		}
		.profile-tab label{
			font-weight: 600;
		}
		.profile-tab p{
			font-weight: 600;
			color: #0062cc;
		}
	</style>
</head>
<body>
	<div class="container emp-profile">
			<div class="row">
				<div class="col-md-4 mera mr-4">
					<div class="profile-img mt-3">
						<?php
                        $uid=$encrypt_2;
						$sql="select * from user_reg where uid=$uid";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_array($result))
						{?>
						<?php echo "<img height=80  width=80 class='rounded-circle' src='user_images/$row[3]'> <br><br>"; ?>
					    <?php } ?>
					</div>
				</div>
				<div class="col-md-7  ">
					<h3>User profile</h3>
					<div class="row">
						<div class="col-md-12">
					        <div class="tab-content profile-tab" id="myTabContent">
						        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							        <div class="row">
							        	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						                    <h4 style="color: #3931af" class="mb-3 mt-3  text-center font-weight-bold">Personal Details</h4>
						                    <hr style="background-color: green">
					                    </div>
								     <?php
								     include'admin_conn.php';  
								     $uid=$encrypt_2;
								     $sql="select * from user_reg where uid=$uid";
								     $result=mysqli_query($conn,$sql);
								     while($row=mysqli_fetch_array($result))
									 {?>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<label>User Id</label>
											<p><?php echo $row["uid"]; ?></p>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<label>Name</label>
											<p> <?php echo $row["first_name"]." ".$row["last_name"]; ?></p>
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
							        </div>       <?php } ?>			
						        </div>	
					        </div>
				        </div>
					</div>
				</div>
			</div>
		</div>	          
	</div>
</body>
</html>