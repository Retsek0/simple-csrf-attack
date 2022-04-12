<?php
session_start();
if (isset($_POST["email"]) and $_POST["email"] != "") {
	$_SESSION["email"] = $_POST["email"];
}
header("Location: /index.php");
exit();
?>