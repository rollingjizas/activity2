<?php

include "iwishiwasheader.php";
?>


<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="style.css">
	<title>login </title>
</head>

<body>

	<body>
		<div class="login-page">
			<div class="form">
				<div class="login">
					<div class="login-header">
						<h3>LOGIN</h3>
						<p>Information Management System - Activity 2 in ADV03.</p>
					</div>
				</div>
				<form class="login-form" form action="LOGIN.php" method="POST">
					<?php if (isset($_GET['error'])) { ?>
						<p class="error text-danger"><?php echo $_GET['error']; ?></p>
					<?php } ?>
					<input type="text" placeholder="Surname" name="surname" />
					<input type="password" placeholder="Password" name="password" />
					<button type="submit" name="submit" class="btn btn-light btn-outline-success float-middle">Submit</button>
					<p class="message">Not registered? <a href="#">Create an account</a></p>
				</form>
			</div>
		</div>
	</body>
</body>

</html>