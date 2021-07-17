<!DOCTYPE html>
<html>
<style>
body {font-family: sans-serif;
     
    background-color: ;

    }
    .wel{
        
        position: absolute;
        top: 0;
        padding: 0;
        margin: 0;
        background-color:white;
        width: 100%;
        height: 100px;
   box-shadow: 2px 2px 3px #888888;
        
    }
.student {
    margin-top: 200px;
  background-size: cover;
	background-position: center;
	display:flex;
	justify-content: center;
	align-items:baseline;
	font-family: sans-serif;

 
  
}
   
input {
  align-content: center;
 
  padding: 5px;
  font-size: 100%;
  text-decoration:black;
  font-size: 20px;
}

  .button{
      padding:2px;
      color:black;
     font-size: 20px;
            height: 30px;
            border-radius: 0px;
            border-width:1px;
            border-color:blue;
            box-shadow: 0px 5px 8px 5px #888888;
            background-color: forestgreen ;
      opacity: 0.8;
  }
    .wel
    {
        
        padding-top: 10px;
    }
    span{
        color:orangered;
        
    }
 

</style>
<body>
    <div class="wel">
        <a href="login2.php" class="button" style="margin-left:94%; margin-top: -20px; " >Logout</a> 
        <h1 align="center" style="margin-top: -30px;">WELCOME</h1>
        
    </div>

<form method="post" action="marksheet2.php">
<div class="student" ><br>
    
    <input type="text" name="rollno" placeholder="Enter your roll number">
    <input type="text" name="semester" placeholder="Enter your semester">
    <input type="submit" id="button" name="submit" value="Search result">
     


</div> 
    </form> 
    <?php   
include("connection.php");
  error_reporting(0);
session_start();
if(isset($_post['submit']))
  {
    
     
    
    $id=$_POST['rollno'];
    $name=$_POST['semester'];
    $query="SELECT * FROM AMD WHERE rollno='$id' AND semester='$name'";
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


</body>
</html> 