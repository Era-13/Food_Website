<!DOCTYPE html>
<html>
<style type = "text/css">
body{background-image: url("indian.jpg");
     background-size: cover;
}
header{
	text-align: center;
	color: black;
	font-family: elephant;
	font-size: 20px;
}
.aa{
	width: 300px;
	height: 200px;
	background-color: rgba(0,0,0,0.5);
	margin:0 auto;
	margin-top: 40px;
	padding-top: 50px;
	padding-left:50px;
	border-radius: 15px;
	-webkit-border-radius: 15px;
	-o-border-radius:15px;
	-moz-border-radius:15px;
	box-shadow: inset -4px -4px rgba(0,0,0,0.5);
	
}
.aa input[type= "text"]{
	width: 200px;
	height:35px;
	padding-left:5px;
	border:0;
	border-radius: 5px; 
	height:35px;
	padding-left:5px;
	border:0;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
}
.aa input[type= "submit"]{
	width: 100px;
	height:35px;
	border:0;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	background-color: skyblue; 
	font-weight: bolder; 
}


</style>
<body>

<header>
<h2>First you have to log in to get all information!!</h2>
</header>
<div class = "aa">

<form action = 'login.php' method = 'POST'>
 <input type = 'text' placeholder= 'Enter Username....' name = 'username'><br><br>
<input type = 'password' placeholder= 'Enter Password....' name = 'password'><br><br>
<input type = 'submit' value = 'Login'>
</form>
</div>
</body>
</html>