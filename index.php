<?php 

include "iwishiwasheader.php";
?>
<body>
		<form action="LOGIN.php" method="POST"><br><br><br><br><br><br><br><br>
			<div class="container text-center border border-5"><br>
			<div class="h4 pb-2 mb-4 text-dark border-bottom border-success">Information Management System - Activity 2 in ADV03</div>
			<div></div>
			<?php if (isset($_GET['error'])) { ?>
					<p class="error text-danger"><?php echo $_GET['error']; ?></p>
			<?php }?>
			<label>Surname: </label>
			<input type="text" name="surname" placeholder="surname"><br><br>
			<label>Password: </label>
			<input type="password" name="password" placeholder="password"><br><br>
			<button type="submit" name="submit" class="btn btn-light btn-outline-success float-middle">Submit</button>
			<div class="h4 pb-2 mb-4 text-dark border-bottom border-success"></div><br>
			</div>
		</form>

</body>
</html>
