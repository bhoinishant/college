<html>
<head>
	<title>Add Data</title>
</head>

<body>
<a href="add2.html">Add New Data</a><br/><br/>
<h3>Placement</h3>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$company = mysqli_real_escape_string($mysqli, $_POST['company']);
		
	// checking empty fields
	if(empty($name) || empty($company)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($company)) {
			echo "<font color='red'>Company field is empty.</font><br/>";
		}		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO placement(name,company) VALUES('$name','$company')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>