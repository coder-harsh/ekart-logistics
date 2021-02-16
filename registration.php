<html>
<head>
<title>New Account</title>
<style type="text/css">
#i1,#i2,#i3,#i4,#i5{
height:30px;
border-radius:10px;
}
input:hover{
background-color:yellow;
border-color:red;
}
select{
border-radius:1px;
border-color:#224411;
height:18px;
}
#btnid{
border-radius:100px;
border-color:blue;
}
table{
border-color:blue;
}
a{
text-decoration:none;
}
</style>
</head>
<body>
<form name="frm">
<h2 style="position:absolute;left:590px;top:1px;">Create Account</h2>
<table bgcolor="#f2f2f2" border=0 style="border-width:1px;border-collapse:collapse;position:absolute;left:435px;top:47px;" cellpadding=1 height=435 width=440>
<tr><td style="border-width:0px;line-height:19px;align:center"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name</b></td></tr><tr><td style="border-width:0px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" placeholder="Enter the name" size=41 style="text-transform:capitalize;text-align:center" id="i1" required></td></tr>
<tr><td style="border-width:0px;line-height:19px;align:center"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail</b></td></tr><tr><td style="border-width:0px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="mail" placeholder="Enter the mail"  size=41 style="text-align:center" id="i2" required></td></tr>
<tr><td style="border-width:0px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password</b></td></tr><tr><td style="border-width:0px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="Password" placeholder="Enter password" size=41 style="text-align:center" id="i3" required></td></tr>
<tr><td style="border-width:0px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Confirm Password</b></td></tr><tr><td style="border-width:0px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="confirmpassword" placeholder="Re-enter password" size=41 style="text-align:center" id="i4" required></td></tr>
<tr><td style="border-width:0px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile No</b></td></tr><tr><td style="border-width:0px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="tel" name="mobile" placeholder="Enter mobile no" size=41 style="text-align:center" id="i5" required></td></tr>
<tr><td style="border-width:0px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender</b><input type="radio" name="gen">Male<input type="radio" name="gen">Female</td></tr>
<tr><td style="border-width:0px">
<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of birth</b>
</td></tr>
<tr><td style="border-width:0px">
<input type="date" style="position:absolute;left:170px;top:395px;" >
</td></tr>
</table>
<font style="position:absolute;left:430px;top:485px;"><input type="checkbox" required>By checked,You agreed to our<a href="userform.php"> terms & conditions</a></font>
<input type="submit" Value="Create account" name="btn" id=btnid style="position:absolute;left:783px;top:489px;">
<font color="blue" style="position:absolute;left:435px;top:510px;"><a href="uesrpwd.php">Forget Your Password?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="userlogin">Login?</a></font>

</form>
</body>
</html>



