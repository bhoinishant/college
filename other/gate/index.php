<?php
//including the database connection file
include_once("../admin/config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id "); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>
<style>
	td{
		text-align: center;
		width: 100px;
	}
</style>
<body>

	<table width='80%' border='3' bgcolor="#00EEFF" align="center">

	<tr bgcolor='#CCCCCC'>
		<td>Sl.No</td>
		<td>Name</td>
		<td>Year</td>
		<td>Score</td>
		<td>All India Rank</td>

	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['year']."</td>";
		echo "<td>".$res['score']."</td>";	
		echo "<td>".$res['rank']."</td>";
		
	}
	?>
	</table>
</body>
</html>
