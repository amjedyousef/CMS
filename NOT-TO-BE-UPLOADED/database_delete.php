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
	$id = 5;

	// 2  //  Query 
	// Query the database
	$query = "DELETE FROM subjects ";
	$query .= " WHERE id = {$id} ";
	$query .= " LIMIT 1" ;

	$results = mysqli_query($conn , $query);
	// To check for query is success 
	if($results && (mysqli_affected_rows($conn) > 0 )){
			echo "Record has heen deleted O_*";
	}else{
		die("Database query failed: " . mysqli_error($conn));
	}
?>



<!DOCTYPE html>
<html>
	<head>
		<title>Database</title>
	</head>
	<body>
	</pre>
	</body>
</html>

<?php
// 5 // Close
// Close the connnection
mysqli_close($conn);
?>