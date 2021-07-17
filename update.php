<?php
include("connection.php");
error_reporting(0);
$_GET['id'];
$_GET['name'];
$_GET['dob'];
$_GET['gender'];
$_GET['fname'];
$_GET['admissionyear'];
$_GET['branch'];
$_GET['email'];
$_GET['phoneno'];
$_GET['address'];
?>
<html>
<head>
    <style>
        
        body{margin:0;
            padding:0px;
        
        }
        input{
            border-left: 0;
            background-color: white;
            border-bottom: 2px solid;
            border-top:0;
            height:25px;
            width:200px;
	border-radius: 0px;
}
        .aa{
            height:100%;;
            background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),url();
            background-size: cover;
            background-position: center;
            display:flex;
            justify-content: center;
            align-items:baseline;
        }
        .loginbox{
            opacity: ;
            border-radius: 10px;
            padding:10px;
            padding-left: 70px;
            background-color:whitesmoke;
            
            width: 300px;
        }
        #button{
            font-size: 20px;
            height: 30px;
            border-radius: 10px;
            border-width:3px;
            border-color:blue;
            box-shadow: 0px 5px 8px 5px #888888;
            background-color: forestgreen;
        }
       
    </style>

<tittle>Update/edit student</tittle>
      <link rel="stylesheet" type="text/css" href="">
    </head>
    <body>
         <div class="aa">
    <div class="loginbox">
   
        <form action="" method="GET">
            id<br><input type="text" name="id" value="<?php echo $_GET['id'];?>"><br><br>
             studentname<br><input type="text" name="name" value="<?php echo $_GET['sn'];?>"><br><br>
             DOB<br><input type="date" name="dob" value="<?php echo $_GET['db'];?>"><br><br>
             gender<br><input type="text" name="gender" value="<?php echo $_GET['gn'];?>"><br><br>
             Fathername<br><input type="text" name="fname" value="<?php echo $_GET['fn'];?>"><br><br>
             admissionyear<br><input type="number" name="admissionyear" value="<?php echo $_GET['ay'];?>"><br><br>
             branch<br><input type="text" name="branch" value="<?php echo $_GET['b'];?>"><br><br>
            Email<br><input type="email" name="email" value="<?php echo $_GET['em'];?>"><br><br>
            phone no<br><input type="text" name="phoneno" value="<?php echo $_GET['pn'];?>"><br><br>
             address<br><input type="text" name="address" value="<?php echo $_GET['ad'];?>"><br><br>
            <input type="submit" name="submit" value="update">
        </form>
        <?php
        if(isset($_GET['submit']))
        {
            $id=$_GET['id'];
            
            $sn=$_GET['name'];
            $db=$_GET['dob'];
            $gn=$_GET['gender'];
            $fn=$_GET['fname'];
            $ay=$_GET['admissionyear'];
            $b=$_GET['branch'];
            $em=$_GET['email'];
            $pn=$_GET['phoneno'];
            $ad=$_GET['address'];
            
           
            
            $query="UPDATE ADDS SET 
            name='$sn',dob='$db',gender='$gn',fname='$fn',admissionyear='$ay',branch='$b',email='$em',phoneno='$pn',address='$ad' WHERE id='$id' ";
            $data=mysqli_query($conn, $query);
            if($data)
            {
                echo "<font color='green'>record update successful";
                //<a href='show.php'>check update list here</a>"
                
            }
            else{
                echo "not updated";
            }}
        else{

            echo "";
        }
        
        ?>
         </div>
    </div>
   
    </body>
    
</html>