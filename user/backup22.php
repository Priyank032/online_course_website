<?php
   include("db_connect.php");
   $q="select * from states";
   $qur=$con->query($q);
   $qur2=$con->query($q);
   $qur3=$con->query($q);
   $qur4=$con->query($q);
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title>National Scholarship Entrance Test Form</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
         .main{
         width:95%;
         margin:auto;
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.19);
         }
         body {
         font-family: 'salvo', Arial, sans-serif !important;
         line-height: 1.8;
         color: #818181;
         text-align:justify;
         }
         h2 {
         font-size: 24px;
         color: #bb8b49;
         text-align:center;
         font-weight: 600;
         }
         h4 {
         font-size: 17px;
         line-height: 1.375em;
         color: #303030;
         font-weight: 400;
         }  
         ol, ul {
         margin-top: 0;
         margin-bottom: 10px;
         list-style-type: none;
         line-height: 21px;
         font-size: 14px;
         }
         #slider li{
         margin:14px 0px;
         font-weight:bold;
         list-style-image:url(./uploads/arrow.png);
         border-bottom:1px dashed red;
         }
         #courses li{
         margin:14px 0px;
         font-weight:bold;
         list-style-image:url(./uploads/arrow.png);
         }
         #slider li>a
         {
         padding:7px 0 7px 0px;
         }
         .container-fluid {
         padding:5px 10px;
         }
         .affix{
         top:0px;
         width:93.5%;
         }
         a:hover{
         text-decoration:none;
         }
         #contact li>a{
         color:gainsboro;
         }
         .bg-grey {
         background-color: #f6f6f6;
         }
         .carousel-control.right, .carousel-control.left {
         background-image: none;
         color: #0b3c21;
         }
         .carousel-indicators li {
         border-color: #0b3c21;
         }
         .carousel-indicators li.active {
         background-color: #0b3c21;
         }
         .navbar {
         margin-bottom: 0;
         background-color: #0a582e;
         z-index: 9999;
         border: 0;
         font-size: 12px !important;
         border-radius: 0;
         font-family: Montserrat, sans-serif;
         }
         .navbar li a, .navbar .navbar-brand {
         color: #fff !important;
         }
         .navbar-nav li a:hover, .navbar-nav li.active a {
         color: #fff !important;
         background-color: #105979 !important;
         }
         .navbar-nav>li>a
         {
         padding:8px 12px;
         }
         .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover
         {
         background:#0d5a81;
         }
         .has-sub{
         background: #1a7da5;
         padding: 6px 0px;
         margin: 5px 5px;
         border-radius: 2px;
         font-size: 15px;
         }
         .navbar-default .navbar-toggle {
         border-color: transparent;
         color: #fff !important;
         }
         footer .glyphicon {
         font-size: 20px;
         margin-bottom: 20px;
         color: #f4511e;
         }
         .slide {
         animation-name: slide;
         -webkit-animation-name: slide;
         animation-duration: 1s;
         -webkit-animation-duration: 1s;
         visibility: visible;
         }
         .heading{
         text-align: center;
         background: #8c1b02;
         border-radius: 25px;
         font-weight: bold;
         color: #ffffff;
         font-size: 25px;
         }
         .list{
         color: black;
         font-size: 16px;
         }
         .form_field
         {
         border-radius: 27px;
         padding: 20px;
         background: #f6f6f6;
         margin: 20px 0px;
         }
         @keyframes slide {
         0% {
         opacity: 0;
         transform: translateY(70%);
         } 
         100% {
         opacity: 1;
         transform: translateY(0%);
         }
         }
         @-webkit-keyframes slide {
         0% {
         opacity: 0;
         -webkit-transform: translateY(70%);
         } 
         100% {
         opacity: 1;
         -webkit-transform: translateY(0%);
         }
         }
         @media screen and (max-width: 768px) {
         .col-sm-4 {
         text-align: center;
         margin: 25px 0;
         }
         .btn-lg {
         width: 100%;
         margin-bottom: 35px;
         }
         }
         @media screen and (max-width: 480px) {
         .logo {
         font-size: 10px;
         }
         .main{
         width:100%;
         }
         .affix
         {
         width:100%;
         }
         .btn{
         margin: 11px;
         }
         }
         .btn-default {
         color: #fff;
         background-color: #080707;
         border-color: #ccc;
         }
      </style>
      <style>
         .wizard {
         margin: 20px auto;
         background: #fff;
         }
         .wizard .nav-tabs {
         position: relative;
         margin: 40px auto;
         margin-bottom: 0;
         border-bottom-color: #e0e0e0;
         }
         .wizard > div.wizard-inner {
         position: relative;
         }
         .connecting-line {
         height: 2px;
         background: #e0e0e0;
         position: absolute;
         width: 80%;
         margin: 0 auto;
         left: 0;
         right: 0;
         top: 50%;
         z-index: 1;
         }
         .wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
         color: #555555;
         cursor: default;
         border: 0;
         border-bottom-color: transparent;
         }
         span.round-tab {
         width: 70px;
         height: 70px;
         line-height: 70px;
         display: inline-block;
         border-radius: 100px;
         background: #fff;
         border: 2px solid #e0e0e0;
         z-index: 2;
         position: absolute;
         left: 0;
         text-align: center;
         font-size: 25px;
         }
         span.round-tab i{
         color:#555555;
         }
         .wizard li.active span.round-tab {
         background: #fff;
         border: 2px solid #5bc0de;
         }
         .wizard li.active span.round-tab i{
         color: #5bc0de;
         }
         span.round-tab:hover {
         color: #333;
         border: 2px solid #333;
         }
         .wizard .nav-tabs > li {
         width: 25%;
         }
         .wizard li:after {
         content: " ";
         position: absolute;
         left: 46%;
         opacity: 0;
         margin: 0 auto;
         bottom: 0px;
         border: 5px solid transparent;
         border-bottom-color: #5bc0de;
         transition: 0.1s ease-in-out;
         }
         .wizard li.active:after {
         content: " ";
         position: absolute;
         left: 46%;
         opacity: 1;
         margin: 0 auto;
         bottom: 0px;
         border: 10px solid transparent;
         border-bottom-color: #5bc0de;
         }
         .wizard .nav-tabs > li a {
         width: 70px;
         height: 70px;
         margin: 20px auto;
         border-radius: 100%;
         padding: 0;
         }
         .wizard .nav-tabs > li a:hover {
         background: transparent;
         }
         .wizard .tab-pane {
         position: relative;
         padding-top: 50px;
         }
         .wizard h3 {
         margin-top: 0;
         }
         @media( max-width : 585px ) {
         .wizard {
         width: 90%;
         height: auto !important;
         }
         span.round-tab {
         font-size: 16px;
         width: 50px;
         height: 50px;
         line-height: 50px;
         }
         .wizard .nav-tabs > li a {
         width: 50px;
         height: 50px;
         line-height: 50px;
         }
         .wizard li.active:after {
         content: " ";
         position: absolute;
         left: 35%;
         }
         }
      </style>
      <script>
         $(document).ready(function () {
             //Initialize tooltips
             $('.nav-tabs > li a[title]').tooltip();
             
             //Wizard
             $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
             
               var $target = $(e.target);
             
               if ($target.parent().hasClass('disabled')) {
                 return false;
               }
             });
             
             $(".next-step").click(function (e) {
               var $active = $('.wizard .nav-tabs li.active');
               $active.next().removeClass('disabled');
               nextTab($active);
             
             });
             $(".prev-step").click(function (e) {
             
               var $active = $('.wizard .nav-tabs li.active');
               prevTab($active);
             
             });
         });
         
           function nextTab(elem) {
             $(elem).next().find('a[data-toggle="tab"]').click();
           }
           function prevTab(elem) {
             $(elem).prev().find('a[data-toggle="tab"]').click();
           }
         
           $(document).ready(function(){
             $("#step2_save").click(function(event) {
               event.preventDefault();
             });
           });
      </script>
   </head>
   <body id="myPage" class="main">
      <form name='razorpayform' action="payment/verify.php" method="POST">
         <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
         <input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
      </form>
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6">
               <a href="index.php">         
               <img src="../images/logo1.png" class="img-responsive" alt="LOGO">
               </a>
            </div>
            <div class="col-sm-4">
               <img src="../images/AISEE_Students.png"  class="img-responsive"alt="scholship_AIPSE" >
            </div>
            <div class="col-sm-2">
               <img src="../images/aisee-india.gif" class="img-responsive" alt="aipse_india" >
            </div>
         </div>
         <div class="navbar navbar-default " data-spy="affix" data-offset-top="100" role="navigation" style="background:linear-gradient(#0c0c0c, rgb(0 0 0),rgb(2 2 2),#000000);min-height:35px;">
            <div class="container-fluid">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">  
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
               </div>
               <div class="collapse navbar-collapse navbar-ex1-collapse" >
                  <ul class="nav navbar-nav">
                     <li><a href="index.php">HOME</a></li>
                     <li> <a href="../about.php"  style="color:white;">About Us</a></li>
                     <li><a href="../scholarship.php"  style="color:white;">Scholarship Schemes</a></li>
                     <li><a href="../Courses-offered.php"  style="color:white;">Courses Offered</a></li>
                     <li> <a href="../information-bulletine.php"  style="color:white;">Information Bulletin</a>
                     </li>
                     </li>
                     <li>                        <a href="../general-overview.php" style="color:white;" >General Overview</a>
                     </li>
                     <li>     <a href="../important_dates.php" style="color:white;" >Important Dates</a></li>
                     <li>   <a href="../php"  style="color:white;">Contact Us</a></li>
                     <li><a href="../contact_us.php">Apply Now</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <marquee width="100%" direction="left" height="20px"><a href="#" target="_blank"></a></marquee>
         <div class="container-fluid">
            <div class="heading">Application Form</div>
            <h2 style="text-align:center;">NSET-2021 New Registration</h2>
            <div style="border:1px solid black;text-align:center;margin-bottom:20px;font-size:20px;">Please go through the instructions Carefully before filling the application form <br><span class="pasz">Instructions for NSET 2020-21 Application Form </span></div>
            <div class="row">
                <section>
                    <div class="wizard">
                         <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                               <li role="presentation" class="active">
                                  <a href="#complete" data-toggle="tab" aria-controls="complete" title="Step1">
                                  <span class="round-tab">
                                  <i class="glyphicon glyphicon-phone"></i>
                                  </span>
                                  </a>
                               </li>
                               <li role="presentation" class="disabled">
                                  <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 2">
                                  <span class="round-tab">
                                  <i class="glyphicon glyphicon-user"></i>
                                  </span>
                                  </a>
                               </li>
                               <li role="presentation" class="disabled">
                                  <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 3">
                                  <span class="round-tab">
                                  <i class="glyphicon glyphicon-pencil"></i>
                                  </span>
                                  </a>
                               </li>
                               <li role="presentation" class="disabled">
                                  <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Complete">
                                  <span class="round-tab">
                                  <i class="glyphicon glyphicon-file"></i>
                                  </span>
                                  </a>
                               </li>
                            </ul>
                         </div>
                         <form role="form" class="form-horizontal" method="POST" id="user-form" enctype="multipart/form-data">
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="complete">
                                  <p style="text-align:center;font-size:18px;font-weight:bold;color:red;"> To Activate your Account Please verify Phone number</p>
                                  <div class="form-group">
                                     <label class="control-label col-sm-3" for="mobile_number">Mobile Number:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-3">
                                        <input type="text" name="mobile_number" id="mobile_number" class="form-control" >
                                        <input type="hidden" name="db_otp" id="db_otp" class="form-control">
                                     </div>
                                     <div class="col-sm-3">
                                        <button type="button" class="btn btn-default" id="generate_otp">SEND OTP</button>
                                     </div>
                                  </div>
                                  <script>
                                     $(function () {
                                       $('#generate_otp').on('click', function(e) {
                                     
                                         var otpmobilenumber = $("#mobile_number").val();
                                     //alert(stateid);
                                     var fd = new FormData();
                                     fd.append('otpmobilenumber',otpmobilenumber);
                                     
                                     $.ajax({
                                     url:'otpmobile.php',
                                     type:'post',
                                     data:fd,
                                     contentType: false,
                                     processData: false,
                                     success:function(response){
                                     // alert(response); 
                                      //$("#college_district").html(response);
                                     //setTimeout(function(){ location.reload(); }, 1500);                       
                                     }
                                     });
                                     
                                     });
                                     
                                     
                                     
                                     
                                     
                                     }); 
                                     
                                     $(function () {
                                     
                                       $('#verify').on('click', function(e) {
                                        var otp = $("#otp").val();
                                     //   alert(otp);
                                     var fd = new FormData();
                                     fd.append('otp',otp);
                                     
                                     $.ajax({
                                     url:'otpverify.php',
                                     type:'post',
                                     data:fd,
                                     contentType: false,
                                     processData: false,
                                     success:function(response){
                                     console.log(response+'asd');
                                      //var otpcheck =  $("#verify_get").html(response);
                                      if(response == 'Congratulation, Your mobile is verified.' ){
                                         //  alert('jha');
                                         $("#step1_save").attr("style", "display:block"); 
                                       }
                                     
                                      //$("#college_district").html(response);
                                     //setTimeout(function(){ location.reload(); }, 1500);                       
                                     }
                                     }); 
                                     
                                     });
                                     
                                     }); 
                                     
                                     
                                  </script>
                                  <div class="form-group">
                                     <label class="control-label col-sm-3" for="otp">Enter OTP:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-3">
                                        <input type="text" name="otp" id="otp" class="form-control">
                                     </div>
                                     <div class="col-sm-3">
                                        <a  href="javascript:void(0);"  name="verify" id="verify" class="btn btn-default submit">Verify</a>
                                     </div>
                                     <button type="button" class="btn btn-primary next-step" style="display:none;" id="step1_save">Continue</button>
                                  </div>
                                  <div class="form-group" id="verify_otp_success" style="display:none;text-align:center;">
                                     <p style="text-align:center;color:green">OTP verified successfully</p>
                                     <div class='pm-button' id="general" style="display:none">
                                        <a href='https://www.payumoney.com/paybypayumoney/#/6015C37791E624D8B34865311BCADEAF'>
                                        <img src='https://www.payumoney.com/media/images/payby_payumoney/new_buttons/22.png' />
                                        </a>
                                     </div>
                                     <div class='pm-button' id="obc" style="display:none">
                                        <a href='https://www.payumoney.com/paybypayumoney/#/503539E4F40ADD36B52D435D081FE721'>
                                        <img src='https://www.payumoney.com/media/images/payby_payumoney/new_buttons/22.png' />
                                        </a>
                                     </div>
                                     <div class='pm-button' id="sc" style="display:none">
                                        <a href='https://www.payumoney.com/paybypayumoney/#/C038305CEBA6F91DBB637BC88DB3BAF8'>
                                        <img src='https://www.payumoney.com/media/images/payby_payumoney/new_buttons/22.png' />
                                        </a>
                                     </div>
                                  </div>
                                  <div calss="form-group" id="verify_otp_failure" style="display:none">
                                     <p style="text-align:center;color:red">Please check OTP you have entered</p>
                                  </div>
                                  <script>
                                     //   $(function () {
                                        /* $('#verify').on('click', function(e) {
                                           var mob = $('#mobile').val();
                                           var otp=$('#otp').val();
                                           
                                           var category = $('#category').val();
                                           $('#category').val(category);
                                     
                                           
                                           //alert('hh');
                                           $.ajax({
                                             type: 'post',
                                             url: './verify_data.php',
                                             data:'mob='+mob+'&otp='+otp,
                                             success: function (data) {
                                               if(data=='success')
                                               {
                                                 $('#verify_otp_success').css('display','block');
                                                 $('#verify_otp_failure').css('display','none');
                                                 if(category=='General')
                                                 {
                                                   $('#general').css('display','block');
                                                   $('#obc').css('display','none');
                                                   $('#sc').css('display','none');
                                                 }
                                                 else if(category=='General-EWS/OBC-NCL')
                                                 {
                                                   $('#obc').css('display','block');
                                                   $('#general').css('display','none');
                                                   $('#sc').css('display','none');
                                                 }
                                                 else{
                                                  $('#sc').css('display','block');
                                                  $('#general').css('display','none');
                                                  $('#obc').css('display','none');
                                                }
                                     
                                              }
                                              else{
                                               $('#verify_otp_failure').css('display','block');
                                               $('#verify_otp_success').css('display','none');
                                             }
                                                   //$('#db_otp').val(data);
                                                 }
                                               });
                                           e.preventDefault();
                                         });
                                       });     
                                       */
                                     
                                  </script>
                               </div>
                                <div class="tab-pane" role="tabpanel" id="step1">
                                  <h1 style="text-align: center;margin-bottom: 10px;font-weight: bolder;">PERSONAL DETAILS</h1>
                                  <div class="form-group">
                                     <label class="control-label col-sm-3" for="name">Candidates Name:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-3">
                                        <input type="text" class="form-control required_field" placeholder="Enter Name" name="name" id="name"  required>
                                     </div>
                                     <span>(As per class X certificate)</span>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-3" for="father_name">Father's Name:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-3">
                                        <input type="text" class="form-control required_field" placeholder="Enter Father's Name" name="father_name" id="father_name" onKeyPress="return lettersOnly(event);" required>
                                     </div>
                                     <label class="control-label col-sm-2" for="mother_name">Mother's Name:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="Enter Father's Name" name="mother_name" id="mother_name" onKeyPress="return lettersOnly(event);" required>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-3" for="dob">Date Of Birth:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-3">
                                        <input type="date" class="form-control"  name="dob" id="dob" required>
                                     </div>
                                     <label class="control-label col-sm-2" for="category">Category:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-3">
                                        <select class="form-control"  name="category" id="category" required>
                                           <option value="">Select Category</option>
                                           <option value="General">General</option>
                                           <option value="General-EWS/OBC-NCL">General-EWS/OBC-NCL</option>
                                           <option value="SC/ST/PWD">SC/ST/PWD</option>
                                        </select>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-3" for="disability">Person With Disability (PWD):<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-3">
                                        <select class="form-control"  name="disability" id="disability" required>
                                           <option value="">Select</option>
                                           <option value="YES">YES</option>
                                           <option value="NO">NO</option>
                                        </select>
                                     </div>
                                     <br><br>
                                     <label class="control-label col-sm-3 " for="gender">Gender:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-3">
                                        <select class="form-control"  name="gender" id="gender" required>
                                           <option value="">Select Gender</option>
                                           <option value="Male">Male</option>
                                           <option value="Female">Female</option>
                                           <option value="Transgender">Transgender</option>
                                        </select>
                                     </div>
                                     <label class="control-label col-sm-2" for="nationality">Nationality:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-3">
                                        <select class="form-control"  name="nationality" id="nationality" required>
                                           <option value="">Select Nationality</option>
                                           <option value="Indian">Indian</option>
                                        </select>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-3" for="applying_state">State from where the Candidate is Applying from:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-3">
                                        <select class="form-control"  name="applying_state" id="applying_state" required>
                                           <option value="">Select State</option>
                                           <?php 
                                              while($r=$qur->fetch_array())
                                              {  
                                                ?>
                                           <option value="<?php echo $r['id']; ?>"><?php echo $r['name']; ?></option>
                                           <?php
                                              }         
                                              ?>          
                                        </select>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-3" for="mobile">Mobile Number of the Candidate:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" id="mobile" minlength="10" maxlength="10" onKeyPress="return ValidateNumber(event);" required> 
                                     </div>
                                     <label class="control-label col-sm-2" for="email">Email ID:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-3">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email ID" required>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-3" for="alt_mobile">Mobile Number of the parent/Guardian:
                                     </label>
                                     <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="Alternate Mobile Number" name="alt_mobile" id="alt_mobile" minlength="10" maxlength="10" onKeyPress="return ValidateNumber(event);" required> 
                                     </div>
                                     <br><br>
                                     <label class="control-label col-sm-3" for="income">Annual Income of the parent/Guardian:
                                     </label>
                                     <div class="col-sm-3">
                                        <input type="text" required class="form-control" placeholder="income" name="income" id="income" minlength="10" maxlength="10" onKeyPress="return ValidateNumber(event);"> 
                                     </div>
                                     <br><br>
                                     <label class="control-label col-sm-3" for="alt_email">Permanent Address:
                                     </label>
                                     <div class="col-sm-3">
                                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Permanent Address" required>
                                     </div>
                                     <br><br>
                                     <label class="control-label col-sm-3" for="alt_email">Correspondence Address:
                                     </label>
                                     <div class="col-sm-3">
                                        <input type="text" class="form-control" name="caddress" id="c_address" placeholder="Enter Correspondence Address"required>
                                     </div>
                                  </div>
                                  <h2 style="text-align:center;color:#b39c54">Academic Details ( Class 10th or Equivalent) </h2>
                                  <div class="form-group">
                                     <label class="control-label col-sm-offset-3 col-sm-2" for="school_name">Name of School/College:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="Enter your school or college name" name="school_name" id="school_name" required>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-offset-3 col-sm-2" for="education_board">Name of School Education Board:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="Enter your Education Board" name="education_board" id="education_board" required>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-offset-3 col-sm-2" for="school_address">Address of School/College::<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="Enter Address of school or college " name="school_address" id="school_address" required>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-offset-3 col-sm-2" for="passing_year">Year Of Passing:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="Enter Year of passing" name="passing_year" id="passing_year" required>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-offset-2 col-sm-3" for="school_state">State where class X School/ College is Located:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-5">
                                        <select onChange="getdistrict_school(this.value);" name="school_state" id="school_state" class="form-control" required >
                                           <option value="">Select State</option>
                                           <?php 
                                              while($r3=$qur3->fetch_array())
                                              {  
                                                ?>
                                           <option value="<?php echo $r3['id']; ?>"><?php echo $r3['name']; ?></option>
                                           <?php
                                              }         
                                              ?>
                                        </select>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-offset-2 col-sm-3" for="school_district">District where class X School/ College is Located::<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-5">
                                        <select  class="form-control" name="school_district" id="school_district" required>
                                           <option value="">Select District</option>
                                        </select>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-offset-2 col-sm-3" for="percentage_obtained">Percentage of Marks obtained in Class 10th::<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="Enter your 10th percentage" name="percentage_obtained" id="percentage_obtained" required>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-offset-2 col-sm-3" for="roll_number">Enter Roll Number of Class 10th::<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="Enter Your roll no. of class 10th" name="roll_number" id="roll_number" required>
                                     </div>
                                  </div>
                                  <h2 style="text-align:center;color:#b39c54">Academic Details ( Class 12th or Equivalent) </h2>
                                  <div class="form-group">
                                     <label class="control-label col-sm-offset-3 col-sm-2" for="college_name">Name of School/College:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="Enter your school or college name" name="college_name" id="college_name" required>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-offset-3 col-sm-2" for="college_board">Name of School/College Education Board:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-5">
                                        <input type="text" class="form-control"  placeholder="Enter your Education Board" name="college_board" id="college_board" required>
                                     </div>
                                  </div>
                                  
                                  <div class="form-group">
                                     <label class="control-label col-sm-offset-3 col-sm-2" for="college_address">Address of School/College:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="Enter Address of school or college " name="college_address" id="college_address" required>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-offset-3 col-sm-2" for="college_passing">Year Of Passing:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-5">
                                        <input type="text" class="form-control"  placeholder="Enter Year of passing" name="college_passing" id="college_passing" required>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-offset-2 col-sm-3" for="course_selected">Course Selected:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-5">
                                        <select  class="form-control" name="course_selected" id="course_selected" required>
                                           <option value="">Select Course</option>
                                           <option value="Science">Science</option>
                                           <option value="Commerce">Commerce</option>
                                           <option value="Arts">Arts</option>
                                           <option value="Diploma">Diploma</option>
                                        </select>
                                     </div>
                                  </div>
                                  <div class="form-group">
                      <label class="control-label col-sm-offset-3 col-sm-2" for="college_passing">Subject Opted:(If you 5(five) subjects fill <b>NA</b> in last coloumn:)<span style="color:red;">*</span>
                      </label>
                      <div class="col-sm-5">
                        <div class="col-sm-4">
                          <input type="text" placeholder="Subject 1" class="form-control" name="subject1" id="subject1" required>
                        </div>
                        <div class="col-sm-4">
                          <input type="text" placeholder="Subject 2" class="form-control" name="subject2" id="subject2" required>
                        </div>
                        <div class="col-sm-4">
                          <input type="text" placeholder="Subject 3" class="form-control" name="subject3" id="subject3" required>
                        </div><br><br>
                        <div class="col-sm-4">
                          <input type="text" placeholder="Subject 4" class="form-control" name="subject4" id="subject4" required>
                        </div>
                        <div class="col-sm-4">
                          <input type="text" placeholder="Subject 5" class="form-control" name="subject5" id="subject5" required>
                        </div>
                        <div class="col-sm-4">
                          <input type="text" placeholder="Subject 6" class="form-control" name="subject6" id="subject6" required>
                        </div>
                      </div>
                    </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-offset-2 col-sm-3" for="college_state">State where class 12th or Equivalent School/ College is Located:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-5">
                                        <select onChange="getdistrict_college(this.value);" name="college_state" id="college_state" class="form-control" required >
                                           <option value="">Select State</option>
                                           <option value="">Select State</option>
                                           <?php 
                                              while($r4=$qur4->fetch_array())
                                              {  
                                                ?>
                                           <option value="<?php echo $r4['id']; ?>"><?php echo $r4['name']; ?></option>
                                           <?php
                                              }         
                                              ?>
                                        </select>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-offset-2 col-sm-3" for="college_district">District where class  12th or Equivalent School/ College is Located::<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-5">
                                        <select  class="form-control" name="college_district" id="college_district" required>
                                           <option value="">Select District</option>
                                        </select>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-offset-2 col-sm-3" for="college_percentage">Percentage of Marks obtained in Class 12th::<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-5">
                                        <input type="text" class="form-control" placeholder="Enter your 12th percentage"  name="college_percentage" id="college_percentage" required>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-sm-offset-2 col-sm-3" for="college_roll_number">Enter Roll Number of Class 12th or Equivalent:<span style="color:red;">*</span>
                                     </label>
                                     <div class="col-sm-5">
                                        <input type="text" class="form-control "  placeholder="Enter Your roll no. of class 12th" name="college_roll_number" id="college_roll_number" required>
                                     </div>
                                  </div>
                                  
                                  <ul class="list-inline pull-right">
                                     <li><button type="button" class="btn btn-primary" id="step2_save">Save and continue</button>
                                     </li>
                                  </ul>
                                  <script>
                                    $('#step2_save').click(function(event) {
                                       var mob = $('#mobile').val();
                                       $('#mobile_number').val(mob);
                                       var validationMessage = '';
                                       
                                       // Check inputs are filled.
                                       let i=0;
                                        $($(this).closest('.tab-pane').find('input')).each(function( index ) {
                                            let id=$(this).attr('id');
                                            if ($(this).val() == '' && id!='college_percentage' && id!='college_roll_number' && id!='subject6') {
                                                i++;
                                                return false;
                                            } 
                                        });
                                        if(i<1){
                                            $($(this).closest('.tab-pane').find('select')).each(function( index ) {
                                                if ($(this).val() == ''){
                                                    i++;
                                                    return false;
                                                } 
                                            });
                                        }
                                        if(i>0) {
                                            alert('Please fill required field!');
                                            return false;
                                        }
                                        var $active = $('.wizard .nav-tabs li.active');
                                        $active.next().removeClass('disabled');
                                        nextTab($active);
                                    });                        
                                         
                                  </script>
                               </div>
                                <div class="tab-pane " role="tabpanel" id="step2">
                                   <h2 style="text-align:center;color:#b39c54">NSET EXAM PREFERENCE</h2>
                                   <div class="form-group">
                                      <label class="control-label col-sm-offset-2 col-sm-3" for="course_selected">Applying for the stream of<span style="color:red;">*</span>
                                      </label>
                                      <div class="col-sm-5">
                                         <select class="form-control" name="stream_selected" id="stream_selected" required>
                                            <option value="">Select Stream</option>
                                            <option value="Science">Science</option>
                                            <option value="Commerce">Commerce</option>
                                            <option value="Arts">Arts</option>
                                         </select>
                                      </div>
                                   </div>
                                   <div id="sci-div" class="form-group">
                                      <label class="control-label col-sm-offset-2 col-sm-3" for="course_selected">Select the Preferred Optional Subjects (Science): 
                                      </label>
                                      <div class="col-sm-5">
                                          <select class="form-control"  name="stream_subject" id="stream_subject" visibility="false">
                                              <option> Select Preferred Subjects</option>
                                              <option value="PCM"> PCM (Engineering Based)</option>
                                              <option value="PCB"> PCB (Medical Based)</option>
                                              <option value="PCMB"> PCMB (Either Engineering/Medical Based)</option>
                                          </select>
                                      </div>
                                   </div>
                                   <div id="cms-div" class="form-group">
                                      <label class="control-label col-sm-offset-2 col-sm-3" for="course_selected">Select the Preferred Optional Subjects (Commerce):
                                      </label>
                                      <div class="col-sm-5">
                                          <select class="form-control"  name="stream_subject" id="stream_subject" visibility="false">
                                              <option> Any of the 3 Subjects can be Opted.</option>
                                              <option value="Accountancy, Business Studies, Economics, Mathematics, English, Statistics"> Accountancy, Business Studies, Economics, Mathematics, English, Statistics</option>
                                          </select>
                                      </div>
                                   </div>
                                   <div id="art-div" class="form-group">
                                      <label class="control-label col-sm-offset-2 col-sm-3" for="course_selected">
                                          Select the Preferred Optional Subjects (Arts):
                                      </label>
                                      <div class="col-sm-5">
                                          <select class="form-control"  name="stream_subject" id="stream_subject" visibility="false">
                                              <option> Any of the 3 Subjects can be Opted.</option>
                                              <option value="Economics, Sociology, Geography, Psychology, History, Political Science, English"> Economics, Sociology, Geography, Psychology, History, Political Science, English</option>
                                          </select>
                                      </div>
                                   </div>
                                   <h2 style="text-align:center;color:#b39c54">Upload Documents</h2>
                                   <div class="form-group">
                                      <label class="control-label col-sm-offset-2 col-sm-3" for="recent_photo">Recent Passport size Photo:<span style="color:red;">*</span>
                                      </label>
                                      <div class="col-sm-5">
                                         <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                                         <input type="file" name="recent_photo" id="recent_photo">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label class="control-label col-sm-offset-2 col-sm-3" for="thumb_impression">Left Hand Thumb Impression:<span style="color:red;">*</span>
                                      </label>
                                      <div class="col-sm-5">
                                         <input type="file" name="thumb_impression" id="thumb_impression">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label class="control-label col-sm-offset-2 col-sm-3" for="identity">Any Goverment authorized identity Card<span style="color:red;">*</span>
                                      </label>
                                      <div class="col-sm-5">
                                         <input type="file" name="identity" id="identity">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label class="control-label col-sm-offset-2 col-sm-3" for="certificate">Class 10th marks card/passing certificate<span style="color:red;">*</span>
                                      </label>
                                      <div class="col-sm-5">
                                         <input type="file" name="certificate" id="certificate">
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label class="control-label col-sm-offset-2 col-sm-3" for="Signature">Digital Signature Of the Candidate:<span style="color:red;">*</span>
                                      </label>
                                      <div class="col-sm-5">
                                         <input type="file" name="Signature" id="Signature">
                                      </div>
                                   </div>
                                   <h2 style="text-align:center;color:#b39c54">Password Section</h2>
                                   <div class="tab-pane" role="tabpanel" id="step3">
                                      <div class="form-group">
                                         <label class="control-label col-sm-3" for="password">Create Password:<span style="color:red;">*</span>
                                         </label>
                                         <div class="col-sm-3">
                                            <input type="password" class="form-control" placeholder="Create Password" name="password" id="password"  required> 
                                         </div>
                                      </div>
                                      <div class="form-group">
                                         <label class="control-label col-sm-3" for="cnf_password">Confirm Password:<span style="color:red;">*</span>
                                         </label>
                                         <div class="col-sm-3">
                                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                                            <span id='message'></span>
                                         </div>
                                      </div>
                                      <script>
                                         $('#password, #confirm_password').on('blur', function () {
                                           if ($('#password').val() == $('#confirm_password').val()) {
                                             $('#message').html('Matching').css('color', 'green');
                                             $("#step3_save").prop("disabled",false);
                                           } 
                                           else if($('#password').val() != $('#confirm_password').val())
                                           {
                                             $('#message').html('Not Matching').css('color', 'red');
                                             $('#confirm_password').val('');
                                             $("#step3_save").prop("disabled",true);
                                           }
                                         });
                                      </script>
                                      <div class="form-group">
                                         <label class="control-label col-sm-3" for="security_question">Security Question:<span style="color:red;">*</span>
                                         </label>
                                         <div class="col-sm-6">
                                            <select class="form-control"  name="security_question" id="security_question" required>
                                               <option value="">Select Security Question</option>
                                               <option value="What was the street name you lived in as a child?">What was the street name you lived in as a child?</option>
                                               <option value="What were the last four digits of your childhood telephone number?">What were the last four digits of your childhood telephone number?</option>
                                               <option value="What primary school did you attend?">What primary school did you attend?</option>
                                               <option value="In what town or city was your first full time job?">In what town or city was your first full time job?</option>
                                               <option value="In what town or city did you meet your spouse/partner?">In what town or city did you meet your spouse/partner?</option>
                                               <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                                               <option value="What is the name of your favorite childhood friend?">What is the name of your favorite childhood friend?</option>
                                               <option value="In what city or town did your mother and father meet?">In what city or town did your mother and father meet?</option>
                                               <option value="What is your favorite movie?">What is your favorite movie?</option>
                                               <option value="What is your pet’s name?">What is your pet’s name?</option>
                                               <option value="What was the name of your primary school?">What was the name of your primary school?</option>
                                            </select>
                                         </div>
                                      </div>
                                      <div class="form-group">
                                         <label class="control-label col-sm-3" for="security_answer">Security Answer:<span style="color:red;">*</span>
                                         </label>
                                         <div class="col-sm-6">
                                            <input type="text" name="security_answer" id="security_answer" class="form-control">
                                         </div>
                                      </div>
                                   </div>
                                   <ul class="list-inline pull-right">
                                      <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                      <!--li><button type="button" class="btn btn-default next-step">Skip</button></li-->
                                      <li><button type="button" class="btn btn-primary btn-info-full" id="save_data">Save and payment</button></li>
                                   </ul>
                                   <br><br>
                                   <script>
                                      $(function () {
                                      $("#sci-div,#cms-div,#art-div").hide();
                                      $("#stream_selected").on("change",function(){
                                        //   let key=0
                                        // $('.form-check-input').each(function() {
                                        //     $(this).prop('checked', false);
                                        //     $(this).prop("disabled",false);
                                        //     $('.form-check-input')[key].checked = false;
                                        //     key++;
                                        //     // $(this).removeAttr('checked');
                                        // });
                                        let val=$(this).val();
                                        if(val=='Science'){
                                          $("#cms-div,#art-div").hide();
                                          $("#sci-div").show();
                                          $("#sci-div").find("select").attr('visibility',true);
                                        }
                                        else if(val=='Commerce'){
                                          $("#sci-div,#art-div").hide();
                                          $("#cms-div").show();
                                          $("#cms-div").find("select").attr('visibility',true);
                                        }
                                        else if(val=='Arts')  {
                                          $("#sci-div,#cms-div").hide();
                                          $("#art-div").show();
                                          $("#art-div").find("select").attr('visibility',true);
                                        }
                                        else {
                                          $("#sci-div,#cms-div,#art-div").hide();
                                          $("#sci-div,#cms-div,#art-div").find("select").attr('visibility',false);
                                        }
                                      });
                                    $('#state').on('change', function(e) {
                                      var stateid = $(this).val();
                                      //alert(stateid);
                                      var fd = new FormData();
                                      fd.append('stateid',stateid);
                                      $.ajax({
                                      url:'getstate.php',
                                      type:'post',
                                      data:fd,
                                      contentType: false,
                                      processData: false,
                                      success:function(response){
                                      //alert(response); 
                                      $("#district").html(response);
                                      //setTimeout(function(){ location.reload(); }, 1500);                       
                                      }
                                      });
                                      
                                      });
                                      
                                    $('#school_state').on('change', function(e) {
                                      var stateid = $(this).val();
                                      //alert(stateid);
                                      var fd = new FormData();
                                      fd.append('stateid',stateid);
                                      $.ajax({
                                      url:'getstate.php',
                                      type:'post',
                                      data:fd,
                                      contentType: false,
                                      processData: false,
                                      success:function(response){
                                      //alert(response); 
                                      $("#school_district").html(response);
                                      //setTimeout(function(){ location.reload(); }, 1500);                       
                                      }
                                      });
                                      
                                      });

                                    $('#college_state').on('change', function(e) {
                                      var stateid = $(this).val();
                                      //alert(stateid);
                                      var fd = new FormData();
                                      fd.append('stateid',stateid);
                                      $.ajax({
                                      url:'getstate.php',
                                      type:'post',
                                      data:fd,
                                      contentType: false,
                                      processData: false,
                                      success:function(response){
                                      //alert(response); 
                                      $("#college_district").html(response);
                                      //setTimeout(function(){ location.reload(); }, 1500);                       
                                      }
                                      });
                                      
                                      });

                                    $('#save_data').on('click', function(e) {
                                       let i=0;
                                        $($(this).closest('.tab-pane').find('input')).each(function( index ) {
                                            let id=$(this).attr('id');
                                            if ($(this).val() == '') {
                                                i++;
                                                return false;
                                            } 
                                        });
                                        if(i<1){
                                            $($(this).closest('.tab-pane').find('select')).each(function( index ) {
                                                if ($(this).val() == '' && ($(this).attr('visibility')==undefined || $(this).attr('visibility')==true) ) {
                                                    i++;
                                                    return false;
                                                } 
                                            });
                                        }
                                        if(i>0) {
                                            alert('Please fill required field!');
                                            return false;
                                        }

                                          var subject = [];
                                          $(".form-check-input").each(function(){
                                              if ($(this).is(":checked")) {
                                                  subject.push($(this).val());
                                              }
                                          });
                                          subject = subject.toString();
                                          //alert('hh');
                                          // Put final data here
                                          var fd = new FormData();
                                          var cname = $('#name').val();              
                                          var father_name = $('#father_name').val();
                                          var mother_name = $('#mother_name').val();
                                          var dob = $('#dob').val();
                                          var category = $('#category').val();
                                          var disability = $('#disability').val();
                                          var gender = $('#gender').val();
                                          var nationality = $('#nationality').val();
                                          var applying_state = $('#applying_state').val();
                                          var mobile = $('#mobile').val();
                                          var email = $('#email').val();
                                          var alt_mobile = $('#alt_mobile').val();
                                          var income = $('#income').val();  
                                          var address = $('#address').val(); 
                                          var caddress = $('#caddress').val(); 
                                          
                                          var password =  $('#password').val();
                                          var security_question =  $('#security_question').val();
                                          var security_answer =  $('#security_answer').val();
                                          
                                          var place = $("input[name='place']:checked").val();
                                          var state = $('#state').val();
                                          var district = $('#district').val();
                                          var first_choice = $('#1st_choice').val();
                                          var second_choice = $('#2nd_choice').val();
                                          var third_choice = $('#3rd_choice').val();
                                          var education_board = $('#education_board').val();
                                          var school_name = $('#school_name').val();
                                          var school_address = $('#school_address').val();
                                          var passing_year = $('#passing_year').val();
                                          var school_state = $('#school_state').val();
                                          var school_district = '';
                                          var percentage_obtained = $('#percentage_obtained').val();
                                          var roll_number = $('#roll_number').val();
                                          var college_board  = $('#college_board').val();
                                          var college_name  = $('#college_name').val();
                                          var college_address = $('#college_address').val();
                                          var college_passing = $('#college_passing').val();
                                          var course_selected  = $('#course_selected').val();
                                          var college_state = $('#college_state').val();
                                          var college_district = '';
                                          var college_percentage = $('#college_percentage').val();;
                                          var collegeroll_number  = $('#college_roll_number').val();
                                          var stream_selected  = $('#stream_selected').val();
                                           var stream_subject  = $('#stream_subject').val();
                                          var files = $('#recent_photo')[0].files[0]; 
                                          var files2 = $('#thumb_impression')[0].files[0];
                                          var files3 = $('#identity')[0].files[0]; 
                                          var files4 = $('#certificate')[0].files[0];
                                          var files5 = $('#Signature')[0].files[0]; 
                                          var subject1 = $('#subject1').val();
                                          var subject2 = $('#subject2').val();
                                          var subject3 = $('#subject3').val();
                                          var subject4 = $('#subject4').val();
                                          var subject5 = $('#subject5').val();
                                          var subject6 = $('#subject6').val();
                                          
                                          let am="";
                                          if(category=="General"){
                                          am=700;
                                          }else if(category=="General-EWS/OBC-NCL"){
                                          am=650;
                                          }
                                          else{
                                          am=550;
                                          }
                                          
                                          
                                          
                                          //alert(category);  
                                          fd.append('cname',cname); fd.append('fathername',father_name); fd.append('mothername',mother_name);fd.append('dateob',dob);
                                          fd.append('categor',category); fd.append('disabil',disability); fd.append('gendr',gender); fd.append('nation',nationality);
                                          fd.append('apppystate',applying_state); fd.append('mobl',mobile); fd.append('emal',email);
                                          fd.append('altmobile',alt_mobile); 
                                          fd.append('income',income);
                                          fd.append('address',address);
                                          fd.append('caddress',caddress);
                                          
                                          fd.append('passwrd',password);  fd.append('securityquestion',security_question);
                                          fd.append('securityanswer',security_answer);
                                          
                                          fd.append('plce',place); fd.append('stat',state); fd.append('distrct',district); fd.append('firstchoice',first_choice);
                                          fd.append('secondchoice',second_choice); fd.append('thirdchoice',third_choice); fd.append('educationboard',education_board);
                                          fd.append('schoolname',school_name); fd.append('schooladdress',school_address); fd.append('passingyear',passing_year);
                                          fd.append('schoolstate',school_state); fd.append('schooldistrict',school_district);
                                          fd.append('percentageobtained',percentage_obtained); fd.append('rollnumber',roll_number);
                                          
                                          fd.append('collegeboard',college_board);
                                          fd.append('collegename',college_name);
                                          fd.append('collegeaddress',college_address);
                                          fd.append('collegepassing',college_passing);
                                          fd.append('courseselected',course_selected);
                                          fd.append('collegestate',college_state);
                                          fd.append('collegedistrict',college_district);
                                          fd.append('college_percentage',college_percentage);
                                          fd.append('collegerollnumber',collegeroll_number);
                                          fd.append('stream_selected',stream_selected);
                                          fd.append('stream_subject',stream_subject);
                                          fd.append('recentphoto',files);
                                          fd.append('thumbimpression',files2);
                                          fd.append('identity',files3);
                                          fd.append('certificate',files4);
                                          fd.append('Signature',files5);
                                          fd.append('subject',subject);
                                          fd.append('subject1',subject1);
                                          fd.append('subject2',subject2);
                                          fd.append('subject3',subject3);
                                          fd.append('subject4',subject4);
                                          fd.append('subject5',subject5);
                                          fd.append('subject6',subject6);
                                          
                                          //   $.ajax({
                                          //   url : "save.php",
                                          //   type: "POST",
                                          //   cache: false,
                                          //   data : {course:course},
                                          //   success:function(result){
                                          //     if (result==1) {
                                          //         alert("Data insert in database successfully");
                                          //     }
                                          //   }
                                          // });
                                          
                                          $.ajax({
                                          url:'save.php',
                                          type:'post',
                                          data:fd,
                                          contentType: false,
                                          processData: false,
                                          success:function(response){
                                          let receipt=response;
                                          let amount=am;
                                          $.ajax({
                                          url:'payment/payment.php',
                                          type:'post',
                                          data:{
                                            amount:amount,
                                            receipt:receipt,
                                            name:cname,
                                            mobile:mobile,
                                            email:email,
                                            address:address
                                          },
                                          success:function(response){
                                            var options=JSON.parse(response);
                                            console.log(options);
                                            console.log(options.key);
                                                  /**
                                                   * The entire list of Checkout fields is available at
                                                   * https://docs.razorpay.com/docs/checkout-form#checkout-fields
                                                   */
                                                   options.handler = function (response){
                                                    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                                                    document.getElementById('razorpay_signature').value = response.razorpay_signature;
                                                    document.razorpayform.submit();
                                                  };
                                                  
                                                  // Boolean whether to show image inside a white frame. (default: true)
                                                  options.theme.image_padding = false;
                                                  
                                                  options.modal = {
                                                    ondismiss: function() {
                                                      console.log("This code runs when the popup is closed");
                                                    },
                                                      // Boolean indicating whether pressing escape key
                                                      // should close the checkout form. (default: true)
                                                      escape: true,
                                                      // Boolean indicating whether clicking translucent blank
                                                      // space outside checkout form should close the form. (default: false)
                                                      backdropclose: false
                                                    };
                                          
                                                    var rzp = new Razorpay(options);
                                                    rzp.open();
                                                    e.preventDefault();
                                          
                                                  }
                                                });  
                                          
                                          // alert(response); 
                                          // $(".galleryaddresponse").html(response);
                                          // setTimeout(function(){ location.reload(); }, 1500);
                                          // Ajax for razorpay payment gateway - payment/payment.php
                                          }
                                          });  
                                          
                                                /*$.ajax({
                                                  type: 'post',
                                                  url: './save_data.php',
                                                  data: $('#user-form').serialize(),
                                                  success: function (data) {
                                                            
                                                            $('#db_otp').val(data);
                                                          }
                                                        }); */
                                                        e.preventDefault();
                                                      });
                                      });     
                                   </script>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </section>
         </div>
      </div>
      <script>
         function getdistrict(val) {
           $.ajax({
             type: "POST",
             url: "./get_district.php",
             data:'state_id='+val,
             success: function(data){
               $("#district").html(data);
             }
           });
         }
      </script>
      <script>
         function getdistrict_school(val) {
           $.ajax({
             type: "POST",
             url: "./get_district.php",
             data:'state_id='+val,
             success: function(data){
               $("#school_district").html(data);
             }
           });
         }
      </script>
      <script>
         function getdistrict_college(val) {
           $.ajax({
             type: "POST",
             url: "./get_district.php",
             data:'state_id='+val,
             success: function(data){
               $("#college_district").html(data);
             }
           });
         }
      </script>
      <!-- Container (footer Section) -->
      <div style="background-color: #092521;
         color: white;
         position: relative;
         padding-top: 50px;
         background-image: url(https://www.aisee.co.in/images/background-city.png);
         background-repeat: no-repeat;">
         <div id="contact" class="container-fluid">
            <div class="col-md-3 col-sm-12">
               <aside class="logo">
                  <img src="photo/footer-logo.png" class="vertical-center" width="270px" padding="12px"><br><br>
                  <img src="photo/play-store.png" class="vertical-center" width="100%" padding="25px">
               </aside>
            </div>
            <div class="col-md-3 col-sm-4" style="min-height: 256px;">
               <aside>
          <header><h4><a href="NSET-contact-us.php" style="color:white;font-size: 21px;
          font-weight: 200;">Contact Us</a></h4></header>
          <h6>Adress: 204., Hari Om Commercial Complex., New Dak Bunglow Road., Patna, Bihar: 800001</h6>
          <h6>Phone No: +91 9538855880, +91 9538855881 </h6>
          <p style="color:white;">(we apologise that the land line numbers mentioned before are not working due to the shut down of the office due to the COVID 19 pandemic., we hope and wish to get back to the norms at the earliest)</p><p style="color:white;"></p>
          <h6>Email: info@nset.in</h6>



        </aside>
            </div>
            <!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-4" style="min-height: 256px;">
               <aside class="impLink">
                  <header>
                     <h4 style="color: aliceblue;
                        font-size: 23px;">Important Links</h4>
                  </header>
                  <h5>
                     <ul class="list-links">
                        <?php
                           include("../footer2.php");
                           ?>
                     </ul>
                  </h5>
               </aside>
            </div>
            <!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-4" style="min-height: 256px;">
               <aside>
                  <header>
                     <h4 style="color: aliceblue;
                        font-size: 23px;">Get In Touch</h4>
                  </header>
                  <form method="POST">
                     <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" required="">
                     </div>
                     <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter email" required="">
                     </div>
                     <div class="form-group">
                        <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Enter phone" required="">
                     </div>
                     <div class="form-group">
                        <textarea class="form-control" rows="2" placeholder="Message"></textarea>
                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  <!--                                 <i class="pull-right"><a href="about-NSET">read more</a></i>
                     -->                                
                  <div>
                  </div>
               </aside>
            </div>
            <!-- /.col-md-3 -->
         </div>
         <footer class="container-fluid text-center">
            <p>©  All rights reserved,   Copyright 2020 - NSET</p>
         </footer>
      </div>
      <script>
         $(document).ready(function(){
         // Add smooth scrolling to all links in navbar + footer link
         $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
         // Make sure this.hash has a value before overriding default behavior
         if (this.hash !== "") {
         // Prevent default anchor click behavior
         event.preventDefault();
         
         // Store hash
         var hash = this.hash;
         
         // Using jQuery's animate() method to add smooth page scroll
         // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
         $('html, body').animate({
         scrollTop: $(hash).offset().top
         }, 900, function(){
         
         // Add hash (#) to URL when done scrolling (default click behavior)
         window.location.hash = hash;
         });
         } // End if
         });
         
         })
      </script>
   </body>
</html>