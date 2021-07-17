<?php
include("connection.php");
?>
<html>
<head>
  <link rel="stylesheet" href="add subject.css">  
  <h1 align="center"><br> Add Subject Of Each SEM  </h1> 
</head>


<body  >
<form action="" method="get">

      <br>

<table class="course_info" align="center" >
	<tr>
        <th><input type="text" placeholder="Course" name="course"></th>
		<th><input type="text" placeholder="Branch" name="branch"></th>
	</tr>
	<tr>
		<th><input type="text" placeholder="Sem" name="semester"></th>
        <th><input type="text" placeholder="Total no of subject" name="totalsub"></th>
        
		
	</tr>
</table>  
  
  
	
<table align="center">
<!--<h2>marks info</h2>-->

<table class="sub_info" align="center">
  <tr style="background-color:lightgray">
  
    <th>Subject/code</th>
    <th>Theory/Practical</th>
    <th>Total marks</th>
	
  </tr>
  <tr>
    <td><input placeholder="sub. 1" name="s1"></td>
    <td><input placeholder="T/P" name="t1"></td>
    <td><input placeholder="total marks" name="tm1"></td>
	
  </tr>
    <tr>
    <td><input placeholder="sub. 2" name="s2"></td>
    <td><input placeholder="T/P" name="t2"></td>
    <td><input placeholder="total marks" name="tm2"></td>
	
  </tr>
    <tr>
    <td><input placeholder="sub. 3" name="s3"></td>
    <td><input placeholder="T/P" name="t3"></td>
    <td><input placeholder="total marks" name="tm3"></td>
    
    </tr>
    <tr>
    <td><input placeholder="sub. 4" name="s4"></td>
    <td><input placeholder="T/P" name="t4"></td>
    <td><input placeholder="total marks" name="tm4"></td>
	
  </tr>
  <tr>
    <td><input placeholder="sub. 5" name="s5"></td>
    <td><input placeholder="T/P" name="t5"></td>
    <td><input placeholder="total marks" name="tm5"></td>
	
  </tr>
<!--    <tr>
    <td><input placeholder="sub. 2"></td>
    <td><input placeholder="T/P"></td>
    <td><input placeholder="total marks"></td>
	
  </tr>
    <tr>
    <td><input placeholder="sub. 3"></td>
    <td><input placeholder="T/P"></td>
    <td><input placeholder="total marks"></td>
	
  </tr>
    <tr>
    <td><input placeholder="sub. 4"></td>
    <td><input placeholder="T/P"></td>
    <td><input placeholder="total marks"></td>
	
  </tr> -->
 
 
</table>
	

  </table>
    <br>
    <br>
    <center>	<input id="save" type="submit" value="submit" name="submit"></center>
    </form>
    <?php
        If(isset($_GET['submit']))
            {
$co=$_GET['course'];
$b=$_GET['branch'];
$s=$_GET['semester'];
$ts=$_GET['totalsub'];
$su1=$_GET['s1'];
$tp1=$_GET['t1'];
$tm1=$_GET['tm1'];
$su2=$_GET['s2'];
$tp2=$_GET['t2'];
$tm2=$_GET['tm2'];
$su3=$_GET['s3'];
$tp3=$_GET['t3'];
$tm3=$_GET['tm3'];
$su4=$_GET['s4'];
$tp4=$_GET['t4'];
$tm4=$_GET['tm4'];
$su5=$_GET['s5'];
$tp5=$_GET['t5'];
$tm5=$_GET['tm5'];

$query="INSERT INTO ASD VALUE('$co',' $b',' $s',' $ts',' $su1',' $tp1',' $tm1',' $su2',' $tp2',' $tm2',' $su3',' $tp3',' $tm3',' $su4',' $tp4',' $tm4',' $su5',' $tp5',' $tm5')";
mysqli_query($conn,$query);
            }
            ?>
    </body>




</html>