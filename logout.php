<?php 
	// Initialize the session
session_start();

	// Unset all of the session var
	$_SESSION = array();

	// Destroy the assion.
	session_destroy();

	// Redirect th login page
	header("Location: login.php");
	exit;
 ?>