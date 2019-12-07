<?php
// This is a basic script showing how to connect to a local MySQL database
// and execute a query

// First, let's get our variables from the previous page
// remember, we stored them in a "post" variable called "professor"
$Prof_Name = $_POST["professor"];



// Now, we will create a mysqli object and connect to database
$host = 'localhost';//enter hostname
$userName = 'debian-sys-maint';//enter user name of DB
$Pass = 'SpotSid101929!'; //enter password
$DB = 'school'; //Enter database name
$mysqli = new mysqli($host, $userName,$Pass,$DB);

// Check for connection error
// If there is an error we will use $mysqli->connect_error
// to print the cause of the error
if ($mysqli->connect_errno) {
	echo "Could not connect to database \n";
	echo "Error: ". $mysqli->connect_error . "\n";
	exit;
} 
else {
	echo "Print all students in ". $Prof_Name. "'s classes: <br \>";

	// Let's write the query and store it in a variable
	$student_query = "SELECT name
		          FROM student s INNER JOIN enrolled e ON s.id = e.sid
		          WHERE e.course_id 
			  IN ( SELECT cid
			       FROM courses 
			       WHERE professor LIKE '$Prof_Name'
			     );";
        $q_result = $mysqli->query($student_query);	
	// Execute the query and check for error
	if ( !$q_result) {
		echo "Query failed: ". $mysqli->error. "\n";
		exit;
	}
	else if ($q_result->num_rows === 0) {
		echo "No students are taking a class from ". $Prof_Name. "\n";
	}
	else {
		// We will store the results of our query in an array
		// where the indices are the fields of our table for the
		// query result. Notice in our query that we only return
		// the name of the student (SELECT name). Therefore, 
		// after calling $result->fetch_assoc(), we will have
		// one index, namely $result["name"].
		echo "Here are the students taking a class from ". $Prof_Name. "<br \>";
		while ($s_names = $q_result->fetch_assoc()) {
			echo $s_names["name"]. "<br \>";
		}
	}
}
?> 
