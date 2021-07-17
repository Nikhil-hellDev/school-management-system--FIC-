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
$sql = "SELECT semester, s1,s2 ,s3,s4,s5 FROM ASD WHERE semester ='$semester'";
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
    