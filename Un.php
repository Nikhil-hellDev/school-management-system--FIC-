<?php/*
include("connection.php");
$query="INSERT INTO ADDD VALUE ('12','saf','12/12/2008','male','safe','2018','cse','32','wer')";
mysqli_query($conn,$query);
*/?>
<?php
    include("connection.php");
            If(isset($_GET['submit']))
            {
$id=$_GET['s_id'];
$sn=$_GET['s_name'];
$db=$_GET['dob'];
$gn=$_GET['gen'];
$fn=$_GET['F_name'];
    $ay=$_GET['admisson year'];
$b=$_GET['branch'];
$pn=$_GET['phone no'];
$ad=$_GET['address'];
         $query="INSERT INTO ADDD(s_id,s_name,dob,gen,F_name,admisson year,branch,phone,address) VALUE ('$id','$sn','$db','$gn','$fn','$ay','$b','$pn','$ad')";
mysqli_query($conn,$query);
            }
            ?>