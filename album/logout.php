<?php
	error_reporting(0);
	session_start();
	
	unset($_session['aname']);
	unset($_session['apassword']);
	
	session_destroy();
	echo "<script>";
	echo "window.location='../carousel/index.php';";
	echo "</script>";
?>