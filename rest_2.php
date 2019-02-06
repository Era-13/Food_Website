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
body{background-image: url("back1.jpeg")}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #FF9900;
    text-align: center;
    padding: 8px;
}
th{
	background-color: #FF9900;
}

tr:nth-child(even) {
    background-color: #FFCC00;
}

tr:nth-child(odd) {
    background-color: #FFFF66;
}
</style>
</head>
<body>
<header>
<h1 "style:center"><b>Find Your Favourite Restuarent!!!</b></h1>
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