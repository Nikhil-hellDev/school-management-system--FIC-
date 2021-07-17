
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
</style
<?php   
include("connection.php");

error_reporting(0);
  
session_start();
if(isset($_POST['submit']))
  {
   


?>
<table>
<tr>
    <th>s1</th>
    <th>s2</th>
    <th>s3</th>
     <th>s4</th>
    <th>s5</th>
    </tr>

     
    <?php 
    $semester=$_POST['semester'];
    $branch=$_POST['branch'];
     $course=$_POST['course'];
$sql = "SELECT semester, s1,s2 ,s3,s4,s5  FROM ASD WHERE semester ='$semester'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc())
{
    echo"<tr> 
            <td>".$row['semester']."</td>
            <td>".$row['s1']."</td>
            <td>".$row['s2']."</td>
            <td>".$row['s3']."</td>
            <td>".$row['s4']."</td>
            <td>".$row['s5']."</td>
            <td><a href='delete.php?id=$row[id]'>DELETE</a></td> 
        
            <td><a href='updsub.php?semester=$row[semester]&s1=$row[s1]&s2=$row[s2]&s3=$row[s3]&s4=$row[s4]&s5=$row[s5]&b=$row[branch]'>EDIT</a></td> 
            </tr>" ;
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
		<th><input type="text" placeholder="St.name" ></th>
		<th><input type="text" placeholder="Roll no."></th>
	</tr>
	<tr>
		<th><input type="text" placeholder="Course"></th>
		<th><input type="text" placeholder="Branch"></th>
	</tr>
	<tr>
		<th><input type="text" placeholder="sem"></th>
			<th><input type="submit" name="submit" value="submit"></th>
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
    <td><input placeholder="sub. 1" value="<?php echo $row['s1']?>"></td>
    <td><input placeholder="T/P"></td>
    <td><input placeholder="total marks"></td>
	<td><input placeholder="earned marks"></td>
  </tr>
    <tr>
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
  </tr>
  <tr>
    <td><input placeholder="sub. 1"></td>
    <td><input placeholder="T/P"></td>
    <td><input placeholder="total marks"></td>
	<td><input placeholder="earned marks"></td>
  </tr>
    <tr>
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
  </tr>
 
 
</table>
<table class="status">
	<tr style="background-color:lightgray">
  
    <th>Result</th>
    <th>SGPA</th>
    <th>CGPA</th>
	
  </tr>
  <tr>
    <td><input placeholder="pass/fail"></td>
    <td><input placeholder="sgpa"></td>
    <td><input placeholder="cgpa"></td>
	
  </tr>


</table>
<table>
<tr><th>
	ABS-Absent , ##- Grace </th>
</tr>
</table>
</body>
</html>
    