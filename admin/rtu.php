
<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<h3>Gate</h3>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
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
			echo "<font color='red'>yName field is empty.</font><br/>";
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
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO rtu(name,convo,year,list,percent) VALUES('$name','$convo','$year','$list','$percent')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>

</body>
</html>