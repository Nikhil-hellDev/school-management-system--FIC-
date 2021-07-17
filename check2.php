<html>
<head>
    <style>
		.mark_box{
			width:700px;
			padding: 5px;
		}
        
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
		margin-left:2px;
		
		
	
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
		th{
			color:black;
			font-size:; 
			font-family: 'Kaushan Script', cursive;
			
		}
input{
	font-size: 15px;
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
    <tittle></tittle>
    </head>
    <?php   
include("connection.php");

error_reporting(0);
  
session_start();
if(isset($_POST['submit']))
  {
?> 
    <?php 
	
    $semester=$_POST['semester'];
    $branch=$_POST['branch'];
     $course=$_POST['course'];
$sql = "SELECT semester, s1,s2 ,s3,s4,s5,t1,t2,t3,t4,t5,tm1,tm2,tm3,tm4,tm5,course,branch,semester FROM ASD WHERE semester ='$semester'";
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

<body>
    <form method="post" action="">
		<center>
			<br>
			
		<fieldset class="mark_box">
			<fieldset class="coll_name" >
	<h1 align="center" style="color:black;font-size:40; font-family: 'Kaushan Script', cursive;">FRS INNOVATION CENTER</h1>
</fieldset>
			

<table>	
	<tr>	
		<th><input type="text" placeholder="St.name" name="name" ></th>
        <th><input type="text" placeholder="Roll no." name="roll" ></th>
    
	</tr>
	<tr>
		<th><input type="text" placeholder="Course" name="course" value="<?php echo $row["course"]?>"></th>
        <th><input type="text" placeholder="Branch" name="branch" value="<?php echo $row["branch"]?>"></th>
    </tr>    
	<tr>	
		<th><input type="number" placeholder="semester" name="semester" value="<?php echo $row["semester"]?>"></th>
		<th></th>
	</tr>
</table>
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
		<td><input type="text" placeholder="sub. 1" name="s1" value="<?php echo $row["s1"]?>"></td>
        <td><input placeholder="T/P" type="text" name="t1" value="<?php echo $row["t1"]?>"></td>
        <td><input placeholder="total marks" type="number" name="tm1" value="<?php echo $row["tm1"]?>"></td>
        <td><input type="number" placeholder="earned marks" name="em1" value="em1"></td>
	</tr>
	<tr>
	  	<td><input type="text" placeholder="sub. 2" name="s2"  value="<?php echo $row["s2"]?>"></td>
        <td><input type="text" placeholder="T/P" name="t2" value="<?php echo $row["t2"]?>"></td>
        <td><input type="number" placeholder="total marks" name="tm2" value="<?php echo $row["tm2"]?>"></td>
        <td><input type="number" placeholder="earned marks" name="em2" ></td>
	</tr>
	<tr>
		<td><input type="text" placeholder="sub. 3" name="s3" value="<?php echo $row["s3"]?>"></td>
        <td><input type="text" placeholder="T/P" name="t3" value="<?php echo $row["t3"]?>"></td>
        <td><input type="number" placeholder="total marks" name="tm3" value="<?php echo $row["tm3"]?>"></td>
        <td><input type="number" placeholder="earned marks" name="em3" ></td>
	</tr>
	<tr>
		<td><input type="text" placeholder="sub. 4" name="s4" value="<?php echo $row["s4"]?>"></td>
        <td><input type="text"  placeholder="T/P" name="t4" value="<?php echo $row["t4"]?>"></td>
        <td><input type="number" placeholder="total marks" name="tm4" value="<?php echo $row["tm4"]?>"></td>
        <td><input type="number" placeholder="earned marks" name="em4" ></td>
	</tr>
	<tr>
		<td><input type="text" placeholder="sub. 5" name="s5" value="<?php echo $row["s5"]?>"></td>
        <td><input type="text" placeholder="T/P" name="t5" value="<?php echo $row["t5"]?>"></td>
        <td><input type="number" placeholder="total marks" name="tm5" value="<?php echo $row["tm5"]?>"></td>
        <td><input type="number" placeholder="earned marks" name="em5" ></td>
	</tr>
</table>
<table class="status">
	<tr style="background-color:lightgray">
  
    <th>Result</th>
    <th>SGPA</th>
    <th>CGPA</th>
	
  	</tr>
  	<tr>	
	
		<td><input type="text" name="result"  placeholder="pass/fail" ></td>
		<td><input type="text" name="sgpa" placeholder="sgpa" ></td>
		<td><input type="text" name="cgpa" placeholder="cgpa" ></td>

	</tr>
	</table>
	<table>
		<tr><th>
			ABS-Absent , ##- Grace </th>
</tr>
</table>
</table>
        <input class="btn" type="submit" name="save" value="save">
    
			</fieldset>
		</center>
	</form>
    <?php
    include("connection.php");
    if(isset($_POST['save']))
    {
        $na=$_POST['name'];
        $ra=$_POST['roll'];
        $co=$_POST['course'];
        $br=$_POST['branch'];
        $s=$_POST['semester'];
        $su1=$_POST['s1'];  
         $t1=$_POST['t1'];
         $tm1=$_POST['tm1'];
         $em1=$_POST['em1'];
         $su2=$_POST['s2'];
         $t2=$_POST['t2'];
         $tm2=$_POST['tm2'];
         $em2=$_POST['em2'];
         $su3=$_POST['s3'];
         $t3=$_POST['t3'];
         $tm3=$_POST['tm3'];
         $em3=$_POST['em3'];
        $su4=$_POST['s4'];
         $t4=$_POST['t4'];
         $tm4=$_POST['tm4'];
         $em4=$_POST['em4'];
         $su5=$_POST['s5'];
         $t5=$_POST['t5'];
         $tm5=$_POST['tm5'];
         $em5=$_POST['em5'];
 $rs=$_POST['result'];
        $sg=$_POST['sgpa'];
        $cg=$_POST['cgpa'];
    
         $query="INSERT INTO ENTER VALUES('$na','$ra','$co','$br','$s','$su1','$t1','$tm1','$em1','$su2','$t2','$tm2','$em2','$su3','$t3','$tm3','$em3','$su4','$t4','$tm4','$em4','$su5','$t5','$tm5','$em5','$rs','$sg','$cg')";
        mysqli_query($conn,$query);        
    }
    ?>
    </body>
</html>