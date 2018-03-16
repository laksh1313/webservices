<?php
	

    $link = mysqli_connect("localhost", "root", "root","first");

     



    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     

    $First = mysqli_real_escape_string($link, $_REQUEST['ls']);

    $second = mysqli_real_escape_string($link, $_REQUEST['ls1']);

    $ema = mysqli_real_escape_string($link, $_REQUEST['ls2']);
$num = mysqli_real_escape_string($link, $_REQUEST['aa']);
$comm = mysqli_real_escape_string($link, $_REQUEST['ls4']);

     

  

    $sql = "INSERT INTO feedback(fi,se, em,nu,co) VALUES ('$First', '$second', '$ema','$num','$comm')";
    
    

    if(mysqli_query($link, $sql)){

        echo "Records added successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

   

    mysqli_close($link);


    ?>

