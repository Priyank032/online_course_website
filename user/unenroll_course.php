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
         $sql="delete from enrolled_course where cid=$cid and uid=$uid";
         $result=mysqli_query($conn,$sql);
         if($result)
         {
         	header("Location:courses.php");
         }
         else{
         	echo "not unenroll successfully";
         }
     }
?>