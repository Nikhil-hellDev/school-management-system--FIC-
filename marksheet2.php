<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<style>
	.status{
		width:700;
	
	}
	.coll_name{
		
		border-width:1;
		width:674;
		background-color:;
		border-radius:1px;
		border-color:black;
		padding-top:-10px;
		margin-left:0;
		
		
	
	}
	.st_info{
		border-width:1;
		width:700;
		border-radius:1px;
		border-color:black;
		padding-left:10px
		margin-left:;
	}
	
	.marks_info{
	
	
	
	
	
	}
	table {
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width:700;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 7px;
  
}
input{
	width:100%;
	height:100%;
	border-width:0;
	
	
}
placeholder{
opacity:0.9;
}
	.btn{
			padding-top: 5px;
	border-radius: 10px;
	height:30px;
	width: 150px;
	background-color: #f44336;
	border: none;
	font-size: 25px;
	padding-bottom: 35px;
	
    }
	
	
</style>
<?php   
include("connection.php");

error_reporting(0);
  
session_start();
if(isset($_POST['submit']))
  {
   


?>


     
    <?php 
	
    $semester=$_POST['semester'];
    $roll=$_POST['rollno'];
    
$sql = "SELECT name,roll,branch,course,semester, s1,s2 ,s3,s4,s5,t1,t2,t3,t4,t5,tm1,tm2,tm3,tm4,tm5,em1,em2,em3,em4,em5,result,sgpa,cgpa FROM ENTER WHERE semester ='$semester'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc())
{
     echo "";
	break;
}
}
else 
{
echo "0 results";
} 
}
    ?>
    
    <body >
<fieldset class="coll_name" >
	<h1 align="center" style="color:black;font-size:40; font-family: 'Kaushan Script', cursive;">FRS INNOVATION CENTER</h1>
</fieldset>



<!--<fieldset class="st_info" -->
<table >
	<tr>
		<th><input type="text" placeholder="St.name" name="name" value="<?php echo $row["name"]?>"></th>
		<th><input type="text" placeholder="Roll no." value="<?php echo $row["roll"]?>"></th>
	</tr>
	<tr>
		<th><input type="text" placeholder="Course" value="<?php echo $row["course"]?>"></th>
		<th><input type="text" placeholder="Branch" value="<?php echo $row["branch"]?>"></th>
	</tr>
	<tr>
		<th><input type="text" placeholder="sem" value="<?php echo $row["semester"]?>"></th>
			
		<th></th>
	</tr>
</table>
<!--</fieldset>-->

<table class="marks_info">
<!--<h2>marks info</h2>-->

<table>
  <tr style="background-color:lightgray">
  
    <th>Subject/code</th>
    <th>Theory</th>
    <th>Total marks</th>
	<th>Earned marks</th>
  </tr>
  <tr>
    <td><input placeholder="sub. 1" name="s1" type="text" value="<?php echo $row["s1"]?>"></td>
    <td><input placeholder="T/P" value="<?php echo $row["t1"]?>"></td>
    <td><input placeholder="total marks" value="<?php echo $row["tm1"]?>"></td>
	<td><input placeholder="earned marks" value="<?php echo $row["em1"]?>"></td>
  </tr>
    <tr>
    <td><input placeholder="sub. 2" value="<?php echo $row["s2"]?>"></td>
    <td><input placeholder="T/P" value="<?php echo $row["t2"]?>"></td>
    <td><input placeholder="total marks" value="<?php echo $row["tm2"]?>"></td>
	<td><input placeholder="earned marks" value="<?php echo $row["em2"]?>"></td>
  </tr>
    <tr>
    <td><input placeholder="sub. 3"  value="<?php echo $row["s3"]?>"></td>
    <td><input placeholder="T/P" value="<?php echo $row["t3"]?>"></td>
    <td><input placeholder="total marks" value="<?php echo $row["tm3"]?>"></td>
    
	<td><input placeholder="earned marks" value="<?php echo $row["em3"]?>"></td>
  </tr>
    <tr>
    <td><input placeholder="sub. 4" value="<?php echo $row["s4"]?>"></td>
    <td><input placeholder="T/P" value="<?php echo $row["t4"]?>"></td>
    <td><input placeholder="total marks" value="<?php echo $row["tm4"]?>"></td>
	<td><input placeholder="earned marks" value="<?php echo $row["em4"]?>"></td>
  </tr>
  <tr>
    <td><input placeholder="sub. 5" value="<?php echo $row["s5"]?>"></td>
    <td><input placeholder="T/P" value="<?php echo $row["t5"]?>"></td>
    <td><input placeholder="total marks"value="<?php echo $row["tm5"]?>"></td>
	<td><input placeholder="earned marks" value="<?php echo $row["em5"]?>"></td>
  </tr>
  <!--  <tr>
    <td><input placeholder="sub. 2"></td>
    <td><input placeholder="T/P"></td>
    <td><input placeholder="total marks"></td>
	<td><input placeholder="earned marks"></td>
  </tr>
    <tr>
    <td><input placeholder="sub. 3"></td>
    <td><input placeholder="T/P"></td>
    <td><input placeholder="total marks"></td>
	<td><input placeholder="earned marks"></td>
  </tr>
    <tr>
    <td><input placeholder="sub. 4"></td>
    <td><input placeholder="T/P"></td>
    <td><input placeholder="total marks"></td>
	<td><input placeholder="earned marks"></td>
  </tr>-->
 
 
</table>
<table class="status">
	<tr style="background-color:lightgray">
  
    <th>Result</th>
    <th>SGPA</th>
    <th>CGPA</th>
	
  </tr>
  <tr>
    <td><input placeholder="pass/fail" value="<?php echo $row["result"]?>"></td>
    <td><input placeholder="sgpa" value="<?php echo $row["sgpa"]?>"></td>
    <td><input placeholder="cgpa" value="<?php echo $row["cgpa"]?>"></td>
	
  </tr>


</table>
<table>
<tr><th>
	ABS-Absent , ##- Grace </th>
</tr>
</table>
	</table>
<input class="btn" type="submit" name="submit" value="Print">
</body>
</html>
