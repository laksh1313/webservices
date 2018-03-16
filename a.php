
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <style>

.header

{
  text-align:center;
 color:aqua;
  background:black;
  height:50px;
  width:100%;
  font-size:20px;
padding-top: 30px;

}
.header:hover
{
  color:black;
  background:aqua;
  
}
.sec
{
  margin-top:70px;

}
#upper_left {
  position: absolute;
  top: 20%;
  left: 10%;
  box-shadow: 2px 2px 2px 2px  aqua;
}
#upper_left
{
  content: url('car.jpeg');
}
#upper_right{
box-shadow: 2px 2px 2px 2px aqua;
  position: absolute;
  top: 20%;
  right: 10%;
}
#lower_left {
  box-shadow: 2px 2px 2px 2px  aqua;
  position: absolute;
  bottom: 20%;
  left: 10%;
}
#lower_right {
  box-shadow: 2px 2px  2px 2px aqua;
  bottom: 20%;
  right: 10%;
  position: absolute;
}

.largerimage{

  position: fixed;
    height: 200px;
    width: 400px;
    margin: -100px 0 0 -200px;
    top: 50%;
    left: 50%;
     
 }
 .footer
{
color:aqua;
text-align:center;
margin-top:400px;

}
.footer:hover
{
  color:black;
  background:aqua;
  width:100%;
}

    </style>
    <script>
      $(document).ready(function(){
    $('img').click(function(){
       
          $largeimage = $(this).clone().css({height:"200px", width:"400px"});
          
          
          $(".largerimage").html($largeimage);
          
        });
      });
    </script>
  </head>
  <body  bgcolor="black" width="100%">
  <div class="header"> GAllery</div>
    
    <img width="200px"  id="upper_right" src="ca.png" />
    <img width="200px"  id="upper_left" src="car.jpeg" />
    <img width="200px"  id="lower_left" src="car0.jpeg"/>  
    <img width="200px"  id="lower_right" src="car1.jpg"/>
    <div class="largerimage" align="center" position="fixed" >
 <div>

<div class="footer">
Copyright 2008 - 2018
lakshayakumar@mansainfotech.com
</div>

  </body>
</html>