<?php
    session_start();
require "loginconnection.php";

$name=$_POST["username"];
$password=$_POST["pass"];


if(isset($_POST["submit"])){
$query="insert into testphp (name,password) values('".$_POST["username"]."','".$_POST["pass"]."')";
$result = mysqli_query($connect, $query);
if($result == 1){
 echo "<script> alert('the user has been inserted');</script>";
 echo "<script>window.location.href='signup.html';</script>";
}
else{
    echo "errro";
}
}

else if(isset($_POST["submit2"])){
  
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
                //  header("Location:log.html");      
            }
            else
            {
	   echo "hello admin<br>";      
            }
            
        }
        else
            {
                echo'<div class="warning">Email or Password Not Correct Please try again</div>';
            }
      
}

?>