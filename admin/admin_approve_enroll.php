<?php
session_start();
include('includes/admin_conn.php');

if(!isset($_SESSION['name']))
{
  header("Location:admin_login.php");
}
?>

<?php

if (isset($_GET['eid'])) {
    $eid=$_GET["eid"];
    $sql1="select uemail,cname from enrolled_course where eid=$eid";
    $result1=mysqli_query($conn,$sql1);
    $row1=mysqli_fetch_array($result1);
    $sql="update enrolled_course set status='approved' where eid=$eid";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
    	$to_email = "$row1[0]";
               $subject = "approval of course";
               $body = "You are approved for ".$row1[1]." course";
               $headers = "From: onlinecourse495@gmail.com";
               $result=mail($to_email, $subject, $body, $headers);
               if (!$result) {
                    echo "Email sending failed...";
               } 
    }
    header("Location:index.php");
}           
?>