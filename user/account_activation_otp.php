<?php
include'admin_conn.php';
$valid="";
session_start();

 if(isset($_POST['submit_otp']))
 {
  
     $otp=$_POST["otp"];
     $sql="select * from otp_expire where otp= $otp AND expire!=1 AND NOW() <= DATE_ADD(dt, INTERVAL 15 minute)";
      $result= mysqli_query($conn,$sql);
      $count  = mysqli_num_rows($result);
      if($count>0)
      {
        $sql="select user_email from otp_expire where otp= $otp";
        $result= mysqli_query($conn,$sql);
        $row= mysqli_fetch_array($result);
        $email=$row[0];
        $sql1="update user_reg set status='approved' where email='$email'";
        
        $res= mysqli_query($conn,$sql1);
        if($res)
        {
          $sql="delete from  otp_expire  WHERE otp=$otp";
           mysqli_query($conn,$sql);
          $_SESSION['msg1']="account verify successfully";
          header("location:login.php");
        }
      }
      else
      {
        
        echo "invalid otp";
      }
 }

 if(isset($_POST['resend_mail']))
{
  session_start();
  $otp = rand(100000,999999);
  $to_email = $_SESSION['email'];
    $subject = "Verify Your email";
        $body = " <!doctype html>
    <html>
    <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Email</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <style></style>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'></script>
    </head>
    <body oncontextmenu='return false' class='snippet-body'>
    <!DOCTYPE html>
    <html>

    <head>
    <title></title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <style type='text/css'>
    @media screen {
      @font-face {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 400;
        src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
      }

      @font-face {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 700;
        src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
      }

      @font-face {
        font-family: 'Lato';
        font-style: italic;
        font-weight: 400;
        src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
      }

      @font-face {
        font-family: 'Lato';
        font-style: italic;
        font-weight: 700;
        src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
      }
    }

    /* CLIENT-SPECIFIC STYLES */
    body,
    table,
    td,
    a {
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      -ms-interpolation-mode: bicubic;
    }

    /* RESET STYLES */
    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
    }

    table {
      border-collapse: collapse !important;
    }

    body {
      height: 100% !important;
      margin: 0 !important;
      padding: 0 !important;
      width: 100% !important;
    }

    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
      color: inherit !important;
      text-decoration: none !important;
      font-size: inherit !important;
      font-family: inherit !important;
      font-weight: inherit !important;
      line-height: inherit !important;
    }

    /* MOBILE STYLES */
    @media screen and (max-width:600px) {
      h1 {
        font-size: 32px !important;
        line-height: 32px !important;
      }
    }

    /* ANDROID CENTER FIX */
    div[style*='margin: 16px 0;'] {
      margin: 0 !important;
    }
    </style>
    </head>

    <body style='background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;'>
    <!-- HIDDEN PREHEADER TEXT -->
    <div style='display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Lato', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;'> We're thrilled to have you here! Get ready to dive into your new account. </div>
    <table border='0' cellpadding='0' cellspacing='0' width='100%'>
    <!-- LOGO -->
    <tr>
    <td bgcolor='#FFA73B' align='center'>
    <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
    <tr>
    <td align='center' valign='top' style='padding: 40px 10px 40px 10px;'> </td>
    </tr>
    </table>
    </td>
    </tr>
    <tr>
    <td bgcolor='#FFA73B' align='center' style='padding: 0px 10px 0px 10px;'>
    <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
    <tr>
    <td bgcolor='#ffffff' align='center' valign='top' style='padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;'>
    <h1 style='font-size: 48px; font-weight: 400; margin: 2;'>Welcome!!!</h1> <img src=' https://img.icons8.com/clouds/100/000000/handshake.png' width='125' height='120' style='display: block; border: 0px;' />
    </td>
    </tr>
    </table>
    </td>
    </tr>
    <tr>
    <td bgcolor='#f4f4f4' align='center' style='padding: 0px 10px 0px 10px;'>
    <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
    <tr>
    <td bgcolor='#ffffff' align='left' style='padding: 20px 30px 40px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
    <h5 style='text-align:center'>Hi, $first_name </h5>
    <p style='margin: 0;'>Verify Your account to copy the below otp and paste it  .The Below OTP will Be expire soon So submit the otp before expiring..</p>
    </td>
    </tr>
    <tr>
    <td bgcolor='#ffffff' align='left'>
    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
    <tr>
    <td bgcolor='#ffffff' align='center' style='padding: 20px 30px 60px 30px;'>
    <table border='0' cellspacing='0' cellpadding='0'>
    <tr>
    <td align='center' style='border-radius: 3px;' bgcolor='#FFA73B'><a href='#' target='_blank' style='font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #FFA73B; display: inline-block;'>  $otp </a></td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    </td>
    </tr> <!-- COPY -->
    <tr>
    <td bgcolor='#ffffff' align='left' style='padding: 0px 30px 0px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
    
    </td>
    </tr> <!-- COPY -->
    <tr>
    <td bgcolor='#ffffff' align='left' style='padding: 20px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
    
    </td>
    </tr>
    <tr>
    <td bgcolor='#ffffff' align='left' style='padding: 0px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
    <p style='margin: 0;'>If you have any questions, just reply to this email—we're always happy to help out.</p>
    </td>
    </tr>
    <tr>
    <td bgcolor='#ffffff' align='left' style='padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
    <p style='margin: 0;'>CEO,<br>Online Course</p>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    <tr>
    <td bgcolor='#f4f4f4' align='center' style='padding: 30px 10px 0px 10px;'>
    <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
    <tr>
    <td bgcolor='#FFECD1' align='center' style='padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
    <h2 style='font-size: 20px; font-weight: 400; color: #111111; margin: 0;'>Need more help?</h2>
    <p style='margin: 0;'><a href='#' target='_blank' style='color: #FFA73B;'>We&rsquo;re here to help you out</a></p>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    <tr>
    <td bgcolor='#f4f4f4' align='center' style='padding: 0px 10px 0px 10px;'>
    <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
    <tr>
    <td bgcolor='#f4f4f4' align='left' style='padding: 0px 30px 30px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;'> <br>
    <p style='margin: 0;'>If these emails get annoying, please feel free to <a href='#' target='_blank' style='color: #111111; font-weight: 700;'>unsubscribe</a>.</p>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    </body>

    </html>
    </body>
    </html>" ;
  $header = "From: onlinecourse495@gmail.com";
  $header .= "MIME-Version: onlinecourse495\r\n";  
  $header .= "Content-type: text/html;charset=UTF-8 \r\n";  
  if (mail($to_email, $subject, $body, $header))
  {
    $sql="insert into otp_expire(user_email,otp,expire)values('$to_email',$otp,0)";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
      $valid=1;
      $valid1=3;
      $val=1;
    }
  } 
  else
  {
    echo "Email sending failed...";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <title></title>
  <style>
    .form-gap {
      padding-top: 70px;
    }
  </style>
</head>
<body><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <div class="form-gap"></div> 
          <?php  
        if(isset($_SESSION['msg']))
        {
          echo "<h4 style='color: green'>". $_SESSION['msg']."</h4>" ;
        }  
        ?>
          
          
         <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="text-center">
              <h3><i class="fa fa-lock fa-4x"></i></h3>
              <h2 class="text-center">Enter OTP...</h2>
              <p>Otp will expire within 2 minutes ..</p>
              <div class="panel-body">

                <form  role="form" autocomplete="off" class="form" method="post" action="">

                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                      <input id="text" name="otp" placeholder="enter otp" class="form-control"  type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <input name="submit_otp" class="btn btn-lg btn-primary btn-block" value="Verify" type="submit">
                  </div>
                     <input type="submit" name="resend_mail" value="resend_mail" >
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

   