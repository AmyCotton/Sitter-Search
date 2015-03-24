<?php require_once ("../includes/session.php"); ?>
<?php require_once ("../includes/functions.php"); ?>
<?php 
	session_destroy();
    session_start();
    $_SESSION["message"] = "You logged out.";
	redirectTo("index.php");
?>