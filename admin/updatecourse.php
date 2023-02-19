<?php
   include('includes/admin_conn.php'); 
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $cid=$_POST['update_id'];
        $cname=$_POST["cname"];
        $cdesc=$_POST["cdesc"];
        $cdur=$_POST["cdur"];
        $cfees=$_POST["cfees"];
        $filename=$_FILES["uploadfile"]["name"];
        $tempname=$_FILES["uploadfile"]["tmp_name"];
        $folder='../course_img/'.$filename;
        if(move_uploaded_file($tempname, $folder))
        {
            $sql="update courses set cname='$cname', cimg='$filename',cdesc='$cdesc',cdur='$cdur',cfees='$cfees' where cid=$cid";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                echo "updated successfully<br>";
                include'all_courses.php';
            }
            else
            {
                echo " not updated successfully<br>";
            }
        }
        else{
             $sql="update courses set cname='$cname',cdesc='$cdesc',cdur='$cdur',cfees='$cfees' where cid=$cid";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                echo "updated successfully<br>";
                 include'all_courses.php';
            }
            else
            {
                echo " not updated successfully<br>";
            }
        }
    }       
 ?>