
    <html>
        <body>

   
<form  action="search9.php" method="POST" >
 
    
<table>
         <tr>
             <td>
                  id:
                 
              </td>
                 <td>
                        <input type="number" placeholder="id"  name="id" required="required">
                 </td>
         </tr>
<tr>
<td>

name:
</td>
<td>
<input type="text" placeholder="username" name="name" required="required">
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
        </body>
</html>