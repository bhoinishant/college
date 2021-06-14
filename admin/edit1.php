<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$company = mysqli_real_escape_string($mysqli, $_POST['company']);
	// checking empty fields
	if(empty($name) || empty($year) || empty($score) || empty($rank)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($company)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}			
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE placement SET name='$name',company='$company' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM placement WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$company = $res['company'];
}
?>



<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form2" method="post" action="edit1.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Company</td>
				<td><textarea><input type="text" name="company" value="<?php echo $company;?>"></textarea></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

