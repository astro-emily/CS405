<html>
<body>
<?php

$connect = mysqli_connect("localhost", "root", "SpotSid101929!", "equine");

if (!($connect)) {
        die('Connection Failed: ' . mysqli_error());
}
$name = mysqli_real_escape_string($connect,$_POST['name']);
$breed = mysqli_real_escape_string($connect,$_POST['breed']);
$gender = mysqli_real_escape_string($connect,$_POST['gender']);
$dob = mysqli_real_escape_string($connect,$_POST['dob']);
$UKYCase = mysqli_real_escape_string($connect,$_POST['UKYCase']);
$trained = mysqli_real_escape_string($connect,$_POST['trained']);
$raceOutsideUSA = mysqli_real_escape_string($connect,$_POST['raceOutsideUSA']);
$ageFirstRace = mysqli_real_escape_string($connect,$_POST['ageFirstRace']);

$user_info = "INSERT INTO living_horses(name, breed, gender, dob, UKYCase, trained, raceOutsideUSA, ageFirstRace ) VALUES ('$name', '$breed', '$gender', '$dob', '$UKYCase', '$trained', '$raceOutsideUSA', '$ageFirstRace')";

if (!mysqli_query($connect, $user_info)) {
        die("Error: " . mysqli_error($connect));
}

echo "Yeehaw! Your information was added, pardner.";

mysqli_close($connect); ?>
</html>
</body>
