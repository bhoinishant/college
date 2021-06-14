<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$convo = mysqli_real_escape_string($mysqli, $_POST['convo']);
	$year = mysqli_real_escape_string($mysqli, $_POST['year']);
	$list = mysqli_real_escape_string($mysqli, $_POST['list']);	
	$percent = mysqli_real_escape_string($mysqli, $_POST['percent']);
	// checking empty fields
	if(empty($name) || empty($convo) || empty($year) || empty($list) || empty($percent)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if(empty($convo)) {
			echo "<font color='red'> field is empty.</font><br/>";
		}
		if(empty($year)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($list)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}	
		if(empty($percent)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}			
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE rtu SET name='$name',convo='$convo',year='$year',list='$list',percent='$percent' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM rtu WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$convo = $res['convo'];
	$year = $res['year'];
	$list = $res['list'];
	$percent = $res['percent'];
}
?>



<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form  method="post" action="edit3.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Convocation</td>
				<td><input type="text" name="convo" value="<?php echo $convo;?>"></td>
			</tr>
			<tr> 
				<td>Year</td>
				<td><input type="text" name="company" value="<?php echo $year;?>"></td>
			</tr>
			<tr> 
				<td>RTU List</td>
				<td><input type="text" name="company" value="<?php echo $list;?>"></td>
			</tr>
			<tr> 
				<td>Rank</td>
				<td><input type="text" name="company" value="<?php echo $percent;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

