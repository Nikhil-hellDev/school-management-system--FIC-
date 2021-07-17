<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        
        body{margin:0;
            padding:0px;
        
        }
        input{
            border-left: 0;
            background-color: white;
            border-bottom: 2px solid;
            border-top:0;
            height:25px;
            width:200px;
	border-radius: 0px;
}
        .aa{
            height:100%;;
            background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(school.jpg);
            background-size: cover;
            background-position: center;
            display:flex;
            justify-content: center;
            align-items:baseline;
        }
        .loginbox{
            opacity: ;
            border-radius: 10px;
            padding:10px;
            padding-left: 70px;
            background-color:whitesmoke;
            
            width: 300px;
        }
        #button{
            font-size: 20px;
            height: 30px;
            border-radius: 10px;
            border-width:3px;
            border-color:blue;
            box-shadow: 0px 5px 8px 5px #888888;
            background-color: forestgreen;
        }
       
    </style>
<title>Add student</title>
    <link rel="stylesheet" type="text/css" href="">
</head>
<body>
    <div class="aa">
    <div class="loginbox">
        
            <form method="get" action="">
                <p >Student id</p>
               
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="int" name="id" placeholder="&nbsp;Enter student id">
                <p>&nbsp;Student name</p>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="name" placeholder="&nbsp;enter name">
    
                <p>D.O.B</p>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="date" name="dob" placeholder="&nbsp;Enter date of birth">
                <p>Gender</p>
               
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="gender" placeholder="&nbsp;Enter gender">
                <p>Father name</p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="fname" placeholder="&nbsp;Enter father name">
                <p>Admission year</p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" name="admissionyear" min="2015" placeholder="&nbsp;Enter admisson year">
                <p>Branch</p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="branch" placeholder="&nbsp;Enter branch">
                <p>Email id</p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="email" name="email" placeholder="&nbsp;Enter email id">
                <p>Phone number</p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="int" name="phoneno" placeholder="&nbsp;Enter phone no">
                <p>Address</p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="address" placeholder="&nbsp;Enter address">
                <br><br><br>
                <input id="button" type="submit" name="submit" value="Submit">
           
            
        </form>
        
        <?php

include("connection.php");
If(isset($_GET['submit']))
{            
$id=$_GET['id'];
$sn=$_GET['name'];
$db=$_GET['dob'];
$gn=$_GET['gender'];
$fn=$_GET['fname'];
$ay=$_GET['admissionyear'];
$b=$_GET['branch'];
$em=$_GET['email'];
$pn=$_GET['phoneno'];
$ad=$_GET['address'];
    
     $query="INSERT INTO ADDS VALUE('$id','$sn','$db','$gn','$fn','$ay','$b','$em','$pn','$ad')";
mysqli_query($conn,$query);
            }
            ?>
    </div>
    </div>
    </body>
</html>