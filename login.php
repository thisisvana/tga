<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/layouts/header.php"); ?>
<!-- <body id="login" class="cms"> -->

	<div class="row">
    <h2>Login area</h2>
		<div class="medium-6 medium-centered large-4 large-centered columns">
			<!-- Login Form -->
			<form calss="admin-form" action="loginProcess.php" method="post">
				<div class="row columns log-in-form">
					<h2 class="text-center">Login</h2>
					<label>username
						<input class="inp" type="text" name="usernamelogin" required>
					</label>
					<label>password
						<input class="inp" type="password" name="passwordlogin" required>
					</label>
					<input type="submit" class="btn" name="submit" value="Log In" >
					
				</div>
			</form>
		</div>
	</div>
    <?php require_once("includes/layouts/footer.php"); ?>
</body>
</html>
