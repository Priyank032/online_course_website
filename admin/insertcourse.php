<?php
session_start();
if(!isset($_SESSION['name']))
{
  header("Location:admin_login.php");
}
?>
<?php
include('includes/admin_conn.php');
if(isset($_POST['insert_course']))
{
   $cname=$_POST["cname"];
   $cdesc=$_POST["cdesc"];
   $cdur=$_POST["cdur"];
   $cfees=$_POST["cfees"];
   $filename=$_FILES["uploadfile"]["name"];
   $tempname=$_FILES["uploadfile"]["tmp_name"];
   $folder='../course_img/'.$filename;
   if(move_uploaded_file($tempname, $folder))
   {
      $sql="insert into courses(cname,cimg,cdesc,cdur,cfees)values('$cname','$filename','$cdesc',$cdur,$cfees)";
      $result=mysqli_query($conn,$sql);
      if($result)
      {   
       echo '<script> alert("Data Saved"); </script>';
        header('Location: all_courses.php');
      }//if loop result wala
      else
      {
       echo '<script> alert("Data Not Deleted"); </script>';
      }
    }//move if loop
    else{
      echo "file not uploaded ";
    }   
}//if post wala
?>