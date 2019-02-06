<?php
 if(isset($_POST['search']))
 {
	 $valueToSearch =  $_POST['valueToSearch'];
	
	 $query = "SELECT * FROM tarka WHERE  CONCAT(Food_item, size, Price) LIKE '%".$valueToSearch."%'";
	 $search_result = filterTable($query);

	 
 }else 
 { 
	 $query = "SELECT * FROM tarka";
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
	   margin:5px 7px;
}
th{
	background-color: #f2cd75;
}

tr:nth-child(even) {
    background-color: #f5d997;
}

tr:nth-child(odd) {
    background-color: #fcf2dc;
}
.search-box {
    width:375px;
    height:32px;
    background-color:#fff;
    margin:5px 7px;
    border:1px solid #cfcfcf;
    -moz-border-radius: 5px; /* FF1+ */
    -webkit-border-radius: 5px; /* Saf3-4 */
    border-radius: 5px; /* Opera 10.5, IE 9, Saf5, Chrome */
    position:relative;
}
.search-box img.search-icon {
    margin:8px 0 0 5px;
}
.search-box input {
    border:none;
    height:30px;
    width:332px;
    margin:0;
    position:absolute;
    font-size:16px;
    padding-left:5px;
    padding-right:5px;
}
</style>
<meta http-equiv= "Content-Type" content = "text/html; charset=utf-8" />
<title>Search Engine - Home</title>

</head>
<body>
<center>
<h2> Search Restuarent </h2>
<form  action="tarka.php" method= "POST">
<div class = "search-box">
<img class = "search-icon" src = "search.png" style="width:21px;height:18px"/>
<input type = "text"  name= "valueToSearch" placeholder= "Search your Favourite Item  From Menu! "><br><br>
</div>
<input type = "submit" name= "search"  value="SEARCH"> <br><br>
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