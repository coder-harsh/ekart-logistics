<?php
include("connection.php");
?>
<!doctype html>
<html lang="en">
<head><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
<style type="text/css">
#search{
font-size:28px;
color:blue;
}
#offer{
font-size:20px;
color:blue;
style:none;
}
#offer1{
style:none;
}
#offer:hover{
color:yellow;
}
#cart{
font-size:32px;
color:blue;
}
#cart:hover{
color:yellow;
}
#sign{
font-size:10px;
color:blue;
}
#sign:hover{
color:yellow;
}
a:hover{
text-decoration:none;
color:yellow;
}
#searchbox{
background-color:#00ffff;
border-radius:17px;
height:34px;
text-align:center;
border-color:red;
}
#type:hover{
background-color:yellow;
}
#search:hover{
color:red;
}

{
  animation: color-change 1s infinite;
}

@keyframes color-change {
  0% {border-color: green; }
  50% {border-color: #00ffff; }
  100% {border-color: yellow; }
}
#logo{
border:5px solid blue;
}
#down{
font-size:25px;
color:blue;
}
#down:hover{
font-size:30px;
color:#37f707;
}
#up{
font-size:25px;
color:blue;
}
#up:hover{
font-size:30px;
color:#37f707;
}
body {
  background-color: white;
}

.dark-mode {
  background-color: black;
}
</style>
<!------------------------------------------------------javascript---------------------------------------------------------------------------------->
<script type="text/javascript">
function fun1()
{
if(document.frm.btn.value=="Show")
{
document.getElementById("section").style.display="block";
document.frm.btn.value="Hide";
}
else if(document.frm.btn.value=="Hide")
{
document.getElementById("section").style.display="none";
document.frm.btn.value="Show";
}
}
</script>
<!----------------------------------------------------/javascript-------------------------------------------------------------------------------->
</head>
<body>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------->
<div style="position:absolute;top:54px;">
<?php
include("slide auto.php");
?>
</div>
<section style="position:relative;top:470px;">
<div class="row">
<?php
while($row=mysqli_fetch_assoc($rs))
{
$pid=$row["ProductId"];
$pname=$row["ProductName"];
$img="image/".$row["Pic"];
$price=$row["ProductPrice"];
echo "<div class='col-md-2' style='border:1px solid blue;margin:21px;'>";
echo "<div class='row'><img src='".$img."'height=150 width=217></div>";
echo "<div class='row text-center'>&#8377;$price/-</div>";
echo "<div class='row'><input type='submit' value='Buy Now' class='btn disabled btn-primary btn-block'></div>";
echo "</div>";
}
?>
</div>
</section>
<a name="shoe">
<div id="section" style="position:fixed;left:0px;top:70px;background-color:silver;height:582px;width:300px;display:none;">
<!------------------------------------------------------------------------------------------------->
<img src="logo/main.jpg" height=150 width=99.5% style="position:absolute;top:0px;" id="logo">
<img src="logo/admin.png" height=60 width=30% style="position:absolute;top:200px;left:97px;">
<a href="adminlog.php"><input type="button" value="🔑Admin login" class="btn btn-success" style="position:absolute;top:280px;left:79px;"></a>
<div style="position:absolute;top:460px;left:5px;"><font>Follow us:</font>&nbsp;<a href="https://www.facebook.com/harshj7.net/"><img src="logo/fb1.png" height=26 width=20%></a>&nbsp;<a href="https://wa.me/message/3TCZWHRVNBOCB1"><img src="logo/whatsapp1.png" height=26 width=20%></a>
&nbsp;<a href="https://www.instagram.com/harshj7_net/"><img src="logo/insta1.png" height=26 width=20%></a></div>
<div style="position:absolute;top:430px;left:5px;"><font>Developed by @harshj7.net</font></div>
<button onclick="myFunction()" style="position:fixed;left:5px;top:470px;"><b>⚙Dark mode</b></button>
<!-------------------------------------------------------------------------------------------------->
</div>
<div style="top:0px;position:fixed;background-color:#ffb366;height:70px;width:100%">
<font style="position:absolute;left:412px;top:18px;" id="offer"><b><a href="" id="offer1">Offer Zone</a></b></font>
<font style="position:absolute;left:993px;top:48px;"><b><a href="midlog.php" id="sign">Login</a></b<b>|</b><b><a href="registration.php" id="sign">sign Up</a></b></font>
<a href="midlog.php" ><image src="logo/admin (2).png" style="position:absolute;left:1000px;top:1px;" height=54 width=50></a>
<a href=""><span style="position:absolute;left:1160px;top:16px;" class="glyphicon glyphicon-shopping-cart" id="cart"></a>
<image src="logo/ekartlogo.jpg" style="position:absolute;left:590px;top:0px;" height=70 width=300>
<!------------------------------------------------------1st div hide button---------------------------------------------------------------------------------------------------->
<form name="frm">
<button type="button" class="btn btn-primary" style="position:absolute;left:74px;top:16px;" value="Show" name="btn" onclick="fun1();">
<span class="glyphicon glyphicon-menu-hamburger"></span>
</button>
<form>
<!---------------------------------------------------------/1st div hide button------------------------------------------------------------------------------------>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="position:absolute;left:220px;top:16px;">
  Move Here
  <span class="caret"></span></button>
  <ul class="dropdown-menu" style="position:absolute;left:220px;top:50px;" id="type">
    <li><a href="#">🚥All</a></li>
    <li><a href="#">👨Men's wear</a></li>
    <li><a href="#">👩Women's wear</a></li>
    <li><a href="#">👘Kid's wear</a></li>
    <li><a href="#">📟Gadgets</a></li>
    <li><a href="#">👰Grocceries</a></li>
    <li><a href="#">📱Smartphones</a></li>
    <li><a href="#">💻Laptops</a></li>
    <li><a href="#shoe">👢Shoe</a></li>
  </ul>
</div>
</div>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------->
<div class="row">
&nbsp;
</div>
<a href="#"><span class="glyphicon glyphicon-upload" id="up" style="position:fixed;left:1235px;top:570px;"></span></a>
<a href="#down"><span class="glyphicon glyphicon-download" id ="down" style="position:fixed;left:1235px;top:72px;"></span></a>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>

</body>
</html>