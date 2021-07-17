
<!DOCTYPE html>
<html>
<head>
<title>Add student</title>
    <link rel="stylesheet" type="text/css" href="">
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
            <input type="text" name="fname" placeholder="Enter father name">
<p>admission year</p>
            <input type="date" name="admissionyear" placeholder="Enter admisson year">
<p>branch</p>
            <input type="text" name="branch" placeholder="Enter branch">
                <p>email id</p>
            <input type="email" name="email" placeholder="Enter email id">
<p>phone number</p>
            <input type="int" name="phoneno" placeholder="Enter phone no">
<p>address</p>
            <input type="text" name="address" placeholder="Enter address">
<br><br>
            <input type="submit" name="submit" value="submit">
           
            
        </form>
        
        <?php
        include("connection.php");
      
        If(isset($_GET['submit']))
            {
$id=$_GET['s_id'];
$sn=$_GET['s_name'];
$db=$_GET['dob'];
$gn=$_GET['gen'];
$fn=$_GET['fname'];
$ay=$_GET['admissionyear'];
$b=$_GET['branch'];
$em=$_GET['email'];
$pn=$_GET['phoneno'];
$ad=$_GET['address'];
            
         $query="INSERT INTO ADDD VALUES (12345,'nikhil',2000-6-8,'male','samay',2019-4-7,'cse','fgfggf@gmail.com',656565,'bbnhbhbnbn')";
$data=mysqli_query($conn,$query);
           
            if($data)
            {
                
            echo "$id";
                echo "data inserted";
            }
            else
            {
                echo "data not inserted";
            }
            }
            ?>
    </div>
    
    </body>
</html>