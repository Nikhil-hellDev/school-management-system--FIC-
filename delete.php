<?php
include("connection.php");
error_reporting(0);
$id=$_GET['id'];
$query="DELETE FROM `adds` WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
    echo "<font color='green'>record deleted from table";
}
else{
    
    echo "<font color='red'>sorry,deleting process has been failed";
}
?>