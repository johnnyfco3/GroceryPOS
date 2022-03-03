
	<?php
	session_start();
	session_destroy();
	header('Location: sale.php');
	exit();
	?>
