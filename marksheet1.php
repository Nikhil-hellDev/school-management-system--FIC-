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

<body >
<fieldset class="coll_name" >
	<h1 align="center" style="color:black;font-size:40; font-family: 'Kaushan Script', cursive;">FRS INNOVATION CENTER</h1>
</fieldset>



<!--<fieldset class="st_info" -->
<form>
    <table >
	<tr>
		<th><input type="text" placeholder="St.name" name="name"></th>
		<th><input type="text" placeholder="Roll no." name="roll"></th>
	</tr>
	<tr>
		<th><input type="text" placeholder="Course" name="course" value="<?php echo $row["course"]?>"></th>
		<th><input type="text" placeholder="Branch" name="branch" value="<?php echo $row["branch"]?>"></th>
	</tr>
	<tr>
		<th><input type="text" placeholder="sem" name="semester" value="<?php echo $row["semester"]?>"></th>
			
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
    <td><input placeholder="T/P" name="t1" value="<?php echo $row["t1"]?>"></td>
    <td><input placeholder="total marks" name="tm1" value="<?php echo $row["tm1"]?>"></td>
	<td><input placeholder="earned marks" name="em1"></td>
  </tr>
    <tr>
    <td><input placeholder="sub. 2" name="s2" value="<?php echo $row["s2"]?>"></td>
    <td><input placeholder="T/P" name="t2" value="<?php echo $row["t2"]?>"></td>
    <td><input placeholder="total marks"  name="tm2" value="<?php echo $row["tm2"]?>"></td>
	<td><input placeholder="earned marks" name="em2"></td>
  </tr>
    <!--<tr>
    <td><input placeholder="sub. 3" value="<></td>
    <td><input placeholder="T/P"></td>
    <td><input placeholder="total marks"></td>
	<td><input placeholder="earned marks"></td>
  </tr>-->
    <tr>
    <td><input placeholder="sub. 4" name="s3" value="<?php echo $row["s3"]?>"></td>
    <td><input placeholder="T/P" name="t3" value="<?php echo $row["t3"]?>"></td>
    <td><input placeholder="total marks" name="tm3" value="<?php echo $row["tm3"]?>"></td>
	<td><input placeholder="earned marks" name="em3"></td>
  </tr>
  <tr>
    <td><input placeholder="sub. 5" name="s4" value="<?php echo $row["s4"]?>"></td>
    <td><input placeholder="T/P" name="t4" value="<?php echo $row["t4"]?>"></td>
    <td><input placeholder="total marks" name="tm4" value="<?php echo $row["tm4"]?>"></td>
	<td><input placeholder="earned marks" name="em4"></td>
  </tr>
  <tr>
    <td><input placeholder="sub. 2" name="s5" value="<?php echo $row["s5"]?>"></td>
    <td><input placeholder="T/P" name="t5" value="<?php echo $row["t5"]?>"></td>
    <td><input placeholder="total marks" name="tm5" value="<?php echo $row["tm5"]?>"></td>
	<td><input placeholder="earned marks" name="em5" ></td>
  </tr>
  <!--  <tr>
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
    <td><input placeholder="pass/fail" name="result"></td>
    <td><input placeholder="sgpa" name="sgpa"></td>
    <td><input placeholder="cgpa" name="cgpa"></td>
	
  </tr>


</table>
<table>
<tr><th>
	ABS-Absent , ##- Grace </th>
</tr>
</table>
	</table>
<input class="btn" type="submit" name="save" value="save">
    </form>
    <?php
            //include("connection.php");

        If(isset($_GET['save']))
            {
    $na=$_GET['name'];
    $ra=$_GET['roll'];
    //$na=$_POST["name"];
    //$ra=$_POST["rollno"];
$co=$_GET['course'];
$b=$_GET['branch'];
$s=$_GET['semester'];
$su1=$_GET['s1'];
$tp1=$_GET['t1'];
$tm1=$_GET['tm1'];
    $em1=$_GET['em1'];
$su2=$_GET['s2'];
$tp2=$_GET['t2'];
$tm2=$_GET['tm2'];
    $em2=$_GET['em2'];
$su3=$_GET['s3'];
$tp3=$_GET['t3'];
$tm3=$_GET['tm3'];
$em3=$_GET['em3'];
    $su4=$_GET['s4'];
$tp4=$_GET['t4'];
$tm4=$_GET['tm4'];
$em4=$_GET['em4'];
    $su5=$_GET['s5'];
$tp5=$_GET['t5'];
$tm5=$_GET['tm5'];
    $em5=$_GET['em5'];
$rs=$_GET['result'];
    $sg=$_GET['sgpa'];
    $cg=$_GET['cgpa'];
            //echo "$tp5","$na", "$ra", "$co", "$b", "$s", "$su1" ,"$tp1", "$tm1", "$em1", "$su2", //"$tp2" ,"$tm2", "$em2", "$su3", "$tp3" ,"$tm3", "$em3" ,"$su4", "$tp4", "$tm4", "$em4", //"$su5", "$tp5" ,"$tm5", "$em5", "$rs";
            //echo "$em5";
            


//$query="INSERT INTO HELL (name,roll) VALUES ('$na','$ra')";
//,'$co',' $b','$s','$su1','$tp1','$tm1','$em1','$su2','$tp2','$tm2','$em2','$su3','$tp3',' //$tm3','$em3','$su4','$tp4','$tm4','$em4,'$su5','$tp5','$tm5','$em5','$rs','$sg','$cg')";

$query="INSERT INTO HELL VALUES( '$na','$ra','$co',' $b','$s','$su1','$tp1','$tm1','$em1','$su2','$tp2','$tm2','$em2','$su3','$tp3',' $tm3','$em3','$su4','$tp4','$tm4','$em4,'$su5','$tp5','$tm5','$em5','$rs','$sg','$cg')";

//$query="INSERT INTO AMD VALUES( '$na','$ra','$co',' //$b','$s','$su1','$tp1','$tm1','$em1','$su2','$tp2','$tm2','$em2','$su3','$tp3',' //$tm3','$em3','$su4','$tp4','$tm4','$em4,'$su5','$tp5','$tm5','$em5','$rs','$sg','$cg')";

            echo "$query";
mysqli_query($conn,$query);
            }
 ?>

    
</body>
</html>