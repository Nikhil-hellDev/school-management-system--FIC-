<?php
include('connection.php');
?>
    <html>
        <body>

   
<form  action="marksheet1.php" method="POST" >
 
    
<table>
         <tr>
             <td>
               semester:
                 
              </td>
                 <td>
                        <input type="number" placeholder="semester"  name="semester" required="required">
                 </td>
         </tr>
<tr>
<td>

branch:
</td>
<td>
<input type="text" placeholder="branch" name="branch" required="required">
</td>
</tr>
<tr>
<td>
    </td>
    <tr>
<td>

branch:
</td>
<td>
<input type="text" placeholder="course" name="course" required="required">
</td>
</tr>
<tr>
<td>
    </td>
    

</table>
<input type="submit" value="submit" name="submit">   
</form>


<?php   
include("connection.php");
  error_reporting(0);
session_start();
if(isset($_post['submit']))
  {
    
     
    
    $sem=$_POST['semester'];
    $branch=$_POST['branch'];
    $course=$_POST['course'];
    $query="SELECT * FROM ADS WHERE  sem='$sem' AND branch='$branch' AND course='$course' ";
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