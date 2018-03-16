<?php

ini_set('display_errors', 'true');

$user= 'aqw';//$_POST['user'];  
        $pass= 'aq' ;//$_POST['pass'];  
      
        $con=mysqli_connect('localhost','root','root','user_registration') or die(mysqli_error() 
         or die("cannot select DB"));  
      
        $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
        
echo "<pre>";
var_dump($query);


        $numrows=mysqli_num_rows($query);  
        if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($query))  
        {  
        $dbusername=$row['username'];  
        $dbpassword=$row['password'];  
        }  
      
        if($user == $dbusername && $pass == $dbpassword)  
        {  
        session_start();  
        $_SESSION['sess_user']=$user;  
      
       
        header("Location: member.php");  
        }  
        } else {  
        echo "Invalid username or password!";  
        }  
        ?>