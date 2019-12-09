<html>
<body>
<?php

$connect = mysqli_connect("localhost", "root", "SpotSid101929!", "equine");

if (!($connect)) {
        die('Connection Failed: ' . mysqli_error());

$RRCase = mysqli_real_escape_string($connect,$_POST['RRCase']);
$date_of_euthansia = mysqli_real_escape_string($connect,$_POST['date_of_euthansia']);
$leg = mysqli_real_escape_string($connect,$_POST['leg']);
$density_included = mysqli_real_escape_string($connect,$_POST['density_included']);
$distal_radius = mysqli_real_escape_string($connect,$_POST['distal_radius']);
$distal_radius_dorsomedial = mysqli_real_escape_string($connect,$_POST['distal_radius_dorsomedial']);
$distal_radius_dorsolateral = mysqli_real_escape_string($connect,$_POST['distal_radius_dorsolateral']);
$distal_radius_palmar = mysqli_real_escape_string($connect,$_POST['distal_radius_palmar']);
$radiocarpal_bone = mysqli_real_escape_string($connect,$_POST['radiocarpal_bone']);
$radiocarpal_bone_proximal_medial = mysqli_real_escape_string($connect,$_POST['radiocarpal_bone_proximal_medial']);
$radiocarpal_bone_proximal_lateral = mysqli_real_escape_string($connect,$_POST['radiocarpal_bone_proximal_lateral']);
$radiocarpal_bone_distal_medial = mysqli_real_escape_string($connect,$_POST['radiocarpal_bone_distal_medial']);
$radiocarpal_bone_distal_lateral = mysqli_real_escape_string($connect,$_POST['radiocarpal_bone_distal_lateral']);
$metacarpal_3 = mysqli_real_escape_string($connect,$_POST['metacarpal_3']);
$metacarpal_3_proximal = mysqli_real_escape_string($connect,$_POST['metacarpal_3_proximal']);
$metacarpal_3_proximal_dorsal = mysqli_real_escape_string($connect,$_POST['metacarpal_3_proximal_dorsal']);
$metacarpal_3_proximal_palmar = mysqli_real_escape_string($connect,$_POST['metacarpal_3_proximal_palmar']);
$metacarpal_3_diaphysis = mysqli_real_escape_string($connect,$_POST['metacarpal_3_diaphysis']);
$metacarpal_3_diaphysis_dorsal = mysqli_real_escape_string($connect,$_POST['metacarpal_3_diaphysis_dorsal']);
$metacarpal_3_diaphysis_palmar = mysqli_real_escape_string($connect,$_POST['metacarpal_3_diaphysis_palmar']);
$metacarpal_3_distal = mysqli_real_escape_string($connect,$_POST['metacarpal_3_distal']);
$metacarpal_3_distal_dorsal_medial = mysqli_real_escape_string($connect,$_POST['metacarpal_3_distal_dorsal_medial']);
$metacarpal_3_distal_dorsal_lateral = mysqli_real_escape_string($connect,$_POST['metacarpal_3_distal_dorsal_lateral']);
$metacarpal_3_distal_dorsal_sagittal_ridge = mysqli_real_escape_string($connect,$_POST['metacarpal_3_distal_dorsal_sagittal_ridge']);
$metacarpal_3_distal_palmar_medial = mysqli_real_escape_string($connect,$_POST['metacarpal_3_distal_palmar_medial']);
$metacarpal_3_distal_palmar_lateral = mysqli_real_escape_string($connect,$_POST['metacarpal_3_distal_palmar_lateral']);
$metacarpal_3_distal_palmar_sagittal_ridge = mysqli_real_escape_string($connect,$_POST['metacarpal_3_distal_palmar_sagittal_ridge']);
$medial_sesamoid = mysqli_real_escape_string($connect,$_POST['medial_sesamoid']);
$medial_sesamoid_apical_articular = mysqli_real_escape_string($connect,$_POST['medial_sesamoid_apical_articular']);
$medial_sesamoid_apical_non_Articular = mysqli_real_escape_string($connect,$_POST['medial_sesamoid_apical_non_Articular']);
$medial_sesamoid_midbody_articular = mysqli_real_escape_string($connect,$_POST['medial_sesamoid_midbody_articular']);
$medial_sesamoid_base_articular = mysqli_real_escape_string($connect,$_POST['medial_sesamoid_base_articular']);
$medial_sesamoid_base_non_articular = mysqli_real_escape_string($connect,$_POST['medial_sesamoid_base_non_articular']);
$medial_sesamoid_axial_articular = mysqli_real_escape_string($connect,$_POST['medial_sesamoid_axial_articular']);
$medial_sesamoid_axial_non_articular = mysqli_real_escape_string($connect,$_POST['medial_sesamoid_axial_non_articular']);

$user_info = "INSERT INTO living_horses(RRCase, date_of_euthansia, leg, density_included, distal_radius, distal_radius_dorsomedial,distal_radius_dorsolateral, distal_radius_palmar, radiocarpal_bone, radiocarpal_bone_proximal_medial, radiocarpal_bone_proximal_lateral, radiocarpal_bone_distal_medial, radiocarpal_bone_distal_lateral, metacarpal_3, metacarpal_3_proximal, metacarpal_3_proximal_dorsal, metacarpal_3_proximal_palmar, metacarpal_3_diaphysis, metacarpal_3_diaphysis_dorsal, metacarpal_3_diaphysis_palmar, metacarpal_3_distal, metacarpal_3_distal_dorsal_medial, metacarpal_3_distal_dorsal_lateral, metacarpal_3_distal_dorsal_sagittal_ridge, metacarpal_3_distal_palmar_medial, metacarpal_3_distal_palmar_lateral, metacarpal_3_distal_palmar_sagittal_ridge, medial_sesamoid, medial_sesamoid_apical_articular, medial_sesamoid_apical_non_Articular, medial_sesamoid_midbody_articular, medial_sesamoid_base_articular, medial_sesamoid_base_non_articular, medial_sesamoid_axial_articular, medial_sesamoid_axial_non_articular) VALUES ('$RRCase', '$date_of_euthansia', '$leg', '$density_included', '$distal_radius', '$distal_radius_dorsomedial', '$distal_radius_dorsolateral', '$distal_radius_palmar', '$radiocarpal_bone', '$radiocarpal_bone_proximal_medial', '$radiocarpal_bone_proximal_lateral', '$radiocarpal_bone_distal_medial', '$radiocarpal_bone_distal_lateral', '$metacarpal_3', '$metacarpal_3_proximal', '$metacarpal_3_proximal_dorsal', '$metacarpal_3_proximal_palmar', '$metacarpal_3_diaphysis', '$metacarpal_3_diaphysis_dorsal', '$metacarpal_3_diaphysis_palmar', '$metacarpal_3_distal', '$metacarpal_3_distal_dorsal_medial', '$metacarpal_3_distal_dorsal_lateral', '$metacarpal_3_distal_dorsal_sagittal_ridge', '$metacarpal_3_distal_palmar_medial', '$metacarpal_3_distal_palmar_lateral', '$metacarpal_3_distal_palmar_sagittal_ridge', '$medial_sesamoid', '$medial_sesamoid_apical_articular', '$medial_sesamoid_apical_non_Articular', '$medial_sesamoid_midbody_articular', '$medial_sesamoid_base_articular', '$medial_sesamoid_base_non_articular', '$medial_sesamoid_axial_articular', '$medial_sesamoid_axial_non_articular')";

if (!mysqli_query($connect, $user_info)) {
        die("Error: " . mysqli_error($connect));
}
echo "Yeehaw! Your information was added, pardner.";

mysqli_close($connect);
?>

</body>
</html>

