<?php

$to ='eraislam65@gmail.com';
$subject = 'from your email';

$name = $_POST['name'];
$email = $_POST['email'];
$topic = $_POST['topic'];
$message= $_POST['message'];
$message = <<<EMAIL


Hi, My name is $name.

$message

From $name

oh ya, My email is $email

EMAIL;
$header= '$email';
if($_POST){  
mail($to, $subject, $message, $header);
$feedback = 'Thanks for your mail!!!!';
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Food website</title>
<style>
body{background-image: url("indian1.gif")}
header{
	
	margin-left: 150px ;
	font-size: 25px;
	font-family: gabriola;
}
form{
 width: 400px;
}
form ul {
 list-style: none;

}

form ul li {
margin: 15px 0;

}

form label
{
 display: block;
 font-size:  20px;
}

form input, textarea, select {
 font-size: 20px;
 padding: 5px;
 border: #ccc 3px solid;

}
</style>
</head>
<body>
<header>
<h2>Contact</h2>
</header>
<p id= "feedback"><?php echo $feedback; ?></p>
<form action= "?" method = "post">
<ul>
<li>
<label for= "name">Name:</label>
<input type = "text" name = "name" id ="name" />
</li>
<li>
<label for= "email">Email:</label>
<input type = "text" name = "email" id ="email" />
</li>
<li>
<label for = "message">Tell Us</label>
<textarea id = "meesage" name = "message" cols = "42" rows = "9"></textarea>
</li>
<li>
<label for= "topic">Topic:</label>
<select id = "topic" name = "topic">
<option value = "food">Food</option>
<option value = "page">Page</option>
<option value = "report">Report</option>
<option value = "help">Help</option>
</li>

<li>
<input type = "submit" value= "Submit">
<input type = "reset" value= "Reset">
 </li>
</ul>
</form>
</body>
</html>

