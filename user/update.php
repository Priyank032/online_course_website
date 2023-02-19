<?php
session_start();
if(!isset($_SESSION['uid']))
{
  header("Location:login.php");
}

?>
<?php
   include('admin_conn.php'); 
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $uid=$_POST['uid'];
        $fName=$_POST["fname"];
        $lName=$_POST["lname"];
        $email=$_POST["email"];
        $Phone=$_POST["Phone"];
        $City=$_POST["City"];
         $State=$_POST["State"];
        $Country=$_POST["Country"];
       
            // $sql="update courses set cname='$cname', cimg='$filename',cdesc='$cdesc',cdur='$cdur',cfees='$cfees' where cid=$cid";
            // $result=mysqli_query($conn,$sql);
            // if($result)
            // {
            //     echo "updated successfully<br>";
            //     include'all_courses.php';
            // }
            // else
            // {
            //     echo " not updated successfully<br>";
            // }
        
        // else{
             $sql="update user_reg set first_name='$fName',last_name='$lName',email='$email',mobile_no='$Phone',  city='$City', state='$State' , country='$Country' where uid=$uid";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                 include'index.php';
            }
            else
            {
                echo " not updated successfully<br>";
            }
        // }
    }       
 ?>