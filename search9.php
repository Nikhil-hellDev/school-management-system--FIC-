<?php   
include("connection.php");

  error_reporting(0);
session_start();
if(isset($_POST['submit']))
  {
    
    $id=$_POST['id'];
    $n=$_POST['name'];
$sql = "SELECT id, name,dob ,gender,fname,admissionyear,branch,email,phoneno,address  FROM ADDD WHERE id ='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - name: " . $row["name"]. "-dateofbirth " .  $row["dob"]."-gender " . $row["gender"]."-fathername". $row["fname"]."-admission year". $row["admissionyear"]."-branch". $row["branch"]."-email". $row["email"]."-phoneno". $row["phoneno"]."-address". $row["address"]."<br>";
    break;
}
} else {
echo "0 results";
} 
}
    

//,gender, fname,admission year,branch,phoneno,address    
?>
