<?php 
	if (isset($_SESSION['message']) && isset($_SESSION['surname'])) :
?>	

	<div class="alert alert-primary alert-dismissible fade show d-inline" role="alert">
		<strong>ERROR: </strong><?= $_SESSION['surname']; ?> ,<?= $_SESSION['message']; ?>

	</div>

<?php 
	unset($_SESSION['message']);
	endif;
?> 
