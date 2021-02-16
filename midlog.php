<!doctype html>
<html lang="en">
<head><meta charset="utf-8">
<meta name="viewport" content="width=device-width,intial-scale=1">
<!-- css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
body{
background-color:silver;
}
#imglog{
border:5px solid blue;
}
#imglog:hover{
border-color:yellow;
}
</style>
</head>
<body>
<img src="logo/user.png" height="80px" width="50px" style="position:absolute;top:100px;left:50%" id="imglog">
<!---------------------------------------------------------------------------------------------------------------------->
<div style="position:fixed;top:200px;left:40%">
<form action="insert.php" method="post">
<div class="input-group" style="width:300px;">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
  </div>
  <div class="input-group" style="width:300px;">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password" size=10 required>
  </div>
<a href="" style="position:absolute;top:82px;left:20px;text-decoration:none">Forget password?</a>
<input type="submit" value="Login" class="btn btn-primary" style="position:absolute;top:75px;left:248px;"><br>
<a href="registration.php" style="text-decoration:none"><input type="button" value="Signup" class="btn btn-success" style="position:absolute;top:75px;left:159px;"></a>
</form>
<!------------------------------------>
</div>
</body>
</html>