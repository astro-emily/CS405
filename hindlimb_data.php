<html>
<body>
<?php

$connect = mysqli_connect("localhost", "root", "SpotSid101929!", "equine");

if (!($connect)) {
        die('Connection Failed: ' . mysqli_error());
	
$metatarsal_3_proximal = mysqli_real_escape_string($connect,$_POST['metatarsal_3_proximal']);
$metatarsal_3_proximal_dorsal = mysqli_real_escape_string($connect,$_POST['metatarsal_3_proximal_dorsal']);
$metatarsal_3_proximal_palmar = mysqli_real_escape_string($connect,$_POST['metatarsal_3_proximal_palmar']);
$metatarsal_3_diaphysis = mysqli_real_escape_string($connect,$_POST['metatarsal_3_diaphysis']);
$metatarsal_3_diaphysis_dorsal = mysqli_real_escape_string($connect,$_POST['metatarsal_3_diaphysis_dorsal']);
$metatarsal_3_diaphysis_palmar = mysqli_real_escape_string($connect,$_POST['metatarsal_3_diaphysis_palmar']);
$metatarsal_3_distal = mysqli_real_escape_string($connect,$_POST['metatarsal_3_distal']);
$metatarsal_3_distal_dorsal_medial = mysqli_real_escape_string($connect,$_POST['metatarsal_3_distal_dorsal_medial']);
$metatarsal_3_distal_dorsal_lateral = mysqli_real_escape_string($connect,$_POST['metatarsal_3_distal_dorsal_lateral']);
$metatarsal_3_distal_dorsal_sagittal_ridge = mysqli_real_escape_string($connect,$_POST['metatarsal_3_distal_dorsal_sagittal_ridge']);
$metatarsal_3_distal_palmar_medial = mysqli_real_escape_string($connect,$_POST['metatarsal_3_distal_palmar_medial']);
$metatarsal_3_distal_palmar_lateral = mysqli_real_escape_string($connect,$_POST['metatarsal_3_distal_palmar_lateral']);
$metatarsal_3_distal_palmar_sagittal_ridge = mysqli_real_escape_string($connect,$_POST['metatarsal_3_distal_palmar_sagittal_ridge']);
$medial_sesamoid = mysqli_real_escape_string($connect,$_POST['medial_sesamoid']);
$medial_sesamoid_apical_articular = mysqli_real_escape_string($connect,$_POST['medial_sesamoid_apical_articular']);
$medial_sesamoid_apical_non_Articular = mysqli_real_escape_string($connect,$_POST['medial_sesamoid_apical_non_Articular']);
$medial_sesamoid_midbody_articular = mysqli_real_escape_string($connect,$_POST['medial_sesamoid_midbody_articular']);
$medial_sesamoid_midbody_non_articular = mysqli_real_escape_string($connect,$_POST['medial_sesamoid_midbody_non_articular']);
$medial_sesamoid_base_articular = mysqli_real_escape_string($connect,$_POST['medial_sesamoid_base_articular']);
$medial_sesamoid_base_non_articular = mysqli_real_escape_string($connect,$_POST['medial_sesamoid_base_non_articular']);
$medial_sesamoid_axial_articular = mysqli_real_escape_string($connect,$_POST['medial_sesamoid_axial_articular']);
$medial_sesamoid_axial_non_articular = mysqli_real_escape_string($connect,$_POST['medial_sesamoid_axial_non_articular']);

$user_info = "INSERT INTO living_horses(RRCase, date_of_euthansia, leg, density_included, distal_tibia, distal_tibia_dorsomedial,distal_tibia_dorsolateral, distal_tibia_palmar, central_tarsal, central_tarsal_dorsal, central_tarsal_plantar, central_tarsal_proximal, central_tarsal_distal, metatarsal_3, metatarsal_3_proximal, metatarsal_3_proximal_dorsal, metatarsal_3_proximal_palmar, metatarsal_3_diaphysis, metatarsal_3_diaphysis_dorsal, metatarsal_3_diaphysis_palmar, metatarsal_3_distal, metatarsal_3_distal_dorsal_medial, metatarsal_3_distal_dorsal_lateral, metatarsal_3_distal_dorsal_sagittal_ridge, metatarsal_3_distal_palmar_medial, metatarsal_3_distal_palmar_lateral, metatarsal_3_distal_palmar_sagittal_ridge, medial_sesamoid, medial_sesamoid_apical_articular, medial_sesamoid_apical_non_Articular, medial_sesamoid_midbody_articular, medial_sesamoid_midbody_non_articular, medial_sesamoid_base_articular, medial_sesamoid_base_non_articular, medial_sesamoid_axial_articular, medial_sesamoid_axial_non_articular) VALUES ('$RRCase', '$date_of_euthansia', '$leg', '$density_included', '$distal_tibia', '$distal_tibia_dorsomedial', '$distal_tibia_dorsolateral', '$distal_tibia_palmar', '$central_tarsal', '$central_tarsal_dorsal', '$central_tarsal_plantar', '$central_tarsal_proximal', '$central_tarsal_distal', '$metatarsal_3', '$metatarsal_3_proximal', '$metatarsal_3_proximal_dorsal', '$metatarsal_3_proximal_palmar', '$metatarsal_3_diaphysis', '$metatarsal_3_diaphysis_dorsal', '$metatarsal_3_diaphysis_palmar', '$metatarsal_3_distal', '$metatarsal_3_distal_dorsal_medial', '$metatarsal_3_distal_dorsal_lateral', '$metatarsal_3_distal_dorsal_sagittal_ridge', '$metatarsal_3_distal_palmar_medial', '$metatarsal_3_distal_palmar_lateral', '$metatarsal_3_distal_palmar_sagittal_ridge', '$medial_sesamoid', '$medial_sesamoid_apical_articular', '$medial_sesamoid_apical_non_Articular', '$medial_sesamoid_midbody_articular', '$medial_sesamoid_midbody_non_articular', '$medial_sesamoid_base_articular', '$medial_sesamoid_base_non_articular', '$medial_sesamoid_axial_articular', '$medial_sesamoid_axial_non_articular')";

if (!mysqli_query($connect, $user_info)) {
        die("Error: " . mysqli_error($connect));
}
echo "Yeehaw! Your information was added, pardner.";

mysqli_close($connect);
?>
</body>
</html>
