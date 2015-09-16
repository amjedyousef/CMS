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
	$menu_name = "Delete me ";
	$position = 4;
	$visible = 1;
	$id = 5;

	// 2  //  Query 
	// Query the database
	$query = "UPDATE  subjects SET ";
	$query .= " menu_name = '{$menu_name}', ";
	$query .= " position =  {$position}, ";
	$query .= " visible =  {$visible} ";
	$query .= " WHERE id = {$id}";

	$results = mysqli_query($conn , $query);
	// To check for query is success 
	if($results){
			echo "Record has heen updated O_*";
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