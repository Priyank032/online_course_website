<?php
session_start();
include'admin_conn.php';
if(!isset($_SESSION['uid']))
{
  header("Location:login.php");
}
?>

<?php

    if(isset($_POST['submit']))
{
         $cid=$_POST["submit"];
         $uid=$_SESSION['uid'];
         $sql="select cname,cid from courses where cid=$cid";
         $result=mysqli_query($conn,$sql);
         $row=mysqli_fetch_array($result);
         $sql1="select uid,first_name,email from user_reg where uid=$uid";
         $result1=mysqli_query($conn,$sql1);
         $row1=mysqli_fetch_array($result1);
         $sql2="insert into enrolled_course(uid,uname,uemail,cid,cname) values($row1[0],'$row1[1]','$row1[2]',$row[1],'$row[0]')";
          $result2=mysqli_query($conn,$sql2);
          if($result2)
          {
               
                  
               $to_email = "$row1[2]";
               $subject = "approval of course";
               $body =" <!doctype html>
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
    <div style='display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Lato', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;'>  </div>
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
    <h1 style='font-size: 48px; font-weight: 400; margin: 2;'>Welcome!!!  </h1> <img src=' https://img.icons8.com/clouds/100/000000/handshake.png' width='125' height='120' style='display: block; border: 0px;' />
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
    <h3 style='color: #FFA73B'>Welcome!! $row1[1]</h3>
    <p style='margin: 0;'>Welcome to $row[0]! We're glad you are here .Your course will be approve within two days..Then You start learning..  </p>
    </td>
    </tr>
    <tr>
    <td bgcolor='#ffffff' align='left'>
    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
    <tr>
    <td bgcolor='#ffffff' align='center' style='padding: 20px 30px 60px 30px;'>
    <table border='0' cellspacing='0' cellpadding='0'>
    <tr>
    <td align='center' style='border-radius: 3px;' bgcolor='#FFA73B'><a href='courses.php' target='_blank' style='font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #FFA73B; display: inline-block;'>  Explore Courses </a></td>
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
    </html>";
               $header = "From: onlinecourse495@gmail.com";
               $header .= "MIME-Version: OnlineCourse \r\n";  
              $header .= "Content-type: text/html;charset=UTF-8 \r\n";  
               $result=mail($to_email, $subject, $body, $header);
               if ($result) {
                   include'single_course.php';
                     echo "<script>alert('you are Successfully enrolled for course check your mail')</script>";
                     
               } 
               else{
                 echo "Email sending failed...";
               }
               
          }
          else
          {
          	echo "not insert successfully";
            echo mysqli_error();
          }

    }

?>