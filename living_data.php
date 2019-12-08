<?php

$connect = mysql_connect("localhost", "root", "SpotSid101929!", "equine");

if (!connect) { die('Connection Failed: ' . mysql_error());

{ mysql_select_db(“database_name”, $connect);

$user_info = “INSERT INTO living_horses(name, breed, gender, dob, UKYCase, trained, raceOutsideUSA, ageFirstRace ) VALUES ('$_POST[name]', '$_POST[breed]', '$_POST[gender]', '$_POST[UKYCase]', '$_POST[trained]', '$_POST[raceOutsideUSA]', '$_POST[ageFirstRace]')”;

if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }

echo “Yeehaw! Your information was added, pardner.”;

mysql_close($connect); ?>
