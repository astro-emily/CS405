<?php
include('session.php');
session_start();
// Destroying All Sessions {
unset($_SESSION['login_user']);
if(!isset($_SESSION["login_user"])){
header("location: index.php"); // Redirecting To Home Page
}
?>
