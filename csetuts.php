<?php
if(isset($_POST['submit']))
{
    

include(connection.php);
error_reporting(0);
    $standard =$_POST['standard'];
    $name =$_POST['standard'];
    $query="SELECT * FROM 'student' WHERE 'standard'='$standard'AND 'name' LIKE '%$name%' ";
    $data=mysqli_query($conn,$query);
if(mysqli_num_rows($data)<1)
{
  
    
    
}
}
?>