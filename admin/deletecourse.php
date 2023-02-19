<?php
session_start();
if(!isset($_SESSION['name']))
{
  header("Location:admin_login.php");
}
?>
<?php 
include('includes/admin_conn.php');
 if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];
    echo  $id;
    $query = "delete from  courses where cid=$id";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:all_courses.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
       header("Location:all_courses.php");
    }
}
 ?>