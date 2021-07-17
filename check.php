
<html>
    <head>
    <title>check table</title></head>
    <body>
        <form action="" method="get">
    <input type="text" placeholder="enter name"  name="name" >
        <input type="number" placeholder="enter roll no"  name="roll" >
         <input type="text" placeholder="Course" name="course">
		<input type="text" placeholder="Branch" name="branch">
		<input type="text" placeholder="Sem" name="semester">
       <td><input placeholder="sub. 1" name="s1"></td>
         <td><input placeholder="T/P" name="t1"></td>
            <td><input placeholder="total marks" name="tm1"></td>
           <td><input placeholder="earn marks" name="em1"></td>
            <td><input placeholder="sub. 2" name="s2"></td>
            <td><input placeholder="T/P" name="t2"></td>

            <td><input placeholder="total marks" name="tm2"></td>

            <td><input placeholder="total marks" name="em2"></td>
            <td><input placeholder="sub. 3" name="s3"></td>
         <td><input placeholder="T/P" name="t3"></td>
       <td><input placeholder="total marks" name="tm3"></td>
         <td><input placeholder="earn marks" name="em3"></td>
  <input placeholder="sub. 4" name="s4">
                <td><input placeholder="T/P" name="t4"></td>
                            <td><input placeholder="Total marks" name="tm4"></td>

                  <td><input placeholder="earn marks" name="em4"></td>
           <input placeholder="sub. 5" name="s5">

                        <td><input placeholder="T/P" name="t5"></td>
    <td><input placeholder="total marks" name="tm5"></td>

                  <td><input placeholder="earn marks" name="em5"></td>
    <input placeholder="enter roll no" type="text" name="result" >
        <input placeholder="enter roll no" type="text" name="sgpa" >
        <input placeholder="enter roll no" type="text" name="cgpa" >

    <input  type="submit" name="submit" value="submit">
        </form>
    <?php
            include("connection.php");

        If(isset($_GET['submit']))
            {
    $na=$_GET['name'];
    $ra=$_GET['roll'];
            $co=$_GET['course'];
$b=$_GET['branch'];
$s=$_GET['semester'];
$su1=$_GET['s1'];
$tp1=$_GET['t1'];
$tm1=$_GET['tm1'];
    $em1=$_GET['em1'];
$su2=$_GET['s2'];
$tp2=$_GET['t2'];
$tm2=$_GET['tm2'];
    $em2=$_GET['em2'];
$su3=$_GET['s3'];
$tp3=$_GET['t3'];
$tm3=$_GET['tm3'];
$em3=$_GET['em3'];
$su4=$_GET['s4'];
$tp4=$_GET['t4'];
$tm4=$_GET['tm4'];
$em4=$_GET['em4'];
    $su5=$_GET['s5'];
$tp5=$_GET['t5'];
$tm5=$_GET['tm5'];
    $em5=$_GET['em5'];
$rs=$_GET['result'];
    $sg=$_GET['sgpa'];
    $cg=$_GET['cgpa'];

    //$query="INSERT INTO AMD1 (name,rollno) VALUES ('$na','$ra')";+
$query="INSERT INTO HELL VALUES('$na','$ra','$co','$b','$s','$su1','$tp1','$tm1','$em1','$su2','$tp2','$tm2','$em2','$su3','$tp3',' $tm3','$em3','$su4','$tp4','$tm4','$em4,'$su5','$tp5','$tm5','$em5','$rs','$sg','$cg')";
        
            echo "$query";
mysqli_query($conn,$query);
            }
            ?>

    </body>
</html>