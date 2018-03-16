  <!DOCTYPE html>
<html>
<title>conatct Us</title>
<head>

<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    color: aqua;
     overflow-x: hidden;
     background: black; 
  }
  ul {
    list-style-type: none;
width:100%;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
    
    }

li {
 padding:7px;
float: left;
letter-spacing:10px;
font-size:20px;
width:25%;
}

li a {
  color:aqua;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: aqua;
}
#aa
{
    width:500px;
    height:50px;
    color:red;
    font-family:bold;
    font-size:30px;
}
#a1
{
    width:370px;
    height:50px;
    color:red;
    font-family:bold;
    font-size:30px;
}
</style>
</head>
<body>

<div style="text-align:center; background:black; padding:3px; color:Aqua;   font-family:pristine; padding-top:10px; ">
 <p><h2>Login here</h2></p>
 <?php
  echo"time is ".date("h:i:s");
?>
  </div>
<div><ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="a.php">jquery</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul></div>
<br/><form name="abc" method="POST" action="login.php">
<table style="width:100%">
<tr> <th>Enter username</th><th><input type="text" name="user" id="aa"></th></tr>
<tr> <th>Enter Password</th><th><input type="password" name="pass" id="aa"></th></tr>
<tr><th><input type="button" value="Reset"></th><th><input type="submit" value="submit" name="submit"></th></tr>
</table>
</form>
    <?php  
    if(isset($_POST["submit"])){  
      
    if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    ini_set('display_errors', 'true');

$user=$_POST['user'];
        $pass=$_POST['pass'];  
      
        $con=mysqli_connect('localhost','root','root','user_registration') or die(mysqli_error() 
         or die("cannot select DB"));  
      
        $query=mysqli_query($con,"SELECT * FROM login WHERE MD5(username)='".md5($user)."' AND  MD5(password)='".md5(.$pass.)"' status='1'");  
        

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
        } 
        else {  
        echo "Invalid username or password!";  
        }      
} else {  
        echo "All fields are required!";  
    }  
    }  
    ?>  
    </body>  
    </html>   
