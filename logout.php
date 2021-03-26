<?php
session_start();

session_destroy();
	unset($_SESSION['guestname']);
	unset($_SESSION['tableno']);
	unset($_SESSION['roomno']);
	header("Location: login.php");

?>