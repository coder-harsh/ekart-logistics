<?php
$con=mysqli_connect("localhost","root","","test");
if(!$con)
die("Server could not connected");
$s="select * from product";
$rs=mysqli_query($con,$s);
?>