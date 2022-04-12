 <?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
if (!isset($_SESSION["email"])) {
	$_SESSION["email"] = "victim@example.com";
}
echo "Your email is " . $_SESSION['email'];
?>
<form id="changeEmail" action="/change-email.php" method="post">
	<label>New Email Address:</label>
	<input name="email" type="string">
	<input type="submit" value="Change Email">
</form>

</body>
</html> 
