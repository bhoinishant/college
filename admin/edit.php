<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$year = mysqli_real_escape_string($mysqli, $_POST['year']);
	$score = mysqli_real_escape_string($mysqli, $_POST['score']);	
	$rank = mysqli_real_escape_string($mysqli, $_POST['rank']);
	// checking empty fields
	if(empty($name) || empty($year) || empty($score) || empty($rank)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($year)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($rank)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}	
		if(empty($score)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}			
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE users SET name='$name',year='$year',score='$score',rank='$rank' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$year = $res['year'];
	$score = $res['score'];
	$rank = $res['rank'];
}
?>



<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form2" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Year</td>
				<td><input type="text" name="company" value="<?php echo $year;?>"></td>
			</tr>
			<tr> 
				<td>Score</td>
				<td><input type="text" name="company" value="<?php echo $score;?>"></td>
			</tr>
			<tr> 
				<td>Rank</td>
				<td><input type="text" name="company" value="<?php echo $rank;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

