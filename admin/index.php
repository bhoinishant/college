<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id "); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
	<h1>Gate Result</h1>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Sl.No</td>
		<td>Name</td>
		<td>Year</td>
		<td>Score</td>
		<td>All India Rank</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['year']."</td>";
		echo "<td>".$res['score']."</td>";	
		echo "<td>".$res['rank']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>

<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM placement ORDER BY id "); // using mysqli_query instead
?>
<div style="width: 50%; float: left;">
	<h1>Placement</h1>
	<a href="add2.html">Add New Data</a><br/><br/>

	<table width='80%' border='2'>

	<tr bgcolor='#CCCCCC'>
		
		<td>Name</td>
		<td>Company</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['company']."</td>";
		echo "<td><a href=\"edit1.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
	</div>

	<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM rtu ORDER BY id "); // using mysqli_query instead
?>

<div style="width: 50%; float: right;">
	<h1>RTU Merit List</h1>
	<a href="rtu.html">Add New Data</a><br/><br/>

	<table width='80%' border='2'>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
    <td>Convocation</td>
    <td>Year</td>
    <td>RTU Merit</td>
    <td>Percentage(%)</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		 echo "<tr>";
    echo "<td>".$res['name']."</td>";
    echo "<td>".$res['convo']."</td>";
    echo "<td>".$res['year']."</td>";
    echo "<td>".$res['list']."</td>";  
    echo "<td>".$res['percent']."</td>";
		echo "<td><a href=\"edit3.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
	</div>
</body>
</html>
