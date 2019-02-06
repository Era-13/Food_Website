<?php

//make connection
mysql_connect('localhost', 'root', '');
//select db
mysql_select_db('food');

$sql = "SELECT * FROM rest";

$records= mysql_query($sql);

?> 
<html>
<head>
<title>Restuarent</title>
<style>
header {font-family:Gabriola; color:#502916; margin-left:300px; }

body{background-image: url("back2.jpg")}
fixedbutton
{
	position: fixed;
	bottom: 0px;
	right: 0PX;
}
table {
    font-family: arial, sans-serif;
  
    width: 100%;
}

td, th {
    text-align: center;
    padding: 8px;
}
th{
	background-color: #8ab92d;
}

tr:nth-child(even) {
    background-color: #a4d246;
}

tr:nth-child(odd) {
    background-color: #b8dc6f;
}
</style>
</head>
<body>
<header>
<h1 "style:center"><a href ="search.php" style = "text-decoration:none"><id ="fixedbutton">Search</a><b> Your Favourite Restuarent!!!</b></h1>
<h2>Top Rated Restuarents in Dhaka..... </h2>

</header>

<table width = "600" border= "1" cellpadding = "1" cellspacing = "1">
<tr>

<th>Restuarent_name</th>
<th>Location </th>
<th> Opening_hour </th>
<th> End_hour </th>

<tr>
<?php
while($rest=mysql_fetch_assoc($records))
{
	echo "<tr>";
	echo "<td>".$rest['Restuarent_name']."</td>";
	echo "<td>".$rest['Location']."</td>";
	echo "<td>".$rest['Opening_hour']."</td>";
	echo "<td>".$rest['Ending_hour']."</td>";
	
		echo "</tr>";
} //end while
?>
</table>
</body>
</html>