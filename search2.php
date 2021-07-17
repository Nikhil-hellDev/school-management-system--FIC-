<html>
<head>
	<style>
		body{
	margin:0;
	padding:0;		
}
		.jumbotron{
	
	width:100%;
	height:100px;
	background-color:darkslateblue;
	box-shadow: 0px 10px  8px #888888;
	box-decoration-break:;
}
        a{ color:black;
            background-color:orangered;
            padding:3px;
        }
.search{
	height:100vh;
	background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url();
	background-size: cover;
	background-position: center;
	display:flex;
	justify-content: center;
	align-items:baseline;
	font-family: sans-serif;
	

}
		h1{
	color:blueviolet;
	font-size: 60px;
}
h2{
	font-size: 45px;
	
	margin-bottom: 70px;
	letter-spacing: 2px;
	
}
span{
	color:#f44336;
}
input{
	
	border-radius: 10px;
	font-size:20px;
	
	padding-top: 5px;
	padding-bottom: 8px;
	width:180px;
	color:;
	
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
		
	.aaa{
	margin-top: 100px;
	
}
		
		table{
	
}
#s3{height:40px;
    font-size: 25px;
	
	width:160px;
}
#s4{
	height:40px;
    font-size: 25px;
    width:100px;
	
}
#s1{
	height:40px;
    font-size: 25px;
    width:160px;
    background-color:dimgrey;
    color:aliceblue;
	
	
}
#s2{
	height:40px;
    font-size: 25px;
    width:100px;
    background-color:dimgrey;
    color:aliceblue;
	
	
}



	
		
		
		
		
		
	</style>
	<script>
		
		
	</script>
</head>
<?php   
include("connection.php");

  error_reporting(0);
session_start();
if(isset($_POST['submit']))
  {
    
    $id=$_POST['id'];
    $n=$_POST['name'];
$sql = "SELECT id, name,dob ,gender,fname,admissionyear,branch,email,phoneno,address  FROM ADDS WHERE id ='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - name: " . $row["name"]. "-dateofbirth " .  $row["dob"]."-gender " . $row["gender"]."-fathername". $row["fname"]."-admission year". $row["admissionyear"]."-branch". $row["branch"]."-email". $row["email"]."-phoneno". $row["phoneno"]."-address". $row["address"].
        "<td><a href='delete.php?id=$row[id]'>DELETE</a></td>
        <td><a href='update.php?id=$row[id]&sn=$row[name]&'>EDIT</a></td>"
        ."<br>";
    
    break;
}
} else {
echo "0 results";
} 
}
    else{
        echo "";
    }
    

//,gender, fname,admission year,branch,phoneno,address    
?>
<body>
	<div class="search" > <br>
		<form class="aaa" action="search2.php" method="post">
			<h2>Find <span>student</span> that <span>you</span> want:</h2>
		<!--	<div class="form box">
				<input class="search-field branch" name="branch" type="text"
					   placeholder="Branch">
				<input class="search-field sem" name="semester" type="number"
					   placeholder="Semester" min="1" max="8" step="1">
				<input class="search-field name" name="name" type="text"
					   placeholder="Student name">
				<input class="search-field rollno" name="id" type="text"
					   placeholder="Student roll no.">
				<input type="submit" value="submit" name="submit">   
<br>
				
			
			</div>
			-->
			<br>
			
			<table border=1>
				<tr>
					<td align="center" id="s1">
					student name</td>
					<td align="center" id="s1">Roll no.</td>
					
					<td align="center" id="s1">F.name</td>

					<td align="center" id="s1"> contact no</td>
					<td align="center" id="s2">branch</td>
					<td align="center" id="s2">DOB</td>
					<td align="center" id="s2"> edit</td>
					<td align="center" id="s2">delete</td>

				</tr>
					<div class="S_list">
						<tr>
							<td id="s3"><input id="a" type="text" value="<?php echo  $row["name"]?>"></td>
							<td id="s3"><input id="a" type="text" value="<?php echo  $row["id"]?>"></td>
							<td id="s3"><input id="a" type="text" value="<?php echo  $row["fname"]?>"></td>
							<td id="s3"><input id="a" type="text" value="<?php echo  $row["phoneno"]?>"></td>
							<td id="s4"><input id="a" type="text" value="<?php echo  $row["branch"]?>"></td>
							<td id="s4"><input id="a" type="text" value="<?php echo  $row["dob"]?>"></td>
                            <td id="s4"><a href='delete.php?id=<?php echo $row[id]?>'>DELETE</a></td>
                             <td id="s4"><a href='update.php?id=<?php echo $row[id]?>&sn=<?php echo $row[name]?> &db=<?php echo $row[dob]?>&gn=<?php echo $row[gender]?>&fn=<?php echo $row[fname]?>&ay=<?php echo $row[admissionyear]?>&b=<?php echo $row[branch]?>&em=<?php echo $row[email]?>&pn=<?php echo $row[phoneno]?>&ad=<?php echo $row[address]?>'>EDIT</a></td>
							
							

						</tr>
				</div>

			</table>


			
			
		</form>
  
	</div>
</body>
</html>