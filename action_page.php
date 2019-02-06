
<?php



session_start();  
 $username = $_POST['username'];  
 $password = $_POST['password'];
 
 if($username && $password)
 {
	$connect = mysql_connect("localhost", "root", "") or die ("Could not connect");  
	mysql_select_db("login") or die ("could not find db!");
	$query = mysql_query("SELECT * from users WHERE username = '$username'");
	$numrows = mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row = mysql_fetch_assoc($query))
		{
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
			
			
		}
		if($username == $dbusername && $password ==  $dbpassword)
		{
			echo "You are in! <a href = 'order.php'>Click</a> here to order !";
			$_SESSION['username']=  $username;
			
		}else
			echo "Incorrect Password!"; 
	}else 
		die("That user doesn't exist!");
	 
	
 }
 else
	 die("Please enter username and password!");
?>

<!DOCTYPE html>
<html>
<style>
 body{background-image: url("body.jpg")}
 </style>





<body>

</body>
</html>