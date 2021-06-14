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
		
		if(empty($score)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		if(empty($rank)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO users(name,year,score,rank) VALUES('$name','$year','$score','$rank')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>

</body>
</html>
