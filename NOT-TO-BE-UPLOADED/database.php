<?php
// 1 // Connect
//  Attempt to connect
	define(DOMAIN, "generalCMS.db.10216924.hostedresource.com");
	define(USERNAME, "generalCMS");
	define(PASSWORD, "Now1@old1");
	define(DATABASE, "generalCMS");
	$conn = mysqli_connect(DOMAIN , USERNAME, PASSWORD, DATABASE);

// Test the connection
if(mysqli_connect_errno() ){
	die(
			"Database connection error: ". mysqli_connect_error() . "( " . mysqli_connect_errno() ." )" 
		);
}
?>
<?php
	// 2  //  Query 
	// Query the database
	$query = "SELECT * FROM subjects";
	$query .= " WHERE visible = 1 ";
	$query .=" ORDER BY id ASC ";
	$results = mysqli_query($conn , $query);
	// To check for query error 
	if(!$results){
		die("Database query failed!");
	}
?>



<!DOCTYPE html>
<html>
	<head>
		<title>Database</title>
	</head>
	<body>
		<h2>Connection is successful!</h2> 
		<ul>

<?php
	// 3 // USE
	// Output the results
	while($subject = mysqli_fetch_assoc($results) ){
		echo "<li> " .$subject['menu_name'] . "(". $subject['id']. ") </li>";
	}

?>
	</ul>
	</pre>
	</body>
</html>

<?php
// 4 // Release
// Release the data
mysqli_free_result($results);
// 5 // Close
// Close the connnection
mysqli_close($conn);
?>