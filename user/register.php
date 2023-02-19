<?php
session_start();
include'admin_conn.php';
?>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
   $first_name=$_POST["firstname"];
   $last_name=$_POST["lastname"];
   $gender=$_POST["gender"];
   $email=$_POST["email"];
   $mobile_no=$_POST["phonenumber"];
   $state=$_POST["stt"];
   $_SESSION['email']=$email;
   $city=$_POST["city"];
   $country=$_POST["country"];
    $password=$_POST["password"];
   $filename=$_FILES["uploadfile"]["name"];
   $tempname=$_FILES["uploadfile"]["tmp_name"];
   $folder='user_images/'.$filename;

   if(move_uploaded_file($tempname, $folder))
   {
    $sql="insert into user_reg(first_name,last_name,gender,email,mobile_no,state,city,country,password,user_image)
        values('$first_name','$last_name','$gender','$email',$mobile_no,' $state',' $city',' $country','$password','$filename')";
      $result=mysqli_query($conn,$sql);
      if($result)
      {
        $otp = rand(100000,999999);
        $to_email =  $email;
        $subject = "Verify Your email";
        $body = " <!doctype html>
    <html>
    <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - BBBootstrap</title>
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
        $header .= "MIME-Version: onlinecourse \r\n";  
        $header .= "Content-type: text/html;charset=UTF-8 \r\n";  
        if (mail($to_email, $subject, $body, $header))
        {
            $sql="insert into otp_expire(user_email,otp,expire)values('$email',$otp,0)";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                $_SESSION['msg']="Check your mail for account activation";
               header("location:account_activation_otp.php");
            }
        } 
        else
        {
            echo "Email sending failed...";
        }
      }
      else
      {
         echo "<script>alert('Email already registered')</script>";
      }
   }
   else
   {
    $sql="insert into user_reg(first_name,last_name,gender,email,mobile_no,state,city,country,password)
        values('$first_name','$last_name','$gender','$email',$mobile_no,' $state',' $city',' $country','$password')";
      $result=mysqli_query($conn,$sql);
      if($result)
      {
        $otp = rand(100000,999999);
        $to_email =  $email;
         $subject = "Verify Your email";
        $body = " <!doctype html>
    <html>
    <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - BBBootstrap</title>
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
        $header .= "MIME-Version: onlinecourse \r\n";  
        $header .= "Content-type: text/html;charset=UTF-8 \r\n";  
        if (mail($to_email, $subject, $body, $header))
        {
            $sql="insert into otp_expire(user_email,otp,expire)values('$email',$otp,0)";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                $_SESSION['msg']="Check your mail for account activation";
               header("location:account_activation_otp.php");
            }
        } 
        else
        {
            echo "Email sending failed...";
        }
      }
      else
      {
        echo "<script>alert('Email already registered')</script>";
      }
   }

}  

?>
<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>  Registration Form  </title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="user_reg.js"></script>
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

      </style>
   </head>
<body>
  <div class="container" >
    <div class="title " style="margin-top: 100px;">Registration</div>
    <div class="content">
      <form action="register.php" method="post"  enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input  type="text" name="firstname" id = "txt" onkeyup = "Validate(this)" required /> 
                        <div id="errFirst"></div>   
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lastname" id = "txt" onkeyup = "Validate(this)" placeholder="hyphen or single quote OK" required />  
                        <div id="errLast"></div>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input required type="text" name="email" id = "email"  onchange="email_validate(this.value);" />   
            <div class="status" id="status"></div>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input required type="text" name="phonenumber" id="phone"  maxlength="10" onkeyup="validatephone(this);" placeholder="May be Whatsapp"/>
          </div>
          <div class="input-box">
            <span class="details">State</span>
            <input required type="text" name="stt" id="state"  minlength="5" maxlength="100"  placeholder="Ex.Madhya Pradesh"/>
           
          </div>
          <div class="input-box">
            <span class="details">City</span>
              <input required type="text" name="city" id="city"  minlength="5" maxlength="100"  placeholder="Ex.Gwalior"/>
          </div>
          <div class="input-box">
            <span class="details">Country</span>
             <input required type="text" name="country" id="country"  minlength="5" maxlength="100"  placeholder="Ex.Gwalior"/>
            

          </div>
           <div class="input-box">
            <span class="details">Upload Image</span>
           <input type="file" name="uploadfile">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input required name="password" type="password" class="form-control inputpass" minlength="3" maxlength="16"  id="pass1" />
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input required name="password" type="password" class="form-control inputpass" minlength="3" maxlength="16" placeholder="Enter again to validate"  id="pass2" onkeyup="checkPass(); return false;" />
                        <span id="confirmMessage" class="confirmMessage"></span>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <input type="radio" name="gender" value="male" checked>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <input type="radio" name="gender" value="female">
            <span class="gender">Female</span>
          </label>
          
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
