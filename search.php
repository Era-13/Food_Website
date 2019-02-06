<?php
 if(isset($_POST['search']))
 {
	 $valueToSearch =  $_POST['valueToSearch'];
	
	 $query = "SELECT * FROM new1 WHERE CONCAT(SL_No., Test_Name, Status)LIKE '%".$valueToSearch."%'";
	 $search_result = filterTable($query);

	 
 }else 
 { 
	 $query = "SELECT * FROM new1";
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
.search-box 
   input[type= "submit"]{
	width: 100px;
	height:35px;
	border:0;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	background-color: #F5B041; 
	font-weight: bolder; 
}
table{
	margin-top: 3cm;
}
td, th {
    text-align: center;
    padding: 5px;
	margin-left:300px;
}
th{
	background-color: #f2cd75;
}

tr:nth-child(even) {
    background-color: #f5d997;
}

tr:nth-child(odd) {
    background-color: #fcf2dc ;
}
</style>
<meta http-equiv= "Content-Type" content = "text/html; charset=utf-8" />
<title>Search Engine - Home</title>

</head>
<body>
<center>
<h2> Search Restuarent </h2>
<div class = "search-box">
<form  action="search.php" method= "POST">

<img class = "search-icon" src = "search.png" style="width:21px;height:18px"/>
<input type = "text"  name= "valueToSearch" placeholder= "Restuarent to Search"><br><br>
<input type = "submit" name= "search"  value= "Search"><br><br>
</form>

</div>
<table width = 100%>
<tr>

<th>SL_No.</th>
<th>Test_Name</th>
<th> Status </th>


</tr>
<?php
while($row = mysqli_fetch_array($search_result)) :?>
<tr>
	<td><?php echo $row['SL_No.']; ?></td>
	<td><?php echo $row['Test_Name']; ?></td>
	<td><?php echo $row['Status']; ?></td>
	</tr>
	<?php endwhile; ?>
	</table>

</form>

</center>



</body>
</html>