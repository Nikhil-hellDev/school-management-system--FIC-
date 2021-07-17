<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form </title>
    <link rel="stylesheet" type="text/css" href="addstudent.css">
</head>
<body>
    <div class="loginbox">
    
            <form method="get" action="">
            <p>student id</p>
            <input type="int" name="s_id" placeholder="Enter student id">
            <p>student name</p>
            <input type="text" name="s_name" placeholder="enter name">
    
                <p>d.o.b</p>
            <input type="date" name="dob" placeholder="Enter date of birth">
<p>gender</p>
			 <input type="text" name="gen" placeholder="Enter gender">
<p>father name</p>
            <input type="text" name="F_name" placeholder="Enter father name">
<p>admission year</p>
            <input type="date" name="admissonyear" placeholder="Enter admisson year">
<p>branch</p>
            <input type="text" name="branch" placeholder="Enter branch">
<p>phone number</p>
            <input type="int" name="phoneno" placeholder="Enter phone no">
<p>address</p>
            <input type="text" name="address" placeholder="Enter address">

            <input type="submit" name="submit" value="submit">
           
            
        </form>
        <?php
        If(isset($_GET['submit']))
            {
        $id=$_GET['s_id'];
$sn=$_GET['s_name'];
$db=$_GET['dob'];
$gn=$_GET['gen'];
$fn=$_GET['F_name'];
$ay=$_GET['admissonyear'];
$b=$_GET['branch'];
$pn=$_GET['phoneno'];
$ad=$_GET['address'];
         $query="INSERT INTO ADDD VALUE ('$id','$sn','$db','$gn','$fn','$ay','$b','$pn','$ad')";
mysqli_query($conn,$query);
            }
            ?>
    </div>
    
    </body>
</html>