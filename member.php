    <?php   
    session_start();  
    if(!isset($_SESSION["sess_user"])){  
        header("location:login.php");  
    } else {  
    ?>  
    <!doctype html>  
    <html>  
    <head>  
    <title>Welcome</title>  
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
              

        </style>
</head>
<body>

<div style="text-align:center; background:black; padding:3px; color:Aqua;   font-family:pristine; padding-top:10px; ">
 <p><h2>Contact Us</h2></p>
 <?php
  echo"time is ".date("h:i:s");
?>
  </div> 

        <center><h1>CREATE REGISTRATION AND LOGIN FORM USING PHP AND MYSQL</h1></center>  
          
    <h2>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h2>  
    <p>  
    WE DO IT. SUCCESSFULLY CREATED REGISTRATION AND LOGIN FORM USING PHP AND MYSQL  
    </p>  
    </body>  
    </head>
    </html>  
    <?php  
    }  
    ?>  
