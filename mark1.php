  <?php
include('connection.php');
?>
    <html>
        <head>
            <style>
            table {
                  font-family: arial, sans-serif;
                  border-collapse: collapse;
                  width:800;
                }
                    td, th {
                          border: 1px solid black;
                          text-align: left;
                          padding: 7px;
                        border: 2px solid grey;


                        }
                        input{
                            width:100%;
                            height:100%;
                            border-width:0;
                            
                            
                        }
                #button{
                    background-color: orangered;
                    
                }

            
            </style>
        
        </head>
        <body>

   
<form  action="check2.php" method="POST" >
 
    
<table align="center" style="margin-top: 30px;" >
    <h1 align="center" style="margin-top: 00px">Enter <span style="color: orangered;opacity: 0.8;">details</span> to create <span style="color: orangered;opacity: 0.8;">marksheet</span></h1>
            <tr>
        <th>
<input type="number" placeholder="semester"  name="semester" required="required">
        </th>    
        <th>
<input type="text" placeholder="branch" name="branch" required="required">
        </th>

<th>
<input type="text" placeholder="course" name="course" required="required">
                </th>
            <th id="button">    <input type="submit" id="button" value="submit" name="submit"></th>
</table>
  
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