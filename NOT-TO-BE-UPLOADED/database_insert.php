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
	$menu_name = "Menu's voor vandaag! ";
	$position = (int) 4 ;
	$visible = (int) 1;

	// Only for strings
	$menu_name = mysqli_real_escape_string($conn , $menu_name);

	// 2  //  Query 
	// Query the database
	$query = "INSERT INTO  subjects";
	$query .= "(menu_name , position , visible)";
	$query .= "VALUES ('{$menu_name}' , '{$position}' , '{$visible}')";
	$results = mysqli_query($conn , $query);
	// To check for query is success 
	if($results){
			echo "Record has heen added O_*";
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