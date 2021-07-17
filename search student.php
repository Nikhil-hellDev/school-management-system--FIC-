
<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="search.css">
	<script>
		
		
	</script>
</head>
	<div class="jumbotron">
		<h1  align="center">Welcome</h1> 
	</div>
<body>
	<div class="search" > <br>
		<form class="aaa" method="post" action="search2.php">
			<h2>Find <span>student</span> that <span>you</span> want:</h2>
			<div class="form box">
				<input class="search-field branch" name="branch" type="text"
					   placeholder="Branch">
				<input class="search-field sem" name="sem" type="number"
					   placeholder="Semester" min="1" max="8" step="1">
				<input class="search-field name" name="name" type="text"
					   placeholder="Student name">
				<input class="search-field rollno" name="id" type="text"
					   placeholder="Student roll no.">
				<input type="submit" name="submit" value="submit"><br>
				
			
			</div>
			</form>
			<br>
			
			<table border=1>
				<tr>
					<td align="center" id="s1" name="">
					student name</td>
					<td align="center" id="s1">Roll no.</td>
					
					<td align="center" id="s1">F.name</td>

					<td align="center" id="s1"> contact no</td>
					<td align="center" id="s2">branch</td>
					<td align="center" id="s2">view profile</td>
					<td align="center" id="s2"> edit</td>
					<td align="center" id="s2">delete</td>

                     <?php  

if(isset($_post['submit']))
  {
    
    //class="search-field name" //class="search-field rollno"
    //<button class="btn" type="button"> search</button>
	
    $b=$_POST['branch'];
    $name=$_POST['name'];
    $id=$_POST['id'];
    $query="SELECT * FROM ADDD WHERE id='$id' AND name='%$name%'";
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
       ?>
                    
       <!-- <div class="S_list">
			<tr>
							<td id="s3" ><?php echo $data['s_name']; ?></td>
							<td id="s3"></td>
							<td id="s3"></td>
							<td id="s3"></td>
							<td id="s4"></td>
							<td id="s4"></td>
							<td id="s4"></td>
							<td id="s4"></td>
							

						</tr>
                </div>-->
            
                    <?php
        }
            }
            }
        ?>
				
			</table>


			
			
		
       
	</div>
</body>
    </html>