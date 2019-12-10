<?php
  $q=$_GET["q"];
  $dbuser="root";
  $dbname="equine";
  $dbpass="SpotSid101929!";
  $dbserver="localhost";

  $sql_query = "SELECT * FROM deceased_horses;"

  $con = mysql_connect($dbserver,$dbuser,$dbpass);
  if (!$con){ die('Could not connect: ' . mysql_error()); }
  mysql_select_db($dbname, $con);
  $result = mysql_query($sql_query);

  echo "{ \"cols\": [ {\"id\":\"\",\"label\":\"Name\",\"pattern\":\"\",\"type\":\"number\"}, {\"id\":\"\",\"label\":\"Breed\",\"pattern\":\"\",\"type\":\"number\"}, {\"id\":\"\",\"label\":\"Gender\",\"pattern\":\"\",\"type\":\"number\"}, {\"id\":\"\",\"label\":\"DOB\",\"pattern\":\"\",\"type\":\"number\"}, {\"id\":\"\",\"label\":\"UKYCase\",\"pattern\":\"\",\"type\":\"number\"},{\"id\":\"\",\"label\":\"RRCase\",\"pattern\":\"\",\"type\":\"number\"},{\"id\":\"\",\"label\":\"Trained\",\"pattern\":\"\",\"type\":\"number\"}, {\"id\":\"\",\"label\":\"RaceOutsideUSA\",\"pattern\":\"\",\"type\":\"number\"},{\"id\":\"\",\"label\":\"AgeFirstRace\",\"pattern\":\"\",\"type\":\"number\"} ], \"rows\": [ ";

  $total_rows = mysql_num_rows($result);
  while($row = mysql_fetch_array($result)){
    echo "{\"c\":[{\"v\":\"" . $row['Name'] . "\",\"f\":null},{\"v\":\"" . $row['Breed'] . "\",\"f\":null},{\"v\":\"" . $row['Gender'] . "\",\"f\":null},{\"v\":\"" . $row['DOB'] . "\",\"f\":null},{\"v\":\"" . $row['UKYCase'] . "\",\"f\":null},{\"v\":\"" . $row['RRCase'] . "\",\"f\":null},{\"v\":\"" . $row['Trained'] . "\",\"f\":null},{\"v\":\"" . $row['RaceOutsideUSA'] . "\",\"f\":null},{\"v\":\"" . $row['AgeFirstRace'] . "\",\"f\":null}]}";
  }

  echo " ] }";
  mysql_close($con);
?>
