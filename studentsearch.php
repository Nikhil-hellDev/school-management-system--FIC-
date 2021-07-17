
<!DOCTYPE html>
<html>
<head>
	<style>
		body{
	margin:0;
	padding:0;
	
	
}
		.jumbotron{
			margin-top:-40px;
	
	width:100%;
	height:100px;
	background-color:darkslateblue;
	box-shadow: 0px 10px  8px #888888;
	box-decoration-break:;
	
}
.search{
	height:100vh;
	
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
	width:202px;
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
		
		/*table{
	
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

#aa{
	margin-bottom:-14px;
	
}

*/
	
	</style>
	
	<script>
		
		
	</script>
</head>
	<div class="jumbotron">
		<h1  align="center">Welcome</h1> 
	</div>
<body>
	<div class="search" > <br>
		<form action="search2.php" method="POST" class="aaa">
			<h2>Find <span>student</span> that <span>you</span> want:</h2>
			<div class="form box">
				<input class="search-field branch" name="branch" type="text"
					   placeholder="Branch">
				<input class="search-field sem" name="semester" type="number"
					   placeholder="Semester" min="1" max="8" step="1">
				<input class="search-field name" name="name" type="text"
					   placeholder="Student name">
				<input class="search-field rollno" name="id" type="text"
					   placeholder="Student roll no.">
			<input type="submit" value="submit" name="submit" class="btn"> 
				
			
			</div>
			
			<br>
		<!--	
			<table border=1>
				<tr>
					<td align="center" id="s1">
					student name</td>
					<td align="center" id="s1">Roll no.</td>
					
					<td align="center" id="s1">F.name</td>

					<td align="center" id="s1"> contact no</td>
					<td align="center" id="s2">branch</td>
					<td align="center" id="s2">view profile</td>
					<td align="center" id="s2"> edit</td>
					<td align="center" id="s2">delete</td>

				</tr>
					<div class="S_list">
						<tr>
							<td id="s3"></td>
							<td id="s3"></td>
							<td id="s3"></td>
							<td id="s3"></td>
							<td id="s4"></td>
							<td id="s4"></td>
							<td id="s4"></td>
							<td id="s4"></td>
							

						</tr>
				</div>

			</table>-->


			
			
		</form>
       <?php   
include("connection.php");
  error_reporting(0);
session_start();
if(isset($_post['submit']))
  {
    
     
    
    $id=$_POST['id'];
    $name=$_POST['name'];
    $query="SELECT * FROM ADDD WHERE id='$id' AND name='$name'";
    $run=mysqli_query($conn,$query);
    
    if(mysqli_num_rows($run)<1)
    {
        echo"no record found";
        
    }
    else
    {
      $count=0;
        while ($data=mysqli_fetch_assoc($run))
        {
            $count++;
       
        
            }
            }
            }
                
?>   
	</div>
</body>