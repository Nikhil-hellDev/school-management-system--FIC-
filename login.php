<?php include('connection.php')?>
<!DOCTYPE html>
<html>
<head>
    <style>
    body{
        color:black;
    margin: 0;
    padding: 0;
    background-image: url("");
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.loginbox{
	border-width:2px;
	border-color:blue;
	border-style:solid;
    width: 400px;
    height: 450px;
   
    top: 51%;
    left:50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 40px 30px;
}

.avatar{
    width: 85px;
    height: 85px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid blue;
    background: transparent;
    outline: none;
    height: 40px;
    color: black;
    font-size: 16px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.loginbox a:hover
{
    color: #ffc107;
}



.welcome{
	border-bottom-color:blue;
	border-style:solid;
	border-width:0px;
}
    </style>
    
    
<title>Login Form </title>
   
</head>
<body>
    <div class="welcome">
		<img src="download (3).png">
	
	</div>
    
    <div class="loginbox">
    <img src="avatar.png" height="40" width="40" class="avatar">
        <h1>Login as a Admin</h1>
    
            <form method="post" action="">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
               
            <input type="submit" name="submit" value="Login">
           
            <a href="login2.php">login as a Student?</a>
        </form>
           <?php
if(isset($_POST['submit']))
{
    $us = $_POST['username'];
    $pw= $_POST['password'];
    
        $query =" SELECT * FROM ADMIN WHERE username ='$us' && password ='$pw'";
    $data=mysqli_query($conn,$query);
    $t=mysqli_num_rows($data);
    if($t==1)
    {
        header('location:admindash.html');
    }
    else 
    {
        echo "login failed";
    }
    
}
        ?>
    </div>

</body>
</html>