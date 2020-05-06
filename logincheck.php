<?php
    session_start();
    require 'loginconnection.php';
    if(isset($_POST['submit']))
    {    
		$query ='select * from testphp where (name = "'.$_POST['username'].'") AND password = "'.$_POST['pass'].'"';
        $result = mysqli_query($connect, $query);
        
        if($row = mysqli_fetch_assoc($result))
        {
		$_SESSION['name'] = $row['name'];
		$_SESSION['password'] = $row['password'];
                $role = $row['role'];     
  
            if($role == 0)
            {
        echo "hello user<br>";       
        //header("Location:log.html");  
    }
            else
            {
	   echo "hello admin<br>"; 
         //header("Location:log.html");
            }
            
        }
        else
            {
                echo'<div class="warning">Email or Password Not Correct Please try again</div>';
            }
        }
?>

 