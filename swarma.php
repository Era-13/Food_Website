<?php
 if(isset($_POST['search']))
 {
	 $valueToSearch =  $_POST['valueToSearch'];
	
	 $query = "SELECT * FROM swarma WHERE  CONCAT(Food_item, size, Price) LIKE '%".$valueToSearch."%'";
	 $search_result = filterTable($query);

	 
 }else 
 { 
	 $query = "SELECT * FROM swarma";
	 $search_result = filterTable($query);
 }
 function filterTable($query)
 {
	 $connect = mysqli_connect("localhost", "root", "", "food");
	 $filter_Result = mysqli_query($connect, $query);
	 return $filter_Result;
 }
?>


<!DOCTYPE html>
<html>
<head>
<style>
body{background-image: url("back2.jpg")}
td, th {
    text-align: center;
    padding: 8px;
}
th{
	background-color: #e9ab18;
}

tr:nth-child(even) {
    background-color: #ecb535;
}

tr:nth-child(odd) {
    background-color: #efc050;
}
</style>
<meta http-equiv= "Content-Type" content = "text/html; charset=utf-8" />
<title>Search Engine - Home</title>

</head>
<body>
<center>
<h2> Search Restuarent </h2>
<form  action="swarma.php" method= "POST">
<input type = "text"  name= "valueToSearch" placeholder= "Search your Favourite Item From Menu!"> <br><br>
<input type = "submit" name= "search"  value= "Search"> <br><br>
<table width = "600" >
<tr>

<th>Food_item</th>
<th>size</th>
<th>Price</th>
</tr>
<?php
while($row = mysqli_fetch_array($search_result)) :?>
<tr>
	<td><?php echo $row['Food_item']; ?></td>
	<td><?php echo $row['size']; ?></td>
	<td><?php echo $row['Price']; ?></td>
	</tr>
	<?php endwhile; ?>
	</table>

</form>

</center>



</body>
</html>