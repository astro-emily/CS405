<?php
include('session.php');
session_start();
if(!isset($_SESSION["login_user"])){
header("location: index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<div id="data_entry_selection">
<h2>Start a New Data Entry</h2>
<b id="new_form"><a href="deceased_form.html">Deceased Horse Form</a></b>
<b id="new_form"><a href="living_form.html">Living Horse Form</a></b>
<b id="new_form"><a href="form.html">Start New</a></b>
</div>
</body>
</html>

