<?php

$connect = mysql_connect("localhost", "root", "SpotSid101929!", "equine");

if (!connect) { die('Connection Failed: ' . mysql_error());

{ mysql_select_db(“database_name”, $connect);

$user_info = “INSERT INTO deceased_horses(DOB, name) VALUES ('$_POST[DOB]', '$_POST[name]')”;

if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }

echo “Yeehaw! Your information was added, pardner.”;

mysql_close($connect); ?>
