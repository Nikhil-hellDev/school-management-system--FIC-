<?php  
include("connection.php");
  error_reporting(0);
session_start();
?>
<!DOCTYPE>
<html>
<head>
	<link rel="stylesheet" href="search.css">
	
</head>
	<div class="jumbotron">
		<h1  align="center">Welcome</h1> 
	</div>
<body>
	<div class="search" > <br>
		<form class="aaa" method="post" action="search2.php">
			<h2>Find <span>student</span> that <span>you</span> want:</h2>
			<div class="form box">
				<input  name="id" type="text"
					   placeholder="Student id">
				<input  name="name" type="text"
					   placeholder="Student name.">
				<input  name="submit" type="submit" value="submit">
				
			
			</div>
			
			
			
		</form>
        <?php  

if(isset($_post['submit']))
  {
    
    //class="search-field name" //class="search-field rollno"
    //<button class="btn" type="button"> search</button>
	
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
        /*?>
<?php

if(isset($_POST['submit']))
  { 
    $id=$_POST['s_id'];
    $n=$_POST['s_name'];
$sql = "SELECT s_id, s_name,dob ,gen,F_name,admissonyear,branch,phoneno,address  FROM ADDD WHERE s_id ='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "s_id: " . $row["s_id"]. " - s_Name: " . $row["s_name"]. "-dateofbirth " .                    $row["dob"]."-gen " . $row["gen"]."-fathername". $row["F_name"]."-admission year". $row["admissonyear"]."-branch". $row["branch"]."-phoneno". $row["phoneno"]."-address". $row["address"]."<br>";
}
} else {
echo "0 results";
} 
}
    */
?>
                
	</div>
</body>