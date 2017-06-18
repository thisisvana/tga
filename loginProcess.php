<?php session_start(); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/layouts/header.php"); ?>

<?php
	
	if(isset($_POST['usernamelogin']) AND isset($_POST['passwordlogin'])){
		// Connect to Database
		// include("db_connection.php");
		// if(!$dbconfig){
		// 	echo "Connection Failed";
		// }
		// else {
			// Recieved Login Information
			$username = mysqli_real_escape_string($connection,$_POST['usernamelogin']);
			$password = mysqli_real_escape_string($connection,$_POST['passwordlogin']);
			$queryLog = "SELECT id FROM user_tb WHERE username='$username' and password='$password'";
			$resultLog = mysqli_query($connection,$queryLog);
			$row = mysqli_fetch_array($resultLog, MYSQLI_ASSOC);
			$count=mysqli_num_rows($resultLog);
			// If username and password match and exist
			if($count == 1){
				$_SESSION['login_user'] = $username;
				echo "<script>location.replace('admin.php')</script>";
			}
			else {
				$error = "Username or Password is invalid";
			}
		// }
	}
?>
  <?php require_once("includes/layouts/footer.php"); ?>
