<?php
    include("connection.php");
//error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
  <title>fiz robotics</title>
  <meta charset="utf-8">
	<link rel="stylesheet" href="addstudent.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
    
<body>

<div class="container1"  >
  
 <!-- <marquee direction="right" width=100% height=100%>-->
    <h2 align="center">Welcome</h2>      
  
  </div>





<div class="container">
	<div class="row">
		<br>
                     <form method="get" action="">
		
		<table>
			
				<div class="details"  >
        			<td>
					<label for="s_id"><b>Student Id:&nbsp;</b></label><br>
							<input type="text" placeholder="Enter unique id" name="s_id" required /><br>
					<label for="s_name"><b>Student Name:&nbsp;</b></label><br>
							<input type="text" placeholder="Student name" name="s_name" required /><br>
					<label for="dob"><b>Date of birth:&nbsp;</b></label><br>
							<input type="date"  class="aa" placeholder="D.O.B." name="dob" required /><br>
					<label for="Gender"><b>Gender</b></label><br>
					<input type="text"  class="aa" placeholder="Enter the gender" name="gen" required /><br>

					<label for="F_nmae"><b>Father Name&nbsp;</b></label><br>
							<input type="text" placeholder="Enter father name" name="F_name" required /><br>
					<label for="year"><b>Admission year:&nbsp;&nbsp;</b></label><br>
							<input type="date" class="bbyear" min="2010" max="2050" step="1" value="2019"placeholder="Enter admissin year" name="admissonyear" required /><br>
					<label for="branch"><b>Branch:&nbsp;&nbsp;</b></label><br>
							<input type="text" placeholder="Enter branch" name="branch" required /><br>
					<label for="Email"><b>Email Id:&nbsp;&nbsp;</b></label><br>
							<input type="text" placeholder="Enter email id" name="email" required /><br>
					<label for="phone"><b>phone:&nbsp;&nbsp;</b></label><br>
							<input type="text" placeholder="phone" name="phoneno" required /><br>
					


					<label for="address"><b>Address:&nbsp;</b></label><br>
							<input type="text" placeholder="Enter address" name="address" required /><br>

					<input type="submit" name="submit" alt="submit" />			
					</td>
				<!--	<td>
				upload photo
							
						
					</td>-->
                    </div>
			
			
		</table>	
		
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
$e=$_GET['email'];
$pn=$_GET['phoneno'];
$ad=$_GET['address'];
$query="INSERT INTO `addd` VALUE('$id','$sn','$db','$gn','$fn','$ay','$b','$e','$pn','$ad')";
mysqli_query($conn,$query);
            }
            ?>
				</div>
			
			
</div>

</body>
</html>