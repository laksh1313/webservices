<!DOCTYPE html>
<html>
<title>First assignement</title>
<head>

<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
     overflow-x: hidden; 
  }

.column {
  margin-top:30px;
    width: 25%;
    box-shadow: 2px 2px;
}
.column img {
    opacity: 0.8; 
    cursor: pointer; 
}

.column img:hover {
    opacity: 1;
}

.column1 {
  margin-top:30px;
    width: 25%;
    float:left;
    margin-left:250px;
    box-shadow: 2px 2px;
}

.column1 img {
    opacity: 0.8; 
    cursor: pointer; 
}

.column1 img:hover {
    opacity: 1;
}

.column2 {
    width: 25%;

   margin-left:1000px;
   margin-top:-520px;
   box-shadow: 2px 2px;
}
.column2 img {
    opacity: 0.8; 
    cursor: pointer; 
}

.column2 img:hover {
    opacity: 1;
}
.column3 {
  margin-left:1000px;
    width: 25%;
    margin-top:-60px;
    box-shadow: 2px 2px;
}
.column3 img {
    opacity: 0.8; 
    cursor: pointer; 
}

.column3 img:hover {
    opacity: 1;
}


.row:after {
    content: "";
    display: table;
    clear: both;
}

.container {
    position: relative;
    display: none;
    margin-left: auto;
    margin-right: auto;
     display: block;
}

#imgtext {
    position: absolute;
    bottom: 15px;
    left: 60px;
    color: white;
    font-size: 20px;
}

.closebtn {
    position: absolute;
    top: 10px;
    right: 15px;
    color: white;
    font-size: 35px;
    cursor: pointer;
}
.footer
{
color:Aqua;
background:black;
text-align:center;
margin-top:1000px;
text-decoration:none;
  font-family: pristine;
  text-decoration:underline;
  font-weight:bold;
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
div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

@import url('https://fonts.googleapis.com/css?family=Open+Sans:300');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font: 14px/1 'Open Sans', sans-serif;
  color: aqua;
  background: black;
}

.gallery {
  float:left;
 
  margin: 0 auto;
  padding: 10px;
  background: aqua;
margin-top:100px;  
}

.gallery > div {
  position: relative;
  float: left;
  padding: 7px;
}

.gallery > div > img {
  display:inline-block;
  width: 300px;
  transition: .1s transform;
  float:left;
  height:200px;
}

.gallery > div:hover {
  z-index: 1;
}

.gallery > div:hover > img {
  transform: scale(1.7,1.7);
  transition: .3s transform;
}

.cf:before, .cf:after {

  content: "";

 
}

.cf:after {
  clear: both;
}
.h
{
  background: aqua;
  color:black;
  width:100%;
  height:30px;
   margin-top: 430px;
font-size:25px;
text-align:center;
font-weight: bold;
}
.h:hover
{
  color:aqua;
  background: black;
  
}

</style>
</head>
<body>

<div style="text-align:center; background:black; padding:3px; color:Aqua;   font-family:pristine; padding-top:10px ">
 <p><h2>Welcome to the Car GAllery</h2></p>
  </div>
<div><ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="a.php">jquery</a></li>
  <li><a href="contact.php">Sign In</a></li>
  <li><a href="#about">About</a></li>
</ul></div>


<div class="row">
  <div class="column">
    <img src="car1.jpg"  style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="car2.jpg"  style="width:100%" onclick="myFunction(this);">
  </div>
</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:30%; height:30%; margin-left:450px; top-margin:-10000; ">
  <div id="imgtext"></div>
</div>

<script>
function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}
</script>
  <div class="column1">
    <img src="car5.jpeg"  style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column1">
    <img src="car4.jpeg"  style="width:100%" onclick="myFunction(this);">
  </div>

<div class="column2">
    <img src="car6.jpg"  style="width:100%" onclick="myFunction(this);">
  </div>


<br><br><br><br><br><br><div class="column3">
    <img src="car7.jpeg"  style="width:100%" onclick="myFunction(this);">
  </div>
<div class="h">Click on any picture to see the preview</div>

<div class="gallery cf">
  <div>
  <img src="men/1.jpeg"  /></a>
  </div>
  <div>
    <img src="men/2.jpg" />
  </div>
  <div>
    <img src="men/3.jpg" />
  </div>
  <div>
    <img src="car10.jpg" />
  </div>
  <div>
    <img src="car2.jpg" />
  </div>
  <div>
    <img src="car3.jpg" />
  </div>
  <div>
    <img src="car6.jpg" />
  </div>

  <div>
    <img src="ca.png" />
  </div>

  <div>
    <img src="logo.jpg" />
  </div>

   <div>
    <img src="car.jpeg" />
  </div>
   <div>
    <img src="car0.jpeg" />
  </div>
   <div>
    <img src="car2.jpg" />
  </div>
</div>
 
<div class="footer">
  <p>Posted by: Lakshay</p>
  <p>Contact information: <a href="mailto:someone@example.com">lakshayakumar@mansainfotech.com</a>.</p>
</div>

</body>
</html>
