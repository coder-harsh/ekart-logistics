<!DOCTYPE html>
<html>

<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
#img1,#img2,#img3{
border:5px dotted blue;
}
#img1,#img2,#img3{
  animation: color-change 1s infinite;
}

@keyframes color-change {
  0% {border-color: blue; }
  50% {border-color: #00ffff; }
  100% {border-color: red; }
}

</style>
</head>

<body>
<div class="w3-content w3-section" style="max-width:1500px;">
  <img class="mySlides" src="logo/cover1.jpg" style="width:100%;height:400px;" id="img1">
  <img class="mySlides" src="logo/cover2.jpg" style="width:100%;height:400px" id="img2">
  <img class="mySlides" src="logo/cover3.jpg" style="width:100%;height:400px" id="img3">
  <img class="mySlides" src="logo/cover4.jpg" style="width:100%;height:400px" id="img3">
  <img class="mySlides" src="logo/cover5.jpg" style="width:100%;height:400px" id="img3">
   <img class="mySlides" src="logo/cover6.jpg" style="width:100%;height:400px" id="img3">
</div>
<input type="text" style="position:absolute;left:440px;top:250px;" placeholder="Search Here"  size=50  id="searchbox">
<a href="" id="search"><span style="position:absolute;left:870px;top:251px;" class="glyphicon glyphicon-search"></a>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>
