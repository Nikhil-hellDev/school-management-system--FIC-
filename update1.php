<?php
include("connection.php");

error_reporting(0);
$id=$_POST['id'];
$_sn=$_POST['name'];
$_db=$_POST['dob'];
$_gn=$_POST['gender'];
$_fn=$_POST['fname'];
$_b=$_POST['branch'];
$_em=$_POST['email'];
$_pn=$_POST['phoneno'];
$_ad=$_POST['address'];
?>
<html>
<head>
<tittle>Update/edit student</tittle>
      <link rel="stylesheet" type="text/css" href="">
    </head>
    <body>
        
        <form action="" method="POST">
            id<br><input type="text" name="id" value="<?php echo $_POST['id'];?>"><br><br>  
             studentname<br><input type="text" name="name" value="<?php echo $_POST['sn'];?>"><br><br>
             DOB<br><input type="date" name="dob" value="<?php echo $_POST['db'];?>"><br><br>
             gender<br><input type="text" name="gender" value="<?php echo $_POST['gn'];?>"><br><br>
             Fathername<br><input type="text" name="fname" value="<?php echo $_POST['fn'];?>"><br><br>
             admissionyear<br><input type="number" name="admissionyear" value="<?php echo $_POST['ay'];?>"><br><br>
             branch<br><input type="text" name="branch" value="<?php echo $_POST['b'];?>"><br><br>
            Email<br><input type="email" name="email" value="<?php echo $_POST['em'];?>"><br><br>
            phone no<br><input type="text" name="phoneno" value="<?php echo $_POST['pn'];?>"><br><br>
             address<br><input type="text" name="address" value="<?php echo $_POST['ad'];?>"><br><br>
            <input type="submit" name="submit" value="update">
        </form>
        <?php
        if($_POST['submit'])
        {
            $id=$_POST['id'];
            
            $sn=$_POST['name'];
            $db=$_POST['dob'];
            $gn=$_POST['gender'];
            $fn=$_POST['fname'];
            $ay=$_POST['admissionyear'];
            $b=$_POST['branch'];
                    $em=$_POST['email'];
            $pn=$_POST['phoneno'];
            $ad=$_POST['address'];
            
            echo $sn;
            
            $query="UPDATE ADDS SET name='$sn',dob='$db',gender='$gn',fname='$fn',admissionyear='$ay',branch='$b',email='$em',phoneno='$pn',address='$ad' WHERE id='$id' ";
            $data=mysqli_query($conn,$query);
            if($data)
            {
                echo "<font color='green'>record update successful";
                //<a href='show.php'>check update list here</a>"
                
            }
            else{
                echo "not updated";
            }
        
        }
        ?>
    </body>
    
</html>